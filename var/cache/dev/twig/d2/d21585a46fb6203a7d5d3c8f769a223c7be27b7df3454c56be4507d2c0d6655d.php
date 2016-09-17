<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_98b4385d78632d2b5323a8b6c7ed030ef057f5b38bdc42b38795d81db8e68e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_2cbc4a91b45615fa4194ba50ce935d92b55eaf5e3ed6ec21396f926b91ff14d0 = $this->env->getExtension("native_profiler");
        $__internal_2cbc4a91b45615fa4194ba50ce935d92b55eaf5e3ed6ec21396f926b91ff14d0->enter($__internal_2cbc4a91b45615fa4194ba50ce935d92b55eaf5e3ed6ec21396f926b91ff14d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cbc4a91b45615fa4194ba50ce935d92b55eaf5e3ed6ec21396f926b91ff14d0->leave($__internal_2cbc4a91b45615fa4194ba50ce935d92b55eaf5e3ed6ec21396f926b91ff14d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12f84d2e3e5ac9bfc8b5c4bc4dce4cd2eceea966060896936a4e5151e194005f = $this->env->getExtension("native_profiler");
        $__internal_12f84d2e3e5ac9bfc8b5c4bc4dce4cd2eceea966060896936a4e5151e194005f->enter($__internal_12f84d2e3e5ac9bfc8b5c4bc4dce4cd2eceea966060896936a4e5151e194005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_12f84d2e3e5ac9bfc8b5c4bc4dce4cd2eceea966060896936a4e5151e194005f->leave($__internal_12f84d2e3e5ac9bfc8b5c4bc4dce4cd2eceea966060896936a4e5151e194005f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
