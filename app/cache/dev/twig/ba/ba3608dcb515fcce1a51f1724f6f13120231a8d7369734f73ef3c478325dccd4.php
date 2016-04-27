<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a288fc144f95c5ed1706a835e9848a66b71b7300596919538d11346d86bb6742 extends Twig_Template
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
        $__internal_3bf80585212b1841c833e5fb61fe2df32264511c454ae97757279b2977b3d923 = $this->env->getExtension("native_profiler");
        $__internal_3bf80585212b1841c833e5fb61fe2df32264511c454ae97757279b2977b3d923->enter($__internal_3bf80585212b1841c833e5fb61fe2df32264511c454ae97757279b2977b3d923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3bf80585212b1841c833e5fb61fe2df32264511c454ae97757279b2977b3d923->leave($__internal_3bf80585212b1841c833e5fb61fe2df32264511c454ae97757279b2977b3d923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
