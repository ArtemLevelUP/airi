<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_33a7d243a5c53abf8ab815209aab9cefcdf03a3fd59e8c1b661d243a7e5442c9 extends Twig_Template
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
        $__internal_1e163c9583ee504336108c1ee3b408146acb143ecd902e04fbd7bf0c1c2abd30 = $this->env->getExtension("native_profiler");
        $__internal_1e163c9583ee504336108c1ee3b408146acb143ecd902e04fbd7bf0c1c2abd30->enter($__internal_1e163c9583ee504336108c1ee3b408146acb143ecd902e04fbd7bf0c1c2abd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1e163c9583ee504336108c1ee3b408146acb143ecd902e04fbd7bf0c1c2abd30->leave($__internal_1e163c9583ee504336108c1ee3b408146acb143ecd902e04fbd7bf0c1c2abd30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
