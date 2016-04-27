<?php

/* @Cook4us/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_9fcae2cbdd57ed04fcd7d823171ae7c728d9ebee608a1d6fd1e3def57451e517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_002e91c3577411e7f72c05447c1d6fec8f17dbfef385fb031d35a734ddb332f8 = $this->env->getExtension("native_profiler");
        $__internal_002e91c3577411e7f72c05447c1d6fec8f17dbfef385fb031d35a734ddb332f8->enter($__internal_002e91c3577411e7f72c05447c1d6fec8f17dbfef385fb031d35a734ddb332f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_002e91c3577411e7f72c05447c1d6fec8f17dbfef385fb031d35a734ddb332f8->leave($__internal_002e91c3577411e7f72c05447c1d6fec8f17dbfef385fb031d35a734ddb332f8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_774d12653358bfd1bf382794df4d6f813e9158b70fdcf8a2ca5020e024ce713b = $this->env->getExtension("native_profiler");
        $__internal_774d12653358bfd1bf382794df4d6f813e9158b70fdcf8a2ca5020e024ce713b->enter($__internal_774d12653358bfd1bf382794df4d6f813e9158b70fdcf8a2ca5020e024ce713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_774d12653358bfd1bf382794df4d6f813e9158b70fdcf8a2ca5020e024ce713b->leave($__internal_774d12653358bfd1bf382794df4d6f813e9158b70fdcf8a2ca5020e024ce713b_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/passwordAlreadyRequested.html.twig";
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
