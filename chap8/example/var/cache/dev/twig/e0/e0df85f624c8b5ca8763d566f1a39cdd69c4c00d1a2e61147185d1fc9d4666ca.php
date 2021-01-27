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

/* playersTable2.html.twig */
class __TwigTemplate_7609145fdaa9f64474986a5ae766aa49fe5b831a47f0ef43ab8da4fe0d49f710 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "playersTable2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "playersTable2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Players</title>        
    </head>
    <body>
\t\t";
        // line 8
        if (0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), 1)) {
            // line 9
            echo "\t\t\t<p>Team not found</p>
\t\t";
        } elseif (0 === twig_compare(        // line 10
(isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })()), 2)) {
            // line 11
            echo "\t\t\t<p>Team wothout players</p>
\t\t";
        } else {
            // line 13
            echo "\t\t\t<table> 
\t\t\t\t<tr><th>Code</th><th>Name</th><th>Age</th><th>Team</th></tr>
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new RuntimeError('Variable "players" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 16
                echo "\t\t\t\t\t<tr><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "age", [], "any", false, false, false, 16), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["player"], "team", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
                echo "</td></tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t</table>
\t\t";
        }
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "playersTable2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  86 => 18,  71 => 16,  67 => 15,  63 => 13,  59 => 11,  57 => 10,  54 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Players</title>        
    </head>
    <body>
\t\t{% if error == 1%}
\t\t\t<p>Team not found</p>
\t\t{% elseif  error == 2%}
\t\t\t<p>Team wothout players</p>
\t\t{% else %}
\t\t\t<table> 
\t\t\t\t<tr><th>Code</th><th>Name</th><th>Age</th><th>Team</th></tr>
\t\t\t\t{%for player in players %}
\t\t\t\t\t<tr><td>{{ player.id }}</td><td>{{ player.name }}</td><td>{{ player.age }}</td><td>{{ player.team.name }}</td></tr>
\t\t\t\t{% endfor %}
\t\t\t</table>
\t\t{%endif %}
    </body>
</html>
", "playersTable2.html.twig", "C:\\xampp\\htdocs\\cap8\\example\\templates\\playersTable2.html.twig");
    }
}
