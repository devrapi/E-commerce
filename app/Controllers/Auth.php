<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Libraries\Hash;
use App\Filters\AuthcheckFilter;


class Auth extends BaseController
{
    public function __construct()
    {
        helper([ 'url', 'form']);   
    }
    public function index(): string
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function save()
    {
       //validate request

      $validation = $this->validate([
        'username' => ['rules' => 'required', 'errors' => ['required' => 'The username field is required']],
        'email' =>  ['rules' => 'required|valid_email|is_unique[users.email]', 'errors' => ['required' => ' The email field is required', 'valid_email' => 'email is invalid', 'is_unique' => 'email already exists']],
        'fname' => ['rules' => 'required', 'errors' => ['required' => 'The first name field is required']],
        'lname' => ['rules' => 'required', 'errors' => ['required' => 'The last name field is required']],
        'address' => ['rules' => 'required', 'errors' => ['required' => 'The address field  is required']],
        'password' => ['rules' => 'required|min_length[8] |max_length[16]', 'errors' => ['required' => 'The password field is required']],
        'cpassword' => ['rules' => 'required|matches[password]', 'errors' => ['required' => 'The confirm password field is required', 'matches' => 'passwords do not match']],
       ]);

       if(!$validation){
        return view('auth/register', [
            'validation' => $this->validator]);
        }
        else{
           //register to db

           $username = $this->request->getPost('username');
           $email = $this->request->getPost('email');
           $fname = $this->request->getPost('fname');
           $lname = $this->request->getPost('lname');
           $address = $this->request->getPost('address');
           $password = $this->request->getPost('password');

           $values=[

               'username' => $username,
               'email' => $email,
               'first_name' => $fname,
               'last_name' => $lname,
               'shipping_address' => $address,
               'password' =>  Hash::make($password)
           ];
           
           $usermodel = new UsersModel();
           $query = $usermodel->insert($values);
           if(!$query){
               return redirect()->back()->with('fail', 'Registration failed');
           }
           else{
            //    return redirect()->to('/register')->with('success', 'Registration successful');
            $last_id = $usermodel->insertID();
            session()->set('loggedUser', $last_id);
            return redirect()->to('/UserSide');
           }

           

    }
    }
    function check()
    {
        $validation = $this->validate([
            'email' =>  ['rules' => 'required|valid_email|is_not_unique[users.email]', 'errors' => ['required' => ' The email field is required', 'valid_email' => 'email is invalid', 'is_not_unique' => 'This Email is not registered to our service']],

            'password' => ['rules' => 'required|min_length[8]  |max_length[16]', 'errors' => ['required' => 'The password field is required']],

        ]);

        if(!$validation){
            return view('auth/login', ['validation' => $this->validator]);

    }
    else{

        //check user

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $usermodel = new UsersModel();
        $userinfo = $usermodel->where('email', $email)->first();
        $check_password = Hash::check($password, $userinfo['password']);

        if(!$check_password){
            session()->setFlashdata('fail', 'Incorrect password');
            return redirect()->to('/login')->withInput();
        }
   
        else{
            $user_id = $userinfo['id'];
            session()->set('loggedUser', $user_id);
            return redirect()->to('/UserSide');
        }
    }

    }
    public function logout()
    {
        if(session()->has('loggedUser')){
        session()->remove('loggedUser');
        return redirect()->to('/login?access=out')->with('fail', 'You have been logged out');
        }
    }
}

