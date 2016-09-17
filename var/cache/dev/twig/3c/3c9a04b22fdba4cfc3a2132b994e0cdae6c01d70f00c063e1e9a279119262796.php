<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_89b55b404f0e0be5a38edef052956766481123e44f1a8e23fae87c12db00684d extends Twig_Template
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
        $__internal_4bb59aa7d87499718114fa7817b5050920c7d0e769c5a01042d414decd39aaf5 = $this->env->getExtension("native_profiler");
        $__internal_4bb59aa7d87499718114fa7817b5050920c7d0e769c5a01042d414decd39aaf5->enter($__internal_4bb59aa7d87499718114fa7817b5050920c7d0e769c5a01042d414decd39aaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4bb59aa7d87499718114fa7817b5050920c7d0e769c5a01042d414decd39aaf5->leave($__internal_4bb59aa7d87499718114fa7817b5050920c7d0e769c5a01042d414decd39aaf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
