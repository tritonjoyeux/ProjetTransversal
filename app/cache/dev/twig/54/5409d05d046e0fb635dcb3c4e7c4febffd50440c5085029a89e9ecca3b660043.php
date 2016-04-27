<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_65695f28879d0a346dddb303c4218fcc66826a6bc69b8e4af96226c8ef23ae46 extends Twig_Template
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
        $__internal_779b39680bd7c017662078210f596b21a1ceff8d05b7264f939b8ceada28b35d = $this->env->getExtension("native_profiler");
        $__internal_779b39680bd7c017662078210f596b21a1ceff8d05b7264f939b8ceada28b35d->enter($__internal_779b39680bd7c017662078210f596b21a1ceff8d05b7264f939b8ceada28b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_779b39680bd7c017662078210f596b21a1ceff8d05b7264f939b8ceada28b35d->leave($__internal_779b39680bd7c017662078210f596b21a1ceff8d05b7264f939b8ceada28b35d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
