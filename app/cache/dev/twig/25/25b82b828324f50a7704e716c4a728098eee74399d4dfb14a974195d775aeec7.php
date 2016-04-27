<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8b27fa114c13742a181bdcb6d30adf28e251fead0ab9e95b4cf2518725abd010 extends Twig_Template
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
        $__internal_d7d3fe9f7380f250bd91fe76b71b9e920e763c875b062451d948793b5e807fe0 = $this->env->getExtension("native_profiler");
        $__internal_d7d3fe9f7380f250bd91fe76b71b9e920e763c875b062451d948793b5e807fe0->enter($__internal_d7d3fe9f7380f250bd91fe76b71b9e920e763c875b062451d948793b5e807fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d7d3fe9f7380f250bd91fe76b71b9e920e763c875b062451d948793b5e807fe0->leave($__internal_d7d3fe9f7380f250bd91fe76b71b9e920e763c875b062451d948793b5e807fe0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
