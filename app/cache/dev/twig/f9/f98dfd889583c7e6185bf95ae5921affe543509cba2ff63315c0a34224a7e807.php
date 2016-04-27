<?php

/* base.html.twig */
class __TwigTemplate_c44194ab505fad2f65be6df82252ca4203740eab13bb2898a5bc5d7ad33d2314 extends Twig_Template
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
        $__internal_2308813d255b95f1945895b001109a2cf5fa19dfec859a3139d0edc314c4fee3 = $this->env->getExtension("native_profiler");
        $__internal_2308813d255b95f1945895b001109a2cf5fa19dfec859a3139d0edc314c4fee3->enter($__internal_2308813d255b95f1945895b001109a2cf5fa19dfec859a3139d0edc314c4fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2308813d255b95f1945895b001109a2cf5fa19dfec859a3139d0edc314c4fee3->leave($__internal_2308813d255b95f1945895b001109a2cf5fa19dfec859a3139d0edc314c4fee3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_364b490de70892dfb775d160cbcf3ec6dac7ea889c1bf5a048ec0e9bffaa0a85 = $this->env->getExtension("native_profiler");
        $__internal_364b490de70892dfb775d160cbcf3ec6dac7ea889c1bf5a048ec0e9bffaa0a85->enter($__internal_364b490de70892dfb775d160cbcf3ec6dac7ea889c1bf5a048ec0e9bffaa0a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_364b490de70892dfb775d160cbcf3ec6dac7ea889c1bf5a048ec0e9bffaa0a85->leave($__internal_364b490de70892dfb775d160cbcf3ec6dac7ea889c1bf5a048ec0e9bffaa0a85_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b5cf83d2e37aa9f9a8b58306aaec22e105b51cf5bf52c1928ff050d08f80b31 = $this->env->getExtension("native_profiler");
        $__internal_2b5cf83d2e37aa9f9a8b58306aaec22e105b51cf5bf52c1928ff050d08f80b31->enter($__internal_2b5cf83d2e37aa9f9a8b58306aaec22e105b51cf5bf52c1928ff050d08f80b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b5cf83d2e37aa9f9a8b58306aaec22e105b51cf5bf52c1928ff050d08f80b31->leave($__internal_2b5cf83d2e37aa9f9a8b58306aaec22e105b51cf5bf52c1928ff050d08f80b31_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_27c48fa6c02ac582f8877b2cdd7491ca5e04b54b1bd62b16af59e048293d9cbc = $this->env->getExtension("native_profiler");
        $__internal_27c48fa6c02ac582f8877b2cdd7491ca5e04b54b1bd62b16af59e048293d9cbc->enter($__internal_27c48fa6c02ac582f8877b2cdd7491ca5e04b54b1bd62b16af59e048293d9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27c48fa6c02ac582f8877b2cdd7491ca5e04b54b1bd62b16af59e048293d9cbc->leave($__internal_27c48fa6c02ac582f8877b2cdd7491ca5e04b54b1bd62b16af59e048293d9cbc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8293a760f004b0c83b6f914c9f3697a41b52c346a3546bdd46511c1f4e0ecbba = $this->env->getExtension("native_profiler");
        $__internal_8293a760f004b0c83b6f914c9f3697a41b52c346a3546bdd46511c1f4e0ecbba->enter($__internal_8293a760f004b0c83b6f914c9f3697a41b52c346a3546bdd46511c1f4e0ecbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8293a760f004b0c83b6f914c9f3697a41b52c346a3546bdd46511c1f4e0ecbba->leave($__internal_8293a760f004b0c83b6f914c9f3697a41b52c346a3546bdd46511c1f4e0ecbba_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
