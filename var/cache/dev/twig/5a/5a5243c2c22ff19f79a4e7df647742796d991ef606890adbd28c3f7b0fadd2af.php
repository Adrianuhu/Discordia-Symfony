<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart.html.twig */
class __TwigTemplate_169e8367fc23aac566b7c28b195e4384a8d85bdaaa8100addb964818741fb9e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Shopping cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo "    
\t\t";
        // line 5
        if (twig_test_empty((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "\t\t\t<p> The cart is empty </p>
\t\t";
        } else {
            // line 8
            echo "\t\t\t<table>
\t\t\t<tr><th>Name</th><th>Description</th><th>Stock</th><th>Weight</th><th>Units</th><th>Remove</th></tr>
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prod"]) {
                // line 11
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "name", [], "any", false, false, false, 11), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "description", [], "any", false, false, false, 11), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "stock", [], "any", false, false, false, 11), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "weight", [], "any", false, false, false, 11), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "units", [], "any", false, false, false, 11), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><form action = ";
                // line 12
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove");
                echo " method = 'POST'>
\t\t\t\t\t<input name = 'units' type='number' min = '1' value = '1'>
\t\t\t\t\t<input type = 'submit' value='remove'><input name = 'cod' type='hidden' value = ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prod"], "codProd", [], "any", false, false, false, 14), "html", null, true);
                echo ">
\t\t\t\t\t</form></td>
\t\t\t\t\t</tr>\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</table>
\t\t\t <a href = ";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("processOrder");
            echo ">Checkout</a>
\t\t";
        }
        // line 20
        echo "    
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 20,  135 => 19,  132 => 18,  122 => 14,  117 => 12,  104 => 11,  100 => 10,  96 => 8,  92 => 6,  90 => 5,  78 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/cart.html.twig #}
{% extends 'base.html.twig' %}
{% block title %}Shopping cart{% endblock %}
{% block content %}    
\t\t{% if products is empty %}
\t\t\t<p> The cart is empty </p>
\t\t{% else %}
\t\t\t<table>
\t\t\t<tr><th>Name</th><th>Description</th><th>Stock</th><th>Weight</th><th>Units</th><th>Remove</th></tr>
\t\t\t\t{% for  prod in products %}
\t\t\t\t\t<tr><td>{{ prod.name }}</td><td>{{ prod.description }}</td><td>{{ prod.stock }}</td><td>{{ prod.weight }}</td><td>{{  prod.units  }}</td>
\t\t\t\t\t\t<td><form action = {{path('remove')}} method = 'POST'>
\t\t\t\t\t<input name = 'units' type='number' min = '1' value = '1'>
\t\t\t\t\t<input type = 'submit' value='remove'><input name = 'cod' type='hidden' value = {{prod.codProd}}>
\t\t\t\t\t</form></td>
\t\t\t\t\t</tr>\t\t\t
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t\t <a href = {{ path('processOrder') }}>Checkout</a>
\t\t{% endif %}    
\t
{% endblock %}
", "cart.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\cart.html.twig");
    }
}
