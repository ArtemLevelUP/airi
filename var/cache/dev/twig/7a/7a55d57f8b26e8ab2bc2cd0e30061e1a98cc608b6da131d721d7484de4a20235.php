<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3207af4a7370d24ba62589c10a73193967bafc691509826a750dde4202958724 extends Twig_Template
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
        $__internal_1e538918fc8970bc8c62afe637824bea4f7d93331a1104d26b904d8ec1a4e56e = $this->env->getExtension("native_profiler");
        $__internal_1e538918fc8970bc8c62afe637824bea4f7d93331a1104d26b904d8ec1a4e56e->enter($__internal_1e538918fc8970bc8c62afe637824bea4f7d93331a1104d26b904d8ec1a4e56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1e538918fc8970bc8c62afe637824bea4f7d93331a1104d26b904d8ec1a4e56e->leave($__internal_1e538918fc8970bc8c62afe637824bea4f7d93331a1104d26b904d8ec1a4e56e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
