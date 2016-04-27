<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a1036c5e7fe6b58e9c9ac8f0f677d951478c49305b8292771470f6abdd7f4f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_079bacbb0a4e96457122e6e42fffbd97eea8fa148c083ae947c110a92bdc522b = $this->env->getExtension("native_profiler");
        $__internal_079bacbb0a4e96457122e6e42fffbd97eea8fa148c083ae947c110a92bdc522b->enter($__internal_079bacbb0a4e96457122e6e42fffbd97eea8fa148c083ae947c110a92bdc522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_079bacbb0a4e96457122e6e42fffbd97eea8fa148c083ae947c110a92bdc522b->leave($__internal_079bacbb0a4e96457122e6e42fffbd97eea8fa148c083ae947c110a92bdc522b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9931e66da33f32bcd0e32f38dcde18e830e536a2c7a38842edbffb8924107803 = $this->env->getExtension("native_profiler");
        $__internal_9931e66da33f32bcd0e32f38dcde18e830e536a2c7a38842edbffb8924107803->enter($__internal_9931e66da33f32bcd0e32f38dcde18e830e536a2c7a38842edbffb8924107803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9931e66da33f32bcd0e32f38dcde18e830e536a2c7a38842edbffb8924107803->leave($__internal_9931e66da33f32bcd0e32f38dcde18e830e536a2c7a38842edbffb8924107803_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
