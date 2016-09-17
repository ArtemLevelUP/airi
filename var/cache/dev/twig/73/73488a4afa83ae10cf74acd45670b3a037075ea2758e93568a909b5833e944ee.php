<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a60e24449263f09f00c020593629838df45aed5898d3603fe2522a9cd771ae26 extends Twig_Template
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
        $__internal_08f25e7c34f1fc9fbc297f21ed9e9b4053ec72ba2bd92cf273273ce7780aa0ca = $this->env->getExtension("native_profiler");
        $__internal_08f25e7c34f1fc9fbc297f21ed9e9b4053ec72ba2bd92cf273273ce7780aa0ca->enter($__internal_08f25e7c34f1fc9fbc297f21ed9e9b4053ec72ba2bd92cf273273ce7780aa0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_08f25e7c34f1fc9fbc297f21ed9e9b4053ec72ba2bd92cf273273ce7780aa0ca->leave($__internal_08f25e7c34f1fc9fbc297f21ed9e9b4053ec72ba2bd92cf273273ce7780aa0ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
