<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PermissionModel extends Model
{

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
    }

    public function getRank($rank)
    {
        return $this->db->table('website_permissions_ranks')
            ->select('website_permissions.*')
            ->select('website_permissions_ranks.id as id')
            ->join('website_permissions', 'website_permissions_ranks.permission_id = website_permissions.id')
            ->where('website_permissions_ranks.rank_id', $rank)
            ->get()->getResultObject();
    }

    public function exists($perm, $rank)
    {
        if(!in_array($perm, array_column(self::getRank($rank), 'permissions')));
    }

    public function orderPoints($limit = 10)
    {
        return $this->db->table('users')->orderBy('points', 'DESC')->limit($limit)->get()->getResultObject();
    }
}