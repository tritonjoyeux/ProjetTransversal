<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c800df4ee5a499b5248404cb725c0c9b0f783ce9a1b951af06df7f3972d7e7b1 extends Twig_Template
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
        $__internal_bace092010b43b4172a63f6c320d7cf273aef741dae8bf6ab6dbd4ba69b35d90 = $this->env->getExtension("native_profiler");
        $__internal_bace092010b43b4172a63f6c320d7cf273aef741dae8bf6ab6dbd4ba69b35d90->enter($__internal_bace092010b43b4172a63f6c320d7cf273aef741dae8bf6ab6dbd4ba69b35d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bace092010b43b4172a63f6c320d7cf273aef741dae8bf6ab6dbd4ba69b35d90->leave($__internal_bace092010b43b4172a63f6c320d7cf273aef741dae8bf6ab6dbd4ba69b35d90_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
