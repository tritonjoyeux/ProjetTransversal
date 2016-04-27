<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_222e2e043a9941b98f8f71b0de70ca73efc90c4022b881c1456e81205fb59312 extends Twig_Template
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
        $__internal_6f114990b3e4657c39a19e8757eb3c2f82e99f91125a502c1ba1567125b4fc06 = $this->env->getExtension("native_profiler");
        $__internal_6f114990b3e4657c39a19e8757eb3c2f82e99f91125a502c1ba1567125b4fc06->enter($__internal_6f114990b3e4657c39a19e8757eb3c2f82e99f91125a502c1ba1567125b4fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6f114990b3e4657c39a19e8757eb3c2f82e99f91125a502c1ba1567125b4fc06->leave($__internal_6f114990b3e4657c39a19e8757eb3c2f82e99f91125a502c1ba1567125b4fc06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
