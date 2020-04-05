<?php 
namespace App\Controllers\Home;

class Home extends \App\Controllers\Application
{  
    public function me()
    {
        return $this->render('home/me');
    }
}