<?php

/* UserBundle:Group:edit.html.twig */
class __TwigTemplate_138793162eb6b751ac1351da6c91116840dfdf02254320b93c5778dab672781c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:edit.html.twig", 1);
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
        $__internal_8999dea050cf4e660f6ebfdc0527ea6946a922b9e16aebf65ac073e01e6a6ebe = $this->env->getExtension("native_profiler");
        $__internal_8999dea050cf4e660f6ebfdc0527ea6946a922b9e16aebf65ac073e01e6a6ebe->enter($__internal_8999dea050cf4e660f6ebfdc0527ea6946a922b9e16aebf65ac073e01e6a6ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8999dea050cf4e660f6ebfdc0527ea6946a922b9e16aebf65ac073e01e6a6ebe->leave($__internal_8999dea050cf4e660f6ebfdc0527ea6946a922b9e16aebf65ac073e01e6a6ebe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b82fa2bb708058de4d2dc8076118fff8b344b2972b0532fbb6b6955ea232a454 = $this->env->getExtension("native_profiler");
        $__internal_b82fa2bb708058de4d2dc8076118fff8b344b2972b0532fbb6b6955ea232a454->enter($__internal_b82fa2bb708058de4d2dc8076118fff8b344b2972b0532fbb6b6955ea232a454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "UserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b82fa2bb708058de4d2dc8076118fff8b344b2972b0532fbb6b6955ea232a454->leave($__internal_b82fa2bb708058de4d2dc8076118fff8b344b2972b0532fbb6b6955ea232a454_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
