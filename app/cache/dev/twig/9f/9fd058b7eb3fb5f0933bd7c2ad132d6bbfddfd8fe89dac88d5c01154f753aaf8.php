<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_d23f61fec10377860bc441fc157c89a399a8ade5b25de9ecc0f9a298e557b188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_80b5fc0332ae824924908343fdf86b49877e578f570d41f11013be123bb0d649 = $this->env->getExtension("native_profiler");
        $__internal_80b5fc0332ae824924908343fdf86b49877e578f570d41f11013be123bb0d649->enter($__internal_80b5fc0332ae824924908343fdf86b49877e578f570d41f11013be123bb0d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b5fc0332ae824924908343fdf86b49877e578f570d41f11013be123bb0d649->leave($__internal_80b5fc0332ae824924908343fdf86b49877e578f570d41f11013be123bb0d649_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1416cb0de665be2f13ac56add231cfc320958d211dbbe7bc08c9361185547b6f = $this->env->getExtension("native_profiler");
        $__internal_1416cb0de665be2f13ac56add231cfc320958d211dbbe7bc08c9361185547b6f->enter($__internal_1416cb0de665be2f13ac56add231cfc320958d211dbbe7bc08c9361185547b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1416cb0de665be2f13ac56add231cfc320958d211dbbe7bc08c9361185547b6f->leave($__internal_1416cb0de665be2f13ac56add231cfc320958d211dbbe7bc08c9361185547b6f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
