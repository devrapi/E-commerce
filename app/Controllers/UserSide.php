<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\ProductModel;



class UserSide extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index(): string
    {   
        
        $model = new UsersModel();
        $userdata = $users = $model->findAll();
        $logged_userID = session()->get('loggedUser');
        $userInfo = $model->find($logged_userID);
        $data = [
            'title' => 'UserSide', 
            'userInfo' => $userInfo 
           
        ];


        $product = new ProductModel();
        $productData = $products = $product->where('category_id', 31)->findAll();

        return view('UserSide/index'  ,compact('products','users') , $data); ;

    }
    public function profile(): string
    {
        $model = new UsersModel();
        $logged_userID = session()->get('loggedUser');
        $userInfo = $model->find($logged_userID);
        $data = [
            'title' => 'Profile', 
            'userInfo' => $userInfo 
        ];

        return view('UserSide/profile' , $data);
    }
    public function shop(): string
    {

        $product = new ProductModel();
        $productData = $products = $product->where('category_id', 31)->findAll();

        return view('UserSide/shop' ,compact('products'));
    }
    public function details($id): string
    {   
        $product = new ProductModel();
        $data ['product'] = $product->where('id', $id)->first($id);
       
        
        return view('UserSide/productDetails' , $data,);
    }
    

    
    public function payment(): string
    {
        return view('UserSide/payment');
    }
}
