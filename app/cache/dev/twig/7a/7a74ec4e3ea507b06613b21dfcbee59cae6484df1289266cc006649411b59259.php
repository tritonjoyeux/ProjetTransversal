<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_02c982439f3cd8a3ad274782066c21b725b428d1943f0e7481d610f066956990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_424cf55c8a4cadcb826d7ec7eb8bb5fdf7a77d06c5e8f36541726ac3ebb8e7de = $this->env->getExtension("native_profiler");
        $__internal_424cf55c8a4cadcb826d7ec7eb8bb5fdf7a77d06c5e8f36541726ac3ebb8e7de->enter($__internal_424cf55c8a4cadcb826d7ec7eb8bb5fdf7a77d06c5e8f36541726ac3ebb8e7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_424cf55c8a4cadcb826d7ec7eb8bb5fdf7a77d06c5e8f36541726ac3ebb8e7de->leave($__internal_424cf55c8a4cadcb826d7ec7eb8bb5fdf7a77d06c5e8f36541726ac3ebb8e7de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c3c377b7e24803a8bc22398393dd1a4dd26e21df1da4f29df087dfba2d9cbd7 = $this->env->getExtension("native_profiler");
        $__internal_7c3c377b7e24803a8bc22398393dd1a4dd26e21df1da4f29df087dfba2d9cbd7->enter($__internal_7c3c377b7e24803a8bc22398393dd1a4dd26e21df1da4f29df087dfba2d9cbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7c3c377b7e24803a8bc22398393dd1a4dd26e21df1da4f29df087dfba2d9cbd7->leave($__internal_7c3c377b7e24803a8bc22398393dd1a4dd26e21df1da4f29df087dfba2d9cbd7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
