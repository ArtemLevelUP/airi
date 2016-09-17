<?php

/* UserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8b03c3f7beb49bdf399688551697f655d3ad609217a43c21ea8ff9c6dbd4381a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8a676f2bcfe3b1faa5106248055cd68d0d59a4b71c6b4135844290a03a87b771 = $this->env->getExtension("native_profiler");
        $__internal_8a676f2bcfe3b1faa5106248055cd68d0d59a4b71c6b4135844290a03a87b771->enter($__internal_8a676f2bcfe3b1faa5106248055cd68d0d59a4b71c6b4135844290a03a87b771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a676f2bcfe3b1faa5106248055cd68d0d59a4b71c6b4135844290a03a87b771->leave($__internal_8a676f2bcfe3b1faa5106248055cd68d0d59a4b71c6b4135844290a03a87b771_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c2f8c1e70c71dc77076ca995f97dbad649bdb07759638d5a09f5a25bb52a7c6 = $this->env->getExtension("native_profiler");
        $__internal_5c2f8c1e70c71dc77076ca995f97dbad649bdb07759638d5a09f5a25bb52a7c6->enter($__internal_5c2f8c1e70c71dc77076ca995f97dbad649bdb07759638d5a09f5a25bb52a7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_5c2f8c1e70c71dc77076ca995f97dbad649bdb07759638d5a09f5a25bb52a7c6->leave($__internal_5c2f8c1e70c71dc77076ca995f97dbad649bdb07759638d5a09f5a25bb52a7c6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
