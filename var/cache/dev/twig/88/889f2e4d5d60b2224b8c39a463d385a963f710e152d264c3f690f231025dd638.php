<?php

/* UserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1f64b73336ad3d6a590294331ae2ce6967bc8defa70e31a5216f9a202ce9acd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_107d638c0520ad38e30cebd1c0c83ffec7d8776e7377d0d64ca1fdfa0c3afa3f = $this->env->getExtension("native_profiler");
        $__internal_107d638c0520ad38e30cebd1c0c83ffec7d8776e7377d0d64ca1fdfa0c3afa3f->enter($__internal_107d638c0520ad38e30cebd1c0c83ffec7d8776e7377d0d64ca1fdfa0c3afa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107d638c0520ad38e30cebd1c0c83ffec7d8776e7377d0d64ca1fdfa0c3afa3f->leave($__internal_107d638c0520ad38e30cebd1c0c83ffec7d8776e7377d0d64ca1fdfa0c3afa3f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4e432d0f00472f31e2956b1391c3cd7d6fc6a933123a69bd4adabfad95a1a64 = $this->env->getExtension("native_profiler");
        $__internal_f4e432d0f00472f31e2956b1391c3cd7d6fc6a933123a69bd4adabfad95a1a64->enter($__internal_f4e432d0f00472f31e2956b1391c3cd7d6fc6a933123a69bd4adabfad95a1a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f4e432d0f00472f31e2956b1391c3cd7d6fc6a933123a69bd4adabfad95a1a64->leave($__internal_f4e432d0f00472f31e2956b1391c3cd7d6fc6a933123a69bd4adabfad95a1a64_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
