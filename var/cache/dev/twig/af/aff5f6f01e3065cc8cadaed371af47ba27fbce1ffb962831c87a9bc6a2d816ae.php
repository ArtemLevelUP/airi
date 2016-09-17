<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_46e9db2bb6e751999e67858eb8355acee18b1ba66838d5f4cba6cc2104ff762a extends Twig_Template
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
        $__internal_78418542d907e9be92e603b6c6d4b70a19d3629097384047955096e3c6579861 = $this->env->getExtension("native_profiler");
        $__internal_78418542d907e9be92e603b6c6d4b70a19d3629097384047955096e3c6579861->enter($__internal_78418542d907e9be92e603b6c6d4b70a19d3629097384047955096e3c6579861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78418542d907e9be92e603b6c6d4b70a19d3629097384047955096e3c6579861->leave($__internal_78418542d907e9be92e603b6c6d4b70a19d3629097384047955096e3c6579861_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
