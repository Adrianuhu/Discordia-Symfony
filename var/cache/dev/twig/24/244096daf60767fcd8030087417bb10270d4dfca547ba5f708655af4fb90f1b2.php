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

/* contacts.html.twig */
class __TwigTemplate_cf6ed324e395d09c63a919444984a314a48f3c975ee4601ae0d185bd3d195379 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts.html.twig"));

        // line 1
        echo " ";
        if ((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "

";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ro"]) {
                // line 5
                echo "\t      

                ";
                // line 7
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ro"], "typeOfRoom", [], "any", false, false, false, 7), "chat")) {
                    // line 8
                    echo "             
                       <div onclick=\"loadChat('";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 9), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 9), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "nick", [], "any", false, false, false, 9), "html", null, true);
                    echo "')\" class=\"person  ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ro"], "view", [], "any", false, false, false, 9), 0)) {
                        // line 10
                        echo "                       notView
                       ";
                    }
                    // line 11
                    echo "\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 15), "html", null, true);
                    echo "\"alt=\"image_user\">
                            <div class=\"friendName\">";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "nick", [], "any", false, false, false, 16), "html", null, true);
                    echo "</div>
                        </button>
    
                    </div>
                ";
                } else {
                    // line 21
                    echo "            
                       <div onclick=\"loadChat('";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 22), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 22), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 22), "html", null, true);
                    echo "')\" class=\"person 
                       ";
                    // line 23
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ro"], "view", [], "any", false, false, false, 23), 0)) {
                        // line 24
                        echo "                       notView
                       ";
                    }
                    // line 25
                    echo "\">


                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "img_room", [], "any", false, false, false, 30), "html", null, true);
                    echo "\"alt=\"image_user\">
                            <div class=\"friendName\">";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 31), "html", null, true);
                    echo "</div>
                        </button>
    
                    </div>
                ";
                }
                // line 36
                echo "       
                
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "

";
        } else {
            // line 42
            echo "<p class='error'>You have no chats :(</p>
 ";
        }
        // line 44
        echo "


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  142 => 42,  137 => 39,  129 => 36,  121 => 31,  117 => 30,  110 => 25,  106 => 24,  104 => 23,  96 => 22,  93 => 21,  85 => 16,  81 => 15,  75 => 11,  71 => 10,  63 => 9,  60 => 8,  58 => 7,  54 => 5,  50 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% if room %}


{%for ro in room %}
\t      

                {% if ro.typeOfRoom=='chat' %}
             
                       <div onclick=\"loadChat('{{ro.codRoom}}','{{ro.photo}}', '{{ro.nick}}')\" class=\"person  {% if ro.view == 0 %}
                       notView
                       {%endif%}\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/{{ro.photo}}\"alt=\"image_user\">
                            <div class=\"friendName\">{{ ro.nick}}</div>
                        </button>
    
                    </div>
                {%else%}
            
                       <div onclick=\"loadChat('{{ro.codRoom}}','{{ro.photo}}', '{{ro.codRoom}}')\" class=\"person 
                       {% if ro.view == 0 %}
                       notView
                       {%endif%}\">


                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/{{ro.img_room}}\"alt=\"image_user\">
                            <div class=\"friendName\">{{ro.codRoom}}</div>
                        </button>
    
                    </div>
                {%endif%}
       
                
{% endfor %}


{% else %}
<p class='error'>You have no chats :(</p>
 {%endif%}



{# 
\t\t


                #}", "contacts.html.twig", "C:\\Users\\adria\\Discordia-Symfony\\templates\\contacts.html.twig");
    }
}
