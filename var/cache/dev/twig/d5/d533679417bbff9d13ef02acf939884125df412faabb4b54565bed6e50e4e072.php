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

/* main.html.twig */
class __TwigTemplate_f55a2d35bf0906984bd7278d5c694e7aa0c7fc433c85081531c5174b176136ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        echo "
<div class=\"pantalla\">
\t\t<p id=\"nameMail\"><a href=\"/main\">DISCORDIA</a></p>
\t\t\t<button onclick=\"logOut()\" class=\"logout\">Log out</button>
\t\t
        <div class=\"leftSide\">

            <div class=\"buttons\">
                <div class=\"newMsg\">
                    <button class=\"newMsgBtn\" onclick=\"showSB()\">+ Send new message</button>
                </div>

            <div class=\"menu\">
                <button class=\"tab\" onclick=\"showContacts()\">Messages</button>
                
                ";
        // line 16
        if (0 === twig_compare((isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 16, $this->source); })()), 0)) {
            // line 17
            echo "                <button class=\"tab\" onclick=\"showFriends()\">Friends</button>
                ";
        } else {
            // line 19
            echo "                <button class=\"tab\" onclick=\"showAllUsers()\">All Users</button>
                ";
        }
        // line 21
        echo "                
            </div>
            </div>

<div class=\"contacts\" id=\"contacts\">

</div>


<div class=\"userPerSpa\">
    <div class=\"photo\">
          

        <img src=\"images/avatar/";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["nameUser"]) || array_key_exists("nameUser", $context) ? $context["nameUser"] : (function () { throw new RuntimeError('Variable "nameUser" does not exist.', 34, $this->source); })()), "html", null, true);
        echo ".jpg\" class=\"profPict\" alt=\"\">
            </div>

            <div class=\"data\">
        <div class=\"usrName\">";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["nameUser"]) || array_key_exists("nameUser", $context) ? $context["nameUser"] : (function () { throw new RuntimeError('Variable "nameUser" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</div>
    
\t\t<button class=\"usrSpaBtn\" onclick=\"showSBF()\">
\t\t\tAdd friend
        </button>

        <button class=\"usrSpaBtn\" onclick=\"showNewGroup()\">
            New group
\t\t</button>
\t\t
\t\t<button class=\"usrSpaBtn\" onclick=\"showModifyProfile()\">
\t\t\tProfile
\t\t</button>
              
    </div>


</div>
</div>

<div class=\"chat\" id=\"chat1\">
</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 38,  85 => 34,  70 => 21,  66 => 19,  62 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"pantalla\">
\t\t<p id=\"nameMail\"><a href=\"/main\">DISCORDIA</a></p>
\t\t\t<button onclick=\"logOut()\" class=\"logout\">Log out</button>
\t\t
        <div class=\"leftSide\">

            <div class=\"buttons\">
                <div class=\"newMsg\">
                    <button class=\"newMsgBtn\" onclick=\"showSB()\">+ Send new message</button>
                </div>

            <div class=\"menu\">
                <button class=\"tab\" onclick=\"showContacts()\">Messages</button>
                
                {% if rol == 0 %}
                <button class=\"tab\" onclick=\"showFriends()\">Friends</button>
                {% else %}
                <button class=\"tab\" onclick=\"showAllUsers()\">All Users</button>
                {%endif%}
                
            </div>
            </div>

<div class=\"contacts\" id=\"contacts\">

</div>


<div class=\"userPerSpa\">
    <div class=\"photo\">
          

        <img src=\"images/avatar/{{nameUser}}.jpg\" class=\"profPict\" alt=\"\">
            </div>

            <div class=\"data\">
        <div class=\"usrName\">{{nameUser}}</div>
    
\t\t<button class=\"usrSpaBtn\" onclick=\"showSBF()\">
\t\t\tAdd friend
        </button>

        <button class=\"usrSpaBtn\" onclick=\"showNewGroup()\">
            New group
\t\t</button>
\t\t
\t\t<button class=\"usrSpaBtn\" onclick=\"showModifyProfile()\">
\t\t\tProfile
\t\t</button>
              
    </div>


</div>
</div>

<div class=\"chat\" id=\"chat1\">
</div>
</div>
", "main.html.twig", "C:\\Users\\adria\\Discordia-Symfony\\templates\\main.html.twig");
    }
}
