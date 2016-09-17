<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7082549b415fda4d2857cd68afc70cb8dbf712a9c867a67a5b05b150e1f2992e extends Twig_Template
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
        $__internal_08618251d5b601cf6ee8e05b5625518d68e2af8f5fe4a91d9c3ad458c468bed3 = $this->env->getExtension("native_profiler");
        $__internal_08618251d5b601cf6ee8e05b5625518d68e2af8f5fe4a91d9c3ad458c468bed3->enter($__internal_08618251d5b601cf6ee8e05b5625518d68e2af8f5fe4a91d9c3ad458c468bed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_08618251d5b601cf6ee8e05b5625518d68e2af8f5fe4a91d9c3ad458c468bed3->leave($__internal_08618251d5b601cf6ee8e05b5625518d68e2af8f5fe4a91d9c3ad458c468bed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
