<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6a9242d7f6dbdeceb7f5bd6c16bcbda84ecd2ea68759bd1aca7ae84715e86d2b extends Twig_Template
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
        $__internal_66a888ff4e5e62a6cdd10be1ba07b7604aa47986bfe2eeba8c0385e722ad6b61 = $this->env->getExtension("native_profiler");
        $__internal_66a888ff4e5e62a6cdd10be1ba07b7604aa47986bfe2eeba8c0385e722ad6b61->enter($__internal_66a888ff4e5e62a6cdd10be1ba07b7604aa47986bfe2eeba8c0385e722ad6b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_66a888ff4e5e62a6cdd10be1ba07b7604aa47986bfe2eeba8c0385e722ad6b61->leave($__internal_66a888ff4e5e62a6cdd10be1ba07b7604aa47986bfe2eeba8c0385e722ad6b61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
