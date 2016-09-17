<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_f76d1e8a5b16fc0620f19b1cf8cc8c8b2b263c6d0746a006026f37c062d22696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_219f892c3fc9858a9690ca68fc586da67a5b180cb752d3a2d71bbd78a122a21a = $this->env->getExtension("native_profiler");
        $__internal_219f892c3fc9858a9690ca68fc586da67a5b180cb752d3a2d71bbd78a122a21a->enter($__internal_219f892c3fc9858a9690ca68fc586da67a5b180cb752d3a2d71bbd78a122a21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_219f892c3fc9858a9690ca68fc586da67a5b180cb752d3a2d71bbd78a122a21a->leave($__internal_219f892c3fc9858a9690ca68fc586da67a5b180cb752d3a2d71bbd78a122a21a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_510950dc9eaadf516ec60696298e46c5b1690d2195c107742b9a70c6e7eb0316 = $this->env->getExtension("native_profiler");
        $__internal_510950dc9eaadf516ec60696298e46c5b1690d2195c107742b9a70c6e7eb0316->enter($__internal_510950dc9eaadf516ec60696298e46c5b1690d2195c107742b9a70c6e7eb0316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br/>
It works!
";
        
        $__internal_510950dc9eaadf516ec60696298e46c5b1690d2195c107742b9a70c6e7eb0316->leave($__internal_510950dc9eaadf516ec60696298e46c5b1690d2195c107742b9a70c6e7eb0316_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <br/>*/
/* It works!*/
/* {% endblock %}*/
