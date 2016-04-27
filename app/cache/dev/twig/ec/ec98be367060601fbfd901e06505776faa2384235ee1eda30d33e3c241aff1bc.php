<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5be341dc35564e2a00f099560c0d7bf92e6e0afcc1a670981550ae70dba209ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b3d5b2fe6da6130e301550bb500090be3eb530bd548450e447110e7ad57a08b0 = $this->env->getExtension("native_profiler");
        $__internal_b3d5b2fe6da6130e301550bb500090be3eb530bd548450e447110e7ad57a08b0->enter($__internal_b3d5b2fe6da6130e301550bb500090be3eb530bd548450e447110e7ad57a08b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d5b2fe6da6130e301550bb500090be3eb530bd548450e447110e7ad57a08b0->leave($__internal_b3d5b2fe6da6130e301550bb500090be3eb530bd548450e447110e7ad57a08b0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_152f07c47682353bffc586f278571e81412b61c0aa51c248d4456b2120a9b5de = $this->env->getExtension("native_profiler");
        $__internal_152f07c47682353bffc586f278571e81412b61c0aa51c248d4456b2120a9b5de->enter($__internal_152f07c47682353bffc586f278571e81412b61c0aa51c248d4456b2120a9b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_152f07c47682353bffc586f278571e81412b61c0aa51c248d4456b2120a9b5de->leave($__internal_152f07c47682353bffc586f278571e81412b61c0aa51c248d4456b2120a9b5de_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
