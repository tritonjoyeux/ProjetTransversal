<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_847ed20a0140f4f9559fc50075fa75605462227e27f5b29ca81b344d1671de0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_b36dbfff2d48d785291f5014b3dfa87ed5208a4c66ff3777d429969975bde65c = $this->env->getExtension("native_profiler");
        $__internal_b36dbfff2d48d785291f5014b3dfa87ed5208a4c66ff3777d429969975bde65c->enter($__internal_b36dbfff2d48d785291f5014b3dfa87ed5208a4c66ff3777d429969975bde65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b36dbfff2d48d785291f5014b3dfa87ed5208a4c66ff3777d429969975bde65c->leave($__internal_b36dbfff2d48d785291f5014b3dfa87ed5208a4c66ff3777d429969975bde65c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a1b84780e997fa16a14131fd4c4f02eae0869ad17616c57a01604c56cf4a44e = $this->env->getExtension("native_profiler");
        $__internal_8a1b84780e997fa16a14131fd4c4f02eae0869ad17616c57a01604c56cf4a44e->enter($__internal_8a1b84780e997fa16a14131fd4c4f02eae0869ad17616c57a01604c56cf4a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_8a1b84780e997fa16a14131fd4c4f02eae0869ad17616c57a01604c56cf4a44e->leave($__internal_8a1b84780e997fa16a14131fd4c4f02eae0869ad17616c57a01604c56cf4a44e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
