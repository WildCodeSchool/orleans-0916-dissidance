<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_8c9159cfccbdc1a3114262cd0b05bd0746bfd4725ef2ce6c87d839303b243e47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41b8524a40b86357af9b9de36e0aa59e748991277ab0b41a8ad6586f3ca340e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b8524a40b86357af9b9de36e0aa59e748991277ab0b41a8ad6586f3ca340e9->enter($__internal_41b8524a40b86357af9b9de36e0aa59e748991277ab0b41a8ad6586f3ca340e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41b8524a40b86357af9b9de36e0aa59e748991277ab0b41a8ad6586f3ca340e9->leave($__internal_41b8524a40b86357af9b9de36e0aa59e748991277ab0b41a8ad6586f3ca340e9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7b6a845f3e525139a5e0875f0f062cbe6d778259e6f014693fe846b7b0ab59f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6a845f3e525139a5e0875f0f062cbe6d778259e6f014693fe846b7b0ab59f5->enter($__internal_7b6a845f3e525139a5e0875f0f062cbe6d778259e6f014693fe846b7b0ab59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <header class=\"container_header\">
     <div><img id=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Dissidance_21.png"), "html", null, true);
        echo "\"></div>
     <img class=\"scroll_down\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/down.png"), "html", null, true);
        echo "\">
    </header>
";
        
        $__internal_7b6a845f3e525139a5e0875f0f062cbe6d778259e6f014693fe846b7b0ab59f5->leave($__internal_7b6a845f3e525139a5e0875f0f062cbe6d778259e6f014693fe846b7b0ab59f5_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_045af06e93e92134b34aba8b3dcf7f8b595480f8c35d5b0ff445a4b52ff12808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045af06e93e92134b34aba8b3dcf7f8b595480f8c35d5b0ff445a4b52ff12808->enter($__internal_045af06e93e92134b34aba8b3dcf7f8b595480f8c35d5b0ff445a4b52ff12808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "
    <!--=============================================================>
                            ABOUT DISIDANCE
    <================================================================-->

    <div class=\"container-fluid\">
        <div id=\"about_dissidance\" class=\"about_dissidance\">
            <h2 style=\"font-size: 25px\">A B O U T&nbsp;&nbsp;&nbsp;&nbsp;D I S S I D A N C E</h2>
            <div class=\"row_about\">
                <div class=\"col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-4 col-xs-offset-1 col-xs-4 \">
                    <p class=\"about_content\">Cabillona locata abunde locata concitores Cabillona perlato opera in opera per castra Eusebius Galli ut fiduciam cibo cibo diligens militum genere genere astute hoc ne salus est Galli genere diligens hocque hocque dilato cogitabatur cogitabatur perlato consenuit distributo tumor distributo abunde in astute hocque ut acueret et hocque per opera dilato est die cubiculi quo ut cogitabatur Galli die praefecti.</p>
                </div>
                <div class=\"col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-offset-2 col-lsm-4 col-xs-offset-2 col-xs-4 \">

                    <img id=\"ph1\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ph1.jpg"), "html", null, true);
        echo "\">
                    <img id=\"ph2\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/ph2.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>
            <img id=\"logo_rotate1\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/Dissidance_21.png"), "html", null, true);
        echo "\">
        </div>

    </div>



    <!--=============================================================>
                                Intimate clubbing
    <================================================================-->
    <div id=\"intimate_clubbing\" class=\"intimate_clubbing\">
        <h2 style=\"font-size: 25px; text-align: center;\">C L U B B I N G&nbsp;&nbsp;&nbsp;&nbsp;I N T I M E</h2>

        <div class=\"container-fluid intimate_clubbing\">
            <div class=\"row_party\">

                <!--=============================================================>
                                            thumbnail
                <================================================================-->

                <div class=\"col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-2\">
                    <div class=\"thumbnail\">
                        <img  class=\"thumbnail_img\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/D.VII.jpg"), "html", null, true);
        echo "\" alt=\"#\">
                        <div class=\"caption\">
                            <h3>D.VII</h3>
                            <h4>G'boï & Jean-Mi // La Chinerie</h4>
                            <input class=\"button_thumb\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">
                        </div>
                    </div>


                    <!-- Modal -->

                    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">D.VII</h4>
                                </div>



                                <div>
                                    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <!-- Indicators -->
                                        <ol class=\"carousel-indicators\">
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/VII_2.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/VII_1.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/VII_3.jpg"), "html", null, true);
        echo "\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            ...
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div>






                                <div class=\"modal-body\">
                                    lorem ipsum
                                </div>
                                <iframe margin-left=\"20%\" margin-right=\"20%\" width=\"100%\" height=\"100\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/276848616&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>
                                <div class=\"modal-footer\">
                                    <button style=\"text-align: center;\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_045af06e93e92134b34aba8b3dcf7f8b595480f8c35d5b0ff445a4b52ff12808->leave($__internal_045af06e93e92134b34aba8b3dcf7f8b595480f8c35d5b0ff445a4b52ff12808_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 96,  160 => 90,  151 => 84,  115 => 51,  90 => 29,  84 => 26,  80 => 25,  64 => 11,  58 => 10,  48 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block header %}
    <header class=\"container_header\">
     <div><img id=\"logo\" src=\"{{ asset('img/Dissidance_21.png') }}\"></div>
     <img class=\"scroll_down\" src=\"{{ asset('img/down.png') }}\">
    </header>
{% endblock %}

