<?php
namespace App\Models;

class PermissionModel extends \CodeIgniter\Model
{

    protected $primaryKey = 'id';
    protected $table      = 'permissions';
    protected $returnType = 'object';
  
    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = \Config\Database::connect();
    }
  
    public function ranks()
    {
        return $this->where('id > ', 2)->select('id, rank_name')->orderBy('id', 'DESC')->get()->getResultObject();
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
        if(!in_array($perm, array_column($this->getRank($rank), 'permissions')));
    }
}