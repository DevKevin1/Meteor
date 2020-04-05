<?php
namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class ConfigModel extends Model
{
    protected $table      = 'website_config';
    protected $returnType = 'array';

    public function __construct(...$params)
    {
        parent::__construct(...$params);
        $this->db = Database::connect();
        $this->config_table = $this->db->table('website_config');
    }

    public function settings()
    {
        $settings = $this->config_table->get()->getResultObject();
      
        $inArray = new \stdClass();
      
        foreach($settings as $setting) {
            $key           = $setting->key;
            $inArray->$key = $setting->value;
        }
      
        return $inArray;
    }
}