<?php

/* base2.html.twig */
class __TwigTemplate_509dad28d8ac6a7f87168d1ba3de8a6f6b172d108795caa1af829a92c235eb33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'contactinfo' => array($this, 'block_contactinfo'),
            'navfooter' => array($this, 'block_navfooter'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- For IE -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" >
</head>
<body>

<div class=\"boxed_wrapper\">


    <!--Start Preloader -->
    <div class=\"preloader\"></div>
    <!-- Main Header-->
    <header class=\"main-header\">
        ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 182
        echo "    </header>
    <!--End Main Header -->


    ";
        // line 186
        $this->displayBlock('body', $context, $blocks);
        // line 189
        echo "

    <!--Contact Info-->
    <section class=\"contact-info\">
        <div class=\"container\">
            <div class=\"info-area\">
                <div class=\"row\">
                    ";
        // line 196
        $this->displayBlock('contactinfo', $context, $blocks);
        // line 231
        echo "                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info-->

    <!-- Main Footer-->
    <footer class=\"main-footer\" style=\"background: url(";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/background/footer.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"footer-area text-center\">
            ";
        // line 241
        $this->displayBlock('navfooter', $context, $blocks);
        // line 258
        echo "            </div>
        </div>
    </footer>
    <!--End Main Footer-->

    <!--Footer Bottom Section-->
    <section class=\"footer-bottom\">
        <div class=\"container\">
            ";
        // line 266
        $this->displayBlock('footer', $context, $blocks);
        // line 271
        echo "        </div>
    </section>
    <!--End Footer Bottom Section-->

</div>
    ";
        // line 276
        $this->displayBlock('javascripts', $context, $blocks);
        // line 300
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Cité de la Culture || TUNIS  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\">

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/favicon1.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/favicon1.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "            <!--Header-Upper-->
            <div class=\"header-upper\">
                <div class=\"container\">
                    <div class=\"clearfix\">

                        <div class=\"float-left logo-box\">
                            <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/Cit-de-la-culture.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a></div>
                        </div>

                        <div class=\"nav-outer clearfix\">

                            <!-- Main Menu -->
                            <nav class=\"main-menu navbar-expand-md\">
                                <div class=\"navbar-header\">
                                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>

                                <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
                                    <ul class=\"navigation clearfix\">
                                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_homepage");
        echo "\">Home</a></li>
                                        <li class=\"dropdown\"><a href=\"#\">About</a>
                                            <ul>
                                                <li><a href=\"\">About Us</a></li>
                                                <li><a href=\"\">Speakers</a></li>
                                                <li><a href=\"\">Speaker Details</a></li>
                                                <li><a href=\"\">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Shedule</a>
                                            <ul>
                                                <li><a href=\"\">Shedule</a></li>
                                                <li><a href=\"\">Shedule Details</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Sponsors</a>
                                            <ul>
                                                <li><a href=\"sponsor.html\">Sponsors</a></li>
                                                <li><a href=\"sponsor-details.html\">Sponsors Details</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Blog</a>
                                            <ul>
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-single.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"\">Contact us</a></li>

                                    </ul>
                                </div>

                            </nav>

                            <!--Button Box-->
                            <div class=\"button-box\">
                                ";
        // line 90
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"theme-btn btn-style-one\">Connexion</a>
                                <a href=\"";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a></li>

                                ";
        } else {
            // line 95
            echo "                                    <li><a class=\"theme-btn btn-style-one\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"\">se deconnecter</a></li>
                                ";
        }
        // line 97
        echo "                            </div>

                            <!--Search Box Outer-->
                            <div class=\"search-box-outer\">
                                <div class=\"dropdown\">
                                    <button class=\"search-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-search\"></span></button>
                                    <ul class=\"dropdown-menu pull-right search-panel\" aria-labelledby=\"dropdownMenu3\">
                                        <li class=\"panel-outer\">
                                            <div class=\"form-container\">
                                                <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/blog.html\">
                                                    <div class=\"form-group\">
                                                        <input type=\"search\" name=\"field-name\" value=\"\" placeholder=\"Search Here\" required>
                                                        <button type=\"submit\" class=\"search-btn\"><span class=\"fa fa-search\"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class=\"sticky-header stricky\">
                <div class=\"container clearfix\">
                    <!--Logo-->
                    <div class=\"logo float-left\">
                        <a href=\"index-2.html\" class=\"img-responsive\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/Cit-de-la-culture.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a>
                    </div>

                    <!--Right Col-->
                    <div class=\"right-col float-right\">
                        <!-- Main Menu -->
                        <nav class=\"main-menu navbar-expand-md\">
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent1\" aria-controls=\"navbarSupportedContent1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>

                            <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent1\">
                                <ul class=\"navigation clearfix\">
                                    <li class=\"current dropdown\"><a href=\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_homepage");
        echo "\">Home</a></li>
                                    <li class=\"dropdown\"><a href=\"#\">About</a>
                                        <ul>
                                            <li><a href=\"about-us.html\">About Us</a></li>
                                            <li><a href=\"speakers.html\">Speakers</a></li>
                                            <li><a href=\"speakers-details.html\">Speaker Details</a></li>
                                            <li><a href=\"error-page.html\">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Shedule</a>
                                        <ul>
                                            <li><a href=\"shedule.html\">Shedule</a></li>
                                            <li><a href=\"shedule-details.html\">Shedule Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Sponsors</a>
                                        <ul>
                                            <li><a href=\"sponsor.html\">Sponsors</a></li>
                                            <li><a href=\"sponsor-details.html\">Sponsors Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Blog</a>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-single.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"\">Contact us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 187
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_contactinfo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactinfo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contactinfo"));

        // line 197
        echo "                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-placeholder\"></i>
                            </div>
                            <div class=\"text\">
                                <p>184 Collins Street West <br>Victoria, United States, 8007</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-phone-call\"></i>
                            </div>
                            <div class=\"text\">
                                <p>(1800) 123 4567 <br>(1800) 123 4568</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-e-mail-envelope\"></i>
                            </div>
                            <div class=\"text\">
                                <p>
                                    <a href=\"#\">info@wiscon.com</a>
                                    <a href=\"#\">support@wiscon.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_navfooter($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navfooter"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navfooter"));

        // line 242
        echo "                <div class=\"footer-logo\">
                    <figure>
                        <a href=\"index-2.html\"><img src=\"images/\" alt=\"\"></a>
                    </figure>
                </div>
                <ul class=\"footer-menu\">
                    <li><a href=\"";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_homepage");
        echo "\">Home</a></li>
                    <li><a href=\"about-us.html\">About</a></li>
                    <li><a href=\"speakers.html\">Speakers</a></li>
                    <li><a href=\"#\">Pages</a></li>
                    <li><a href=\"shedule.html\">Schedule</a></li>
                    <li><a href=\"sponsor.html\">Sponsors</a></li>
                    <li><a href=\"blog.html\">Blog</a></li>
                    <li><a href=\"contact-us.html\">Contact</a></li>
                </ul>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 267
        echo "                <div class=\"copyright-text text-center\">
                    Copyright &copy; <a href=\"#\">Wiscon</a> 2019. All Rights Reserved
                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 276
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 277
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/owl.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/wow.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/appear.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/isotope.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/validate.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/custom.js"), "html", null, true);
        echo "\"></script>

        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0\"></script>
        <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/js/map-script.js"), "html", null, true);
        echo "\"></script>
        <!--End Google Map APi-->


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 295,  580 => 291,  575 => 289,  571 => 288,  567 => 287,  563 => 286,  559 => 285,  555 => 284,  551 => 283,  547 => 282,  543 => 281,  539 => 280,  535 => 279,  531 => 278,  526 => 277,  517 => 276,  504 => 267,  495 => 266,  475 => 248,  467 => 242,  458 => 241,  415 => 197,  406 => 196,  395 => 187,  386 => 186,  339 => 145,  321 => 130,  286 => 97,  280 => 95,  274 => 92,  269 => 91,  267 => 90,  228 => 54,  208 => 37,  200 => 31,  191 => 30,  179 => 16,  175 => 15,  169 => 12,  164 => 11,  155 => 10,  137 => 8,  125 => 300,  123 => 276,  116 => 271,  114 => 266,  104 => 258,  102 => 241,  96 => 238,  87 => 231,  85 => 196,  76 => 189,  74 => 186,  68 => 182,  66 => 30,  52 => 19,  49 => 18,  47 => 10,  42 => 8,  33 => 1,);
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- For IE -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %} Cité de la Culture || TUNIS  {% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('front/css/responsive.css') }}\">

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"{{ asset('front/images/favicon1.png') }}\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{ asset('front/images/favicon1.png') }}\" type=\"image/x-icon\">
    {% endblock %}

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" >
</head>
<body>

