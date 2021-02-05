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

/* profFriend.html.twig */
class __TwigTemplate_0889c1c984431ae0049b664d12e0ee23d29d076fceee0b53e4fa9d7624529ef7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profFriend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profFriend.html.twig"));

        // line 1
        echo "

        <div class=\"imgcontainer\">
                
                <img src=\"images/avatar/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 5, $this->source); })()), "photo", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"profPict\" alt=\"Hello there\">
        </div>


      <div class=\"container\">

                <label for=\"name\"><b>Name and surname</b></label>
                <div class=\"profFrie\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "  
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 13, $this->source); })()), "surname", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>

                <label for=\"nick\"><b>Nick</b></label>
                <div  class=\"profFrie\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 16, $this->source); })()), "nick", [], "any", false, false, false, 16), "html", null, true);
        echo "</div>

                <label for=\"surname\"><b>Email</b></label>
                <div  class=\"profFrie\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 19, $this->source); })()), "mail", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>

                <label for=\"surname\"><b>Gender</b></label>
                <div  class=\"profFrie\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 22, $this->source); })()), "gender", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>

                <label for=\"description\"><b>Description</b></label>
                <div class=\"profFrie\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</div>
            
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profFriend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  81 => 22,  75 => 19,  69 => 16,  63 => 13,  59 => 12,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

        <div class=\"imgcontainer\">
                
                <img src=\"images/avatar/{{currentData.photo}}\" class=\"profPict\" alt=\"Hello there\">
        </div>


      <div class=\"container\">

                <label for=\"name\"><b>Name and surname</b></label>
                <div class=\"profFrie\">{{currentData.name}}  
                {{currentData.surname}}</div>

                <label for=\"nick\"><b>Nick</b></label>
                <div  class=\"profFrie\">{{currentData.nick}}</div>

                <label for=\"surname\"><b>Email</b></label>
                <div  class=\"profFrie\">{{currentData.mail}}</div>

                <label for=\"surname\"><b>Gender</b></label>
                <div  class=\"profFrie\">{{currentData.gender}}</div>

                <label for=\"description\"><b>Description</b></label>
                <div class=\"profFrie\">{{currentData.description}}</div>
            
        </div>", "profFriend.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\profFriend.html.twig");
    }
}
