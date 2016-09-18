<?php

/* AppBundle:Tasks:list.html.twig */
class __TwigTemplate_1354429af448ae1b4f2cc5bf38c67cfab11f1a70fe4c29736d0ad3ab524ec23a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Tasks:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a4eb1727b7a35d751d84a3502b77bf74baf02ffcf107bfd83e68970ea6e97e6 = $this->env->getExtension("native_profiler");
        $__internal_9a4eb1727b7a35d751d84a3502b77bf74baf02ffcf107bfd83e68970ea6e97e6->enter($__internal_9a4eb1727b7a35d751d84a3502b77bf74baf02ffcf107bfd83e68970ea6e97e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Tasks:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a4eb1727b7a35d751d84a3502b77bf74baf02ffcf107bfd83e68970ea6e97e6->leave($__internal_9a4eb1727b7a35d751d84a3502b77bf74baf02ffcf107bfd83e68970ea6e97e6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08f0432c5d8ccb12f9dff0e9e0a82a7a5e729ed2cd5f8cda565085648faadf8 = $this->env->getExtension("native_profiler");
        $__internal_f08f0432c5d8ccb12f9dff0e9e0a82a7a5e729ed2cd5f8cda565085648faadf8->enter($__internal_f08f0432c5d8ccb12f9dff0e9e0a82a7a5e729ed2cd5f8cda565085648faadf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Title"), "html", null, true);
        echo "</h2>
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Caption"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Estimation"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Deadline"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Status"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Creator"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks.List.Performer"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "                <tr>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "getTitle", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "getEstimation", array(), "method"), "html", null, true);
            echo "ч</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "getDeadline", array(), "method"), "d.m.Y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("Tasks.Status." . $this->getAttribute($context["task"], "getStatus", array(), "method"))), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "getCreator", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "getPerformer", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_f08f0432c5d8ccb12f9dff0e9e0a82a7a5e729ed2cd5f8cda565085648faadf8->leave($__internal_f08f0432c5d8ccb12f9dff0e9e0a82a7a5e729ed2cd5f8cda565085648faadf8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Tasks:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  79 => 18,  75 => 17,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2>{{ 'Tasks.List.Title'|trans }}</h2>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{ 'Tasks.List.Caption'|trans }}</th>*/
/*                 <th>{{ 'Tasks.List.Estimation'|trans }}</th>*/
/*                 <th>{{ 'Tasks.List.Deadline'|trans }}</th>*/
/*                 <th>{{ 'Tasks.List.Status'|trans }}</th>*/
/*                 <th>{{ 'Tasks.List.Creator'|trans }}</th>*/
/*                 <th>{{ 'Tasks.List.Performer'|trans }}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for task in tasks %}*/
/*                 <tr>*/
/*                     <td>{{ task.getTitle() }}</td>*/
/*                     <td>{{ task.getEstimation() }}ч</td>*/
/*                     <td>{{ task.getDeadline()|date('d.m.Y H:i') }}</td>*/
/*                     <td>{{ ('Tasks.Status.' ~ task.getStatus())|trans }}</td>*/
/*                     <td>{{ task.getCreator().getUsername() }}</td>*/
/*                     <td>{{ task.getPerformer().getUsername() }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
