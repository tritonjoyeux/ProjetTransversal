<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_4ccd9891a29f6297027017745ed240a2b4ac8799f2520a185e929e45b908414f extends Twig_Template
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
        $__internal_8d94a772e8fe507186a1a0a0b0b89be800dde31c8bfc71f0670926aeb198cbec = $this->env->getExtension("native_profiler");
        $__internal_8d94a772e8fe507186a1a0a0b0b89be800dde31c8bfc71f0670926aeb198cbec->enter($__internal_8d94a772e8fe507186a1a0a0b0b89be800dde31c8bfc71f0670926aeb198cbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_8d94a772e8fe507186a1a0a0b0b89be800dde31c8bfc71f0670926aeb198cbec->leave($__internal_8d94a772e8fe507186a1a0a0b0b89be800dde31c8bfc71f0670926aeb198cbec_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
