<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3f76048071d345739a1880a19558a628e1a42092a56875cd3c5fc2ca6b0d7645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b118d13948a03193fa02c9fad310f0511c09545acaf25ef3527b4c2c2d19f051 = $this->env->getExtension("native_profiler");
        $__internal_b118d13948a03193fa02c9fad310f0511c09545acaf25ef3527b4c2c2d19f051->enter($__internal_b118d13948a03193fa02c9fad310f0511c09545acaf25ef3527b4c2c2d19f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b118d13948a03193fa02c9fad310f0511c09545acaf25ef3527b4c2c2d19f051->leave($__internal_b118d13948a03193fa02c9fad310f0511c09545acaf25ef3527b4c2c2d19f051_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a698f15878f53b1a25dfec4466101b6ee11bec1de8f7652cff2290af558277e = $this->env->getExtension("native_profiler");
        $__internal_1a698f15878f53b1a25dfec4466101b6ee11bec1de8f7652cff2290af558277e->enter($__internal_1a698f15878f53b1a25dfec4466101b6ee11bec1de8f7652cff2290af558277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1a698f15878f53b1a25dfec4466101b6ee11bec1de8f7652cff2290af558277e->leave($__internal_1a698f15878f53b1a25dfec4466101b6ee11bec1de8f7652cff2290af558277e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
