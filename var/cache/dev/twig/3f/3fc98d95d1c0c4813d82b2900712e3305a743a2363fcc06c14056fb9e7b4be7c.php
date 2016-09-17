<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_953a543a1edad456448bf445141e9ac981a9f3113fb1e98df82d83b8403d7bc3 extends Twig_Template
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
        $__internal_d3fc6cae51a5c8492cfe37ce86602b76cb78a9c2f63fb656dcd1fd0118b354a8 = $this->env->getExtension("native_profiler");
        $__internal_d3fc6cae51a5c8492cfe37ce86602b76cb78a9c2f63fb656dcd1fd0118b354a8->enter($__internal_d3fc6cae51a5c8492cfe37ce86602b76cb78a9c2f63fb656dcd1fd0118b354a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d3fc6cae51a5c8492cfe37ce86602b76cb78a9c2f63fb656dcd1fd0118b354a8->leave($__internal_d3fc6cae51a5c8492cfe37ce86602b76cb78a9c2f63fb656dcd1fd0118b354a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
