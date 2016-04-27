<?php

/* Cook4usBundle:Home:chief.html.twig */
class __TwigTemplate_ea192ed6e97e39b9d68ad8d19022352a6faf69b206ee70ae4ab399f19e030f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "Cook4usBundle:Home:chief.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32541c751d6f24ff4c78956d18eba6a3395a300dd00584623ac99d7586cbe8e9 = $this->env->getExtension("native_profiler");
        $__internal_32541c751d6f24ff4c78956d18eba6a3395a300dd00584623ac99d7586cbe8e9->enter($__internal_32541c751d6f24ff4c78956d18eba6a3395a300dd00584623ac99d7586cbe8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Home:chief.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32541c751d6f24ff4c78956d18eba6a3395a300dd00584623ac99d7586cbe8e9->leave($__internal_32541c751d6f24ff4c78956d18eba6a3395a300dd00584623ac99d7586cbe8e9_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Home:chief.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
