<?php

/* AvanzuAdminThemeBundle:Sidebar:menu.html.twig */
class __TwigTemplate_ba8ea3e3bf05be5d447f1af25390b02b98eb6cb931cd3667167bb1d206d23ef3 extends Twig_Template
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
        $__internal_e6386c1625482955d75ef5888507e7c10b9419be658eb05ed778cae2cdb2280a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6386c1625482955d75ef5888507e7c10b9419be658eb05ed778cae2cdb2280a->enter($__internal_e6386c1625482955d75ef5888507e7c10b9419be658eb05ed778cae2cdb2280a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", 2);
        // line 3
        echo "<ul class=\"sidebar-menu\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo $context["macro"]->getmenu_item($context["item"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
        
        $__internal_e6386c1625482955d75ef5888507e7c10b9419be658eb05ed778cae2cdb2280a->leave($__internal_e6386c1625482955d75ef5888507e7c10b9419be658eb05ed778cae2cdb2280a_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Sidebar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- sidebar menu: : style can be found in sidebar.less -->
{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<ul class=\"sidebar-menu\">
    {% for item in menu %}
        {{ macro.menu_item(item) }}
    {% endfor %}
</ul>", "AvanzuAdminThemeBundle:Sidebar:menu.html.twig", "/var/www/html/SFSiteAnnonce/vendor/avanzu/admin-theme-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}