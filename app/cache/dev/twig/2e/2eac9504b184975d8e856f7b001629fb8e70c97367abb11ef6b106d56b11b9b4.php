<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_becf303bc0733da16a3aca9356a1c9fc7d626e1c38930550a3f32c4c660c1c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fd28abf08214edf716fa0476bc0ad2e8854bf4fac4f5bb64a5eaf76db5d9c1 = $this->env->getExtension("native_profiler");
        $__internal_b8fd28abf08214edf716fa0476bc0ad2e8854bf4fac4f5bb64a5eaf76db5d9c1->enter($__internal_b8fd28abf08214edf716fa0476bc0ad2e8854bf4fac4f5bb64a5eaf76db5d9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8fd28abf08214edf716fa0476bc0ad2e8854bf4fac4f5bb64a5eaf76db5d9c1->leave($__internal_b8fd28abf08214edf716fa0476bc0ad2e8854bf4fac4f5bb64a5eaf76db5d9c1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4fee0bfb981340ed5f0405770a2104b7295e7e47ac0504e1fee492b54af7d19 = $this->env->getExtension("native_profiler");
        $__internal_b4fee0bfb981340ed5f0405770a2104b7295e7e47ac0504e1fee492b54af7d19->enter($__internal_b4fee0bfb981340ed5f0405770a2104b7295e7e47ac0504e1fee492b54af7d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4fee0bfb981340ed5f0405770a2104b7295e7e47ac0504e1fee492b54af7d19->leave($__internal_b4fee0bfb981340ed5f0405770a2104b7295e7e47ac0504e1fee492b54af7d19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
