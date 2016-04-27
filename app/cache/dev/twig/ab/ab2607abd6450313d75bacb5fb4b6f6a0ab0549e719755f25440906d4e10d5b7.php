<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_e50431967fbd1e4c598e8fffef1ff2f39923f1ae1fafaab4852eb3e61c3a485e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e37385f5cb1077d0fc636842af84c56005485095120fe6788eec4e915e3a51fd = $this->env->getExtension("native_profiler");
        $__internal_e37385f5cb1077d0fc636842af84c56005485095120fe6788eec4e915e3a51fd->enter($__internal_e37385f5cb1077d0fc636842af84c56005485095120fe6788eec4e915e3a51fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37385f5cb1077d0fc636842af84c56005485095120fe6788eec4e915e3a51fd->leave($__internal_e37385f5cb1077d0fc636842af84c56005485095120fe6788eec4e915e3a51fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78f99594305d3b5df13ce7a0281e1ca69ee0f1ba89214a8b84c892600eec49f4 = $this->env->getExtension("native_profiler");
        $__internal_78f99594305d3b5df13ce7a0281e1ca69ee0f1ba89214a8b84c892600eec49f4->enter($__internal_78f99594305d3b5df13ce7a0281e1ca69ee0f1ba89214a8b84c892600eec49f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_78f99594305d3b5df13ce7a0281e1ca69ee0f1ba89214a8b84c892600eec49f4->leave($__internal_78f99594305d3b5df13ce7a0281e1ca69ee0f1ba89214a8b84c892600eec49f4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
