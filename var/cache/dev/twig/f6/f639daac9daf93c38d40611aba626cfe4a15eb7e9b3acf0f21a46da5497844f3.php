<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_44046a79abba068f7ca9485e12bae1e7e2f7301952f0bc321d8eb5bcfd7b952a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_81fb721afab85cddaa08205036b14fae1e92cf63455048af889ee65f8c359747 = $this->env->getExtension("native_profiler");
        $__internal_81fb721afab85cddaa08205036b14fae1e92cf63455048af889ee65f8c359747->enter($__internal_81fb721afab85cddaa08205036b14fae1e92cf63455048af889ee65f8c359747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fb721afab85cddaa08205036b14fae1e92cf63455048af889ee65f8c359747->leave($__internal_81fb721afab85cddaa08205036b14fae1e92cf63455048af889ee65f8c359747_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4036501dda33bc660acff1510c931d9bac255bd51ad6f8781a355a9a740dd5f6 = $this->env->getExtension("native_profiler");
        $__internal_4036501dda33bc660acff1510c931d9bac255bd51ad6f8781a355a9a740dd5f6->enter($__internal_4036501dda33bc660acff1510c931d9bac255bd51ad6f8781a355a9a740dd5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4036501dda33bc660acff1510c931d9bac255bd51ad6f8781a355a9a740dd5f6->leave($__internal_4036501dda33bc660acff1510c931d9bac255bd51ad6f8781a355a9a740dd5f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
