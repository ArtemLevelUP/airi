<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_e15080b3513cb003217a07407b8996ef3323b226332911a78cf1481044ccd0b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e133bf79bb666307d03639a221e0d472d266723a0764633957567582c870228e = $this->env->getExtension("native_profiler");
        $__internal_e133bf79bb666307d03639a221e0d472d266723a0764633957567582c870228e->enter($__internal_e133bf79bb666307d03639a221e0d472d266723a0764633957567582c870228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e133bf79bb666307d03639a221e0d472d266723a0764633957567582c870228e->leave($__internal_e133bf79bb666307d03639a221e0d472d266723a0764633957567582c870228e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25ab840763329832dedd80cd79b5cd75bfbad67edd4fd28a09f548a76acfb61b = $this->env->getExtension("native_profiler");
        $__internal_25ab840763329832dedd80cd79b5cd75bfbad67edd4fd28a09f548a76acfb61b->enter($__internal_25ab840763329832dedd80cd79b5cd75bfbad67edd4fd28a09f548a76acfb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_25ab840763329832dedd80cd79b5cd75bfbad67edd4fd28a09f548a76acfb61b->leave($__internal_25ab840763329832dedd80cd79b5cd75bfbad67edd4fd28a09f548a76acfb61b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
