<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7243eb7c7e867485fc36cacfa3976b40f2d4283085607be4ce4dfcba14848d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d0cf73ebedaafa412e656b781e081f71ccd85ad102f126eb6d582b75878a9905 = $this->env->getExtension("native_profiler");
        $__internal_d0cf73ebedaafa412e656b781e081f71ccd85ad102f126eb6d582b75878a9905->enter($__internal_d0cf73ebedaafa412e656b781e081f71ccd85ad102f126eb6d582b75878a9905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0cf73ebedaafa412e656b781e081f71ccd85ad102f126eb6d582b75878a9905->leave($__internal_d0cf73ebedaafa412e656b781e081f71ccd85ad102f126eb6d582b75878a9905_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9df13ca4993730572b86f7f489aa8d25f25290a587d949886c43f97ea15c4e82 = $this->env->getExtension("native_profiler");
        $__internal_9df13ca4993730572b86f7f489aa8d25f25290a587d949886c43f97ea15c4e82->enter($__internal_9df13ca4993730572b86f7f489aa8d25f25290a587d949886c43f97ea15c4e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9df13ca4993730572b86f7f489aa8d25f25290a587d949886c43f97ea15c4e82->leave($__internal_9df13ca4993730572b86f7f489aa8d25f25290a587d949886c43f97ea15c4e82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
