<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ffa0895acf4260f372cf281b485d17fb00ac6bfcf7728e9305c9b5ec84ce88db extends Twig_Template
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
        $__internal_58867a93937de2a373fef81ff36938c680fb379a256e076993001c7ae8ec0aa3 = $this->env->getExtension("native_profiler");
        $__internal_58867a93937de2a373fef81ff36938c680fb379a256e076993001c7ae8ec0aa3->enter($__internal_58867a93937de2a373fef81ff36938c680fb379a256e076993001c7ae8ec0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_58867a93937de2a373fef81ff36938c680fb379a256e076993001c7ae8ec0aa3->leave($__internal_58867a93937de2a373fef81ff36938c680fb379a256e076993001c7ae8ec0aa3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
