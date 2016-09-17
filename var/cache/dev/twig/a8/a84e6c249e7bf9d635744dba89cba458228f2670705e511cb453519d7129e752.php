<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_9d6679c8cb6b0e6ca14faf62fbd3225c1b1b21a523b5a53aa093ba94272fedb6 extends Twig_Template
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
        $__internal_a9f150a3ed593960f2c264fd545f71246572100d9e7e43e77ed858a3d3aadeeb = $this->env->getExtension("native_profiler");
        $__internal_a9f150a3ed593960f2c264fd545f71246572100d9e7e43e77ed858a3d3aadeeb->enter($__internal_a9f150a3ed593960f2c264fd545f71246572100d9e7e43e77ed858a3d3aadeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a9f150a3ed593960f2c264fd545f71246572100d9e7e43e77ed858a3d3aadeeb->leave($__internal_a9f150a3ed593960f2c264fd545f71246572100d9e7e43e77ed858a3d3aadeeb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
