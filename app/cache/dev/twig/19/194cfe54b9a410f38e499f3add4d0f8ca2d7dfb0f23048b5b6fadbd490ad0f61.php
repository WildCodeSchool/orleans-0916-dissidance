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
        $__internal_296f84b4de9cf4f5490f811939e0db672ce017e57be82b198ddf55126159db99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296f84b4de9cf4f5490f811939e0db672ce017e57be82b198ddf55126159db99->enter($__internal_296f84b4de9cf4f5490f811939e0db672ce017e57be82b198ddf55126159db99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296f84b4de9cf4f5490f811939e0db672ce017e57be82b198ddf55126159db99->leave($__internal_296f84b4de9cf4f5490f811939e0db672ce017e57be82b198ddf55126159db99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5f1b07b14ce0b6f3149c910405eb913898910e2705b43cc1855792d7f3e71663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1b07b14ce0b6f3149c910405eb913898910e2705b43cc1855792d7f3e71663->enter($__internal_5f1b07b14ce0b6f3149c910405eb913898910e2705b43cc1855792d7f3e71663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5f1b07b14ce0b6f3149c910405eb913898910e2705b43cc1855792d7f3e71663->leave($__internal_5f1b07b14ce0b6f3149c910405eb913898910e2705b43cc1855792d7f3e71663_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_712b8c57906c61b6c510c5721cd89d6aff5e34a167b7982cee20983db83ea2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712b8c57906c61b6c510c5721cd89d6aff5e34a167b7982cee20983db83ea2f2->enter($__internal_712b8c57906c61b6c510c5721cd89d6aff5e34a167b7982cee20983db83ea2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_712b8c57906c61b6c510c5721cd89d6aff5e34a167b7982cee20983db83ea2f2->leave($__internal_712b8c57906c61b6c510c5721cd89d6aff5e34a167b7982cee20983db83ea2f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6784dd6d2fa74b822a6526c3ba344b3cdec22f833f47e31481066babba0de4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6784dd6d2fa74b822a6526c3ba344b3cdec22f833f47e31481066babba0de4f->enter($__internal_a6784dd6d2fa74b822a6526c3ba344b3cdec22f833f47e31481066babba0de4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a6784dd6d2fa74b822a6526c3ba344b3cdec22f833f47e31481066babba0de4f->leave($__internal_a6784dd6d2fa74b822a6526c3ba344b3cdec22f833f47e31481066babba0de4f_prof);

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
