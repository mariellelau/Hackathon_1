<?php

/* base.html.twig */
class __TwigTemplate_afcffda04e1d426a143af643beaf2233f7deefcee1bb0ab77e8cf8b19328c608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_897e23bb3ba5a10ed3f0164f374a3671be6341d1bb03fb7941018557a119edb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897e23bb3ba5a10ed3f0164f374a3671be6341d1bb03fb7941018557a119edb9->enter($__internal_897e23bb3ba5a10ed3f0164f374a3671be6341d1bb03fb7941018557a119edb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_897e23bb3ba5a10ed3f0164f374a3671be6341d1bb03fb7941018557a119edb9->leave($__internal_897e23bb3ba5a10ed3f0164f374a3671be6341d1bb03fb7941018557a119edb9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39c254135793ac065fbb887137716c8221ece457dfdc12c1b12486a8b24c89b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c254135793ac065fbb887137716c8221ece457dfdc12c1b12486a8b24c89b3->enter($__internal_39c254135793ac065fbb887137716c8221ece457dfdc12c1b12486a8b24c89b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello!";
        
        $__internal_39c254135793ac065fbb887137716c8221ece457dfdc12c1b12486a8b24c89b3->leave($__internal_39c254135793ac065fbb887137716c8221ece457dfdc12c1b12486a8b24c89b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc83d685f58086d268787af51413dd0e015413e100496c6b612d1caf07c4c04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc83d685f58086d268787af51413dd0e015413e100496c6b612d1caf07c4c04c->enter($__internal_dc83d685f58086d268787af51413dd0e015413e100496c6b612d1caf07c4c04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc83d685f58086d268787af51413dd0e015413e100496c6b612d1caf07c4c04c->leave($__internal_dc83d685f58086d268787af51413dd0e015413e100496c6b612d1caf07c4c04c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f8663eb481640ba251bba763b54696337f18a89aa8cc9cea2cabf8772f41fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8663eb481640ba251bba763b54696337f18a89aa8cc9cea2cabf8772f41fe5->enter($__internal_9f8663eb481640ba251bba763b54696337f18a89aa8cc9cea2cabf8772f41fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9f8663eb481640ba251bba763b54696337f18a89aa8cc9cea2cabf8772f41fe5->leave($__internal_9f8663eb481640ba251bba763b54696337f18a89aa8cc9cea2cabf8772f41fe5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_109fbfee8785b3b6169491a325e806038d1362b88797ccf08e9c977e7186e004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109fbfee8785b3b6169491a325e806038d1362b88797ccf08e9c977e7186e004->enter($__internal_109fbfee8785b3b6169491a325e806038d1362b88797ccf08e9c977e7186e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_109fbfee8785b3b6169491a325e806038d1362b88797ccf08e9c977e7186e004->leave($__internal_109fbfee8785b3b6169491a325e806038d1362b88797ccf08e9c977e7186e004_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Hello!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
