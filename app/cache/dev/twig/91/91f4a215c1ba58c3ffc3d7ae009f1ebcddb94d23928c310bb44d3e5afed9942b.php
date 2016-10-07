<?php

/* licorne/show.html.twig */
class __TwigTemplate_be8c9e51306ef7e792c8a74d0726ab6e19b175535223ce17a3f4320e23887d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "licorne/show.html.twig", 1);
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
        $__internal_4081243ea24c0c7480293e9666caad7c4a27696dfe7b69f35f17a75380a81c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4081243ea24c0c7480293e9666caad7c4a27696dfe7b69f35f17a75380a81c46->enter($__internal_4081243ea24c0c7480293e9666caad7c4a27696dfe7b69f35f17a75380a81c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licorne/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4081243ea24c0c7480293e9666caad7c4a27696dfe7b69f35f17a75380a81c46->leave($__internal_4081243ea24c0c7480293e9666caad7c4a27696dfe7b69f35f17a75380a81c46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_193548c70f8a579bfb0884b0b2b362086cae87202d2d945639f4aadd91217117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193548c70f8a579bfb0884b0b2b362086cae87202d2d945639f4aadd91217117->enter($__internal_193548c70f8a579bfb0884b0b2b362086cae87202d2d945639f4aadd91217117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Licorne</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idlicorne</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "iDLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomlicorne</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "nomLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cornelicorne</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "corneLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Yeuxlicorne</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "yeuxLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Alignementlicorne</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "alignementLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Regimelicorne</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "regimeLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pelagelicorne</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "pelageLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagelicorne</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "imageLicorne", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_edit", array("id" => $this->getAttribute((isset($context["licorne"]) ? $context["licorne"] : $this->getContext($context, "licorne")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

    </ul>
";
        
        $__internal_193548c70f8a579bfb0884b0b2b362086cae87202d2d945639f4aadd91217117->leave($__internal_193548c70f8a579bfb0884b0b2b362086cae87202d2d945639f4aadd91217117_prof);

    }

    public function getTemplateName()
    {
        return "licorne/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  114 => 49,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Licorne</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ licorne.id }}</td>
            </tr>
            <tr>
                <th>Idlicorne</th>
                <td>{{ licorne.iDLicorne }}</td>
            </tr>
            <tr>
                <th>Nomlicorne</th>
                <td>{{ licorne.nomLicorne }}</td>
            </tr>
            <tr>
                <th>Cornelicorne</th>
                <td>{{ licorne.corneLicorne }}</td>
            </tr>
            <tr>
                <th>Yeuxlicorne</th>
                <td>{{ licorne.yeuxLicorne }}</td>
            </tr>
            <tr>
                <th>Alignementlicorne</th>
                <td>{{ licorne.alignementLicorne }}</td>
            </tr>
            <tr>
                <th>Regimelicorne</th>
                <td>{{ licorne.regimeLicorne }}</td>
            </tr>
            <tr>
                <th>Pelagelicorne</th>
                <td>{{ licorne.pelageLicorne }}</td>
            </tr>
            <tr>
                <th>Imagelicorne</th>
                <td>{{ licorne.imageLicorne }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('licorne_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('licorne_edit', { 'id': licorne.id }) }}\">Edit</a>
        </li>

    </ul>
{% endblock %}
";
    }
}
