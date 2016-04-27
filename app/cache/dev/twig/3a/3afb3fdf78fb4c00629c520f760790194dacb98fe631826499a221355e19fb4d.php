<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6c75ec206ca05fd1422590cfc4bd14766eeda67576842f7ab07e504e390f561f extends Twig_Template
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
        $__internal_0be580690648b0355e4111eee4a32f943630cd75eca05c8350ca021738732303 = $this->env->getExtension("native_profiler");
        $__internal_0be580690648b0355e4111eee4a32f943630cd75eca05c8350ca021738732303->enter($__internal_0be580690648b0355e4111eee4a32f943630cd75eca05c8350ca021738732303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0be580690648b0355e4111eee4a32f943630cd75eca05c8350ca021738732303->leave($__internal_0be580690648b0355e4111eee4a32f943630cd75eca05c8350ca021738732303_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4df818673188c85f3ec49ed8ea88e0e6277e3782ba65182696600b34d7abe953 = $this->env->getExtension("native_profiler");
        $__internal_4df818673188c85f3ec49ed8ea88e0e6277e3782ba65182696600b34d7abe953->enter($__internal_4df818673188c85f3ec49ed8ea88e0e6277e3782ba65182696600b34d7abe953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4df818673188c85f3ec49ed8ea88e0e6277e3782ba65182696600b34d7abe953->leave($__internal_4df818673188c85f3ec49ed8ea88e0e6277e3782ba65182696600b34d7abe953_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7a65ecaed6d8570ff8b7999d611f11e150192b524f5e879a538bdf9cb0c5fe7f = $this->env->getExtension("native_profiler");
        $__internal_7a65ecaed6d8570ff8b7999d611f11e150192b524f5e879a538bdf9cb0c5fe7f->enter($__internal_7a65ecaed6d8570ff8b7999d611f11e150192b524f5e879a538bdf9cb0c5fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7a65ecaed6d8570ff8b7999d611f11e150192b524f5e879a538bdf9cb0c5fe7f->leave($__internal_7a65ecaed6d8570ff8b7999d611f11e150192b524f5e879a538bdf9cb0c5fe7f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c81e7f4c779d4b3e7ad44cb123f64bd749775c5e6c112f7f1e289cc58ad15d64 = $this->env->getExtension("native_profiler");
        $__internal_c81e7f4c779d4b3e7ad44cb123f64bd749775c5e6c112f7f1e289cc58ad15d64->enter($__internal_c81e7f4c779d4b3e7ad44cb123f64bd749775c5e6c112f7f1e289cc58ad15d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c81e7f4c779d4b3e7ad44cb123f64bd749775c5e6c112f7f1e289cc58ad15d64->leave($__internal_c81e7f4c779d4b3e7ad44cb123f64bd749775c5e6c112f7f1e289cc58ad15d64_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
