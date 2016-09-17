<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_df9a12806115e6e2f47bbf42b5111789162ed24f7aeb3a0b1879995c64544d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_385d6e3f62d95bba48d6c9f23e209b839683cf0a00d5dbaf0e5660d6ca3bd887 = $this->env->getExtension("native_profiler");
        $__internal_385d6e3f62d95bba48d6c9f23e209b839683cf0a00d5dbaf0e5660d6ca3bd887->enter($__internal_385d6e3f62d95bba48d6c9f23e209b839683cf0a00d5dbaf0e5660d6ca3bd887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385d6e3f62d95bba48d6c9f23e209b839683cf0a00d5dbaf0e5660d6ca3bd887->leave($__internal_385d6e3f62d95bba48d6c9f23e209b839683cf0a00d5dbaf0e5660d6ca3bd887_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e640930d019a7fa02c8352faa04be289cd5379b5224729472838235b20b732f = $this->env->getExtension("native_profiler");
        $__internal_8e640930d019a7fa02c8352faa04be289cd5379b5224729472838235b20b732f->enter($__internal_8e640930d019a7fa02c8352faa04be289cd5379b5224729472838235b20b732f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8e640930d019a7fa02c8352faa04be289cd5379b5224729472838235b20b732f->leave($__internal_8e640930d019a7fa02c8352faa04be289cd5379b5224729472838235b20b732f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
