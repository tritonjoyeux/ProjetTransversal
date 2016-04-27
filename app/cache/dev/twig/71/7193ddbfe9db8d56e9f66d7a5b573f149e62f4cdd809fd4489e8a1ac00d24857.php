<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_beec0203a5e035ff9f9613cf397b7f41b2f1ec6a29560c9ab59469f94266e71b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_18e98351bb63dc90fa58f2ed4a74864dbee67f149f9f521c6bd0fa7891cd3a10 = $this->env->getExtension("native_profiler");
        $__internal_18e98351bb63dc90fa58f2ed4a74864dbee67f149f9f521c6bd0fa7891cd3a10->enter($__internal_18e98351bb63dc90fa58f2ed4a74864dbee67f149f9f521c6bd0fa7891cd3a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e98351bb63dc90fa58f2ed4a74864dbee67f149f9f521c6bd0fa7891cd3a10->leave($__internal_18e98351bb63dc90fa58f2ed4a74864dbee67f149f9f521c6bd0fa7891cd3a10_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7625f6b56f9dd58a421238990f290477f80b0857866507e36aa269a1e51859b2 = $this->env->getExtension("native_profiler");
        $__internal_7625f6b56f9dd58a421238990f290477f80b0857866507e36aa269a1e51859b2->enter($__internal_7625f6b56f9dd58a421238990f290477f80b0857866507e36aa269a1e51859b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7625f6b56f9dd58a421238990f290477f80b0857866507e36aa269a1e51859b2->leave($__internal_7625f6b56f9dd58a421238990f290477f80b0857866507e36aa269a1e51859b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
