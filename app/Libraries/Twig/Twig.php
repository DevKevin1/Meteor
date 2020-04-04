<?php
namespace App\Libraries\Twig;

use App\Models\ConfigModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Twig_Environment;
use Twig_Error_Loader;
use Twig_Extension_Debug;
use Twig_Loader_Filesystem;

class Twig
{
    private $environment;
    private $ext = '.html';

    public function __construct()
    {
        $config_model = new ConfigModel();

        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../../Views', $cacheDir);
        if ($config_model->GetConfig('cache') === 'on') {
            $dataconfig['cache'] = WRITEPATH . 'cache';
            $dataconfig['auto_reload'] = true;
        }

        if ($config_model->GetConfig('debug') === '1') {
            $dataconfig['debug'] = true;
        }

        $dataconfig['autoescape'] = false;

        $this->environment = new Twig_Environment($loader, $dataconfig);
        $this->environment->addExtension(new TwigExtentions());

        if ($config_model->GetConfig('debug') === '1') {
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