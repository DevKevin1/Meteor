<?php
namespace App\Libraries\Twig;

use App\Models\ConfigModel;

use Config\Services;

use Twig_Extension;
use Twig_Filter;
use Twig_Function;

class TwigExtentions extends Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    private $general;
    private $Config_model;

    public function __construct()
    {
        $this->session      = \Config\Services::session();
    }

    public function getFilters():array
    {
        return [
            'base_url' => new Twig_Filter('base_url', 'base_url'),
            'config' => new Twig_Filter('config', [$this, 'filterConfig']),
            'uri_segment' => new Twig_Filter('uri_segment', [$this, 'filterSegment']),
        ];
    }

    public function getFunctions():array
    {
        return [
            'general' => new Twig_Function('general', [$this, 'functionGeneral'], ['is_safe' => ['html']]),
            'parse' => new Twig_Function('parse', [$this, 'parseBbcode'], ['is_safe' => ['html']]),
        ];
    }
  
    public function getGlobals()
    {
        return array(
            'hotelname' => getenv('cosmic.sitename'),
            'flash_messages' => $this->session->getFlashdata('validation'),
            'web_data' => $this->session->getFlashdata('data')
        );
    }

    public function filterConfig($string)
    {
        return $this->Config_model->GetConfig($string);
    }

    public function filterSegment($string):string
    {
        return $this->request->uri->getSegment($string);
    }

    public function functionGeneral(string $func, ...$data)
    {
        if ($data) {
            return $this->general->$func(...$data);
        }

        return $this->general->$func();
    }

    public function parseBbcode($content, $noparse = false): string
    {
        return (new ParseArticle($content, $noparse))->rendered();
    }



}