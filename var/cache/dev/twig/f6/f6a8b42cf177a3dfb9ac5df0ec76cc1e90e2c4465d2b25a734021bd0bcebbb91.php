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
class __TwigTemplate_318c7b741593616e8df27743993f4243c84a49b479597790b3b1a374640bd5c7 extends Template
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
                    echo "')\" class=\"person notView\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 13), "html", null, true);
                    echo "\"alt=\"image_user\">
                            <div class=\"friendName\">";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "nick", [], "any", false, false, false, 14), "html", null, true);
                    echo "</div>
                        </button>
    
                    </div>
                ";
                } else {
                    // line 19
                    echo "            
                       <div onclick=\"loadChat('";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 20), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 20), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 20), "html", null, true);
                    echo "')\" class=\"person notView\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "img_room", [], "any", false, false, false, 24), "html", null, true);
                    echo "\"alt=\"image_user\">
                            <div class=\"friendName\">";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "codRoom", [], "any", false, false, false, 25), "html", null, true);
                    echo "</div>
                        </button>
    
                    </div>
                ";
                }
                // line 30
                echo "
          ";
                // line 41
                echo "            
          

                 
       
                
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "

";
        } else {
            // line 51
            echo "<p class='error'>You have no chats :(</p>
 ";
        }
        // line 53
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
        return array (  136 => 53,  132 => 51,  127 => 48,  115 => 41,  112 => 30,  104 => 25,  100 => 24,  89 => 20,  86 => 19,  78 => 14,  74 => 13,  63 => 9,  60 => 8,  58 => 7,  54 => 5,  50 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% if room %}


{%for ro in room %}
\t      

                {% if ro.typeOfRoom=='chat' %}
             
                       <div onclick=\"loadChat('{{ro.codRoom}}','{{ro.photo}}', '{{ro.nick}}')\" class=\"person notView\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/{{ro.photo}}\"alt=\"image_user\">
                            <div class=\"friendName\">{{ro.nick}}</div>
                        </button>
    
                    </div>
                {%else%}
            
                       <div onclick=\"loadChat('{{ro.codRoom}}','{{ro.photo}}', '{{ro.codRoom}}')\" class=\"person notView\">

                    
                        <button class=\"person2\">
                            <img class=\"profPict\" src=\"images/avatar/{{ro.img_room}}\"alt=\"image_user\">
                            <div class=\"friendName\">{{ro.codRoom}}</div>
                        </button>
    
                    </div>
                {%endif%}

          {#
                \$view_MSG = load_view(\$_SESSION['user']['cod_user'], \$ro[\"codRoom\"] );
                if(\$view_MSG===false){
                    echo \"<p class='error'>Error connecting to the database, or no room present</p>\";
                }else{
                    if (\$view_MSG['view'] == 0) {
                        \$view = \"notView\";
                    }
                }
            #}
            
          

                 
       
                
{% endfor %}


{% else %}
<p class='error'>You have no chats :(</p>
 {%endif%}



{# 
\t\t


                #}", "contacts.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\contacts.html.twig");
    }
}
