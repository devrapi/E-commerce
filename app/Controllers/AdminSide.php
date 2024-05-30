<?php

namespace App\Controllers;
use App\Models\UsersModel;;
use App\Models\CategoryModel;
use App\Models\ProductModel;


class AdminSide extends BaseController
{
    public function __construct()
    {
        helper([ 'url', 'admin']);   
    }
   
    public function tables()
    {
        $user = new UsersModel();
        $userData = $users = $user->findAll();

        return view('adminSide/tables' , compact('users'));
    }
    public function categories(): string
    {
        return view('adminSide/categories');
    }
    public function categoryAdd()
    {
        $insertCategory = new CategoryModel();
        
        $data = [
            'name' => $this->request->getPost('categoryname'),
            'description' => $this->request->getPost('description'),
        ];

                // Insert the category
                $insertResult = $insertCategory->insert($data);

                if ($insertResult) {
                    // Category inserted successfully
                    $session = session();
                    $session->setFlashdata('success', 'Category added successfully!');
                    return view('adminSide/categories');
                } else {
                    // There was an error during insertion
                    return redirect('/adminSide/categories')->with('error', 'Failed to add category. Please try again.');
}
      
    }
    public function product()
    {
        $product = new ProductModel();
        $productData = $products = $product->findAll();
        return view('adminSide/product', compact('products'));
    }
    public function productAdd()
    {
        $category = new CategoryModel();
        $categoryData = $categories = $category->findAll();
        
        return view('adminSide/addProduct',  compact('categories'));

     
    }
    public function productSave()
    {

       
        $inserproduct = new ProductModel();
        $categoriess = new CategoryModel();
        
        if($img = $this->request->getFile('image')){
            if($img->isValid() && !$img->hasMoved()){
                $imageName = $img->getRandomName();
                $img->move('./public/uploads/', $imageName);
            }
        }


        $data = [
            'product_name' => $this->request->getPost('productname'),
            'price' => $this->request->getPost('price'),
            'description' => $this->request->getPost('description'),
            'stock' => $this->request->getPost('quantity'),
            'image' => $imageName,
            'category_id' => $this->request->getPost('category'),
            'category_name' => $this->request->getPost('categoryName'),
           
        ];

        $categoryId = $data['category_id'];

        $categoryExists = $categoriess->where('category_id', $categoryId)->first();
       
    
        if ($categoryExists !== null )  {
            $inserproduct->insert($data);

            $categoryData = $categories = $categoriess->findAll();

            $session = session();
            $session->setFlashdata('success', 'Product added successfully!');
        
            return view('adminSide/addProduct',  compact('categories'));
          
            
        }else{
           echo "category not found";
        }
    
 
       

    }
    public function orders()
    {

        return view('adminSide/order');
    }
    public function customers()
    {
        return view('adminSide/customer');
    }
    

}
