<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_df933bfc8fee50a54d8d980d865a2610e49a33c0ab2b82305b33d17646949b07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3d4fdc0621c200bdb9f9d55ee9c56e6948d8f2a939379decc5302cf43f97d7a8 = $this->env->getExtension("native_profiler");
        $__internal_3d4fdc0621c200bdb9f9d55ee9c56e6948d8f2a939379decc5302cf43f97d7a8->enter($__internal_3d4fdc0621c200bdb9f9d55ee9c56e6948d8f2a939379decc5302cf43f97d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4fdc0621c200bdb9f9d55ee9c56e6948d8f2a939379decc5302cf43f97d7a8->leave($__internal_3d4fdc0621c200bdb9f9d55ee9c56e6948d8f2a939379decc5302cf43f97d7a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fcf66de85597b8b1eb92bcdb7419eb8ad512a177d8f86b7f14478e57ea08cd82 = $this->env->getExtension("native_profiler");
        $__internal_fcf66de85597b8b1eb92bcdb7419eb8ad512a177d8f86b7f14478e57ea08cd82->enter($__internal_fcf66de85597b8b1eb92bcdb7419eb8ad512a177d8f86b7f14478e57ea08cd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_fcf66de85597b8b1eb92bcdb7419eb8ad512a177d8f86b7f14478e57ea08cd82->leave($__internal_fcf66de85597b8b1eb92bcdb7419eb8ad512a177d8f86b7f14478e57ea08cd82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
