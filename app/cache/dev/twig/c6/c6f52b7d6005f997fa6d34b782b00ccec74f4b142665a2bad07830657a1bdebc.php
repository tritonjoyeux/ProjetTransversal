<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_bc2d72999a061e43265d95f3fea74c2ea1d9571850d5e7988d1ab3710e44b3dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_9263eff27a4b979e0b4c0ddd68792d076f3b6add7028436d361a75e1e6d73eab = $this->env->getExtension("native_profiler");
        $__internal_9263eff27a4b979e0b4c0ddd68792d076f3b6add7028436d361a75e1e6d73eab->enter($__internal_9263eff27a4b979e0b4c0ddd68792d076f3b6add7028436d361a75e1e6d73eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9263eff27a4b979e0b4c0ddd68792d076f3b6add7028436d361a75e1e6d73eab->leave($__internal_9263eff27a4b979e0b4c0ddd68792d076f3b6add7028436d361a75e1e6d73eab_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_938decc82edbb8900680d6004961f8cdbf542441ada34b5923a5783e0a3cc3e4 = $this->env->getExtension("native_profiler");
        $__internal_938decc82edbb8900680d6004961f8cdbf542441ada34b5923a5783e0a3cc3e4->enter($__internal_938decc82edbb8900680d6004961f8cdbf542441ada34b5923a5783e0a3cc3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_938decc82edbb8900680d6004961f8cdbf542441ada34b5923a5783e0a3cc3e4->leave($__internal_938decc82edbb8900680d6004961f8cdbf542441ada34b5923a5783e0a3cc3e4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
