<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_12274203b3cb44c09c7e9121fc5ce6bee6b93740169380482ec9ff2b77438cb7 extends Twig_Template
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
        $__internal_284b5d08a533b1ca251738386f0d10c008c5aa220d507dd211ba179589eb7c94 = $this->env->getExtension("native_profiler");
        $__internal_284b5d08a533b1ca251738386f0d10c008c5aa220d507dd211ba179589eb7c94->enter($__internal_284b5d08a533b1ca251738386f0d10c008c5aa220d507dd211ba179589eb7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_284b5d08a533b1ca251738386f0d10c008c5aa220d507dd211ba179589eb7c94->leave($__internal_284b5d08a533b1ca251738386f0d10c008c5aa220d507dd211ba179589eb7c94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
