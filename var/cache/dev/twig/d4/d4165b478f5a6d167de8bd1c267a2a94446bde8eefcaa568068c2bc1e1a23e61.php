<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7fab96583675e517371bdc84abbb5ab72e502393018e58f91c406d8ec298c7ef extends Twig_Template
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
        $__internal_e5b0d1bb596b1636c47cad1ebe4c6f99d5039cef1e854eb783843f9affa42420 = $this->env->getExtension("native_profiler");
        $__internal_e5b0d1bb596b1636c47cad1ebe4c6f99d5039cef1e854eb783843f9affa42420->enter($__internal_e5b0d1bb596b1636c47cad1ebe4c6f99d5039cef1e854eb783843f9affa42420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e5b0d1bb596b1636c47cad1ebe4c6f99d5039cef1e854eb783843f9affa42420->leave($__internal_e5b0d1bb596b1636c47cad1ebe4c6f99d5039cef1e854eb783843f9affa42420_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
