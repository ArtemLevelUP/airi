<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fb841c975debead1c06d34160cdc1c9616e5d19b52ba4c89ebd2a15552fa97e0 extends Twig_Template
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
        $__internal_72c2cc189826d753350a2adeb4439592dd65a957fba3233e258fc9825131f0e3 = $this->env->getExtension("native_profiler");
        $__internal_72c2cc189826d753350a2adeb4439592dd65a957fba3233e258fc9825131f0e3->enter($__internal_72c2cc189826d753350a2adeb4439592dd65a957fba3233e258fc9825131f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_72c2cc189826d753350a2adeb4439592dd65a957fba3233e258fc9825131f0e3->leave($__internal_72c2cc189826d753350a2adeb4439592dd65a957fba3233e258fc9825131f0e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
