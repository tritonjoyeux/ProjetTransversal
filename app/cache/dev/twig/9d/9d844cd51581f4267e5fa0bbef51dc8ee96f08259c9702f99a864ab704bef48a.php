<?php

/* @Cook4us/Group/new.html.twig */
class __TwigTemplate_8b4f6c7551bf55ee1351f3fe677fe3ed0d207536b25234c7425f9ab8791d4221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3628d36f980ca362f873f5775c662942530547e6d164fb7ebd7beeeac1b6aba5 = $this->env->getExtension("native_profiler");
        $__internal_3628d36f980ca362f873f5775c662942530547e6d164fb7ebd7beeeac1b6aba5->enter($__internal_3628d36f980ca362f873f5775c662942530547e6d164fb7ebd7beeeac1b6aba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3628d36f980ca362f873f5775c662942530547e6d164fb7ebd7beeeac1b6aba5->leave($__internal_3628d36f980ca362f873f5775c662942530547e6d164fb7ebd7beeeac1b6aba5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb2ec705ba929fa58db6e4ade34e6c05ce01b8bc0ab60584042dea0ea2c0d3b7 = $this->env->getExtension("native_profiler");
        $__internal_bb2ec705ba929fa58db6e4ade34e6c05ce01b8bc0ab60584042dea0ea2c0d3b7->enter($__internal_bb2ec705ba929fa58db6e4ade34e6c05ce01b8bc0ab60584042dea0ea2c0d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@Cook4us/Group/new.html.twig", 4)->display($context);
        
        $__internal_bb2ec705ba929fa58db6e4ade34e6c05ce01b8bc0ab60584042dea0ea2c0d3b7->leave($__internal_bb2ec705ba929fa58db6e4ade34e6c05ce01b8bc0ab60584042dea0ea2c0d3b7_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
