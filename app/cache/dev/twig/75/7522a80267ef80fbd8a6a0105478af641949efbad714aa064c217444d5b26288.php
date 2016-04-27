<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_5b4adb6592177329631007db0505d800622f3eefe9f586695883fae18356a9d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_dccf86dfc87f374e9bd0e8613d5645a704cb9d96b2ca39e181d9dbeea1d1c8fb = $this->env->getExtension("native_profiler");
        $__internal_dccf86dfc87f374e9bd0e8613d5645a704cb9d96b2ca39e181d9dbeea1d1c8fb->enter($__internal_dccf86dfc87f374e9bd0e8613d5645a704cb9d96b2ca39e181d9dbeea1d1c8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dccf86dfc87f374e9bd0e8613d5645a704cb9d96b2ca39e181d9dbeea1d1c8fb->leave($__internal_dccf86dfc87f374e9bd0e8613d5645a704cb9d96b2ca39e181d9dbeea1d1c8fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_21d9d2d54113b9471b2ac710a59400ff3d18ccf5d8d4005d5ae7b9f813239b5a = $this->env->getExtension("native_profiler");
        $__internal_21d9d2d54113b9471b2ac710a59400ff3d18ccf5d8d4005d5ae7b9f813239b5a->enter($__internal_21d9d2d54113b9471b2ac710a59400ff3d18ccf5d8d4005d5ae7b9f813239b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_21d9d2d54113b9471b2ac710a59400ff3d18ccf5d8d4005d5ae7b9f813239b5a->leave($__internal_21d9d2d54113b9471b2ac710a59400ff3d18ccf5d8d4005d5ae7b9f813239b5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
