<?php 
namespace App\Controllers;

class Registration extends AuthController
{
    public function request() 
    {

    }
  
    public function view() {
        return \Twig::instance()->display('Pages/Home/registration.html');
    }
}