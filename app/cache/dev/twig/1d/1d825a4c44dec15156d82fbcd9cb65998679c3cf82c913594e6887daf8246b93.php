<?php

/* @Cook4us/Home/chief.html.twig */
class __TwigTemplate_29d0504aaef7d49287f549c83b69e0fe4514511de8b586c705983589f52de364 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Home/chief.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4514db95ebdd4b64abdbf989f3f270baabf5540bbd07ce20580774348554aced = $this->env->getExtension("native_profiler");
        $__internal_4514db95ebdd4b64abdbf989f3f270baabf5540bbd07ce20580774348554aced->enter($__internal_4514db95ebdd4b64abdbf989f3f270baabf5540bbd07ce20580774348554aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Home/chief.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4514db95ebdd4b64abdbf989f3f270baabf5540bbd07ce20580774348554aced->leave($__internal_4514db95ebdd4b64abdbf989f3f270baabf5540bbd07ce20580774348554aced_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Home/chief.html.twig";
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
