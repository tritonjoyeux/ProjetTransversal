<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_aca847b0896163d691f7f839b2d230ed2c51f5e89cb966b400b56466d68853e0 extends Twig_Template
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
        $__internal_a39921ceadd8babed4ace0d9e19b094cfa3ab8058812e1b1062b3f3b61a3219c = $this->env->getExtension("native_profiler");
        $__internal_a39921ceadd8babed4ace0d9e19b094cfa3ab8058812e1b1062b3f3b61a3219c->enter($__internal_a39921ceadd8babed4ace0d9e19b094cfa3ab8058812e1b1062b3f3b61a3219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a39921ceadd8babed4ace0d9e19b094cfa3ab8058812e1b1062b3f3b61a3219c->leave($__internal_a39921ceadd8babed4ace0d9e19b094cfa3ab8058812e1b1062b3f3b61a3219c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
