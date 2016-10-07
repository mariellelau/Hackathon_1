<?php

/* LicoBundle:Default:index.html.twig */
class __TwigTemplate_692ad470c1ae63c9da2278a54947afed8357d2e744d9c696d8f7ace204126a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca34c5c96e99886ae47be9013f1e2c516b938c69989d8cf8373c126070021e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca34c5c96e99886ae47be9013f1e2c516b938c69989d8cf8373c126070021e34->enter($__internal_ca34c5c96e99886ae47be9013f1e2c516b938c69989d8cf8373c126070021e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoBundle:Default:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=fr>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lico/css/style.css"), "html", null, true);
        echo "\"/>
    <title>LicoBox</title>
</head>
<body>
    <div class=\"row\">
        <div class=\"col bouton\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_1");
        echo "\"><button type=\"submit\" class=\"button button1\">Welcome</button></a>
        </div>
    </div>
</body>
</html>";
        
        $__internal_ca34c5c96e99886ae47be9013f1e2c516b938c69989d8cf8373c126070021e34->leave($__internal_ca34c5c96e99886ae47be9013f1e2c516b938c69989d8cf8373c126070021e34_prof);

    }

    public function getTemplateName()
    {
        return "LicoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  31 => 8,  22 => 1,);
    }

    public function getSource()
    {
        return "<!doctype html>
<html lang=fr>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/lico/css/style.css') }}\"/>
    <title>LicoBox</title>
</head>
<body>
    <div class=\"row\">
        <div class=\"col bouton\">
            <a href=\"{{ path('page_1') }}\"><button type=\"submit\" class=\"button button1\">Welcome</button></a>
        </div>
    </div>
</body>
</html>";
    }
}
