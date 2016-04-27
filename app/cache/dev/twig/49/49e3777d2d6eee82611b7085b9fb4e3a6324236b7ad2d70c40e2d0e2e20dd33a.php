<?php

/* @Cook4us/Resetting/request.html.twig */
class __TwigTemplate_d8984c492ba3ff0d8dda56ee9fd38fe8ba5d96d4c5c3c94bd5ba9f2d9043417d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Resetting/request.html.twig", 1);
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
        $__internal_2ecd234ec29f369543fc14decba5148d335f47c6125b02e1e4a1e6a006791f5e = $this->env->getExtension("native_profiler");
        $__internal_2ecd234ec29f369543fc14decba5148d335f47c6125b02e1e4a1e6a006791f5e->enter($__internal_2ecd234ec29f369543fc14decba5148d335f47c6125b02e1e4a1e6a006791f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ecd234ec29f369543fc14decba5148d335f47c6125b02e1e4a1e6a006791f5e->leave($__internal_2ecd234ec29f369543fc14decba5148d335f47c6125b02e1e4a1e6a006791f5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8316a7dda99b70665fbb2d98ffd5c14a483b418f428eb02fe4f6ab9fda02254b = $this->env->getExtension("native_profiler");
        $__internal_8316a7dda99b70665fbb2d98ffd5c14a483b418f428eb02fe4f6ab9fda02254b->enter($__internal_8316a7dda99b70665fbb2d98ffd5c14a483b418f428eb02fe4f6ab9fda02254b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@Cook4us/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_8316a7dda99b70665fbb2d98ffd5c14a483b418f428eb02fe4f6ab9fda02254b->leave($__internal_8316a7dda99b70665fbb2d98ffd5c14a483b418f428eb02fe4f6ab9fda02254b_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
