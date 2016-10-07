<?php

/* utilisateur/index.html.twig */
class __TwigTemplate_2d91b624d848e031183b889690a875da3501568f969bc87359b4edae1a1c4868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
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
        $__internal_d59353acb49207ef951099c18d25f20f6620787399c7d67812754408311ae691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59353acb49207ef951099c18d25f20f6620787399c7d67812754408311ae691->enter($__internal_d59353acb49207ef951099c18d25f20f6620787399c7d67812754408311ae691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59353acb49207ef951099c18d25f20f6620787399c7d67812754408311ae691->leave($__internal_d59353acb49207ef951099c18d25f20f6620787399c7d67812754408311ae691_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9def00d68d243f4b31cfb49b249e30760dacc9c5eb4bf9c7b68dd91454a5a6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9def00d68d243f4b31cfb49b249e30760dacc9c5eb4bf9c7b68dd91454a5a6fe->enter($__internal_9def00d68d243f4b31cfb49b249e30760dacc9c5eb4bf9c7b68dd91454a5a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Utilisateur list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idutilisateur</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) ? $context["utilisateurs"] : $this->getContext($context, "utilisateurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "iDUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisateur_show", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    
";
        
        $__internal_9def00d68d243f4b31cfb49b249e30760dacc9c5eb4bf9c7b68dd91454a5a6fe->leave($__internal_9def00d68d243f4b31cfb49b249e30760dacc9c5eb4bf9c7b68dd91454a5a6fe_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Utilisateur list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idutilisateur</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for utilisateur in utilisateurs %}
            <tr>
                <td><a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">{{ utilisateur.id }}</a></td>
                <td>{{ utilisateur.iDUtilisateur }}</td>
                <td>{{ utilisateur.nom }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('utilisateur_show', { 'id': utilisateur.id }) }}\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
";
    }
}
