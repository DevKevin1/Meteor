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

/* logged_in.html */
class __TwigTemplate_12e57bdf81d7e890acb78d7f86ecf7e3765df84451fe2c166c0ef1b57d4b2ee9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\"
          integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap\" rel=\"stylesheet\">
    <title>";
        // line 12
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " - Homepagina</title>
</head>
<body>

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-transparent\">
        <div class=\"container\">
            <a href=\"/\"><img src=\"assets/images/logo.png\" class=\"img-fluid\" width=\"150\" alt=\"\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\"
                    aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> ";
        // line 27
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-users\"></i> Community
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLinkCommunity\">
                            <a class=\"dropdown-item\" href=\"#\">Nieuws</a>
                            <a class=\"dropdown-item\" href=\"#\">Ruilwaardes</a>
                            <a class=\"dropdown-item\" href=\"#\">";
        // line 36
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Medewerkers</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuShops\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-shopping-cart\"></i> ";
        // line 41
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Shop
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Nieuws</a>
                            <a class=\"dropdown-item\" href=\"#\">Ruilwaardes</a>
                            <a class=\"dropdown-item\" href=\"#\">";
        // line 46
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Medewerkers</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-gavel fa-flip-horizontal\"></i>  Housekeeping</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
</header>

<section>
    <div class=\"container mainContainer\">
        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "    </div>
</section>

<footer>
    <div class=\"footer text-center text-black\">
        <div class=\"row p-0 m-0\">
            <div class=\"col-md-12\">
                <img src=\"assets/images/logo.png\" class=\"img-fluid\" width=\"150\" alt=\"\" style=\"filter:grayscale(60%)\">
                <p class=\"footerTitle\">
                    &copy; 2020 Copyright: MeteorCMS | All rights reserved
                    <br>
                    <span class=\"footerSecTitle mt-0 pt-0\">Made with &hearts; by Raizer and Highrun</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js\"
        integrity=\"sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\"
        integrity=\"sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9\"
        crossorigin=\"anonymous\"></script>
<script>\$(document).ready(function () {
    \$('body').bootstrapMaterialDesign();
});</script>
<script>
    \$(document).ready(function () {
        updateHeight();
    });

    function updateHeight() {
        const Height = \$('footer').height();
        \$('body').css('margin-bottom', Height + 'px')
    }
    window.onscroll = function() {
        if(window.scrollY >= 5){
            \$('.navbar').addClass('bg-white');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').addClass('navShadow');
            \$('.navbar').addClass('shadow');
            \$('.navbar').removeClass('bg-transparent');
            // console.log('Added');
        } else if(window.scrollY < 5){
            \$('.navbar').removeClass('bg-white');
            \$('.navbar').removeClass('shadow');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').removeClass('navShadow');
            // console.log('Removed');
        }
    };

    \$('.navbar-toggler').click(function() {
        var clicks = \$(this).data('clicks');
        \$('.navbar').removeClass('bg-transparent');
        if (clicks) {
            \$('.navbar').removeClass('shadow');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').removeClass('bg-transparent');
            \$('.navbar').removeClass('navShadow');
        } else {
            \$('.navbar').addClass('bg-white');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').addClass('navShadow');
            \$('.navbar').addClass('shadow');
        }
        \$(this).data(\"clicks\", !clicks);
    });
</script>
</body>
</html>";
    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "logged_in.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 61,  117 => 62,  115 => 61,  97 => 46,  89 => 41,  81 => 36,  69 => 27,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\"
          href=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css\"
          integrity=\"sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Baloo+Da+2&display=swap\" rel=\"stylesheet\">
    <title>{{hotelname}} - Homepagina</title>
</head>
<body>

<header>
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top bg-transparent\">
        <div class=\"container\">
            <a href=\"/\"><img src=\"assets/images/logo.png\" class=\"img-fluid\" width=\"150\" alt=\"\"></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\"
                    aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i class=\"fa fa-bars\" aria-hidden=\"true\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-user\"></i> {{username}}</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-users\"></i> Community
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLinkCommunity\">
                            <a class=\"dropdown-item\" href=\"#\">Nieuws</a>
                            <a class=\"dropdown-item\" href=\"#\">Ruilwaardes</a>
                            <a class=\"dropdown-item\" href=\"#\">{{hotelname}} Medewerkers</a>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuShops\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fa fa-shopping-cart\"></i> {{hotelname}} Shop
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Nieuws</a>
                            <a class=\"dropdown-item\" href=\"#\">Ruilwaardes</a>
                            <a class=\"dropdown-item\" href=\"#\">{{hotelname}} Medewerkers</a>
                        </div>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\"><i class=\"fa fa-gavel fa-flip-horizontal\"></i>  Housekeeping</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
</header>

<section>
    <div class=\"container mainContainer\">
        {% block body %}{% endblock %}
    </div>
</section>

<footer>
    <div class=\"footer text-center text-black\">
        <div class=\"row p-0 m-0\">
            <div class=\"col-md-12\">
                <img src=\"assets/images/logo.png\" class=\"img-fluid\" width=\"150\" alt=\"\" style=\"filter:grayscale(60%)\">
                <p class=\"footerTitle\">
                    &copy; 2020 Copyright: MeteorCMS | All rights reserved
                    <br>
                    <span class=\"footerSecTitle mt-0 pt-0\">Made with &hearts; by Raizer and Highrun</span>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
        integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js\"
        integrity=\"sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js\"
        integrity=\"sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9\"
        crossorigin=\"anonymous\"></script>
<script>\$(document).ready(function () {
    \$('body').bootstrapMaterialDesign();
});</script>
<script>
    \$(document).ready(function () {
        updateHeight();
    });

    function updateHeight() {
        const Height = \$('footer').height();
        \$('body').css('margin-bottom', Height + 'px')
    }
    window.onscroll = function() {
        if(window.scrollY >= 5){
            \$('.navbar').addClass('bg-white');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').addClass('navShadow');
            \$('.navbar').addClass('shadow');
            \$('.navbar').removeClass('bg-transparent');
            // console.log('Added');
        } else if(window.scrollY < 5){
            \$('.navbar').removeClass('bg-white');
            \$('.navbar').removeClass('shadow');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').removeClass('navShadow');
            // console.log('Removed');
        }
    };

    \$('.navbar-toggler').click(function() {
        var clicks = \$(this).data('clicks');
        \$('.navbar').removeClass('bg-transparent');
        if (clicks) {
            \$('.navbar').removeClass('shadow');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').removeClass('bg-transparent');
            \$('.navbar').removeClass('navShadow');
        } else {
            \$('.navbar').addClass('bg-white');
            \$('.navbar').addClass('easyTouchNav');
            \$('.navbar').addClass('navShadow');
            \$('.navbar').addClass('shadow');
        }
        \$(this).data(\"clicks\", !clicks);
    });
</script>
</body>
</html>", "logged_in.html", "/var/www/cosmicproject.nl/Meteor/app/Views/logged_in.html");
    }
}
