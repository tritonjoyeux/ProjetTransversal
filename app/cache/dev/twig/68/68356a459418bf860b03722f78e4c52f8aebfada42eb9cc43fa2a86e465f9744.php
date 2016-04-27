<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_26928247d69c6dff9b0a24906838786ea72a46f77da6969129c68a99f490b511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_e7df3dc6ed14708e59b405b332b8b97116bb1657d2752e1dace8b8cdb5441cde = $this->env->getExtension("native_profiler");
        $__internal_e7df3dc6ed14708e59b405b332b8b97116bb1657d2752e1dace8b8cdb5441cde->enter($__internal_e7df3dc6ed14708e59b405b332b8b97116bb1657d2752e1dace8b8cdb5441cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7df3dc6ed14708e59b405b332b8b97116bb1657d2752e1dace8b8cdb5441cde->leave($__internal_e7df3dc6ed14708e59b405b332b8b97116bb1657d2752e1dace8b8cdb5441cde_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecb612ced337c08d2faf785ebab7a770ec8563b00279be9b2a5ccad5a896ae43 = $this->env->getExtension("native_profiler");
        $__internal_ecb612ced337c08d2faf785ebab7a770ec8563b00279be9b2a5ccad5a896ae43->enter($__internal_ecb612ced337c08d2faf785ebab7a770ec8563b00279be9b2a5ccad5a896ae43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ecb612ced337c08d2faf785ebab7a770ec8563b00279be9b2a5ccad5a896ae43->leave($__internal_ecb612ced337c08d2faf785ebab7a770ec8563b00279be9b2a5ccad5a896ae43_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
