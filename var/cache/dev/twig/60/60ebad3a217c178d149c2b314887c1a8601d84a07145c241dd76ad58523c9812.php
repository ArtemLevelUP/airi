<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e1f6cb9284d3e86f3d58a7088a392444179fa2208a1f2917eec756192a15ee17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_a5436684dc19f5dc879b10503e821c8eaa2a10f55a73893a85c6f4a9ff4e0264 = $this->env->getExtension("native_profiler");
        $__internal_a5436684dc19f5dc879b10503e821c8eaa2a10f55a73893a85c6f4a9ff4e0264->enter($__internal_a5436684dc19f5dc879b10503e821c8eaa2a10f55a73893a85c6f4a9ff4e0264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5436684dc19f5dc879b10503e821c8eaa2a10f55a73893a85c6f4a9ff4e0264->leave($__internal_a5436684dc19f5dc879b10503e821c8eaa2a10f55a73893a85c6f4a9ff4e0264_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c960fa12d1ab05df271967a9ef508b53345c89d5317a2e861c9aefc9de7ef279 = $this->env->getExtension("native_profiler");
        $__internal_c960fa12d1ab05df271967a9ef508b53345c89d5317a2e861c9aefc9de7ef279->enter($__internal_c960fa12d1ab05df271967a9ef508b53345c89d5317a2e861c9aefc9de7ef279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c960fa12d1ab05df271967a9ef508b53345c89d5317a2e861c9aefc9de7ef279->leave($__internal_c960fa12d1ab05df271967a9ef508b53345c89d5317a2e861c9aefc9de7ef279_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
