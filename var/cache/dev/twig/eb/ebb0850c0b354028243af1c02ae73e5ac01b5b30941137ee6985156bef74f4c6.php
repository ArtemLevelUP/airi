<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_5b27c46039bf05681d23571b8257432c49f546b585db06c875be1b5b969cf648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Profile:show.html.twig", 1);
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
        $__internal_a7c7c531710c30df1e2b551010cf598ef41e61d05a9656ed41651b9b09f76ae8 = $this->env->getExtension("native_profiler");
        $__internal_a7c7c531710c30df1e2b551010cf598ef41e61d05a9656ed41651b9b09f76ae8->enter($__internal_a7c7c531710c30df1e2b551010cf598ef41e61d05a9656ed41651b9b09f76ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7c7c531710c30df1e2b551010cf598ef41e61d05a9656ed41651b9b09f76ae8->leave($__internal_a7c7c531710c30df1e2b551010cf598ef41e61d05a9656ed41651b9b09f76ae8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51f7f8aca680bd97bc7bb2080af86bb07c294c9c1cbaef35a821fd554e64fe57 = $this->env->getExtension("native_profiler");
        $__internal_51f7f8aca680bd97bc7bb2080af86bb07c294c9c1cbaef35a821fd554e64fe57->enter($__internal_51f7f8aca680bd97bc7bb2080af86bb07c294c9c1cbaef35a821fd554e64fe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_51f7f8aca680bd97bc7bb2080af86bb07c294c9c1cbaef35a821fd554e64fe57->leave($__internal_51f7f8aca680bd97bc7bb2080af86bb07c294c9c1cbaef35a821fd554e64fe57_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
