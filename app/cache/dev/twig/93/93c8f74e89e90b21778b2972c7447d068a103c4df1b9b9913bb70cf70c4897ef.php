<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_f2f3b7c687556b0245fbe753c51816c949dbbe0053178db7d70068dc661b0642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_10160fd827c7b574d5d5c1e61dd62bc2e80b1622053b56bdb150c6de7b93931a = $this->env->getExtension("native_profiler");
        $__internal_10160fd827c7b574d5d5c1e61dd62bc2e80b1622053b56bdb150c6de7b93931a->enter($__internal_10160fd827c7b574d5d5c1e61dd62bc2e80b1622053b56bdb150c6de7b93931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10160fd827c7b574d5d5c1e61dd62bc2e80b1622053b56bdb150c6de7b93931a->leave($__internal_10160fd827c7b574d5d5c1e61dd62bc2e80b1622053b56bdb150c6de7b93931a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1e78b218b7966c7e66f9fc8a14bbbba69317d1de20cc4e943b4b8ec75cde80f = $this->env->getExtension("native_profiler");
        $__internal_e1e78b218b7966c7e66f9fc8a14bbbba69317d1de20cc4e943b4b8ec75cde80f->enter($__internal_e1e78b218b7966c7e66f9fc8a14bbbba69317d1de20cc4e943b4b8ec75cde80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_e1e78b218b7966c7e66f9fc8a14bbbba69317d1de20cc4e943b4b8ec75cde80f->leave($__internal_e1e78b218b7966c7e66f9fc8a14bbbba69317d1de20cc4e943b4b8ec75cde80f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
