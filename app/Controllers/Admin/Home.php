<?php 
namespace App\Controllers\Admin;

class Home extends \App\Controllers\Application
{
    public function __construct()
    {
        parent::__construct();
    }
  
    public function view()
    {
        return $this->render('admin/home');
    }
}