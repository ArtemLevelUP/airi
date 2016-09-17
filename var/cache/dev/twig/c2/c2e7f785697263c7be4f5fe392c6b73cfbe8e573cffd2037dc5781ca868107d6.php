<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aef4a72ba22aab992473adbde4df5abb58527410d25f9df7dfe2edf7f827b178 extends Twig_Template
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
        $__internal_7f27768f9cb70754a8991d15e754dc5652acd0a2930df24b5a78dde12dcc7075 = $this->env->getExtension("native_profiler");
        $__internal_7f27768f9cb70754a8991d15e754dc5652acd0a2930df24b5a78dde12dcc7075->enter($__internal_7f27768f9cb70754a8991d15e754dc5652acd0a2930df24b5a78dde12dcc7075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7f27768f9cb70754a8991d15e754dc5652acd0a2930df24b5a78dde12dcc7075->leave($__internal_7f27768f9cb70754a8991d15e754dc5652acd0a2930df24b5a78dde12dcc7075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
