<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_e42933106da90bd1ffb4a5aa42cc58a19c2832a4ca376a0471454b77ced017f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:register.html.twig", 1);
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
        $__internal_20840f40044279f0ef20ad1a2ae41075034dd1f01f2e93534b213dae754a01a2 = $this->env->getExtension("native_profiler");
        $__internal_20840f40044279f0ef20ad1a2ae41075034dd1f01f2e93534b213dae754a01a2->enter($__internal_20840f40044279f0ef20ad1a2ae41075034dd1f01f2e93534b213dae754a01a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20840f40044279f0ef20ad1a2ae41075034dd1f01f2e93534b213dae754a01a2->leave($__internal_20840f40044279f0ef20ad1a2ae41075034dd1f01f2e93534b213dae754a01a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22506de087306561dbb2b96243ee35eb190821f34709addb2fd034f3c63a0c0d = $this->env->getExtension("native_profiler");
        $__internal_22506de087306561dbb2b96243ee35eb190821f34709addb2fd034f3c63a0c0d->enter($__internal_22506de087306561dbb2b96243ee35eb190821f34709addb2fd034f3c63a0c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "UserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_22506de087306561dbb2b96243ee35eb190821f34709addb2fd034f3c63a0c0d->leave($__internal_22506de087306561dbb2b96243ee35eb190821f34709addb2fd034f3c63a0c0d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
