<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_57f259eb3ae57baa8d36bc61502f673c4917424f907a37aa3b316650b95303cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_9b3fb19748e77235a2bdcc681908865fa51933ed19f611509a1dc47f99bdd67b = $this->env->getExtension("native_profiler");
        $__internal_9b3fb19748e77235a2bdcc681908865fa51933ed19f611509a1dc47f99bdd67b->enter($__internal_9b3fb19748e77235a2bdcc681908865fa51933ed19f611509a1dc47f99bdd67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b3fb19748e77235a2bdcc681908865fa51933ed19f611509a1dc47f99bdd67b->leave($__internal_9b3fb19748e77235a2bdcc681908865fa51933ed19f611509a1dc47f99bdd67b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a27306bf292cebba83ae01d71e2103b870ef6a2a1803c0f3081e7c4a9365a177 = $this->env->getExtension("native_profiler");
        $__internal_a27306bf292cebba83ae01d71e2103b870ef6a2a1803c0f3081e7c4a9365a177->enter($__internal_a27306bf292cebba83ae01d71e2103b870ef6a2a1803c0f3081e7c4a9365a177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_a27306bf292cebba83ae01d71e2103b870ef6a2a1803c0f3081e7c4a9365a177->leave($__internal_a27306bf292cebba83ae01d71e2103b870ef6a2a1803c0f3081e7c4a9365a177_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
