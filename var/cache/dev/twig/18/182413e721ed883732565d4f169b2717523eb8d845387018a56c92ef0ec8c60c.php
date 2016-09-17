<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bed2d20aed4985d6e730e47be21a9bbfb18db6830397798072fdcfe79e08fd48 extends Twig_Template
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
        $__internal_e896fe9c1cf3cc579b521eeeab8e770142daa6dff08d093a69f91f6931b32fde = $this->env->getExtension("native_profiler");
        $__internal_e896fe9c1cf3cc579b521eeeab8e770142daa6dff08d093a69f91f6931b32fde->enter($__internal_e896fe9c1cf3cc579b521eeeab8e770142daa6dff08d093a69f91f6931b32fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e896fe9c1cf3cc579b521eeeab8e770142daa6dff08d093a69f91f6931b32fde->leave($__internal_e896fe9c1cf3cc579b521eeeab8e770142daa6dff08d093a69f91f6931b32fde_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
