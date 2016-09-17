<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1d32faba8bcfe0d50044da84c5d8a11f46b76488ed75fdea57c18c9039934b8e extends Twig_Template
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
        $__internal_be7169655dfb9615bcc78cf0c0a4b7a9a3209e37494ca24a1ac619fe2c65e41c = $this->env->getExtension("native_profiler");
        $__internal_be7169655dfb9615bcc78cf0c0a4b7a9a3209e37494ca24a1ac619fe2c65e41c->enter($__internal_be7169655dfb9615bcc78cf0c0a4b7a9a3209e37494ca24a1ac619fe2c65e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_be7169655dfb9615bcc78cf0c0a4b7a9a3209e37494ca24a1ac619fe2c65e41c->leave($__internal_be7169655dfb9615bcc78cf0c0a4b7a9a3209e37494ca24a1ac619fe2c65e41c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
