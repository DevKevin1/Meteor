<?php 
namespace App\Controllers;

class Home extends Application
{
    public function view() 
    {
        return $this->render('home/me');
    }
}