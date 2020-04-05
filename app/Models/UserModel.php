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


    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
    }
  
    public function getUserByUsername($param)
    {
        return $this->db->table('users')->where('username', $param)->get()->getRow();
    }

    public function getDataByRank($rank, $limit = 10)
    {
        return $this->db->table('users')->select('users.id, users.username, users.rank, users.online, users.look, users.motto, permissions.rank_name')->join('permissions', 'permissions.id = users.rank')->where('rank', $rank)->orderBy('rank', 'DESC')->get()->getResultArray();
    }

    public function getSettings($player_id)
    {
        return $this->db->table('users_settings')->where('user_id', $player_id)->get()->getResultArray();
    }

}