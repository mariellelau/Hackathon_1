<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d22981663cfd80c0fb2e2a1e581ff83b296f9c2277ac163ee3bf35e1ea522a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b313918bdfe26900d7788a057fe172b90ee793398f269a817aa1d4a15f7778b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b313918bdfe26900d7788a057fe172b90ee793398f269a817aa1d4a15f7778b2->enter($__internal_b313918bdfe26900d7788a057fe172b90ee793398f269a817aa1d4a15f7778b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b313918bdfe26900d7788a057fe172b90ee793398f269a817aa1d4a15f7778b2->leave($__internal_b313918bdfe26900d7788a057fe172b90ee793398f269a817aa1d4a15f7778b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c2ed3c939bb515f8641b20eb9e7557fa160b2c87444e0519e353c21b6bb245b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2ed3c939bb515f8641b20eb9e7557fa160b2c87444e0519e353c21b6bb245b->enter($__internal_5c2ed3c939bb515f8641b20eb9e7557fa160b2c87444e0519e353c21b6bb245b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c2ed3c939bb515f8641b20eb9e7557fa160b2c87444e0519e353c21b6bb245b->leave($__internal_5c2ed3c939bb515f8641b20eb9e7557fa160b2c87444e0519e353c21b6bb245b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef7d9a374ab9e045fab5dd3f101438ed03743d1206444e21ff03b9b1f4b40300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7d9a374ab9e045fab5dd3f101438ed03743d1206444e21ff03b9b1f4b40300->enter($__internal_ef7d9a374ab9e045fab5dd3f101438ed03743d1206444e21ff03b9b1f4b40300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef7d9a374ab9e045fab5dd3f101438ed03743d1206444e21ff03b9b1f4b40300->leave($__internal_ef7d9a374ab9e045fab5dd3f101438ed03743d1206444e21ff03b9b1f4b40300_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5e34d524a02b70ba580ac022e7c490d8b3413a98976296b963fa84350eabcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e34d524a02b70ba580ac022e7c490d8b3413a98976296b963fa84350eabcaa->enter($__internal_b5e34d524a02b70ba580ac022e7c490d8b3413a98976296b963fa84350eabcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b5e34d524a02b70ba580ac022e7c490d8b3413a98976296b963fa84350eabcaa->leave($__internal_b5e34d524a02b70ba580ac022e7c490d8b3413a98976296b963fa84350eabcaa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
