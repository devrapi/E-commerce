<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->get('/register', 'Auth::register', ['filter' => 'already']);
$routes->post('/register/save', 'Auth::save');
$routes->post('/check', 'Auth::check');
$routes->get('/UserSide', 'UserSide::index' );
$routes->get('/logout', 'Auth::logout');
$routes->get('/UserSide/profile', 'UserSide::profile'  );

// $routes->group('',['filter' => 'authcheck'], function($routes){
//     $routes->get('/UserSide', 'UserSide::index');
// });

//admin routes 

$routes->get('/admin/login' , 'Admin::login');
$routes->get('/admin/register' , 'Admin::register', ['filter' => 'adminalready']);
$routes->get('/admin/dashboard' , 'Admin::index', ['filter' => 'adminauth']);
$routes->get('/AdminSide/dashboard/tables' , 'AdminSide::tables' , ['filter' => 'adminauth']);
$routes->post('/admin/register/save' , 'Admin::save');
$routes->post('/admin/login/check' , 'Admin::check');
$routes->get('/admin/logout' , 'Admin::logout');
$routes->get('/admin/dashboard/categories' , 'AdminSide::categories' ,['filter' => 'adminauth']);
$routes->post('/admin/dashboard/categories/add' , 'AdminSide::categoryAdd',['filter' => 'adminauth']);
$routes->get('/admin/dashboard/product' , 'AdminSide::product',['filter' => 'adminauth']);
$routes->get('/admin/dashboard/product/add' , 'AdminSide::productAdd',['filter' => 'adminauth']);
$routes->post('/admin/dashboard/product/save' , 'AdminSide::productSave');
$routes->get('/admin/dashboard/orders' , 'AdminSide::orders',['filter' => 'adminauth']);
$routes->get('/admin/dashboard/customers' , 'AdminSide::customers',['filter' => 'adminauth']    );

//UserSide routes
$routes->get('/UserSide/index' , 'UserSide::index');
$routes->get('/UserSide/shop' , 'UserSide::shop' );
$routes->get('/UserSide/details/(:num)' , 'UserSide::details/$1');
$routes->get('/UserSide/add/cart/(:num)' , 'CartController::add/$1',['filter' => 'authcheck']);
$routes->get('/UserSide/delete/cart/(:num)' , 'CartController::delete/$1');
$routes->get('/UserSide/cart/items' , 'CartController::index');
$routes->get('/UserSide/payment' , 'UserSide::payment');