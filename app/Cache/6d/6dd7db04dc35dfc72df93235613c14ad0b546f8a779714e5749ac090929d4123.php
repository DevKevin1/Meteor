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

/* Pages/Home/login.html */
class __TwigTemplate_b9d052d260b42d9ea29a450bfeb8af02dc0db90dc39c0a5617a60e0981e218e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "not_logged_in.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("not_logged_in.html", "Pages/Home/login.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
      <div class=\"row\">
            <div class=\"col-md-6 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Welkom op ";
        // line 7
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "!</h4>
                        <hr>
                        <div class=\"row text-left\">
                            <div class=\"col-md-12\">
                                <form action=\"login/request\" method=\"post\" id=\"login\">
                                    <label for=\"username\">Uw gebruikersnaam</label>
                                    <input type=\"text\" name=\"username\" id=\"username\" class=\"form-control ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["validation"] ?? null), "geterror", [0 => "username"], "method", false, false, false, 13)) {
            echo "error";
        }
        echo "\"
                                           placeholder=\"Vul hier uw gebruikersnaam in...\">
                                    <label for=\"password\" id=\"password\" class=\"pt-4\">Uw wachtwoord</label>
                                    <input type=\"password\" name=\"password\" class=\"form-control ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["validation"] ?? null), "geterror", [0 => "password"], "method", false, false, false, 16)) {
            echo "error";
        }
        echo "\"
                                           placeholder=\"Vul hier uw wachtwoord in...\">
                                
                                    <div class=\"row mt-4\">
                                        <div class=\"col-12 col-xs-12 col-md-12\">
                                            <button class=\"btn btn-outline-info w-100\" type=\"submit\" form=\"login\">Inloggen</button>
                                        </div>
                                    </div>
                                </form>
                                <div class=\"row\">
                                  <div class=\"col-12 col-xs-12 col-md-12\">
                                      <button class=\"btn btn-outline-warning w-100\">Nieuw op ";
        // line 27
        echo twig_escape_filter($this->env, ($context["hotelnaam"] ?? null), "html", null, true);
        echo "? Registreer hier!</button>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>";
        // line 38
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Spotlight</h4>
                        <hr>
                        <div class=\"newsItem text-left mt-2\"
                             style=\"background-image: url('https://theallseeingeye.leet.ws/uploads/articles/512e7e3a2ee6445e6c44c55875a7cf620dba61611583769332.png'); background-repeat: no-repeat; background-size: cover; height: 150px; width: 100%; border-radius: 5px;\">
                            <h3 class=\"text-left text-white pl-4\"
                                style=\"padding-top: 3.5vh; text-shadow: 2px 2px black;\">Kamer van de Week #123</h3>
                            <button class=\"btn btn-outline-light ml-4\">Lees meer...</button>
                        </div>
                        <div class=\"newsItem text-left mt-3\"
                             style=\"background-image: url('https://theallseeingeye.leet.ws/uploads/articles/ff2981c0d6283ed6c8d812e8b73c4546e08a37451584998741.png'); background-repeat: no-repeat; background-size: cover; height: 150px; width: 100%; border-radius: 5px;\">
                            <h3 class=\"text-left text-white pl-4\"
                                style=\"padding-top: 3.5vh; text-shadow: 2px 2px black;\">Kamer van de Week #456</h3>
                            <button class=\"btn btn-outline-light ml-4\">Lees meer...</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Home/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  89 => 27,  73 => 16,  65 => 13,  56 => 7,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Pages/Home/login.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Home/login.html");
    }
}
