<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6841a0d05477aab5516502634ea604c1922eb3b2febb6d1ee741e90504089802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f2ec31dbb56909c3efd2e7f6f1d621ea9b008b2497ef1cab914e8c389498a1a0 = $this->env->getExtension("native_profiler");
        $__internal_f2ec31dbb56909c3efd2e7f6f1d621ea9b008b2497ef1cab914e8c389498a1a0->enter($__internal_f2ec31dbb56909c3efd2e7f6f1d621ea9b008b2497ef1cab914e8c389498a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ec31dbb56909c3efd2e7f6f1d621ea9b008b2497ef1cab914e8c389498a1a0->leave($__internal_f2ec31dbb56909c3efd2e7f6f1d621ea9b008b2497ef1cab914e8c389498a1a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a31d0da19e7d8863bf917f732a9a70e40bb9f22b3d8d06a81fd6910939918879 = $this->env->getExtension("native_profiler");
        $__internal_a31d0da19e7d8863bf917f732a9a70e40bb9f22b3d8d06a81fd6910939918879->enter($__internal_a31d0da19e7d8863bf917f732a9a70e40bb9f22b3d8d06a81fd6910939918879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a31d0da19e7d8863bf917f732a9a70e40bb9f22b3d8d06a81fd6910939918879->leave($__internal_a31d0da19e7d8863bf917f732a9a70e40bb9f22b3d8d06a81fd6910939918879_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
