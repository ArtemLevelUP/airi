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
        $__internal_50f9f18996a5bce809245c58e434d6d4a5d075a98f4d9ed7d70b22de87329fa5 = $this->env->getExtension("native_profiler");
        $__internal_50f9f18996a5bce809245c58e434d6d4a5d075a98f4d9ed7d70b22de87329fa5->enter($__internal_50f9f18996a5bce809245c58e434d6d4a5d075a98f4d9ed7d70b22de87329fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f9f18996a5bce809245c58e434d6d4a5d075a98f4d9ed7d70b22de87329fa5->leave($__internal_50f9f18996a5bce809245c58e434d6d4a5d075a98f4d9ed7d70b22de87329fa5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_daca3ea43df563332e9c3fbd89f28d0dac10125cbb2544f039d4d56c534ebf6a = $this->env->getExtension("native_profiler");
        $__internal_daca3ea43df563332e9c3fbd89f28d0dac10125cbb2544f039d4d56c534ebf6a->enter($__internal_daca3ea43df563332e9c3fbd89f28d0dac10125cbb2544f039d4d56c534ebf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_daca3ea43df563332e9c3fbd89f28d0dac10125cbb2544f039d4d56c534ebf6a->leave($__internal_daca3ea43df563332e9c3fbd89f28d0dac10125cbb2544f039d4d56c534ebf6a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01b9118dad567248358c5fcd8860a6b1e95111006c4efd0e5631f8fb1cac3acd = $this->env->getExtension("native_profiler");
        $__internal_01b9118dad567248358c5fcd8860a6b1e95111006c4efd0e5631f8fb1cac3acd->enter($__internal_01b9118dad567248358c5fcd8860a6b1e95111006c4efd0e5631f8fb1cac3acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01b9118dad567248358c5fcd8860a6b1e95111006c4efd0e5631f8fb1cac3acd->leave($__internal_01b9118dad567248358c5fcd8860a6b1e95111006c4efd0e5631f8fb1cac3acd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a8ab3865743c17e6686ffc4e38ea3c71d703a7129925c8947065f505df532ac = $this->env->getExtension("native_profiler");
        $__internal_6a8ab3865743c17e6686ffc4e38ea3c71d703a7129925c8947065f505df532ac->enter($__internal_6a8ab3865743c17e6686ffc4e38ea3c71d703a7129925c8947065f505df532ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a8ab3865743c17e6686ffc4e38ea3c71d703a7129925c8947065f505df532ac->leave($__internal_6a8ab3865743c17e6686ffc4e38ea3c71d703a7129925c8947065f505df532ac_prof);

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
