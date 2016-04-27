<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e47dab0b8b95b8781b6f47dc4a49f43e7c78f66141f2abfcf361942e93b77f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e9709310e84ff548d77db26f276dba7efcdbde240d7e02fcc495f072a24712db = $this->env->getExtension("native_profiler");
        $__internal_e9709310e84ff548d77db26f276dba7efcdbde240d7e02fcc495f072a24712db->enter($__internal_e9709310e84ff548d77db26f276dba7efcdbde240d7e02fcc495f072a24712db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9709310e84ff548d77db26f276dba7efcdbde240d7e02fcc495f072a24712db->leave($__internal_e9709310e84ff548d77db26f276dba7efcdbde240d7e02fcc495f072a24712db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97c610acd7d165bfbcb44c2a5b04c6b1bc3a55a8c69c24d449542f0f967bb8d4 = $this->env->getExtension("native_profiler");
        $__internal_97c610acd7d165bfbcb44c2a5b04c6b1bc3a55a8c69c24d449542f0f967bb8d4->enter($__internal_97c610acd7d165bfbcb44c2a5b04c6b1bc3a55a8c69c24d449542f0f967bb8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_97c610acd7d165bfbcb44c2a5b04c6b1bc3a55a8c69c24d449542f0f967bb8d4->leave($__internal_97c610acd7d165bfbcb44c2a5b04c6b1bc3a55a8c69c24d449542f0f967bb8d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0481604214daa4c487748f5a66f040c4e7807112fd3ce413239d912da64bf24 = $this->env->getExtension("native_profiler");
        $__internal_f0481604214daa4c487748f5a66f040c4e7807112fd3ce413239d912da64bf24->enter($__internal_f0481604214daa4c487748f5a66f040c4e7807112fd3ce413239d912da64bf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0481604214daa4c487748f5a66f040c4e7807112fd3ce413239d912da64bf24->leave($__internal_f0481604214daa4c487748f5a66f040c4e7807112fd3ce413239d912da64bf24_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f1561fb1a760f374a6205dc0c4daba1b5a917fa3db8558fe1ac983e54dabe1 = $this->env->getExtension("native_profiler");
        $__internal_c6f1561fb1a760f374a6205dc0c4daba1b5a917fa3db8558fe1ac983e54dabe1->enter($__internal_c6f1561fb1a760f374a6205dc0c4daba1b5a917fa3db8558fe1ac983e54dabe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6f1561fb1a760f374a6205dc0c4daba1b5a917fa3db8558fe1ac983e54dabe1->leave($__internal_c6f1561fb1a760f374a6205dc0c4daba1b5a917fa3db8558fe1ac983e54dabe1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
