<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_bb338dff98d264bb803a09b6e219a55eedfcc83e0452a821a5f76b014e096e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_70bb8aebfdde6b5b475cc02622b5e591683153b93ccbdc0c732cb2bed1ef843b = $this->env->getExtension("native_profiler");
        $__internal_70bb8aebfdde6b5b475cc02622b5e591683153b93ccbdc0c732cb2bed1ef843b->enter($__internal_70bb8aebfdde6b5b475cc02622b5e591683153b93ccbdc0c732cb2bed1ef843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70bb8aebfdde6b5b475cc02622b5e591683153b93ccbdc0c732cb2bed1ef843b->leave($__internal_70bb8aebfdde6b5b475cc02622b5e591683153b93ccbdc0c732cb2bed1ef843b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_731f9a189470766bffcd7876965896af2bba3870195a8580f28006c6aad6cd12 = $this->env->getExtension("native_profiler");
        $__internal_731f9a189470766bffcd7876965896af2bba3870195a8580f28006c6aad6cd12->enter($__internal_731f9a189470766bffcd7876965896af2bba3870195a8580f28006c6aad6cd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_731f9a189470766bffcd7876965896af2bba3870195a8580f28006c6aad6cd12->leave($__internal_731f9a189470766bffcd7876965896af2bba3870195a8580f28006c6aad6cd12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
