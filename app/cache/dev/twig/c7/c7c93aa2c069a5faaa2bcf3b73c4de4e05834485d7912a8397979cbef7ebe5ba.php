<?php

/* environnement/index.html.twig */
class __TwigTemplate_3c4d0d39044b9d81b9ce70f03562947fb79ea83557e25f36ae9c101df4263d40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "environnement/index.html.twig", 1);
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
        $__internal_4a5c8a3efd3141d94c9b323702eebf6cc0b4cdf2977aed76968e3a96693bcd63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5c8a3efd3141d94c9b323702eebf6cc0b4cdf2977aed76968e3a96693bcd63->enter($__internal_4a5c8a3efd3141d94c9b323702eebf6cc0b4cdf2977aed76968e3a96693bcd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "environnement/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5c8a3efd3141d94c9b323702eebf6cc0b4cdf2977aed76968e3a96693bcd63->leave($__internal_4a5c8a3efd3141d94c9b323702eebf6cc0b4cdf2977aed76968e3a96693bcd63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_092dcfb480c0d49d7b525fdad26385f9525390fce2e812fa406d5c28d69ddedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092dcfb480c0d49d7b525fdad26385f9525390fce2e812fa406d5c28d69ddedf->enter($__internal_092dcfb480c0d49d7b525fdad26385f9525390fce2e812fa406d5c28d69ddedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Environnement list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idenvironnement</th>
                <th>Nomenvironnement</th>
                <th>Paysenvironnement</th>
                <th>Temperatureenvironnement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["environnements"]) ? $context["environnements"] : $this->getContext($context, "environnements")));
        foreach ($context['_seq'] as $context["_key"] => $context["environnement"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("environnement_show", array("id" => $this->getAttribute($context["environnement"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["environnement"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["environnement"], "iDEnvironnement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["environnement"], "nomEnvironnement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["environnement"], "paysEnvironnement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["environnement"], "temperatureEnvironnement", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("environnement_show", array("id" => $this->getAttribute($context["environnement"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("environnement_edit", array("id" => $this->getAttribute($context["environnement"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['environnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("environnement_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_092dcfb480c0d49d7b525fdad26385f9525390fce2e812fa406d5c28d69ddedf->leave($__internal_092dcfb480c0d49d7b525fdad26385f9525390fce2e812fa406d5c28d69ddedf_prof);

    }

    public function getTemplateName()
    {
        return "environnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Environnement list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idenvironnement</th>
                <th>Nomenvironnement</th>
                <th>Paysenvironnement</th>
                <th>Temperatureenvironnement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for environnement in environnements %}
            <tr>
                <td><a href=\"{{ path('environnement_show', { 'id': environnement.id }) }}\">{{ environnement.id }}</a></td>
                <td>{{ environnement.iDEnvironnement }}</td>
                <td>{{ environnement.nomEnvironnement }}</td>
                <td>{{ environnement.paysEnvironnement }}</td>
                <td>{{ environnement.temperatureEnvironnement }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('environnement_show', { 'id': environnement.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('environnement_edit', { 'id': environnement.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('environnement_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
