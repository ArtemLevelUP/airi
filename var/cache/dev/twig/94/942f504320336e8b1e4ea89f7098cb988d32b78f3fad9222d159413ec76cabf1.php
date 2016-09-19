<?php

/* base.html.twig */
class __TwigTemplate_0530896fea297f55af3851e232e44e1686546a3c0fd2c386f08fbec7924ab7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a54cc0ee7a7d892fea12a53e185c6515ca85a2c76f92816066c4d864b5eb2e1a = $this->env->getExtension("native_profiler");
        $__internal_a54cc0ee7a7d892fea12a53e185c6515ca85a2c76f92816066c4d864b5eb2e1a->enter($__internal_a54cc0ee7a7d892fea12a53e185c6515ca85a2c76f92816066c4d864b5eb2e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fddb9b6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6_0") : $this->env->getExtension('asset')->getAssetUrl("css/fddb9b6_part_1.css");
            // line 8
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "fddb9b6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fddb9b6") : $this->env->getExtension('asset')->getAssetUrl("css/fddb9b6.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a56fa94_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_0") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_1.js");
            // line 12
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "a56fa94_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94_1") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94_part_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a56fa94"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a56fa94") : $this->env->getExtension('asset')->getAssetUrl("js/a56fa94.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "
        ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f6c26a8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6c26a8_0") : $this->env->getExtension('asset')->getAssetUrl("css/f6c26a8_part_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        } else {
            // asset "f6c26a8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6c26a8") : $this->env->getExtension('asset')->getAssetUrl("css/f6c26a8.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
        ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a76c4f8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a76c4f8_0") : $this->env->getExtension('asset')->getAssetUrl("js/a76c4f8_part_1.js");
            // line 19
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "a76c4f8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a76c4f8") : $this->env->getExtension('asset')->getAssetUrl("js/a76c4f8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
            <a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("user_logout");
            echo "\">
                Выйти
            </a>
        ";
        } else {
            // line 31
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("user_login");
            echo "\">Войти</a>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_a54cc0ee7a7d892fea12a53e185c6515ca85a2c76f92816066c4d864b5eb2e1a->leave($__internal_a54cc0ee7a7d892fea12a53e185c6515ca85a2c76f92816066c4d864b5eb2e1a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3f4f2970d281047692800fcaed613ecedce7d8ea6b29a4c738612e4b30e363a = $this->env->getExtension("native_profiler");
        $__internal_f3f4f2970d281047692800fcaed613ecedce7d8ea6b29a4c738612e4b30e363a->enter($__internal_f3f4f2970d281047692800fcaed613ecedce7d8ea6b29a4c738612e4b30e363a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3f4f2970d281047692800fcaed613ecedce7d8ea6b29a4c738612e4b30e363a->leave($__internal_f3f4f2970d281047692800fcaed613ecedce7d8ea6b29a4c738612e4b30e363a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71dfb3e3a44eb6605c1f12d38cb35c5c09a2cf51611f3836b8a777694a46a70a = $this->env->getExtension("native_profiler");
        $__internal_71dfb3e3a44eb6605c1f12d38cb35c5c09a2cf51611f3836b8a777694a46a70a->enter($__internal_71dfb3e3a44eb6605c1f12d38cb35c5c09a2cf51611f3836b8a777694a46a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_71dfb3e3a44eb6605c1f12d38cb35c5c09a2cf51611f3836b8a777694a46a70a->leave($__internal_71dfb3e3a44eb6605c1f12d38cb35c5c09a2cf51611f3836b8a777694a46a70a_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_6667f0acf75bad0585fdb9c8b0902809b04e34bdc95bf61a74c81b3a8d15e518 = $this->env->getExtension("native_profiler");
        $__internal_6667f0acf75bad0585fdb9c8b0902809b04e34bdc95bf61a74c81b3a8d15e518->enter($__internal_6667f0acf75bad0585fdb9c8b0902809b04e34bdc95bf61a74c81b3a8d15e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6667f0acf75bad0585fdb9c8b0902809b04e34bdc95bf61a74c81b3a8d15e518->leave($__internal_6667f0acf75bad0585fdb9c8b0902809b04e34bdc95bf61a74c81b3a8d15e518_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e31d99f2a39c69fed762bae507e249d80be3e261e3197b25e201ef12e8e3c84e = $this->env->getExtension("native_profiler");
        $__internal_e31d99f2a39c69fed762bae507e249d80be3e261e3197b25e201ef12e8e3c84e->enter($__internal_e31d99f2a39c69fed762bae507e249d80be3e261e3197b25e201ef12e8e3c84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e31d99f2a39c69fed762bae507e249d80be3e261e3197b25e201ef12e8e3c84e->leave($__internal_e31d99f2a39c69fed762bae507e249d80be3e261e3197b25e201ef12e8e3c84e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 35,  195 => 34,  184 => 6,  172 => 5,  163 => 36,  160 => 35,  158 => 34,  155 => 33,  149 => 31,  142 => 27,  137 => 26,  135 => 25,  129 => 22,  126 => 21,  112 => 19,  107 => 18,  93 => 16,  89 => 15,  86 => 14,  66 => 12,  62 => 11,  57 => 10,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         {% stylesheets '@bootstrap_css' %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         {% javascripts '@jquery' '@bootstrap_js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         {% stylesheets '@bootstrap_datetimepicker_css' %}*/
/*         <link rel="stylesheet" type="text/css" media="screen" href="{{ asset_url }}"/>*/
/*         {% endstylesheets %}*/
/*         {% javascripts '@bootstrap_datetimepicker_js' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ app.user.username }} |*/
/*             <a href="{{ path('user_logout') }}">*/
/*                 Выйти*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('user_login') }}">Войти</a>*/
/*         {% endif %}*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
