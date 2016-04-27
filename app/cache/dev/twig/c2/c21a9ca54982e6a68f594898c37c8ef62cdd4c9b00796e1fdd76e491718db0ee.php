<?php

/* @Cook4us/Registration/checkEmail.html.twig */
class __TwigTemplate_9344c1061dbf8a5e40b238a7867dfb4bf117df986dc2d2b9b9f0e0e7ba75c9b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Registration/checkEmail.html.twig", 1);
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
        $__internal_962b67b7b3d72c5ac23b77266d97904898d2072def20408a298c5ce7e3347c13 = $this->env->getExtension("native_profiler");
        $__internal_962b67b7b3d72c5ac23b77266d97904898d2072def20408a298c5ce7e3347c13->enter($__internal_962b67b7b3d72c5ac23b77266d97904898d2072def20408a298c5ce7e3347c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_962b67b7b3d72c5ac23b77266d97904898d2072def20408a298c5ce7e3347c13->leave($__internal_962b67b7b3d72c5ac23b77266d97904898d2072def20408a298c5ce7e3347c13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5c8654b8ade769d0070c7eccb80bc05c1af1c7d2871c0358d7a7657bd83e779 = $this->env->getExtension("native_profiler");
        $__internal_a5c8654b8ade769d0070c7eccb80bc05c1af1c7d2871c0358d7a7657bd83e779->enter($__internal_a5c8654b8ade769d0070c7eccb80bc05c1af1c7d2871c0358d7a7657bd83e779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a5c8654b8ade769d0070c7eccb80bc05c1af1c7d2871c0358d7a7657bd83e779->leave($__internal_a5c8654b8ade769d0070c7eccb80bc05c1af1c7d2871c0358d7a7657bd83e779_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
