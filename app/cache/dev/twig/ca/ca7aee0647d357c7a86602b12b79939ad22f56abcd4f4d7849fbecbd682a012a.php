<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b8d8d683ead3a01aec494deb278d3c1c1abe285f69f8ca92612b1cd795e3ea86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_0ee619f16a4beee8b47ce28a0f7fd2e08aed4d67042444e6f17d90abb16d1496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee619f16a4beee8b47ce28a0f7fd2e08aed4d67042444e6f17d90abb16d1496->enter($__internal_0ee619f16a4beee8b47ce28a0f7fd2e08aed4d67042444e6f17d90abb16d1496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee619f16a4beee8b47ce28a0f7fd2e08aed4d67042444e6f17d90abb16d1496->leave($__internal_0ee619f16a4beee8b47ce28a0f7fd2e08aed4d67042444e6f17d90abb16d1496_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c8147665f88857d81bacc05348b8a29d1333d6c966bc65c4338ae9d7458b17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8147665f88857d81bacc05348b8a29d1333d6c966bc65c4338ae9d7458b17d->enter($__internal_2c8147665f88857d81bacc05348b8a29d1333d6c966bc65c4338ae9d7458b17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c8147665f88857d81bacc05348b8a29d1333d6c966bc65c4338ae9d7458b17d->leave($__internal_2c8147665f88857d81bacc05348b8a29d1333d6c966bc65c4338ae9d7458b17d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18f03c741febb15b0f28004bca4551302cf469b4cccd76b1b83422027d09d2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f03c741febb15b0f28004bca4551302cf469b4cccd76b1b83422027d09d2eb->enter($__internal_18f03c741febb15b0f28004bca4551302cf469b4cccd76b1b83422027d09d2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18f03c741febb15b0f28004bca4551302cf469b4cccd76b1b83422027d09d2eb->leave($__internal_18f03c741febb15b0f28004bca4551302cf469b4cccd76b1b83422027d09d2eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f800e9697b4c43e56f226b063da0531c1b59ac2223414832d1e8450c0a5c2b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f800e9697b4c43e56f226b063da0531c1b59ac2223414832d1e8450c0a5c2b5d->enter($__internal_f800e9697b4c43e56f226b063da0531c1b59ac2223414832d1e8450c0a5c2b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f800e9697b4c43e56f226b063da0531c1b59ac2223414832d1e8450c0a5c2b5d->leave($__internal_f800e9697b4c43e56f226b063da0531c1b59ac2223414832d1e8450c0a5c2b5d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
