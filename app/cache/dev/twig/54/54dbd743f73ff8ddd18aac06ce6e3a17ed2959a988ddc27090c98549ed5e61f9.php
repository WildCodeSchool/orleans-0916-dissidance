<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2664f2e8cdcf159ec1c342a788364c90952176f68cda2ba549840f19308831cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ca9e694458358216dc4abe04c9d186a4b3c6923f0fc90d4bab4686a51aca206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca9e694458358216dc4abe04c9d186a4b3c6923f0fc90d4bab4686a51aca206->enter($__internal_7ca9e694458358216dc4abe04c9d186a4b3c6923f0fc90d4bab4686a51aca206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca9e694458358216dc4abe04c9d186a4b3c6923f0fc90d4bab4686a51aca206->leave($__internal_7ca9e694458358216dc4abe04c9d186a4b3c6923f0fc90d4bab4686a51aca206_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f71569b94919873ef35778ca93ae8b7039459d848047cf3f88c8c3c09e0a9ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71569b94919873ef35778ca93ae8b7039459d848047cf3f88c8c3c09e0a9ff4->enter($__internal_f71569b94919873ef35778ca93ae8b7039459d848047cf3f88c8c3c09e0a9ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f71569b94919873ef35778ca93ae8b7039459d848047cf3f88c8c3c09e0a9ff4->leave($__internal_f71569b94919873ef35778ca93ae8b7039459d848047cf3f88c8c3c09e0a9ff4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eefd3a7bdc7cfa67b511d3748644cbd358a66d0266227617b149d187a7bd7f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefd3a7bdc7cfa67b511d3748644cbd358a66d0266227617b149d187a7bd7f4b->enter($__internal_eefd3a7bdc7cfa67b511d3748644cbd358a66d0266227617b149d187a7bd7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eefd3a7bdc7cfa67b511d3748644cbd358a66d0266227617b149d187a7bd7f4b->leave($__internal_eefd3a7bdc7cfa67b511d3748644cbd358a66d0266227617b149d187a7bd7f4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4837ea2e6cfb90eee2676de6981f64a2d123bce39e665f77f25dcc63dec98df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4837ea2e6cfb90eee2676de6981f64a2d123bce39e665f77f25dcc63dec98df8->enter($__internal_4837ea2e6cfb90eee2676de6981f64a2d123bce39e665f77f25dcc63dec98df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4837ea2e6cfb90eee2676de6981f64a2d123bce39e665f77f25dcc63dec98df8->leave($__internal_4837ea2e6cfb90eee2676de6981f64a2d123bce39e665f77f25dcc63dec98df8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
