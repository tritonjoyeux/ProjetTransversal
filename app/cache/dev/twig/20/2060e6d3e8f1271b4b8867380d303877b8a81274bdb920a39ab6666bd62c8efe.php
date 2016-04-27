<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_840fd2d3a9cd7c1e8a818d6bc28589f172b7891e55b9fb81b1c8f5bfe1e44b16 extends Twig_Template
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
        $__internal_7990d009f651329da6dc4b3b0fea8da3b661136424bc1254255545b10ef8ab4a = $this->env->getExtension("native_profiler");
        $__internal_7990d009f651329da6dc4b3b0fea8da3b661136424bc1254255545b10ef8ab4a->enter($__internal_7990d009f651329da6dc4b3b0fea8da3b661136424bc1254255545b10ef8ab4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7990d009f651329da6dc4b3b0fea8da3b661136424bc1254255545b10ef8ab4a->leave($__internal_7990d009f651329da6dc4b3b0fea8da3b661136424bc1254255545b10ef8ab4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
