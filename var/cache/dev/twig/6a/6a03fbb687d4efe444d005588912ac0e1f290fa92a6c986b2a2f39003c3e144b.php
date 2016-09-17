<?php

/* UserBundle:Resetting:request.html.twig */
class __TwigTemplate_fb0bcc2fe72db5286c385ef44dfab311c6e650b1e9afdc63eddb84b24a7fdef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0ecaafa55bebd09165a7e1cdcb8e224fda738ddd08e03cde443abf0a3110852f = $this->env->getExtension("native_profiler");
        $__internal_0ecaafa55bebd09165a7e1cdcb8e224fda738ddd08e03cde443abf0a3110852f->enter($__internal_0ecaafa55bebd09165a7e1cdcb8e224fda738ddd08e03cde443abf0a3110852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ecaafa55bebd09165a7e1cdcb8e224fda738ddd08e03cde443abf0a3110852f->leave($__internal_0ecaafa55bebd09165a7e1cdcb8e224fda738ddd08e03cde443abf0a3110852f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a363f0cfbb973243bd303e9a221f9176c61a9fd857ef5d7b493dba2f33714efc = $this->env->getExtension("native_profiler");
        $__internal_a363f0cfbb973243bd303e9a221f9176c61a9fd857ef5d7b493dba2f33714efc->enter($__internal_a363f0cfbb973243bd303e9a221f9176c61a9fd857ef5d7b493dba2f33714efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "UserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a363f0cfbb973243bd303e9a221f9176c61a9fd857ef5d7b493dba2f33714efc->leave($__internal_a363f0cfbb973243bd303e9a221f9176c61a9fd857ef5d7b493dba2f33714efc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
