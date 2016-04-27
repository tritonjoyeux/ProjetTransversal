<?php

/* ::base.html.twig */
class __TwigTemplate_cabe8683444051050c5f839f4063769d9d8f0710622997d1190be7458cd6bb10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82a47e10281c9306f42de0157d94ecd2248dc5663290d75082bcb7ea5cb70a8f = $this->env->getExtension("native_profiler");
        $__internal_82a47e10281c9306f42de0157d94ecd2248dc5663290d75082bcb7ea5cb70a8f->enter($__internal_82a47e10281c9306f42de0157d94ecd2248dc5663290d75082bcb7ea5cb70a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_82a47e10281c9306f42de0157d94ecd2248dc5663290d75082bcb7ea5cb70a8f->leave($__internal_82a47e10281c9306f42de0157d94ecd2248dc5663290d75082bcb7ea5cb70a8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3c924e9290d9e9b73b7eaa802070e4f6513be46b7dc52417709910e3950809 = $this->env->getExtension("native_profiler");
        $__internal_8f3c924e9290d9e9b73b7eaa802070e4f6513be46b7dc52417709910e3950809->enter($__internal_8f3c924e9290d9e9b73b7eaa802070e4f6513be46b7dc52417709910e3950809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f3c924e9290d9e9b73b7eaa802070e4f6513be46b7dc52417709910e3950809->leave($__internal_8f3c924e9290d9e9b73b7eaa802070e4f6513be46b7dc52417709910e3950809_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e05101451db0ca84b64d49aed0b7ae49447ae3a554bdd5c030aa21cabf70ad7b = $this->env->getExtension("native_profiler");
        $__internal_e05101451db0ca84b64d49aed0b7ae49447ae3a554bdd5c030aa21cabf70ad7b->enter($__internal_e05101451db0ca84b64d49aed0b7ae49447ae3a554bdd5c030aa21cabf70ad7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e05101451db0ca84b64d49aed0b7ae49447ae3a554bdd5c030aa21cabf70ad7b->leave($__internal_e05101451db0ca84b64d49aed0b7ae49447ae3a554bdd5c030aa21cabf70ad7b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_65d4a18de585a3af4d09b08cbf8297050b41eb0807bcbaf5745c8b45704a84a2 = $this->env->getExtension("native_profiler");
        $__internal_65d4a18de585a3af4d09b08cbf8297050b41eb0807bcbaf5745c8b45704a84a2->enter($__internal_65d4a18de585a3af4d09b08cbf8297050b41eb0807bcbaf5745c8b45704a84a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_65d4a18de585a3af4d09b08cbf8297050b41eb0807bcbaf5745c8b45704a84a2->leave($__internal_65d4a18de585a3af4d09b08cbf8297050b41eb0807bcbaf5745c8b45704a84a2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0013e8182175df3dfed994763b2110d52410ed2d7bf3fa03ae5f22a0be711d7f = $this->env->getExtension("native_profiler");
        $__internal_0013e8182175df3dfed994763b2110d52410ed2d7bf3fa03ae5f22a0be711d7f->enter($__internal_0013e8182175df3dfed994763b2110d52410ed2d7bf3fa03ae5f22a0be711d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0013e8182175df3dfed994763b2110d52410ed2d7bf3fa03ae5f22a0be711d7f->leave($__internal_0013e8182175df3dfed994763b2110d52410ed2d7bf3fa03ae5f22a0be711d7f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
