<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_44b15b150655d64d802c7354cf46dca842d2f1dc86d50f49dda06d458409ce01 extends Twig_Template
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
        $__internal_7ab0c7c7e90ad7ea1df133dcf4f64dfcccef7c6937bd2772e0fb68d18ee25c8c = $this->env->getExtension("native_profiler");
        $__internal_7ab0c7c7e90ad7ea1df133dcf4f64dfcccef7c6937bd2772e0fb68d18ee25c8c->enter($__internal_7ab0c7c7e90ad7ea1df133dcf4f64dfcccef7c6937bd2772e0fb68d18ee25c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7ab0c7c7e90ad7ea1df133dcf4f64dfcccef7c6937bd2772e0fb68d18ee25c8c->leave($__internal_7ab0c7c7e90ad7ea1df133dcf4f64dfcccef7c6937bd2772e0fb68d18ee25c8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
