<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eee022aa3e08ca438587e3420c90ae1cb52f13a9844a74cc1c4f19028afb1ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8904c985ccce4833cc59abd04530f985cc1d615da82a3a13b8ca35edc24a63f4 = $this->env->getExtension("native_profiler");
        $__internal_8904c985ccce4833cc59abd04530f985cc1d615da82a3a13b8ca35edc24a63f4->enter($__internal_8904c985ccce4833cc59abd04530f985cc1d615da82a3a13b8ca35edc24a63f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8904c985ccce4833cc59abd04530f985cc1d615da82a3a13b8ca35edc24a63f4->leave($__internal_8904c985ccce4833cc59abd04530f985cc1d615da82a3a13b8ca35edc24a63f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69cb9c56ea3794850dccd7393e407b2545420d0662a911d6e75ac70bf98fd6ea = $this->env->getExtension("native_profiler");
        $__internal_69cb9c56ea3794850dccd7393e407b2545420d0662a911d6e75ac70bf98fd6ea->enter($__internal_69cb9c56ea3794850dccd7393e407b2545420d0662a911d6e75ac70bf98fd6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_69cb9c56ea3794850dccd7393e407b2545420d0662a911d6e75ac70bf98fd6ea->leave($__internal_69cb9c56ea3794850dccd7393e407b2545420d0662a911d6e75ac70bf98fd6ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_787cfc0d29b460ce6a6da31ff4de2cca3ed6999d6bc8405086742a159bcb41a6 = $this->env->getExtension("native_profiler");
        $__internal_787cfc0d29b460ce6a6da31ff4de2cca3ed6999d6bc8405086742a159bcb41a6->enter($__internal_787cfc0d29b460ce6a6da31ff4de2cca3ed6999d6bc8405086742a159bcb41a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_787cfc0d29b460ce6a6da31ff4de2cca3ed6999d6bc8405086742a159bcb41a6->leave($__internal_787cfc0d29b460ce6a6da31ff4de2cca3ed6999d6bc8405086742a159bcb41a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
