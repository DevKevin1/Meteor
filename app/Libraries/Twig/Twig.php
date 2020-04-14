<?php
namespace App\Libraries\Twig;

use App\Models\ConfigModel;

use Twig_Environment;
use Twig_Error_Loader;
use Twig_Extension_Debug;
use Twig_Loader_Filesystem;

use CodeIgniter\Exceptions\PageNotFoundException;

class Twig
{
    private $environment;
    private $ext = '.html';

    public function __construct()
    {
        $config_model = new ConfigModel();

        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../../Views', $cacheDir);
      
        if ($config_model->find('website.cache')->value === 'on') {
            $dataconfig['cache'] = WRITEPATH . 'cache';
            $dataconfig['auto_reload'] = true;
        }

        if ($config_model->find('website.debug')->value === '1') {
            $dataconfig['debug'] = true;
        }

        $dataconfig['autoescape'] = false;

        $this->environment = new Twig_Environment($loader, $dataconfig);
        $this->environment->addExtension(new TwigExtentions());

        $this->environment->addFunction(
            new \Twig\TwigFunction('getenv', function ($key) {
                return getenv($key);
            })
        );
      
        $this->environment->addFunction(
            new \Twig\TwigFunction('old', function ($key) {
                return old($key);
            })
        );
      
        if ($config_model->settings('debug') === '1') {
            $this->environment->addExtension(new Twig_Extension_Debug());
        }
    }

    public function Rendered(string $file, array $array): string
    {
        try {
            $template = $this->environment->load('Pages/' . ucfirst($file) . $this->ext);
        } catch (Twig_Error_Loader $error_Loader) {
            throw new PageNotFoundException($error_Loader);
        }

        return $template->render($array);
    }
}