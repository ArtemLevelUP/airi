<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8749a97d6be6e42ed5cdf75552eec79a1fe4d6e8ec00cb49b26e66561a741070 extends Twig_Template
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
        $__internal_ff53fdcf2df7c6f2a8e0c2ea3f7bfe873ac200e1702562c87ead0254f2d962df = $this->env->getExtension("native_profiler");
        $__internal_ff53fdcf2df7c6f2a8e0c2ea3f7bfe873ac200e1702562c87ead0254f2d962df->enter($__internal_ff53fdcf2df7c6f2a8e0c2ea3f7bfe873ac200e1702562c87ead0254f2d962df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ff53fdcf2df7c6f2a8e0c2ea3f7bfe873ac200e1702562c87ead0254f2d962df->leave($__internal_ff53fdcf2df7c6f2a8e0c2ea3f7bfe873ac200e1702562c87ead0254f2d962df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
