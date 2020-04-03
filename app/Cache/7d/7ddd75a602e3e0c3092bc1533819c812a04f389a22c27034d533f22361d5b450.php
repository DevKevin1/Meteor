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

/* login.html */
class __TwigTemplate_43a3b828be85cba4735325cf06099c572c0be93b06acc5b89e16fe148eef5d6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"de\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
\t<meta name=\"description\" content=\"Habbo ist eine virtuelle Welt für Kinder und Jugendliche. Hier bei uns kannst du eigene Räume erstellen, Freunde finden und berühmt werden!\">  
\t<meta name=\"keywords\" content=\"habbo, habbo hotel, habbo retro, browserspiel, spiele kostenlos, kostenlose spiele, habbo gratis taler, gratis taler, habbo kostenlos, spielekarussell, spielaffe, habbo.st\">
\t<meta name=\"robots\" content=\"index, follow\"> 
    <title>";
        // line 9
        echo twig_escape_filter($this->env, ($context["sitename"] ?? null), "html", null, true);
        echo " - Dein Retro Hotel seit 2004.</title>
    <link rel=\"shortcut icon\" href=\"https://habbo.st/public/assets/pix/img/icons/icon.ico\" type=\"image/vnd.microsoft.icon\">
    <link rel=\"stylesheet\" href=\"https://habbo.st/public/assets/pix/css/app.css\">
    <script
            src=\"https://code.jquery.com/jquery-3.4.1.min.js\"
            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"
            crossorigin=\"anonymous\"></script>
    <style>
        .alerts-wrapper {
            position: fixed;
            top: 35px;
            left: 0;
            width: 100%;
            height: max-content;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            z-index: 15;
        }
        .alerts-wrapper .alert-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
            animation: alertFadeInOutWrapper 6s ease-in-out;
            opacity: 0;
            pointer-events: none;
            transition: 1s;
            height: max-content;
            transform: translateY(-100%);
        }
        @keyframes alertFadeInOutWrapper {
            0% {
                transform: translateY(-100%);
                opacity: 0;
                padding: 5px 0;
                margin-bottom: 15;
            }
            10% {
                transform: translateY(0);
                opacity: 1;
                padding: 5px 0;
                margin-bottom: 15px;
            }
            80% {
                transform: translateY(0);
                opacity: 1;
                padding: 5px 0;
                margin-bottom: 15px;
            }
            90% {
                padding: 5px 0;
                opacity: 0;
                transform: translateY(-100%);
                margin-bottom: 15px;
            }
            91% {
                padding: 5px 0;
                margin-bottom: 15px;
            }
            100% {
                margin-bottom: 0px;
                padding: 0;
            }
        }
        .alerts-wrapper .alert-wrapper .alert {
            padding: 0;
            width: calc(max-content - 30px);
            background-color: #000;
            border-radius: 5px;
            height: 0%;
            color: #fff;
            font-weight: 600;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, .2);
            animation: alertFadeInOut 6s ease-in-out;
        }
        @keyframes alertFadeInOut {
            0% {
                height: 100%;
                padding: 15px;
            }
            91% {
                height: 100%;
                padding: 15px;
            }
            100% {
                height: 0%;
                padding: 0;
            }
        }
        .alerts-wrapper .alert-wrapper .alert p {
            display: block;
            overflow: hidden;
            opacity: .75;
            height: 0px;
            animation: alertFadeInOutp 6s ease-in-out;
        }
        @keyframes alertFadeInOutp {
            0% {
                height: 100%;
            }
            91% {
                height: 100%;
            }
            100% {
                height: 0px;
            }
        }
        .alerts-wrapper .alert-wrapper .alert.error {
            background-color: #BF2020;
        }
        .alerts-wrapper .alert-wrapper .alert.success {
            background-color: #20BF6B;
        }
    </style>
