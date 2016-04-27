<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20238f6c4b5e509051f9d3ef96c33d9e0ea721559266a3045e0e67a92c138aad extends Twig_Template
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
        $__internal_6be1ea7e44dcc67de1823d45cf0cb494e1d889287c48e4aa1e9befa2f4f7b846 = $this->env->getExtension("native_profiler");
        $__internal_6be1ea7e44dcc67de1823d45cf0cb494e1d889287c48e4aa1e9befa2f4f7b846->enter($__internal_6be1ea7e44dcc67de1823d45cf0cb494e1d889287c48e4aa1e9befa2f4f7b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6be1ea7e44dcc67de1823d45cf0cb494e1d889287c48e4aa1e9befa2f4f7b846->leave($__internal_6be1ea7e44dcc67de1823d45cf0cb494e1d889287c48e4aa1e9befa2f4f7b846_prof);

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
