<?php

/* @Cook4us/Resetting/checkEmail.html.twig */
class __TwigTemplate_09d94ee6f248b42f345083be63fb511cc1e0ef35eb5bc36b65a3b61b0cdafc6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Resetting/checkEmail.html.twig", 1);
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
        $__internal_b10e1a0f1d4e4b0a228fe31fbf6a3323842b739238954142d12e9068d370e0bd = $this->env->getExtension("native_profiler");
        $__internal_b10e1a0f1d4e4b0a228fe31fbf6a3323842b739238954142d12e9068d370e0bd->enter($__internal_b10e1a0f1d4e4b0a228fe31fbf6a3323842b739238954142d12e9068d370e0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10e1a0f1d4e4b0a228fe31fbf6a3323842b739238954142d12e9068d370e0bd->leave($__internal_b10e1a0f1d4e4b0a228fe31fbf6a3323842b739238954142d12e9068d370e0bd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8dba513759ab5983b69679e940ba516104c4d89589c71e832718a98a84e0dec3 = $this->env->getExtension("native_profiler");
        $__internal_8dba513759ab5983b69679e940ba516104c4d89589c71e832718a98a84e0dec3->enter($__internal_8dba513759ab5983b69679e940ba516104c4d89589c71e832718a98a84e0dec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8dba513759ab5983b69679e940ba516104c4d89589c71e832718a98a84e0dec3->leave($__internal_8dba513759ab5983b69679e940ba516104c4d89589c71e832718a98a84e0dec3_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/checkEmail.html.twig";
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
