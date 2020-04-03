<?php
class Extension extends \Twig_Extension implements Twig_Extension_GlobalsInterface
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
  
    public function getGlobals()
    {
        return array(
            'hotelname' => getenv('cosmic.sitename'),
            'flash_messages' => $this->session->getFlashdata('validation'),
            'web_data' => $this->session->getFlashdata('data')
        );
    }
}
