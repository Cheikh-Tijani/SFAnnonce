<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5de73edb7abda95dfb81ed6b89c9ccbdd346a12cb160d59ff5fd3c8d5748bb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'user_auth_contents' => array($this, 'block_user_auth_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e67f2c00eadbf006d80f6913ec341419c8dd7fc9c973d5ef5762d0ac3afa08d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67f2c00eadbf006d80f6913ec341419c8dd7fc9c973d5ef5762d0ac3afa08d7->enter($__internal_e67f2c00eadbf006d80f6913ec341419c8dd7fc9c973d5ef5762d0ac3afa08d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67f2c00eadbf006d80f6913ec341419c8dd7fc9c973d5ef5762d0ac3afa08d7->leave($__internal_e67f2c00eadbf006d80f6913ec341419c8dd7fc9c973d5ef5762d0ac3afa08d7_prof);

    }

    // line 5
    public function block_user_auth_contents($context, array $blocks = array())
    {
        $__internal_94d93f3d080e6686c99d5fd62bacf823423915800f8411294eaa22d856afc944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d93f3d080e6686c99d5fd62bacf823423915800f8411294eaa22d856afc944->enter($__internal_94d93f3d080e6686c99d5fd62bacf823423915800f8411294eaa22d856afc944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_auth_contents"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "\t<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t\t  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
\t\t\t  </div>
\t\t\t</div><!-- /.col -->
\t\t\t<div class=\"col-xs-4\">
\t\t\t  <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t</div><!-- /.col -->
\t\t</div>
\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">I forgot my password</a>
\t</form>
";
        
        $__internal_94d93f3d080e6686c99d5fd62bacf823423915800f8411294eaa22d856afc944->leave($__internal_94d93f3d080e6686c99d5fd62bacf823423915800f8411294eaa22d856afc944_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  86 => 28,  79 => 24,  69 => 17,  60 => 13,  54 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block user_auth_contents  %}
    {% if error %}
\t\t<div class=\"alert alert-danger alert-dismissible\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
\t<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />

\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" />
\t\t\t<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t\t</div>
\t\t<div class=\"form-group has-feedback\">
\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t<span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-8\">
\t\t\t  <div class=\"checkbox\">
\t\t\t\t  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> {{ 'security.login.remember_me'|trans }}
\t\t\t  </div>
\t\t\t</div><!-- /.col -->
\t\t\t<div class=\"col-xs-4\">
\t\t\t  <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"{{ 'security.login.submit'|trans }}\">
\t\t\t</div><!-- /.col -->
\t\t</div>
\t\t<a href=\"{{ path('fos_user_resetting_request') }}\">I forgot my password</a>
\t</form>
{% endblock user_auth_contents %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/SFSiteAnnonce/src/SalexUserBundle/Resources/views/Security/login.html.twig");
    }
}
