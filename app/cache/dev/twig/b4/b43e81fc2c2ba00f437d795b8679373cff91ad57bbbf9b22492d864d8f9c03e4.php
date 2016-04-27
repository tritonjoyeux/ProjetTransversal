<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_46e3bd26d08ae4def532cf310af5670aa3a5ef68b21c186b8c4e58e21c68261e extends Twig_Template
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
        $__internal_5d8e6bcab1720f29333ff4f18269c5e5cdcae2cba07a2604b1c8ad4f21bd5fb2 = $this->env->getExtension("native_profiler");
        $__internal_5d8e6bcab1720f29333ff4f18269c5e5cdcae2cba07a2604b1c8ad4f21bd5fb2->enter($__internal_5d8e6bcab1720f29333ff4f18269c5e5cdcae2cba07a2604b1c8ad4f21bd5fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5d8e6bcab1720f29333ff4f18269c5e5cdcae2cba07a2604b1c8ad4f21bd5fb2->leave($__internal_5d8e6bcab1720f29333ff4f18269c5e5cdcae2cba07a2604b1c8ad4f21bd5fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
