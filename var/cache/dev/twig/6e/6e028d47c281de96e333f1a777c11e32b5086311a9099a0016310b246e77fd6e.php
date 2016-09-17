<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_31accd28379b89daec30bef98ddaf1ce6fe86de86d454d7b384971372851dcf9 extends Twig_Template
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
        $__internal_a80d2dad5ddc7e482dd790c98fb4499f7af26360fd7ff5df7fa0935b2afd71aa = $this->env->getExtension("native_profiler");
        $__internal_a80d2dad5ddc7e482dd790c98fb4499f7af26360fd7ff5df7fa0935b2afd71aa->enter($__internal_a80d2dad5ddc7e482dd790c98fb4499f7af26360fd7ff5df7fa0935b2afd71aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a80d2dad5ddc7e482dd790c98fb4499f7af26360fd7ff5df7fa0935b2afd71aa->leave($__internal_a80d2dad5ddc7e482dd790c98fb4499f7af26360fd7ff5df7fa0935b2afd71aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1a842df8c1a79faa66971bda6239a740d60ae0601f4a4ab6278ee71fcb960b6b = $this->env->getExtension("native_profiler");
        $__internal_1a842df8c1a79faa66971bda6239a740d60ae0601f4a4ab6278ee71fcb960b6b->enter($__internal_1a842df8c1a79faa66971bda6239a740d60ae0601f4a4ab6278ee71fcb960b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1a842df8c1a79faa66971bda6239a740d60ae0601f4a4ab6278ee71fcb960b6b->leave($__internal_1a842df8c1a79faa66971bda6239a740d60ae0601f4a4ab6278ee71fcb960b6b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b59930a6fc4070aa1eed704baee59f93f85e2ad8964fd17af46d1bbf64815384 = $this->env->getExtension("native_profiler");
        $__internal_b59930a6fc4070aa1eed704baee59f93f85e2ad8964fd17af46d1bbf64815384->enter($__internal_b59930a6fc4070aa1eed704baee59f93f85e2ad8964fd17af46d1bbf64815384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b59930a6fc4070aa1eed704baee59f93f85e2ad8964fd17af46d1bbf64815384->leave($__internal_b59930a6fc4070aa1eed704baee59f93f85e2ad8964fd17af46d1bbf64815384_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9688dab2c535193d5ab279573b2083a0e06be0dc78db1ebc2ffcd715e097ee8d = $this->env->getExtension("native_profiler");
        $__internal_9688dab2c535193d5ab279573b2083a0e06be0dc78db1ebc2ffcd715e097ee8d->enter($__internal_9688dab2c535193d5ab279573b2083a0e06be0dc78db1ebc2ffcd715e097ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9688dab2c535193d5ab279573b2083a0e06be0dc78db1ebc2ffcd715e097ee8d->leave($__internal_9688dab2c535193d5ab279573b2083a0e06be0dc78db1ebc2ffcd715e097ee8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
