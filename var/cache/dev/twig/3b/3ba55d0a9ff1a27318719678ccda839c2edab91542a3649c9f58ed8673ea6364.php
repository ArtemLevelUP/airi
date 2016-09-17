<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_8e7cc9cee5c87a0191807df9e433990a08e081c73f65f185a9c4400b1924924c extends Twig_Template
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
        $__internal_f3d233b06ef1d08684e6f40298f8fae70031e3fd352c000f4406560725ea36bb = $this->env->getExtension("native_profiler");
        $__internal_f3d233b06ef1d08684e6f40298f8fae70031e3fd352c000f4406560725ea36bb->enter($__internal_f3d233b06ef1d08684e6f40298f8fae70031e3fd352c000f4406560725ea36bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f3d233b06ef1d08684e6f40298f8fae70031e3fd352c000f4406560725ea36bb->leave($__internal_f3d233b06ef1d08684e6f40298f8fae70031e3fd352c000f4406560725ea36bb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f857e1a4923ce3b423a852bf22d665c32f017772d7250985635af3b0c4bae361 = $this->env->getExtension("native_profiler");
        $__internal_f857e1a4923ce3b423a852bf22d665c32f017772d7250985635af3b0c4bae361->enter($__internal_f857e1a4923ce3b423a852bf22d665c32f017772d7250985635af3b0c4bae361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f857e1a4923ce3b423a852bf22d665c32f017772d7250985635af3b0c4bae361->leave($__internal_f857e1a4923ce3b423a852bf22d665c32f017772d7250985635af3b0c4bae361_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_760482985c1c01e040105a65e1fc085f50ceef45070d1248305fa0925f0a1cf6 = $this->env->getExtension("native_profiler");
        $__internal_760482985c1c01e040105a65e1fc085f50ceef45070d1248305fa0925f0a1cf6->enter($__internal_760482985c1c01e040105a65e1fc085f50ceef45070d1248305fa0925f0a1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_760482985c1c01e040105a65e1fc085f50ceef45070d1248305fa0925f0a1cf6->leave($__internal_760482985c1c01e040105a65e1fc085f50ceef45070d1248305fa0925f0a1cf6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_085f21cf5ed660e5fb3f57b4fc54bf32abc13eef5de29699857d027928bab04e = $this->env->getExtension("native_profiler");
        $__internal_085f21cf5ed660e5fb3f57b4fc54bf32abc13eef5de29699857d027928bab04e->enter($__internal_085f21cf5ed660e5fb3f57b4fc54bf32abc13eef5de29699857d027928bab04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_085f21cf5ed660e5fb3f57b4fc54bf32abc13eef5de29699857d027928bab04e->leave($__internal_085f21cf5ed660e5fb3f57b4fc54bf32abc13eef5de29699857d027928bab04e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
