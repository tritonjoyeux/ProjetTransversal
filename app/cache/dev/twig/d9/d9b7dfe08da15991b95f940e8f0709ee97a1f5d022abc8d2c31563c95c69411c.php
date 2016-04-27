<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_549dee8e1ffdd782b390466623e8c60cc162b3d8a09f204e1023c2dd5c29b170 extends Twig_Template
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
        $__internal_1798cb1bf16afe2dc55da0f562e019364199d687d630d37b68c142052b6070a4 = $this->env->getExtension("native_profiler");
        $__internal_1798cb1bf16afe2dc55da0f562e019364199d687d630d37b68c142052b6070a4->enter($__internal_1798cb1bf16afe2dc55da0f562e019364199d687d630d37b68c142052b6070a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1798cb1bf16afe2dc55da0f562e019364199d687d630d37b68c142052b6070a4->leave($__internal_1798cb1bf16afe2dc55da0f562e019364199d687d630d37b68c142052b6070a4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_410fe3168a832cc72dc234e877c82b5bfcaaade3fc5a0a3ca44d1e95483336b1 = $this->env->getExtension("native_profiler");
        $__internal_410fe3168a832cc72dc234e877c82b5bfcaaade3fc5a0a3ca44d1e95483336b1->enter($__internal_410fe3168a832cc72dc234e877c82b5bfcaaade3fc5a0a3ca44d1e95483336b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_410fe3168a832cc72dc234e877c82b5bfcaaade3fc5a0a3ca44d1e95483336b1->leave($__internal_410fe3168a832cc72dc234e877c82b5bfcaaade3fc5a0a3ca44d1e95483336b1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2e9a11f552fbceaa93b15c4d0e4c30b88fbb506043638adbc5725abaad936b9 = $this->env->getExtension("native_profiler");
        $__internal_e2e9a11f552fbceaa93b15c4d0e4c30b88fbb506043638adbc5725abaad936b9->enter($__internal_e2e9a11f552fbceaa93b15c4d0e4c30b88fbb506043638adbc5725abaad936b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2e9a11f552fbceaa93b15c4d0e4c30b88fbb506043638adbc5725abaad936b9->leave($__internal_e2e9a11f552fbceaa93b15c4d0e4c30b88fbb506043638adbc5725abaad936b9_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_459726d71e98f1f92ea39f4eb0c1548cbf1498508a275dbf68bcc9e9fc1810b5 = $this->env->getExtension("native_profiler");
        $__internal_459726d71e98f1f92ea39f4eb0c1548cbf1498508a275dbf68bcc9e9fc1810b5->enter($__internal_459726d71e98f1f92ea39f4eb0c1548cbf1498508a275dbf68bcc9e9fc1810b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_459726d71e98f1f92ea39f4eb0c1548cbf1498508a275dbf68bcc9e9fc1810b5->leave($__internal_459726d71e98f1f92ea39f4eb0c1548cbf1498508a275dbf68bcc9e9fc1810b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
