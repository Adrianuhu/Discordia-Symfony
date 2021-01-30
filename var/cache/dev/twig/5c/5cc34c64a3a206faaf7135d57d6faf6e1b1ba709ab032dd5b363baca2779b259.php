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
class __TwigTemplate_bdf39087f6e8d908921f9c96350e7b6bc85def4d56543cde5838fe5c1e832c2b extends Template
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
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 4
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["friend"], "nick", [], "any", false, false, false, 4), "html", null, true);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "

";
        
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
        return array (  60 => 6,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
          
                 {%for friend in friends %}
\t\t\t\t{{ friend.nick }}
\t\t\t{% endfor %}


{# 

 {% if rol%}
                   {% else %}
                 {%endif%}


 


if (\$room === false) {
\t\t\t\techo \"<p class='error'>You have no friends </p>\";
\t\t\t} else {
                foreach (\$room as \$ro) {
                    \$picture = \$ro[\"photo\"];
                    \$name = \$ro[\"nick\"];
                    \$codUser = \$ro[\"cod_user\"];
                    
                    if (\$ro[\"status\"] == 2) {
                        echo '
\t
\t\t\t\t\t<div onclick=\"loadFriendProfile('.\$codUser.')\" class=\"person\" method = \"POST\">
\t
\t\t\t
\t\t\t\t\t\t<input name = \"name_chat\" type=\"hidden\" value = '.\$name.'>
\t\t\t\t\t\t<input name = \"avatar_chat\" type=\"hidden\" value = \"'.\$picture.'\">                        
\t\t\t\t\t\t<button type=\"submit\" class=\"person2\">
\t\t\t\t\t\t\t<img class=\"profPict\" src=\"images/avatar/'.\$picture.'\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"friendName\">'.\$name.'</div>
\t\t\t\t\t\t</button>
\t
\t\t\t\t\t</div>
\t\t\t\t\t';
                    }
                }
            }

            foreach(\$friendReq as \$ro){\t
\t
\t\t\t\t\t\$picture = \$ro[\"photo\"];
\t\t\t\t\t\$name = \$ro[\"nick\"];
\t\t\t\t\t\$codUser = \$ro[\"cod_user\"];
\t\t\t\t\t
\t\t\t\t   if (\$ro[\"status\"] == 0) {
\t\t\t\t\t   echo'
\t\t\t\t\t   <div class=\"person\">
\t
\t\t\t\t\t   <img class=\"profPict\" src=\"images/avatar/'.\$picture.'\"alt=\"image_user\">
\t\t\t\t\t\t\t<div class=\"rest\">
\t\t\t\t\t\t\t\t<div class=\"friendName\">'.\$name.'</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"acDecBut\">
\t\t\t\t\t\t\t\t\t<button onclick=\"acceptFriend('.\$codUser.')\" class=\"ac\">Y</button>
\t\t\t\t\t\t\t\t\t<button onclick=\"denyFriend('.\$codUser.')\" class=\"dec\">N</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t</div>
\t
\t\t\t\t\t   ';
\t\t\t\t   }               
\t\t\t\t}

                #}", "friend.html.twig", "C:\\Users\\adria\\Discordia-Symfony\\templates\\friend.html.twig");
    }
}
