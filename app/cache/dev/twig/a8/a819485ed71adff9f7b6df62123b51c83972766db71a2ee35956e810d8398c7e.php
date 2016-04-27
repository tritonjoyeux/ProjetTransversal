<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7dfb8910a42acf745b33b0cfc64d0d492ce57078f8cc38dc1a63b2972bda12dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2f1718e7ee48de2d28afc9a1c0c6841613b66143a30c1a8e19002d506245c90 = $this->env->getExtension("native_profiler");
        $__internal_c2f1718e7ee48de2d28afc9a1c0c6841613b66143a30c1a8e19002d506245c90->enter($__internal_c2f1718e7ee48de2d28afc9a1c0c6841613b66143a30c1a8e19002d506245c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2f1718e7ee48de2d28afc9a1c0c6841613b66143a30c1a8e19002d506245c90->leave($__internal_c2f1718e7ee48de2d28afc9a1c0c6841613b66143a30c1a8e19002d506245c90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41a53cb8dba66b380034fde4078d8a0d1c40712918f07c12e89e9dd4b6694bc8 = $this->env->getExtension("native_profiler");
        $__internal_41a53cb8dba66b380034fde4078d8a0d1c40712918f07c12e89e9dd4b6694bc8->enter($__internal_41a53cb8dba66b380034fde4078d8a0d1c40712918f07c12e89e9dd4b6694bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_41a53cb8dba66b380034fde4078d8a0d1c40712918f07c12e89e9dd4b6694bc8->leave($__internal_41a53cb8dba66b380034fde4078d8a0d1c40712918f07c12e89e9dd4b6694bc8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc8cc4c88d5744d52c881972affd651b7ac8c84f20637930de55867d319b5bcf = $this->env->getExtension("native_profiler");
        $__internal_cc8cc4c88d5744d52c881972affd651b7ac8c84f20637930de55867d319b5bcf->enter($__internal_cc8cc4c88d5744d52c881972affd651b7ac8c84f20637930de55867d319b5bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc8cc4c88d5744d52c881972affd651b7ac8c84f20637930de55867d319b5bcf->leave($__internal_cc8cc4c88d5744d52c881972affd651b7ac8c84f20637930de55867d319b5bcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e53795266dcdffdbf34985ebb6db51280ec331aa78a48d16733fde62f7d07408 = $this->env->getExtension("native_profiler");
        $__internal_e53795266dcdffdbf34985ebb6db51280ec331aa78a48d16733fde62f7d07408->enter($__internal_e53795266dcdffdbf34985ebb6db51280ec331aa78a48d16733fde62f7d07408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e53795266dcdffdbf34985ebb6db51280ec331aa78a48d16733fde62f7d07408->leave($__internal_e53795266dcdffdbf34985ebb6db51280ec331aa78a48d16733fde62f7d07408_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
