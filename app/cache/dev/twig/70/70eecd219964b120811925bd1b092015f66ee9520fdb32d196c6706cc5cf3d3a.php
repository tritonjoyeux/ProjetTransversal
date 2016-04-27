<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfe8bb8a6ef0e4d2ff7e14c2bdd95860f68c9e1f15d58e58c5c28ea11a644342 extends Twig_Template
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
        $__internal_5359edb33ee49df68c1d96c8fb6c4efb2d08419e7132b935138d7f2dd26c889c = $this->env->getExtension("native_profiler");
        $__internal_5359edb33ee49df68c1d96c8fb6c4efb2d08419e7132b935138d7f2dd26c889c->enter($__internal_5359edb33ee49df68c1d96c8fb6c4efb2d08419e7132b935138d7f2dd26c889c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5359edb33ee49df68c1d96c8fb6c4efb2d08419e7132b935138d7f2dd26c889c->leave($__internal_5359edb33ee49df68c1d96c8fb6c4efb2d08419e7132b935138d7f2dd26c889c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
