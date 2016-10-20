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
        $__internal_79e6d5eaff0db4ae257bd1179cdcb5e8c0f88849c95aec5134081278466daa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e6d5eaff0db4ae257bd1179cdcb5e8c0f88849c95aec5134081278466daa18->enter($__internal_79e6d5eaff0db4ae257bd1179cdcb5e8c0f88849c95aec5134081278466daa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e6d5eaff0db4ae257bd1179cdcb5e8c0f88849c95aec5134081278466daa18->leave($__internal_79e6d5eaff0db4ae257bd1179cdcb5e8c0f88849c95aec5134081278466daa18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c8e9800645426445cd969dcc979cd8637858a5b09d8283b48434f31f4fd9a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8e9800645426445cd969dcc979cd8637858a5b09d8283b48434f31f4fd9a06->enter($__internal_1c8e9800645426445cd969dcc979cd8637858a5b09d8283b48434f31f4fd9a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1c8e9800645426445cd969dcc979cd8637858a5b09d8283b48434f31f4fd9a06->leave($__internal_1c8e9800645426445cd969dcc979cd8637858a5b09d8283b48434f31f4fd9a06_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04f05508415faf7fb03242db2e956e1a2a20ebb6945968e3f560c19220ede508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f05508415faf7fb03242db2e956e1a2a20ebb6945968e3f560c19220ede508->enter($__internal_04f05508415faf7fb03242db2e956e1a2a20ebb6945968e3f560c19220ede508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04f05508415faf7fb03242db2e956e1a2a20ebb6945968e3f560c19220ede508->leave($__internal_04f05508415faf7fb03242db2e956e1a2a20ebb6945968e3f560c19220ede508_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_351eb63f8a8d3dc37592006924f955525be0a5f1c50d304aac67f027e9c5bdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351eb63f8a8d3dc37592006924f955525be0a5f1c50d304aac67f027e9c5bdb6->enter($__internal_351eb63f8a8d3dc37592006924f955525be0a5f1c50d304aac67f027e9c5bdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_351eb63f8a8d3dc37592006924f955525be0a5f1c50d304aac67f027e9c5bdb6->leave($__internal_351eb63f8a8d3dc37592006924f955525be0a5f1c50d304aac67f027e9c5bdb6_prof);

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
