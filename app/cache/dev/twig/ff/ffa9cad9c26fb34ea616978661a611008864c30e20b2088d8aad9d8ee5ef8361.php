<?php

/* Cook4usBundle:Registration:chief.html.twig */
class __TwigTemplate_95f562cf19242af0026c9566afa334e88ff2cbfe1813e8172ffa18fe8ae991f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "Cook4usBundle:Registration:chief.html.twig", 1);
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
        $__internal_cc7609437c35f5f63fdf68ba5a8e108648444bb023a9a18e3ca2f06544f23416 = $this->env->getExtension("native_profiler");
        $__internal_cc7609437c35f5f63fdf68ba5a8e108648444bb023a9a18e3ca2f06544f23416->enter($__internal_cc7609437c35f5f63fdf68ba5a8e108648444bb023a9a18e3ca2f06544f23416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Cook4usBundle:Registration:chief.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc7609437c35f5f63fdf68ba5a8e108648444bb023a9a18e3ca2f06544f23416->leave($__internal_cc7609437c35f5f63fdf68ba5a8e108648444bb023a9a18e3ca2f06544f23416_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3e4b4b8eb56862289e9fd136ee027fa9f9a9c891a114ddfc5668a61d5c0ab52 = $this->env->getExtension("native_profiler");
        $__internal_e3e4b4b8eb56862289e9fd136ee027fa9f9a9c891a114ddfc5668a61d5c0ab52->enter($__internal_e3e4b4b8eb56862289e9fd136ee027fa9f9a9c891a114ddfc5668a61d5c0ab52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "Cook4usBundle:Registration:chief.html.twig", 4)->display($context);
        
        $__internal_e3e4b4b8eb56862289e9fd136ee027fa9f9a9c891a114ddfc5668a61d5c0ab52->leave($__internal_e3e4b4b8eb56862289e9fd136ee027fa9f9a9c891a114ddfc5668a61d5c0ab52_prof);

    }

    public function getTemplateName()
    {
        return "Cook4usBundle:Registration:chief.html.twig";
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
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
