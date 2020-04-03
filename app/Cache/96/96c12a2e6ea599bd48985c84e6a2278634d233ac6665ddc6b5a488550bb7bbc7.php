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

/* Pages/Community/articles.html */
class __TwigTemplate_8c4b989124eac08c86727b000679470ae1e08b1f5e0bd2bcb4bf5e5d5e488f5f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("app.html", "Pages/Community/articles.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"content-left news-content\">
                <div class=\"news\" style=\"background-image: url('https://images.habbo.com/web_images/habbo-web-articles/wpid-lpromo_gen_fan_2.png'); \">
                    <h4>Talk of Habbo - Coronavirus?!</h4>
                    <div class=\"news-info\">
                        <div class=\"news-info-auhtor\">
                            <div class=\"news-info-img-wrapper\">
                                <img class=\"news-info-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=ch-255-1230.hd-180-1026.lg-280-1224.sh-905-62.hr-155-31.fa-201407-70\" alt=\"\">
                                <img class=\"news-info-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/1.png\" alt=\"\">
                            </div>
                            <div class=\"news-info-author-info\">
                                <span class=\"after adm\">Hazed</span>
                                <p>ain't nothin gonna break my stride</p>
                            </div>
                        </div>
                        <div class=\"news-info-likes \" onclick=\"voteNews();\">
                            <i class=\"flame-sprite\"></i>
                            <span id=\"news-votes\">12</span>
                        </div>
                    </div>
                </div>
                <h2>Es wird Zeit, darüber zu sprechen.</h2>
                <p><strong>Aloha Habbos!</strong><br><br>Der gestrige Tag war ein voller Erfolg. Eigentlich wollten wir die 300er Marke am kommenden Samstag knacken, doch gestern passierte es dann: Es waren 312 Habbos im Habbo.st online. Wir bedanken uns bei allen, die online waren. In 2020 haben wir auf jeden Fall einen neuen Meilenstein erreicht. Doch nun wird es Zeit, über das, was gerade auf der Welt passiert, zu reden.</p>
<p><strong>Talk of Habbo - hier wird gesprochen!</strong><br>Wieso ist das Hotel momentan so gut besucht? Wieso sind wir jetzt alle Zuhause und was hat es mit dem Coronavirus auf sich? Über all' das möchten wir mit euch sprechen. Mit uns meine ich Flughafen und meine Wenigkeit (Hazed). Flughafen hat sich mit dem Thema bereits auseinandergesetzt und kann uns allen sicher einiges darüber erzählen.<br><br><strong>Wann und wo?<br></strong>Die Talkrunde findet am <strong>Donnerstag um 21:00 Uhr</strong> statt.<br>Über einen Eventalert werdet ihr pünktlich informiert und könnt euch dann zum Eventraum teleportieren.<br><br><strong>Wir sehen uns!</strong></p>                <span style=\"margin-bottom: 15px\" class=\"after adm\">Hazed</span>
<!--                <p>Euer <3 ADM!</p>-->
            </div>
<div class=\"content-right\">
                <h2>Kommenatre</h2>
                <form class=\"text-form\" action=\"/articles/176\" method=\"post\">
                    <div class=\"text-form-img-wrapper\">
                        <img class=\"text-form-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-\" alt=\"\">
                        <img class=\"text-form-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/2.png\" alt=\"\">
                    </div>
                    <input type=\"text\" name=\"comment\" value=\"\" placeholder=\"Was meinst du...\" minlength=\"5\" maxlength=\"240\" required=\"\">
                    <button type=\"submit\" name=\"button\">Senden</button>
                </form>
                <ul class=\"comments-list news-comments\">


                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hr-28021715-1073.lg-6010508-109.hd-3095-13.ch-8844182-110.ea-741232702-62-62.sh-3912-62-62.cc-3000-65\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/1.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/Henryk\">Henryk</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">Bei wem Sicherheit vor Freiheit steht, der wird am ende beides verlieren</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 01.04.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/5.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/developerCorelo\">developerCorelo</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">hassikitr poh</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 30.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/6.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/ayca\">ayca</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">folgt mir auf insta</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 30.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=ch-665-92.ha-3026-110.lg-5635282-110.fa-201407-96.ca-201422-92-110.he-3155-62.hr-3012-49.hd-787588-97554.cc-156282-110\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/10.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/LOST_Sel156\">LOST_Sel156</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">hey hey hey hey </p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 29.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=ea-30247443-1263-1228.ha-61685620-92.hd-987462871-3.sh-6298462-92.ch-6501073-92.fa-201407-1274.hr-12399140-1138.lg-987462872-92-62\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/5.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/j2a8s\">j2a8s</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">CORONA</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 28.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/2.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/tfrtc\">tfrtc</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">deutschland suckt</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 27.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-1408.ch-210-66.ca-3219-63.hr-100-0.lg-285-64.hd-180-7\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/11.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/Windows\">Windows</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">was geht</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 26.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-605-1389.ch-9911094-92.ea-741232702-63-75.hr-2684075-1036.wa-907504-62-62.sh-6010262-62.cc-987435751-84-62.lg-720-81\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/7.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/s4llybollywood\">s4llybollywood</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">bruh sogar du habbo</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 26.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=hd-84694-1391.hr-1171832-1035.fa-1205-1195.ch-3203-66.lg-561282-82-62.cp-789992-62\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/10.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/necmi\">necmi</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">do hond</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 25.03.20</span>
                    </li>
                                        <li class=\"comments-list-item\">
                        <div class=\"comments-list-item-content\" style=\"word-break: break-word;\">
                            <div class=\"comment-list-item-img-wrapper\">
                                <img class=\"comment-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-47552581-92.hr-9534-1050.lg-6145639-110-63.he-3218-1193.fa-2809-64.hd-629-1.ea-9036-63-62.ch-9993140-110\" alt=\"\">
                                <img class=\"comment-list-item-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/7.png\" alt=\"\">
                            </div>
                            <div class=\"comment-list-item-info\">
                                            <span class=\"after \">
                                                <a href=\"/home/elli_keks\">elli_keks</a>
                                            </span>
                                <p style=\"word-wrap: break-word;     max-width: 365px;\">ja, schon</p>
                            </div>
                        </div>
                        <span class=\"comments-list-item-time\">...am 25.03.20</span>
                    </li>
                    
                </ul>
            </div>
";
    }

    public function getTemplateName()
    {
        return "Pages/Community/articles.html";
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
        return new Source("", "Pages/Community/articles.html", "/var/www/cosmicproject.nl/Meteor/app/Views/Pages/Community/articles.html");
    }
}
