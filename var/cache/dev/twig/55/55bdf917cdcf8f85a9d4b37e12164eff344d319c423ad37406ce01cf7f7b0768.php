<?php

/* default/dashboard.html.twig */
class __TwigTemplate_ec3567c8ae1e73c0f7906f5f81e9880cf5722e260b48f1be0ac27b2c0f56a11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base-layout.html.twig", "default/dashboard.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7867598142deeb956675a8bc074803032f31dd6e39d62500a52aac7ed91de64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7867598142deeb956675a8bc074803032f31dd6e39d62500a52aac7ed91de64a->enter($__internal_7867598142deeb956675a8bc074803032f31dd6e39d62500a52aac7ed91de64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7867598142deeb956675a8bc074803032f31dd6e39d62500a52aac7ed91de64a->leave($__internal_7867598142deeb956675a8bc074803032f31dd6e39d62500a52aac7ed91de64a_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b8f9b437c8501c3565852b1c99c81275b72ef542b4ec847dfe1b039dcbb2c18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8f9b437c8501c3565852b1c99c81275b72ef542b4ec847dfe1b039dcbb2c18d->enter($__internal_b8f9b437c8501c3565852b1c99c81275b72ef542b4ec847dfe1b039dcbb2c18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Dashboard";
        
        $__internal_b8f9b437c8501c3565852b1c99c81275b72ef542b4ec847dfe1b039dcbb2c18d->leave($__internal_b8f9b437c8501c3565852b1c99c81275b72ef542b4ec847dfe1b039dcbb2c18d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6c500698a99fac09710ef17772fb5608441c11812593e1799aa26edc296d3241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c500698a99fac09710ef17772fb5608441c11812593e1799aa26edc296d3241->enter($__internal_6c500698a99fac09710ef17772fb5608441c11812593e1799aa26edc296d3241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "\t
";
        
        $__internal_6c500698a99fac09710ef17772fb5608441c11812593e1799aa26edc296d3241->leave($__internal_6c500698a99fac09710ef17772fb5608441c11812593e1799aa26edc296d3241_prof);

    }

    public function getTemplateName()
    {
        return "default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/base-layout.html.twig' %}
{% block page_title %}Dashboard{% endblock %}
{% block page_content %}
\t
{% endblock %}", "default/dashboard.html.twig", "/var/www/html/SFSiteAnnonce/app/Resources/views/default/dashboard.html.twig");
    }
}
