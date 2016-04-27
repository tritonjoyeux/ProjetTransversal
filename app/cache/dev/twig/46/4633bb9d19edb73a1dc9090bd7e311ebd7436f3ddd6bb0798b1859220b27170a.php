<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_990a72cc76df55263feffedc060f043234706f29689a143c43352eb8e340522e extends Twig_Template
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
        $__internal_ba26d455bd7dcc9bced50789dbef0873fc5d3d8dc0d41bb6438fb76a2fa0a342 = $this->env->getExtension("native_profiler");
        $__internal_ba26d455bd7dcc9bced50789dbef0873fc5d3d8dc0d41bb6438fb76a2fa0a342->enter($__internal_ba26d455bd7dcc9bced50789dbef0873fc5d3d8dc0d41bb6438fb76a2fa0a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ba26d455bd7dcc9bced50789dbef0873fc5d3d8dc0d41bb6438fb76a2fa0a342->leave($__internal_ba26d455bd7dcc9bced50789dbef0873fc5d3d8dc0d41bb6438fb76a2fa0a342_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
