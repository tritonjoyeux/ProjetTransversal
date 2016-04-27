<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e8b52d9789a48bda13c32e38cba7f753406390d139470e9809e0bb605f34e8c4 extends Twig_Template
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
        $__internal_2cfff2f299805a509a4179152af822a5672b2b015f7d186a4e2c497a301874e9 = $this->env->getExtension("native_profiler");
        $__internal_2cfff2f299805a509a4179152af822a5672b2b015f7d186a4e2c497a301874e9->enter($__internal_2cfff2f299805a509a4179152af822a5672b2b015f7d186a4e2c497a301874e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2cfff2f299805a509a4179152af822a5672b2b015f7d186a4e2c497a301874e9->leave($__internal_2cfff2f299805a509a4179152af822a5672b2b015f7d186a4e2c497a301874e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
