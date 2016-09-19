<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70066bf0c2d3100f22de78aa9ffe52d190e168559096a8c9f6468c03021dd369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9d89661c12b9b8bd9a70513dcfe410fe7282d8a62733f2757e814a19cb8cb879 = $this->env->getExtension("native_profiler");
        $__internal_9d89661c12b9b8bd9a70513dcfe410fe7282d8a62733f2757e814a19cb8cb879->enter($__internal_9d89661c12b9b8bd9a70513dcfe410fe7282d8a62733f2757e814a19cb8cb879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d89661c12b9b8bd9a70513dcfe410fe7282d8a62733f2757e814a19cb8cb879->leave($__internal_9d89661c12b9b8bd9a70513dcfe410fe7282d8a62733f2757e814a19cb8cb879_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba217c7b5734c6bdc218a298ebb5e18b5fe646eaf718292f84e4a8049daa1ff9 = $this->env->getExtension("native_profiler");
        $__internal_ba217c7b5734c6bdc218a298ebb5e18b5fe646eaf718292f84e4a8049daa1ff9->enter($__internal_ba217c7b5734c6bdc218a298ebb5e18b5fe646eaf718292f84e4a8049daa1ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba217c7b5734c6bdc218a298ebb5e18b5fe646eaf718292f84e4a8049daa1ff9->leave($__internal_ba217c7b5734c6bdc218a298ebb5e18b5fe646eaf718292f84e4a8049daa1ff9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87b3cd4cb3b92718aa1d7e333f77cf02da5de7c61325ea2a3f7b4f35f2e81dbe = $this->env->getExtension("native_profiler");
        $__internal_87b3cd4cb3b92718aa1d7e333f77cf02da5de7c61325ea2a3f7b4f35f2e81dbe->enter($__internal_87b3cd4cb3b92718aa1d7e333f77cf02da5de7c61325ea2a3f7b4f35f2e81dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87b3cd4cb3b92718aa1d7e333f77cf02da5de7c61325ea2a3f7b4f35f2e81dbe->leave($__internal_87b3cd4cb3b92718aa1d7e333f77cf02da5de7c61325ea2a3f7b4f35f2e81dbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f382e022f53be5d0eaef6239a0874fe2d6e3f2f02e4f2cc811d0690cbe4fd78 = $this->env->getExtension("native_profiler");
        $__internal_2f382e022f53be5d0eaef6239a0874fe2d6e3f2f02e4f2cc811d0690cbe4fd78->enter($__internal_2f382e022f53be5d0eaef6239a0874fe2d6e3f2f02e4f2cc811d0690cbe4fd78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f382e022f53be5d0eaef6239a0874fe2d6e3f2f02e4f2cc811d0690cbe4fd78->leave($__internal_2f382e022f53be5d0eaef6239a0874fe2d6e3f2f02e4f2cc811d0690cbe4fd78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
