<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_badbb168fc74c63167ab711e8d3721d1812530777472fc241dc2ad98a0515d4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_959d95710e235cc6040f8fdc37517c985b17d7baeb87f57b8058f9d49642887a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959d95710e235cc6040f8fdc37517c985b17d7baeb87f57b8058f9d49642887a->enter($__internal_959d95710e235cc6040f8fdc37517c985b17d7baeb87f57b8058f9d49642887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_959d95710e235cc6040f8fdc37517c985b17d7baeb87f57b8058f9d49642887a->leave($__internal_959d95710e235cc6040f8fdc37517c985b17d7baeb87f57b8058f9d49642887a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0677a83a05756efe269909c3d208d815e0b2042e764b4db30a6f3b2a56348b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0677a83a05756efe269909c3d208d815e0b2042e764b4db30a6f3b2a56348b1->enter($__internal_c0677a83a05756efe269909c3d208d815e0b2042e764b4db30a6f3b2a56348b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c0677a83a05756efe269909c3d208d815e0b2042e764b4db30a6f3b2a56348b1->leave($__internal_c0677a83a05756efe269909c3d208d815e0b2042e764b4db30a6f3b2a56348b1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_43b15abeab67a5b7b930a111d7e8852fb60c1f69ab136bb7cc7ab025a45fecd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b15abeab67a5b7b930a111d7e8852fb60c1f69ab136bb7cc7ab025a45fecd7->enter($__internal_43b15abeab67a5b7b930a111d7e8852fb60c1f69ab136bb7cc7ab025a45fecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_43b15abeab67a5b7b930a111d7e8852fb60c1f69ab136bb7cc7ab025a45fecd7->leave($__internal_43b15abeab67a5b7b930a111d7e8852fb60c1f69ab136bb7cc7ab025a45fecd7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e36c9b294e1a5a076265c706b6a33297db8dd5e9c44566e36d0d5cf589571a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36c9b294e1a5a076265c706b6a33297db8dd5e9c44566e36d0d5cf589571a60->enter($__internal_e36c9b294e1a5a076265c706b6a33297db8dd5e9c44566e36d0d5cf589571a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e36c9b294e1a5a076265c706b6a33297db8dd5e9c44566e36d0d5cf589571a60->leave($__internal_e36c9b294e1a5a076265c706b6a33297db8dd5e9c44566e36d0d5cf589571a60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
