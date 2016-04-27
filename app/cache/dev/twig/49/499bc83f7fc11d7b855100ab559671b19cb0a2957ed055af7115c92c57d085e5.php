<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_42bf6e916dcaff3e472bb0510137b3f49fa2a80ea4984f0fd30163aefb8ae630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae33b86334bdabb66d62d528883d582e1b873a81cc06c72c51f6ddb31c9a68a5 = $this->env->getExtension("native_profiler");
        $__internal_ae33b86334bdabb66d62d528883d582e1b873a81cc06c72c51f6ddb31c9a68a5->enter($__internal_ae33b86334bdabb66d62d528883d582e1b873a81cc06c72c51f6ddb31c9a68a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae33b86334bdabb66d62d528883d582e1b873a81cc06c72c51f6ddb31c9a68a5->leave($__internal_ae33b86334bdabb66d62d528883d582e1b873a81cc06c72c51f6ddb31c9a68a5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfcf59af0478c398721f52226ef269d6ed6eee9ebadd6c2c6fe651a4c8d7940f = $this->env->getExtension("native_profiler");
        $__internal_cfcf59af0478c398721f52226ef269d6ed6eee9ebadd6c2c6fe651a4c8d7940f->enter($__internal_cfcf59af0478c398721f52226ef269d6ed6eee9ebadd6c2c6fe651a4c8d7940f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cfcf59af0478c398721f52226ef269d6ed6eee9ebadd6c2c6fe651a4c8d7940f->leave($__internal_cfcf59af0478c398721f52226ef269d6ed6eee9ebadd6c2c6fe651a4c8d7940f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
