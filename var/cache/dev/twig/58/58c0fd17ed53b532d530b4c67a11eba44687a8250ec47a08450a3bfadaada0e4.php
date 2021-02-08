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

/* allUser.html.twig */
class __TwigTemplate_7173862803d553d777e7736a54dd6ee502880c53263961ec85cb851e3a43847e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "allUser.html.twig"));

        // line 1
        echo "\t   
   
         ";
        // line 3
        if (0 === twig_compare((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 3, $this->source); })()), false)) {
            echo " 
           <p class='error'>Not exist users yet</p>
         ";
        } else {
            // line 5
            echo " 
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ro"]) {
                echo "\t

         

                <div onclick=\"loadFriendProfile(";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "cod_user", [], "any", false, false, false, 10), "html", null, true);
                echo ")\" class=\"person\" method = \"POST\">

        
                    <input name = \"name_chat\" type=\"hidden\" value = ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "nick", [], "any", false, false, false, 13), "html", null, true);
                echo ">
                    <input name = \"avatar_chat\" type=\"hidden\" value = ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 14), "html", null, true);
                echo ">                        
                    <button type=\"submit\" class=\"person2\">
                        <img class=\"profPict\" src=\"images/avatar/";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 16), "html", null, true);
                echo "\"alt=\"image_user\">
                        <div class=\"friendName\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "nick", [], "any", false, false, false, 17), "html", null, true);
                echo "</div>
                    </button>

                </div>
             
                  
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
        ";
        }
        // line 26
        echo "                    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "allUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  97 => 24,  84 => 17,  80 => 16,  75 => 14,  71 => 13,  65 => 10,  56 => 6,  53 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t   
   
         {%if room == false %} 
           <p class='error'>Not exist users yet</p>
         {% else %} 
            {%for ro in room %}\t

         

                <div onclick=\"loadFriendProfile({{ro.cod_user}})\" class=\"person\" method = \"POST\">

        
                    <input name = \"name_chat\" type=\"hidden\" value = {{ro.nick}}>
                    <input name = \"avatar_chat\" type=\"hidden\" value = {{ro.photo}}>                        
                    <button type=\"submit\" class=\"person2\">
                        <img class=\"profPict\" src=\"images/avatar/{{ro.photo}}\"alt=\"image_user\">
                        <div class=\"friendName\">{{ro.nick}}</div>
                    </button>

                </div>
             
                  
            {% endfor %}

        {%endif%}
                    ", "allUser.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\allUser.html.twig");
    }
}
