<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9ce375445e17f6382d2a624b3e5d22d73c1ba7ed073d99b0e47bae7373790d9b extends Twig_Template
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
        $__internal_393d0ac1ed80a4ef36c04a8de424c58cfd4b0b458c6a182a75bf335eb4b60c88 = $this->env->getExtension("native_profiler");
        $__internal_393d0ac1ed80a4ef36c04a8de424c58cfd4b0b458c6a182a75bf335eb4b60c88->enter($__internal_393d0ac1ed80a4ef36c04a8de424c58cfd4b0b458c6a182a75bf335eb4b60c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_393d0ac1ed80a4ef36c04a8de424c58cfd4b0b458c6a182a75bf335eb4b60c88->leave($__internal_393d0ac1ed80a4ef36c04a8de424c58cfd4b0b458c6a182a75bf335eb4b60c88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
