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

/* permissions.html */
class __TwigTemplate_5bda2a4890f4a0a3dec1d6fd3d2ca671bb5da72267b46ad261a0996f4568dead extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base' => [$this, 'block_base'],
            'housekeeping' => [$this, 'block_housekeeping'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["flag"] = 0;
        // line 2
        $context["permissions"] = [];
        // line 3
        echo "
";
        // line 4
        if (($context["player_permissions"] ?? null)) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["player_permissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 6
                echo "    ";
                $context["permissions"] = twig_array_merge(($context["permissions"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["permission"], "permission", [], "any", false, false, false, 6)]);
                // line 7
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["permission"], "permission", [], "any", false, false, false, 7) == ($context["set_permission"] ?? null))) {
                    // line 8
                    echo "            ";
                    $context["flag"] = 1;
                    // line 9
                    echo "        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 12
            echo "    ";
            $context["flag"] = 0;
        }
        // line 14
        echo "

";
        // line 16
        if (((($context["flag"] ?? null) == 1) || (($context["set_permission"] ?? null) == "homepage"))) {
            // line 17
            echo "    ";
            if ((($context["set_permission"] ?? null) == "homepage")) {
                // line 18
                echo "        ";
                $this->displayBlock('base', $context, $blocks);
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $this->displayBlock('housekeeping', $context, $blocks);
                // line 21
                echo "    ";
            }
        } else {
            // line 23
            echo "    ";
            if (twig_in_filter("housekeeping", ($context["permissions"] ?? null))) {
                // line 24
                echo "        ";
                $this->loadTemplate("Admin/no_access.html", "permissions.html", 24)->display($context);
                // line 25
                echo "    ";
            }
        }
    }

    // line 18
    public function block_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 20
    public function block_housekeeping($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "permissions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 20,  110 => 18,  104 => 25,  101 => 24,  98 => 23,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  76 => 14,  72 => 12,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "permissions.html", "/var/www/cosmicproject.nl/Meteor/app/Views/permissions.html");
    }
}
