<?php

/* @Cook4us/Group/show.html.twig */
class __TwigTemplate_e66558ec738c74c76df28cfd24d871a4eba2cd786775cd8f5f4c9f022de05601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Group/show.html.twig", 1);
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
        $__internal_ff26b7efb0bfede628bcf3fbc3fd1d484a9018ec2fe74edbac34ab180535d4d9 = $this->env->getExtension("native_profiler");
        $__internal_ff26b7efb0bfede628bcf3fbc3fd1d484a9018ec2fe74edbac34ab180535d4d9->enter($__internal_ff26b7efb0bfede628bcf3fbc3fd1d484a9018ec2fe74edbac34ab180535d4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff26b7efb0bfede628bcf3fbc3fd1d484a9018ec2fe74edbac34ab180535d4d9->leave($__internal_ff26b7efb0bfede628bcf3fbc3fd1d484a9018ec2fe74edbac34ab180535d4d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b578ef1c47ef7440014d9d146c2735afa8be3dc1037a0c332b06863fd27a97ab = $this->env->getExtension("native_profiler");
        $__internal_b578ef1c47ef7440014d9d146c2735afa8be3dc1037a0c332b06863fd27a97ab->enter($__internal_b578ef1c47ef7440014d9d146c2735afa8be3dc1037a0c332b06863fd27a97ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@Cook4us/Group/show.html.twig", 4)->display($context);
        
        $__internal_b578ef1c47ef7440014d9d146c2735afa8be3dc1037a0c332b06863fd27a97ab->leave($__internal_b578ef1c47ef7440014d9d146c2735afa8be3dc1037a0c332b06863fd27a97ab_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/show.html.twig";
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
