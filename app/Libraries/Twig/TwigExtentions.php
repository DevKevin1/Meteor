<?php
namespace App\Libraries\Twig;

use App\Models\ConfigModel;

use Config\Services;

use Twig_Extension;

class TwigExtentions extends Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    private $general;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
  
    public function getGlobals()
    {
        return [
            'hotelname' => getenv('meteor.hotelname'),
            'validation' => $this->session->getFlashdata('validation'),
            'flashdata' => $this->session->getFlashdata(),
            'base_url' => str_replace("/public", "/", base_url())
        ];
    }
  
}