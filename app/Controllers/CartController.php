<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Libraries\Cart;

class CartController extends BaseController
{
    protected $cart;
    protected $session;

    public function __construct()
    {
        $this->session = session();
        $this->cart = new Cart();
    }

    public function index()
    {
        $userId = $this->session->get('loggedUser');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in to view your cart.');
        }

        $cartItems = $this->cart->getCart($userId);

        $data['cartItems'] = $cartItems;
        $data['total'] = $this->cart->getTotal($userId);
        $data['totalItems'] = $this->cart->getTotalItems($userId);

        return view('UserSide/cart', $data);
    }

    public function add($id, $qty = 1)
    {
        $userId = $this->session->get('loggedUser');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in to add items to your cart.');
        }

        $productModel = new ProductModel();
        $product = $productModel->find($id);

        if (!$product) {
            return redirect()->to('UserSide/details/' . $id)->with('error', 'Product not found');
        }

        $item = [
            'id' => $product['id'],
            'name' => $product['product_name'],
            'category' => $product['category_name'],
            'price' => $product['price'],
            'qty' => $qty,
            'image' => $product['image']
        ];

        $this->cart->addItem($userId, $item);

        return redirect()->to('UserSide/details/' . $id)->with('success', 'Product added to cart');
    }

    public function update($id, $qty)
    {
         $userId = $this->session->get('loggedUser');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in to update your cart.');
        }

        $this->cart->updateItem($userId, $id, $qty);

        return redirect()->to('UserSide/cart')->with('success', 'Cart updated');
    }

    public function delete($id)
    { $userId = $this->session->get('loggedUser');
        
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in to remove items from your cart.');
        }

        $this->cart->removeItem($userId, $id);

        return redirect()->to('/UserSide/cart/items')->with('success', 'Product removed from cart');
    }
}
