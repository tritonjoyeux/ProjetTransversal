<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_8c8db2b808422bc920a01100676b46d9b103e040e8351d2e3109efb52dc9b724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0b03027e927538f0500d491908c1242bbcd6dc19bfa1887f1d800d84fe79dd26 = $this->env->getExtension("native_profiler");
        $__internal_0b03027e927538f0500d491908c1242bbcd6dc19bfa1887f1d800d84fe79dd26->enter($__internal_0b03027e927538f0500d491908c1242bbcd6dc19bfa1887f1d800d84fe79dd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b03027e927538f0500d491908c1242bbcd6dc19bfa1887f1d800d84fe79dd26->leave($__internal_0b03027e927538f0500d491908c1242bbcd6dc19bfa1887f1d800d84fe79dd26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f653454feaac8a090d972e62a324c55a8cbccdc54ceb70c4cde0a35212d2bc76 = $this->env->getExtension("native_profiler");
        $__internal_f653454feaac8a090d972e62a324c55a8cbccdc54ceb70c4cde0a35212d2bc76->enter($__internal_f653454feaac8a090d972e62a324c55a8cbccdc54ceb70c4cde0a35212d2bc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f653454feaac8a090d972e62a324c55a8cbccdc54ceb70c4cde0a35212d2bc76->leave($__internal_f653454feaac8a090d972e62a324c55a8cbccdc54ceb70c4cde0a35212d2bc76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
