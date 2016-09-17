<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d2b529fef12edc4cd223417ae9bf0bb52a6a916cc991f6db8811d6c633924a54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_936f30bdfc5fe0286d4c397cc6aefae0aa22f4be91614d964afd7fe11b79b11d = $this->env->getExtension("native_profiler");
        $__internal_936f30bdfc5fe0286d4c397cc6aefae0aa22f4be91614d964afd7fe11b79b11d->enter($__internal_936f30bdfc5fe0286d4c397cc6aefae0aa22f4be91614d964afd7fe11b79b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936f30bdfc5fe0286d4c397cc6aefae0aa22f4be91614d964afd7fe11b79b11d->leave($__internal_936f30bdfc5fe0286d4c397cc6aefae0aa22f4be91614d964afd7fe11b79b11d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b5067c8dfd9cf21c614f0d14ce7f1ba3e9810302c3b522717013993ef9366fe = $this->env->getExtension("native_profiler");
        $__internal_8b5067c8dfd9cf21c614f0d14ce7f1ba3e9810302c3b522717013993ef9366fe->enter($__internal_8b5067c8dfd9cf21c614f0d14ce7f1ba3e9810302c3b522717013993ef9366fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8b5067c8dfd9cf21c614f0d14ce7f1ba3e9810302c3b522717013993ef9366fe->leave($__internal_8b5067c8dfd9cf21c614f0d14ce7f1ba3e9810302c3b522717013993ef9366fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
