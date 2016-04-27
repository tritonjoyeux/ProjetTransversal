<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_db4a62f27465398831b32090c12bde2b722b82c46361d82efe2df31832b51026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_5e4c93221863aebf556db85736e7ac257d4ab84ba397e74cda26a0b6559c4942 = $this->env->getExtension("native_profiler");
        $__internal_5e4c93221863aebf556db85736e7ac257d4ab84ba397e74cda26a0b6559c4942->enter($__internal_5e4c93221863aebf556db85736e7ac257d4ab84ba397e74cda26a0b6559c4942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4c93221863aebf556db85736e7ac257d4ab84ba397e74cda26a0b6559c4942->leave($__internal_5e4c93221863aebf556db85736e7ac257d4ab84ba397e74cda26a0b6559c4942_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7522a0286066af5201cd85d884ba8c28d73870fab33564cbe9b615de28b2a6d4 = $this->env->getExtension("native_profiler");
        $__internal_7522a0286066af5201cd85d884ba8c28d73870fab33564cbe9b615de28b2a6d4->enter($__internal_7522a0286066af5201cd85d884ba8c28d73870fab33564cbe9b615de28b2a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_7522a0286066af5201cd85d884ba8c28d73870fab33564cbe9b615de28b2a6d4->leave($__internal_7522a0286066af5201cd85d884ba8c28d73870fab33564cbe9b615de28b2a6d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
