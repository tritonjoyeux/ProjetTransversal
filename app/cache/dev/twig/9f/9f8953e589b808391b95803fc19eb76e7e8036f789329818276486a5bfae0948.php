<?php

/* @Cook4us/Group/edit.html.twig */
class __TwigTemplate_bb7bd616e1f7a0579c980bb573e6ab494f0eb7ba042fcd5bc2b91e2d55aff41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Group/edit.html.twig", 1);
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
        $__internal_6a6d72a599a9f3fff4c43224de17b67beab702dfb4e9443bca3f09a81daa584d = $this->env->getExtension("native_profiler");
        $__internal_6a6d72a599a9f3fff4c43224de17b67beab702dfb4e9443bca3f09a81daa584d->enter($__internal_6a6d72a599a9f3fff4c43224de17b67beab702dfb4e9443bca3f09a81daa584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a6d72a599a9f3fff4c43224de17b67beab702dfb4e9443bca3f09a81daa584d->leave($__internal_6a6d72a599a9f3fff4c43224de17b67beab702dfb4e9443bca3f09a81daa584d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13cfcdcf034a094ca64f9bde19e96c3daf390486e6d76b4199ff38ba81ccfeda = $this->env->getExtension("native_profiler");
        $__internal_13cfcdcf034a094ca64f9bde19e96c3daf390486e6d76b4199ff38ba81ccfeda->enter($__internal_13cfcdcf034a094ca64f9bde19e96c3daf390486e6d76b4199ff38ba81ccfeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@Cook4us/Group/edit.html.twig", 4)->display($context);
        
        $__internal_13cfcdcf034a094ca64f9bde19e96c3daf390486e6d76b4199ff38ba81ccfeda->leave($__internal_13cfcdcf034a094ca64f9bde19e96c3daf390486e6d76b4199ff38ba81ccfeda_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
