<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_048fb93d6a8f39c993b8dbd34fc4712cc8b933aa66439129f274ab40e4d38e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "@FOSUser/Security/login_content.html.twig", 1);
        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "    <!--Header-Upper-->
    <div class=\"header-upper\">
        <div class=\"container\">
            <div class=\"clearfix\">

                <div class=\"float-left logo-box\">
                    <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 11
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
        // line 28
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
                                        <li><a href=\"\">Blog</a></li>
                                        <li><a href=\"\">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"\">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!--Button Box-->
                    <div class=\"button-box\">
                        ";
        // line 63
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 64
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a></li>

                        ";
        } else {
            // line 67
            echo "                            <li><a class=\"theme-btn btn-style-one\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"\">se deconnecter</a></li>
                        ";
        }
        // line 69
        echo "                    </div>

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
        // line 102
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
                            <li><a href=\"";
        // line 117
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
                            <li><a href=\"contact-us.html\">Contact us</a></li>
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

    // line 155
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 156
        echo "    <br><br>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Page</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

        <!--Fontawesome CDN-->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

        <!--Custom styles-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css.css"), "html", null, true);
        echo "\">
    </head>
    <body>

    <div class=\"container\">
        <div class=\"d-flex justify-content-center h-100\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Sign In</h3>
                    <div class=\"d-flex justify-content-end social_icon\">
                        <span><i class=\"fab fa-facebook-square\"></i></span>
                        <span><i class=\"fab fa-google-plus-square\"></i></span>
                        <span><i class=\"fab fa-twitter-square\"></i></span>
                    </div>
                </div>
                <div class=\"card-body\">


                    ";
        // line 194
        echo "
                    ";
        // line 195
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 196
            echo "                        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 198
        echo "
                    <form action=\"";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 200
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 201
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                        ";
        }
        // line 203
        echo "
                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            </div>
                            <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                        </div>

                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                            </div>
                            <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                        </div>

                        <div class=\"row align-items-center remember\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
                        </div>
                        <div class=\"form-group\">
                            <input  class=\"btn float-right login_btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </form>
                </div>
                <div class=\"card-footer\">
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"";
        // line 229
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    </body>
    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 229,  341 => 223,  335 => 220,  327 => 215,  315 => 208,  308 => 203,  302 => 201,  300 => 200,  296 => 199,  293 => 198,  287 => 196,  285 => 195,  282 => 194,  261 => 175,  240 => 156,  231 => 155,  184 => 117,  166 => 102,  131 => 69,  125 => 67,  118 => 64,  116 => 63,  78 => 28,  58 => 11,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}


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
                                        <li><a href=\"\">Blog</a></li>
                                        <li><a href=\"\">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"\">Contact us</a></li>
                            </ul>
                        </div>

                    </nav>

                    <!--Button Box-->
                    <div class=\"button-box\">
                        {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <li><a href=\"{{ path('fos_user_registration_register') }}\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a></li>

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
                            <li><a href=\"{{ path ('user_homepage') }}\">Home</a></li>
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
                            <li><a href=\"contact-us.html\">Contact us</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div>
    <!--End Sticky Header-->
{% endblock %}

{% block body %}
    <br><br>
    <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Page</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

        <!--Fontawesome CDN-->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

        <!--Custom styles-->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('login/css.css') }}\">
    </head>
    <body>

    <div class=\"container\">
        <div class=\"d-flex justify-content-center h-100\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Sign In</h3>
                    <div class=\"d-flex justify-content-end social_icon\">
                        <span><i class=\"fab fa-facebook-square\"></i></span>
                        <span><i class=\"fab fa-google-plus-square\"></i></span>
                        <span><i class=\"fab fa-twitter-square\"></i></span>
                    </div>
                </div>
                <div class=\"card-body\">


                    {% trans_default_domain 'FOSUserBundle' %}

                    {% if error %}
                        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                    {% endif %}

                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        {% if csrf_token %}
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}

                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            </div>
                            <input type=\"text\" id=\"username\" class=\"form-control\" placeholder=\"{{ 'security.login.username'|trans }}\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                        </div>

                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                            </div>
                            <input type=\"password\" id=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\" class=\"form-control\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />

                        </div>

                        <div class=\"row align-items-center remember\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />{{ 'security.login.remember_me'|trans }}
                        </div>
                        <div class=\"form-group\">
                            <input  class=\"btn float-right login_btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                        </div>
                    </form>
                </div>
                <div class=\"card-footer\">
                    <div class=\"d-flex justify-content-center\">
                        <a href=\"{{ path('fos_user_registration_register') }}\">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    </body>
    </html>
{% endblock %}", "@FOSUser/Security/login_content.html.twig", "C:\\Users\\user\\Documents\\GitHub\\PIDEVWEBB\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
