<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cfd6b42e4a61f64f801ac750cbe68227f05be19479115bd6043afec88e0281a8 extends Twig_Template
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
        $__internal_b715a9821f1c2c3891b403c8e5a20083066d39d46d821a69bf7b17aef09cf12b = $this->env->getExtension("native_profiler");
        $__internal_b715a9821f1c2c3891b403c8e5a20083066d39d46d821a69bf7b17aef09cf12b->enter($__internal_b715a9821f1c2c3891b403c8e5a20083066d39d46d821a69bf7b17aef09cf12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b715a9821f1c2c3891b403c8e5a20083066d39d46d821a69bf7b17aef09cf12b->leave($__internal_b715a9821f1c2c3891b403c8e5a20083066d39d46d821a69bf7b17aef09cf12b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
