<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9b60272425e91b4a868ab616038cf8fcf6ad41910d43a30957bb3910088490e8 extends Twig_Template
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
        $__internal_5b19666bf24b24681b8e02d93e23549fbe961ca0be84fe24e4cf69c363204e19 = $this->env->getExtension("native_profiler");
        $__internal_5b19666bf24b24681b8e02d93e23549fbe961ca0be84fe24e4cf69c363204e19->enter($__internal_5b19666bf24b24681b8e02d93e23549fbe961ca0be84fe24e4cf69c363204e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5b19666bf24b24681b8e02d93e23549fbe961ca0be84fe24e4cf69c363204e19->leave($__internal_5b19666bf24b24681b8e02d93e23549fbe961ca0be84fe24e4cf69c363204e19_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
