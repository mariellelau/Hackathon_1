<?php

/* licorne/edit.html.twig */
class __TwigTemplate_fbed71c1f919f75ce3c67d588e5bf991da5806b8152074cc8d8e142e7c89034e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "licorne/edit.html.twig", 1);
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
        $__internal_43b450e02e0522ccce244f1646bf821dac56a9fa94f5ecdbb3a79fa4c7938ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b450e02e0522ccce244f1646bf821dac56a9fa94f5ecdbb3a79fa4c7938ee3->enter($__internal_43b450e02e0522ccce244f1646bf821dac56a9fa94f5ecdbb3a79fa4c7938ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licorne/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b450e02e0522ccce244f1646bf821dac56a9fa94f5ecdbb3a79fa4c7938ee3->leave($__internal_43b450e02e0522ccce244f1646bf821dac56a9fa94f5ecdbb3a79fa4c7938ee3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f115e571b8f3fa495cd9fcca193351669f4ed5e3f19ecd2ccb50f6f55874c232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f115e571b8f3fa495cd9fcca193351669f4ed5e3f19ecd2ccb50f6f55874c232->enter($__internal_f115e571b8f3fa495cd9fcca193351669f4ed5e3f19ecd2ccb50f6f55874c232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Licorne edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f115e571b8f3fa495cd9fcca193351669f4ed5e3f19ecd2ccb50f6f55874c232->leave($__internal_f115e571b8f3fa495cd9fcca193351669f4ed5e3f19ecd2ccb50f6f55874c232_prof);

    }

    public function getTemplateName()
    {
        return "licorne/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Licorne edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('licorne_index') }}\">Back to the list</a>
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
