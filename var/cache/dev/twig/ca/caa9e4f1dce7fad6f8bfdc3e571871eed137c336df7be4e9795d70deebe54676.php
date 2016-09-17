<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_32fe46813a2a8338d58e0cd8f23d1499041d086312af615a74eac85041d01dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78848aefa96d58fe3956790a60cf6406874992632c313989cac08c888985f996 = $this->env->getExtension("native_profiler");
        $__internal_78848aefa96d58fe3956790a60cf6406874992632c313989cac08c888985f996->enter($__internal_78848aefa96d58fe3956790a60cf6406874992632c313989cac08c888985f996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_78848aefa96d58fe3956790a60cf6406874992632c313989cac08c888985f996->leave($__internal_78848aefa96d58fe3956790a60cf6406874992632c313989cac08c888985f996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
