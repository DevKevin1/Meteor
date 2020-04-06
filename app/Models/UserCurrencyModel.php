<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserCurrencyModel extends Model
{
    protected $primaryKey = 'user_id';
    protected $table      = 'users_currency';
    protected $returnType = 'object';
  
    protected $allowedFields = ['user_id','type','amount'];
 
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = Database::connect();
    }
}