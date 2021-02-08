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

/* chat_AJAX.html.twig */
class __TwigTemplate_f3cf890635018fe483cc9c00c90538ec6870ac10adae6a9c632d4a94bc9c935e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_AJAX.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat_AJAX.html.twig"));

        // line 1
        echo "

        <div class=\"chat\">
            <div class=\"userSendTo\">
                <img src=\"images/avatar/";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["avatar_chat"]) || array_key_exists("avatar_chat", $context) ? $context["avatar_chat"] : (function () { throw new RuntimeError('Variable "avatar_chat" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar of chat\" class=\"profPict\">
                <div class=\"friendName\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name_chat"]) || array_key_exists("name_chat", $context) ? $context["name_chat"] : (function () { throw new RuntimeError('Variable "name_chat" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</div>

            </div>


            <div class=\"text\" id=\"textChat\">


 ";
        // line 14
        if ((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "
\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ro"]) {
                // line 17
                echo "                    <div class=\"msgR\">
                        <div class=\"photo\">
                         <img class=\"profPict\" src=\"images/avatar/";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "photo", [], "any", false, false, false, 19), "html", null, true);
                echo "\"alt=\"image_user\">
                        </div>
                        <div class=\"content\">
\t\t\t
            ";
                // line 23
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["ro"], "link", [], "any", false, false, false, 23), 1)) {
                    // line 24
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "text_message", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" alt=\"Img is not loading srry :´(\" width=\"100\">

                <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "text_message", [], "any", false, false, false, 26), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "text_message", [], "any", false, false, false, 26), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 28
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ro"], "text_message", [], "any", false, false, false, 28), "html", null, true);
                    echo "
            ";
                }
                // line 30
                echo "
                        
                        
                    \t</div>
                    </div>
\t\t\t\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
 ";
        }
        // line 39
        echo "
            </div>

            <div class=\"chtBot\">

                <form onsubmit = \"return sendMessage();\" class=\"txtMsj\">
                    <input type=\"text\" placeholder=\"Write here\" id=\"textMessage\" value=\"\" class=\"msgBar\">     
                    <input id=\"codRoomMessage\" type=\"hidden\" value = \"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["codRoom"]) || array_key_exists("codRoom", $context) ? $context["codRoom"] : (function () { throw new RuntimeError('Variable "codRoom" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\">
                    <input id=\"avatar_chat\" type=\"hidden\" value = \"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["avatar_chat"]) || array_key_exists("avatar_chat", $context) ? $context["avatar_chat"] : (function () { throw new RuntimeError('Variable "avatar_chat" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\">
                    <input id=\"name_chat\" type=\"hidden\" value = \"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["name_chat"]) || array_key_exists("name_chat", $context) ? $context["name_chat"] : (function () { throw new RuntimeError('Variable "name_chat" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\">

                
                
                    <input type = \"submit\" class=\"sendBtn\" value=\"Send\">

                </form>

                <div class=\"fileBtn\">
                <input id=\"code_my_usr\" type=\"hidden\" value = \"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["cod"]) || array_key_exists("cod", $context) ? $context["cod"] : (function () { throw new RuntimeError('Variable "cod" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\">
               
                
               <label for=\"fileupload\" class=\"sendBtn\">Choose file</label>
               <input id=\"fileupload\" type=\"file\" name=\"pepe\" />
               <button for=\"fileupload\" onclick=\"uploadFile()\" class=\"sendBtn\"> Upload </button>

          
                </div>
            </div>

           
                
        </div>

    </div>


                ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chat_AJAX.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 57,  138 => 48,  134 => 47,  130 => 46,  121 => 39,  117 => 37,  105 => 30,  99 => 28,  92 => 26,  86 => 24,  84 => 23,  77 => 19,  73 => 17,  69 => 16,  66 => 15,  64 => 14,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

        <div class=\"chat\">
            <div class=\"userSendTo\">
                <img src=\"images/avatar/{{avatar_chat}}\" alt=\"avatar of chat\" class=\"profPict\">
                <div class=\"friendName\">{{name_chat}}</div>

            </div>


            <div class=\"text\" id=\"textChat\">


 {% if room %}

\t{%for ro in room %}
                    <div class=\"msgR\">
                        <div class=\"photo\">
                         <img class=\"profPict\" src=\"images/avatar/{{ro.photo}}\"alt=\"image_user\">
                        </div>
                        <div class=\"content\">
\t\t\t
            {% if ro.link == 1 %}
                <img src=\"{{ro.text_message}}\" alt=\"Img is not loading srry :´(\" width=\"100\">

                <a href=\"{{ro.text_message}}\">{{ro.text_message}}</a>
            {%else%}
                {{ro.text_message}}
            {%endif%}

                        
                        
                    \t</div>
                    </div>
\t\t\t\t\t
\t{% endfor %}

 {%endif%}

            </div>

            <div class=\"chtBot\">

                <form onsubmit = \"return sendMessage();\" class=\"txtMsj\">
                    <input type=\"text\" placeholder=\"Write here\" id=\"textMessage\" value=\"\" class=\"msgBar\">     
                    <input id=\"codRoomMessage\" type=\"hidden\" value = \"{{codRoom}}\">
                    <input id=\"avatar_chat\" type=\"hidden\" value = \"{{avatar_chat}}\">
                    <input id=\"name_chat\" type=\"hidden\" value = \"{{name_chat}}\">

                
                
                    <input type = \"submit\" class=\"sendBtn\" value=\"Send\">

                </form>

                <div class=\"fileBtn\">
                <input id=\"code_my_usr\" type=\"hidden\" value = \"{{cod}}\">
               
                
               <label for=\"fileupload\" class=\"sendBtn\">Choose file</label>
               <input id=\"fileupload\" type=\"file\" name=\"pepe\" />
               <button for=\"fileupload\" onclick=\"uploadFile()\" class=\"sendBtn\"> Upload </button>

          
                </div>
            </div>

           
                
        </div>

    </div>


                ", "chat_AJAX.html.twig", "C:\\Users\\Adrián\\Discordia-Symfony\\templates\\chat_AJAX.html.twig");
    }
}
