<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_11ad143cdf87bfca2c2f287cca0add6cdeec5e8537cc532b83c9410af52ccc41 extends Twig_Template
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
        $__internal_0eaccd7801f7bdd963b15a2040808370582f418b456bb73524bcb9d42ca5d07c = $this->env->getExtension("native_profiler");
        $__internal_0eaccd7801f7bdd963b15a2040808370582f418b456bb73524bcb9d42ca5d07c->enter($__internal_0eaccd7801f7bdd963b15a2040808370582f418b456bb73524bcb9d42ca5d07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0eaccd7801f7bdd963b15a2040808370582f418b456bb73524bcb9d42ca5d07c->leave($__internal_0eaccd7801f7bdd963b15a2040808370582f418b456bb73524bcb9d42ca5d07c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
