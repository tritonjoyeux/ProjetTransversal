<?php

/* @Cook4us/Group/list_content.html.twig */
class __TwigTemplate_e9641a526b01da0aad8c99351a0f7761efc1a10aabc89dc32942af31a4120851 extends Twig_Template
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
        $__internal_27164ae764f434fb705c3ac4bab0c9160a1a3d35f9b01cab96f9b2890cd99b28 = $this->env->getExtension("native_profiler");
        $__internal_27164ae764f434fb705c3ac4bab0c9160a1a3d35f9b01cab96f9b2890cd99b28->enter($__internal_27164ae764f434fb705c3ac4bab0c9160a1a3d35f9b01cab96f9b2890cd99b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cook4us/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_27164ae764f434fb705c3ac4bab0c9160a1a3d35f9b01cab96f9b2890cd99b28->leave($__internal_27164ae764f434fb705c3ac4bab0c9160a1a3d35f9b01cab96f9b2890cd99b28_prof);

    }

    public function getTemplateName()
    {
        return "@Cook4us/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class="fos_user_group_list">*/
/*     <ul>*/
/*     {% for group in groups %}*/
/*         <li><a href="{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}">{{ group.getName() }}</a></li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
