<?php

/* @Cook4us/Registration/confirmed.html.twig */
class __TwigTemplate_8f763576adf415ae2f585235385f6d6276a942b2849737ec68634bc4f1518de6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Registration/confirmed.html.twig", 1);
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
        $__internal_61a30560b985859b8ba79b1ae2b416290d165d3e8355bf55687dae660e2a64f5 = $this->env->getExtension("native_profiler");
        $__internal_61a30560b985859b8ba79b1ae2b416290d165d3e8355bf55687dae660e2a64f5->enter($__internal_61a30560b985859b8ba79b1ae2b416290d165d3e8355bf55687dae660e2a64f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a30560b985859b8ba79b1ae2b416290d165d3e8355bf55687dae660e2a64f5->leave($__internal_61a30560b985859b8ba79b1ae2b416290d165d3e8355bf55687dae660e2a64f5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_928bfcd62bfa213c111f0cd5eb5dbf023ab67a95cbc7bc9978c3f650e16142c5 = $this->env->getExtension("native_profiler");
        $__internal_928bfcd62bfa213c111f0cd5eb5dbf023ab67a95cbc7bc9978c3f650e16142c5->enter($__internal_928bfcd62bfa213c111f0cd5eb5dbf023ab67a95cbc7bc9978c3f650e16142c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_928bfcd62bfa213c111f0cd5eb5dbf023ab67a95cbc7bc9978c3f650e16142c5->leave($__internal_928bfcd62bfa213c111f0cd5eb5dbf023ab67a95cbc7bc9978c3f650e16142c5_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
