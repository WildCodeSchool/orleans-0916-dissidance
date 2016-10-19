<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_144d05a21fc6fa11d4e58a0eee1c7558ec31bf5efd3970bde311a769fe9b4b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f530f89255fb29be6fe65514bcbcb5032e28aac7606bf9f1cfe19bdc2f793a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f530f89255fb29be6fe65514bcbcb5032e28aac7606bf9f1cfe19bdc2f793a91->enter($__internal_f530f89255fb29be6fe65514bcbcb5032e28aac7606bf9f1cfe19bdc2f793a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f530f89255fb29be6fe65514bcbcb5032e28aac7606bf9f1cfe19bdc2f793a91->leave($__internal_f530f89255fb29be6fe65514bcbcb5032e28aac7606bf9f1cfe19bdc2f793a91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d0d297fdcf9b477640671be071145378c141c9bcaac1202ebed78cf7cf3d1d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d297fdcf9b477640671be071145378c141c9bcaac1202ebed78cf7cf3d1d45->enter($__internal_d0d297fdcf9b477640671be071145378c141c9bcaac1202ebed78cf7cf3d1d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d0d297fdcf9b477640671be071145378c141c9bcaac1202ebed78cf7cf3d1d45->leave($__internal_d0d297fdcf9b477640671be071145378c141c9bcaac1202ebed78cf7cf3d1d45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd30c8c76b7b52932548cd9ad79322abac59d354192c77cdc1bc05862ddefe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd30c8c76b7b52932548cd9ad79322abac59d354192c77cdc1bc05862ddefe84->enter($__internal_dd30c8c76b7b52932548cd9ad79322abac59d354192c77cdc1bc05862ddefe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dd30c8c76b7b52932548cd9ad79322abac59d354192c77cdc1bc05862ddefe84->leave($__internal_dd30c8c76b7b52932548cd9ad79322abac59d354192c77cdc1bc05862ddefe84_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a47ba2a7b6206690ccac4380d16882367d4a81dd9e129cf9dcf1cad4e550a2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47ba2a7b6206690ccac4380d16882367d4a81dd9e129cf9dcf1cad4e550a2f4->enter($__internal_a47ba2a7b6206690ccac4380d16882367d4a81dd9e129cf9dcf1cad4e550a2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a47ba2a7b6206690ccac4380d16882367d4a81dd9e129cf9dcf1cad4e550a2f4->leave($__internal_a47ba2a7b6206690ccac4380d16882367d4a81dd9e129cf9dcf1cad4e550a2f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