<div class=\"boxed_wrapper\">


    <!--Start Preloader -->
    <div class=\"preloader\"></div>
    <!-- Main Header-->
    <header class=\"main-header\">
        {% block header %}
            <!--Header-Upper-->
            <div class=\"header-upper\">
                <div class=\"container\">
                    <div class=\"clearfix\">

                        <div class=\"float-left logo-box\">
                            <div class=\"logo\"><a href=\"\"><img src=\"{{ asset('front/images/Cit-de-la-culture.png') }}\" alt=\"\" title=\"\"></a></div>
                        </div>

                        <div class=\"nav-outer clearfix\">

                            <!-- Main Menu -->
                            <nav class=\"main-menu navbar-expand-md\">
                                <div class=\"navbar-header\">
                                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                </div>

                                <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
                                    <ul class=\"navigation clearfix\">
                                        <li><a href=\"{{ path ('user_homepage') }}\">Home</a></li>
                                        <li class=\"dropdown\"><a href=\"#\">About</a>
                                            <ul>
                                                <li><a href=\"\">About Us</a></li>
                                                <li><a href=\"\">Speakers</a></li>
                                                <li><a href=\"\">Speaker Details</a></li>
                                                <li><a href=\"\">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Shedule</a>
                                            <ul>
                                                <li><a href=\"\">Shedule</a></li>
                                                <li><a href=\"\">Shedule Details</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Sponsors</a>
                                            <ul>
                                                <li><a href=\"sponsor.html\">Sponsors</a></li>
                                                <li><a href=\"sponsor-details.html\">Sponsors Details</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"dropdown\"><a href=\"#\">Blog</a>
                                            <ul>
                                                <li><a href=\"blog.html\">Blog</a></li>
                                                <li><a href=\"blog-single.html\">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"\">Contact us</a></li>

                                    </ul>
                                </div>

                            </nav>

                            <!--Button Box-->
                            <div class=\"button-box\">
                                {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"theme-btn btn-style-one\">Connexion</a>
                                <a href=\"{{ path('fos_user_registration_register') }}\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a></li>

                                {% else %}
                                    <li><a class=\"theme-btn btn-style-one\" href=\"{{ path('fos_user_security_logout') }}\" title=\"\">se deconnecter</a></li>
                                {% endif %}
                            </div>

                            <!--Search Box Outer-->
                            <div class=\"search-box-outer\">
                                <div class=\"dropdown\">
                                    <button class=\"search-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu3\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-search\"></span></button>
                                    <ul class=\"dropdown-menu pull-right search-panel\" aria-labelledby=\"dropdownMenu3\">
                                        <li class=\"panel-outer\">
                                            <div class=\"form-container\">
                                                <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/blog.html\">
                                                    <div class=\"form-group\">
                                                        <input type=\"search\" name=\"field-name\" value=\"\" placeholder=\"Search Here\" required>
                                                        <button type=\"submit\" class=\"search-btn\"><span class=\"fa fa-search\"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!--Sticky Header-->
            <div class=\"sticky-header stricky\">
                <div class=\"container clearfix\">
                    <!--Logo-->
                    <div class=\"logo float-left\">
                        <a href=\"index-2.html\" class=\"img-responsive\"><img src=\"{{ asset('front/images/Cit-de-la-culture.png')}}\" alt=\"\" title=\"\"></a>
                    </div>

                    <!--Right Col-->
                    <div class=\"right-col float-right\">
                        <!-- Main Menu -->
                        <nav class=\"main-menu navbar-expand-md\">
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent1\" aria-controls=\"navbarSupportedContent1\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>

                            <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent1\">
                                <ul class=\"navigation clearfix\">
                                    <li class=\"current dropdown\"><a href=\"{{ path ('user_homepage') }}\">Home</a></li>
                                    <li class=\"dropdown\"><a href=\"#\">About</a>
                                        <ul>
                                            <li><a href=\"about-us.html\">About Us</a></li>
                                            <li><a href=\"speakers.html\">Speakers</a></li>
                                            <li><a href=\"speakers-details.html\">Speaker Details</a></li>
                                            <li><a href=\"error-page.html\">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Shedule</a>
                                        <ul>
                                            <li><a href=\"shedule.html\">Shedule</a></li>
                                            <li><a href=\"shedule-details.html\">Shedule Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Sponsors</a>
                                        <ul>
                                            <li><a href=\"sponsor.html\">Sponsors</a></li>
                                            <li><a href=\"sponsor-details.html\">Sponsors Details</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"dropdown\"><a href=\"#\">Blog</a>
                                        <ul>
                                            <li><a href=\"blog.html\">Blog</a></li>
                                            <li><a href=\"blog-single.html\">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"\">Contact us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->
        {% endblock %}
    </header>
    <!--End Main Header -->


    {% block body %}

    {% endblock %}


    <!--Contact Info-->
    <section class=\"contact-info\">
        <div class=\"container\">
            <div class=\"info-area\">
                <div class=\"row\">
                    {% block contactinfo %}
                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-placeholder\"></i>
                            </div>
                            <div class=\"text\">
                                <p>184 Collins Street West <br>Victoria, United States, 8007</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-phone-call\"></i>
                            </div>
                            <div class=\"text\">
                                <p>(1800) 123 4567 <br>(1800) 123 4568</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-sm-12\">
                        <div class=\"contact-info-item-one\">
                            <div class=\"icon-box\">
                                <i class=\"flaticon-e-mail-envelope\"></i>
                            </div>
                            <div class=\"text\">
                                <p>
                                    <a href=\"#\">info@wiscon.com</a>
                                    <a href=\"#\">support@wiscon.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Info-->

    <!-- Main Footer-->
    <footer class=\"main-footer\" style=\"background: url({{ asset('front/images/background/footer.jpg') }});\">
        <div class=\"container\">
            <div class=\"footer-area text-center\">
            {% block navfooter %}
                <div class=\"footer-logo\">
                    <figure>
                        <a href=\"index-2.html\"><img src=\"images/\" alt=\"\"></a>
                    </figure>
                </div>
                <ul class=\"footer-menu\">
                    <li><a href=\"{{ path ('user_homepage') }}\">Home</a></li>
                    <li><a href=\"about-us.html\">About</a></li>
                    <li><a href=\"speakers.html\">Speakers</a></li>
                    <li><a href=\"#\">Pages</a></li>
                    <li><a href=\"shedule.html\">Schedule</a></li>
                    <li><a href=\"sponsor.html\">Sponsors</a></li>
                    <li><a href=\"blog.html\">Blog</a></li>
                    <li><a href=\"contact-us.html\">Contact</a></li>
                </ul>
            {% endblock %}
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

    <!--Footer Bottom Section-->
    <section class=\"footer-bottom\">
        <div class=\"container\">
            {% block footer %}
                <div class=\"copyright-text text-center\">
                    Copyright &copy; <a href=\"#\">Wiscon</a> 2019. All Rights Reserved
                </div>
            {% endblock %}
        </div>
    </section>
    <!--End Footer Bottom Section-->

</div>
    {% block javascripts %}
        <script src=\"{{ asset('front/js/jquery.js') }}\"></script>
        <script src=\"{{ asset('front/js/popper.min.js') }}\"></script>
        <script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('front/js/jquery.fancybox.js') }}\"></script>
        <script src=\"{{ asset('front/js/owl.js') }}\"></script>
        <script src=\"{{ asset('front/js/wow.js') }}\"></script>
        <script src=\"{{ asset('front/js/jquery.countTo.js') }}\"></script>
        <script src=\"{{ asset('front/js/jquery.countdown.min.js') }}\"></script>
        <script src=\"{{ asset('front/js/appear.js') }}\"></script>
        <script src=\"{{ asset('front/js/jquery-ui.js') }}\"></script>
        <script src=\"{{ asset('front/js/isotope.js') }}\"></script>
        <script src=\"{{ asset('front/js/bxslider.js') }}\"></script>
        <script src=\"{{ asset('front/js/validate.js') }}\"></script>

        <script src=\"{{ asset('front/js/custom.js') }}\"></script>

        <!--Google Map-->
        <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBevTAR-V2fDy9gQsQn1xNHBPH2D36kck0\"></script>
        <script src=\"{{ asset('front/js/map-script.js') }}\"></script>
        <!--End Google Map APi-->


    {% endblock %}
</body>
</html>
", "base2.html.twig", "D:\\wamp64\\www\\PIDEVWEB\\app\\Resources\\views\\base2.html.twig");
    }
}
