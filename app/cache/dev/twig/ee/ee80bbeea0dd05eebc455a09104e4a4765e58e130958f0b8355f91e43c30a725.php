<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a4b0b2a9694b853df1f99f6405f064dcb2e2e6751b13a481a3a2e9132031a447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0298b254ce1b7147f07a795c27962de9f97c3e117d64fab9e290bf3ac427b1dd = $this->env->getExtension("native_profiler");
        $__internal_0298b254ce1b7147f07a795c27962de9f97c3e117d64fab9e290bf3ac427b1dd->enter($__internal_0298b254ce1b7147f07a795c27962de9f97c3e117d64fab9e290bf3ac427b1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0298b254ce1b7147f07a795c27962de9f97c3e117d64fab9e290bf3ac427b1dd->leave($__internal_0298b254ce1b7147f07a795c27962de9f97c3e117d64fab9e290bf3ac427b1dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2bd4e8fd84be7e04d520c713672e87aa4fe1ec435a6f6ab0f3ff440e96801c1 = $this->env->getExtension("native_profiler");
        $__internal_f2bd4e8fd84be7e04d520c713672e87aa4fe1ec435a6f6ab0f3ff440e96801c1->enter($__internal_f2bd4e8fd84be7e04d520c713672e87aa4fe1ec435a6f6ab0f3ff440e96801c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f2bd4e8fd84be7e04d520c713672e87aa4fe1ec435a6f6ab0f3ff440e96801c1->leave($__internal_f2bd4e8fd84be7e04d520c713672e87aa4fe1ec435a6f6ab0f3ff440e96801c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
