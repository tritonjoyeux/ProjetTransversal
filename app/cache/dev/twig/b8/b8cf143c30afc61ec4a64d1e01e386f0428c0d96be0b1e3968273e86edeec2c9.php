<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_07935811f38385086780cfa218f50e3d308d4d5fd18102f929be723d67094672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_826de05eeead3c564f792ea51d4100576eb9c765343065b04089677e5aca5539 = $this->env->getExtension("native_profiler");
        $__internal_826de05eeead3c564f792ea51d4100576eb9c765343065b04089677e5aca5539->enter($__internal_826de05eeead3c564f792ea51d4100576eb9c765343065b04089677e5aca5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826de05eeead3c564f792ea51d4100576eb9c765343065b04089677e5aca5539->leave($__internal_826de05eeead3c564f792ea51d4100576eb9c765343065b04089677e5aca5539_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_607df76ef34e2e0e5e98d2ffb29ee263c0e1d8755f84f83be0c1b76c0b897ce3 = $this->env->getExtension("native_profiler");
        $__internal_607df76ef34e2e0e5e98d2ffb29ee263c0e1d8755f84f83be0c1b76c0b897ce3->enter($__internal_607df76ef34e2e0e5e98d2ffb29ee263c0e1d8755f84f83be0c1b76c0b897ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_607df76ef34e2e0e5e98d2ffb29ee263c0e1d8755f84f83be0c1b76c0b897ce3->leave($__internal_607df76ef34e2e0e5e98d2ffb29ee263c0e1d8755f84f83be0c1b76c0b897ce3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
