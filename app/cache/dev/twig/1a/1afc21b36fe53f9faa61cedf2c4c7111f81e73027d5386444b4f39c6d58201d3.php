<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_53a05e49879b22df5165f5e8c56ca01df3a71b45df9d9f1ed9887bb8cea6540e extends Twig_Template
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
        $__internal_31dbdac0a2c53f0a077ae2d57b31e872aada966be232f2c06e9ac042744cfb26 = $this->env->getExtension("native_profiler");
        $__internal_31dbdac0a2c53f0a077ae2d57b31e872aada966be232f2c06e9ac042744cfb26->enter($__internal_31dbdac0a2c53f0a077ae2d57b31e872aada966be232f2c06e9ac042744cfb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_31dbdac0a2c53f0a077ae2d57b31e872aada966be232f2c06e9ac042744cfb26->leave($__internal_31dbdac0a2c53f0a077ae2d57b31e872aada966be232f2c06e9ac042744cfb26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
