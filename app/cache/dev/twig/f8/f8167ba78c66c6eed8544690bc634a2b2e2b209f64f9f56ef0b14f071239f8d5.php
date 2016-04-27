<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2b49b544f02d059023aaaeee2cad293a20a2ec70dbdcd992c7eef5b6889e8bcf extends Twig_Template
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
        $__internal_c4e39528825a98f671dd6d0278d655e997886ce54aa276bc876bdb8a145abe97 = $this->env->getExtension("native_profiler");
        $__internal_c4e39528825a98f671dd6d0278d655e997886ce54aa276bc876bdb8a145abe97->enter($__internal_c4e39528825a98f671dd6d0278d655e997886ce54aa276bc876bdb8a145abe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c4e39528825a98f671dd6d0278d655e997886ce54aa276bc876bdb8a145abe97->leave($__internal_c4e39528825a98f671dd6d0278d655e997886ce54aa276bc876bdb8a145abe97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
