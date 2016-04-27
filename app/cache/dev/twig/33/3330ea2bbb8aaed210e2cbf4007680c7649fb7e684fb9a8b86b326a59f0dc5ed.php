<?php

/* @Cook4us/ChangePassword/changePassword.html.twig */
class __TwigTemplate_55df2125c8a577789a6dab67eb2681e6a1a7f9588d62baa3be1c94efbe969588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1f992a8632e50c50a20c0e4b7778772395892c56158c9af2e3713f99b31a7b13 = $this->env->getExtension("native_profiler");
        $__internal_1f992a8632e50c50a20c0e4b7778772395892c56158c9af2e3713f99b31a7b13->enter($__internal_1f992a8632e50c50a20c0e4b7778772395892c56158c9af2e3713f99b31a7b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f992a8632e50c50a20c0e4b7778772395892c56158c9af2e3713f99b31a7b13->leave($__internal_1f992a8632e50c50a20c0e4b7778772395892c56158c9af2e3713f99b31a7b13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ee04523c07392de85ec6a91d0e88104d5b2aa3fd8654d118810375be3232708 = $this->env->getExtension("native_profiler");
        $__internal_3ee04523c07392de85ec6a91d0e88104d5b2aa3fd8654d118810375be3232708->enter($__internal_3ee04523c07392de85ec6a91d0e88104d5b2aa3fd8654d118810375be3232708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@Cook4us/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3ee04523c07392de85ec6a91d0e88104d5b2aa3fd8654d118810375be3232708->leave($__internal_3ee04523c07392de85ec6a91d0e88104d5b2aa3fd8654d118810375be3232708_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
