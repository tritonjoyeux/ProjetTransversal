<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b3bf46ca7a2e2cffab1d83df173f39d6470664d5fc985663fe39ecbd36dce9f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c2769b1f4264f995b1afd404bb1cd99e4e1f2f463f2469e68a6fe03076b69b4c = $this->env->getExtension("native_profiler");
        $__internal_c2769b1f4264f995b1afd404bb1cd99e4e1f2f463f2469e68a6fe03076b69b4c->enter($__internal_c2769b1f4264f995b1afd404bb1cd99e4e1f2f463f2469e68a6fe03076b69b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2769b1f4264f995b1afd404bb1cd99e4e1f2f463f2469e68a6fe03076b69b4c->leave($__internal_c2769b1f4264f995b1afd404bb1cd99e4e1f2f463f2469e68a6fe03076b69b4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c20cb35817a652ccc54a8ce42c9336a78d0e18c37afc3a75a84a167f5c3e5edc = $this->env->getExtension("native_profiler");
        $__internal_c20cb35817a652ccc54a8ce42c9336a78d0e18c37afc3a75a84a167f5c3e5edc->enter($__internal_c20cb35817a652ccc54a8ce42c9336a78d0e18c37afc3a75a84a167f5c3e5edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c20cb35817a652ccc54a8ce42c9336a78d0e18c37afc3a75a84a167f5c3e5edc->leave($__internal_c20cb35817a652ccc54a8ce42c9336a78d0e18c37afc3a75a84a167f5c3e5edc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b50fd2418fa9257c250db24e3cf0651da11866be9335753a12818dae71d33266 = $this->env->getExtension("native_profiler");
        $__internal_b50fd2418fa9257c250db24e3cf0651da11866be9335753a12818dae71d33266->enter($__internal_b50fd2418fa9257c250db24e3cf0651da11866be9335753a12818dae71d33266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b50fd2418fa9257c250db24e3cf0651da11866be9335753a12818dae71d33266->leave($__internal_b50fd2418fa9257c250db24e3cf0651da11866be9335753a12818dae71d33266_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d469151aa3f915ec8b62f2de5316fe62642713ab4e7fbb3f54f66ea9596c5b24 = $this->env->getExtension("native_profiler");
        $__internal_d469151aa3f915ec8b62f2de5316fe62642713ab4e7fbb3f54f66ea9596c5b24->enter($__internal_d469151aa3f915ec8b62f2de5316fe62642713ab4e7fbb3f54f66ea9596c5b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d469151aa3f915ec8b62f2de5316fe62642713ab4e7fbb3f54f66ea9596c5b24->leave($__internal_d469151aa3f915ec8b62f2de5316fe62642713ab4e7fbb3f54f66ea9596c5b24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
