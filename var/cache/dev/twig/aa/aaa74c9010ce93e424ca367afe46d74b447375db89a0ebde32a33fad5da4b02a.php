<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4bf257871408ee22998583ba1bb35995c3406ec0137b2b0fc3599dc6a29419f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_863a64545e0a7d9257b74442683ea4515a5ea8e3734918186ef6925f85326b94 = $this->env->getExtension("native_profiler");
        $__internal_863a64545e0a7d9257b74442683ea4515a5ea8e3734918186ef6925f85326b94->enter($__internal_863a64545e0a7d9257b74442683ea4515a5ea8e3734918186ef6925f85326b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863a64545e0a7d9257b74442683ea4515a5ea8e3734918186ef6925f85326b94->leave($__internal_863a64545e0a7d9257b74442683ea4515a5ea8e3734918186ef6925f85326b94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f222171acc6726145c00223712bd766253d9a88c02765558108330550fe3b20d = $this->env->getExtension("native_profiler");
        $__internal_f222171acc6726145c00223712bd766253d9a88c02765558108330550fe3b20d->enter($__internal_f222171acc6726145c00223712bd766253d9a88c02765558108330550fe3b20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f222171acc6726145c00223712bd766253d9a88c02765558108330550fe3b20d->leave($__internal_f222171acc6726145c00223712bd766253d9a88c02765558108330550fe3b20d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
