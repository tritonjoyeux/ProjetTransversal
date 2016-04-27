<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_61574f781caf325fdda7a52b1bd27083a54fc90e32843773971f38a31ca0a6cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c499687fad995f85a08bc9c2093fa872b62e589024ae75eca59235cde790adcf = $this->env->getExtension("native_profiler");
        $__internal_c499687fad995f85a08bc9c2093fa872b62e589024ae75eca59235cde790adcf->enter($__internal_c499687fad995f85a08bc9c2093fa872b62e589024ae75eca59235cde790adcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c499687fad995f85a08bc9c2093fa872b62e589024ae75eca59235cde790adcf->leave($__internal_c499687fad995f85a08bc9c2093fa872b62e589024ae75eca59235cde790adcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_829d4364004e08eb8300c5705d86e21e45e1869e520697245cb0020f9e85dc41 = $this->env->getExtension("native_profiler");
        $__internal_829d4364004e08eb8300c5705d86e21e45e1869e520697245cb0020f9e85dc41->enter($__internal_829d4364004e08eb8300c5705d86e21e45e1869e520697245cb0020f9e85dc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_829d4364004e08eb8300c5705d86e21e45e1869e520697245cb0020f9e85dc41->leave($__internal_829d4364004e08eb8300c5705d86e21e45e1869e520697245cb0020f9e85dc41_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
