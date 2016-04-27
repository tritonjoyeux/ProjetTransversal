<?php

/* @Cook4us/Resetting/reset.html.twig */
class __TwigTemplate_41e7484b47e6f9ca1f3b6ee58ba54e66e550f474520ddbb18d2997c743b59cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Resetting/reset.html.twig", 1);
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
        $__internal_089c29de5d8d46fafd5e61d720b96aa7034daa954a2a6eaf397828c2ef78a5ff = $this->env->getExtension("native_profiler");
        $__internal_089c29de5d8d46fafd5e61d720b96aa7034daa954a2a6eaf397828c2ef78a5ff->enter($__internal_089c29de5d8d46fafd5e61d720b96aa7034daa954a2a6eaf397828c2ef78a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089c29de5d8d46fafd5e61d720b96aa7034daa954a2a6eaf397828c2ef78a5ff->leave($__internal_089c29de5d8d46fafd5e61d720b96aa7034daa954a2a6eaf397828c2ef78a5ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_279c1f42ca060a928d0e1e667bd21e7b23572f1cd26e09fe07c1e83fa192335a = $this->env->getExtension("native_profiler");
        $__internal_279c1f42ca060a928d0e1e667bd21e7b23572f1cd26e09fe07c1e83fa192335a->enter($__internal_279c1f42ca060a928d0e1e667bd21e7b23572f1cd26e09fe07c1e83fa192335a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@Cook4us/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_279c1f42ca060a928d0e1e667bd21e7b23572f1cd26e09fe07c1e83fa192335a->leave($__internal_279c1f42ca060a928d0e1e667bd21e7b23572f1cd26e09fe07c1e83fa192335a_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/reset.html.twig";
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
