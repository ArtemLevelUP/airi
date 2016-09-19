<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_43fea2fb54d0ea27c42dc3752005c2e52002a1d64ccd9503598006df15f176ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d65628f9b516b5459c08b49fd39c4ad8c9dda25540102e36cafba3fb44794f9d = $this->env->getExtension("native_profiler");
        $__internal_d65628f9b516b5459c08b49fd39c4ad8c9dda25540102e36cafba3fb44794f9d->enter($__internal_d65628f9b516b5459c08b49fd39c4ad8c9dda25540102e36cafba3fb44794f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d65628f9b516b5459c08b49fd39c4ad8c9dda25540102e36cafba3fb44794f9d->leave($__internal_d65628f9b516b5459c08b49fd39c4ad8c9dda25540102e36cafba3fb44794f9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_463e57e3ac5f7bcaa3c67b611270b82355be96833fe213a4857233ee1cc7b5bd = $this->env->getExtension("native_profiler");
        $__internal_463e57e3ac5f7bcaa3c67b611270b82355be96833fe213a4857233ee1cc7b5bd->enter($__internal_463e57e3ac5f7bcaa3c67b611270b82355be96833fe213a4857233ee1cc7b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_463e57e3ac5f7bcaa3c67b611270b82355be96833fe213a4857233ee1cc7b5bd->leave($__internal_463e57e3ac5f7bcaa3c67b611270b82355be96833fe213a4857233ee1cc7b5bd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_badf9561f9b0a0ca4f57331d7484978dd2c7bfa3b92ac4848b78e08ab34024ca = $this->env->getExtension("native_profiler");
        $__internal_badf9561f9b0a0ca4f57331d7484978dd2c7bfa3b92ac4848b78e08ab34024ca->enter($__internal_badf9561f9b0a0ca4f57331d7484978dd2c7bfa3b92ac4848b78e08ab34024ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_badf9561f9b0a0ca4f57331d7484978dd2c7bfa3b92ac4848b78e08ab34024ca->leave($__internal_badf9561f9b0a0ca4f57331d7484978dd2c7bfa3b92ac4848b78e08ab34024ca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07db1de5d3efb7b375098e420e8a5253cf9fc6f801aab7e926e025f67d7f1b40 = $this->env->getExtension("native_profiler");
        $__internal_07db1de5d3efb7b375098e420e8a5253cf9fc6f801aab7e926e025f67d7f1b40->enter($__internal_07db1de5d3efb7b375098e420e8a5253cf9fc6f801aab7e926e025f67d7f1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_07db1de5d3efb7b375098e420e8a5253cf9fc6f801aab7e926e025f67d7f1b40->leave($__internal_07db1de5d3efb7b375098e420e8a5253cf9fc6f801aab7e926e025f67d7f1b40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
