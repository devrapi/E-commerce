<?php

namespace App\Controllers;
use App\Models\AdminModel;
use App\Libraries\Hash;

class Admin extends BaseController
{
    public function __construct()
    {
        helper([ 'url', 'admin']);   
    }
    public function login(): string
    {
        return view('/adminSide/login');
    }
    public function register()
    {
        return view('/adminSide/register');
    }
    public function index()
    {
        return view('/adminSide/index');
    }
    public function tables()
    {
        return view('/adminSide/tables');
    }
    public function save() 
    {
          //validate request

      $validation = $this->validate([
    
        'email' =>  ['rules' => 'required|valid_email|is_unique[users.email]', 'errors' => ['required' => ' The email field is required', 'valid_email' => 'email is invalid', 'is_unique' => 'email already exists']],
        'fname' => ['rules' => 'required', 'errors' => ['required' => 'The first name field is required']],
        'lname' => ['rules' => 'required', 'errors' => ['required' => 'The last name field is required']],
        'password' => ['rules' => 'required|min_length[8] |max_length[16]', 'errors' => ['required' => 'The password field is required']],
        'cpassword' => ['rules' => 'required|matches[password]', 'errors' => ['required' => 'The confirm password field is required', 'matches' => 'passwords do not match']],
       ]);

       if(!$validation){
        return view('/adminSide/register', [
            'validation' => $this->validator]);
        } else{
            //register to db
 
            $email = $this->request->getPost('email');
            $fname = $this->request->getPost('fname');
            $lname = $this->request->getPost('lname');
            $password = $this->request->getPost('password');
 
            $values=[
                'admin_email' => $email,
                'fname' => $fname,
                'lname' => $lname,
                'password' =>  Hash::make($password)
            ];
            
            $usermodel = new AdminModel();
            $query = $usermodel->insert($values);
            if(!$query){
                return redirect()->back()->with('fail', 'Registration failed');
            }
            else{
                return redirect()->to('/admin/register')->with('success', 'Registration successful');
            //  $last_id = $usermodel->insertID();
            //  session()->set('loggedAdmin', $last_id);
            //  return redirect()->to('/UserSide');
            }
 
            
 
     }
    }
    
    public function check()
    {
        $validation = $this->validate([
            'email' =>  ['rules' => 'required|valid_email|is_not_unique[admin.admin_email]', 'errors' => ['required' => ' The email field is required', 'valid_email' => 'email is invalid', 'is_not_unique' => 'This Email is not registered to our service']],

            'password' => ['rules' => 'required|min_length[8]  |max_length[16]', 'errors' => ['required' => 'The password field is required']],

        ]);

        if(!$validation){
            return view('/adminSide/login', ['validation' => $this->validator]);

    }

else{

    //check user

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $usermodel = new AdminModel();
    $userinfo = $usermodel->where('admin_email', $email)->first();
    $check_password = Hash::check($password, $userinfo['password']);

    if(!$check_password){
        session()->setFlashdata('fail', 'Incorrect password');
        return redirect()->to('/adminSide/login')->withInput();
    } else{
        $user_id = $userinfo['id'];
        session()->set('loggedAdmin', $user_id);
        return redirect()->to('/admin/dashboard');
    }
}


}

public function logout()
{
    if(session()->has('loggedAdmin')){
        session()->remove('loggedAdmin');
        return redirect()->to('/admin/login?access=out')->with('fail', 'You have been logged out');
        }
}


}

