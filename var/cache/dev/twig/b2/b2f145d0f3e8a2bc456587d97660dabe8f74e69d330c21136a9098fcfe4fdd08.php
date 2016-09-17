<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b985b0ec6d2f42ba1509ac2f235dcd36432c788765db78b86b9fad4ef07eab37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03bf653443fab6b949afcd0e9c2f387d5750dada2f2fa45642789d10d62800f7 = $this->env->getExtension("native_profiler");
        $__internal_03bf653443fab6b949afcd0e9c2f387d5750dada2f2fa45642789d10d62800f7->enter($__internal_03bf653443fab6b949afcd0e9c2f387d5750dada2f2fa45642789d10d62800f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_03bf653443fab6b949afcd0e9c2f387d5750dada2f2fa45642789d10d62800f7->leave($__internal_03bf653443fab6b949afcd0e9c2f387d5750dada2f2fa45642789d10d62800f7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9f0740b32592c43723ab62ae1398809d61fdb827598d8a4274286f7b17fda260 = $this->env->getExtension("native_profiler");
        $__internal_9f0740b32592c43723ab62ae1398809d61fdb827598d8a4274286f7b17fda260->enter($__internal_9f0740b32592c43723ab62ae1398809d61fdb827598d8a4274286f7b17fda260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f0740b32592c43723ab62ae1398809d61fdb827598d8a4274286f7b17fda260->leave($__internal_9f0740b32592c43723ab62ae1398809d61fdb827598d8a4274286f7b17fda260_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
