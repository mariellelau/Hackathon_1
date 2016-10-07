<?php

/* licorne/index.html.twig */
class __TwigTemplate_db228eef17d3ea6809f4ffd2c43629a37aedcb006b89775c260da3581d6ad206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "licorne/index.html.twig", 1);
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
        $__internal_894c92a35eebdfb908a95664053cda3d6e2690c6ad323350ed33aa569a45ef39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894c92a35eebdfb908a95664053cda3d6e2690c6ad323350ed33aa569a45ef39->enter($__internal_894c92a35eebdfb908a95664053cda3d6e2690c6ad323350ed33aa569a45ef39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "licorne/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_894c92a35eebdfb908a95664053cda3d6e2690c6ad323350ed33aa569a45ef39->leave($__internal_894c92a35eebdfb908a95664053cda3d6e2690c6ad323350ed33aa569a45ef39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5260545be26164a18ba6d3c7fdce578b09198e884c027b721b6784395fc5a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5260545be26164a18ba6d3c7fdce578b09198e884c027b721b6784395fc5a91->enter($__internal_d5260545be26164a18ba6d3c7fdce578b09198e884c027b721b6784395fc5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Licorne list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idlicorne</th>
                <th>Nomlicorne</th>
                <th>Cornelicorne</th>
                <th>Yeuxlicorne</th>
                <th>Alignementlicorne</th>
                <th>Regimelicorne</th>
                <th>Pelagelicorne</th>
                <th>Imagelicorne</th>
                <th>environement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licornes"]) ? $context["licornes"] : $this->getContext($context, "licornes")));
        foreach ($context['_seq'] as $context["_key"] => $context["licorne"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_show", array("id" => $this->getAttribute($context["licorne"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "iDLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "nomLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "corneLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "yeuxLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "alignementLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "regimeLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "pelageLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "imageLicorne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["licorne"], "environnement", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_show", array("id" => $this->getAttribute($context["licorne"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_edit", array("id" => $this->getAttribute($context["licorne"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licorne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("licorne_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d5260545be26164a18ba6d3c7fdce578b09198e884c027b721b6784395fc5a91->leave($__internal_d5260545be26164a18ba6d3c7fdce578b09198e884c027b721b6784395fc5a91_prof);

    }

    public function getTemplateName()
    {
        return "licorne/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  131 => 47,  119 => 41,  113 => 38,  106 => 34,  102 => 33,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Licorne list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Idlicorne</th>
                <th>Nomlicorne</th>
                <th>Cornelicorne</th>
                <th>Yeuxlicorne</th>
                <th>Alignementlicorne</th>
                <th>Regimelicorne</th>
                <th>Pelagelicorne</th>
                <th>Imagelicorne</th>
                <th>environement</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for licorne in licornes %}
            <tr>
                <td><a href=\"{{ path('licorne_show', { 'id': licorne.id }) }}\">{{ licorne.id }}</a></td>
                <td>{{ licorne.iDLicorne }}</td>
                <td>{{ licorne.nomLicorne }}</td>
                <td>{{ licorne.corneLicorne }}</td>
                <td>{{ licorne.yeuxLicorne }}</td>
                <td>{{ licorne.alignementLicorne }}</td>
                <td>{{ licorne.regimeLicorne }}</td>
                <td>{{ licorne.pelageLicorne }}</td>
                <td>{{ licorne.imageLicorne }}</td>
                <td>{{ licorne.environnement }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('licorne_show', { 'id': licorne.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('licorne_edit', { 'id': licorne.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('licorne_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
