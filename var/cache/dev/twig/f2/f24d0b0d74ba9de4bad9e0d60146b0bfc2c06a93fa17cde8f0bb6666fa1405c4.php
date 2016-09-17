<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_df11dd2415ced594ae582d6f8b294ddcacd297772b27dc40813b10cbf787979f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbe5d4754155c5513e45b6ff7f1a358b7f5e87e0223965ae964c9c01650a2457 = $this->env->getExtension("native_profiler");
        $__internal_fbe5d4754155c5513e45b6ff7f1a358b7f5e87e0223965ae964c9c01650a2457->enter($__internal_fbe5d4754155c5513e45b6ff7f1a358b7f5e87e0223965ae964c9c01650a2457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe5d4754155c5513e45b6ff7f1a358b7f5e87e0223965ae964c9c01650a2457->leave($__internal_fbe5d4754155c5513e45b6ff7f1a358b7f5e87e0223965ae964c9c01650a2457_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c67e35196cdba73bf0dc760a3623011a63641624b6ef213d64b7eac9fc69e07 = $this->env->getExtension("native_profiler");
        $__internal_0c67e35196cdba73bf0dc760a3623011a63641624b6ef213d64b7eac9fc69e07->enter($__internal_0c67e35196cdba73bf0dc760a3623011a63641624b6ef213d64b7eac9fc69e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_0c67e35196cdba73bf0dc760a3623011a63641624b6ef213d64b7eac9fc69e07->leave($__internal_0c67e35196cdba73bf0dc760a3623011a63641624b6ef213d64b7eac9fc69e07_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
