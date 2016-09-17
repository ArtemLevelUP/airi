<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2e05012c57e5067a93d68be2062a32c32796f6a625bb55c3780251a04394fda4 extends Twig_Template
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
        $__internal_19492aad85bde3b1b7351d4cffa22f8b527f71794fcb256a087b6ee90b9e3c4a = $this->env->getExtension("native_profiler");
        $__internal_19492aad85bde3b1b7351d4cffa22f8b527f71794fcb256a087b6ee90b9e3c4a->enter($__internal_19492aad85bde3b1b7351d4cffa22f8b527f71794fcb256a087b6ee90b9e3c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_19492aad85bde3b1b7351d4cffa22f8b527f71794fcb256a087b6ee90b9e3c4a->leave($__internal_19492aad85bde3b1b7351d4cffa22f8b527f71794fcb256a087b6ee90b9e3c4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
