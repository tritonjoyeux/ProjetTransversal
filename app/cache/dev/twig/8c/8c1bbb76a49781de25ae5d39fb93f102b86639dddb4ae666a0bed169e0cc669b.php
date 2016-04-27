<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e61075d37bdf5903375a5e4a423026d38b3e113173495485fbace09190df269e extends Twig_Template
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
        $__internal_bc88832084fc1d5c235c5e39c849a9e2f7eb02ff56bf91379363f56ffc50db81 = $this->env->getExtension("native_profiler");
        $__internal_bc88832084fc1d5c235c5e39c849a9e2f7eb02ff56bf91379363f56ffc50db81->enter($__internal_bc88832084fc1d5c235c5e39c849a9e2f7eb02ff56bf91379363f56ffc50db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bc88832084fc1d5c235c5e39c849a9e2f7eb02ff56bf91379363f56ffc50db81->leave($__internal_bc88832084fc1d5c235c5e39c849a9e2f7eb02ff56bf91379363f56ffc50db81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
