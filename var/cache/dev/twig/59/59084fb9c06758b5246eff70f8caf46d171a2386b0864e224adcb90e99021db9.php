<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_d1ba13d9a91ac80691ac981d661a518cf032677827731fdfb0181a7e259d67e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout-front.html.twig", "FrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93a4842fe4a46f304e173ea891b53fc8ea9385f6512af9e0ef6078b8534e873b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a4842fe4a46f304e173ea891b53fc8ea9385f6512af9e0ef6078b8534e873b->enter($__internal_93a4842fe4a46f304e173ea891b53fc8ea9385f6512af9e0ef6078b8534e873b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a4842fe4a46f304e173ea891b53fc8ea9385f6512af9e0ef6078b8534e873b->leave($__internal_93a4842fe4a46f304e173ea891b53fc8ea9385f6512af9e0ef6078b8534e873b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_288f2fe2450c91c4bcb1df46863c471a8a91e50a74eed8ea5d0e46b1edbda81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288f2fe2450c91c4bcb1df46863c471a8a91e50a74eed8ea5d0e46b1edbda81e->enter($__internal_288f2fe2450c91c4bcb1df46863c471a8a91e50a74eed8ea5d0e46b1edbda81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ctijani";
        
        $__internal_288f2fe2450c91c4bcb1df46863c471a8a91e50a74eed8ea5d0e46b1edbda81e->leave($__internal_288f2fe2450c91c4bcb1df46863c471a8a91e50a74eed8ea5d0e46b1edbda81e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a63d4c50b5d6e306ea8010140b00d05ce2f82464694cf93e90d2f665571e718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a63d4c50b5d6e306ea8010140b00d05ce2f82464694cf93e90d2f665571e718->enter($__internal_1a63d4c50b5d6e306ea8010140b00d05ce2f82464694cf93e90d2f665571e718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owlcarousel/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jquery-ui-css/Aristo/Aristo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style-annonce.css"), "html", null, true);
        echo "\">
    <style type=\"text/css\">
        body {
            padding-top: 50px;
        }
        .beforemenus{
            height: 180px;
            width: 100%;
            background: url(\"http://www.avendrealouer.fr/Content/Default/Images/Home/homeBackground.jpg\") ;
            background-size: cover;

        }

    </style>
";
        
        $__internal_1a63d4c50b5d6e306ea8010140b00d05ce2f82464694cf93e90d2f665571e718->leave($__internal_1a63d4c50b5d6e306ea8010140b00d05ce2f82464694cf93e90d2f665571e718_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_de07ee09bab707cfbd3143289fd50878d7f203076d1e364049ab72f44c3a7a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de07ee09bab707cfbd3143289fd50878d7f203076d1e364049ab72f44c3a7a94->enter($__internal_de07ee09bab707cfbd3143289fd50878d7f203076d1e364049ab72f44c3a7a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
    <div class=\"header-content header\">
        <div class=\"container\"><!-- container header-->
            <div class=\"row\">
                <ul class=\"list-inline rsx\">
                    <li><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google-plus.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/youtube.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                </ul>
            </div>

        </div>
    </div>
    <div class=\"beforeheader\">
        <div class=\"container-fluid\">

        </div>
    </div><!--end beforeheader -->

    <div class=\"navbar navbar navbar\" role=\"navigation\" id=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- <a class=\"navbar-brand\" rel=\"home\" href=\"#\">Mon site</a> -->
            </div>
            <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                <!-- <div class=\"collapse navbar-collapse\"> -->

                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Home</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-shopping-cart\">Acheter</a></li>
                    <li><a href=\"#\" class=\"glyphicon  glyphicon-hand-right\">Location</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-list\">Agence-immobilière</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-glass\">Soirées</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-envelope\">Contact</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 67
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 68
            echo "                       <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" class=\"glyphicon glyphicon-user pull-right\">Mon-Compte</a></li>
                       <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_logout");
            echo "\" class=\"glyphicon glyphicon-log-out\">Déconnexion</a></li>
                    ";
        } else {
            // line 71
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"glyphicon glyphicon-user pull-right\">Connexion</a></li>
                        <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"glyphicon glyphicon-plus-sign\">Inscription</a></li>
                    ";
        }
        // line 74
        echo "
                </ul>
            </nav>
            <!-- </div> -->
        </div>
    </div>
    <div class=\"principale\">
        <div class=\"row endbeforeheader\">
        </div>
        <div class=\"beforemenus container-fluid\">

        </div>
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Location</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Vente</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">
                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Soirée</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Louer pour les vacances</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div><!--end div col- -->
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Annonces Immobilière</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Annonces de Soirée</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">
                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Meilleurs Agences</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Les Services</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <h4>SUIVEZ-NOUS</h4>
                    <ul class=\"footer1\">
                        <li><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/facebook.ico"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/twitter2.ico"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/youtube.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/google_plus.ico"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/social_feeds.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <h4>QUI SOMMES NOUS ?</h4>
                    <ul>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">A propos</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Mentions légales</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Contact</a></li>

                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <h4>NOS OFFRES</h4>
                    <ul>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Publicité sur ctijani</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Offres de ctijani</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Tourisme</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-4\"></div>
                    <div class=\"col-sm-6 col-md-6\">
                        <p>Copyright <span class=\"glyphicon glyphicon-copyright-mark\"></span>";
        // line 265
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "-Tous droits reservés <b>By:</b> <i>ctijani</i></p>
                    </div>
                    <div class=\"col-sm-2 col-md-2\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_de07ee09bab707cfbd3143289fd50878d7f203076d1e364049ab72f44c3a7a94->leave($__internal_de07ee09bab707cfbd3143289fd50878d7f203076d1e364049ab72f44c3a7a94_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 265,  352 => 238,  348 => 237,  344 => 236,  340 => 235,  336 => 234,  174 => 74,  169 => 72,  164 => 71,  159 => 69,  154 => 68,  152 => 67,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  95 => 24,  89 => 23,  67 => 8,  63 => 7,  59 => 6,  54 => 5,  48 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout-front.html.twig\" %}

{% block title %}ctijani{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/owlcarousel/owl-carousel/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/jquery-ui-css/Aristo/Aristo.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style-annonce.css') }}\">
    <style type=\"text/css\">
        body {
            padding-top: 50px;
        }
        .beforemenus{
            height: 180px;
            width: 100%;
            background: url(\"http://www.avendrealouer.fr/Content/Default/Images/Home/homeBackground.jpg\") ;
            background-size: cover;

        }

    </style>
{% endblock %}
{% block body %}

    <div class=\"header-content header\">
        <div class=\"container\"><!-- container header-->
            <div class=\"row\">
                <ul class=\"list-inline rsx\">
                    <li><img src=\"{{ asset('images/twitter.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"{{ asset('images/facebook.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"{{ asset('images/google-plus.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                    <li><img src=\"{{ asset('images/youtube.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                </ul>
            </div>

        </div>
    </div>
    <div class=\"beforeheader\">
        <div class=\"container-fluid\">

        </div>
    </div><!--end beforeheader -->

    <div class=\"navbar navbar navbar\" role=\"navigation\" id=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <!-- <a class=\"navbar-brand\" rel=\"home\" href=\"#\">Mon site</a> -->
            </div>
            <nav class=\"collapse navbar-collapse bs-navbar-collapse\" role=\"navigation\">
                <!-- <div class=\"collapse navbar-collapse\"> -->

                <ul class=\"nav navbar-nav\">
                    <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Home</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-shopping-cart\">Acheter</a></li>
                    <li><a href=\"#\" class=\"glyphicon  glyphicon-hand-right\">Location</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-list\">Agence-immobilière</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-glass\">Soirées</a></li>
                    <li><a href=\"#\" class=\"glyphicon glyphicon-envelope\">Contact</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                       <li><a href=\"{{ path('homepage')}}\" class=\"glyphicon glyphicon-user pull-right\">Mon-Compte</a></li>
                       <li><a href=\"{{ path('avanzu_admin_logout')}}\" class=\"glyphicon glyphicon-log-out\">Déconnexion</a></li>
                    {% else %}
                        <li><a href=\"{{ path('fos_user_security_login')}}\" class=\"glyphicon glyphicon-user pull-right\">Connexion</a></li>
                        <li><a href=\"{{ path('fos_user_security_login')}}\" class=\"glyphicon glyphicon-plus-sign\">Inscription</a></li>
                    {% endif %}

                </ul>
            </nav>
            <!-- </div> -->
        </div>
    </div>
    <div class=\"principale\">
        <div class=\"row endbeforeheader\">
        </div>
        <div class=\"beforemenus container-fluid\">

        </div>
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Location</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Vente</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">
                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Dernière Annonce Soirée</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Louer pour les vacances</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <h4 class=\"blog-title\">
                            </h4>
                            <ul class=\"blog-meta\">
                                <li><span class=\"glyphicon glyphicon-user\"></span><i></i></li>
                                <li><span class=\"glyphicon glyphicon-calendar\"></span></li>
                                <li><span class=\"glyphicon glyphicon-pushpin\"></span></li>
                            </ul>
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div><!--end div col- -->
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Annonces Immobilière</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Annonces de Soirée</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">
                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Meilleurs Agences</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-sm-4 col-md-3\">
                    <h4 class=\"panel panel-heading titre-bloc\">Les Services</h4>
                    <div class=\"blog-item\">
                        <div class=\"image-resp\">

                        </div>
                        <div class=\"blog-details\">
                            <div class=\"blog-summary\">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-4\">
                    <h4>SUIVEZ-NOUS</h4>
                    <ul class=\"footer1\">
                        <li><img src=\"{{ asset('images/facebook.ico') }}\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"{{ asset('images/twitter2.ico') }}\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"{{ asset('images/youtube.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"{{ asset('images/google_plus.ico') }}\" alt=\"\" class=\"img-responsive\"></li>
                        <li><img src=\"{{ asset('images/social_feeds.png') }}\" alt=\"\" class=\"img-responsive\"></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <h4>QUI SOMMES NOUS ?</h4>
                    <ul>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">A propos</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Mentions légales</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">Contact</a></li>

                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-4\">
                    <h4>NOS OFFRES</h4>
                    <ul>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Publicité sur ctijani</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Offres de ctijani</a></li>
                        <li><a href=\"#\" class=\"glyphicon glyphicon-home\">&nbsp;Tourisme</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-md-4\"></div>
                    <div class=\"col-sm-6 col-md-6\">
                        <p>Copyright <span class=\"glyphicon glyphicon-copyright-mark\"></span>{{ 'now'|date('Y') }}-Tous droits reservés <b>By:</b> <i>ctijani</i></p>
                    </div>
                    <div class=\"col-sm-2 col-md-2\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "FrontBundle:Default:index.html.twig", "/var/www/html/SFSiteAnnonce/src/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
