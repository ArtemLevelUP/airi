<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_4610127deb60a5db17086e5950279b6e57152bd83dd3ec41e5917f5edd78c0f7 extends Twig_Template
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
        $__internal_e3e89a3381c78719a69d7afc35d0c415fb04156a83a7d5d75c676b971b13c0a2 = $this->env->getExtension("native_profiler");
        $__internal_e3e89a3381c78719a69d7afc35d0c415fb04156a83a7d5d75c676b971b13c0a2->enter($__internal_e3e89a3381c78719a69d7afc35d0c415fb04156a83a7d5d75c676b971b13c0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e3e89a3381c78719a69d7afc35d0c415fb04156a83a7d5d75c676b971b13c0a2->leave($__internal_e3e89a3381c78719a69d7afc35d0c415fb04156a83a7d5d75c676b971b13c0a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
