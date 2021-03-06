<?php

/* layout/user-panel.html.twig */
class __TwigTemplate_54ac33e8d749c18870b6230bb9f16aa32dc9835eaf20229353149fad62b9f43d extends Twig_Template
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
        $__internal_9072bce1cae03109d335d99262f676261af804c9fbe53fa811dfbee5504a637d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9072bce1cae03109d335d99262f676261af804c9fbe53fa811dfbee5504a637d->enter($__internal_9072bce1cae03109d335d99262f676261af804c9fbe53fa811dfbee5504a637d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/user-panel.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/user-panel.html.twig", 1);
        // line 2
        echo "<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    ";
        // line 5
        $context["user_image"] = false;
        // line 6
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"))) {
            // line 7
            echo "        ";
            $context["user_image"] = ("images/profile/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getProfilePicture", array(), "method"));
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        echo $context["macro"]->getavatar((isset($context["user_image"]) ? $context["user_image"] : $this->getContext($context, "user_image")), $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()));
        echo "
    </div>
    <div class=\"pull-left info\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array(), "method")), "html", null, true);
        echo "</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
";
        
        $__internal_9072bce1cae03109d335d99262f676261af804c9fbe53fa811dfbee5504a637d->leave($__internal_9072bce1cae03109d335d99262f676261af804c9fbe53fa811dfbee5504a637d_prof);

    }

    public function getTemplateName()
    {
        return "layout/user-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!-- Sidebar user panel -->
<div class=\"user-panel\">
    <div class=\"pull-left image\">
    {% set user_image = false %}
    {% if user.getProfilePicture() is not empty %}
        {% set user_image = 'images/profile/'~ user.getProfilePicture() %}
    {% endif %}
    {{ macro.avatar(user_image, user.username)  }}
    </div>
    <div class=\"pull-left info\">
        <p>{{ user.getName()|title }}</p>

        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
</div>
", "layout/user-panel.html.twig", "/var/www/html/SFSiteAnnonce/app/Resources/views/layout/user-panel.html.twig");
    }
}
