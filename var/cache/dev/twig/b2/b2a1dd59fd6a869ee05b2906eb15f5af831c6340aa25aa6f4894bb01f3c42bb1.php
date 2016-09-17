<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1eca61cf390fe7b633ddabf09c7c4992738d0197a0d197c2d75f54000d05581d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2da67e4f9dab7b7f4581ea29a390d22ba155cc096964f512d28e921b9e1456bb = $this->env->getExtension("native_profiler");
        $__internal_2da67e4f9dab7b7f4581ea29a390d22ba155cc096964f512d28e921b9e1456bb->enter($__internal_2da67e4f9dab7b7f4581ea29a390d22ba155cc096964f512d28e921b9e1456bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2da67e4f9dab7b7f4581ea29a390d22ba155cc096964f512d28e921b9e1456bb->leave($__internal_2da67e4f9dab7b7f4581ea29a390d22ba155cc096964f512d28e921b9e1456bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5c5f97da780ff1d54b5592019d806aa428ed63c013b0377a0a193554e4ccc492 = $this->env->getExtension("native_profiler");
        $__internal_5c5f97da780ff1d54b5592019d806aa428ed63c013b0377a0a193554e4ccc492->enter($__internal_5c5f97da780ff1d54b5592019d806aa428ed63c013b0377a0a193554e4ccc492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5c5f97da780ff1d54b5592019d806aa428ed63c013b0377a0a193554e4ccc492->leave($__internal_5c5f97da780ff1d54b5592019d806aa428ed63c013b0377a0a193554e4ccc492_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b15ffb68152e36d8531983f87fc9b0d3e1bca08f073eb0434052d30aef47f0eb = $this->env->getExtension("native_profiler");
        $__internal_b15ffb68152e36d8531983f87fc9b0d3e1bca08f073eb0434052d30aef47f0eb->enter($__internal_b15ffb68152e36d8531983f87fc9b0d3e1bca08f073eb0434052d30aef47f0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b15ffb68152e36d8531983f87fc9b0d3e1bca08f073eb0434052d30aef47f0eb->leave($__internal_b15ffb68152e36d8531983f87fc9b0d3e1bca08f073eb0434052d30aef47f0eb_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1979236f0c3baa5f459e5f30605dc5c8bdfa88c9d9288c7af6723521c99ed8d5 = $this->env->getExtension("native_profiler");
        $__internal_1979236f0c3baa5f459e5f30605dc5c8bdfa88c9d9288c7af6723521c99ed8d5->enter($__internal_1979236f0c3baa5f459e5f30605dc5c8bdfa88c9d9288c7af6723521c99ed8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1979236f0c3baa5f459e5f30605dc5c8bdfa88c9d9288c7af6723521c99ed8d5->leave($__internal_1979236f0c3baa5f459e5f30605dc5c8bdfa88c9d9288c7af6723521c99ed8d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
