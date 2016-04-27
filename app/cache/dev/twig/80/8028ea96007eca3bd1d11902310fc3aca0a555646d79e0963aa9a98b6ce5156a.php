<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_6d0d74a4f25d4694137a1af7d2feeb4d8efce36b00ed4d528cd014c1d6246c2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c4369be72a0e4a095ae3e48fb6aa9c0643eb2510e4094e19004c9aea9475e08e = $this->env->getExtension("native_profiler");
        $__internal_c4369be72a0e4a095ae3e48fb6aa9c0643eb2510e4094e19004c9aea9475e08e->enter($__internal_c4369be72a0e4a095ae3e48fb6aa9c0643eb2510e4094e19004c9aea9475e08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4369be72a0e4a095ae3e48fb6aa9c0643eb2510e4094e19004c9aea9475e08e->leave($__internal_c4369be72a0e4a095ae3e48fb6aa9c0643eb2510e4094e19004c9aea9475e08e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dabe2122b980fbc48cb36c4a6af840675489329bd04bc12b61416a9fe20b72f = $this->env->getExtension("native_profiler");
        $__internal_3dabe2122b980fbc48cb36c4a6af840675489329bd04bc12b61416a9fe20b72f->enter($__internal_3dabe2122b980fbc48cb36c4a6af840675489329bd04bc12b61416a9fe20b72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3dabe2122b980fbc48cb36c4a6af840675489329bd04bc12b61416a9fe20b72f->leave($__internal_3dabe2122b980fbc48cb36c4a6af840675489329bd04bc12b61416a9fe20b72f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
