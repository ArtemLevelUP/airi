<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_b4cdf8f7ffec6fe0663047ca019575755ed46dbe9bb599836e9acba06714740a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_872989f313d77124f3b1f32781f171293fcf81a9f984d3b70cb8c60ebc76e3af = $this->env->getExtension("native_profiler");
        $__internal_872989f313d77124f3b1f32781f171293fcf81a9f984d3b70cb8c60ebc76e3af->enter($__internal_872989f313d77124f3b1f32781f171293fcf81a9f984d3b70cb8c60ebc76e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_872989f313d77124f3b1f32781f171293fcf81a9f984d3b70cb8c60ebc76e3af->leave($__internal_872989f313d77124f3b1f32781f171293fcf81a9f984d3b70cb8c60ebc76e3af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6dc7577df08a39f0b20dafc96bf2f50000703a56720e0aade64662773e18bf1 = $this->env->getExtension("native_profiler");
        $__internal_c6dc7577df08a39f0b20dafc96bf2f50000703a56720e0aade64662773e18bf1->enter($__internal_c6dc7577df08a39f0b20dafc96bf2f50000703a56720e0aade64662773e18bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c6dc7577df08a39f0b20dafc96bf2f50000703a56720e0aade64662773e18bf1->leave($__internal_c6dc7577df08a39f0b20dafc96bf2f50000703a56720e0aade64662773e18bf1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
