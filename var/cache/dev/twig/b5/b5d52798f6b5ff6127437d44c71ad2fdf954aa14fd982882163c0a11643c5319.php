<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b334cd811094b8522cc9bf6111897974b20a0ce67e4ce9366f83c8ed247685dd extends Twig_Template
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
        $__internal_7555fa23c25f59f5881e460c178655fc6051eb26cbeb8d82a0d3489ad640b76e = $this->env->getExtension("native_profiler");
        $__internal_7555fa23c25f59f5881e460c178655fc6051eb26cbeb8d82a0d3489ad640b76e->enter($__internal_7555fa23c25f59f5881e460c178655fc6051eb26cbeb8d82a0d3489ad640b76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7555fa23c25f59f5881e460c178655fc6051eb26cbeb8d82a0d3489ad640b76e->leave($__internal_7555fa23c25f59f5881e460c178655fc6051eb26cbeb8d82a0d3489ad640b76e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
