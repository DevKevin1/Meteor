<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class ConfigModel extends Model
{
    private $config_table;

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = Database::connect();
        $this->config_table = $this->db->table('website_config');
    }

    public function GetConfig(string $key)
    {
        return $this->config_table->select('value')->where('key', $key)->get()->getRow()->value;
    }
}