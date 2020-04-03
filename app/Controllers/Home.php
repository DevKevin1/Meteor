<?php 

namespace App\Controllers;

class Home extends \CodeIgniter\Controller
{
	public function index() {
		return \Twig::instance()->display('Pages/Home/home.html');
	}
}