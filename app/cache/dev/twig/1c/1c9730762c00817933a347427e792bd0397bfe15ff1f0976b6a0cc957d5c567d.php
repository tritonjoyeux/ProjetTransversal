<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f90ac99eb8caac2955b770a06c9d95598d6965ae6b260a30febfd7b9797ca8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0bd165c4156d5a18d34ed609eab5af233f05c685adf25166d8f5cf191b9368a = $this->env->getExtension("native_profiler");
        $__internal_f0bd165c4156d5a18d34ed609eab5af233f05c685adf25166d8f5cf191b9368a->enter($__internal_f0bd165c4156d5a18d34ed609eab5af233f05c685adf25166d8f5cf191b9368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0bd165c4156d5a18d34ed609eab5af233f05c685adf25166d8f5cf191b9368a->leave($__internal_f0bd165c4156d5a18d34ed609eab5af233f05c685adf25166d8f5cf191b9368a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef8da9bbb23cd29585ba7db09c7e687390b297101cc99054d7dee98dbebaa03f = $this->env->getExtension("native_profiler");
        $__internal_ef8da9bbb23cd29585ba7db09c7e687390b297101cc99054d7dee98dbebaa03f->enter($__internal_ef8da9bbb23cd29585ba7db09c7e687390b297101cc99054d7dee98dbebaa03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_ef8da9bbb23cd29585ba7db09c7e687390b297101cc99054d7dee98dbebaa03f->leave($__internal_ef8da9bbb23cd29585ba7db09c7e687390b297101cc99054d7dee98dbebaa03f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
