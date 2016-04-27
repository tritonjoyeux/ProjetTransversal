<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8b682a2ddd9f2dfd3804ed9f73d8752dd4e3042e5adf6f6c27e933e7f84e71cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d31dc091215faa76a6e7a077f13d33d4b5f9b7f473cb643b357d7f9339ff461 = $this->env->getExtension("native_profiler");
        $__internal_1d31dc091215faa76a6e7a077f13d33d4b5f9b7f473cb643b357d7f9339ff461->enter($__internal_1d31dc091215faa76a6e7a077f13d33d4b5f9b7f473cb643b357d7f9339ff461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_1d31dc091215faa76a6e7a077f13d33d4b5f9b7f473cb643b357d7f9339ff461->leave($__internal_1d31dc091215faa76a6e7a077f13d33d4b5f9b7f473cb643b357d7f9339ff461_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