</head>
<body>
<div class=\"alerts-wrapper\" id=\"alertsWrapper\"></div>
<div class=\"root\">

    <div class=\"top\">
        <div class=\"top-quotes\">
            
                <img src=\"https://habbo.st/public/assets/pix/img/icons/frank.png\" alt=\"\">
                <p>„Ich kenne kein besseres Retro Hotel, als das Habbo.st!“</p>
                <span>-</span>
                <a href=\"#\">Frank</a>
           
        </div>
        <div class=\"top-register\">
            <img src=\"https://habbo.st/public/assets/pix/img/icons/arrow.png\" alt=\"\">
            <button type=\"button\" name=\"button\" onclick=\"openRegister()\">
                Jetzt Mitglied werden
                <svg>
                    <g>
                        <path d=\"m 100 0 L 50 0 L 0 75 L 50 75\" />
                    </g>
                </svg>
            </button>
        </div>
    </div>

    <main>

        <div class=\"banner login on\" id=\"loginForm\">
            <div class=\"banner-top\">
                <a href=\"#\">
                    <img src=\"https://habbo.st/public/assets/pix/img/icons/logo.png\" alt=\"\">
                    <h1>Habbo.st</h1>
                </a>
\t\t<span class=\"userCount\">183 User online</span>
            </div>
            <form class=\"banner-form\" action=\"/login\" method=\"post\" autocomplete=\"off\" id=\"login\">
                <label for=\"username\">Benutzername</label>
                <div class=\"wrapper-notification\" id=\"notificationUsername\">
                    <input class=\"username\" type=\"text\" name=\"username\" value=\"\">
                </div>
                <label for=\"password\">Passwort</label>
                <div class=\"wrapper-notification\" id=\"notificationPassword\">
                    <input class=\"password\" type=\"password\" name=\"password\" value=\"\">
                </div>
                <span class=\"spanLink\"><a href=\"#\" onclick=\"resetPassword()\">Passwort vergessen?</a></span>
                <input type=\"submit\" name=\"button\" id=\"loginButton\" value=\"Anmelden\" />
                <span class=\"spanLink register\"><a href=\"#\" onclick=\"openRegister()\">Neu hier? Mitglied werden!</a></span>
            </form>
            <svg width=\"390px\" height=\"75px\" class=\"banner-triangle\">
                <path d=\"m 0 0 l 390 0 L 195 75\" fill=\"#202225\" />
            </svg>
        </div>

        <div class=\"banner register off\" id=\"registerForm\">
            <div class=\"banner-top\">
                <a href=\"#\">
                    <img src=\"https://habbo.st/public/assets/pix/img/icons/logo.png\" alt=\"\">
                    <h1>Habbo.st</h1>
                </a>
\t\t\t<span class=\"userCount\">183 User online</span>
            </div>
            <h2>Registrieren</h2>
            <form class=\"banner-form\" action=\"/index\" method=\"post\" onsubmit=\"event.preventDefault(); checkRegisterInput();\" id=\"register\">
                <label for=\"usernameReg\">Benutzername</label>
                <div class=\"wrapper-notification\" id=\"notificationUsernameReg\">
                    <input class=\"username\" type=\"text\" name=\"usernameReg\" value=\"\" autocomplete=\"off\">
                </div>
                <label for=\"passwordReg\">Passwort</label>
                <div class=\"wrapper-notification\" id=\"notificationPasswordReg\">
                    <input class=\"password\" type=\"password\" name=\"passwordReg\" value=\"\">
                </div>
                <div class=\"wrapper-notification\" id=\"notificationPasswordRegR\">
                    <input class=\"password\" type=\"password\" name=\"passwordRegR\" value=\"\">
                </div>
                <label for=\"emailReg\">E-mail</label>
                <div class=\"wrapper-notification\" id=\"notificationEmailReg\">
                    <input class=\"email\" type=\"text\" name=\"emailReg\" value=\"\" autocomplete=\"off\">
                </div>
                <input type=\"submit\" name=\"buttonReg\" value=\"Registrieren\" />
            </form>
            <svg width=\"390px\" height=\"75px\" class=\"banner-triangle\">
                <path d=\"m 0 0 l 390 0 L 195 75\" fill=\"#202225\" />
            </svg>
        </div>

        <div class=\"collage\">
            <ul class=\"collage-list\">
                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/1c325fe0747895ad04ab92449c6b9825.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/456f307f42f652704ceb187a535d4ca9.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/456f307f42f652704ceb187a535d4ca9.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/85473b97ee2af9cf8c97f911869e108a.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/85473b97ee2af9cf8c97f911869e108a.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/85473b97ee2af9cf8c97f911869e108a.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/109665fbb3c9f6f619a472a4dcc428fd.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/109665fbb3c9f6f619a472a4dcc428fd.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/109665fbb3c9f6f619a472a4dcc428fd.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/109665fbb3c9f6f619a472a4dcc428fd.png\" alt=\"\">
                </li>

                                <li class=\"collage-item\">
                    <img src=\"https://images.habbo.st/swfz/newfoto/camera/109665fbb3c9f6f619a472a4dcc428fd.png\" alt=\"\">
                </li>

                
            </ul>
        </div>

    </main>

    <div class=\"footer-wrapper\">

        <footer>
            <div class=\"footer-wrapper\">
                <div class=\"footer-links\">
                    <ul>
                        <li>
                            <img src=\"https://habbo.st/public/assets/pix/img/icons/logo.png\" alt=\"\">
                            <a href=\"/\">Habbo.st</a>
                        </li>
                        <li>
                            <a href=\"/impressum\">Impressum</a>
                        </li>
                        <li>
                            <a href=\"/playing-habbo/safety\">Sicherheit</a>
                        </li>
                        <li>
                            <a href=\"https://app.habbo.st\">App</a>
                        </li>
