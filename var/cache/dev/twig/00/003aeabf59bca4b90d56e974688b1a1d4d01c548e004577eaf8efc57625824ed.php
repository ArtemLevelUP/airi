<?php

/* UserBundle:Security:login_content.html.twig */
class __TwigTemplate_a73d5b2b40d0c1033602d435a694d85cadcbdc68d46672afc33d369ef96f9372 extends Twig_Template
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
        $__internal_d85cb8a7d6dee22aa8dc2851594a88336fa540f3817d8fbafd2a54b9e3754f97 = $this->env->getExtension("native_profiler");
        $__internal_d85cb8a7d6dee22aa8dc2851594a88336fa540f3817d8fbafd2a54b9e3754f97->enter($__internal_d85cb8a7d6dee22aa8dc2851594a88336fa540f3817d8fbafd2a54b9e3754f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<div style=\"width: 450px; margin: 50px auto;\">
    ";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\"><i class=\"glyphicon glyphicon-remove\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("User.Login.ErrorMessage", array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        // line 9
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"form-group\">
            <label for=\"username\">Email:</label>
            <input type=\"email\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
            <button style=\"float: right;\" id=\"_submit\" name=\"_submit\" type=\"submit\" class=\"btn btn-success\"><i class=\"glyphicon glyphicon-ok\"></i> Вход</button>
        </div>

    </form>
</div>";
        
        $__internal_d85cb8a7d6dee22aa8dc2851594a88336fa540f3817d8fbafd2a54b9e3754f97->leave($__internal_d85cb8a7d6dee22aa8dc2851594a88336fa540f3817d8fbafd2a54b9e3754f97_prof);

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
        return array (  49 => 14,  42 => 10,  37 => 9,  31 => 6,  28 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div style="width: 450px; margin: 50px auto;">*/
/*     {% if error %}*/
/*         <div class="panel panel-danger">*/
/*             <div class="panel-heading"><i class="glyphicon glyphicon-remove"></i> {{ 'User.Login.ErrorMessage'|trans }}</div>*/
/*         </div>*/
/*     {% endif %}*/
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
/*             <button style="float: right;" id="_submit" name="_submit" type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Вход</button>*/
/*         </div>*/
/* */
/*     </form>*/
/* </div>*/
