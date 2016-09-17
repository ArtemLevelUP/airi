<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3abb47efb6f1055f4e82057f337836b5357999bd890ff6b0c9c1b4fbff3f4eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c3520c6e644f7bbbd6239fdd5789407a7017bbed97045a4c153259e050dadce1 = $this->env->getExtension("native_profiler");
        $__internal_c3520c6e644f7bbbd6239fdd5789407a7017bbed97045a4c153259e050dadce1->enter($__internal_c3520c6e644f7bbbd6239fdd5789407a7017bbed97045a4c153259e050dadce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3520c6e644f7bbbd6239fdd5789407a7017bbed97045a4c153259e050dadce1->leave($__internal_c3520c6e644f7bbbd6239fdd5789407a7017bbed97045a4c153259e050dadce1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce094eb9b0af7b9df1742e0b50c62366718a9c39aef84f6489951750b80c1d20 = $this->env->getExtension("native_profiler");
        $__internal_ce094eb9b0af7b9df1742e0b50c62366718a9c39aef84f6489951750b80c1d20->enter($__internal_ce094eb9b0af7b9df1742e0b50c62366718a9c39aef84f6489951750b80c1d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ce094eb9b0af7b9df1742e0b50c62366718a9c39aef84f6489951750b80c1d20->leave($__internal_ce094eb9b0af7b9df1742e0b50c62366718a9c39aef84f6489951750b80c1d20_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