\t\t\t\t\t\t<li>
                            <a href=\"https://discord.habbo.st\">Discord</a>
                        </li>
                    </ul>
                </div>
                <div class=\"footer-social\">
                    <a href=\"#\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" width=\"24px\">
                            <g>
                                <path d=\"m3.58 21.196h14.259l-.681-2.205 1.629 1.398 1.493 1.338 2.72 2.273v-21.525c-.068-1.338-1.22-2.475-2.648-2.475l-16.767.003c-1.427 0-2.585 1.139-2.585 2.477v16.24c0 1.411 1.156 2.476 2.58 2.476zm10.548-15.513-.033.012.012-.012zm-7.631 1.269c1.833-1.334 3.532-1.27 3.532-1.27l.137.135c-2.243.535-3.26 1.537-3.26 1.537s.272-.133.747-.336c3.021-1.188 6.32-1.102 9.374.402 0 0-1.019-.937-3.124-1.537l.186-.183c.291.001 1.831.055 3.479 1.26 0 0 1.844 3.15 1.844 7.02-.061-.074-1.144 1.666-3.931 1.726 0 0-.472-.534-.808-1 1.63-.468 2.24-1.404 2.24-1.404-.535.337-1.023.537-1.419.737-.609.268-1.219.4-1.828.535-2.884.468-4.503-.315-6.033-.936l-.523-.266s.609.936 2.174 1.404c-.411.469-.818 1.002-.818 1.002-2.786-.066-3.802-1.806-3.802-1.806 0-3.876 1.833-7.02 1.833-7.02z\" data-original=\"#000000\" class=\"active-path\" data-old_color=\"#000000\" fill=\"#FFFFFF\"/>
                                <path d=\"m14.308 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.576-1.335-1.29-1.335v.003c-.708 0-1.288.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z\" data-original=\"#000000\" class=\"active-path\" data-old_color=\"#000000\" fill=\"#FFFFFF\"/>
                                <path d=\"m9.69 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.575-1.335-1.286-1.335l-.004.003c-.711 0-1.29.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z\" data-original=\"#000000\" class=\"active-path\" data-old_color=\"#000000\" fill=\"#FFFFFF\"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <svg width=\"3840px\" height=\"2160px\" class=\"trapeze\">
        <g>
            <path d=\"m 0 0 L 720 0 L 1950 2160 L 0 2160\" fill=\"#FDDE00\" />
        </g>
    </svg>
    <img class=\"background\" src=\"https://habbo.st/public/assets/pix/img/backgrounds/larg_hotel.png\" alt=\"\">

</div>

