<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_3f79e5763d03356be7f604521b0939c9e42641965438978c6b3de16d913b669f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_06e4eca5577042dff69eeed6d48fe67a4d4488ecfb06795adc6f470258eb6b88 = $this->env->getExtension("native_profiler");
        $__internal_06e4eca5577042dff69eeed6d48fe67a4d4488ecfb06795adc6f470258eb6b88->enter($__internal_06e4eca5577042dff69eeed6d48fe67a4d4488ecfb06795adc6f470258eb6b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e4eca5577042dff69eeed6d48fe67a4d4488ecfb06795adc6f470258eb6b88->leave($__internal_06e4eca5577042dff69eeed6d48fe67a4d4488ecfb06795adc6f470258eb6b88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cee22074fc9e84ca949a2341bac8e25982deb480710e7a099ddff16c2bd3c3a = $this->env->getExtension("native_profiler");
        $__internal_9cee22074fc9e84ca949a2341bac8e25982deb480710e7a099ddff16c2bd3c3a->enter($__internal_9cee22074fc9e84ca949a2341bac8e25982deb480710e7a099ddff16c2bd3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9cee22074fc9e84ca949a2341bac8e25982deb480710e7a099ddff16c2bd3c3a->leave($__internal_9cee22074fc9e84ca949a2341bac8e25982deb480710e7a099ddff16c2bd3c3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
