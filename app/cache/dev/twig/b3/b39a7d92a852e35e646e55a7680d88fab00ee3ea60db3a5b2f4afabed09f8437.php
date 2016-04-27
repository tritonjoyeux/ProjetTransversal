<?php

/* @Cook4us/Registration/register.html.twig */
class __TwigTemplate_2d51b10cd3ef447cfa6e1a57d720aff60c63d78d429a7e8a95d505dd8d5fe606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Registration/register.html.twig", 1);
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
        $__internal_3b3eec9495b07541f5d7de0cb90f93fc7586c43ed3cfe53528ec3efaff0eca33 = $this->env->getExtension("native_profiler");
        $__internal_3b3eec9495b07541f5d7de0cb90f93fc7586c43ed3cfe53528ec3efaff0eca33->enter($__internal_3b3eec9495b07541f5d7de0cb90f93fc7586c43ed3cfe53528ec3efaff0eca33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3eec9495b07541f5d7de0cb90f93fc7586c43ed3cfe53528ec3efaff0eca33->leave($__internal_3b3eec9495b07541f5d7de0cb90f93fc7586c43ed3cfe53528ec3efaff0eca33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0cfd75a06cfe1db6fdf24822e36c8f769fc6971e5fe596e775726ee650be53ac = $this->env->getExtension("native_profiler");
        $__internal_0cfd75a06cfe1db6fdf24822e36c8f769fc6971e5fe596e775726ee650be53ac->enter($__internal_0cfd75a06cfe1db6fdf24822e36c8f769fc6971e5fe596e775726ee650be53ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@Cook4us/Registration/register.html.twig", 4)->display($context);
        
        $__internal_0cfd75a06cfe1db6fdf24822e36c8f769fc6971e5fe596e775726ee650be53ac->leave($__internal_0cfd75a06cfe1db6fdf24822e36c8f769fc6971e5fe596e775726ee650be53ac_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Registration/register.html.twig";
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
