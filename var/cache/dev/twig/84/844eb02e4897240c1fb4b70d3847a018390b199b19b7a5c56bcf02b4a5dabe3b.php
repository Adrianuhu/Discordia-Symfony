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

/* newGroup.html.twig */
class __TwigTemplate_cfd52d3405f9482db197711299b35ebd678ee4e834a95871f0eca1c90d7aaad5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newGroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "newGroup.html.twig"));

        // line 1
        echo "
<form onsubmit = \"return createNewGroup();\" method=\"POST\" id=\"searchB\">
    <div class=\"searchBar\">
        <label for=\"user\"><b>New Group</b></label>
        <input id=\"nameGroup\" type=\"text\" placeholder=\"Name of Group\" name=\"nameGroup\" value=\"\">
        <input id=\"userTo\" type=\"text\" placeholder=\"Users\" name=\"user\" value=\"\">

        <button type=\"submit\">Send</button>
    </div>

</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "newGroup.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<form onsubmit = \"return createNewGroup();\" method=\"POST\" id=\"searchB\">
    <div class=\"searchBar\">
        <label for=\"user\"><b>New Group</b></label>
        <input id=\"nameGroup\" type=\"text\" placeholder=\"Name of Group\" name=\"nameGroup\" value=\"\">
        <input id=\"userTo\" type=\"text\" placeholder=\"Users\" name=\"user\" value=\"\">

        <button type=\"submit\">Send</button>
    </div>

</form>", "newGroup.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\newGroup.html.twig");
    }
}
