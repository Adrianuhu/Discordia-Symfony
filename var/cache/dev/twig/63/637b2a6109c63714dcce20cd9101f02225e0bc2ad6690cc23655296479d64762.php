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

/* plantilla.html.twig */
class __TwigTemplate_85dc8b7b80f2019ff03e199ba62ee75ea07c230fb2174de9cfb31d9248e63542 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plantilla.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plantilla.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 3
            echo "\t      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "nick", [], "any", false, false, false, 3), "html", null, true);
            echo "         
                
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "asdfasfasfd
";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 7,  60 => 6,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{%for friend in friends %}
\t      {{friend.nick}}         
                
{% endfor %}
asdfasfasfd
{{c}}


{# 
\t\t\t\t   
 {% if friends %}
{% else %}
 {%endif%}

                #}", "plantilla.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\plantilla.html.twig");
    }
}
