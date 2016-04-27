<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_a4d3df756718ff6ff6c3cfb1b0619e56ccfc7fb96f8f9099c104ea91f7597d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_24e72de1b44f18d6a87ca80e46a6d90cd2631b26d3996f247a9b8a1807b9749d = $this->env->getExtension("native_profiler");
        $__internal_24e72de1b44f18d6a87ca80e46a6d90cd2631b26d3996f247a9b8a1807b9749d->enter($__internal_24e72de1b44f18d6a87ca80e46a6d90cd2631b26d3996f247a9b8a1807b9749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e72de1b44f18d6a87ca80e46a6d90cd2631b26d3996f247a9b8a1807b9749d->leave($__internal_24e72de1b44f18d6a87ca80e46a6d90cd2631b26d3996f247a9b8a1807b9749d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ab260223ccedf886da60071fd3ad64198875090c45d2cf1955af73e779917a3 = $this->env->getExtension("native_profiler");
        $__internal_5ab260223ccedf886da60071fd3ad64198875090c45d2cf1955af73e779917a3->enter($__internal_5ab260223ccedf886da60071fd3ad64198875090c45d2cf1955af73e779917a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5ab260223ccedf886da60071fd3ad64198875090c45d2cf1955af73e779917a3->leave($__internal_5ab260223ccedf886da60071fd3ad64198875090c45d2cf1955af73e779917a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
