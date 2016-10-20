<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f88c6d73354d67feb03744a7804be62fa824af55b1d19363aad523f272d41323 extends Twig_Template
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
        $__internal_dfcfdf2dfe5460689ea0eb89ee6a0ba624d6c4a9fd26d742eb7b5d724a285f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcfdf2dfe5460689ea0eb89ee6a0ba624d6c4a9fd26d742eb7b5d724a285f31->enter($__internal_dfcfdf2dfe5460689ea0eb89ee6a0ba624d6c4a9fd26d742eb7b5d724a285f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfcfdf2dfe5460689ea0eb89ee6a0ba624d6c4a9fd26d742eb7b5d724a285f31->leave($__internal_dfcfdf2dfe5460689ea0eb89ee6a0ba624d6c4a9fd26d742eb7b5d724a285f31_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d02eea901add97d52238d2980c5c95b80bc98033d7c4a760199cebeaeee242ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02eea901add97d52238d2980c5c95b80bc98033d7c4a760199cebeaeee242ef->enter($__internal_d02eea901add97d52238d2980c5c95b80bc98033d7c4a760199cebeaeee242ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d02eea901add97d52238d2980c5c95b80bc98033d7c4a760199cebeaeee242ef->leave($__internal_d02eea901add97d52238d2980c5c95b80bc98033d7c4a760199cebeaeee242ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_abce19d4633c4bc0548449c52aa0c0a3e37268a387afb950eb90015033903db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abce19d4633c4bc0548449c52aa0c0a3e37268a387afb950eb90015033903db5->enter($__internal_abce19d4633c4bc0548449c52aa0c0a3e37268a387afb950eb90015033903db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_abce19d4633c4bc0548449c52aa0c0a3e37268a387afb950eb90015033903db5->leave($__internal_abce19d4633c4bc0548449c52aa0c0a3e37268a387afb950eb90015033903db5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4343eeb70cbb447473e9a2a8fa5447f271095877b43c68b41638bc0e5a294e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4343eeb70cbb447473e9a2a8fa5447f271095877b43c68b41638bc0e5a294e->enter($__internal_1f4343eeb70cbb447473e9a2a8fa5447f271095877b43c68b41638bc0e5a294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1f4343eeb70cbb447473e9a2a8fa5447f271095877b43c68b41638bc0e5a294e->leave($__internal_1f4343eeb70cbb447473e9a2a8fa5447f271095877b43c68b41638bc0e5a294e_prof);

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
