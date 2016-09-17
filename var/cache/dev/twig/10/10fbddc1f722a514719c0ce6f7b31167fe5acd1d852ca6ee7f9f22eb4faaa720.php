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
        $__internal_471ffd37c2743369b0be242110bbdd0fa0903c6b59d45629e7082fce0a90e7d7 = $this->env->getExtension("native_profiler");
        $__internal_471ffd37c2743369b0be242110bbdd0fa0903c6b59d45629e7082fce0a90e7d7->enter($__internal_471ffd37c2743369b0be242110bbdd0fa0903c6b59d45629e7082fce0a90e7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471ffd37c2743369b0be242110bbdd0fa0903c6b59d45629e7082fce0a90e7d7->leave($__internal_471ffd37c2743369b0be242110bbdd0fa0903c6b59d45629e7082fce0a90e7d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_567e75bd2af1f7637c0f34b2592a01d843db00e43530ef1675a83cc2cf7e7bba = $this->env->getExtension("native_profiler");
        $__internal_567e75bd2af1f7637c0f34b2592a01d843db00e43530ef1675a83cc2cf7e7bba->enter($__internal_567e75bd2af1f7637c0f34b2592a01d843db00e43530ef1675a83cc2cf7e7bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_567e75bd2af1f7637c0f34b2592a01d843db00e43530ef1675a83cc2cf7e7bba->leave($__internal_567e75bd2af1f7637c0f34b2592a01d843db00e43530ef1675a83cc2cf7e7bba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_870a3002e0dae04cf98c89ce261ade2ec3b4cd7f2e3a04f6999a9e04ebfa226f = $this->env->getExtension("native_profiler");
        $__internal_870a3002e0dae04cf98c89ce261ade2ec3b4cd7f2e3a04f6999a9e04ebfa226f->enter($__internal_870a3002e0dae04cf98c89ce261ade2ec3b4cd7f2e3a04f6999a9e04ebfa226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_870a3002e0dae04cf98c89ce261ade2ec3b4cd7f2e3a04f6999a9e04ebfa226f->leave($__internal_870a3002e0dae04cf98c89ce261ade2ec3b4cd7f2e3a04f6999a9e04ebfa226f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c99241d007bcc9bb6bd3e5e2f95f184dc7f2eeb33a397c5a3d4567b5857dc50c = $this->env->getExtension("native_profiler");
        $__internal_c99241d007bcc9bb6bd3e5e2f95f184dc7f2eeb33a397c5a3d4567b5857dc50c->enter($__internal_c99241d007bcc9bb6bd3e5e2f95f184dc7f2eeb33a397c5a3d4567b5857dc50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c99241d007bcc9bb6bd3e5e2f95f184dc7f2eeb33a397c5a3d4567b5857dc50c->leave($__internal_c99241d007bcc9bb6bd3e5e2f95f184dc7f2eeb33a397c5a3d4567b5857dc50c_prof);

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
