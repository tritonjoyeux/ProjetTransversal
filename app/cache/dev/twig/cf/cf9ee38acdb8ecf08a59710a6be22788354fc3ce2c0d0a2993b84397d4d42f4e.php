<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f2b662dc4f3cb35b9b4a0a5fb00a943bbc0c7431f46c307cbff7f852435dc6b6 extends Twig_Template
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
        $__internal_244b2e7c8d34395af82e19b00eae1f3468f7c9355cb628c28fab8027bc3b4f57 = $this->env->getExtension("native_profiler");
        $__internal_244b2e7c8d34395af82e19b00eae1f3468f7c9355cb628c28fab8027bc3b4f57->enter($__internal_244b2e7c8d34395af82e19b00eae1f3468f7c9355cb628c28fab8027bc3b4f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_244b2e7c8d34395af82e19b00eae1f3468f7c9355cb628c28fab8027bc3b4f57->leave($__internal_244b2e7c8d34395af82e19b00eae1f3468f7c9355cb628c28fab8027bc3b4f57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
