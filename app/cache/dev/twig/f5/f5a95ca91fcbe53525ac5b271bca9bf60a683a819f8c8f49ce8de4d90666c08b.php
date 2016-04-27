<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bb9c14713b923e4bc0346b1d7733be8879e6e6924d58cb051543fba91a0f2653 extends Twig_Template
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
        $__internal_054829e308a44b92a1e200de5fb769dc052e29f32ed6ec17065e1eac8f5f19a3 = $this->env->getExtension("native_profiler");
        $__internal_054829e308a44b92a1e200de5fb769dc052e29f32ed6ec17065e1eac8f5f19a3->enter($__internal_054829e308a44b92a1e200de5fb769dc052e29f32ed6ec17065e1eac8f5f19a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_054829e308a44b92a1e200de5fb769dc052e29f32ed6ec17065e1eac8f5f19a3->leave($__internal_054829e308a44b92a1e200de5fb769dc052e29f32ed6ec17065e1eac8f5f19a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
