<?php

/* reservations/new.html.twig */
class __TwigTemplate_79f5010cd49aa9c917b320a7beae5ec4e6bd6a864b2c9062cc339d895e5b95e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/new.html.twig", 1);
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
        $__internal_0a8a7a66b2ac8c5e76b403cca427936ce69cccb458dd0ede795088952a71e004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8a7a66b2ac8c5e76b403cca427936ce69cccb458dd0ede795088952a71e004->enter($__internal_0a8a7a66b2ac8c5e76b403cca427936ce69cccb458dd0ede795088952a71e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a8a7a66b2ac8c5e76b403cca427936ce69cccb458dd0ede795088952a71e004->leave($__internal_0a8a7a66b2ac8c5e76b403cca427936ce69cccb458dd0ede795088952a71e004_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7465118ef99b933432b83f298ad5baa67549936f33d6311ba49c81ce79599dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7465118ef99b933432b83f298ad5baa67549936f33d6311ba49c81ce79599dd8->enter($__internal_7465118ef99b933432b83f298ad5baa67549936f33d6311ba49c81ce79599dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Reservations creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7465118ef99b933432b83f298ad5baa67549936f33d6311ba49c81ce79599dd8->leave($__internal_7465118ef99b933432b83f298ad5baa67549936f33d6311ba49c81ce79599dd8_prof);

    }

    public function getTemplateName()
    {
        return "reservations/new.html.twig";
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
    <h1>Reservations creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('reservations_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
