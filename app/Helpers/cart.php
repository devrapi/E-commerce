<?php

namespace App\Helpers;

class Cart
{
  public static function add($data)
  {
    // Validate data (e.g., product ID, quantity)
    if (!isset($data['id']) || !isset($data['quantity'])) {
      return false;
    }

    $cart = session()->get('cart') ?? [];
    $cart[$data['id']] = [
      'id' => $data['id'],
      'quantity' => $data['quantity'],
      // Add other cart item details if needed (e.g., price, name)
    ];

    session()->set('cart', $cart);
    return true;
  }

  public static function get()
  {
    return session()->get('cart') ?? [];
  }

  public static function remove($id)
  {
    $cart = session()->get('cart') ?? [];
    if (isset($cart[$id])) {
      unset($cart[$id]);
      session()->set('cart', $cart);
    }
  }

  public static function clear()
  {
    session()->remove('cart');
  }

  // Add additional functions like update quantity, calculate total, etc.
}
