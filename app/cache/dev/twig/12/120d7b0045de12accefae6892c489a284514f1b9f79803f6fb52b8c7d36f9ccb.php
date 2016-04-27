<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3a4c5912f0f3ce9050756d6c74fe1207a14c6e2299c5c4d39f97b577beae8298 extends Twig_Template
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
        $__internal_b73408838927346626d886d427532c81ecce37b3c2fd055f4c4278c9b8ae0b42 = $this->env->getExtension("native_profiler");
        $__internal_b73408838927346626d886d427532c81ecce37b3c2fd055f4c4278c9b8ae0b42->enter($__internal_b73408838927346626d886d427532c81ecce37b3c2fd055f4c4278c9b8ae0b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b73408838927346626d886d427532c81ecce37b3c2fd055f4c4278c9b8ae0b42->leave($__internal_b73408838927346626d886d427532c81ecce37b3c2fd055f4c4278c9b8ae0b42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
