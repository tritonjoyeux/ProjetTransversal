<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_33ec906264c88d6b100b1f87b41e9cb0e0b1d0ca0c3bcf6f8421309eccaef529 extends Twig_Template
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
        $__internal_f26a35b2e969653f96d32123ab0b30c6a9c0cdfff0a9fc909693155fc3e47bd5 = $this->env->getExtension("native_profiler");
        $__internal_f26a35b2e969653f96d32123ab0b30c6a9c0cdfff0a9fc909693155fc3e47bd5->enter($__internal_f26a35b2e969653f96d32123ab0b30c6a9c0cdfff0a9fc909693155fc3e47bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f26a35b2e969653f96d32123ab0b30c6a9c0cdfff0a9fc909693155fc3e47bd5->leave($__internal_f26a35b2e969653f96d32123ab0b30c6a9c0cdfff0a9fc909693155fc3e47bd5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_714443eff66a2f55e0c83a65a57b13de583b0ecfd0b3e8dafdee5e9ddb870d5f = $this->env->getExtension("native_profiler");
        $__internal_714443eff66a2f55e0c83a65a57b13de583b0ecfd0b3e8dafdee5e9ddb870d5f->enter($__internal_714443eff66a2f55e0c83a65a57b13de583b0ecfd0b3e8dafdee5e9ddb870d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_714443eff66a2f55e0c83a65a57b13de583b0ecfd0b3e8dafdee5e9ddb870d5f->leave($__internal_714443eff66a2f55e0c83a65a57b13de583b0ecfd0b3e8dafdee5e9ddb870d5f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_433abbf0c969d0df5406b4566110bb6d3475a7aaef14fe2f4fb1adaf1d9c6304 = $this->env->getExtension("native_profiler");
        $__internal_433abbf0c969d0df5406b4566110bb6d3475a7aaef14fe2f4fb1adaf1d9c6304->enter($__internal_433abbf0c969d0df5406b4566110bb6d3475a7aaef14fe2f4fb1adaf1d9c6304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_433abbf0c969d0df5406b4566110bb6d3475a7aaef14fe2f4fb1adaf1d9c6304->leave($__internal_433abbf0c969d0df5406b4566110bb6d3475a7aaef14fe2f4fb1adaf1d9c6304_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a286f6731b5d3f1c57f17fdd2fae19047b9d3ce6c87f4ba34ffaefc2e5fc2278 = $this->env->getExtension("native_profiler");
        $__internal_a286f6731b5d3f1c57f17fdd2fae19047b9d3ce6c87f4ba34ffaefc2e5fc2278->enter($__internal_a286f6731b5d3f1c57f17fdd2fae19047b9d3ce6c87f4ba34ffaefc2e5fc2278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a286f6731b5d3f1c57f17fdd2fae19047b9d3ce6c87f4ba34ffaefc2e5fc2278->leave($__internal_a286f6731b5d3f1c57f17fdd2fae19047b9d3ce6c87f4ba34ffaefc2e5fc2278_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
