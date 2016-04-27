<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_db850faf8c4614c94e17b496ab4dcad04cc5a2a3ea8b79eac1bae5bd00bb979d extends Twig_Template
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
        $__internal_3b81bb838284d2a65ef63263d17ca6866a531168a79a3e2f3925704a7f7f592c = $this->env->getExtension("native_profiler");
        $__internal_3b81bb838284d2a65ef63263d17ca6866a531168a79a3e2f3925704a7f7f592c->enter($__internal_3b81bb838284d2a65ef63263d17ca6866a531168a79a3e2f3925704a7f7f592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3b81bb838284d2a65ef63263d17ca6866a531168a79a3e2f3925704a7f7f592c->leave($__internal_3b81bb838284d2a65ef63263d17ca6866a531168a79a3e2f3925704a7f7f592c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
