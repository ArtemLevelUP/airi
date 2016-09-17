<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_bb7396ef2211a875269332caf818a899237c79c0564aea78b65a17e47826a1ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_b2d23d4eb5c674cc69c63399bfff37eff56868dede15f3494e0a676165fc2a46 = $this->env->getExtension("native_profiler");
        $__internal_b2d23d4eb5c674cc69c63399bfff37eff56868dede15f3494e0a676165fc2a46->enter($__internal_b2d23d4eb5c674cc69c63399bfff37eff56868dede15f3494e0a676165fc2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2d23d4eb5c674cc69c63399bfff37eff56868dede15f3494e0a676165fc2a46->leave($__internal_b2d23d4eb5c674cc69c63399bfff37eff56868dede15f3494e0a676165fc2a46_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb7bda1381f35a71adbff32833ad8a919d59b93255c94ba9d093f525a817c334 = $this->env->getExtension("native_profiler");
        $__internal_bb7bda1381f35a71adbff32833ad8a919d59b93255c94ba9d093f525a817c334->enter($__internal_bb7bda1381f35a71adbff32833ad8a919d59b93255c94ba9d093f525a817c334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bb7bda1381f35a71adbff32833ad8a919d59b93255c94ba9d093f525a817c334->leave($__internal_bb7bda1381f35a71adbff32833ad8a919d59b93255c94ba9d093f525a817c334_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
