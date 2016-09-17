<?php

/* UserBundle:Group:show.html.twig */
class __TwigTemplate_5dff96496ac0b9f938c810f097d260fcd869460e49239deb60424994f824f38f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:show.html.twig", 1);
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
        $__internal_8a71e3f1dd3f09e7dfb986232e3dc2a88cb9097cbd558570b785155ce9cd79d4 = $this->env->getExtension("native_profiler");
        $__internal_8a71e3f1dd3f09e7dfb986232e3dc2a88cb9097cbd558570b785155ce9cd79d4->enter($__internal_8a71e3f1dd3f09e7dfb986232e3dc2a88cb9097cbd558570b785155ce9cd79d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a71e3f1dd3f09e7dfb986232e3dc2a88cb9097cbd558570b785155ce9cd79d4->leave($__internal_8a71e3f1dd3f09e7dfb986232e3dc2a88cb9097cbd558570b785155ce9cd79d4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b7fec57417d06b44429eccf7e153f575a1a6caafeb79c909a7435c74149dfb6 = $this->env->getExtension("native_profiler");
        $__internal_9b7fec57417d06b44429eccf7e153f575a1a6caafeb79c909a7435c74149dfb6->enter($__internal_9b7fec57417d06b44429eccf7e153f575a1a6caafeb79c909a7435c74149dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "UserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9b7fec57417d06b44429eccf7e153f575a1a6caafeb79c909a7435c74149dfb6->leave($__internal_9b7fec57417d06b44429eccf7e153f575a1a6caafeb79c909a7435c74149dfb6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
