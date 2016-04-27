<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b5014417be7dd34c628607625ffc382c0fe49a83c86d2c085688e1adfc01272e extends Twig_Template
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
        $__internal_22a4df2310776b9fb1cbb14f489fb506cb9ecc7d641285064e7edfd991d3acce = $this->env->getExtension("native_profiler");
        $__internal_22a4df2310776b9fb1cbb14f489fb506cb9ecc7d641285064e7edfd991d3acce->enter($__internal_22a4df2310776b9fb1cbb14f489fb506cb9ecc7d641285064e7edfd991d3acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_22a4df2310776b9fb1cbb14f489fb506cb9ecc7d641285064e7edfd991d3acce->leave($__internal_22a4df2310776b9fb1cbb14f489fb506cb9ecc7d641285064e7edfd991d3acce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
