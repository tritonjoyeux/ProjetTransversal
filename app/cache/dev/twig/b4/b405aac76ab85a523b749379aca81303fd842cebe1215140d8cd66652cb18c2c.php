<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bdd0f80da2a9e9cd19d9803c755b1eeed803c0736aef191eca92cf5b41e35160 extends Twig_Template
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
        $__internal_7c12817fb4a7b908ccb3016a1e5307be1d5dd3ab8cb6deb0170ebad45ae2ee23 = $this->env->getExtension("native_profiler");
        $__internal_7c12817fb4a7b908ccb3016a1e5307be1d5dd3ab8cb6deb0170ebad45ae2ee23->enter($__internal_7c12817fb4a7b908ccb3016a1e5307be1d5dd3ab8cb6deb0170ebad45ae2ee23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c12817fb4a7b908ccb3016a1e5307be1d5dd3ab8cb6deb0170ebad45ae2ee23->leave($__internal_7c12817fb4a7b908ccb3016a1e5307be1d5dd3ab8cb6deb0170ebad45ae2ee23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
