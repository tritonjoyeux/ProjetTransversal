<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_26d00264c26f4f456a9051a2ee013afffee0668f5990d1b7c9871d4e0d6938bf extends Twig_Template
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
        $__internal_83b41a888f74fb734dd763d045b93b890569b2d439f8dc773eb150ae25896cb0 = $this->env->getExtension("native_profiler");
        $__internal_83b41a888f74fb734dd763d045b93b890569b2d439f8dc773eb150ae25896cb0->enter($__internal_83b41a888f74fb734dd763d045b93b890569b2d439f8dc773eb150ae25896cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_83b41a888f74fb734dd763d045b93b890569b2d439f8dc773eb150ae25896cb0->leave($__internal_83b41a888f74fb734dd763d045b93b890569b2d439f8dc773eb150ae25896cb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
