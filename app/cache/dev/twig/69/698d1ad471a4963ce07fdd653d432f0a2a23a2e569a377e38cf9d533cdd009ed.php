<?php

/* email/index.html.twig */
class __TwigTemplate_5c519267c110ce1a5a4901f226da2db2f6b5671599b252ed5a5c086708d0988a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "email/index.html.twig", 1);
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
        $__internal_e0568346daa3a8ab5c106b91be47dc3e238478110acc9b440ccf8c1463098ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0568346daa3a8ab5c106b91be47dc3e238478110acc9b440ccf8c1463098ae7->enter($__internal_e0568346daa3a8ab5c106b91be47dc3e238478110acc9b440ccf8c1463098ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0568346daa3a8ab5c106b91be47dc3e238478110acc9b440ccf8c1463098ae7->leave($__internal_e0568346daa3a8ab5c106b91be47dc3e238478110acc9b440ccf8c1463098ae7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_140711e932cf28250e57e38c3b3dbd60f4bc44a51ba2a6ad1d3ca6ca45eb258f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140711e932cf28250e57e38c3b3dbd60f4bc44a51ba2a6ad1d3ca6ca45eb258f->enter($__internal_140711e932cf28250e57e38c3b3dbd60f4bc44a51ba2a6ad1d3ca6ca45eb258f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Email list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) ? $context["emails"] : $this->getContext($context, "emails")));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_show", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_edit", array("id" => $this->getAttribute($context["email"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("email_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_140711e932cf28250e57e38c3b3dbd60f4bc44a51ba2a6ad1d3ca6ca45eb258f->leave($__internal_140711e932cf28250e57e38c3b3dbd60f4bc44a51ba2a6ad1d3ca6ca45eb258f_prof);

    }

    public function getTemplateName()
    {
        return "email/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Email list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for email in emails %}
            <tr>
                <td><a href=\"{{ path('email_show', { 'id': email.id }) }}\">{{ email.id }}</a></td>
                <td>{{ email.email }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('email_show', { 'id': email.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('email_edit', { 'id': email.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('email_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
