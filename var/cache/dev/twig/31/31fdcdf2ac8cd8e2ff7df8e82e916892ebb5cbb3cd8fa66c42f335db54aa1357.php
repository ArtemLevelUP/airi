<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a1996c347139e83605496f8995e75307bea0becf5863bad52f4478d7ef23a45d extends Twig_Template
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
        $__internal_a65b21229a5b2c0e412beaab37d8c9a6bb89e7e0c8a75ea44bf3f0b5f91134e2 = $this->env->getExtension("native_profiler");
        $__internal_a65b21229a5b2c0e412beaab37d8c9a6bb89e7e0c8a75ea44bf3f0b5f91134e2->enter($__internal_a65b21229a5b2c0e412beaab37d8c9a6bb89e7e0c8a75ea44bf3f0b5f91134e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a65b21229a5b2c0e412beaab37d8c9a6bb89e7e0c8a75ea44bf3f0b5f91134e2->leave($__internal_a65b21229a5b2c0e412beaab37d8c9a6bb89e7e0c8a75ea44bf3f0b5f91134e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
