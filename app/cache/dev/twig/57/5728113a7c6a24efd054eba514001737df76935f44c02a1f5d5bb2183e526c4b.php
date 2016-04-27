<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9f4b1d11683dc86881e823aeff83f35584f4e55f9059da9e530415bd9e34fd09 extends Twig_Template
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
        $__internal_32b15971ab3cb33b2ac9dd41a951ff7db54daab4a04e3db5cbf7277adc693fc5 = $this->env->getExtension("native_profiler");
        $__internal_32b15971ab3cb33b2ac9dd41a951ff7db54daab4a04e3db5cbf7277adc693fc5->enter($__internal_32b15971ab3cb33b2ac9dd41a951ff7db54daab4a04e3db5cbf7277adc693fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_32b15971ab3cb33b2ac9dd41a951ff7db54daab4a04e3db5cbf7277adc693fc5->leave($__internal_32b15971ab3cb33b2ac9dd41a951ff7db54daab4a04e3db5cbf7277adc693fc5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
