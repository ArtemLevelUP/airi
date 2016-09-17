<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4d34e14d46307d2abc53a665a4a6aa2f0ccf2ad4c6704781fb72e177394345e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4d4bad8bd4c25299928f055d795e46642544e1ffbe86c7b953d2870b25c554a4 = $this->env->getExtension("native_profiler");
        $__internal_4d4bad8bd4c25299928f055d795e46642544e1ffbe86c7b953d2870b25c554a4->enter($__internal_4d4bad8bd4c25299928f055d795e46642544e1ffbe86c7b953d2870b25c554a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d4bad8bd4c25299928f055d795e46642544e1ffbe86c7b953d2870b25c554a4->leave($__internal_4d4bad8bd4c25299928f055d795e46642544e1ffbe86c7b953d2870b25c554a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5a9230c6370eca9fce37560ff9c3f1e118c344b40ba81f1c3ead41caa33344f = $this->env->getExtension("native_profiler");
        $__internal_f5a9230c6370eca9fce37560ff9c3f1e118c344b40ba81f1c3ead41caa33344f->enter($__internal_f5a9230c6370eca9fce37560ff9c3f1e118c344b40ba81f1c3ead41caa33344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5a9230c6370eca9fce37560ff9c3f1e118c344b40ba81f1c3ead41caa33344f->leave($__internal_f5a9230c6370eca9fce37560ff9c3f1e118c344b40ba81f1c3ead41caa33344f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e781acc9be466b4f92f1a753583b0d30fef700582d9bdb649308003784eeefb7 = $this->env->getExtension("native_profiler");
        $__internal_e781acc9be466b4f92f1a753583b0d30fef700582d9bdb649308003784eeefb7->enter($__internal_e781acc9be466b4f92f1a753583b0d30fef700582d9bdb649308003784eeefb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e781acc9be466b4f92f1a753583b0d30fef700582d9bdb649308003784eeefb7->leave($__internal_e781acc9be466b4f92f1a753583b0d30fef700582d9bdb649308003784eeefb7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d313532736bad82f237c2900618534c1ea53b86dffedc7953b99c89f510f9d0 = $this->env->getExtension("native_profiler");
        $__internal_5d313532736bad82f237c2900618534c1ea53b86dffedc7953b99c89f510f9d0->enter($__internal_5d313532736bad82f237c2900618534c1ea53b86dffedc7953b99c89f510f9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5d313532736bad82f237c2900618534c1ea53b86dffedc7953b99c89f510f9d0->leave($__internal_5d313532736bad82f237c2900618534c1ea53b86dffedc7953b99c89f510f9d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
