<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_b7e6ee81a91ba48becf113a6d4d69a53e9c0ffaf82649e5eddcd2037fda40ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_168fdd609307846c225b3c91c0d32778c6c8e873ac93a99c52c1636791512a8e = $this->env->getExtension("native_profiler");
        $__internal_168fdd609307846c225b3c91c0d32778c6c8e873ac93a99c52c1636791512a8e->enter($__internal_168fdd609307846c225b3c91c0d32778c6c8e873ac93a99c52c1636791512a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168fdd609307846c225b3c91c0d32778c6c8e873ac93a99c52c1636791512a8e->leave($__internal_168fdd609307846c225b3c91c0d32778c6c8e873ac93a99c52c1636791512a8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0af59bb644fd85a5a87cb05a3588f9ddd9916ff9517e10742f0da222d1ee07e1 = $this->env->getExtension("native_profiler");
        $__internal_0af59bb644fd85a5a87cb05a3588f9ddd9916ff9517e10742f0da222d1ee07e1->enter($__internal_0af59bb644fd85a5a87cb05a3588f9ddd9916ff9517e10742f0da222d1ee07e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "UserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_0af59bb644fd85a5a87cb05a3588f9ddd9916ff9517e10742f0da222d1ee07e1->leave($__internal_0af59bb644fd85a5a87cb05a3588f9ddd9916ff9517e10742f0da222d1ee07e1_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
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
/* {% extends "UserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('UserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
