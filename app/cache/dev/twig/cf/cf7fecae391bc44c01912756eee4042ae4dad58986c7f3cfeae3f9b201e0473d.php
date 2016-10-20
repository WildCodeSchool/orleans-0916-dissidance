<?php

/* base.html.twig */
class __TwigTemplate_13b0d44c1252a3517c5cab864a06c8c892862af088ab27129e8a4b47bc99f5da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e89c5afae403765cb29d8a55dea445ca6c4009d3ad429f456b8b28cde4279ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e89c5afae403765cb29d8a55dea445ca6c4009d3ad429f456b8b28cde4279ed->enter($__internal_1e89c5afae403765cb29d8a55dea445ca6c4009d3ad429f456b8b28cde4279ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Dissidance_21.png"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 22
        $this->displayBlock('menu', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
    </body>
</html>
";
        
        $__internal_1e89c5afae403765cb29d8a55dea445ca6c4009d3ad429f456b8b28cde4279ed->leave($__internal_1e89c5afae403765cb29d8a55dea445ca6c4009d3ad429f456b8b28cde4279ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_baaf6db47c2f4926ce4abfdf6adaa39dccd4df865fb5277c63aea13e2dd33395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baaf6db47c2f4926ce4abfdf6adaa39dccd4df865fb5277c63aea13e2dd33395->enter($__internal_baaf6db47c2f4926ce4abfdf6adaa39dccd4df865fb5277c63aea13e2dd33395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "D I S S I D A N C E";
        
        $__internal_baaf6db47c2f4926ce4abfdf6adaa39dccd4df865fb5277c63aea13e2dd33395->leave($__internal_baaf6db47c2f4926ce4abfdf6adaa39dccd4df865fb5277c63aea13e2dd33395_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b128cb4707bfee05780d61358785ad72bcf38ceaaf937d5c0bdbc8482f617bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b128cb4707bfee05780d61358785ad72bcf38ceaaf937d5c0bdbc8482f617bcd->enter($__internal_b128cb4707bfee05780d61358785ad72bcf38ceaaf937d5c0bdbc8482f617bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/css?family=Special+Elite\" rel=\"stylesheet\">
        ";
        
        $__internal_b128cb4707bfee05780d61358785ad72bcf38ceaaf937d5c0bdbc8482f617bcd->leave($__internal_b128cb4707bfee05780d61358785ad72bcf38ceaaf937d5c0bdbc8482f617bcd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f7eaea4712f948dc8c06d26788ee3aa358dfb3a274e99ebc4bd2fc2542ee549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7eaea4712f948dc8c06d26788ee3aa358dfb3a274e99ebc4bd2fc2542ee549->enter($__internal_3f7eaea4712f948dc8c06d26788ee3aa358dfb3a274e99ebc4bd2fc2542ee549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_3f7eaea4712f948dc8c06d26788ee3aa358dfb3a274e99ebc4bd2fc2542ee549->leave($__internal_3f7eaea4712f948dc8c06d26788ee3aa358dfb3a274e99ebc4bd2fc2542ee549_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9b8eac185cf931ccc6990c50d716706dd27ba77788ab57572530da928ddde92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b8eac185cf931ccc6990c50d716706dd27ba77788ab57572530da928ddde92->enter($__internal_b9b8eac185cf931ccc6990c50d716706dd27ba77788ab57572530da928ddde92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 23
        echo "            <div class=\"menu_screenSm\" >
                <div class=\"burger\">
                    <a href=\"#nav\" id=\"button_burger\"><img id=\"icon\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/burger.png"), "html", null, true);
        echo "\"></a>
                    <ul id=\"nav\">
                        <li><a href=\"##\" id=\"left_menu\"></a></li>
                        <li class=\"nav-li\"><a href=\"#\">Home</a></li>
                        <li class=\"nav-li\"><a href=\"#\">About Dissidance</a></li>
                        <li class=\"nav-li\"><a href=\"#\">Intimate clubbing</a></li>
                        <li class=\"nav-li\"><a href=\"#\">Merchandising</a></li>
                        <li class=\"nav-li\"><a href=\"#\">I have the right place for you</a></li>
                        <li class=\"nav-li\"><a href=\"#footer\">Contact</a>
                        <li class=\"nav-li\" id=\"last_li\"><a id=\"close_menu\" href=\"##\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/cancel.png"), "html", null, true);
        echo "\"></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"menu_screenlg\" >
                <div class=\"burger\">
                    <img id=\"icon\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/burger.png"), "html", null, true);
        echo "\">
                    <div id=\"nav\">
                        <a id=\"lili\" href=\"#\">Home</a><span class=\"slash\">/</span>
                        <a href=\"#about_dissidance\">About Dissidance</a><span class=\"slash\">/</span>
                        <a href=\"#intimate_clubbing\">Intimate clubbing</a><span class=\"slash\">/</span>
                        <a href=\"#\">Stamp yourself</a><span class=\"slash\">/</span>
                        <a href=\"#\">I have the right place for you</a><span class=\"slash\">/</span>
                        <a href=\"#footer\">Contact</a>
                    </div>
                </div>
            </div>
        ";
        
        $__internal_b9b8eac185cf931ccc6990c50d716706dd27ba77788ab57572530da928ddde92->leave($__internal_b9b8eac185cf931ccc6990c50d716706dd27ba77788ab57572530da928ddde92_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_a75b7e5a989642b65fc88429defb85e58a0654bba0d6ffebc2691af12c1cfaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75b7e5a989642b65fc88429defb85e58a0654bba0d6ffebc2691af12c1cfaec->enter($__internal_a75b7e5a989642b65fc88429defb85e58a0654bba0d6ffebc2691af12c1cfaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "        ";
        
        $__internal_a75b7e5a989642b65fc88429defb85e58a0654bba0d6ffebc2691af12c1cfaec->leave($__internal_a75b7e5a989642b65fc88429defb85e58a0654bba0d6ffebc2691af12c1cfaec_prof);

    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        $__internal_71106db05121bc9f7242ea73a2d49f39971156bbd84d2b97a6d59d59611ab8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71106db05121bc9f7242ea73a2d49f39971156bbd84d2b97a6d59d59611ab8a2->enter($__internal_71106db05121bc9f7242ea73a2d49f39971156bbd84d2b97a6d59d59611ab8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_71106db05121bc9f7242ea73a2d49f39971156bbd84d2b97a6d59d59611ab8a2->leave($__internal_71106db05121bc9f7242ea73a2d49f39971156bbd84d2b97a6d59d59611ab8a2_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d9aff50ea2e982477baeb2a4a31bbad961596c71ad8692124c91ba5012283b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9aff50ea2e982477baeb2a4a31bbad961596c71ad8692124c91ba5012283b9->enter($__internal_1d9aff50ea2e982477baeb2a4a31bbad961596c71ad8692124c91ba5012283b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1d9aff50ea2e982477baeb2a4a31bbad961596c71ad8692124c91ba5012283b9->leave($__internal_1d9aff50ea2e982477baeb2a4a31bbad961596c71ad8692124c91ba5012283b9_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6a5271d4cc19201ac642bb99c35d1a79fdeaa3373669ee0ad0a85b8422523ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5271d4cc19201ac642bb99c35d1a79fdeaa3373669ee0ad0a85b8422523ec7->enter($__internal_6a5271d4cc19201ac642bb99c35d1a79fdeaa3373669ee0ad0a85b8422523ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6a5271d4cc19201ac642bb99c35d1a79fdeaa3373669ee0ad0a85b8422523ec7->leave($__internal_6a5271d4cc19201ac642bb99c35d1a79fdeaa3373669ee0ad0a85b8422523ec7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 56,  211 => 55,  200 => 54,  193 => 57,  190 => 56,  187 => 55,  184 => 54,  178 => 53,  159 => 40,  150 => 34,  138 => 25,  134 => 23,  128 => 22,  119 => 15,  114 => 14,  108 => 13,  98 => 9,  93 => 8,  87 => 7,  75 => 5,  65 => 58,  63 => 53,  60 => 52,  58 => 22,  51 => 18,  48 => 17,  46 => 13,  43 => 12,  41 => 7,  36 => 5,  30 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}D I S S I D A N C E{% endblock %}</title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
            <link href=\"https://fonts.googleapis.com/css?family=Special+Elite\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.1.1.min.js') }}\"></script>
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/Dissidance_21.png') }}\" />
    </head>

    <body>
        {% block menu %}
            <div class=\"menu_screenSm\" >
                <div class=\"burger\">
                    <a href=\"#nav\" id=\"button_burger\"><img id=\"icon\" src=\"{{ asset('img/burger.png') }}\"></a>
                    <ul id=\"nav\">
                        <li><a href=\"##\" id=\"left_menu\"></a></li>
                        <li class=\"nav-li\"><a href=\"#\">Home</a></li>
                        <li class=\"nav-li\"><a href=\"#\">About Dissidance</a></li>
                        <li class=\"nav-li\"><a href=\"#\">Intimate clubbing</a></li>
                        <li class=\"nav-li\"><a href=\"#\">Merchandising</a></li>
                        <li class=\"nav-li\"><a href=\"#\">I have the right place for you</a></li>
                        <li class=\"nav-li\"><a href=\"#footer\">Contact</a>
                        <li class=\"nav-li\" id=\"last_li\"><a id=\"close_menu\" href=\"##\"><img src=\"{{ asset('img/cancel.png') }}\"></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"menu_screenlg\" >
                <div class=\"burger\">
                    <img id=\"icon\" src=\"{{ asset('img/burger.png') }}\">
                    <div id=\"nav\">
                        <a id=\"lili\" href=\"#\">Home</a><span class=\"slash\">/</span>
                        <a href=\"#about_dissidance\">About Dissidance</a><span class=\"slash\">/</span>
                        <a href=\"#intimate_clubbing\">Intimate clubbing</a><span class=\"slash\">/</span>
                        <a href=\"#\">Stamp yourself</a><span class=\"slash\">/</span>
                        <a href=\"#\">I have the right place for you</a><span class=\"slash\">/</span>
                        <a href=\"#footer\">Contact</a>
                    </div>
                </div>
            </div>
        {% endblock %}

        {% block body %}
            {% block header %}{% endblock %}
            {% block content %}{% endblock %}
            {% block footer %}{% endblock %}
        {% endblock %}

    </body>
</html>
";
    }
}
