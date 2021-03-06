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
        $__internal_71d2bd6f36c4ef3cfad04f380af302930423665982ac3e422615491febd20b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d2bd6f36c4ef3cfad04f380af302930423665982ac3e422615491febd20b3a->enter($__internal_71d2bd6f36c4ef3cfad04f380af302930423665982ac3e422615491febd20b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d2bd6f36c4ef3cfad04f380af302930423665982ac3e422615491febd20b3a->leave($__internal_71d2bd6f36c4ef3cfad04f380af302930423665982ac3e422615491febd20b3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01f9194932c99473e189429412ebf236ce8855eaaf05817383bce4ad8b1729d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f9194932c99473e189429412ebf236ce8855eaaf05817383bce4ad8b1729d3->enter($__internal_01f9194932c99473e189429412ebf236ce8855eaaf05817383bce4ad8b1729d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_01f9194932c99473e189429412ebf236ce8855eaaf05817383bce4ad8b1729d3->leave($__internal_01f9194932c99473e189429412ebf236ce8855eaaf05817383bce4ad8b1729d3_prof);

    }

    // line 5
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c01d1d41a2b98afef052165d777dab9892a23a7535df3832d1b39fe6ec1326a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01d1d41a2b98afef052165d777dab9892a23a7535df3832d1b39fe6ec1326a6->enter($__internal_c01d1d41a2b98afef052165d777dab9892a23a7535df3832d1b39fe6ec1326a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 6
        echo "\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c01d1d41a2b98afef052165d777dab9892a23a7535df3832d1b39fe6ec1326a6->leave($__internal_c01d1d41a2b98afef052165d777dab9892a23a7535df3832d1b39fe6ec1326a6_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cfb7c05f9353535e2f9249839abd10bdd8aa2ad95cefb6862f78b51e598e4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfb7c05f9353535e2f9249839abd10bdd8aa2ad95cefb6862f78b51e598e4c1->enter($__internal_7cfb7c05f9353535e2f9249839abd10bdd8aa2ad95cefb6862f78b51e598e4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_7cfb7c05f9353535e2f9249839abd10bdd8aa2ad95cefb6862f78b51e598e4c1->leave($__internal_7cfb7c05f9353535e2f9249839abd10bdd8aa2ad95cefb6862f78b51e598e4c1_prof);

    }

    // line 13
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_566824673517752e998597947297dd58c8cf240bb91411483c555346eafe23ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566824673517752e998597947297dd58c8cf240bb91411483c555346eafe23ef->enter($__internal_566824673517752e998597947297dd58c8cf240bb91411483c555346eafe23ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        echo " ";
        
        $__internal_566824673517752e998597947297dd58c8cf240bb91411483c555346eafe23ef->leave($__internal_566824673517752e998597947297dd58c8cf240bb91411483c555346eafe23ef_prof);

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
