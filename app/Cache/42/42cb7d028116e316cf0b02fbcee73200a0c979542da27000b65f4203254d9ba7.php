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

/* Pages/Home/me.html */
class __TwigTemplate_4990965b5f6182816e66b9b6978aff9be67b0de464e22ff1ca10ea00359d5099 extends \Twig\Template
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
        return "logged_in.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("logged_in.html", "Pages/Home/me.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "  
        <div class=\"row\">
            <div class=\"col-md-7 mt-5\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row text-left\">
                            <div class=\"col-2 col-md-4 text-center\">
                                <div class=\"avatar\">
                                  
                                    <img src=\"https://www.habbo.nl/habbo-imaging/avatarimage?hb=image&user=Economy&headonly=0&direction=2&head_direction=2&action=wav&gesture=&size=l\" class=\"img-fluid avatar\" alt=\"\" style=\"margin-left: -15px;\">
                                </div>
                            </div>
                            <div class=\"col-10 col-md-8 mt-2\">
                                <h5>Hey, <b>Raizer</b>!</h5>
                                <h6>Raizer is de beste!</h6>
                                <div class=\"row font-weight-bold mt-4\">
                                    <div class=\"col-3 col-md-3\">
                                        <p class=\"p-0 m-0\">100</p>
                                        <p class=\"text-muted p-0 m-0\" style=\"white-space: nowrap\"><img src=\"assets/images/credits.png\" height=\"18\" alt=\"\"> Credits</p>
                                    </div>
                                    <div class=\"divider\"></div>
                                    <div class=\"col-3 col-md-3\">
                                        <p class=\"p-0 m-0\">100</p>
                                        <p class=\"text-muted p-0 m-0\" style=\"white-space: nowrap\"><img src=\"assets/images/ducket.png\" height=\"18\" alt=\"\"> Duckets</p>
                                    </div>
                                    <div class=\"divider\"></div>
                                    <div class=\"col-3 col-md-3\">
                                        <p class=\"p-0 m-0\">100</p>
                                        <p class=\"text-muted p-0 m-0\" style=\"white-space: nowrap\"><img src=\"assets/images/diamond.png\" height=\"18\" alt=\"\"> Diamonds</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"card mt-3\">
                    <div class=\"card-body\">
                        <h4>";
        // line 39
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " Nieuws</h4>
                        <hr>
                        <div class=\"row text-left\">
                            <div class=\"container\">
                                <div class=\"newsItem text-left mt-2\"
                                     style=\"background-image: url('https://theallseeingeye.leet.ws/uploads/articles/512e7e3a2ee6445e6c44c55875a7cf620dba61611583769332.png'); background-repeat: no-repeat; background-size: cover; height: 150px; width: 100%; border-radius: 2px;\">
                                    <h3 class=\"text-left text-white pl-4\"
                                        style=\"padding-top: 3.5vh; text-shadow: 2px 2px black;\">Kamer van de Week #123</h3>
                                    <button class=\"btn btn-outline-light ml-4\">Lees meer...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"col-md-12 mt-5 p-0 flex-column\">
                    <div class=\"card flex-column\">
                        <div class=\"card-body\">
                            <h4>";
        // line 58
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo "FM</h4>
                            <hr>
                            <div class=\"newsItem text-left mt-2\">
                                <audio controls>
                                    <source src=\"horse.ogg\" type=\"audio/ogg\">
                                    <source src=\"horse.mp3\" type=\"audio/mpeg\">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                    <div class=\"card flex-column mt-3\">
                        <div class=\"card-body\">
                            <h4>";
        // line 71
        echo twig_escape_filter($this->env, ($context["hotelname"] ?? null), "html", null, true);
        echo " groepen</h4>
                            <hr>
                            <div class=\"newsItem text-left mt-2\">
                                <div class=\"row text-center\">
                                    <div class=\"col-md-4\">
                                        <img src=\"assets/images/groep.png\" class=\"img-fluid\" width=\"50\" alt=\"\">
                                        <span>";
        // line 77
        echo twig_escape_filter($this->env, ($context["group1"] ?? null), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <img src=\"assets/images/groep.png\" class=\"img-fluid\" width=\"50\" alt=\"\">
                                        <span>";
        // line 81
        echo twig_escape_filter($this->env, ($context["group2"] ?? null), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <img src=\"assets/images/groep.png\" class=\"img-fluid\" width=\"50\" alt=\"\">
                                        <span>";
        // line 85
        echo twig_escape_filter($this->env, ($context["group3"] ?? null), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <button class=\"btn btn-outline-success w-100 mt-2\">Bekijk alle groepen</button>
                            </div>
                        </div>
                    </div>
                    <div class=\"card flex-column mt-3\">
                        <div class=\"card-body\">
                            <h4>Invite and redeem</h4>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <input class=\"form-control p-2\" placeholder=\"https://";
        // line 98
        echo twig_escape_filter($this->env, ($context["hotelurl"] ?? null), "html", null, true);
        echo "/invite/";
        echo twig_escape_filter($this->env, ($context["userInviteId"] ?? null), "html", null, true);
        echo "\" type=\"text\" name=\"redeem\" readonly>
                                </div>
                                <div class=\"col-md-12 mt-2\">
                                    <button class=\"btn btn-outline-warning w-100\"><i class=\"fa fa-copy\"></i> Clipboard</button>
                                </div>
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
        return "Pages/Home/me.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 98,  149 => 85,  142 => 81,  135 => 77,  126 => 71,  110 => 58,  88 => 39,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Pages/Home/me.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Home/me.html");
    }
}
