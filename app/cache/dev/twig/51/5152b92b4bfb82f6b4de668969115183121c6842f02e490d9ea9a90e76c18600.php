<?php

/* @Cook4us/Profile/show_content.html.twig */
class __TwigTemplate_29679b84b2901b2415a37067ff4166ca2f36f921baaad2df481b38655bd2c47a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5c98784876a35942d6e23b38845354c473a298f5c3bf22d35a649b278e4608 = $this->env->getExtension("native_profiler");
        $__internal_2d5c98784876a35942d6e23b38845354c473a298f5c3bf22d35a649b278e4608->enter($__internal_2d5c98784876a35942d6e23b38845354c473a298f5c3bf22d35a649b278e4608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("chief", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "chief", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2d5c98784876a35942d6e23b38845354c473a298f5c3bf22d35a649b278e4608->leave($__internal_2d5c98784876a35942d6e23b38845354c473a298f5c3bf22d35a649b278e4608_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*     <p>{{ 'chief'|trans }}: {{ user.chief }}</p>*/
/* </div>*/
/* */
