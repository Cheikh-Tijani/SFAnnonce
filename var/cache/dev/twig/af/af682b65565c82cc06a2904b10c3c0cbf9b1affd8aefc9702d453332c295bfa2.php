<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_662371b4984e94e81cda1de120d4658b2cdbb2dd91b6d8f2edbcb94b78fa5338 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/loginBase.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/loginBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd8cd4d6c116513ef1993c63fc67714629bf8f925fc1faf97159c41ca5b61a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd8cd4d6c116513ef1993c63fc67714629bf8f925fc1faf97159c41ca5b61a3->enter($__internal_3fd8cd4d6c116513ef1993c63fc67714629bf8f925fc1faf97159c41ca5b61a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd8cd4d6c116513ef1993c63fc67714629bf8f925fc1faf97159c41ca5b61a3->leave($__internal_3fd8cd4d6c116513ef1993c63fc67714629bf8f925fc1faf97159c41ca5b61a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b49aa9621bf0bd274976035ec0c97a238877213f4629a373096c201ea337b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b49aa9621bf0bd274976035ec0c97a238877213f4629a373096c201ea337b9f->enter($__internal_6b49aa9621bf0bd274976035ec0c97a238877213f4629a373096c201ea337b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_6b49aa9621bf0bd274976035ec0c97a238877213f4629a373096c201ea337b9f->leave($__internal_6b49aa9621bf0bd274976035ec0c97a238877213f4629a373096c201ea337b9f_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4ad2bb60e1a4375fd4fdaa012914e012212ac356754db9f768dbfa82f5e7d2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad2bb60e1a4375fd4fdaa012914e012212ac356754db9f768dbfa82f5e7d2b4->enter($__internal_4ad2bb60e1a4375fd4fdaa012914e012212ac356754db9f768dbfa82f5e7d2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4ad2bb60e1a4375fd4fdaa012914e012212ac356754db9f768dbfa82f5e7d2b4->leave($__internal_4ad2bb60e1a4375fd4fdaa012914e012212ac356754db9f768dbfa82f5e7d2b4_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4238e4e244b1b0c26b74f78223533dbf84df25087923aad44295831f8756a0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4238e4e244b1b0c26b74f78223533dbf84df25087923aad44295831f8756a0d4->enter($__internal_4238e4e244b1b0c26b74f78223533dbf84df25087923aad44295831f8756a0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo2.png"), "html", null, true);
        echo "\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t";
        // line 13
        $this->displayBlock('user_auth_contents', $context, $blocks);
        // line 14
        echo "\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t";
        
        $__internal_4238e4e244b1b0c26b74f78223533dbf84df25087923aad44295831f8756a0d4->leave($__internal_4238e4e244b1b0c26b74f78223533dbf84df25087923aad44295831f8756a0d4_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_cc5f7104dffcd4ababc82c4c9f0d647bd9a6de703d0a08a3467e2eaf574e181a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5f7104dffcd4ababc82c4c9f0d647bd9a6de703d0a08a3467e2eaf574e181a->enter($__internal_cc5f7104dffcd4ababc82c4c9f0d647bd9a6de703d0a08a3467e2eaf574e181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_cc5f7104dffcd4ababc82c4c9f0d647bd9a6de703d0a08a3467e2eaf574e181a->leave($__internal_cc5f7104dffcd4ababc82c4c9f0d647bd9a6de703d0a08a3467e2eaf574e181a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  83 => 14,  81 => 13,  72 => 9,  68 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/loginBase.html.twig' %}

{% block title %}{{ site_name }}{% endblock %}

{% block page_content %}
\t{% block fos_user_content %}
\t\t<div class=\"login-box\">
\t\t\t<div class=\"login-logo\">
\t\t\t\t<a href=\"{{ path('homepage') }}\"><img src=\"{{ asset('bundles/app/images/logo2.png') }}\"></a>
\t\t\t</div><!-- /.login-logo -->

\t\t\t<div class=\"login-box-body\">
\t\t\t\t{% block user_auth_contents %} {% endblock %}
\t\t\t</div> <!-- End of login-box-body -->
\t\t</div><!-- End of login-box -->
\t{% endblock %}
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/SFSiteAnnonce/src/SalexUserBundle/Resources/views/layout.html.twig");
    }
}