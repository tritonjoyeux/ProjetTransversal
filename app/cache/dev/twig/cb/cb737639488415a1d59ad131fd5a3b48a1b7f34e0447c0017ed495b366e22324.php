<?php

/* @Cook4us/Profile/edit.html.twig */
class __TwigTemplate_67023b1362dac1dd008f63d4a78b42e7482196d667171b3084118010568b67a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Profile/edit.html.twig", 1);
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
        $__internal_5109e2fcc1cf465b977ca1e220a8520639327fc6464294c7091d32f703b7a804 = $this->env->getExtension("native_profiler");
        $__internal_5109e2fcc1cf465b977ca1e220a8520639327fc6464294c7091d32f703b7a804->enter($__internal_5109e2fcc1cf465b977ca1e220a8520639327fc6464294c7091d32f703b7a804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5109e2fcc1cf465b977ca1e220a8520639327fc6464294c7091d32f703b7a804->leave($__internal_5109e2fcc1cf465b977ca1e220a8520639327fc6464294c7091d32f703b7a804_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3ccb444a76a73897e1d5306a7013323b0a86709789db73aba46bfcd27d1d510 = $this->env->getExtension("native_profiler");
        $__internal_f3ccb444a76a73897e1d5306a7013323b0a86709789db73aba46bfcd27d1d510->enter($__internal_f3ccb444a76a73897e1d5306a7013323b0a86709789db73aba46bfcd27d1d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@Cook4us/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f3ccb444a76a73897e1d5306a7013323b0a86709789db73aba46bfcd27d1d510->leave($__internal_f3ccb444a76a73897e1d5306a7013323b0a86709789db73aba46bfcd27d1d510_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
