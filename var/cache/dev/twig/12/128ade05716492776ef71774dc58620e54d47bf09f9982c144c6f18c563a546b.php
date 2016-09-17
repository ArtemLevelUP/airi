<?php

/* UserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_6c87269c1127a33c0125f88fe0c4e5cd634902d527ba04f11dd78c07cb704407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_3d0a4072a7467d7e5824e42ae8a539824e844f239f07c69fb7019b56aa087edb = $this->env->getExtension("native_profiler");
        $__internal_3d0a4072a7467d7e5824e42ae8a539824e844f239f07c69fb7019b56aa087edb->enter($__internal_3d0a4072a7467d7e5824e42ae8a539824e844f239f07c69fb7019b56aa087edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0a4072a7467d7e5824e42ae8a539824e844f239f07c69fb7019b56aa087edb->leave($__internal_3d0a4072a7467d7e5824e42ae8a539824e844f239f07c69fb7019b56aa087edb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d11a7d1e192e91c48acfd4bfc9a2e7d038818e0ff2cc570ac731e5d1d39367c = $this->env->getExtension("native_profiler");
        $__internal_3d11a7d1e192e91c48acfd4bfc9a2e7d038818e0ff2cc570ac731e5d1d39367c->enter($__internal_3d11a7d1e192e91c48acfd4bfc9a2e7d038818e0ff2cc570ac731e5d1d39367c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_3d11a7d1e192e91c48acfd4bfc9a2e7d038818e0ff2cc570ac731e5d1d39367c->leave($__internal_3d11a7d1e192e91c48acfd4bfc9a2e7d038818e0ff2cc570ac731e5d1d39367c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:password_already_requested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
