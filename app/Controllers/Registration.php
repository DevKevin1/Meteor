<?php 
namespace App\Controllers;

class Registration extends Application
{
    public function view() 
    {
        return $this->render('home/registration');
    }
}