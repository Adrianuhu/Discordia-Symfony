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

/* profile.html.twig */
class __TwigTemplate_7bac5af846c9732c807c8ee08057ca6e1afacae9bb5012fc33b494d8b093bb0b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile.html.twig"));

        // line 1
        echo "

    <form action=\"uploadProfile\" method=\"post\" enctype=\"multipart/form-data\">
      
        <div class=\"imgcontainer\">
      <img src=\"images/avatar/";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 6, $this->source); })()), "photo", [], "any", false, false, false, 6), "html", null, true);
        echo "\" class=\"profPict\" alt=\"Hello there\">;
           
        </div>


        <div class=\"container\">

            <label for=\"name\"><b>New name</b></label>
            <input type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" name=\"name\">
          
            <label for=\"surname\"><b>New surname</b></label>
            <input type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 17, $this->source); })()), "surname", [], "any", false, false, false, 17), "html", null, true);
        echo "\" name=\"surname\">


            <label for=\"description\"><b>Description about yourself(250 characters)</b></label>
            <textarea name=\"description\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        echo "</textarea>


            <label for=\"file-upload\" class=\"uploadProfPic\"><b>Choose avatar photo</b></label>
            <input id=\"file-upload\" type=\"file\" name=\"myfile\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 25, $this->source); })()), "photo", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
            <input type=\"hidden\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentData"]) || array_key_exists("currentData", $context) ? $context["currentData"] : (function () { throw new RuntimeError('Variable "currentData" does not exist.', 26, $this->source); })()), "nick", [], "any", false, false, false, 26), "html", null, true);
        echo "\" name=\"nick\">

            <button type=\"submit\" class=\"create\">Save changes</button>
        </div>

    </form>\t   
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  81 => 25,  74 => 21,  67 => 17,  61 => 14,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

    <form action=\"uploadProfile\" method=\"post\" enctype=\"multipart/form-data\">
      
        <div class=\"imgcontainer\">
      <img src=\"images/avatar/{{currentData.photo}}\" class=\"profPict\" alt=\"Hello there\">;
           
        </div>


        <div class=\"container\">

            <label for=\"name\"><b>New name</b></label>
            <input type=\"text\" value=\"{{currentData.name}}\" name=\"name\">
          
            <label for=\"surname\"><b>New surname</b></label>
            <input type=\"text\" value=\"{{currentData.surname}}\" name=\"surname\">


            <label for=\"description\"><b>Description about yourself(250 characters)</b></label>
            <textarea name=\"description\">{{currentData.description}}</textarea>


            <label for=\"file-upload\" class=\"uploadProfPic\"><b>Choose avatar photo</b></label>
            <input id=\"file-upload\" type=\"file\" name=\"myfile\" value=\"{{currentData.photo}}\">
            <input type=\"hidden\" value=\"{{currentData.nick}}\" name=\"nick\">

            <button type=\"submit\" class=\"create\">Save changes</button>
        </div>

    </form>\t   
", "profile.html.twig", "C:\\Users\\adria\\Discordia-Symfony\\templates\\profile.html.twig");
    }
}
