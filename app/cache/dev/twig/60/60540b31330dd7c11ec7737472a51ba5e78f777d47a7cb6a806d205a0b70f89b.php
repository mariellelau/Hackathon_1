<?php

/* LicoBundle::page3.html.twig */
class __TwigTemplate_134346936dfc8bea5d85dca737d8e8a46a8fc0def60b32181f702499a38a5ebc extends Twig_Template
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
        $__internal_3f292586ed78e883abf17ecd16832601edf23b4ffc6d3496487d6b2d96cba1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f292586ed78e883abf17ecd16832601edf23b4ffc6d3496487d6b2d96cba1f6->enter($__internal_3f292586ed78e883abf17ecd16832601edf23b4ffc6d3496487d6b2d96cba1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LicoBundle::page3.html.twig"));

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
        // line 60
        echo "</html>";
        
        $__internal_3f292586ed78e883abf17ecd16832601edf23b4ffc6d3496487d6b2d96cba1f6->leave($__internal_3f292586ed78e883abf17ecd16832601edf23b4ffc6d3496487d6b2d96cba1f6_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1a31d854b18227c4e65ff260ac02f31e3a34c8dc13ebb1ec45f552936552d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a31d854b18227c4e65ff260ac02f31e3a34c8dc13ebb1ec45f552936552d56->enter($__internal_c1a31d854b18227c4e65ff260ac02f31e3a34c8dc13ebb1ec45f552936552d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <div class=\"row\">
        <div class=\"col l3 offset-l1 m12 s12 texte\">
            <p>
                Où souhaitez-vous aller ?
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
                        <th>Pays</th>
                        <th>Lieu</th>
                    </tr>
                </thead>



                    <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licornes"]) ? $context["licornes"] : $this->getContext($context, "licornes")));
        foreach ($context['_seq'] as $context["_key"] => $context["licorne"]) {
            // line 39
            echo "
                    <tr>

                            <td>

                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("page_4", array("id" => $this->getAttribute($context["licorne"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["licorne"], "environnement", array()), "paysEnvironnement", array()), "html", null, true);
            echo "</a>
                        </td>

                        <td>
                            ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["licorne"], "environnement", array()), "nomEnvironnement", array()), "html", null, true);
            echo "
                        </td>


                </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licorne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_c1a31d854b18227c4e65ff260ac02f31e3a34c8dc13ebb1ec45f552936552d56->leave($__internal_c1a31d854b18227c4e65ff260ac02f31e3a34c8dc13ebb1ec45f552936552d56_prof);

    }

    public function getTemplateName()
    {
        return "LicoBundle::page3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  104 => 48,  95 => 44,  88 => 39,  84 => 38,  67 => 24,  58 => 17,  52 => 16,  45 => 60,  43 => 16,  32 => 8,  23 => 1,);
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
                Où souhaitez-vous aller ?
            </p>
        </div>
        <div class=\"col l2 offset-l1 m2 offset-m5 s2 offset-s5 logo\">
            <img src=\"{{ asset('bundles/lico/images/6784492-cute-pink-unicorn.jpg') }}\" alt=\"logo\"/>
        </div>
        <div class=\"col l3 m12 s12 info\">
            <table>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Lieu</th>
                    </tr>
                </thead>



                    <tbody>
                    {% for licorne in licornes %}

                    <tr>

                            <td>

                                <a href=\"{{ path('page_4', { 'id': licorne.id }) }}\">{{ licorne.environnement.paysEnvironnement }}</a>
                        </td>

                        <td>
                            {{ licorne.environnement.nomEnvironnement }}
                        </td>


                </tr>
                    {% endfor %}

                    </tbody>
            </table>
        </div>
    </div>
{% endblock %}
</html>";
    }
}
