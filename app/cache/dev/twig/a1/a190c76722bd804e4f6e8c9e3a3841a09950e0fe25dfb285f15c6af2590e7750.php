<?php

/* LicoBundle::page6.html.twig */
class __TwigTemplate_15b725d8eb56944bf311cf3a006090b62ee3a6104e3e8f20b16e8e914c4856e6 extends Twig_Template
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
        $__internal_bf7b4ed9e9d87ba76d7e5c00ebcb62163e7fd34155cbc16babc62c6e56b4b197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7b4ed9e9d87ba76d7e5c00ebcb62163e7fd34155cbc16babc62c6e56b4b197->enter($__internal_bf7b4ed9e9d87ba76d7e5c00ebcb62163e7fd34155cbc16babc62c6e56b4b197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoBundle::page6.html.twig"));

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

    <title>Document</title>
</head>
<body>
<div class=\"row\">
    <div class=\"col l3 offset-l1 m12 s12 texte\">
        <p>
            Vous êtes habitant dans un petit village reculé perdu au fond d’une vallée.
            Un soir une épidémie se déclenche et votre médecin de village vous demande, en désespoir de causes de trouver un hypothétique remède basé sur un concentré de Licorne, extrait à la réunion de plusieurs d’entre elles.
        </p>
        <p>
            Suite à sa requête vous prenez votre courage à deux mains et vous vous mettez en quêtes des 12 licornes nécessaires à la synthétisation de ce remède miracle qui pourra soigner votre village.
        </p>
    </div>
    <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lico/images/6784492-cute-pink-unicorn.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/>
    </div>
    <div class=\"col l3 m12 s12 info\">
        <p>
            Vous êtes habitant dans un petit village reculé perdu au fond d’une vallée.
            Un soir une épidémie se déclenche et votre médecin de village vous demande, en désespoir de causes de trouver un hypothétique remède basé sur un concentré de Licorne, extrait à la réunion de plusieurs d’entre elles.
        </p>
        <p>
            Suite à sa requête vous prenez votre courage à deux mains et vous vous mettez en quêtes des 12 licornes nécessaires à la synthétisation de ce remède miracle qui pourra soigner votre village.
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col l6 m6 s12\">
        <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_2");
        echo "\"><button type=\"submit\" class=\"button button1\">Continuer</button></a>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js\"></script>

</body>
</html>";
        
        $__internal_bf7b4ed9e9d87ba76d7e5c00ebcb62163e7fd34155cbc16babc62c6e56b4b197->leave($__internal_bf7b4ed9e9d87ba76d7e5c00ebcb62163e7fd34155cbc16babc62c6e56b4b197_prof);

    }

    public function getTemplateName()
    {
        return "LicoBundle::page6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 42,  54 => 28,  31 => 8,  22 => 1,);
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

    <title>Document</title>
</head>
<body>
<div class=\"row\">
    <div class=\"col l3 offset-l1 m12 s12 texte\">
        <p>
            Vous êtes habitant dans un petit village reculé perdu au fond d’une vallée.
            Un soir une épidémie se déclenche et votre médecin de village vous demande, en désespoir de causes de trouver un hypothétique remède basé sur un concentré de Licorne, extrait à la réunion de plusieurs d’entre elles.
        </p>
        <p>
            Suite à sa requête vous prenez votre courage à deux mains et vous vous mettez en quêtes des 12 licornes nécessaires à la synthétisation de ce remède miracle qui pourra soigner votre village.
        </p>
    </div>
    <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
        <img src=\"{{ asset('bundles/lico/images/6784492-cute-pink-unicorn.jpg') }}\" alt=\"logo\"/>
    </div>
    <div class=\"col l3 m12 s12 info\">
        <p>
            Vous êtes habitant dans un petit village reculé perdu au fond d’une vallée.
            Un soir une épidémie se déclenche et votre médecin de village vous demande, en désespoir de causes de trouver un hypothétique remède basé sur un concentré de Licorne, extrait à la réunion de plusieurs d’entre elles.
        </p>
        <p>
            Suite à sa requête vous prenez votre courage à deux mains et vous vous mettez en quêtes des 12 licornes nécessaires à la synthétisation de ce remède miracle qui pourra soigner votre village.
        </p>
    </div>
</div>
<div class=\"row\">
    <div class=\"col l6 m6 s12\">
        <a href=\"{{ path('page_2') }}\"><button type=\"submit\" class=\"button button1\">Continuer</button></a>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js\"></script>

</body>
</html>";
    }
}
