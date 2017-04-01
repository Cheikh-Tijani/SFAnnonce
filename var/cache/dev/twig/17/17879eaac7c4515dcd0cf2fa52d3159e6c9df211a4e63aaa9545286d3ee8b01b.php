<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c365724de4454941932931ed6713c5b39d0b68c9ec1537e7409da872a2c5d395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_498d1ddb99a7523e3ec3706528c79be297e32d702198fd1dbac6e92288a75c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498d1ddb99a7523e3ec3706528c79be297e32d702198fd1dbac6e92288a75c79->enter($__internal_498d1ddb99a7523e3ec3706528c79be297e32d702198fd1dbac6e92288a75c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498d1ddb99a7523e3ec3706528c79be297e32d702198fd1dbac6e92288a75c79->leave($__internal_498d1ddb99a7523e3ec3706528c79be297e32d702198fd1dbac6e92288a75c79_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33928aeb5bfe2d2a20625c907464176f59fde9a24326fd5fc707f70ef1e986fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33928aeb5bfe2d2a20625c907464176f59fde9a24326fd5fc707f70ef1e986fe->enter($__internal_33928aeb5bfe2d2a20625c907464176f59fde9a24326fd5fc707f70ef1e986fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33928aeb5bfe2d2a20625c907464176f59fde9a24326fd5fc707f70ef1e986fe->leave($__internal_33928aeb5bfe2d2a20625c907464176f59fde9a24326fd5fc707f70ef1e986fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_faea9d4f9132b27a45f75401fce5fc574de32782da5c780ee57e33e45dd31c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faea9d4f9132b27a45f75401fce5fc574de32782da5c780ee57e33e45dd31c9c->enter($__internal_faea9d4f9132b27a45f75401fce5fc574de32782da5c780ee57e33e45dd31c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_faea9d4f9132b27a45f75401fce5fc574de32782da5c780ee57e33e45dd31c9c->leave($__internal_faea9d4f9132b27a45f75401fce5fc574de32782da5c780ee57e33e45dd31c9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c5d224217a16d23eebbecbd90ae1e097e02542cc46f819f3bd7f02e70f6136f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5d224217a16d23eebbecbd90ae1e097e02542cc46f819f3bd7f02e70f6136f->enter($__internal_3c5d224217a16d23eebbecbd90ae1e097e02542cc46f819f3bd7f02e70f6136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3c5d224217a16d23eebbecbd90ae1e097e02542cc46f819f3bd7f02e70f6136f->leave($__internal_3c5d224217a16d23eebbecbd90ae1e097e02542cc46f819f3bd7f02e70f6136f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/SFSiteAnnonce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
