<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d68d6044419d7d172afdecf97d63a2fecec03279d820fe6dc35c9c189566b8ec extends Twig_Template
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
        $__internal_cbc58eafb9178fe02a82e982f9bbb8956397f57911ac16e7171247ab4e6a7250 = $this->env->getExtension("native_profiler");
        $__internal_cbc58eafb9178fe02a82e982f9bbb8956397f57911ac16e7171247ab4e6a7250->enter($__internal_cbc58eafb9178fe02a82e982f9bbb8956397f57911ac16e7171247ab4e6a7250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cbc58eafb9178fe02a82e982f9bbb8956397f57911ac16e7171247ab4e6a7250->leave($__internal_cbc58eafb9178fe02a82e982f9bbb8956397f57911ac16e7171247ab4e6a7250_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
