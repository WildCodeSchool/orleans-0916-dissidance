<?php

/* base.html.twig */
class __TwigTemplate_826dabe4035a7b3f4ce67717661981120c28e20db83f3d44aaf04701dded26a3 extends Twig_Template
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
        $__internal_fc35bf2dfcb39d273ee5160672e239be305151ca1ae4d737ff72c94687ac534c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc35bf2dfcb39d273ee5160672e239be305151ca1ae4d737ff72c94687ac534c->enter($__internal_fc35bf2dfcb39d273ee5160672e239be305151ca1ae4d737ff72c94687ac534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fc35bf2dfcb39d273ee5160672e239be305151ca1ae4d737ff72c94687ac534c->leave($__internal_fc35bf2dfcb39d273ee5160672e239be305151ca1ae4d737ff72c94687ac534c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80e1c4c4b27a08f231bb3555f97d685de089cbff091b7cc33b56e0d9bc505c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e1c4c4b27a08f231bb3555f97d685de089cbff091b7cc33b56e0d9bc505c78->enter($__internal_80e1c4c4b27a08f231bb3555f97d685de089cbff091b7cc33b56e0d9bc505c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "D I S S I D A N C E";
        
        $__internal_80e1c4c4b27a08f231bb3555f97d685de089cbff091b7cc33b56e0d9bc505c78->leave($__internal_80e1c4c4b27a08f231bb3555f97d685de089cbff091b7cc33b56e0d9bc505c78_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91d3f8e9ac1e7b82f64b497569bb3962ff11d35d9bc5c7df6757956b515a3af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d3f8e9ac1e7b82f64b497569bb3962ff11d35d9bc5c7df6757956b515a3af4->enter($__internal_91d3f8e9ac1e7b82f64b497569bb3962ff11d35d9bc5c7df6757956b515a3af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_91d3f8e9ac1e7b82f64b497569bb3962ff11d35d9bc5c7df6757956b515a3af4->leave($__internal_91d3f8e9ac1e7b82f64b497569bb3962ff11d35d9bc5c7df6757956b515a3af4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_126c375a36284e5c48b069ca2b3cc117109df4b3d6c14c8095fbb49f440f82cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126c375a36284e5c48b069ca2b3cc117109df4b3d6c14c8095fbb49f440f82cd->enter($__internal_126c375a36284e5c48b069ca2b3cc117109df4b3d6c14c8095fbb49f440f82cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_126c375a36284e5c48b069ca2b3cc117109df4b3d6c14c8095fbb49f440f82cd->leave($__internal_126c375a36284e5c48b069ca2b3cc117109df4b3d6c14c8095fbb49f440f82cd_prof);

    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfc1a88dc64d9017048b6b7836df41a3c27ca2f226afe041312c24853ef9564b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc1a88dc64d9017048b6b7836df41a3c27ca2f226afe041312c24853ef9564b->enter($__internal_bfc1a88dc64d9017048b6b7836df41a3c27ca2f226afe041312c24853ef9564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bfc1a88dc64d9017048b6b7836df41a3c27ca2f226afe041312c24853ef9564b->leave($__internal_bfc1a88dc64d9017048b6b7836df41a3c27ca2f226afe041312c24853ef9564b_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_79da66ccac40cf6e602e082c0d469916de4090c184bba08abe38d680f1c26326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79da66ccac40cf6e602e082c0d469916de4090c184bba08abe38d680f1c26326->enter($__internal_79da66ccac40cf6e602e082c0d469916de4090c184bba08abe38d680f1c26326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79da66ccac40cf6e602e082c0d469916de4090c184bba08abe38d680f1c26326->leave($__internal_79da66ccac40cf6e602e082c0d469916de4090c184bba08abe38d680f1c26326_prof);

    }

    // line 54
    public function block_header($context, array $blocks = array())
    {
        $__internal_55aa763fbeda33be6642e0a5f1254c5e05219d1efdfb2a9c344d5f5a31e07d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55aa763fbeda33be6642e0a5f1254c5e05219d1efdfb2a9c344d5f5a31e07d69->enter($__internal_55aa763fbeda33be6642e0a5f1254c5e05219d1efdfb2a9c344d5f5a31e07d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_55aa763fbeda33be6642e0a5f1254c5e05219d1efdfb2a9c344d5f5a31e07d69->leave($__internal_55aa763fbeda33be6642e0a5f1254c5e05219d1efdfb2a9c344d5f5a31e07d69_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_48f2fc818c5875fe8083c37ce77ac931b9ee3afe9467f397317d754af13e1ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f2fc818c5875fe8083c37ce77ac931b9ee3afe9467f397317d754af13e1ab7->enter($__internal_48f2fc818c5875fe8083c37ce77ac931b9ee3afe9467f397317d754af13e1ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_48f2fc818c5875fe8083c37ce77ac931b9ee3afe9467f397317d754af13e1ab7->leave($__internal_48f2fc818c5875fe8083c37ce77ac931b9ee3afe9467f397317d754af13e1ab7_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a8ca75ffec797fa886b6ebaaa8144e1eb13f81d66b678ca840c98895dd5b6d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ca75ffec797fa886b6ebaaa8144e1eb13f81d66b678ca840c98895dd5b6d81->enter($__internal_a8ca75ffec797fa886b6ebaaa8144e1eb13f81d66b678ca840c98895dd5b6d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_a8ca75ffec797fa886b6ebaaa8144e1eb13f81d66b678ca840c98895dd5b6d81->leave($__internal_a8ca75ffec797fa886b6ebaaa8144e1eb13f81d66b678ca840c98895dd5b6d81_prof);

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