<script type=\"text/javascript\">

    function openRegister() {
        document.getElementById(\"loginForm\").classList.remove(\"on\");
        document.getElementById(\"loginForm\").classList.add(\"off\");
        setTimeout(function(){
            document.getElementById(\"loginForm\").style.display = \"none\";
            document.getElementById(\"registerForm\").style.display = \"block\";
            document.forms[\"register\"][\"usernameReg\"].focus();
            setTimeout(function(){
                document.getElementById(\"registerForm\").classList.remove(\"off\");
                document.getElementById(\"registerForm\").classList.add(\"on\");
            },20);
        },1000);
    }

    function checkInputsLogin() {

        var username = 0;
        var password = 0;

        if (document.forms[\"login\"][\"username\"].value == \"\") {
            \$(\"#notificationUsername .notification\").remove();
            document.getElementById(\"notificationUsername\").innerHTML += \"<span class='notification'>Benutzername fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
        } else {
            var username = 1;
            document.forms[\"login\"][\"username\"].style.border = \"\";
            \$(\"#notificationUsername .notification\").remove();
        };

        if (document.forms[\"login\"][\"password\"].value == \"\") {
            \$(\"#notificationPassword .notification\").remove();
            document.getElementById(\"notificationPassword\").innerHTML += \"<span class='notification'>Passwort fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            if(username == 1) {
                document.forms[\"login\"][\"password\"].focus();
                \$(\"#notificationUsername .notification\").remove();
                document.forms[\"login\"][\"username\"].style.border = \"\";
            } else {
                document.forms[\"login\"][\"password\"].style.border = \"1px solid #d63031\";
                document.forms[\"login\"][\"username\"].style.border = \"1px solid #d63031\";
            }
        } else {
            var password = 1;
            \$(\"#notificationPassword .notification\").remove();
            if(username == 0)
            {
                document.forms[\"login\"][\"username\"].style.border = \"1px solid #d63031\";
                document.forms[\"login\"][\"username\"].focus();
            }
        };

        if (document.forms[\"login\"][\"password\"].value !== \"\" && document.forms[\"login\"][\"username\"].value !== \"\" ) {
           // \$.post(\"/\", { username: document.forms[\"login\"][\"username\"].value, password: document.forms[\"login\"][\"password\"].value, login: \"\"   }).done(function(data) {
           //
           //     if(data.startsWith())
           //
           // });

            \$.ajax({
                type: 'POST',
                url:'/index',
                data: { action: \"login\", username: document.forms[\"login\"][\"username\"].value, password: document.forms[\"login\"][\"password\"].value, login: \"ajax\"   },
                success: function(data, textStatus, request){

                    if(request.responseText == \"error\")
                    {
                        document.getElementById(\"notificationPassword\").innerHTML += \"<span class='notification'>Username oder Passwort falsch.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                    }
                    else if(request.responseText.startsWith(\"ban\"))
                    {
                        var msg = request.responseText.replace('ban;','');
                        alert(\"error\", msg);
                    }
                    else
                    {
                        window.location.href = request.responseText;
                    }

                        
                },
                error: function (request, textStatus, errorThrown) {
               //     alert(request.getAllResponseHeaders() + \" Error\");
              //      console.log(errorThrown);
                }
            });



        }
    }

    function checkRegisterInput()
    {
        var username = 0;
        var password = 0;
        var password2 = 0;
        var mail = 0;

       
        
        
        \$(\"#notificationUsernameReg .notification\").remove();
        \$(\"#notificationPasswordReg .notification\").remove();
        \$(\"#notificationPasswordRegR .notification\").remove();
        \$(\"#notificationEmailReg .notification\").remove();



        if (document.forms[\"register\"][\"usernameReg\"].value == \"\")
        {
            document.getElementById(\"notificationUsernameReg\").innerHTML += \"<span class='notification'>Benutzername fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            document.forms[\"register\"][\"usernameReg\"].style.border = \"1px solid #d63031\";
        }
        else
        {
            var username = 1;
            document.forms[\"register\"][\"usernameReg\"].style.border = \"\";
        };



        if (\$('[name=\"passwordReg\"]').val() == \"\")
        {
            document.getElementById(\"notificationPasswordReg\").innerHTML += \"<span class='notification'>Passwort fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            document.forms[\"register\"][\"passwordReg\"].style.border = \"1px solid #d63031\";
        }
        else
        {
            password = 1;
            document.forms[\"register\"][\"passwordReg\"].style.border = \"\";
        };



        if (\$('[name=\"passwordRegR\"]').val() == \"\")
        {
            document.getElementById(\"notificationPasswordRegR\").innerHTML += \"<span class='notification'>Passwort wiederholung fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            document.forms[\"register\"][\"passwordRegR\"].style.border = \"1px solid #d63031\";
        }
        else
        {
            password2 = 1;
            document.forms[\"register\"][\"passwordRegR\"].style.border = \"\";
        }

        if(\$('[name=\"passwordReg\"]').val() != \"\" && \$('[name=\"passwordRegR\"]').val() != \"\")
        {
            if(\$('[name=\"passwordReg\"]').val() != \$('[name=\"passwordRegR\"]').val())
            {
                document.getElementById(\"notificationPasswordRegR\").innerHTML += \"<span class='notification'>Wiederholung stimmt nicht überein.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                document.forms[\"register\"][\"passwordRegR\"].style.border = \"1px solid #d63031\";
                password2 = 0;
            }
            else
            {
                document.forms[\"register\"][\"passwordRegR\"].style.border = \"\";
            }
        }


        if (document.forms[\"register\"][\"emailReg\"].value == \"\")
        {
            document.getElementById(\"notificationEmailReg\").innerHTML += \"<span class='notification'>Email Adresse fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            document.forms[\"register\"][\"emailReg\"].style.border = \"1px solid #d63031\";
        }
        else
        {
            mail = 1;
            document.forms[\"register\"][\"emailReg\"].style.border = \"\";
        }

        if (username == 1 && password == 1 && password2 == 1 && mail == 1)
        {
            \$.ajax({
                type: 'POST',
                url:'/index',
                data: { action: \"register\", username: document.forms[\"register\"][\"usernameReg\"].value, password: document.forms[\"register\"][\"passwordReg\"].value, email: document.forms[\"register\"][\"emailReg\"].value, login: \"ajax\"   },
                success: function(data, textStatus, request){

                    switch(request.responseText)
                    {  
                        case \"username\":
                            document.getElementById(\"notificationUsernameReg\").innerHTML += \"<span class='notification'>Username ist bereits vergeben.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                            break;

                        case \"username_length\":
                            document.getElementById(\"notificationUsernameReg\").innerHTML += \"<span class='notification'>Username ist zu kurz.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                            break;

                        case \"password_length\":
                            document.getElementById(\"notificationPasswordReg\").innerHTML += \"<span class='notification'>Passwort ist zu unsicher (Mindestens 7 Zeichen).<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                            break;

                        case \"email\":
                            document.getElementById(\"notificationEmailReg\").innerHTML += \"<span class='notification'>Email Adresse ist ungültig o. vergeben.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                            break;

                        case \"clone\":
                            document.getElementById(\"notificationUsernameReg\").innerHTML += \"<span class='notification'>Bitte nutze deinen bestehenden Account.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
                            break;

                        default:
                            window.location.href = request.responseText;
                            break;
                    }
                },
                error: function (request, textStatus, errorThrown)
                {
            
                }
            });
        }
    }

    function resetPassword() {
        if (document.forms[\"login\"][\"username\"].value == \"\") {
            document.getElementById(\"notificationUsername\").innerHTML += \"<span class='notification'>Benutzername fehlt.<svg width='18px' height='18px'><path d='M 0 9 L 9 0 L 9 18 L 0 9' fill='#d63031' /></svg></span>\";
            document.forms[\"login\"][\"username\"].focus();
            document.forms[\"login\"][\"password\"].classList.add(\"disabled\");
            document.forms[\"login\"][\"loginButton\"].classList.add(\"disabled\");
        } else {
            alert(\"EMAIL SENDEN!\");
        };
    }

    function alert(type, message) {
        var divWrapper = document.createElement(\"div\")
        divWrapper.setAttribute(\"id\", \"alert\");
        divWrapper.className = \"alert-wrapper\"
        var divAlert = document.createElement(\"div\")
        divAlert.className = \"alert \" + type
        var p = document.createElement(\"p\")
        var node = document.createTextNode(message)

        p.appendChild(node)
        divAlert.appendChild(p)
        divWrapper.appendChild(divAlert)

        document.getElementById('alertsWrapper').appendChild(divWrapper)

        setTimeout(function(){
            document.getElementById('alert').remove()
        }, 6000);
    }

</script>

<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59fbb328198bd56b8c0390fd/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script src=\"/ressources/js/scripts.js?cache=91\"></script>

</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "/var/www/cosmicproject.nl/Meteor/app/Views/login.html");
    }
}
