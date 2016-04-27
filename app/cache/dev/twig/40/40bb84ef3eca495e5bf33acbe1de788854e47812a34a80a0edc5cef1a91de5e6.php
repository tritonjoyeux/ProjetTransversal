<?php

/* @Cook4us/Resetting/email.txt.twig */
class __TwigTemplate_12b793211d269654949f19df2afca2c8b089ed06107ec4a4d7927ff91c86c829 extends Twig_Template
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
        $__internal_ccc89a12ba0c5f9d497bd7ea115456f77e18f851786fd3eec722b5e169aa7bd7 = $this->env->getExtension("native_profiler");
        $__internal_ccc89a12ba0c5f9d497bd7ea115456f77e18f851786fd3eec722b5e169aa7bd7->enter($__internal_ccc89a12ba0c5f9d497bd7ea115456f77e18f851786fd3eec722b5e169aa7bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ccc89a12ba0c5f9d497bd7ea115456f77e18f851786fd3eec722b5e169aa7bd7->leave($__internal_ccc89a12ba0c5f9d497bd7ea115456f77e18f851786fd3eec722b5e169aa7bd7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6dc2ed92d904df8db8584c041a356feba225311d8c8705070745eb21f16f80ce = $this->env->getExtension("native_profiler");
        $__internal_6dc2ed92d904df8db8584c041a356feba225311d8c8705070745eb21f16f80ce->enter($__internal_6dc2ed92d904df8db8584c041a356feba225311d8c8705070745eb21f16f80ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_6dc2ed92d904df8db8584c041a356feba225311d8c8705070745eb21f16f80ce->leave($__internal_6dc2ed92d904df8db8584c041a356feba225311d8c8705070745eb21f16f80ce_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_977f1d6212c827f62a2683f6044fe041b012a64f82a4ffc9693b002c76d79f4c = $this->env->getExtension("native_profiler");
        $__internal_977f1d6212c827f62a2683f6044fe041b012a64f82a4ffc9693b002c76d79f4c->enter($__internal_977f1d6212c827f62a2683f6044fe041b012a64f82a4ffc9693b002c76d79f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_977f1d6212c827f62a2683f6044fe041b012a64f82a4ffc9693b002c76d79f4c->leave($__internal_977f1d6212c827f62a2683f6044fe041b012a64f82a4ffc9693b002c76d79f4c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_75482c5f13a5e7e5ccaab2bb381e379ef97543170360da77c4ef660fc21509a3 = $this->env->getExtension("native_profiler");
        $__internal_75482c5f13a5e7e5ccaab2bb381e379ef97543170360da77c4ef660fc21509a3->enter($__internal_75482c5f13a5e7e5ccaab2bb381e379ef97543170360da77c4ef660fc21509a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_75482c5f13a5e7e5ccaab2bb381e379ef97543170360da77c4ef660fc21509a3->leave($__internal_75482c5f13a5e7e5ccaab2bb381e379ef97543170360da77c4ef660fc21509a3_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Resetting/email.txt.twig";
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
