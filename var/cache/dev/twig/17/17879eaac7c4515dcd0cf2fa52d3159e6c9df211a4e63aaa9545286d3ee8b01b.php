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
        $__internal_55d3b85274b1d23383b06c2233482b5225b17ffcbf0b02b4e3bc23b815449f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d3b85274b1d23383b06c2233482b5225b17ffcbf0b02b4e3bc23b815449f44->enter($__internal_55d3b85274b1d23383b06c2233482b5225b17ffcbf0b02b4e3bc23b815449f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55d3b85274b1d23383b06c2233482b5225b17ffcbf0b02b4e3bc23b815449f44->leave($__internal_55d3b85274b1d23383b06c2233482b5225b17ffcbf0b02b4e3bc23b815449f44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e03b91d4032886a7585975e60a08cfdef12b8d8756f7af240891473b94e22aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e03b91d4032886a7585975e60a08cfdef12b8d8756f7af240891473b94e22aa->enter($__internal_4e03b91d4032886a7585975e60a08cfdef12b8d8756f7af240891473b94e22aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e03b91d4032886a7585975e60a08cfdef12b8d8756f7af240891473b94e22aa->leave($__internal_4e03b91d4032886a7585975e60a08cfdef12b8d8756f7af240891473b94e22aa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86f844fbc8c761ab02b7849d0b8e3899fafcbb5fcfc35aa2a953df2be99cf1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f844fbc8c761ab02b7849d0b8e3899fafcbb5fcfc35aa2a953df2be99cf1ac->enter($__internal_86f844fbc8c761ab02b7849d0b8e3899fafcbb5fcfc35aa2a953df2be99cf1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86f844fbc8c761ab02b7849d0b8e3899fafcbb5fcfc35aa2a953df2be99cf1ac->leave($__internal_86f844fbc8c761ab02b7849d0b8e3899fafcbb5fcfc35aa2a953df2be99cf1ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6d2ffc4cc1cc852b39ace9669be1c693ee33e9a14606fb221183e1da6b33fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d2ffc4cc1cc852b39ace9669be1c693ee33e9a14606fb221183e1da6b33fc1->enter($__internal_d6d2ffc4cc1cc852b39ace9669be1c693ee33e9a14606fb221183e1da6b33fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d6d2ffc4cc1cc852b39ace9669be1c693ee33e9a14606fb221183e1da6b33fc1->leave($__internal_d6d2ffc4cc1cc852b39ace9669be1c693ee33e9a14606fb221183e1da6b33fc1_prof);

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
