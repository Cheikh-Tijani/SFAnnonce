<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_7f50531a20ec7bb31526cd936121dd2e080b32775fcc7f94cab0b39a2c6752b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb422830d6e9f80ef3ea6a0a4d041a635df2d50990a9414973ba10460507d985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb422830d6e9f80ef3ea6a0a4d041a635df2d50990a9414973ba10460507d985->enter($__internal_bb422830d6e9f80ef3ea6a0a4d041a635df2d50990a9414973ba10460507d985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb422830d6e9f80ef3ea6a0a4d041a635df2d50990a9414973ba10460507d985->leave($__internal_bb422830d6e9f80ef3ea6a0a4d041a635df2d50990a9414973ba10460507d985_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1c5cf4b96e3a0ed87e7c61a87a92d3cbeab67b508ca5b0889be623e929a2a268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5cf4b96e3a0ed87e7c61a87a92d3cbeab67b508ca5b0889be623e929a2a268->enter($__internal_1c5cf4b96e3a0ed87e7c61a87a92d3cbeab67b508ca5b0889be623e929a2a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_1c5cf4b96e3a0ed87e7c61a87a92d3cbeab67b508ca5b0889be623e929a2a268->leave($__internal_1c5cf4b96e3a0ed87e7c61a87a92d3cbeab67b508ca5b0889be623e929a2a268_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ec426fe91717aeec06ab9dbc55e05dfd0dd0b4355b1f4a32a4d0ae7ebede203a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec426fe91717aeec06ab9dbc55e05dfd0dd0b4355b1f4a32a4d0ae7ebede203a->enter($__internal_ec426fe91717aeec06ab9dbc55e05dfd0dd0b4355b1f4a32a4d0ae7ebede203a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_ec426fe91717aeec06ab9dbc55e05dfd0dd0b4355b1f4a32a4d0ae7ebede203a->leave($__internal_ec426fe91717aeec06ab9dbc55e05dfd0dd0b4355b1f4a32a4d0ae7ebede203a_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_97b664d20ad589875e0f504296d9c9fcdd531be83b28247368e2d9c2eb9583e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b664d20ad589875e0f504296d9c9fcdd531be83b28247368e2d9c2eb9583e1->enter($__internal_97b664d20ad589875e0f504296d9c9fcdd531be83b28247368e2d9c2eb9583e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_97b664d20ad589875e0f504296d9c9fcdd531be83b28247368e2d9c2eb9583e1->leave($__internal_97b664d20ad589875e0f504296d9c9fcdd531be83b28247368e2d9c2eb9583e1_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
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

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:form.html.twig", "/var/www/html/SFSiteAnnonce/vendor/avanzu/admin-theme-bundle/Resources/views/Default/form.html.twig");
    }
}