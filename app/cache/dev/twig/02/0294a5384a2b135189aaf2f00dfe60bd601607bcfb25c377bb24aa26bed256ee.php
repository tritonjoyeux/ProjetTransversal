<?php

/* @Cook4us/Group/show_content.html.twig */
class __TwigTemplate_fac3f23035d44108321269c321f936694851fdaeb6c2eb2ace41e83fd3f507a2 extends Twig_Template
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
        $__internal_502c0343653b1f044c185f1ce35c4a0e03d0a56258e06bbd4b8a5db5f1493f3b = $this->env->getExtension("native_profiler");
        $__internal_502c0343653b1f044c185f1ce35c4a0e03d0a56258e06bbd4b8a5db5f1493f3b->enter($__internal_502c0343653b1f044c185f1ce35c4a0e03d0a56258e06bbd4b8a5db5f1493f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/show_content.html.twig"));

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
        
        $__internal_502c0343653b1f044c185f1ce35c4a0e03d0a56258e06bbd4b8a5db5f1493f3b->leave($__internal_502c0343653b1f044c185f1ce35c4a0e03d0a56258e06bbd4b8a5db5f1493f3b_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/show_content.html.twig";
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
