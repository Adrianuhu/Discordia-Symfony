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

/* register.html.twig */
class __TwigTemplate_3b3742dd596c8d87d7c2063077bdae00df892889ad1c1b44bc5a1b3d87b9682e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        // line 1
        echo "
<html>

<head>
\t<title>Create profile</title>
\t<meta charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"css/register.css\">
</head>

<body>

\t<form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registerU");
        echo "\" method=\"post\">
\t
\t\t<div class=\"container\">
        <label for=\"name\"><b>Name</b></label>
          <input type=\"text\" placeholder=\"Enter your name\" name=\"name\" required>
          
          <label for=\"name\"><b>Surname</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your surname\" name=\"surname\" required>

\t\t  <label for=\"nick\"><b>Nickname</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your nick\" name=\"nick\" required>
\t  
\t\t  <label for=\"password\"><b>Password</b></label>
\t\t  <input type=\"password\" placeholder=\"Enter your password\" name=\"password\" required>

\t\t  <label for=\"email\"><b>E-mail</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your E-mail\" name=\"email\" required>

\t\t  <label for=\"gender\"><b>Choose your gender</b></label>
\t\t  <select name=\"gender\">
\t\t\t  <option value=\"male\">Male</option>
\t\t\t  <option value=\"female\">Female</option>
\t\t\t  <option value=\"other\">Other</option>
\t\t  </select>\t\t
\t\t\t  
\t\t  <button type=\"submit\" class=\"create\">Create User</button>
\t\t</div>

\t  </form>
\t  

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>

<head>
\t<title>Create profile</title>
\t<meta charset=\"UTF-8\">
\t<link rel=\"stylesheet\" href=\"css/register.css\">
</head>

<body>

\t<form action=\"{{ path('registerU') }}\" method=\"post\">
\t
\t\t<div class=\"container\">
        <label for=\"name\"><b>Name</b></label>
          <input type=\"text\" placeholder=\"Enter your name\" name=\"name\" required>
          
          <label for=\"name\"><b>Surname</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your surname\" name=\"surname\" required>

\t\t  <label for=\"nick\"><b>Nickname</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your nick\" name=\"nick\" required>
\t  
\t\t  <label for=\"password\"><b>Password</b></label>
\t\t  <input type=\"password\" placeholder=\"Enter your password\" name=\"password\" required>

\t\t  <label for=\"email\"><b>E-mail</b></label>
\t\t  <input type=\"text\" placeholder=\"Enter your E-mail\" name=\"email\" required>

\t\t  <label for=\"gender\"><b>Choose your gender</b></label>
\t\t  <select name=\"gender\">
\t\t\t  <option value=\"male\">Male</option>
\t\t\t  <option value=\"female\">Female</option>
\t\t\t  <option value=\"other\">Other</option>
\t\t  </select>\t\t
\t\t\t  
\t\t  <button type=\"submit\" class=\"create\">Create User</button>
\t\t</div>

\t  </form>
\t  

</body>

</html>", "register.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\register.html.twig");
    }
}
