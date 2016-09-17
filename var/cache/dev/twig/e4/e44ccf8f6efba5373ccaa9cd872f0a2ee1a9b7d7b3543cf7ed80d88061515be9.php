<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_500ef807ceaad8915da94d81b4f1d6f04d65a55f1b9fb1ad5863a030e2ffa354 extends Twig_Template
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
        $__internal_66cf48f6c7fe48af7ebefbc7bb4240548139f417b2bb840bc8f8413539628f12 = $this->env->getExtension("native_profiler");
        $__internal_66cf48f6c7fe48af7ebefbc7bb4240548139f417b2bb840bc8f8413539628f12->enter($__internal_66cf48f6c7fe48af7ebefbc7bb4240548139f417b2bb840bc8f8413539628f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_66cf48f6c7fe48af7ebefbc7bb4240548139f417b2bb840bc8f8413539628f12->leave($__internal_66cf48f6c7fe48af7ebefbc7bb4240548139f417b2bb840bc8f8413539628f12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
