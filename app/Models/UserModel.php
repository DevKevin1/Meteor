<?php
namespace App\Models;

use App\Models\ConfigModel;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'object';
  
    protected $allowedFields = ['id','username','password','real_name','mail','account_created','account_day_of_birth','last_login','online','pincode','last_online','motto','look','gender','rank','credits','pixels','points','auth_ticket','ip_register','ip_current','machine_id', 'secret_key'];


    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
    }
  
    public function getUserByUsername(string $username, string $param = null)
    {
        return $this->select($param ?? '*')->where('username', $username)->get()->getRow();
    }
  
    public function getUserById(int $user_id, string $param = null)
    {
        return $this->select($param ?? '*')->where('id', $user_id)->get()->getRow();
    }

    public function getDataByRank(int $rank, int $limit = 10)
    {
        $this->select('users.id, users.username, users.rank, users.online, users.look, users.motto, permissions.rank_name');
        $this->join('permissions', 'permissions.id = users.rank');
        return $this->where('rank', $rank)->orderBy('rank', 'DESC')->get()->getResultArray();
    }

}