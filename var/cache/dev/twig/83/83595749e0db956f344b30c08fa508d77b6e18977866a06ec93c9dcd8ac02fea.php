<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cd40e7f5206423b247366f1d362f7a280fcebbb86370f5d89572f2d4d1818ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_fdf89e6ee5f0e2ce28c4d1404fc1320db79707b04c01a5a3ff2044962f17df1e = $this->env->getExtension("native_profiler");
        $__internal_fdf89e6ee5f0e2ce28c4d1404fc1320db79707b04c01a5a3ff2044962f17df1e->enter($__internal_fdf89e6ee5f0e2ce28c4d1404fc1320db79707b04c01a5a3ff2044962f17df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdf89e6ee5f0e2ce28c4d1404fc1320db79707b04c01a5a3ff2044962f17df1e->leave($__internal_fdf89e6ee5f0e2ce28c4d1404fc1320db79707b04c01a5a3ff2044962f17df1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31af4c8f22442ba18089c156127b81b0f2621c9c0d681ed0ad771b70b3ba74ec = $this->env->getExtension("native_profiler");
        $__internal_31af4c8f22442ba18089c156127b81b0f2621c9c0d681ed0ad771b70b3ba74ec->enter($__internal_31af4c8f22442ba18089c156127b81b0f2621c9c0d681ed0ad771b70b3ba74ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_31af4c8f22442ba18089c156127b81b0f2621c9c0d681ed0ad771b70b3ba74ec->leave($__internal_31af4c8f22442ba18089c156127b81b0f2621c9c0d681ed0ad771b70b3ba74ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
