<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app.html */
class __TwigTemplate_f780d0972a15587b571d800d39614c8411caff0c63d6a5f97f860b3cfa508b00 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base' => [$this, 'block_base'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "permissions.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["set_permission"] = "homepage";
        // line 1
        $this->parent = $this->loadTemplate("permissions.html", "app.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (($context["player"] ?? null)) {
            // line 5
            echo "        ";
            $this->loadTemplate("logged_in.html", "app.html", 5)->display($context);
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $this->loadTemplate("not_logged_in.html", "app.html", 7)->display($context);
            // line 8
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "app.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  49 => 3,  44 => 1,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app.html", "/var/www/cosmicproject.nl/Meteor/app/Views/app.html");
    }
}
