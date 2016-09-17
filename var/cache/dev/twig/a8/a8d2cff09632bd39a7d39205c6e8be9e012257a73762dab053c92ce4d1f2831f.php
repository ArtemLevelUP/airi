<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6257aed6ea420725436d7ce380fd48f65c6b186e6bab8bb4e60d2d8c0d803d4a extends Twig_Template
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
        $__internal_71b50a95823541340ef6e46bde8eeb27f9bb9a8747fdcc24ab69787e83657dfd = $this->env->getExtension("native_profiler");
        $__internal_71b50a95823541340ef6e46bde8eeb27f9bb9a8747fdcc24ab69787e83657dfd->enter($__internal_71b50a95823541340ef6e46bde8eeb27f9bb9a8747fdcc24ab69787e83657dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_71b50a95823541340ef6e46bde8eeb27f9bb9a8747fdcc24ab69787e83657dfd->leave($__internal_71b50a95823541340ef6e46bde8eeb27f9bb9a8747fdcc24ab69787e83657dfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
