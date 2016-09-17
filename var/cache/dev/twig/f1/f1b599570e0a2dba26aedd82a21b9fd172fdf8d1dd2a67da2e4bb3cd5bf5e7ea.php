<?php

/* UserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_000a94bed5dbdba3b3596ed47e521b569759ddebfc84d69026efcae2b9dabfa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_e0b5c2d5705c3336b1a838f86a057699207175e103d12afe93b6a645358d7294 = $this->env->getExtension("native_profiler");
        $__internal_e0b5c2d5705c3336b1a838f86a057699207175e103d12afe93b6a645358d7294->enter($__internal_e0b5c2d5705c3336b1a838f86a057699207175e103d12afe93b6a645358d7294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b5c2d5705c3336b1a838f86a057699207175e103d12afe93b6a645358d7294->leave($__internal_e0b5c2d5705c3336b1a838f86a057699207175e103d12afe93b6a645358d7294_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_598757a68396ca90f622b6d7137f2a60beaa178d5ce1235b5c5710dc33fc9057 = $this->env->getExtension("native_profiler");
        $__internal_598757a68396ca90f622b6d7137f2a60beaa178d5ce1235b5c5710dc33fc9057->enter($__internal_598757a68396ca90f622b6d7137f2a60beaa178d5ce1235b5c5710dc33fc9057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_598757a68396ca90f622b6d7137f2a60beaa178d5ce1235b5c5710dc33fc9057->leave($__internal_598757a68396ca90f622b6d7137f2a60beaa178d5ce1235b5c5710dc33fc9057_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:check_email.html.twig";
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
