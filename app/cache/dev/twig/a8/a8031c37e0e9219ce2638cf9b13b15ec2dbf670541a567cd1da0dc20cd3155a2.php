<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c13e3479672f54b8d91222a1405fcf429be3431184eb71dafd870d6ccf2c9414 extends Twig_Template
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
        $__internal_f03ce7b88cea674084222d2e246cde6ce69d006c90cb3d810bbbded7db24b8cc = $this->env->getExtension("native_profiler");
        $__internal_f03ce7b88cea674084222d2e246cde6ce69d006c90cb3d810bbbded7db24b8cc->enter($__internal_f03ce7b88cea674084222d2e246cde6ce69d006c90cb3d810bbbded7db24b8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f03ce7b88cea674084222d2e246cde6ce69d006c90cb3d810bbbded7db24b8cc->leave($__internal_f03ce7b88cea674084222d2e246cde6ce69d006c90cb3d810bbbded7db24b8cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
