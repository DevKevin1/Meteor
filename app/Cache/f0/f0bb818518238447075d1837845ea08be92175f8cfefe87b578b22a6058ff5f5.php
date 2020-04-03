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

/* Pages/Home/registration.html */
class __TwigTemplate_99268584e7cd9dda180b6c3bcad11018dfa65017fc7f859ecef999f2451fc308 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("not_logged_in.html", "Pages/Home/registration.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "   
    <div class=\"row\">
            <div class=\"col-md-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Registreer op ";
        // line 7
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "</h4>
                        <hr>
                        <div class=\"row text-left\">
                            <div class=\"col-md-12\">
                                <form action=\"\" method=\"POST\">
                                    <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "naam</label>
                                    <input type=\"text\" name=\"username\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "naam...\" id=\"username\" class=\"form-control\">
                                    <label for=\"password\" id=\"password\" class=\"pt-4\">Uw wachtwoord</label>
                                    <input type=\"password\" placeholder=\"Wachtwoord...\" name=\"password\" class=\"form-control\">
                                    <label for=\"repeatpassword\" id=\"repeatpassword\" class=\"pt-4\">Herhaal uw wachtwoord</label>
                                    <input type=\"password\" placeholder=\"Wachtwoord herhalen...\" name=\"repeatpassword\" class=\"form-control\">
                                    <label for=\"gender\" id=\"repeatpassword\" class=\"pt-4\">Selecteer uw geslacht</label>
                                    <select class=\"form-control\" name=\"gender\" id=\"gender\">
                                        <option value=\"man\">Man</option>
                                        <option value=\"woman\">Woman</option>
                                    </select>
                                    recaptcha
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <input type=\"submit\" class=\"btn btn-outline-info w-100\" value=\"Registreren\">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Home/registration.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  64 => 12,  56 => 7,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"not_logged_in.html\" %}
{% block body %}   
    <div class=\"row\">
            <div class=\"col-md-12 mt-3\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h4>Registreer op {{hotelname}}</h4>
                        <hr>
                        <div class=\"row text-left\">
                            <div class=\"col-md-12\">
                                <form action=\"\" method=\"POST\">
                                    <label for=\"username\">{{hotelname}}naam</label>
                                    <input type=\"text\" name=\"username\" placeholder=\"{{hotelname}}naam...\" id=\"username\" class=\"form-control\">
                                    <label for=\"password\" id=\"password\" class=\"pt-4\">Uw wachtwoord</label>
                                    <input type=\"password\" placeholder=\"Wachtwoord...\" name=\"password\" class=\"form-control\">
                                    <label for=\"repeatpassword\" id=\"repeatpassword\" class=\"pt-4\">Herhaal uw wachtwoord</label>
                                    <input type=\"password\" placeholder=\"Wachtwoord herhalen...\" name=\"repeatpassword\" class=\"form-control\">
                                    <label for=\"gender\" id=\"repeatpassword\" class=\"pt-4\">Selecteer uw geslacht</label>
                                    <select class=\"form-control\" name=\"gender\" id=\"gender\">
                                        <option value=\"man\">Man</option>
                                        <option value=\"woman\">Woman</option>
                                    </select>
                                    recaptcha
                                    <div class=\"row\">
                                        <div class=\"col-md-12\">
                                            <input type=\"submit\" class=\"btn btn-outline-info w-100\" value=\"Registreren\">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "Pages/Home/registration.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Home/registration.html");
    }
}
