<?php

/* layout/base-layout.html.twig */
class __TwigTemplate_f7fab5af9a9e24b09cd43c09eb7f1790a98d53a7bf9383b3f8f7c7fd61ba354b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a974d42ebd79843c931a755834a8b1b8a5fcbceac6c1d02f4b938b76fa23524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a974d42ebd79843c931a755834a8b1b8a5fcbceac6c1d02f4b938b76fa23524->enter($__internal_2a974d42ebd79843c931a755834a8b1b8a5fcbceac6c1d02f4b938b76fa23524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "layout/base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 18
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 27
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 34
        echo "
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"";
        // line 57
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo " fixed sidebar-mini\">
<div class=\"wrapper\">

    ";
        // line 60
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 95
        echo "
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            ";
        // line 100
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 107
        echo "        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 116
        $this->displayBlock('page_title', $context, $blocks);
        // line 117
        echo "                <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
            </h1>
            ";
        // line 119
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 122
        echo "        </section>

        <!-- Alert Boxes -->
        ";
        // line 125
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method") || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 126
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) || $this->getAttribute($this->getAttribute($this->getAttribute(        // line 127
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method"))) {
            // line 129
            echo "            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
            // line 132
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
                // line 133
                echo "                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                ";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 137
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                            </div>
                        ";
            }
            // line 141
            echo "
                        ";
            // line 142
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
                // line 143
                echo "                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 147
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                            </div>
                        ";
            }
            // line 151
            echo "
                        ";
            // line 152
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "notice"), "method")) {
                // line 153
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 157
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                            </div>
                        ";
            }
            // line 161
            echo "
                        ";
            // line 162
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "warning"), "method")) {
                // line 163
                echo "                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 167
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                            </div>
                        ";
            }
            // line 171
            echo "                    </div>
                </div>
            </section>
        ";
        }
        // line 175
        echo "
        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 178
        $this->displayBlock('page_content', $context, $blocks);
        // line 179
        echo "        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    ";
        // line 184
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 189
        echo "
</div>
<!-- ./wrapper -->

";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 199
        echo "
";
        // line 201
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 203
        echo "</body>
