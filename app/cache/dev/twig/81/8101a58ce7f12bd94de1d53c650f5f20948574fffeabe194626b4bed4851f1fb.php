<?php

/* LicoBundle::page2.html.twig */
class __TwigTemplate_dd6b65933d3e5e6ec1e02be41d9cdad1160aba5784a3c37368388d57e100956d extends Twig_Template
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
        $__internal_d732e8e4f749e5b6c1b16045e0456dcae3c31cbf59cd90153b7a19d95f61210d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732e8e4f749e5b6c1b16045e0456dcae3c31cbf59cd90153b7a19d95f61210d->enter($__internal_d732e8e4f749e5b6c1b16045e0456dcae3c31cbf59cd90153b7a19d95f61210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoBundle::page2.html.twig"));

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


    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css\">

    <title>LicoBox</title>
</head>
<body>
<div class=\"row\">
    <div class=\"col l3 offset-l1 m12 s12 texte\">
        <p>
            Voulez vous commencer maintenant votre périple ?
        </p>
    </div>
    <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lico/images/6784492-cute-pink-unicorn.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/>
    </div>
    <div class=\"col l3 m12 s12 info\">
        <p>
        </p>
        <p>
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col l6 m6 s12 boutton\">
        <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_3");
        echo "\"><button type=\"submit\" class=\"button button1\">Partir maintenant ! </button></a>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js\"></script>

</body>
</html>";
        
        $__internal_d732e8e4f749e5b6c1b16045e0456dcae3c31cbf59cd90153b7a19d95f61210d->leave($__internal_d732e8e4f749e5b6c1b16045e0456dcae3c31cbf59cd90153b7a19d95f61210d_prof);

    }

    public function getTemplateName()
    {
        return "LicoBundle::page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 35,  50 => 24,  31 => 8,  22 => 1,);
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


    <!-- Compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css\">

    <title>LicoBox</title>
</head>
<body>
<div class=\"row\">
    <div class=\"col l3 offset-l1 m12 s12 texte\">
        <p>
            Voulez vous commencer maintenant votre périple ?
        </p>
    </div>
    <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
        <img src=\"{{ asset('bundles/lico/images/6784492-cute-pink-unicorn.jpg') }}\" alt=\"logo\"/>
    </div>
    <div class=\"col l3 m12 s12 info\">
        <p>
        </p>
        <p>
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col l6 m6 s12 boutton\">
        <a href=\"{{ path('page_3') }}\"><button type=\"submit\" class=\"button button1\">Partir maintenant ! </button></a>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js\"></script>

</body>
</html>";
    }
}
