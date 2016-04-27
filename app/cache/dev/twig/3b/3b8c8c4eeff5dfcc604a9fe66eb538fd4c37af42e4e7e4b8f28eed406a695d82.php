<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_7a17f7af19879bfe8435363b9241eddd41d677f7990db5b277285ff81ef83761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a42d58e4ab987c031bcb85ee8514be20b046d0d5f4f9a13d2d6c2d8579b15306 = $this->env->getExtension("native_profiler");
        $__internal_a42d58e4ab987c031bcb85ee8514be20b046d0d5f4f9a13d2d6c2d8579b15306->enter($__internal_a42d58e4ab987c031bcb85ee8514be20b046d0d5f4f9a13d2d6c2d8579b15306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_a42d58e4ab987c031bcb85ee8514be20b046d0d5f4f9a13d2d6c2d8579b15306->leave($__internal_a42d58e4ab987c031bcb85ee8514be20b046d0d5f4f9a13d2d6c2d8579b15306_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
