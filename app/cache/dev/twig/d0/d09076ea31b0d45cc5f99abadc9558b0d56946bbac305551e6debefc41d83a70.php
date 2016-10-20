<?php

/* email/show.html.twig */
class __TwigTemplate_19d2710a21a3efeb13940ccb9d670519c975bfe58bd167ac19ed8725386eb99f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/show.html.twig", 1);
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
        $__internal_77d1acabab30b19bff5ab356d02e44286d688f04cd50972349571b820d86031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d1acabab30b19bff5ab356d02e44286d688f04cd50972349571b820d86031c->enter($__internal_77d1acabab30b19bff5ab356d02e44286d688f04cd50972349571b820d86031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77d1acabab30b19bff5ab356d02e44286d688f04cd50972349571b820d86031c->leave($__internal_77d1acabab30b19bff5ab356d02e44286d688f04cd50972349571b820d86031c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fd63c256602040eae7a60f92cd626880c6c1ed67868633ab8627effe95dc634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd63c256602040eae7a60f92cd626880c6c1ed67868633ab8627effe95dc634->enter($__internal_1fd63c256602040eae7a60f92cd626880c6c1ed67868633ab8627effe95dc634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1fd63c256602040eae7a60f92cd626880c6c1ed67868633ab8627effe95dc634->leave($__internal_1fd63c256602040eae7a60f92cd626880c6c1ed67868633ab8627effe95dc634_prof);

    }

    public function getTemplateName()
    {
        return "email/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Email</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ email.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ email.email }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
";
    }
}
