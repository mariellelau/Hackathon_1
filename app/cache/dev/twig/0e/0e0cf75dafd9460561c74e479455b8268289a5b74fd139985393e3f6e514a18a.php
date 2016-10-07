<?php

/* LicoBundle::page4.html.twig */
class __TwigTemplate_0e6b8237d5acc8b8c6f76cdb9fe152e5d1b6ea990ab219d44e7d5d02ccb52fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3229b4d6ab9388e43a8f0ccabb2f6d8f7022d2be47b895e61fe7e59a6c802471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3229b4d6ab9388e43a8f0ccabb2f6d8f7022d2be47b895e61fe7e59a6c802471->enter($__internal_3229b4d6ab9388e43a8f0ccabb2f6d8f7022d2be47b895e61fe7e59a6c802471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoBundle::page4.html.twig"));

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
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "</html>";
        
        $__internal_3229b4d6ab9388e43a8f0ccabb2f6d8f7022d2be47b895e61fe7e59a6c802471->leave($__internal_3229b4d6ab9388e43a8f0ccabb2f6d8f7022d2be47b895e61fe7e59a6c802471_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_e22cd7ecc04866011017cc8bc448ac8bfd1b52d5e09b96271fab7b30cdc50d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22cd7ecc04866011017cc8bc448ac8bfd1b52d5e09b96271fab7b30cdc50d6b->enter($__internal_e22cd7ecc04866011017cc8bc448ac8bfd1b52d5e09b96271fab7b30cdc50d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div class=\"row\">
        <div class=\"col l3 offset-l1 m12 s12 texte\">
            <p>
                Une licorne sauvage apparaît ...<br/>
            </p>
        </div>
        <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lico/images/6784492-cute-pink-unicorn.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/>
        </div>
        <div class=\"col l3 m12 s12 info\">
            <table>
                <thead>
                <tr>
                    <td><img class=\"sylvestre\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/lico/images/1747184008_small.jpg"), "html", null, true);
        echo "\" alt=\"logo\"/></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "nomLicorne", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Couleur des yeux</th>
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "yeuxLicorne", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Alignement</th>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "alignementLicorne", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Régime</th>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "regimeLicorne", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Pelage</th>
                    <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "pelageLicorne", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Environement</th>
                    <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "environnement", array()), "html", null, true);
        echo "</td>
                </tr>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col l6 m6 s12 boutton\">
            <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_5");
        echo "\"><button type=\"submit\" class=\"button button1\">Merci de votre attention</button></a>
        </div>
    </div>
";
        
        $__internal_e22cd7ecc04866011017cc8bc448ac8bfd1b52d5e09b96271fab7b30cdc50d6b->leave($__internal_e22cd7ecc04866011017cc8bc448ac8bfd1b52d5e09b96271fab7b30cdc50d6b_prof);

    }

    public function getTemplateName()
    {
        return "LicoBundle::page4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  118 => 54,  111 => 50,  104 => 46,  97 => 42,  90 => 38,  83 => 34,  76 => 30,  67 => 24,  58 => 17,  52 => 16,  45 => 65,  43 => 16,  32 => 8,  23 => 1,);
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
{% block body %}
    <div class=\"row\">
        <div class=\"col l3 offset-l1 m12 s12 texte\">
            <p>
                Une licorne sauvage apparaît ...<br/>
            </p>
        </div>
        <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
            <img src=\"{{ asset('bundles/lico/images/6784492-cute-pink-unicorn.jpg') }}\" alt=\"logo\"/>
        </div>
        <div class=\"col l3 m12 s12 info\">
            <table>
                <thead>
                <tr>
                    <td><img class=\"sylvestre\" src=\"{{ asset('bundles/lico/images/1747184008_small.jpg') }}\" alt=\"logo\"/></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ licorne.nomLicorne }}</td>
                </tr>
                <tr>
                    <th>Couleur des yeux</th>
                    <td>{{ licorne.yeuxLicorne }}</td>
                </tr>
                <tr>
                    <th>Alignement</th>
                    <td>{{ licorne.alignementLicorne }}</td>
                </tr>
                <tr>
                    <th>Régime</th>
                    <td>{{ licorne.regimeLicorne }}</td>
                </tr>
                <tr>
                    <th>Pelage</th>
                    <td>{{ licorne.pelageLicorne }}</td>
                </tr>
                <tr>
                    <th>Environement</th>
                    <td>{{ licorne.environnement }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col l6 m6 s12 boutton\">
            <a href=\"{{ path('page_5') }}\"><button type=\"submit\" class=\"button button1\">Merci de votre attention</button></a>
        </div>
    </div>
{% endblock %}
</html>";
    }
}
