<?php

/* base.html.twig */
class __TwigTemplate_0530896fea297f55af3851e232e44e1686546a3c0fd2c386f08fbec7924ab7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a855b9782e1f74f9385da242e1af6c2fcdf289afdad21b89412bbdf1bf05ea7e = $this->env->getExtension("native_profiler");
        $__internal_a855b9782e1f74f9385da242e1af6c2fcdf289afdad21b89412bbdf1bf05ea7e->enter($__internal_a855b9782e1f74f9385da242e1af6c2fcdf289afdad21b89412bbdf1bf05ea7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('asset')->getAssetUrl("css/fddb9b6_part_1.css");
            // line 8
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6") : $this->env->getExtension('asset')->getAssetUrl("css/fddb9b6.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_1.js");
            // line 12
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
            <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\">
                Выйти
            </a>
        ";
        } else {
            // line 24
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\">Войти</a>
        ";
        }
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </body>
</html>
";
        
        $__internal_a855b9782e1f74f9385da242e1af6c2fcdf289afdad21b89412bbdf1bf05ea7e->leave($__internal_a855b9782e1f74f9385da242e1af6c2fcdf289afdad21b89412bbdf1bf05ea7e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f83cca4d3faae8c8352353bdecae293850b300503358874ee103dc669f81e105 = $this->env->getExtension("native_profiler");
        $__internal_f83cca4d3faae8c8352353bdecae293850b300503358874ee103dc669f81e105->enter($__internal_f83cca4d3faae8c8352353bdecae293850b300503358874ee103dc669f81e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f83cca4d3faae8c8352353bdecae293850b300503358874ee103dc669f81e105->leave($__internal_f83cca4d3faae8c8352353bdecae293850b300503358874ee103dc669f81e105_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f42b675830adfd2ce27d87f4abc271f3f232e9a4eba68c1b924620b3a69eebf3 = $this->env->getExtension("native_profiler");
        $__internal_f42b675830adfd2ce27d87f4abc271f3f232e9a4eba68c1b924620b3a69eebf3->enter($__internal_f42b675830adfd2ce27d87f4abc271f3f232e9a4eba68c1b924620b3a69eebf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f42b675830adfd2ce27d87f4abc271f3f232e9a4eba68c1b924620b3a69eebf3->leave($__internal_f42b675830adfd2ce27d87f4abc271f3f232e9a4eba68c1b924620b3a69eebf3_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c33005db9922dfd0510355b9e4a8cae329dd7b1076c853de2af3c229f948ebf = $this->env->getExtension("native_profiler");
        $__internal_9c33005db9922dfd0510355b9e4a8cae329dd7b1076c853de2af3c229f948ebf->enter($__internal_9c33005db9922dfd0510355b9e4a8cae329dd7b1076c853de2af3c229f948ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c33005db9922dfd0510355b9e4a8cae329dd7b1076c853de2af3c229f948ebf->leave($__internal_9c33005db9922dfd0510355b9e4a8cae329dd7b1076c853de2af3c229f948ebf_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9ea1d6a66f7f354904261bd15c4cc68bb8d55b4436d6bafb8377e973c97e59e = $this->env->getExtension("native_profiler");
        $__internal_f9ea1d6a66f7f354904261bd15c4cc68bb8d55b4436d6bafb8377e973c97e59e->enter($__internal_f9ea1d6a66f7f354904261bd15c4cc68bb8d55b4436d6bafb8377e973c97e59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9ea1d6a66f7f354904261bd15c4cc68bb8d55b4436d6bafb8377e973c97e59e->leave($__internal_f9ea1d6a66f7f354904261bd15c4cc68bb8d55b4436d6bafb8377e973c97e59e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 28,  155 => 27,  144 => 6,  132 => 5,  123 => 29,  120 => 28,  118 => 27,  115 => 26,  109 => 24,  102 => 20,  97 => 19,  95 => 18,  89 => 15,  86 => 14,  66 => 12,  62 => 11,  57 => 10,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         {% stylesheets '@bootstrap_css' %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% javascripts '@jquery' '@bootstrap_js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ app.user.username }} |*/
/*             <a href="{{ path('user_logout') }}">*/
/*                 Выйти*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('user_login') }}">Войти</a>*/
/*         {% endif %}*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
