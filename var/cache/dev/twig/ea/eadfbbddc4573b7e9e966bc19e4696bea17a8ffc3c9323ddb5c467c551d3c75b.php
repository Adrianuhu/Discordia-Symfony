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

/* friend.html.twig */
class __TwigTemplate_244c7233c6f17620b708831c6140a864520df5e1d0b809ccdf2f1dc7c9afeaad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend.html.twig"));

        // line 1
        echo "
          


 ";
        // line 5
        if ((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 8
                echo "\t\t\t\t\t

\t\t";
                // line 10
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["friend"], "status", [], "any", false, false, false, 10), 2)) {
                    // line 11
                    echo "
\t\t\t\t\t<div onclick=\"loadFriendProfile(";
                    // line 12
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "cod_user", [], "any", false, false, false, 12), "html", null, true);
                    echo ")\" class=\"person\" method = \"POST\">
\t
\t\t\t
\t\t\t\t\t\t<input name = \"name_chat\" type=\"hidden\" value = '";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "nick", [], "any", false, false, false, 15), "html", null, true);
                    echo "'>
\t\t\t\t\t\t<input name = \"avatar_chat\" type=\"hidden\" value = \"";
                    // line 16
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "photo", [], "any", false, false, false, 16), "html", null, true);
                    echo "\">                        
\t\t\t\t\t\t<button type=\"submit\" class=\"person2\">
\t\t\t\t\t\t\t<img class=\"profPict\" src=\"images/avatar/";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "photo", [], "any", false, false, false, 18), "html", null, true);
                    echo "\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"friendName\">";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "nick", [], "any", false, false, false, 19), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t</button>
\t
\t\t\t\t\t</div>
\t\t\t\t\t
                    
 \t\t";
                }
                // line 26
                echo "                
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friendReq"]) || array_key_exists("friendReq", $context) ? $context["friendReq"] : (function () { throw new RuntimeError('Variable "friendReq" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 31
                echo "
\t\t\t\t\t
\t\t";
                // line 33
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["friend"], "status", [], "any", false, false, false, 33), 0)) {
                    // line 34
                    echo "\t\t\t\t  
\t\t\t\t\t   <div class=\"person\">
\t
\t\t\t\t\t   <img class=\"profPict\" src=\"images/avatar/";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "photo", [], "any", false, false, false, 37), "html", null, true);
                    echo "\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"rest\">
\t\t\t\t\t\t\t\t<div class=\"friendName\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "nick", [], "any", false, false, false, 39), "html", null, true);
                    echo "</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"acDecBut\">
\t\t\t\t\t\t\t\t\t<button onclick=\"acceptFriend(";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "cod_user", [], "any", false, false, false, 42), "html", null, true);
                    echo ")\" class=\"ac\">Y</button>
\t\t\t\t\t\t\t\t\t<button onclick=\"denyFriend(";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "cod_user", [], "any", false, false, false, 43), "html", null, true);
                    echo ")\" class=\"dec\">N</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t</div>

 \t\t";
                }
                // line 51
                echo "\t\t\t\t   


\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t
";
        } else {
            // line 57
            echo "
<p class='error'>You have no friends </p>
 ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  157 => 55,  148 => 51,  137 => 43,  133 => 42,  127 => 39,  122 => 37,  117 => 34,  115 => 33,  111 => 31,  107 => 30,  103 => 28,  96 => 26,  86 => 19,  82 => 18,  77 => 16,  73 => 15,  67 => 12,  64 => 11,  62 => 10,  58 => 8,  54 => 7,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
          


 {% if friends %}

    {%for friend in friends %}
\t\t\t\t\t

\t\t{% if friend.status == 2 %}

\t\t\t\t\t<div onclick=\"loadFriendProfile({{friend.cod_user}})\" class=\"person\" method = \"POST\">
\t
\t\t\t
\t\t\t\t\t\t<input name = \"name_chat\" type=\"hidden\" value = '{{friend.nick}}'>
\t\t\t\t\t\t<input name = \"avatar_chat\" type=\"hidden\" value = \"{{friend.photo}}\">                        
\t\t\t\t\t\t<button type=\"submit\" class=\"person2\">
\t\t\t\t\t\t\t<img class=\"profPict\" src=\"images/avatar/{{friend.photo}}\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"friendName\">{{friend.nick}}</div>
\t\t\t\t\t\t</button>
\t
\t\t\t\t\t</div>
\t\t\t\t\t
                    
 \t\t{%endif%}
                
\t{% endfor %}


    {%for friend in friendReq %}

\t\t\t\t\t
\t\t{% if friend.status == 0 %}
\t\t\t\t  
\t\t\t\t\t   <div class=\"person\">
\t
\t\t\t\t\t   <img class=\"profPict\" src=\"images/avatar/{{friend.photo}}\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"rest\">
\t\t\t\t\t\t\t\t<div class=\"friendName\">{{friend.nick}}</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"acDecBut\">
\t\t\t\t\t\t\t\t\t<button onclick=\"acceptFriend({{friend.cod_user}})\" class=\"ac\">Y</button>
\t\t\t\t\t\t\t\t\t<button onclick=\"denyFriend({{friend.cod_user}})\" class=\"dec\">N</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t</div>

 \t\t{%endif%}
\t\t\t\t   


\t{% endfor %}
\t\t\t\t
{% else %}

<p class='error'>You have no friends </p>
 {%endif%}
{# 
\t\t\t\t   

                #}", "friend.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\friend.html.twig");
    }
}