</html>
";
        
        $__internal_2a974d42ebd79843c931a755834a8b1b8a5fcbceac6c1d02f4b938b76fa23524->leave($__internal_2a974d42ebd79843c931a755834a8b1b8a5fcbceac6c1d02f4b938b76fa23524_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_b736b41d4be2d8de134102d58c7cc9ffabc31a8b61d46dc59ff88199bc7da90a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b736b41d4be2d8de134102d58c7cc9ffabc31a8b61d46dc59ff88199bc7da90a->enter($__internal_b736b41d4be2d8de134102d58c7cc9ffabc31a8b61d46dc59ff88199bc7da90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        
        $__internal_b736b41d4be2d8de134102d58c7cc9ffabc31a8b61d46dc59ff88199bc7da90a->leave($__internal_b736b41d4be2d8de134102d58c7cc9ffabc31a8b61d46dc59ff88199bc7da90a_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a96b59a41cc02e0f6727d1e9f91a50558aa4a62823d0ac920f753f15e7d58f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a96b59a41cc02e0f6727d1e9f91a50558aa4a62823d0ac920f753f15e7d58f5->enter($__internal_7a96b59a41cc02e0f6727d1e9f91a50558aa4a62823d0ac920f753f15e7d58f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_7a96b59a41cc02e0f6727d1e9f91a50558aa4a62823d0ac920f753f15e7d58f5->leave($__internal_7a96b59a41cc02e0f6727d1e9f91a50558aa4a62823d0ac920f753f15e7d58f5_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_887b78d7c3c28dddd5b43d9a78b640aa52fff03827265bc39af8da3da9302d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887b78d7c3c28dddd5b43d9a78b640aa52fff03827265bc39af8da3da9302d50->enter($__internal_887b78d7c3c28dddd5b43d9a78b640aa52fff03827265bc39af8da3da9302d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_887b78d7c3c28dddd5b43d9a78b640aa52fff03827265bc39af8da3da9302d50->leave($__internal_887b78d7c3c28dddd5b43d9a78b640aa52fff03827265bc39af8da3da9302d50_prof);

    }

    // line 60
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_96e22bba641c0196d2d39d07857f135e131b6ea75fe87008ef03935061afaa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e22bba641c0196d2d39d07857f135e131b6ea75fe87008ef03935061afaa9c->enter($__internal_96e22bba641c0196d2d39d07857f135e131b6ea75fe87008ef03935061afaa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 61
        echo "        <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 74
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 80
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 81
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 83
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 89
            echo "                        </ul>
                    </div>
                ";
        }
        // line 92
        echo "            </nav>
        </header>
    ";
        
        $__internal_96e22bba641c0196d2d39d07857f135e131b6ea75fe87008ef03935061afaa9c->leave($__internal_96e22bba641c0196d2d39d07857f135e131b6ea75fe87008ef03935061afaa9c_prof);

    }

    // line 62
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_05fbbb5733137d313986efdf275b97c05769f1950749d4c7705c582c0c4abc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fbbb5733137d313986efdf275b97c05769f1950749d4c7705c582c0c4abc6f->enter($__internal_05fbbb5733137d313986efdf275b97c05769f1950749d4c7705c582c0c4abc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 63
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/images/logo2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        ";
        // line 70
        $this->displayBlock("title", $context, $blocks);
        echo "
                    </span>
                </a>
            ";
        
        $__internal_05fbbb5733137d313986efdf275b97c05769f1950749d4c7705c582c0c4abc6f->leave($__internal_05fbbb5733137d313986efdf275b97c05769f1950749d4c7705c582c0c4abc6f_prof);

    }

    // line 83
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_24d69b5dbc3243ea14d70e84901baf562cd0be8cfe31ca807c3b2b35ae9c4ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d69b5dbc3243ea14d70e84901baf562cd0be8cfe31ca807c3b2b35ae9c4ef0->enter($__internal_24d69b5dbc3243ea14d70e84901baf562cd0be8cfe31ca807c3b2b35ae9c4ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 84
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_24d69b5dbc3243ea14d70e84901baf562cd0be8cfe31ca807c3b2b35ae9c4ef0->leave($__internal_24d69b5dbc3243ea14d70e84901baf562cd0be8cfe31ca807c3b2b35ae9c4ef0_prof);

    }

    // line 100
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_e53b278ea5502a48ef635f498c34cb77c0d5d65e5b5658253d3aae73e3d64f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53b278ea5502a48ef635f498c34cb77c0d5d65e5b5658253d3aae73e3d64f7e->enter($__internal_e53b278ea5502a48ef635f498c34cb77c0d5d65e5b5658253d3aae73e3d64f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 101
        echo "                ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 102
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Sidebar:userPanel"));
            echo "
                    ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                ";
        }
        // line 105
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
            ";
        
        $__internal_e53b278ea5502a48ef635f498c34cb77c0d5d65e5b5658253d3aae73e3d64f7e->leave($__internal_e53b278ea5502a48ef635f498c34cb77c0d5d65e5b5658253d3aae73e3d64f7e_prof);

    }

    // line 116
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d67222cd1449d042ff5dfb4e41bb078b7bd3823191ca63162a627ae2c9afb340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67222cd1449d042ff5dfb4e41bb078b7bd3823191ca63162a627ae2c9afb340->enter($__internal_d67222cd1449d042ff5dfb4e41bb078b7bd3823191ca63162a627ae2c9afb340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Page Title";
        
        $__internal_d67222cd1449d042ff5dfb4e41bb078b7bd3823191ca63162a627ae2c9afb340->leave($__internal_d67222cd1449d042ff5dfb4e41bb078b7bd3823191ca63162a627ae2c9afb340_prof);

    }

    // line 117
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6863f7e9bc6f685aeae97ee4dc057d2a871abbbc656c54c0e2d404c4248ed0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6863f7e9bc6f685aeae97ee4dc057d2a871abbbc656c54c0e2d404c4248ed0e4->enter($__internal_6863f7e9bc6f685aeae97ee4dc057d2a871abbbc656c54c0e2d404c4248ed0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        
        $__internal_6863f7e9bc6f685aeae97ee4dc057d2a871abbbc656c54c0e2d404c4248ed0e4->leave($__internal_6863f7e9bc6f685aeae97ee4dc057d2a871abbbc656c54c0e2d404c4248ed0e4_prof);

    }

    // line 119
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8031b2be3c9fd5f0d90643b23a726152a93e5037692c542b83684045ab97021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8031b2be3c9fd5f0d90643b23a726152a93e5037692c542b83684045ab97021->enter($__internal_c8031b2be3c9fd5f0d90643b23a726152a93e5037692c542b83684045ab97021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 120
        echo "                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
            ";
        
        $__internal_c8031b2be3c9fd5f0d90643b23a726152a93e5037692c542b83684045ab97021->leave($__internal_c8031b2be3c9fd5f0d90643b23a726152a93e5037692c542b83684045ab97021_prof);

    }

    // line 178
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ae19868e12276ecd89fdedab5cfa41f647d987f3e6747c758633937eaa19eccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae19868e12276ecd89fdedab5cfa41f647d987f3e6747c758633937eaa19eccb->enter($__internal_ae19868e12276ecd89fdedab5cfa41f647d987f3e6747c758633937eaa19eccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_ae19868e12276ecd89fdedab5cfa41f647d987f3e6747c758633937eaa19eccb->leave($__internal_ae19868e12276ecd89fdedab5cfa41f647d987f3e6747c758633937eaa19eccb_prof);

    }

    // line 184
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_7353f98c915826908650d1eb8bf6a41a02429a64ead18025ba0d8b5f66fdb1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7353f98c915826908650d1eb8bf6a41a02429a64ead18025ba0d8b5f66fdb1cf->enter($__internal_7353f98c915826908650d1eb8bf6a41a02429a64ead18025ba0d8b5f66fdb1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 185
        echo "        <footer class=\"main-footer\">
            <strong>Copyright &copy; ";
        // line 186
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"http://";
        echo twig_escape_filter($this->env, (isset($context["footer_url"]) ? $context["footer_url"] : $this->getContext($context, "footer_url")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo "
        </footer>
    ";
        
        $__internal_7353f98c915826908650d1eb8bf6a41a02429a64ead18025ba0d8b5f66fdb1cf->leave($__internal_7353f98c915826908650d1eb8bf6a41a02429a64ead18025ba0d8b5f66fdb1cf_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9449eef0792affc5c45b83a82a80b6f47497078d1b9b28da531fb8d556a8b681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9449eef0792affc5c45b83a82a80b6f47497078d1b9b28da531fb8d556a8b681->enter($__internal_9449eef0792affc5c45b83a82a80b6f47497078d1b9b28da531fb8d556a8b681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        echo "
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_9449eef0792affc5c45b83a82a80b6f47497078d1b9b28da531fb8d556a8b681->leave($__internal_9449eef0792affc5c45b83a82a80b6f47497078d1b9b28da531fb8d556a8b681_prof);

    }

    // line 201
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_faa9272271a6eb3d8fb986da463da1f2e6090055b0896876b3dc5cccbf909e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faa9272271a6eb3d8fb986da463da1f2e6090055b0896876b3dc5cccbf909e09->enter($__internal_faa9272271a6eb3d8fb986da463da1f2e6090055b0896876b3dc5cccbf909e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_faa9272271a6eb3d8fb986da463da1f2e6090055b0896876b3dc5cccbf909e09->leave($__internal_faa9272271a6eb3d8fb986da463da1f2e6090055b0896876b3dc5cccbf909e09_prof);

    }

    public function getTemplateName()
    {
        return "layout/base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  570 => 201,  560 => 196,  557 => 195,  551 => 194,  537 => 186,  534 => 185,  528 => 184,  517 => 178,  507 => 120,  501 => 119,  490 => 117,  478 => 116,  468 => 105,  463 => 103,  458 => 102,  455 => 101,  449 => 100,  440 => 87,  436 => 86,  432 => 85,  427 => 84,  421 => 83,  410 => 70,  404 => 67,  396 => 63,  390 => 62,  381 => 92,  376 => 89,  374 => 83,  370 => 81,  368 => 80,  360 => 74,  358 => 62,  355 => 61,  349 => 60,  335 => 28,  329 => 27,  320 => 20,  317 => 19,  311 => 18,  299 => 15,  290 => 203,  288 => 201,  285 => 199,  283 => 194,  277 => 189,  275 => 184,  268 => 179,  266 => 178,  261 => 175,  255 => 171,  251 => 169,  242 => 167,  238 => 166,  233 => 163,  231 => 162,  228 => 161,  224 => 159,  215 => 157,  211 => 156,  206 => 153,  204 => 152,  201 => 151,  197 => 149,  188 => 147,  184 => 146,  179 => 143,  177 => 142,  174 => 141,  170 => 139,  161 => 137,  157 => 136,  152 => 133,  150 => 132,  145 => 129,  143 => 127,  142 => 126,  141 => 125,  136 => 122,  134 => 119,  128 => 117,  126 => 116,  115 => 107,  113 => 100,  106 => 95,  104 => 60,  98 => 57,  73 => 34,  70 => 27,  65 => 24,  61 => 22,  58 => 18,  53 => 15,  38 => 2,  36 => 1,);
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
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>{% block title %}{{ site_name }}{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class=\"{{ admin_skin|default('skin-blue')}} fixed sidebar-mini\">
<div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"{{ path('homepage') }}\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    <span class=\"logo-mini\">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <img src=\"{{ asset('bundles/app/images/logo2.jpg') }}\" alt=\"\">
                    </span>
                    <span class=\"logo-lg\">
                        {{ block('title') }}
                    </span>
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AppBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar sidebar-offcanvas\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            {% block avanzu_sidebar %}
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    {{ render(controller('AppBundle:Sidebar:userPanel')) }}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                {% endif %}
                {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
            {% endblock %}
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                {% block page_title %}Page Title{% endblock %}
                <small>{% block page_subtitle %}{% endblock %}</small>
            </h1>
            {% block avanzu_breadcrumb %}
                {{ render(controller('AppBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
            {% endblock %}
        </section>

        <!-- Alert Boxes -->
        {% if app.session.flashBag.has('success')
        or app.session.flashBag.has('error')
        or app.session.flashBag.has('notice')
        %}
            <section class=\"flash-messages content-header\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        {% if app.session.flashBag.has('success') %}
                            <div class=\"alert alert-success alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-check\"></i> Success!</h4>
                                {% for msg in app.session.flashBag.get('success') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('error') %}
                            <div class=\"alert alert-danger alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-ban\"></i> Error!</h4>
                                {% for msg in app.session.flashBag.get('error') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('notice') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-info\"></i> Notice!</h4>
                                {% for msg in app.session.flashBag.get('notice') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if app.session.flashBag.has('warning') %}
                            <div class=\"alert alert-info alert-dismissible\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                <h4><i class=\"icon fa fa-warning\"></i> Warning!</h4>
                                {% for msg in app.session.flashBag.get('warning') %}
                                    {{ msg }}
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </section>
        {% endif %}

        <!-- Main content -->
        <section class=\"content\">
            {% block page_content %}{% endblock %}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <strong>Copyright &copy; {{ \"now\"|date(\"Y\") }} <a href=\"http://{{ footer_url }}\" target=\"_blank\">{{ site_name }}
        </footer>
    {% endblock %}

</div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "layout/base-layout.html.twig", "/var/www/html/SFSiteAnnonce/app/Resources/views/layout/base-layout.html.twig");
    }
}
