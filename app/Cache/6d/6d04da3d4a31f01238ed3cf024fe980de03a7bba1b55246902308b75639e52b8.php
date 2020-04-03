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

/* not_logged_in.html */
class __TwigTemplate_58fa3b2b2bb1be787142834cfb092e706ad3697085a335e2d91237b59865176f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base' => [$this, 'block_base'],
            'body' => [$this, 'block_body'],
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
        $context["set_permission"] = "homepage";
        $this->parent = $this->loadTemplate("permissions.html", "not_logged_in.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_base($context, array $blocks = [])
    {
        $macros = $this->macros;
        if ( !(isset($context["load"]) || array_key_exists("load", $context))) {
            // line 2
            echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\"
          href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\"
          integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap\" rel=\"stylesheet\">
    <link href=\"/assets/css/index.css?v=52\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://codeseven.github.io/toastr/build/toastr.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <title>";
            // line 13
            echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
            echo " - Homepagina</title>
</head>
<body>

<header>
    <div class=\"container\">
        <img src=\"/assets/images/logo.png\" class=\"img-fluid pt-3\" width=\"200\" alt=\"\">
    </div>
    <svg class=\"onlyDesktop\" style=\"position: absolute; top: 0; right: 0;\" width=\"800\" height=\"950\"
         viewBox=\"0 300 10 800\" xmlns=\"http://www.w3.org/2000/svg\">
        <g transform=\"translate(300, 300)\">
            <path d=\"M103.4,-104.4C125.2,-81.6,128.1,-40.8,141.2,13.1C154.3,66.9,177.5,133.9,155.7,180.2C133.9,226.5,66.9,252.3,13.3,239C-40.3,225.6,-80.6,173.3,-122.8,126.9C-164.9,80.6,-209,40.3,-218.9,-9.9C-228.8,-60.1,-204.5,-120.2,-162.4,-143C-120.2,-165.9,-60.1,-151.4,-9.7,-141.8C40.8,-132.1,81.6,-127.2,103.4,-104.4Z\" fill=\"rgba(10, 10, 10, 0.59)\" stroke=\"none\" stroke-width=\"0\"></path>
        </g>
    </svg>
</header>

<section>
    <div class=\"container mainContainer\">
\t\t    ";
            // line 31
            $this->displayBlock('body', $context, $blocks);
            // line 32
            echo "    </div>
</section>

<footer>
    <div class=\"footer text-center text-black\" style=\"position: absolute; bottom: 0; width: 100%;\">
        <img src=\"/assets/images/logo.png\" class=\"img-fluid\" width=\"200\" alt=\"\" style=\"filter:grayscale(60%)\">
        <p class=\"footerTitle\">&copy; 2020 Copyright: ";
            // line 38
            echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
            echo " | All rights reserved </p>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script> 
  
<script src=\"https://codeseven.github.io/toastr/build/toastr.min.js\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js\"></script>
<script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\"></script>
<script>\$(document).ready(function () {
    \$('body').bootstrapMaterialDesign();
    
    toastr.options = {
        closeButton: 1,progressBar: 1,positionClass: 'toast-top-right',preventDuplicates: 1
    };
    
    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["flash_messages"] ?? null), "getErrors", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["error"] => $context["key"]) {
                // line 55
                echo "    toastr.error(\"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["key"]), "html", null, true);
                echo "\", \"";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["error"]), "html", null, true);
                echo "\");
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['error'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "});</script>
</body>
</html>
";
        }
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "not_logged_in.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 31,  130 => 57,  119 => 55,  115 => 54,  96 => 38,  88 => 32,  86 => 31,  65 => 13,  52 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"permissions.html\" %}{% set set_permission = 'homepage' %}{% block base %}{% if load is not defined %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\"
          href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\"
          integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap\" rel=\"stylesheet\">
    <link href=\"/assets/css/index.css?v=52\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://codeseven.github.io/toastr/build/toastr.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <title>{{hotelname}} - Homepagina</title>
</head>
<body>

<header>
    <div class=\"container\">
        <img src=\"/assets/images/logo.png\" class=\"img-fluid pt-3\" width=\"200\" alt=\"\">
    </div>
    <svg class=\"onlyDesktop\" style=\"position: absolute; top: 0; right: 0;\" width=\"800\" height=\"950\"
         viewBox=\"0 300 10 800\" xmlns=\"http://www.w3.org/2000/svg\">
        <g transform=\"translate(300, 300)\">
            <path d=\"M103.4,-104.4C125.2,-81.6,128.1,-40.8,141.2,13.1C154.3,66.9,177.5,133.9,155.7,180.2C133.9,226.5,66.9,252.3,13.3,239C-40.3,225.6,-80.6,173.3,-122.8,126.9C-164.9,80.6,-209,40.3,-218.9,-9.9C-228.8,-60.1,-204.5,-120.2,-162.4,-143C-120.2,-165.9,-60.1,-151.4,-9.7,-141.8C40.8,-132.1,81.6,-127.2,103.4,-104.4Z\" fill=\"rgba(10, 10, 10, 0.59)\" stroke=\"none\" stroke-width=\"0\"></path>
        </g>
    </svg>
</header>

<section>
    <div class=\"container mainContainer\">
\t\t    {% block body %}{% endblock %}
    </div>
</section>

<footer>
    <div class=\"footer text-center text-black\" style=\"position: absolute; bottom: 0; width: 100%;\">
        <img src=\"/assets/images/logo.png\" class=\"img-fluid\" width=\"200\" alt=\"\" style=\"filter:grayscale(60%)\">
        <p class=\"footerTitle\">&copy; 2020 Copyright: {{hotelname}} | All rights reserved </p>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script> 
  
<script src=\"https://codeseven.github.io/toastr/build/toastr.min.js\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js\"></script>
<script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\"></script>
<script>\$(document).ready(function () {
    \$('body').bootstrapMaterialDesign();
    
    toastr.options = {
        closeButton: 1,progressBar: 1,positionClass: 'toast-top-right',preventDuplicates: 1
    };
    
    {% for error,key in flash_messages.getErrors %}
    toastr.error(\"{{key|capitalize }}\", \"{{error|capitalize }}\");
    {% endfor %}
});</script>
</body>
</html>
{% endif %}
{% endblock %}", "not_logged_in.html", "/var/www/cosmicproject.nl/Meteor/app/Views/not_logged_in.html");
    }
}
