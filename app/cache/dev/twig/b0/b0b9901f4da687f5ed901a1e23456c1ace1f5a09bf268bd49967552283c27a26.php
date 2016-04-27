<?php

/* @Cook4us/Registration/email.txt.twig */
class __TwigTemplate_c534f90a8cd49e220e6363eaf554d55773209e0026c4176976310b10ef541b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3333a8a3c14c5345f036b66c0eb48925f2a02c726256692eee29b922c3576bb5 = $this->env->getExtension("native_profiler");
        $__internal_3333a8a3c14c5345f036b66c0eb48925f2a02c726256692eee29b922c3576bb5->enter($__internal_3333a8a3c14c5345f036b66c0eb48925f2a02c726256692eee29b922c3576bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3333a8a3c14c5345f036b66c0eb48925f2a02c726256692eee29b922c3576bb5->leave($__internal_3333a8a3c14c5345f036b66c0eb48925f2a02c726256692eee29b922c3576bb5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_327ee8301272d693d580dff9fe9adba2e7b0caef5441c1dcac12d14e3f9f7c00 = $this->env->getExtension("native_profiler");
        $__internal_327ee8301272d693d580dff9fe9adba2e7b0caef5441c1dcac12d14e3f9f7c00->enter($__internal_327ee8301272d693d580dff9fe9adba2e7b0caef5441c1dcac12d14e3f9f7c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_327ee8301272d693d580dff9fe9adba2e7b0caef5441c1dcac12d14e3f9f7c00->leave($__internal_327ee8301272d693d580dff9fe9adba2e7b0caef5441c1dcac12d14e3f9f7c00_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ecfe32bb183ada7feadf24e2ef313bc3916cc43c44db8c9ae70f76508e42868c = $this->env->getExtension("native_profiler");
        $__internal_ecfe32bb183ada7feadf24e2ef313bc3916cc43c44db8c9ae70f76508e42868c->enter($__internal_ecfe32bb183ada7feadf24e2ef313bc3916cc43c44db8c9ae70f76508e42868c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ecfe32bb183ada7feadf24e2ef313bc3916cc43c44db8c9ae70f76508e42868c->leave($__internal_ecfe32bb183ada7feadf24e2ef313bc3916cc43c44db8c9ae70f76508e42868c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84ff1bbafb290ead2b472dd16a7c1408c8d19d2841e34b73391949f355f5d81f = $this->env->getExtension("native_profiler");
        $__internal_84ff1bbafb290ead2b472dd16a7c1408c8d19d2841e34b73391949f355f5d81f->enter($__internal_84ff1bbafb290ead2b472dd16a7c1408c8d19d2841e34b73391949f355f5d81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_84ff1bbafb290ead2b472dd16a7c1408c8d19d2841e34b73391949f355f5d81f->leave($__internal_84ff1bbafb290ead2b472dd16a7c1408c8d19d2841e34b73391949f355f5d81f_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
