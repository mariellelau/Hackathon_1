<?php

/* environnement/show.html.twig */
class __TwigTemplate_8068f0da22d574f4f532904a7eda84543a05e58416ce76c6f06966604ee7a42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "environnement/show.html.twig", 1);
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
        $__internal_e0b1925d93ba97109e3657b3af7a311b6a3b43cee876535e3505d731ab3df59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b1925d93ba97109e3657b3af7a311b6a3b43cee876535e3505d731ab3df59c->enter($__internal_e0b1925d93ba97109e3657b3af7a311b6a3b43cee876535e3505d731ab3df59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "environnement/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b1925d93ba97109e3657b3af7a311b6a3b43cee876535e3505d731ab3df59c->leave($__internal_e0b1925d93ba97109e3657b3af7a311b6a3b43cee876535e3505d731ab3df59c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a469c076a74151f1967b43f21990160f1e4ce5efe052b362060a92c3aa95baa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a469c076a74151f1967b43f21990160f1e4ce5efe052b362060a92c3aa95baa3->enter($__internal_a469c076a74151f1967b43f21990160f1e4ce5efe052b362060a92c3aa95baa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Environnement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environnement"]) ? $context["environnement"] : $this->getContext($context, "environnement")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idenvironnement</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environnement"]) ? $context["environnement"] : $this->getContext($context, "environnement")), "iDEnvironnement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomenvironnement</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environnement"]) ? $context["environnement"] : $this->getContext($context, "environnement")), "nomEnvironnement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Paysenvironnement</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["environnement"]) ? $context["environnement"] : $this->getContext($context, "environnement")), "paysEnvironnement", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("environnement_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a469c076a74151f1967b43f21990160f1e4ce5efe052b362060a92c3aa95baa3->leave($__internal_a469c076a74151f1967b43f21990160f1e4ce5efe052b362060a92c3aa95baa3_prof);

    }

    public function getTemplateName()
    {
        return "environnement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Environnement</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ environnement.id }}</td>
            </tr>
            <tr>
                <th>Idenvironnement</th>
                <td>{{ environnement.iDEnvironnement }}</td>
            </tr>
            <tr>
                <th>Nomenvironnement</th>
                <td>{{ environnement.nomEnvironnement }}</td>
            </tr>
            <tr>
                <th>Paysenvironnement</th>
                <td>{{ environnement.paysEnvironnement }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('environnement_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
