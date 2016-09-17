<?php

/* UserBundle:Resetting:reset.html.twig */
class __TwigTemplate_72bc77915ac77406126a7d99b37e69375f17d6bc514f6211c85d7813cd32dd40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_523f51a189dae139b9358157a132d2cabbe8edfe2ba5c2bf0b650e78d1c6af3f = $this->env->getExtension("native_profiler");
        $__internal_523f51a189dae139b9358157a132d2cabbe8edfe2ba5c2bf0b650e78d1c6af3f->enter($__internal_523f51a189dae139b9358157a132d2cabbe8edfe2ba5c2bf0b650e78d1c6af3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523f51a189dae139b9358157a132d2cabbe8edfe2ba5c2bf0b650e78d1c6af3f->leave($__internal_523f51a189dae139b9358157a132d2cabbe8edfe2ba5c2bf0b650e78d1c6af3f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2045eca47d748cf23321a6b21031a9813f2e264ea2344478acf3fdddbc9ceca6 = $this->env->getExtension("native_profiler");
        $__internal_2045eca47d748cf23321a6b21031a9813f2e264ea2344478acf3fdddbc9ceca6->enter($__internal_2045eca47d748cf23321a6b21031a9813f2e264ea2344478acf3fdddbc9ceca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "UserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2045eca47d748cf23321a6b21031a9813f2e264ea2344478acf3fdddbc9ceca6->leave($__internal_2045eca47d748cf23321a6b21031a9813f2e264ea2344478acf3fdddbc9ceca6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
