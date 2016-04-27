<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f8f167383edbb46a4a327fbd27445c86c77a4d3797eb2ef6f9b82abb24c6f4de extends Twig_Template
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
        $__internal_635170b437ab4ce83c4bf95163de6dd052eb0c2184b472a26f52506060de7951 = $this->env->getExtension("native_profiler");
        $__internal_635170b437ab4ce83c4bf95163de6dd052eb0c2184b472a26f52506060de7951->enter($__internal_635170b437ab4ce83c4bf95163de6dd052eb0c2184b472a26f52506060de7951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_635170b437ab4ce83c4bf95163de6dd052eb0c2184b472a26f52506060de7951->leave($__internal_635170b437ab4ce83c4bf95163de6dd052eb0c2184b472a26f52506060de7951_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
