<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a69bdd515dba0e325f2e8e2b9db67c9478ea0580a4cf2cf9ab9af57a36d2de42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d376ff4f1d2c49ce89c2c7e890972266876054b530bb5aa96ad9489cfa696a35 = $this->env->getExtension("native_profiler");
        $__internal_d376ff4f1d2c49ce89c2c7e890972266876054b530bb5aa96ad9489cfa696a35->enter($__internal_d376ff4f1d2c49ce89c2c7e890972266876054b530bb5aa96ad9489cfa696a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d376ff4f1d2c49ce89c2c7e890972266876054b530bb5aa96ad9489cfa696a35->leave($__internal_d376ff4f1d2c49ce89c2c7e890972266876054b530bb5aa96ad9489cfa696a35_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7d8b476a6031d5563aeb099894c49bfa794402509092caf904fc87cacb505cf9 = $this->env->getExtension("native_profiler");
        $__internal_7d8b476a6031d5563aeb099894c49bfa794402509092caf904fc87cacb505cf9->enter($__internal_7d8b476a6031d5563aeb099894c49bfa794402509092caf904fc87cacb505cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7d8b476a6031d5563aeb099894c49bfa794402509092caf904fc87cacb505cf9->leave($__internal_7d8b476a6031d5563aeb099894c49bfa794402509092caf904fc87cacb505cf9_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_aec5eb1201989d95106b755a22686d03f721ad53a2ecc43f38085d78bb5ee496 = $this->env->getExtension("native_profiler");
        $__internal_aec5eb1201989d95106b755a22686d03f721ad53a2ecc43f38085d78bb5ee496->enter($__internal_aec5eb1201989d95106b755a22686d03f721ad53a2ecc43f38085d78bb5ee496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aec5eb1201989d95106b755a22686d03f721ad53a2ecc43f38085d78bb5ee496->leave($__internal_aec5eb1201989d95106b755a22686d03f721ad53a2ecc43f38085d78bb5ee496_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9d0dc9a01688744022a9a8414c5ab97bb736910245509258f03cd8e82d52105b = $this->env->getExtension("native_profiler");
        $__internal_9d0dc9a01688744022a9a8414c5ab97bb736910245509258f03cd8e82d52105b->enter($__internal_9d0dc9a01688744022a9a8414c5ab97bb736910245509258f03cd8e82d52105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_9d0dc9a01688744022a9a8414c5ab97bb736910245509258f03cd8e82d52105b->leave($__internal_9d0dc9a01688744022a9a8414c5ab97bb736910245509258f03cd8e82d52105b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
