<?php

/* licorne/new.html.twig */
class __TwigTemplate_6a3199879291b8a33fb07ac0545fe0085b8e29fb76329abbcbe5db4230958b81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "licorne/new.html.twig", 1);
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
        $__internal_35c95c38de6565f8d6b8e46143c8b492631c11507b9dc91610a52b2733e16e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c95c38de6565f8d6b8e46143c8b492631c11507b9dc91610a52b2733e16e6a->enter($__internal_35c95c38de6565f8d6b8e46143c8b492631c11507b9dc91610a52b2733e16e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licorne/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35c95c38de6565f8d6b8e46143c8b492631c11507b9dc91610a52b2733e16e6a->leave($__internal_35c95c38de6565f8d6b8e46143c8b492631c11507b9dc91610a52b2733e16e6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cbba61c42812f22a16f05ef62cc6c21e767b13c41d5edbf9a4cb503c5ae67ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbba61c42812f22a16f05ef62cc6c21e767b13c41d5edbf9a4cb503c5ae67ec->enter($__internal_1cbba61c42812f22a16f05ef62cc6c21e767b13c41d5edbf9a4cb503c5ae67ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Licorne creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1cbba61c42812f22a16f05ef62cc6c21e767b13c41d5edbf9a4cb503c5ae67ec->leave($__internal_1cbba61c42812f22a16f05ef62cc6c21e767b13c41d5edbf9a4cb503c5ae67ec_prof);

    }

    public function getTemplateName()
    {
        return "licorne/new.html.twig";
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
    <h1>Licorne creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('licorne_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
