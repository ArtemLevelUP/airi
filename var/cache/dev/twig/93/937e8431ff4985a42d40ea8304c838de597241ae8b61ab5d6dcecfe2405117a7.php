<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5a80af3e1b24f91ad3dc8fa820f047acdbcd8a8549fad0eae42ce6f5ef77bce0 extends Twig_Template
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
        $__internal_83ab4f9b8c0eff02c1a14f879ec53fd8c5113e65e7994c67b402c4eac3405423 = $this->env->getExtension("native_profiler");
        $__internal_83ab4f9b8c0eff02c1a14f879ec53fd8c5113e65e7994c67b402c4eac3405423->enter($__internal_83ab4f9b8c0eff02c1a14f879ec53fd8c5113e65e7994c67b402c4eac3405423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_83ab4f9b8c0eff02c1a14f879ec53fd8c5113e65e7994c67b402c4eac3405423->leave($__internal_83ab4f9b8c0eff02c1a14f879ec53fd8c5113e65e7994c67b402c4eac3405423_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
