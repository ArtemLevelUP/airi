<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e02474385604f553fbeedf4b76ea9eaa3186854ed04564d0cadbc5e23761fff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0635d34f1e4a2acbbb8c9e898823db1685ac2d1bc0fee3b2b85853d125ef146e = $this->env->getExtension("native_profiler");
        $__internal_0635d34f1e4a2acbbb8c9e898823db1685ac2d1bc0fee3b2b85853d125ef146e->enter($__internal_0635d34f1e4a2acbbb8c9e898823db1685ac2d1bc0fee3b2b85853d125ef146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0635d34f1e4a2acbbb8c9e898823db1685ac2d1bc0fee3b2b85853d125ef146e->leave($__internal_0635d34f1e4a2acbbb8c9e898823db1685ac2d1bc0fee3b2b85853d125ef146e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5dda532b0ac1b5659259fde41e3421e5c98e911bff1e2486aebc1e766d64fb9 = $this->env->getExtension("native_profiler");
        $__internal_f5dda532b0ac1b5659259fde41e3421e5c98e911bff1e2486aebc1e766d64fb9->enter($__internal_f5dda532b0ac1b5659259fde41e3421e5c98e911bff1e2486aebc1e766d64fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f5dda532b0ac1b5659259fde41e3421e5c98e911bff1e2486aebc1e766d64fb9->leave($__internal_f5dda532b0ac1b5659259fde41e3421e5c98e911bff1e2486aebc1e766d64fb9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4648df69aa6b0ad23fd36f3dc56756ddf88e2fac5c9f009626e144af7d3680 = $this->env->getExtension("native_profiler");
        $__internal_1f4648df69aa6b0ad23fd36f3dc56756ddf88e2fac5c9f009626e144af7d3680->enter($__internal_1f4648df69aa6b0ad23fd36f3dc56756ddf88e2fac5c9f009626e144af7d3680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1f4648df69aa6b0ad23fd36f3dc56756ddf88e2fac5c9f009626e144af7d3680->leave($__internal_1f4648df69aa6b0ad23fd36f3dc56756ddf88e2fac5c9f009626e144af7d3680_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
