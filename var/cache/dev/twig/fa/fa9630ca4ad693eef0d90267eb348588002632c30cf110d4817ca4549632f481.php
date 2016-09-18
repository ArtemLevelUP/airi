<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_b7e6ee81a91ba48becf113a6d4d69a53e9c0ffaf82649e5eddcd2037fda40ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("UserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a84ef56afba8dde78b5f9dd38a517204996e67bf5118cdfa1c513f055742cb8 = $this->env->getExtension("native_profiler");
        $__internal_8a84ef56afba8dde78b5f9dd38a517204996e67bf5118cdfa1c513f055742cb8->enter($__internal_8a84ef56afba8dde78b5f9dd38a517204996e67bf5118cdfa1c513f055742cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a84ef56afba8dde78b5f9dd38a517204996e67bf5118cdfa1c513f055742cb8->leave($__internal_8a84ef56afba8dde78b5f9dd38a517204996e67bf5118cdfa1c513f055742cb8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99b2aad50d254c6f3a2fc70c8917563575738d6bd8f918d386183fb36a3d22ad = $this->env->getExtension("native_profiler");
        $__internal_99b2aad50d254c6f3a2fc70c8917563575738d6bd8f918d386183fb36a3d22ad->enter($__internal_99b2aad50d254c6f3a2fc70c8917563575738d6bd8f918d386183fb36a3d22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "UserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_99b2aad50d254c6f3a2fc70c8917563575738d6bd8f918d386183fb36a3d22ad->leave($__internal_99b2aad50d254c6f3a2fc70c8917563575738d6bd8f918d386183fb36a3d22ad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "UserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('UserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
