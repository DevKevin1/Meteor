<?php 
namespace App\Controllers;
use Config\Database;

class Community extends Application
{

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
        $this->user_table = $this->db->table('users');
    }

    public function view() 
    {
        return $this->render('community/overview');
    }
}