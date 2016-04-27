<?php

/* @Cook4us/Profile/show.html.twig */
class __TwigTemplate_e02b76738012d9d6861d31a2204e80c5dc0ea65c83a3e8781e2a9a48435eee0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@Cook4us/Profile/show.html.twig", 1);
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
        $__internal_bfdeb18a31fc1342b43f102ec83619eeffcf6ae4aefb865061f58c664d116343 = $this->env->getExtension("native_profiler");
        $__internal_bfdeb18a31fc1342b43f102ec83619eeffcf6ae4aefb865061f58c664d116343->enter($__internal_bfdeb18a31fc1342b43f102ec83619eeffcf6ae4aefb865061f58c664d116343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdeb18a31fc1342b43f102ec83619eeffcf6ae4aefb865061f58c664d116343->leave($__internal_bfdeb18a31fc1342b43f102ec83619eeffcf6ae4aefb865061f58c664d116343_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b528d9903f90a2c95019104489c511b86b997251d2f33d417e599b36ea2874a5 = $this->env->getExtension("native_profiler");
        $__internal_b528d9903f90a2c95019104489c511b86b997251d2f33d417e599b36ea2874a5->enter($__internal_b528d9903f90a2c95019104489c511b86b997251d2f33d417e599b36ea2874a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@Cook4us/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b528d9903f90a2c95019104489c511b86b997251d2f33d417e599b36ea2874a5->leave($__internal_b528d9903f90a2c95019104489c511b86b997251d2f33d417e599b36ea2874a5_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
