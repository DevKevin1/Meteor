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
        if (($context["player"] ?? null)) {
            // line 5
            echo "<html lang=\"de\" dir=\"ltr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
    <title>";
            // line 10
            echo twig_escape_filter($this->env, ($context["sitename"] ?? null), "html", null, true);
            echo " - Habbo</title>
    <link rel=\"stylesheet\" href=\"/assets/css/web.css?v=6\">
</head>

<body id=\"body\">
    <div class=\"alerts-wrapper\" id=\"alertsWrapper\"></div>
    <div class=\"root\" id=\"root\">

        <div class=\"groups\" id=\"groups\">
            <div class=\"groups-icon-wrapper\">a
                <i class=\"groups-sprite\"></i>
            </div>
            <ul class=\"groups-list\">

                <li class=\"groups-list-item\" onmouseenter=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group100')\" onmouseleave=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group100')\" id=\"group100\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">
                    <a href=\"/groups/100\">
                        <img class=\"groups-list-item-badge\" src=\"https://images.habbo.st/habbo-imaging/badge/b05044s204114.gif\" alt=\"\">
                        <img class=\"groups-list-item-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/1.png\" alt=\"\">
                    </a>
                    <span class=\"groups-list-item-tooltip\" id=\"group100_tooltipLeft\">
                        Vegan                        <svg height=\"16px\" width=\"8px\">
                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                        </svg>
                    </span>
                </li>

                <li class=\"groups-list-item\" onmouseenter=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group101')\" onmouseleave=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group101')\" id=\"group101\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">
                    <a href=\"/groups/101\">
                        <img class=\"groups-list-item-badge\" src=\"https://images.habbo.st/habbo-imaging/badge/b05114s03137s06104.gif\" alt=\"\">
                        <img class=\"groups-list-item-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/4.png\" alt=\"\">
                    </a>
                    <span class=\"groups-list-item-tooltip\" id=\"group101_tooltipLeft\">
                        Dark Soul &lt;3                        <svg height=\"16px\" width=\"8px\">
                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                        </svg>
                    </span>
                </li>

                <li class=\"groups-list-item\" onmouseenter=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group102')\" onmouseleave=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; tooltipLeft('group102')\" id=\"group102\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">
                    <a href=\"/groups/102\">
                        <img class=\"groups-list-item-badge\" src=\"https://images.habbo.st/habbo-imaging/badge/b02134s14014s42014s183113s193115.gif\" alt=\"\">
                        <img class=\"groups-list-item-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/8.png\" alt=\"\">
                    </a>
                    <span class=\"groups-list-item-tooltip\" id=\"group102_tooltipLeft\">
                        AUSSERKONTROLLE                        <svg height=\"16px\" width=\"8px\">
                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                        </svg>
                    </span>
                </li>

            </ul>
        </div>

        <div id=\"tooltipWrapper\"></div>

        <main>
            <div class=\"hero\">
                <div class=\"wrapper\">
                    <i class=\"logo-sprite\"></i>
                </div>
            </div>
            <div class=\"bottom\">
                <div class=\"wrapper\">
                    <div class=\"attention\">
                        <i class=\"frank-sprite\"></i>
                        <button class=\"nav-button\">Home</button>
                        <div class=\"dropdown\">
                        <button class=\"nav-button\">Community</button>
                        <div class=\"dropdown-content\">
                          <a href=\"/news\">News</a>
                          <a href=\"#\">Photos</a>
                          <a href=\"#\">Staffs</a>
                        </div>
                        </div>
                        <button class=\"nav-button\">Highscores</button>
                        <button class=\"nav-button\">Help</button>
                    </div>
                </div>
                <i class=\"friends-menu\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleMenu('friends', 'searchUser')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\"></i>
            </div>
            <div class=\"wrapper\">
                <div class=\"content dynamic\">
                    ";
            // line 92
            $this->displayBlock('body', $context, $blocks);
            // line 93
            echo "                </div>
            </div>
        </main>

        <a class=\"join\" href=\"/hotel\">
            <i class=\"key-sprite\"></i>
            <span>Betrete Habbo</span>
            <svg>
                <path d=\"m 100 0 L 50 0 L 0 75 L 50 75\"></path>
            </svg>
        </a>

        <div class=\"friends\" id=\"friends\">
            <i class=\"close-sprite\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleMenu('friends', 'searchUser')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\"></i>
            <h2>Meine Freunde</h2>

            <div class=\"friends-empty\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; autoFocus('searchUserInput')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">
                <div class=\"friends-empty-img-wrapper\">
                    <i class=\"empty-head-sprite\"></i>
                    <img class=\"friends-empty-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/3.png\" alt=\"\">
                </div>
                <div class=\"friends-empty-info-wrapper\">
                    <span>MOF</span>
                    <p>Finde einen Freund...</p>
                </div>
            </div>

            <form class=\"search-user\" action=\"#\" method=\"post\" id=\"searchUser\">
                <input id=\"searchUserInput\" type=\"text\" name=\"searchUserInput\" value=\"\" placeholder=\"Finde einen Habbo...\">
                <input id=\"searchUserInputSubmit\" type=\"hidden\" name=\"searchUserInputSubmit\" value=\"\">
            </form>
        </div>
    </div>

    <div class=\"friend-window-content\">

    </div>

    <div class=\"quick-profile-content\">

    </div>
    <div class=\"quick-profile-content\">
        <div class=\"quick-profile\" id=\"flughafenQuickProfile\">
            <div class=\"quick-profile-top\">
                <div class=\"quick-profile-habbo-wrapper\">
                    <a class=\"quick-profile-top-profile-img\" href=\"profile.html\">
                        <img class=\"quick-profile-top-profile-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=lg-5635282-1189.sh-3016-1228.ch-3185-62.ea-1401-110.hr-1181032-45.cc-156282-1228.hd-3095-2&amp;headonly=0&amp;direction=3&amp;head_direction=3&amp;size=l\" alt=\"\">
                        <img class=\"quick-profile-top-profile-img-background\" src=\"https://habbo.st/public/assets/pix/img/rooms/13.png\" alt=\"\">
                    </a>
                    <div class=\"quick-profile-top-infos\">
                        <span>Flughafen</span>
                        <ul class=\"quick-profile-top-badges-list\">
                            <li class=\"quick-profile-top-badges-list-item\">
                                <img src=\"public/assets/newcms/img/icons/adm.png\" alt=\"\">
                                <span class=\"quick-profile-top-badges-list-item-tooltip\">
                                        Administrator
                                        <svg height=\"16px\" width=\"8px\">
                                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                        </svg>
                                    </span>
                            </li>
                            <li class=\"quick-profile-top-badges-list-item\">
                                <img src=\"public/assets/newcms/img/icons/unicorn.png\" alt=\"\">
                                <span class=\"quick-profile-top-badges-list-item-tooltip\">
                                        I &lt;3 Habbo.st
                                        <svg height=\"16px\" width=\"8px\">
                                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                        </svg>
                                    </span>
                            </li>
                            <li class=\"quick-profile-top-badges-list-item\">
                                <img src=\"public/assets/newcms/img/icons/checkmark.png\" alt=\"\">
                                <span class=\"quick-profile-top-badges-list-item-tooltip\">
                                        ich bin echt!
                                        <svg height=\"16px\" width=\"8px\">
                                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                        </svg>
                                    </span>
                            </li>
                            <li class=\"quick-profile-top-badges-list-item\">
                                <img src=\"public/assets/newcms/img/icons/heart.png\" alt=\"\">
                                <span class=\"quick-profile-top-badges-list-item-tooltip\">
                                        Seit 2004
                                        <svg height=\"16px\" width=\"8px\">
                                            <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                        </svg>
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--<div class=\"quick-profile-top-friends\">
                <span class=\"after badges\">Befreundet</span>
            </div>-->
                <div class=\"quick-profile-top-add-friend\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; addFriend('hazed');\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">
                    <span>Freund hinzufügen</span>
                </div>
            </div>
            <div class=\"quick-profile-center\">
                <ul class=\"quick-profile-center-nav\">
                    <li class=\"quick-profile-center-nav-item active\" id=\"flughafen_quickProfileTab_1_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileWindows('flughafen', 'quickProfileTab_1')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Habbo Infos</li>
                    <li class=\"quick-profile-center-nav-item\" id=\"flughafen_quickProfileTab_2_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileWindows('flughafen', 'quickProfileTab_2')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Gemeinsame Freunde</li>
                    <li class=\"quick-profile-center-nav-item\" id=\"flughafen_quickProfileTab_3_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileWindows('flughafen', 'quickProfileTab_3')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Gemeinsame Gruppen</li>
                </ul>
            </div>
            <div class=\"quick-profile-bottom\">
                <div class=\"quick-profile-bottom-infos active\" id=\"flughafen_quickProfileTab_1\">
                    <ul class=\"quick-profile-bottom-info-nav\">
                        <li class=\"quick-profile-bottom-info-nav-item active\" id=\"flughafen_quickProfileBottomInfoList_1_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileInfoWindows('flughafen', 'quickProfileBottomInfoList_1')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Wohlstand</li>
                        <li class=\"quick-profile-bottom-info-nav-item\" id=\"flughafen_quickProfileBottomInfoList_2_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileInfoWindows('flughafen', 'quickProfileBottomInfoList_2')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Aktivität</li>
                        <li class=\"quick-profile-bottom-info-nav-item\" id=\"flughafen_quickProfileBottomInfoList_3_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileInfoWindows('flughafen', 'quickProfileBottomInfoList_3')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Persönliches</li>
                        <li class=\"quick-profile-bottom-info-nav-item\" id=\"flughafen_quickProfileBottomInfoList_4_button\" onclick=\"if (!window.__cfRLUnblockHandlers) return false; if (!window.__cfRLUnblockHandlers) return false; toggleQuickProfileInfoWindows('flughafen', 'quickProfileBottomInfoList_4')\" data-cf-modified-ca8030e70cd322f260bcfce8-=\"\">Bezieungen</li>
                    </ul>
                    <ul class=\"quick-profile-bottom-info-list active\" id=\"flughafen_quickProfileBottomInfoList_1\">
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before credits\">Taler:</span>
                            <p>123.232.323</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before diamonds\">Diamanten:</span>
                            <p>123.232.323</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before flame\">Flammen:</span>
                            <p>123.232.323</p>
                        </li>
                    </ul>
                    <ul class=\"quick-profile-bottom-info-list\" id=\"flughafen_quickProfileBottomInfoList_2\">
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before chat\">Aktivitätspunkte:</span>
                            <p>12.345</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before heart\">Registiert am:</span>
                            <p>01.01.2004</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before frank_head\">Zuletzt online:</span>
                            <p>01.01.2014</p>
                        </li>
                    </ul>
                    <ul class=\"quick-profile-bottom-info-list\" id=\"flughafen_quickProfileBottomInfoList_3\">
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before head\">Freunde:</span>
                            <p>123</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before badges\">Badges:</span>
                            <p>1.233</p>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before furni\">Möbel:</span>
                            <p>123.232</p>
                        </li>
                    </ul>
                    <ul class=\"quick-profile-bottom-info-list\" id=\"flughafen_quickProfileBottomInfoList_4\">
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before love\">Lieblinge:</span>
                            <ul class=\"quick-profile-user-list\">
                                <li class=\"quick-profile-user-list-item\">
                                    <a href=\"profile.html\"><span class=\"after dev\">PixelDixel</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before happy\">Gute Freunde:</span>
                            <ul class=\"quick-profile-user-list\">
                                <li class=\"quick-profile-user-list-item\">
                                    <a href=\"profile.html\"><span class=\"after dev\">PixelDixel</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"quick-profile-bottom-info-list-item\">
                            <span class=\"quick-profile-bottom-info-list-item-header before skull\">Erzfeinde:</span>
                            <ul class=\"quick-profile-user-list\">
                                <li class=\"quick-profile-user-list-item\">
                                    <a href=\"profile.html\"><span class=\"after dev\">PixelDixel</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class=\"quick-profile-bottom-friends\" id=\"flughafen_quickProfileTab_2\">
                    <ul class=\"quick-profile-bottom-friends-list\">
                        <li class=\"quick-profile-bottom-friends-list-item\">
                            <a href=\"profile.html\">
                                <div class=\"quick-profile-bottom-friends-list-item-img-wrapper\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-62.ch-804-68.hr-155-45.hd-180-1026.lg-275-1193\" alt=\"\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                                </div>
                                <div class=\"quick-profile-bottom-friends-list-item-infos-wrapper\">
                                    <span class=\"after dev\">PixelDixel</span>
                                    <p>Niemand überlebt das Leben...</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"quick-profile-bottom-friends-list-item\">
                            <a href=\"profile.html\">
                                <div class=\"quick-profile-bottom-friends-list-item-img-wrapper\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-62.ch-804-68.hr-155-45.hd-180-1026.lg-275-1193\" alt=\"\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                                </div>
                                <div class=\"quick-profile-bottom-friends-list-item-infos-wrapper\">
                                    <span class=\"after dev\">PixelDixel</span>
                                    <p>Niemand überlebt das Leben...</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"quick-profile-bottom-friends-list-item\">
                            <a href=\"profile.html\">
                                <div class=\"quick-profile-bottom-friends-list-item-img-wrapper\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-62.ch-804-68.hr-155-45.hd-180-1026.lg-275-1193\" alt=\"\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                                </div>
                                <div class=\"quick-profile-bottom-friends-list-item-infos-wrapper\">
                                    <span class=\"after dev\">PixelDixel</span>
                                    <p>Niemand überlebt das Leben...</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"quick-profile-bottom-friends-list-item\">
                            <a href=\"profile.html\">
                                <div class=\"quick-profile-bottom-friends-list-item-img-wrapper\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-62.ch-804-68.hr-155-45.hd-180-1026.lg-275-1193\" alt=\"\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                                </div>
                                <div class=\"quick-profile-bottom-friends-list-item-infos-wrapper\">
                                    <span class=\"after dev\">PixelDixel</span>
                                    <p>Niemand überlebt das Leben...</p>
                                </div>
                            </a>
                        </li>
                        <li class=\"quick-profile-bottom-friends-list-item\">
                            <a href=\"profile.html\">
                                <div class=\"quick-profile-bottom-friends-list-item-img-wrapper\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-habbo\" src=\"https://cdn.wibbo.me/habbo-imaging/avatarimage?figure=sh-290-62.ch-804-68.hr-155-45.hd-180-1026.lg-275-1193\" alt=\"\">
                                    <img class=\"quick-profile-bottom-friends-list-item-img-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                                </div>
                                <div class=\"quick-profile-bottom-friends-list-item-infos-wrapper\">
                                    <span class=\"after dev\">PixelDixel</span>
                                    <p>Niemand überlebt das Leben...</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"quick-profile-bottom-groups\" id=\"flughafen_quickProfileTab_3\">
                    <ul class=\"quick-profile-bottom-groups-list\">
                        <li class=\"quick-profile-bottom-groups-item\">
                            <div class=\"quick-profile-bottom-groups-item-wrapper\">
                                <img class=\"quick-profile-bottom-groups-item-badge\" src=\"public/assets/newcms/img/groups/1.png\" alt=\"\">
                                <img class=\"quick-profile-bottom-groups-item-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                            </div>
                            <span class=\"quick-profile-bottom-groups-item-tooltip\">
                                    Philo - Leben und leben lassen...
                                    <svg height=\"16px\" width=\"8px\">
                                        <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                    </svg>
                                </span>
                        </li>
                        <li class=\"quick-profile-bottom-groups-item\">
                            <div class=\"quick-profile-bottom-groups-item-wrapper\">
                                <img class=\"quick-profile-bottom-groups-item-badge\" src=\"public/assets/newcms/img/groups/1.png\" alt=\"\">
                                <img class=\"quick-profile-bottom-groups-item-background\" src=\"public/assets/newcms/img/rooms/1.png\" alt=\"\">
                            </div>
                            <span class=\"quick-profile-bottom-groups-item-tooltip\">
                                    Philo - Leben und leben lassen...
                                    <svg height=\"16px\" width=\"8px\">
                                        <path d=\"M 0 8 L 8 0 L 8 16 L 0 8\"></path>
                                    </svg>
                                </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
   ";
        } else {
            // line 372
            echo "    ";
            $this->loadTemplate("login.html", "app.html", 372)->display($context);
            // line 373
            echo " ";
        }
        // line 374
        echo "    ";
    }

    // line 92
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
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
        return array (  441 => 92,  437 => 374,  434 => 373,  431 => 372,  150 => 93,  148 => 92,  63 => 10,  56 => 5,  54 => 4,  50 => 3,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app.html", "/var/www/cosmicproject.nl/Meteor/app/Views/app.html");
    }
}
