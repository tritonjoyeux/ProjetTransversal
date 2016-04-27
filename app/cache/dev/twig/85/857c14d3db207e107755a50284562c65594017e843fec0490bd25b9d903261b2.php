<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_5a7f26e6a2762173462e62b653c239d518df51e2b520dc5c98d69f570beee109 extends Twig_Template
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
        $__internal_7ec2cda1d1d0ebab246f38e42e43310d8259d84f537524e1fc66fd6a2a805231 = $this->env->getExtension("native_profiler");
        $__internal_7ec2cda1d1d0ebab246f38e42e43310d8259d84f537524e1fc66fd6a2a805231->enter($__internal_7ec2cda1d1d0ebab246f38e42e43310d8259d84f537524e1fc66fd6a2a805231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7ec2cda1d1d0ebab246f38e42e43310d8259d84f537524e1fc66fd6a2a805231->leave($__internal_7ec2cda1d1d0ebab246f38e42e43310d8259d84f537524e1fc66fd6a2a805231_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
