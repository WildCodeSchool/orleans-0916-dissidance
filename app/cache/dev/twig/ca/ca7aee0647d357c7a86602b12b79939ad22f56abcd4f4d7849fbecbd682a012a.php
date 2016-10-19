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
        $__internal_ad7782ae8e54a268f1032ebeec27142adde49bac07174f6b80d2d6de67236eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7782ae8e54a268f1032ebeec27142adde49bac07174f6b80d2d6de67236eb1->enter($__internal_ad7782ae8e54a268f1032ebeec27142adde49bac07174f6b80d2d6de67236eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad7782ae8e54a268f1032ebeec27142adde49bac07174f6b80d2d6de67236eb1->leave($__internal_ad7782ae8e54a268f1032ebeec27142adde49bac07174f6b80d2d6de67236eb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5eaa60f4de3859b2a2c40508effa6d65252d337d29edc40901cffb71e9f3154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eaa60f4de3859b2a2c40508effa6d65252d337d29edc40901cffb71e9f3154->enter($__internal_f5eaa60f4de3859b2a2c40508effa6d65252d337d29edc40901cffb71e9f3154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5eaa60f4de3859b2a2c40508effa6d65252d337d29edc40901cffb71e9f3154->leave($__internal_f5eaa60f4de3859b2a2c40508effa6d65252d337d29edc40901cffb71e9f3154_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_869dc872ccdf3c0d8cc8b9b1aef9d77fa1f8347494eab191686de176c4244ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869dc872ccdf3c0d8cc8b9b1aef9d77fa1f8347494eab191686de176c4244ca1->enter($__internal_869dc872ccdf3c0d8cc8b9b1aef9d77fa1f8347494eab191686de176c4244ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_869dc872ccdf3c0d8cc8b9b1aef9d77fa1f8347494eab191686de176c4244ca1->leave($__internal_869dc872ccdf3c0d8cc8b9b1aef9d77fa1f8347494eab191686de176c4244ca1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_891bdb65f1f56ac4660ed123424fea289aedf10392292b7b26a6910f7c66b0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891bdb65f1f56ac4660ed123424fea289aedf10392292b7b26a6910f7c66b0e4->enter($__internal_891bdb65f1f56ac4660ed123424fea289aedf10392292b7b26a6910f7c66b0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_891bdb65f1f56ac4660ed123424fea289aedf10392292b7b26a6910f7c66b0e4->leave($__internal_891bdb65f1f56ac4660ed123424fea289aedf10392292b7b26a6910f7c66b0e4_prof);

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
