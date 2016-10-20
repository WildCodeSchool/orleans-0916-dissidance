<?php

/* email/new.html.twig */
class __TwigTemplate_31d4cb9f3e0ee678fd997638805e98c8d7e47e71e4ecea15c259093c68232585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d675355b46a9b39f20db32c0410bff7e8d8e65b592f58cc06bd412a1deb8515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d675355b46a9b39f20db32c0410bff7e8d8e65b592f58cc06bd412a1deb8515->enter($__internal_5d675355b46a9b39f20db32c0410bff7e8d8e65b592f58cc06bd412a1deb8515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d675355b46a9b39f20db32c0410bff7e8d8e65b592f58cc06bd412a1deb8515->leave($__internal_5d675355b46a9b39f20db32c0410bff7e8d8e65b592f58cc06bd412a1deb8515_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_529ab57607d94b12c2d0aa4e6e08483d138abdf996fad4fb43093bf479b2621d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529ab57607d94b12c2d0aa4e6e08483d138abdf996fad4fb43093bf479b2621d->enter($__internal_529ab57607d94b12c2d0aa4e6e08483d138abdf996fad4fb43093bf479b2621d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_529ab57607d94b12c2d0aa4e6e08483d138abdf996fad4fb43093bf479b2621d->leave($__internal_529ab57607d94b12c2d0aa4e6e08483d138abdf996fad4fb43093bf479b2621d_prof);

    }

    public function getTemplateName()
    {
        return "email/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Email creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
