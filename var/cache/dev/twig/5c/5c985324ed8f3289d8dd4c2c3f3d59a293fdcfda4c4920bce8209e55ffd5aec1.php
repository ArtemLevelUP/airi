<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c0d3454d1bf2c55398dd4d8e420f197b94d68dcc8c0d69bea8668e630c8fc4d2 extends Twig_Template
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
        $__internal_63a239bbe3612dfa38742f0cadd2c5aab8c298b324b4ff964450f5165086dcb4 = $this->env->getExtension("native_profiler");
        $__internal_63a239bbe3612dfa38742f0cadd2c5aab8c298b324b4ff964450f5165086dcb4->enter($__internal_63a239bbe3612dfa38742f0cadd2c5aab8c298b324b4ff964450f5165086dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63a239bbe3612dfa38742f0cadd2c5aab8c298b324b4ff964450f5165086dcb4->leave($__internal_63a239bbe3612dfa38742f0cadd2c5aab8c298b324b4ff964450f5165086dcb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
