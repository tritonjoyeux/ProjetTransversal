<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c0760b72ef06b4cf18a1fda02a2418ab575c91293644e088ae6b80ec3fd29efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4e556c1dd040f7f14f29dc44061f8a12aefe643e1f1bd123e656b65e8842e56a = $this->env->getExtension("native_profiler");
        $__internal_4e556c1dd040f7f14f29dc44061f8a12aefe643e1f1bd123e656b65e8842e56a->enter($__internal_4e556c1dd040f7f14f29dc44061f8a12aefe643e1f1bd123e656b65e8842e56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e556c1dd040f7f14f29dc44061f8a12aefe643e1f1bd123e656b65e8842e56a->leave($__internal_4e556c1dd040f7f14f29dc44061f8a12aefe643e1f1bd123e656b65e8842e56a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5c72a35593cd91e74575fc55a6174e1fbc4c7aafb1759fc42116283916a8d2c = $this->env->getExtension("native_profiler");
        $__internal_b5c72a35593cd91e74575fc55a6174e1fbc4c7aafb1759fc42116283916a8d2c->enter($__internal_b5c72a35593cd91e74575fc55a6174e1fbc4c7aafb1759fc42116283916a8d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b5c72a35593cd91e74575fc55a6174e1fbc4c7aafb1759fc42116283916a8d2c->leave($__internal_b5c72a35593cd91e74575fc55a6174e1fbc4c7aafb1759fc42116283916a8d2c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
