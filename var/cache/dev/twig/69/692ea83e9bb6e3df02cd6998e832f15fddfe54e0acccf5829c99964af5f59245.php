<?php

/* layout/layout-front.html.twig */
class __TwigTemplate_4076e8aed4724ca1694498a12a6b4cc77a896d7f2fd0b3ef29878aa1fa30278b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheetstic' => array($this, 'block_stylesheetstic'),
            'stylesheetsticback' => array($this, 'block_stylesheetsticback'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'js_front' => array($this, 'block_js_front'),
            'js_back' => array($this, 'block_js_back'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b6f55c7a87af98c77dd91ad0b58ef4529416083f5fccf6f619b448a9bf0087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b6f55c7a87af98c77dd91ad0b58ef4529416083f5fccf6f619b448a9bf0087->enter($__internal_97b6f55c7a87af98c77dd91ad0b58ef4529416083f5fccf6f619b448a9bf0087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>";
        
        $__internal_97b6f55c7a87af98c77dd91ad0b58ef4529416083f5fccf6f619b448a9bf0087->leave($__internal_97b6f55c7a87af98c77dd91ad0b58ef4529416083f5fccf6f619b448a9bf0087_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c22c4f5764b4a0a32bceb0845c6c97147733dfb39f67358e835f6c22fc6e53d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c22c4f5764b4a0a32bceb0845c6c97147733dfb39f67358e835f6c22fc6e53d->enter($__internal_0c22c4f5764b4a0a32bceb0845c6c97147733dfb39f67358e835f6c22fc6e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0c22c4f5764b4a0a32bceb0845c6c97147733dfb39f67358e835f6c22fc6e53d->leave($__internal_0c22c4f5764b4a0a32bceb0845c6c97147733dfb39f67358e835f6c22fc6e53d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b156b0299c7da5a7ed861a54a84eba36df1944d8ee3ca05f2e5219784c596c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b156b0299c7da5a7ed861a54a84eba36df1944d8ee3ca05f2e5219784c596c7->enter($__internal_3b156b0299c7da5a7ed861a54a84eba36df1944d8ee3ca05f2e5219784c596c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        $this->displayBlock('stylesheetstic', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('stylesheetsticback', $context, $blocks);
        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_3b156b0299c7da5a7ed861a54a84eba36df1944d8ee3ca05f2e5219784c596c7->leave($__internal_3b156b0299c7da5a7ed861a54a84eba36df1944d8ee3ca05f2e5219784c596c7_prof);

    }

    // line 7
    public function block_stylesheetstic($context, array $blocks = array())
    {
        $__internal_f600e3a569139dc365b653ad8c38f2539688437ab7d63503ab3bba9a818bba37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f600e3a569139dc365b653ad8c38f2539688437ab7d63503ab3bba9a818bba37->enter($__internal_f600e3a569139dc365b653ad8c38f2539688437ab7d63503ab3bba9a818bba37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheetstic"));

        
        $__internal_f600e3a569139dc365b653ad8c38f2539688437ab7d63503ab3bba9a818bba37->leave($__internal_f600e3a569139dc365b653ad8c38f2539688437ab7d63503ab3bba9a818bba37_prof);

    }

    // line 8
    public function block_stylesheetsticback($context, array $blocks = array())
    {
        $__internal_321841c4235caa6360eaf5cd8d504c07b86f0ad2b768e9c194a99b1a20bb359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321841c4235caa6360eaf5cd8d504c07b86f0ad2b768e9c194a99b1a20bb359c->enter($__internal_321841c4235caa6360eaf5cd8d504c07b86f0ad2b768e9c194a99b1a20bb359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheetsticback"));

        
        $__internal_321841c4235caa6360eaf5cd8d504c07b86f0ad2b768e9c194a99b1a20bb359c->leave($__internal_321841c4235caa6360eaf5cd8d504c07b86f0ad2b768e9c194a99b1a20bb359c_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab84707838618732233aa7840a7342a031fd44c04b9353aa10195a3e48bc972c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab84707838618732233aa7840a7342a031fd44c04b9353aa10195a3e48bc972c->enter($__internal_ab84707838618732233aa7840a7342a031fd44c04b9353aa10195a3e48bc972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab84707838618732233aa7840a7342a031fd44c04b9353aa10195a3e48bc972c->leave($__internal_ab84707838618732233aa7840a7342a031fd44c04b9353aa10195a3e48bc972c_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8261120c1815618d2300ea556bc5a0062963cb4d6b613d5bf801f58a1a245172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8261120c1815618d2300ea556bc5a0062963cb4d6b613d5bf801f58a1a245172->enter($__internal_8261120c1815618d2300ea556bc5a0062963cb4d6b613d5bf801f58a1a245172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "  <!--  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> -->
    ";
        // line 18
        $this->displayBlock('js_front', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('js_back', $context, $blocks);
        
        $__internal_8261120c1815618d2300ea556bc5a0062963cb4d6b613d5bf801f58a1a245172->leave($__internal_8261120c1815618d2300ea556bc5a0062963cb4d6b613d5bf801f58a1a245172_prof);

    }

    // line 18
    public function block_js_front($context, array $blocks = array())
    {
        $__internal_b8704648c6b913bc5da23b8f7858b64755227533a689d1e4a43a6d6e46b99fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8704648c6b913bc5da23b8f7858b64755227533a689d1e4a43a6d6e46b99fd5->enter($__internal_b8704648c6b913bc5da23b8f7858b64755227533a689d1e4a43a6d6e46b99fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_front"));

        
        $__internal_b8704648c6b913bc5da23b8f7858b64755227533a689d1e4a43a6d6e46b99fd5->leave($__internal_b8704648c6b913bc5da23b8f7858b64755227533a689d1e4a43a6d6e46b99fd5_prof);

    }

    // line 19
    public function block_js_back($context, array $blocks = array())
    {
        $__internal_7930bd6efc1e846237a7886e8691406c829b59953de665b0bf9f93ef4ebd2d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7930bd6efc1e846237a7886e8691406c829b59953de665b0bf9f93ef4ebd2d88->enter($__internal_7930bd6efc1e846237a7886e8691406c829b59953de665b0bf9f93ef4ebd2d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_back"));

        
        $__internal_7930bd6efc1e846237a7886e8691406c829b59953de665b0bf9f93ef4ebd2d88->leave($__internal_7930bd6efc1e846237a7886e8691406c829b59953de665b0bf9f93ef4ebd2d88_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 19,  152 => 18,  144 => 19,  142 => 18,  138 => 17,  133 => 16,  127 => 15,  116 => 14,  105 => 8,  94 => 7,  84 => 9,  81 => 8,  78 => 7,  72 => 6,  61 => 5,  53 => 21,  51 => 15,  49 => 14,  42 => 11,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}{% endblock %}</title>
    {% block stylesheets %}
        {% block stylesheetstic %}{% endblock %}
        {% block stylesheetsticback %}{% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
  <!--  <script src=\"{{ asset('js/jquery-2.1.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script> -->
    {% block js_front %}{% endblock %}
    {% block js_back %}{% endblock %}
{% endblock %}
</body>
</html>", "layout/layout-front.html.twig", "/var/www/html/SFSiteAnnonce/app/Resources/views/layout/layout-front.html.twig");
    }
}
