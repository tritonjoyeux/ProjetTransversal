<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_d82464fba823c4fb8e3c43abf224a1422fef7890ecea569074ba70fbf2977467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b981a3ef9baf89fec59b59fb7600666e467d7b79715f802ff85953c2858f925c = $this->env->getExtension("native_profiler");
        $__internal_b981a3ef9baf89fec59b59fb7600666e467d7b79715f802ff85953c2858f925c->enter($__internal_b981a3ef9baf89fec59b59fb7600666e467d7b79715f802ff85953c2858f925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b981a3ef9baf89fec59b59fb7600666e467d7b79715f802ff85953c2858f925c->leave($__internal_b981a3ef9baf89fec59b59fb7600666e467d7b79715f802ff85953c2858f925c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ad222812e60534897497c641a7c3c2aa2bde508bdd72d1e3975c1c2f6e40d93 = $this->env->getExtension("native_profiler");
        $__internal_6ad222812e60534897497c641a7c3c2aa2bde508bdd72d1e3975c1c2f6e40d93->enter($__internal_6ad222812e60534897497c641a7c3c2aa2bde508bdd72d1e3975c1c2f6e40d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6ad222812e60534897497c641a7c3c2aa2bde508bdd72d1e3975c1c2f6e40d93->leave($__internal_6ad222812e60534897497c641a7c3c2aa2bde508bdd72d1e3975c1c2f6e40d93_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
