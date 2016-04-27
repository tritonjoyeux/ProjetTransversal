<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_26505e388bc20d2a330f343b18311ae02f7e2642a3d282c8f077b0bfc1a4af0e extends Twig_Template
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
        $__internal_27d661e1f404a121e3734c3ace54155d09c896519e123e16025cb4c06f854ba4 = $this->env->getExtension("native_profiler");
        $__internal_27d661e1f404a121e3734c3ace54155d09c896519e123e16025cb4c06f854ba4->enter($__internal_27d661e1f404a121e3734c3ace54155d09c896519e123e16025cb4c06f854ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_27d661e1f404a121e3734c3ace54155d09c896519e123e16025cb4c06f854ba4->leave($__internal_27d661e1f404a121e3734c3ace54155d09c896519e123e16025cb4c06f854ba4_prof);

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
