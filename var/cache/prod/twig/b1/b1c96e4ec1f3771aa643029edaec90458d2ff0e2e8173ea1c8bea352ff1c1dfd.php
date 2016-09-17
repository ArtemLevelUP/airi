<?php

/* UserBundle:Security:login_content.html.twig */
class __TwigTemplate_7d539b01688e060ae3e3658fcab15f18df006b360bb37869fa537741bf2f5534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div style=\"width: 450px; margin: 50px auto;\">
    <form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label for=\"username\">Email:</label>
            <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"password\">Пароль:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
        </div>

        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Запомнить
            </label>
        </div>

        <button id=\"_submit\" name=\"_submit\" type=\"submit\" class=\"btn btn-default\">Вход</button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  37 => 8,  33 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div style="width: 450px; margin: 50px auto;">*/
/*     <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="form-group">*/
/*             <label for="username">Email:</label>*/
/*             <input type="email" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"/>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             <label for="password">Пароль:</label>*/
/*             <input type="password" class="form-control" id="password" name="_password" required="required"/>*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> Запомнить*/
/*             </label>*/
/*         </div>*/
/* */
/*         <button id="_submit" name="_submit" type="submit" class="btn btn-default">Вход</button>*/
/*     </form>*/
/* </div>*/
