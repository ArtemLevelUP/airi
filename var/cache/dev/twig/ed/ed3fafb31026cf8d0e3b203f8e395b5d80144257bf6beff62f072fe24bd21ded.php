<?php

/* UserBundle:Group:new.html.twig */
class __TwigTemplate_5dfe9e86abf438c13ce2c99ffa2b25f2466bc325775e37e20d5bd13ffb394daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:new.html.twig", 1);
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
        $__internal_51347f05f3752a38440437e7ca8d5e8ba13ebda8c4c7b9bf72e24e0abdc1c6dd = $this->env->getExtension("native_profiler");
        $__internal_51347f05f3752a38440437e7ca8d5e8ba13ebda8c4c7b9bf72e24e0abdc1c6dd->enter($__internal_51347f05f3752a38440437e7ca8d5e8ba13ebda8c4c7b9bf72e24e0abdc1c6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51347f05f3752a38440437e7ca8d5e8ba13ebda8c4c7b9bf72e24e0abdc1c6dd->leave($__internal_51347f05f3752a38440437e7ca8d5e8ba13ebda8c4c7b9bf72e24e0abdc1c6dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3307eef91f66a4d355bbb716b070f422e27f9da00a50ca5bab4458a4482be245 = $this->env->getExtension("native_profiler");
        $__internal_3307eef91f66a4d355bbb716b070f422e27f9da00a50ca5bab4458a4482be245->enter($__internal_3307eef91f66a4d355bbb716b070f422e27f9da00a50ca5bab4458a4482be245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "UserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3307eef91f66a4d355bbb716b070f422e27f9da00a50ca5bab4458a4482be245->leave($__internal_3307eef91f66a4d355bbb716b070f422e27f9da00a50ca5bab4458a4482be245_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:new.html.twig";
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
