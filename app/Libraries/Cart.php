<?php 

namespace App\Libraries;

class Cart
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function getCart($userId)
    {
        return $this->session->get('cart_' . $userId) ?? [];
    }

    public function addItem($userId, $item)
    {
        $cartItems = $this->getCart($userId);

        // Check if the item already exists in the cart
        $itemFound = false;
        foreach ($cartItems as &$cartItem) {
            if ($cartItem['id'] == $item['id']) {
                $cartItem['qty'] += $item['qty'];
                $cartItem['subtotal'] = $cartItem['qty'] * $cartItem['price'];
                $itemFound = true;
                break;
            }
        }

        if (!$itemFound) {
            $item['subtotal'] = $item['price'] * $item['qty'];
            $cartItems[] = $item;
        }

        $this->session->set('cart_' . $userId, $cartItems);
    }

    public function updateItem($userId, $id, $qty)
    {
        $cartItems = $this->getCart($userId);

        foreach ($cartItems as &$cartItem) {
            if ($cartItem['id'] == $id) {
                $cartItem['qty'] = $qty;
                $cartItem['subtotal'] = $cartItem['qty'] * $cartItem['price'];
                break;
            }
        }

        $this->session->set('cart_' . $userId, $cartItems);
    }

    public function removeItem($userId, $id)
    {
        $cartItems = $this->getCart($userId);

        foreach ($cartItems as $key => $cartItem) {
            if ($cartItem['id'] == $id) {
                unset($cartItems[$key]);
                break;
            }
        }

        // Re-index the array
        $cartItems = array_values($cartItems);

        $this->session->set('cart_' . $userId, $cartItems);
    }

    public function clearCart($userId)
    {
        $this->session->remove('cart_' . $userId);
    }

    public function getTotal($userId)
    {
        $cartItems = $this->getCart($userId);
        return array_sum(array_column($cartItems, 'subtotal'));
    }

    public function getTotalItems($userId)
    {
        $cartItems = $this->getCart($userId);
        return array_sum(array_column($cartItems, 'qty'));
    }
}


?>