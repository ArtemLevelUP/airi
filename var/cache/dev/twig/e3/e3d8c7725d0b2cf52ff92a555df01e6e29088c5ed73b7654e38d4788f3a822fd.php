<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2d270cb556b71975185f3aa9a7ed648d28522116d6225a78390b4db66311baa2 extends Twig_Template
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
        $__internal_3d92062970b993c209b2a3c7bdf7d30f6f0c1f4b58ab905f90e33b20a6a5739e = $this->env->getExtension("native_profiler");
        $__internal_3d92062970b993c209b2a3c7bdf7d30f6f0c1f4b58ab905f90e33b20a6a5739e->enter($__internal_3d92062970b993c209b2a3c7bdf7d30f6f0c1f4b58ab905f90e33b20a6a5739e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3d92062970b993c209b2a3c7bdf7d30f6f0c1f4b58ab905f90e33b20a6a5739e->leave($__internal_3d92062970b993c209b2a3c7bdf7d30f6f0c1f4b58ab905f90e33b20a6a5739e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
