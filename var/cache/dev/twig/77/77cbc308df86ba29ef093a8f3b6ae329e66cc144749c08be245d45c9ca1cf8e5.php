<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9da470b1bd67062bd3251e5d063ba7e36cd4d3e82ca73292b46f02716ca43866 extends Twig_Template
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
        $__internal_2c1b514c21182194d479854cdce704749f40478fbc0c1bde05aabf7e0668e910 = $this->env->getExtension("native_profiler");
        $__internal_2c1b514c21182194d479854cdce704749f40478fbc0c1bde05aabf7e0668e910->enter($__internal_2c1b514c21182194d479854cdce704749f40478fbc0c1bde05aabf7e0668e910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2c1b514c21182194d479854cdce704749f40478fbc0c1bde05aabf7e0668e910->leave($__internal_2c1b514c21182194d479854cdce704749f40478fbc0c1bde05aabf7e0668e910_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
