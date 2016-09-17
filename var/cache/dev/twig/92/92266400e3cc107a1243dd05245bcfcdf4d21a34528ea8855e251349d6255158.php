<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6604e6123dc56ea4e3514dee5c27f004509dcc2a1d019129c1500b400024d86d extends Twig_Template
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
        $__internal_5168a026ab19084feeab90f2d7df76a5d4b84382a201b0627247015154ac8493 = $this->env->getExtension("native_profiler");
        $__internal_5168a026ab19084feeab90f2d7df76a5d4b84382a201b0627247015154ac8493->enter($__internal_5168a026ab19084feeab90f2d7df76a5d4b84382a201b0627247015154ac8493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5168a026ab19084feeab90f2d7df76a5d4b84382a201b0627247015154ac8493->leave($__internal_5168a026ab19084feeab90f2d7df76a5d4b84382a201b0627247015154ac8493_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
