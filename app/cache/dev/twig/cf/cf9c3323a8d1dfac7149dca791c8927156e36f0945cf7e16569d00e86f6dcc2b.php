<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff23ad240143ebae7e7be2e93ef309f0207969c50cfe940ac225c22c603e1f75 extends Twig_Template
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
        $__internal_3720ab59157fb971bbcd731075ee05da49a44c455d2ec018f1c500345c715ee5 = $this->env->getExtension("native_profiler");
        $__internal_3720ab59157fb971bbcd731075ee05da49a44c455d2ec018f1c500345c715ee5->enter($__internal_3720ab59157fb971bbcd731075ee05da49a44c455d2ec018f1c500345c715ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3720ab59157fb971bbcd731075ee05da49a44c455d2ec018f1c500345c715ee5->leave($__internal_3720ab59157fb971bbcd731075ee05da49a44c455d2ec018f1c500345c715ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
