<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2593a40fb10e8621f98e8c8084b94a87799b484f7a181f4df14d71bdeec5a24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_cb1d66d91bc013d2f04c85c7b74f4413eaac45928d2ec2bcf72ff88cee01d88f = $this->env->getExtension("native_profiler");
        $__internal_cb1d66d91bc013d2f04c85c7b74f4413eaac45928d2ec2bcf72ff88cee01d88f->enter($__internal_cb1d66d91bc013d2f04c85c7b74f4413eaac45928d2ec2bcf72ff88cee01d88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1d66d91bc013d2f04c85c7b74f4413eaac45928d2ec2bcf72ff88cee01d88f->leave($__internal_cb1d66d91bc013d2f04c85c7b74f4413eaac45928d2ec2bcf72ff88cee01d88f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e15278ae0840d4067056cfa37d5e065bdd9a9cd7c1a333c8a632fc7f4cb8fb = $this->env->getExtension("native_profiler");
        $__internal_f5e15278ae0840d4067056cfa37d5e065bdd9a9cd7c1a333c8a632fc7f4cb8fb->enter($__internal_f5e15278ae0840d4067056cfa37d5e065bdd9a9cd7c1a333c8a632fc7f4cb8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f5e15278ae0840d4067056cfa37d5e065bdd9a9cd7c1a333c8a632fc7f4cb8fb->leave($__internal_f5e15278ae0840d4067056cfa37d5e065bdd9a9cd7c1a333c8a632fc7f4cb8fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c74e3d66ed52b0c6aae18097ca950e15458f5bc5d4880c377b5da21040798f59 = $this->env->getExtension("native_profiler");
        $__internal_c74e3d66ed52b0c6aae18097ca950e15458f5bc5d4880c377b5da21040798f59->enter($__internal_c74e3d66ed52b0c6aae18097ca950e15458f5bc5d4880c377b5da21040798f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c74e3d66ed52b0c6aae18097ca950e15458f5bc5d4880c377b5da21040798f59->leave($__internal_c74e3d66ed52b0c6aae18097ca950e15458f5bc5d4880c377b5da21040798f59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
