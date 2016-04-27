<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9440ac15306b827ee59a183b03b0122b4ba6cd78790e4f6aa423cb73c2b7c35e extends Twig_Template
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
        $__internal_73fb9faaa057c2e860cbc18c2098a7d6c65474ba13514ce97ab915c1eee0b63c = $this->env->getExtension("native_profiler");
        $__internal_73fb9faaa057c2e860cbc18c2098a7d6c65474ba13514ce97ab915c1eee0b63c->enter($__internal_73fb9faaa057c2e860cbc18c2098a7d6c65474ba13514ce97ab915c1eee0b63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_73fb9faaa057c2e860cbc18c2098a7d6c65474ba13514ce97ab915c1eee0b63c->leave($__internal_73fb9faaa057c2e860cbc18c2098a7d6c65474ba13514ce97ab915c1eee0b63c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
