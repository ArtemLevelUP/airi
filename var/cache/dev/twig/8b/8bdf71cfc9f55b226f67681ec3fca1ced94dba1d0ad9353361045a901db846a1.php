<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1ce74a4f60aff73b0c0c1b42fce6e01e292da7a4cda2e5ac98dfb4437308c33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94c50536f1715eb41aaae8e5a42d209ed529dd2c9171b93d3ffd9695e9bddb0f = $this->env->getExtension("native_profiler");
        $__internal_94c50536f1715eb41aaae8e5a42d209ed529dd2c9171b93d3ffd9695e9bddb0f->enter($__internal_94c50536f1715eb41aaae8e5a42d209ed529dd2c9171b93d3ffd9695e9bddb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_94c50536f1715eb41aaae8e5a42d209ed529dd2c9171b93d3ffd9695e9bddb0f->leave($__internal_94c50536f1715eb41aaae8e5a42d209ed529dd2c9171b93d3ffd9695e9bddb0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