{% block content %}

    <!--=============================================================>
                            ABOUT DISIDANCE
    <================================================================-->

    <div class=\"container-fluid\">
        <div id=\"about_dissidance\" class=\"about_dissidance\">
            <h2 style=\"font-size: 25px\">A B O U T&nbsp;&nbsp;&nbsp;&nbsp;D I S S I D A N C E</h2>
            <div class=\"row_about\">
                <div class=\"col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4 col-sm-offset-1 col-sm-4 col-xs-offset-1 col-xs-4 \">
                    <p class=\"about_content\">Cabillona locata abunde locata concitores Cabillona perlato opera in opera per castra Eusebius Galli ut fiduciam cibo cibo diligens militum genere genere astute hoc ne salus est Galli genere diligens hocque hocque dilato cogitabatur cogitabatur perlato consenuit distributo tumor distributo abunde in astute hocque ut acueret et hocque per opera dilato est die cubiculi quo ut cogitabatur Galli die praefecti.</p>
                </div>
                <div class=\"col-lg-offset-2 col-lg-4 col-md-offset-2 col-md-4 col-sm-offset-2 col-lsm-4 col-xs-offset-2 col-xs-4 \">

                    <img id=\"ph1\" src=\"{{ asset('img/ph1.jpg') }}\">
                    <img id=\"ph2\" src=\"{{ asset('img/ph2.jpg') }}\">
                </div>
            </div>
            <img id=\"logo_rotate1\" src=\"{{ asset('img/Dissidance_21.png') }}\">
        </div>

    </div>



    <!--=============================================================>
                                Intimate clubbing
    <================================================================-->
    <div id=\"intimate_clubbing\" class=\"intimate_clubbing\">
        <h2 style=\"font-size: 25px; text-align: center;\">C L U B B I N G&nbsp;&nbsp;&nbsp;&nbsp;I N T I M E</h2>

        <div class=\"container-fluid intimate_clubbing\">
            <div class=\"row_party\">

                <!--=============================================================>
                                            thumbnail
                <================================================================-->

                <div class=\"col-lg-offset-2 col-lg-2 col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-2 col-xs-offset-2 col-xs-2\">
                    <div class=\"thumbnail\">
                        <img  class=\"thumbnail_img\" src=\"{{ asset('img/D.VII.jpg') }}\" alt=\"#\">
                        <div class=\"caption\">
                            <h3>D.VII</h3>
                            <h4>G'boï & Jean-Mi // La Chinerie</h4>
                            <input class=\"button_thumb\" type=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">
                        </div>
                    </div>


                    <!-- Modal -->

                    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">D.VII</h4>
                                </div>



                                <div>
                                    <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <!-- Indicators -->
                                        <ol class=\"carousel-indicators\">
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                                <img src=\"{{ asset('img/VII_2.jpg') }}\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"{{ asset('img/VII_1.jpg') }}\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"{{ asset('img/VII_3.jpg') }}\" alt=\"...\">
                                                <div class=\"carousel-caption\">
                                                    ...
                                                </div>
                                            </div>
                                            ...
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                                            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div>






                                <div class=\"modal-body\">
                                    lorem ipsum
                                </div>
                                <iframe margin-left=\"20%\" margin-right=\"20%\" width=\"100%\" height=\"100\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/276848616&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>
                                <div class=\"modal-footer\">
                                    <button style=\"text-align: center;\" type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
{%  endblock %}
";
    }
}
