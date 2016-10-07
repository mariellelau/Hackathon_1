<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1259ddf3aea9cfec210bcbd709bf07f55c5cd8589bcee09a6439a0d217c567d extends Twig_Template
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
        $__internal_4e3d604ce8206b86b531c91931c66b8c1f6d38fa153dce4ed75efb6a46b31cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e3d604ce8206b86b531c91931c66b8c1f6d38fa153dce4ed75efb6a46b31cee->enter($__internal_4e3d604ce8206b86b531c91931c66b8c1f6d38fa153dce4ed75efb6a46b31cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3d604ce8206b86b531c91931c66b8c1f6d38fa153dce4ed75efb6a46b31cee->leave($__internal_4e3d604ce8206b86b531c91931c66b8c1f6d38fa153dce4ed75efb6a46b31cee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37bdcba8ac3360f6a4cde07edfab1709dfd9003cca31f558adffc150679b458d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bdcba8ac3360f6a4cde07edfab1709dfd9003cca31f558adffc150679b458d->enter($__internal_37bdcba8ac3360f6a4cde07edfab1709dfd9003cca31f558adffc150679b458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37bdcba8ac3360f6a4cde07edfab1709dfd9003cca31f558adffc150679b458d->leave($__internal_37bdcba8ac3360f6a4cde07edfab1709dfd9003cca31f558adffc150679b458d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c65b49fe0977b93d1e93cfa80b5b98d34fe969f11dd38ee235663905ccdd7a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c65b49fe0977b93d1e93cfa80b5b98d34fe969f11dd38ee235663905ccdd7a05->enter($__internal_c65b49fe0977b93d1e93cfa80b5b98d34fe969f11dd38ee235663905ccdd7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c65b49fe0977b93d1e93cfa80b5b98d34fe969f11dd38ee235663905ccdd7a05->leave($__internal_c65b49fe0977b93d1e93cfa80b5b98d34fe969f11dd38ee235663905ccdd7a05_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9ac71d60586216e9cfa43156ee249cdd1cba324825178427a30aba5f09e2606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ac71d60586216e9cfa43156ee249cdd1cba324825178427a30aba5f09e2606->enter($__internal_e9ac71d60586216e9cfa43156ee249cdd1cba324825178427a30aba5f09e2606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e9ac71d60586216e9cfa43156ee249cdd1cba324825178427a30aba5f09e2606->leave($__internal_e9ac71d60586216e9cfa43156ee249cdd1cba324825178427a30aba5f09e2606_prof);

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
