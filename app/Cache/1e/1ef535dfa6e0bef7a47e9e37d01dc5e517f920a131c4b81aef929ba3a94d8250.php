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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Welcome to CodeIgniter 4!</title>
\t<meta name=\"description\" content=\"The small framework with powerful features\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"/favicon.ico\"/>

\t<!-- STYLES -->

\t<style {csp-style-nonce}>
\t\t* {
\t\t\ttransition: background-color 300ms ease, color 300ms ease;
\t\t}
\t\t*:focus {
\t\t\tbackground-color: rgba(221, 72, 20, .2);
\t\t\toutline: none;
\t\t}
\t\thtml, body {
\t\t\tcolor: rgba(33, 37, 41, 1);
\t\t\tfont-family: -apple-system, BlinkMacSystemFont, \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\";
\t\t\tfont-size: 16px;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\t-webkit-font-smoothing: antialiased;
\t\t\t-moz-osx-font-smoothing: grayscale;
\t\t\ttext-rendering: optimizeLegibility;
\t\t}
\t\theader {
\t\t\tbackground-color: rgba(247, 248, 249, 1);
\t\t\tpadding: .4rem 0 0;
\t\t}
\t\t.menu {
\t\t\tpadding: .4rem 2rem;
\t\t}
\t\theader ul {
\t\t\tborder-bottom: 1px solid rgba(242, 242, 242, 1);
\t\t\tlist-style-type: none;
\t\t\tmargin: 0;
\t\t\toverflow: hidden;
\t\t\tpadding: 0;
\t\t\ttext-align: right;
\t\t}
\t\theader li {
\t\t\tdisplay: inline-block;
\t\t}
\t\theader li a {
\t\t\tborder-radius: 5px;
\t\t\tcolor: rgba(0, 0, 0, .5);
\t\t\tdisplay: block;
\t\t\theight: 44px;
\t\t\ttext-decoration: none;
\t\t}
\t\theader li.menu-item a {
\t\t\tborder-radius: 5px;
\t\t\tmargin: 5px 0;
\t\t\theight: 38px;
\t\t\tline-height: 36px;
\t\t\tpadding: .4rem .65rem;
\t\t\ttext-align: center;
\t\t}
\t\theader li.menu-item a:hover,
\t\theader li.menu-item a:focus {
\t\t\tbackground-color: rgba(221, 72, 20, .2);
\t\t\tcolor: rgba(221, 72, 20, 1);
\t\t}
\t\theader .logo {
\t\t\tfloat: left;
\t\t\theight: 44px;
\t\t\tpadding: .4rem .5rem;
\t\t}
\t\theader .menu-toggle {
\t\t\tdisplay: none;
\t\t\tfloat: right;
\t\t\tfont-size: 2rem;
\t\t\tfont-weight: bold;
\t\t}
\t\theader .menu-toggle button {
\t\t\tbackground-color: rgba(221, 72, 20, .6);
\t\t\tborder: none;
\t\t\tborder-radius: 3px;
\t\t\tcolor: rgba(255, 255, 255, 1);
\t\t\tcursor: pointer;
\t\t\tfont: inherit;
\t\t\tfont-size: 1.3rem;
\t\t\theight: 36px;
\t\t\tpadding: 0;
\t\t\tmargin: 11px 0;
\t\t\toverflow: visible;
\t\t\twidth: 40px;
\t\t}
\t\theader .menu-toggle button:hover,
\t\theader .menu-toggle button:focus {
\t\t\tbackground-color: rgba(221, 72, 20, .8);
\t\t\tcolor: rgba(255, 255, 255, .8);
\t\t}
\t\theader .heroe {
\t\t\tmargin: 0 auto;
\t\t\tmax-width: 1100px;
\t\t\tpadding: 1rem 1.75rem 1.75rem 1.75rem;
\t\t}
\t\theader .heroe h1 {
\t\t\tfont-size: 2.5rem;
\t\t\tfont-weight: 500;
\t\t}
\t\theader .heroe h2 {
\t\t\tfont-size: 1.5rem;
\t\t\tfont-weight: 300;
\t\t}
\t\tsection {
\t\t\tmargin: 0 auto;
\t\t\tmax-width: 1100px;
\t\t\tpadding: 2.5rem 1.75rem 3.5rem 1.75rem;
\t\t}
\t\tsection h1 {
\t\t\tmargin-bottom: 2.5rem;
\t\t}
\t\tsection h2 {
\t\t\tfont-size: 120%;
\t\t\tline-height: 2.5rem;
\t\t\tpadding-top: 1.5rem;
\t\t}
\t\tsection pre {
\t\t\tbackground-color: rgba(247, 248, 249, 1);
\t\t\tborder: 1px solid rgba(242, 242, 242, 1);
\t\t\tdisplay: block;
\t\t\tfont-size: .9rem;
\t\t\tmargin: 2rem 0;
\t\t\tpadding: 1rem 1.5rem;
\t\t\twhite-space: pre-wrap;
\t\t\tword-break: break-all;
\t\t}
\t\tsection code {
\t\t\tdisplay: block;
\t\t}
\t\tsection a {
\t\t\tcolor: rgba(221, 72, 20, 1);
\t\t}
\t\tsection svg {
\t\t\tmargin-bottom: -5px;
\t\t\tmargin-right: 5px;
\t\t\twidth: 25px;
\t\t}
\t\t.further {
\t\t\tbackground-color: rgba(247, 248, 249, 1);
\t\t\tborder-bottom: 1px solid rgba(242, 242, 242, 1);
\t\t\tborder-top: 1px solid rgba(242, 242, 242, 1);
\t\t}
\t\t.further h2:first-of-type {
\t\t\tpadding-top: 0;
\t\t}
\t\tfooter {
\t\t\tbackground-color: rgba(221, 72, 20, .8);
\t\t\ttext-align: center;
\t\t}
\t\tfooter .environment {
\t\t\tcolor: rgba(255, 255, 255, 1);
\t\t\tpadding: 2rem 1.75rem;
\t\t}
\t\tfooter .copyrights {
\t\t\tbackground-color: rgba(62, 62, 62, 1);
\t\t\tcolor: rgba(200, 200, 200, 1);
\t\t\tpadding: .25rem 1.75rem;
\t\t}
\t\t@media (max-width: 559px) {
\t\t\theader ul {
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\theader .menu-toggle {
\t\t\t\tpadding: 0 1rem;
\t\t\t}
\t\t\theader .menu-item {
\t\t\t\tbackground-color: rgba(244, 245, 246, 1);
\t\t\t\tborder-top: 1px solid rgba(242, 242, 242, 1);
\t\t\t\tmargin: 0 15px;
\t\t\t\twidth: calc(100% - 30px);
\t\t\t}
\t\t\theader .menu-toggle {
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\theader .hidden {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\theader li.menu-item a {
\t\t\t\tbackground-color: rgba(221, 72, 20, .1);
\t\t\t}
\t\t\theader li.menu-item a:hover,
\t\t\theader li.menu-item a:focus {
\t\t\t\tbackground-color: rgba(221, 72, 20, .7);
\t\t\t\tcolor: rgba(255, 255, 255, .8);
\t\t\t}
\t\t}
\t</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

\t<div class=\"menu\">
\t\t<ul>
\t\t\t<li class=\"logo\"><a href=\"https://codeigniter.com\" target=\"_blank\"><img height=\"44\" title=\"CodeIgniter Logo\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"Visit CodeIgniter.com official website!\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"data:image/png;base64,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\"></a>
\t\t\t</li>
\t\t\t<li class=\"menu-toggle\">
\t\t\t\t<button onclick=\"toggleMenu();\">&#9776;</button>
\t\t\t</li>
\t\t\t<li class=\"menu-item hidden\"><a href=\"#\">Home</a></li>
\t\t\t<li class=\"menu-item hidden\"><a href=\"https://codeigniter4.github.io/userguide/\" target=\"_blank\">Docs</a>
\t\t\t</li>
\t\t\t<li class=\"menu-item hidden\"><a href=\"https://forum.codeigniter.com/\" target=\"_blank\">Community</a></li>
\t\t\t<li class=\"menu-item hidden\"><a
\t\t\t\t\thref=\"https://github.com/codeigniter4/CodeIgniter4/blob/master/CONTRIBUTING.md\" target=\"_blank\">Contribute</a>
\t\t\t</li>
\t\t</ul>
\t</div>

\t<div class=\"heroe\">

\t\t<h1>Welcome to CodeIgniter <?= CodeIgniter\\CodeIgniter::CI_VERSION ?></h1>

\t\t<h2>The small framework with powerful features</h2>

\t</div>

</header>

<!-- CONTENT -->

<section>

\t<h1>About this page</h1>

\t<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

\t<p>If you would like to edit this page you will find it located at:</p>

\t<pre><code>app/Views/welcome_message.php</code></pre>

\t<p>The corresponding controller for this page can be found at:</p>

\t<pre><code>app/Controllers/Home.php</code></pre>

</section>

<div class=\"further\">

\t<section>

\t\t<h1>Go further</h1>

\t\t<h2>
\t\t\t<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><rect x='32' y='96' width='64' height='368' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='224' x2='240' y2='224' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><line x1='112' y1='400' x2='240' y2='400' style='fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px'/><rect x='112' y='160' width='128' height='304' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><rect x='256' y='48' width='96' height='416' rx='16' ry='16' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/><path d='M422.46,96.11l-40.4,4.25c-11.12,1.17-19.18,11.57-17.93,23.1l34.92,321.59c1.26,11.53,11.37,20,22.49,18.84l40.4-4.25c11.12-1.17,19.18-11.57,17.93-23.1L445,115C443.69,103.42,433.58,94.94,422.46,96.11Z' style='fill:none;stroke:#000;stroke-linejoin:round;stroke-width:32px'/></svg>
\t\t\tLearn
\t\t</h2>

\t\t<p>The User Guide contains an introduction, tutorial, a number of \"how to\"
\t\t\tguides, and then reference documentation for the components that make up
\t\t\tthe framework. Check the <a href=\"https://codeigniter4.github.io/userguide\"
\t\t\ttarget=\"_blank\">User Guide</a> !</p>

\t\t<h2>
\t\t\t<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><path d='M431,320.6c-1-3.6,1.2-8.6,3.3-12.2a33.68,33.68,0,0,1,2.1-3.1A162,162,0,0,0,464,215c.3-92.2-77.5-167-173.7-167C206.4,48,136.4,105.1,120,180.9a160.7,160.7,0,0,0-3.7,34.2c0,92.3,74.8,169.1,171,169.1,15.3,0,35.9-4.6,47.2-7.7s22.5-7.2,25.4-8.3a26.44,26.44,0,0,1,9.3-1.7,26,26,0,0,1,10.1,2L436,388.6a13.52,13.52,0,0,0,3.9,1,8,8,0,0,0,8-8,12.85,12.85,0,0,0-.5-2.7Z' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M66.46,232a146.23,146.23,0,0,0,6.39,152.67c2.31,3.49,3.61,6.19,3.21,8s-11.93,61.87-11.93,61.87a8,8,0,0,0,2.71,7.68A8.17,8.17,0,0,0,72,464a7.26,7.26,0,0,0,2.91-.6l56.21-22a15.7,15.7,0,0,1,12,.2c18.94,7.38,39.88,12,60.83,12A159.21,159.21,0,0,0,284,432.11' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
\t\t\tDiscuss
\t\t</h2>

\t\t<p>CodeIgniter is a community-developed open source project, with several
\t\t\t venues for the community members to gather and exchange ideas. View all
\t\t\t the threads on <a href=\"https://forum.codeigniter.com/\"
\t\t\t target=\"_blank\">CodeIgniter's forum</a>, or <a href=\"https://codeigniterchat.slack.com/\"
\t\t\t target=\"_blank\">chat on Slack</a> !</p>

\t\t<h2>
\t\t\t <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'><line x1='176' y1='48' x2='336' y2='48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><line x1='118' y1='304' x2='394' y2='304' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/><path d='M208,48v93.48a64.09,64.09,0,0,1-9.88,34.18L73.21,373.49C48.4,412.78,76.63,464,123.08,464H388.92c46.45,0,74.68-51.22,49.87-90.51L313.87,175.66A64.09,64.09,0,0,1,304,141.48V48' style='fill:none;stroke:#000;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px'/></svg>
\t\t\t Contribute
\t\t</h2>

\t\t<p>CodeIgniter is a community driven project and accepts contributions
\t\t\t of code and documentation from the community. Why not
\t\t\t <a href=\"https://codeigniter.com/en/contribute\" target=\"_blank\">
\t\t\t join us</a> ?</p>

\t</section>

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
\t<div class=\"environment\">

\t\t<p>Page rendered in {elapsed_time} seconds</p>

\t\t<p>Environment: <?= ENVIRONMENT ?></p>

\t</div>

\t<div class=\"copyrights\">

\t\t<p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
\t\t\topen source licence.</p>

\t</div>

</footer>

<!-- SCRIPTS -->

<script>
\tfunction toggleMenu() {
\t\tvar menuItems = document.getElementsByClassName('menu-item');
\t\tfor (var i = 0; i < menuItems.length; i++) {
\t\t\tvar menuItem = menuItems[i];
\t\t\tmenuItem.classList.toggle(\"hidden\");
\t\t}
\t}
</script>

<!-- -->

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "app.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "app.html", "/var/www/cosmicproject.nl/Meteor/app/Views/app.html");
    }
}
