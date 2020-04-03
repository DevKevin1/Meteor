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

/* Pages/Home/home.html */
class __TwigTemplate_be97df4bc181d2fd24d241eade3d468b02fadc52468de2be4717de0c067b6d49 extends \Twig\Template
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
        return "app.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("app.html", "Pages/Home/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"content-left\">
                    <h2>Aktueller Artikel</h2>
                                        <div class=\"news\" style=\"background-image: url('https://images.habbo.com/web_images/habbo-web-articles/wpid-lpromo_gen_fan_2.png');\">
                        <h4>Talk of Habbo - Coronavirus?!                            </h4>
                        <div class=\"news-info\">
                            <p>Es wird Zeit, darüber zu sprechen.</p>
                            <a href=\"/articles/176\">Mehr erfahren</a>
                        </div>
                    </div>
                                        <h2>Auktionshaus</h2>
                    <div class=\"auction\">
                        <div class=\"auction-display\">
                            <div class=\"auction-time\">
                                <i class=\"clock-sprite\"></i>
                                <span>20 Tage</span>
                            </div>
                            <img class=\"rare\" src=\"https://habbo.st/public/assets/pix/img/auction/dragon.png\" alt=\"\">
                        </div>
                        <div class=\"auction-info\">
                            <h3>Aktueller Höchstbieter</h3>
                            <div class=\"auction-info-user\">
                                <div class=\"auction-info-user-img-wrapper\">
                                    <img class=\"auction-info-user-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=lg-275-63.ha-6058508-1189.hd-209-19.ch-255-1189.hr-3163-1034\" alt=\"\">
                                    <img class=\"auction-info-user-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/6.png\" alt=\"\">
                                </div>
                                <div class=\"auction-info-user-wrapper\">
                                    <span class=\"after hc\">Pasi</span>
                                    <p>Frank ist etwas besorgt</p>
                                </div>
                            </div>
                            <h3>mit 200 Diamanten</h3>
                            <form class=\"\" action=\"index.html\" method=\"post\">
                                <input type=\"text\" name=\"\" value=\"\">
                                <button class=\"auction-send\" type=\"button\" name=\"button\">Bieten</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class=\"content-right\">
                    <h2>Letzte Artikel</h2>
                    <ul class=\"news-list\">

                                                <li class=\"news-list-item\" style=\"background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_habboweengames.png');\">
                            <h4>250 User, check! 300 User?</h4>
                            <a href=\"/articles/173\">mehr erfahren</a>
                        </li>


                                                <li class=\"news-list-item\" style=\"background-image: url('https://images.habbo.com/web_images/habbo-web-articles/lpromo_march20_gen.png');\">
                            <h4>Mehr als 200 Habbos waren online!</h4>
                            <a href=\"/articles/172\">mehr erfahren</a>
                        </li>


                                                <li class=\"news-list-item\" style=\"background-image: url('https://images.habbo.st/uploader/roomads/NEWS_KNAST.png');\">
                            <h4>Knastevent</h4>
                            <a href=\"/articles/171\">mehr erfahren</a>
                        </li>


                                            </ul>
                    <h2>Habbo der Woche</h2>
                    <div class=\"habbo-display\">
                        <div class=\"habbo-display-habbo\">
                            <img src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=ch-660-110.sh-201414-92.lg-710-1193.fa-201407-1263.hr-515-1066.hd-629-2\" alt=\"\">
                        </div>
                        <div class=\"habbo-display-info\">
                                    <span class=\"after hotw\">
                                        <a href=\"profile.html\">yaw</a>
                                    </span>
                            <p>Nur der, der liebt, lebt.</p>
                        </div>
                    </div>
                    <h2>Discord</h2>
                    <div class=\"box img\">
                        <p>Werde Teil unseres Discord-Servers und erweitere deinen Habbo-Spaß!<br><a href=\"https://discord.habbo.st/\">Jezt beitreten!</a></p>
                        <img src=\"https://habbo.st/public/assets/pix/img/backgrounds/discord.png\" alt=\"\">
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Home/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Pages/Home/home.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Home/home.html");
    }
}
