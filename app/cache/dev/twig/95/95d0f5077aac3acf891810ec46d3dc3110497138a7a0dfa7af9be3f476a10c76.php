<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9024407c2553185db32a2264a9741bedd6b2abbc6e394073c37ff0f2af27596d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_df6c49ac91587d15100b5a1784b1dc333932ae72755615bec47835622887d244 = $this->env->getExtension("native_profiler");
        $__internal_df6c49ac91587d15100b5a1784b1dc333932ae72755615bec47835622887d244->enter($__internal_df6c49ac91587d15100b5a1784b1dc333932ae72755615bec47835622887d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6c49ac91587d15100b5a1784b1dc333932ae72755615bec47835622887d244->leave($__internal_df6c49ac91587d15100b5a1784b1dc333932ae72755615bec47835622887d244_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_697c808c5db9f48d4b429af353d33a1f2bfc0adcee6a8759e3e06d53f8bf2a73 = $this->env->getExtension("native_profiler");
        $__internal_697c808c5db9f48d4b429af353d33a1f2bfc0adcee6a8759e3e06d53f8bf2a73->enter($__internal_697c808c5db9f48d4b429af353d33a1f2bfc0adcee6a8759e3e06d53f8bf2a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_697c808c5db9f48d4b429af353d33a1f2bfc0adcee6a8759e3e06d53f8bf2a73->leave($__internal_697c808c5db9f48d4b429af353d33a1f2bfc0adcee6a8759e3e06d53f8bf2a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
