<?php

/* UserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87c93831d4d7de495f577aa603c1f9517190e8aae1782b82d9ca281961eed26e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_b392070ae3a1ef687c33186eec919ff39339de05900c8254c8f5c22ea5cc1833 = $this->env->getExtension("native_profiler");
        $__internal_b392070ae3a1ef687c33186eec919ff39339de05900c8254c8f5c22ea5cc1833->enter($__internal_b392070ae3a1ef687c33186eec919ff39339de05900c8254c8f5c22ea5cc1833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b392070ae3a1ef687c33186eec919ff39339de05900c8254c8f5c22ea5cc1833->leave($__internal_b392070ae3a1ef687c33186eec919ff39339de05900c8254c8f5c22ea5cc1833_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_356acf9feaef97dfbd5a55846a44e7af18501b04acd8495d334ca9b716c65194 = $this->env->getExtension("native_profiler");
        $__internal_356acf9feaef97dfbd5a55846a44e7af18501b04acd8495d334ca9b716c65194->enter($__internal_356acf9feaef97dfbd5a55846a44e7af18501b04acd8495d334ca9b716c65194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_356acf9feaef97dfbd5a55846a44e7af18501b04acd8495d334ca9b716c65194->leave($__internal_356acf9feaef97dfbd5a55846a44e7af18501b04acd8495d334ca9b716c65194_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
