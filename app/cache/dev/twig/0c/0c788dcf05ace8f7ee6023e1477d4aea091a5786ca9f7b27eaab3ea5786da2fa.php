<?php

/* @Cook4us/Group/list.html.twig */
class __TwigTemplate_79e3b29b4384d4c945e41e3727c2b56d4726dfc9c9bc212287d38167842e4c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Group/list.html.twig", 1);
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
        $__internal_ba76689fbba15930d0cb1ad6e644ad434412c93babf2f11a769c340326d9e36c = $this->env->getExtension("native_profiler");
        $__internal_ba76689fbba15930d0cb1ad6e644ad434412c93babf2f11a769c340326d9e36c->enter($__internal_ba76689fbba15930d0cb1ad6e644ad434412c93babf2f11a769c340326d9e36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba76689fbba15930d0cb1ad6e644ad434412c93babf2f11a769c340326d9e36c->leave($__internal_ba76689fbba15930d0cb1ad6e644ad434412c93babf2f11a769c340326d9e36c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea48499a8d9f6323c2a689d456a3cf51b6935fa9a902c72554137e7fc4d9aacf = $this->env->getExtension("native_profiler");
        $__internal_ea48499a8d9f6323c2a689d456a3cf51b6935fa9a902c72554137e7fc4d9aacf->enter($__internal_ea48499a8d9f6323c2a689d456a3cf51b6935fa9a902c72554137e7fc4d9aacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@Cook4us/Group/list.html.twig", 4)->display($context);
        
        $__internal_ea48499a8d9f6323c2a689d456a3cf51b6935fa9a902c72554137e7fc4d9aacf->leave($__internal_ea48499a8d9f6323c2a689d456a3cf51b6935fa9a902c72554137e7fc4d9aacf_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/list.html.twig";
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
