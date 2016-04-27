<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_29999a8dd34d46d21b0a3d942e0730ab04c74ccedfd489b4db7545fc711bc6f7 extends Twig_Template
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
        $__internal_581f3f8a57c8d9730edd85b786e404915553be4ad69499df6c646f1b8be76d9c = $this->env->getExtension("native_profiler");
        $__internal_581f3f8a57c8d9730edd85b786e404915553be4ad69499df6c646f1b8be76d9c->enter($__internal_581f3f8a57c8d9730edd85b786e404915553be4ad69499df6c646f1b8be76d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_581f3f8a57c8d9730edd85b786e404915553be4ad69499df6c646f1b8be76d9c->leave($__internal_581f3f8a57c8d9730edd85b786e404915553be4ad69499df6c646f1b8be76d9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
