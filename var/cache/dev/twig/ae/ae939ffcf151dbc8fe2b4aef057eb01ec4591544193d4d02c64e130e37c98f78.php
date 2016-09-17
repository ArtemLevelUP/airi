<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5c41909e38f2998ba4805998e3b823e5216e47310ded8d8f46a2b1854db19498 extends Twig_Template
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
        $__internal_fb36edca958954922780ee1264c3b8924d024c93e9a8f70cfbdcaa0ff766901b = $this->env->getExtension("native_profiler");
        $__internal_fb36edca958954922780ee1264c3b8924d024c93e9a8f70cfbdcaa0ff766901b->enter($__internal_fb36edca958954922780ee1264c3b8924d024c93e9a8f70cfbdcaa0ff766901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fb36edca958954922780ee1264c3b8924d024c93e9a8f70cfbdcaa0ff766901b->leave($__internal_fb36edca958954922780ee1264c3b8924d024c93e9a8f70cfbdcaa0ff766901b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
