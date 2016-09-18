<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_f1a11e29181636688080fb1a321ae2e4b227ddb35ceff951dec47e8117900d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4855d7f92f9e2944c13df5cdf2af6aefa401725e6df8845b01b085691d1cd748 = $this->env->getExtension("native_profiler");
        $__internal_4855d7f92f9e2944c13df5cdf2af6aefa401725e6df8845b01b085691d1cd748->enter($__internal_4855d7f92f9e2944c13df5cdf2af6aefa401725e6df8845b01b085691d1cd748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4855d7f92f9e2944c13df5cdf2af6aefa401725e6df8845b01b085691d1cd748->leave($__internal_4855d7f92f9e2944c13df5cdf2af6aefa401725e6df8845b01b085691d1cd748_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17ff718a8b80a5775b39b9668c28bfc92b863da520137b4d3731f9e8dd522223 = $this->env->getExtension("native_profiler");
        $__internal_17ff718a8b80a5775b39b9668c28bfc92b863da520137b4d3731f9e8dd522223->enter($__internal_17ff718a8b80a5775b39b9668c28bfc92b863da520137b4d3731f9e8dd522223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "    </div>
";
        
        $__internal_17ff718a8b80a5775b39b9668c28bfc92b863da520137b4d3731f9e8dd522223->leave($__internal_17ff718a8b80a5775b39b9668c28bfc92b863da520137b4d3731f9e8dd522223_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58015a3ad0f4ba3ca1c5d9d1d7bf85b8f8266a21a2c4f0771538f6aa00ef7c4b = $this->env->getExtension("native_profiler");
        $__internal_58015a3ad0f4ba3ca1c5d9d1d7bf85b8f8266a21a2c4f0771538f6aa00ef7c4b->enter($__internal_58015a3ad0f4ba3ca1c5d9d1d7bf85b8f8266a21a2c4f0771538f6aa00ef7c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "        ";
        
        $__internal_58015a3ad0f4ba3ca1c5d9d1d7bf85b8f8266a21a2c4f0771538f6aa00ef7c4b->leave($__internal_58015a3ad0f4ba3ca1c5d9d1d7bf85b8f8266a21a2c4f0771538f6aa00ef7c4b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 15,  83 => 17,  81 => 15,  77 => 13,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  49 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             {% for message in messages %}*/
/*                 <div class="flash-{{ type }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {% endblock %}*/
