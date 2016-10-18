<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2ebabed4dffd8f246f63507e4cc7007b9ccb1923d495b8dbb480dc60141a15a3 extends Twig_Template
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
        $__internal_495699ad1b93e948f57a3a8c80c422188f0d68b430a2426f16f5d5465e1bc6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495699ad1b93e948f57a3a8c80c422188f0d68b430a2426f16f5d5465e1bc6fe->enter($__internal_495699ad1b93e948f57a3a8c80c422188f0d68b430a2426f16f5d5465e1bc6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495699ad1b93e948f57a3a8c80c422188f0d68b430a2426f16f5d5465e1bc6fe->leave($__internal_495699ad1b93e948f57a3a8c80c422188f0d68b430a2426f16f5d5465e1bc6fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9df7e6394ae406a09b4fbd501aacb0439733e685dd93716ab93877ad9588046f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df7e6394ae406a09b4fbd501aacb0439733e685dd93716ab93877ad9588046f->enter($__internal_9df7e6394ae406a09b4fbd501aacb0439733e685dd93716ab93877ad9588046f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9df7e6394ae406a09b4fbd501aacb0439733e685dd93716ab93877ad9588046f->leave($__internal_9df7e6394ae406a09b4fbd501aacb0439733e685dd93716ab93877ad9588046f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7890f7cdb0830ecea7afa149eac61a38d808b8e6657dad03cd32487d7415ccd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7890f7cdb0830ecea7afa149eac61a38d808b8e6657dad03cd32487d7415ccd7->enter($__internal_7890f7cdb0830ecea7afa149eac61a38d808b8e6657dad03cd32487d7415ccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7890f7cdb0830ecea7afa149eac61a38d808b8e6657dad03cd32487d7415ccd7->leave($__internal_7890f7cdb0830ecea7afa149eac61a38d808b8e6657dad03cd32487d7415ccd7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffc3d19d8aabfdd3504a49654032321b81424d65ad033dfc7ce2ac1daf03d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc3d19d8aabfdd3504a49654032321b81424d65ad033dfc7ce2ac1daf03d2d3->enter($__internal_ffc3d19d8aabfdd3504a49654032321b81424d65ad033dfc7ce2ac1daf03d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffc3d19d8aabfdd3504a49654032321b81424d65ad033dfc7ce2ac1daf03d2d3->leave($__internal_ffc3d19d8aabfdd3504a49654032321b81424d65ad033dfc7ce2ac1daf03d2d3_prof);

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
