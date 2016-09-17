<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5b3cd4dd2b20d1233d15e8f8101eb2890fecfd98ae6731e3fd1d39c1cd924780 extends Twig_Template
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
        $__internal_2a63e2f8ee45a70cfb4771668913c2feac6f4909d0396983f05882b6dccb80e0 = $this->env->getExtension("native_profiler");
        $__internal_2a63e2f8ee45a70cfb4771668913c2feac6f4909d0396983f05882b6dccb80e0->enter($__internal_2a63e2f8ee45a70cfb4771668913c2feac6f4909d0396983f05882b6dccb80e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_2a63e2f8ee45a70cfb4771668913c2feac6f4909d0396983f05882b6dccb80e0->leave($__internal_2a63e2f8ee45a70cfb4771668913c2feac6f4909d0396983f05882b6dccb80e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
