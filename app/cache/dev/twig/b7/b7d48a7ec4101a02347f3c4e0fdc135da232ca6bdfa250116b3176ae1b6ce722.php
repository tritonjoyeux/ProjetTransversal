<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1e797b86e1216d7d94c2a8bd52d36e9dd3f6d37fc8c4c267ab668975605ca429 extends Twig_Template
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
        $__internal_bd330566fec55fd1ad4dea4e5da38fc7e389fd78de85b91ddd10345555fc34fd = $this->env->getExtension("native_profiler");
        $__internal_bd330566fec55fd1ad4dea4e5da38fc7e389fd78de85b91ddd10345555fc34fd->enter($__internal_bd330566fec55fd1ad4dea4e5da38fc7e389fd78de85b91ddd10345555fc34fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bd330566fec55fd1ad4dea4e5da38fc7e389fd78de85b91ddd10345555fc34fd->leave($__internal_bd330566fec55fd1ad4dea4e5da38fc7e389fd78de85b91ddd10345555fc34fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
