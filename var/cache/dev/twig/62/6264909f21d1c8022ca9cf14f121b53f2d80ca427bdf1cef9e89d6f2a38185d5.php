<?php

/* UserBundle:Group:show_content.html.twig */
class __TwigTemplate_14fc6f1bfe7f9ac1ce848c8a966cc5235b0a48170a7311584a55b9aa5bc7040a extends Twig_Template
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
        $__internal_0094331af983ce10e8c603a95d6eb030a751d8abe618efbc1fc3cbeb8da1e057 = $this->env->getExtension("native_profiler");
        $__internal_0094331af983ce10e8c603a95d6eb030a751d8abe618efbc1fc3cbeb8da1e057->enter($__internal_0094331af983ce10e8c603a95d6eb030a751d8abe618efbc1fc3cbeb8da1e057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show_content.html.twig"));

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
        
        $__internal_0094331af983ce10e8c603a95d6eb030a751d8abe618efbc1fc3cbeb8da1e057->leave($__internal_0094331af983ce10e8c603a95d6eb030a751d8abe618efbc1fc3cbeb8da1e057_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show_content.html.twig";
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
