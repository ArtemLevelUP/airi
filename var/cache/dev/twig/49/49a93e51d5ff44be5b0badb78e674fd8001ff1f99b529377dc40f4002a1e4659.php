<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_652fd24ceca3b1637abdaffbabc4f97c98baaa39e28037a7c6212dccc20c4749 extends Twig_Template
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
        $__internal_d5817d5255f2ef3360ff56579217b11b95ee5632caf6a7e32dc831e5fdd6c73a = $this->env->getExtension("native_profiler");
        $__internal_d5817d5255f2ef3360ff56579217b11b95ee5632caf6a7e32dc831e5fdd6c73a->enter($__internal_d5817d5255f2ef3360ff56579217b11b95ee5632caf6a7e32dc831e5fdd6c73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d5817d5255f2ef3360ff56579217b11b95ee5632caf6a7e32dc831e5fdd6c73a->leave($__internal_d5817d5255f2ef3360ff56579217b11b95ee5632caf6a7e32dc831e5fdd6c73a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
