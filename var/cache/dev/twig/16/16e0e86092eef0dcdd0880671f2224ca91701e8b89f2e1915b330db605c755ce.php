<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_75e91575bea2e916021eece2775e9d1c7182d859e47f8766ae14ed7b4ff2933f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b38b2b536b5b48cbcb5b8501b2dd48d1ea44b57dd48467d36bbc72cd26a94d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38b2b536b5b48cbcb5b8501b2dd48d1ea44b57dd48467d36bbc72cd26a94d4->enter($__internal_1b38b2b536b5b48cbcb5b8501b2dd48d1ea44b57dd48467d36bbc72cd26a94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b38b2b536b5b48cbcb5b8501b2dd48d1ea44b57dd48467d36bbc72cd26a94d4->leave($__internal_1b38b2b536b5b48cbcb5b8501b2dd48d1ea44b57dd48467d36bbc72cd26a94d4_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}



", "AvanzuAdminThemeBundle:Default:index.html.twig", "/var/www/html/SFSiteAnnonce/vendor/avanzu/admin-theme-bundle/Resources/views/Default/index.html.twig");
    }
}
