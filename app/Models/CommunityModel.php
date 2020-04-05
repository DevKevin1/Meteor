<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class CommunityModel extends Model
{

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
    }

    public function ranks($showAll = false)
    {
        if($showAll)
        {
            return $this->db->table('permissions')->select('id, rank_name')->where('id > ', 2)->orderBy('id', 'DESC')->get()->getResultObject();
        } else {
            return $this->db->table('permissions')->select('id, rank_name')->where('id > ', 2)->orderBy('id', 'DESC')->get()->getResultObject();
        }
    }

    public function orderPoints($limit = 10)
    {
        return $this->db->table('users')->orderBy('points', 'DESC')->limit($limit)->get()->getResultObject();
    }
}