<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2d64598fe3f91bda8e09e858c2488b2d2c653747b0ae5f8ca6d83b841db69963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d116498bf3067e949b8513c78a362e18901c16f8946c848798c92beee595aed = $this->env->getExtension("native_profiler");
        $__internal_2d116498bf3067e949b8513c78a362e18901c16f8946c848798c92beee595aed->enter($__internal_2d116498bf3067e949b8513c78a362e18901c16f8946c848798c92beee595aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2d116498bf3067e949b8513c78a362e18901c16f8946c848798c92beee595aed->leave($__internal_2d116498bf3067e949b8513c78a362e18901c16f8946c848798c92beee595aed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1b4310eabd5bf52bd743e0e6de8eae3d5a239343a3f11f6770758caa74717a08 = $this->env->getExtension("native_profiler");
        $__internal_1b4310eabd5bf52bd743e0e6de8eae3d5a239343a3f11f6770758caa74717a08->enter($__internal_1b4310eabd5bf52bd743e0e6de8eae3d5a239343a3f11f6770758caa74717a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1b4310eabd5bf52bd743e0e6de8eae3d5a239343a3f11f6770758caa74717a08->leave($__internal_1b4310eabd5bf52bd743e0e6de8eae3d5a239343a3f11f6770758caa74717a08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
