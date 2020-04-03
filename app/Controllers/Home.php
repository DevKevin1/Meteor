<?php 

namespace App\Controllers;

class Home extends AuthController
{
    public function view() {
        return \Twig::instance()->display('Pages/Home/me.html');
    }
}