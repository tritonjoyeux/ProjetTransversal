<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_421ebf95aa7553fd9182db0981ab25d4b35c603e3d20fe37ca8717c7bbde5c84 extends Twig_Template
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
        $__internal_abba5fbdfccaa805d79df2335be8deb12b2d87aa0abfdfe02851f34bc8f4a27a = $this->env->getExtension("native_profiler");
        $__internal_abba5fbdfccaa805d79df2335be8deb12b2d87aa0abfdfe02851f34bc8f4a27a->enter($__internal_abba5fbdfccaa805d79df2335be8deb12b2d87aa0abfdfe02851f34bc8f4a27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_abba5fbdfccaa805d79df2335be8deb12b2d87aa0abfdfe02851f34bc8f4a27a->leave($__internal_abba5fbdfccaa805d79df2335be8deb12b2d87aa0abfdfe02851f34bc8f4a27a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
