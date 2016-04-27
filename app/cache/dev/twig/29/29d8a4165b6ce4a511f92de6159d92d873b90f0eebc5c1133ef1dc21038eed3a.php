<?php

/* @Cook4us/Resetting/reset_content.html.twig */
class __TwigTemplate_c90706e8e4208492f79e29ce17226bd7f7a3b2ee6c44f7e915981585b89cce03 extends Twig_Template
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
        $__internal_3b6ce0f4ba55d2fc035060b81285845612ef7294aaaec1c92b6985d3fff9ad68 = $this->env->getExtension("native_profiler");
        $__internal_3b6ce0f4ba55d2fc035060b81285845612ef7294aaaec1c92b6985d3fff9ad68->enter($__internal_3b6ce0f4ba55d2fc035060b81285845612ef7294aaaec1c92b6985d3fff9ad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3b6ce0f4ba55d2fc035060b81285845612ef7294aaaec1c92b6985d3fff9ad68->leave($__internal_3b6ce0f4ba55d2fc035060b81285845612ef7294aaaec1c92b6985d3fff9ad68_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
