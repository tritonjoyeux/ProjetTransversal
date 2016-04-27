<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_1590f346d5aac7f4ef4520134b737a1241bd5797b99bad50da05ef9f9d946d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7034ad78d2a60915321893cf921688818660c3cf4619414ed6c286e45c297d47 = $this->env->getExtension("native_profiler");
        $__internal_7034ad78d2a60915321893cf921688818660c3cf4619414ed6c286e45c297d47->enter($__internal_7034ad78d2a60915321893cf921688818660c3cf4619414ed6c286e45c297d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7034ad78d2a60915321893cf921688818660c3cf4619414ed6c286e45c297d47->leave($__internal_7034ad78d2a60915321893cf921688818660c3cf4619414ed6c286e45c297d47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e29aef416ff2979dee01d5216fe84bbccd188a65b4cf96d589eb87f6ac4638fb = $this->env->getExtension("native_profiler");
        $__internal_e29aef416ff2979dee01d5216fe84bbccd188a65b4cf96d589eb87f6ac4638fb->enter($__internal_e29aef416ff2979dee01d5216fe84bbccd188a65b4cf96d589eb87f6ac4638fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e29aef416ff2979dee01d5216fe84bbccd188a65b4cf96d589eb87f6ac4638fb->leave($__internal_e29aef416ff2979dee01d5216fe84bbccd188a65b4cf96d589eb87f6ac4638fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
