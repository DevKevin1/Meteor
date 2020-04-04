<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';

    protected $allowedFields = ['username','password','real_name','mail','account_created','account_day_of_birth','last_login','online','pincode','last_online','motto','look','gender','rank','credits','pixels','points','auth_ticket','ip_register','ip_current','machine_id', 'secret_key'];
}