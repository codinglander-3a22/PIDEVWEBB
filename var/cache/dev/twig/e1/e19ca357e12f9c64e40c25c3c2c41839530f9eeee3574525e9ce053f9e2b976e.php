<?php

/* @User/front/index.html.twig */
class __TwigTemplate_3aaa7d394401bc5d6348bbf945ad20bda932b564dd90f12962366a6527122fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "@User/front/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/front/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/front/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Cité de la Culture || TUNIS
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <!--Header-Upper-->
    <div class=\"header-upper\">
        <div class=\"container\">
            <div class=\"clearfix\">

                <div class=\"float-left logo-box\">
                    <div class=\"logo\"><a href=\"\"><img src=\"";
        // line 12
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
                                <li  class=\"current dropdown\"><a href=\"";
        // line 29
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
                        <li>
                            <div class=\"link-box\">

                            ";
        // line 67
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 68
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"theme-btn btn-style-one\">Connexion</a>
                                <a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a>

                            ";
        } else {
            // line 72
            echo "                                <a class=\"theme-btn btn-style-one\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" title=\"\">se deconnecter</a>
                            ";
        }
        // line 74
        echo "                            </div>

                        </li>
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
                <a href=\"\" class=\"img-responsive\"><img src=\"";
        // line 110
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
        // line 125
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

    // line 162
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 163
        echo "
    <section class=\"main-slider\">

        <div class=\"main-slider-carousel owl-carousel owl-theme\">

            <div class=\"slide\" style=\"background-image:url(";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/main-slider/image-1.jpg"), "html", null, true);
        echo " )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"slide\" style=\"background-image:url( ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/main-slider/image-2.jpg "), "html", null, true);
        echo " )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"slide\" style=\"background-image:url( ";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/main-slider/image-3.jpg "), "html", null, true);
        echo " )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Main Slider-->

    <section class=\"welcome-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"icon-holder\">
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></a>
                            <h6>22 - 25 Feb, 19</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></a>
                            <h6>Canada</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i></a>
                            <h6>500 Seats</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i></a>
                            <h6>50 Speakers</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"content-text\">
                        <h3>Business<br><span>Conference</span> 2019</h3>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliqu enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"btn-style-three\">Buy Ticket</a><a href=\"#\" class=\"btn-style-two\">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About Section-->
    <section class=\"about-section two\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-md-12 col-sm-12\">
                    <div class=\"about-image\">
                        <figure>
                            <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/about/2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"play-btn\">
                            <a href=\"https://youtu.be/juEo4ows7Po\" class=\"lightbox-image video-fancybox\" title=\"\"><i class=\"flaticon-play-button\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-12 col-sm-12\">
                    <div class=\"about-text\">
                        <div class=\"sec-title\">
                            <h6>LITTLE ABOUT</h6>
                            <h2>Welcome To <br>Our  <span>Wiscon</span></h2>
                        </div>
                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Bring to the table win-win survival strategies to ensure proactive domination.</p>
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-md-6 col-sm-6\">
                                <div class=\"about-item-two\">
                                    <i class=\"flaticon-gps\"></i>
                                    <span>Tamara Loaf Apt. 068. San Fancisco, CA United State of America</span>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-md-6 col-sm-6\">
                                <div class=\"about-item-two\">
                                    <i class=\"flaticon-clock\"></i>
                                    <span>Sunday to Wednesday Jan 21 to 31, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Newslatter Section-->
    <section class=\"newslatter-section\">
        <div class=\"container\">
            <div class=\"sec-title-three text-center\">
                <h4>Sign Up For Our Newsletter</h4>
            </div>
            <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/contact.html\">
                <div class=\"form-group\">
                    <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Your Mail Address\" required=\"\">
                    <button type=\"submit\" class=\"btn-style-two\">Subscribes</button>
                </div>
            </form>
        </div>
    </section>
    <!--Newslatter Section-->

    <!-- Team Section -->
    <section class=\"our-team\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>OUR SPEAKERS</h6>
                <h2>All The<span>Professionals</span></h2>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-9 col-md-12 col-sm-12 team-colmun\">
                    <div class=\"bxslider-area\">
                        <div class=\"bxslider\">
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/7.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"slider-pager one\">
                            <div class=\"center\">
                                <ul class=\"nav-link\">
                                    <li id=\"slider-prev\"></li>
                                    <li id=\"slider-next\"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-12 col-sm-12 team-colmun\">
                    <div class=\"slider-pager two\">
                        <ul class=\"list-inline thumb-box\">
                            <li>
                                <a class=\"active\" data-slide-index=\"0\" href=\"#\"><figure><img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/11.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"1\" href=\"#\"><figure><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/12.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"2\" href=\"#\"><figure><img src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/13.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"3\" href=\"#\"><figure><img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/team/14.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!--Testimonials Section-->
    <section class=\"testimonials-section\" style=\"background: url(";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/background/testimonials.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>FEEDBACKS</h6>
                <h2>People Say <span>Nicest Thing</span></h2>
            </div>
            <div class=\"testimonial-container\">
                <div class=\"testimonial-carousel owl-carousel owl-theme\">
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials Section-->

    <!--Schedule Section-->
    <section class=\"schedule-section one\" id=\"schedule-tab\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>EVENT TIMELINE</h6>
                <h2>Conference <span>Schedule</span></h2>
            </div>
            <div class=\"schedule-area\">
                <div class=\"schedule-title\">
                    <div class=\"item active\" data-tab-name=\"day-one\">
                        <div class=\"item-text\">
                            <h6>DAY 1</h6>
                            <span>5 jan, 2018</span>
                        </div>
                    </div>
                    <div class=\"item\" data-tab-name=\"day-two\">
                        <div class=\"item-text\">
                            <h6>DAY 2</h6>
                            <span>15 jan, 2018</span>
                        </div>
                    </div>
                    <div class=\"item\" data-tab-name=\"day-three\">
                        <div class=\"item-text\">
                            <h6>DAY 3</h6>
                            <span>18 jan, 2018</span>
                        </div>
                    </div>
                </div>
                <div class=\"schedule-content clearfix\">
                    <div id=\"day-one\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Introduction to UI/Ux
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        09:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">02</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Basics WordPress
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        10:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">03</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        WP Plugins Installation
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        11:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">04</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Basic GO Language
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        12:00 PM
                                    </td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">05</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Business Analysis
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        02:00 PM
                                    </td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id=\"day-two\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i> Introduction to UI/Ux</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>09:00 AM</td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basics WordPress</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 634
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>10:00 AM</td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>WP Plugins Installation</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>11:00 AM</td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basic GO Language</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>12:00 PM</td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Business Analysis</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>02:00 PM</td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id=\"day-three\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i> Introduction to UI/Ux</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>09:00 AM</td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basics WordPress</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>10:00 AM</td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>WP Plugins Installation</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>11:00 AM</td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basic GO Language</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>12:00 PM</td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Business Analysis</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/resources/schedule-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>02:00 PM</td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Schedule Section-->

    <!--Gallery Section-->
    <section class=\"gallery-section two\">
        <div class=\"container-fluid\">
            <div class=\"sec-title-two text-center\">
                <h6>OUR GALLERY</h6>
                <h2>Our Latest Events</h2>
            </div>
            <div class=\"row gallery-one\">
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 775
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/11.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/12.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 831
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/13.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/14.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 873
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/16.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/17.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 901
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/18.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/19.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/20.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 943
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/21.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/22.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/23.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 985
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/24.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 999
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/25.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"";
        // line 1013
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/gallery/26.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->

    <!--Price Section-->
    <section class=\"price-section\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>SEATS PRICE</h6>
                <h2>Choose Your <span>Seats</span></h2>
            </div>
            <div class=\"row price-area\">
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>STARTER</h6>
                            <h2>\$ 26.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch<i class=\"fas fa-times\"></i></li>
                            <li>Workshops<i class=\"fas fa-times\"></i></li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>Standard</h6>
                            <h2>\$ 30.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch<i class=\"fas fa-times\"></i></li>
                            <li>Workshops</li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>Premium</h6>
                            <h2>\$ 35.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch</li>
                            <li>Workshops</li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Price Section-->

    <!--Fact Counter Area-->
    <section class=\"fact-counter-area two\" style=\"background-image:url( ";
        // line 1097
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/background/fact-counter-1.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"row\">

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-microphone\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"8\" data-speed=\"5000\" data-refresh-interval=\"4\">8</span>
                        <p>SPEAKERS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-flag\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"500\" data-speed=\"5000\" data-refresh-interval=\"50\">+500</span>
                        <p>SEATS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-shapes\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"300\" data-speed=\"5000\" data-refresh-interval=\"50\">300</span>
                        <p>TICKETS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-calendar\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"3\" data-speed=\"5000\" data-refresh-interval=\"2\">3</span>
                        <p>DAYS EVENT</p>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->

    <!--Sponsor Section-->
    <section class=\"sponsor-section two\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>SPONSERS</h6>
                <h2>Who Supporting <span>Us</span></h2>
            </div>
            <ul class=\"sponsor-carousel owl-carousel owl-theme\">
                <li><a href=\"#\"><img src=\"";
        // line 1153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/sponsor/s1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"";
        // line 1154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/sponsor/s2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"";
        // line 1155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/sponsor/s3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"";
        // line 1156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/sponsor/s4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
            </ul>
        </div>
    </section>
    <!--End Sponsor Section-->

    <!--News Section-->
    <section class=\"news-section two\" style=\"background: url(";
        // line 1163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/background/news.jpg"), "html", null, true);
        echo ");\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>NEWS</h6>
                <h2>From Our <span>Blog</span></h2>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"";
        // line 1174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/blog/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"";
        // line 1194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/blog/4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"";
        // line 1214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/blog/5.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section-->

    <!--Contact Section-->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-md-12 col-sm-12\">
                    <!--Map Outer-->
                    <div class=\"map-outer\">
                        <!--Map Canvas-->
                        <div class=\"map-canvas\"
                             data-zoom=\"12\"
                             data-lat=\"-37.815038\"
                             data-lng=\"144.967359\"
                             data-type=\"roadmap\"
                             data-hue=\"#ffc400\"
                             data-title=\"184 Collins Street West Victoria,\"
                             data-icon-path=\" ";
        // line 1250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/images/icons/map-marker.png "), "html", null, true);
        echo "\"
                             data-content=\"184 Collins Street West Victoria<br><a href='mailto:info@youremail.com'>info@youremail.com</a>\">
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-md-12 col-sm-12\">
                    <div class=\"contact-form\">
                        <div class=\"title\">
                            <h4>Online Request</h4>
                        </div>
                        <!--Comment Form-->
                        <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/sendemail.php\" id=\"contact-form\">
                            <div class=\"row clearfix\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                                    <input type=\"text\" name=\"username\" placeholder=\"Username\" required>
                                </div>

                                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                                    <input type=\"email\" name=\"email\" placeholder=\"Email address\" required>
                                </div>

                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <input type=\"text\" name=\"subject\" placeholder=\"Subject\" required>
                                </div>

                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <textarea name=\"message\" placeholder=\"Message\"></textarea>
                                </div>

                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <button class=\"theme-btn btn-style-one\" type=\"submit\" name=\"submit-form\">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->

    <!--Scroll to top-->
    <div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-angle-up\"></span></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@User/front/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1525 => 1250,  1486 => 1214,  1463 => 1194,  1440 => 1174,  1426 => 1163,  1416 => 1156,  1412 => 1155,  1408 => 1154,  1404 => 1153,  1345 => 1097,  1258 => 1013,  1241 => 999,  1224 => 985,  1207 => 971,  1190 => 957,  1173 => 943,  1156 => 929,  1139 => 915,  1122 => 901,  1105 => 887,  1088 => 873,  1071 => 859,  1054 => 845,  1037 => 831,  1020 => 817,  1003 => 803,  986 => 789,  969 => 775,  938 => 747,  923 => 735,  908 => 723,  893 => 711,  878 => 699,  846 => 670,  831 => 658,  816 => 646,  801 => 634,  786 => 622,  751 => 590,  730 => 572,  709 => 554,  688 => 536,  667 => 518,  582 => 436,  568 => 425,  562 => 422,  556 => 419,  550 => 416,  513 => 382,  489 => 361,  465 => 340,  441 => 319,  374 => 255,  310 => 194,  294 => 181,  278 => 168,  271 => 163,  262 => 162,  215 => 125,  197 => 110,  159 => 74,  153 => 72,  147 => 69,  142 => 68,  140 => 67,  99 => 29,  79 => 12,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base2.html.twig\"%}
    {% block title %}
        Cité de la Culture || TUNIS
    {% endblock %}
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
                                <li  class=\"current dropdown\"><a href=\"{{ path ('user_homepage') }}\">Home</a></li>
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
                        <li>
                            <div class=\"link-box\">

                            {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                                <a href=\"{{ path('fos_user_security_login') }}\" class=\"theme-btn btn-style-one\">Connexion</a>
                                <a href=\"{{ path('fos_user_registration_register') }}\" class=\"theme-btn btn-style-one\" title=\"\">s'inscrire</a>

                            {% else %}
                                <a class=\"theme-btn btn-style-one\" href=\"{{ path('fos_user_security_logout') }}\" title=\"\">se deconnecter</a>
                            {% endif %}
                            </div>

                        </li>
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
                <a href=\"\" class=\"img-responsive\"><img src=\"{{ asset('front/images/Cit-de-la-culture.png')}}\" alt=\"\" title=\"\"></a>
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
                                    <li><a href=\"\">About Us</a></li>
                                    <li><a href=\"\">Speakers</a></li>
                                    <li><a href=\"\">Speaker Details</a></li>
                                    <li><a href=\"\">Error Page</a></li>
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
{% block body %}

    <section class=\"main-slider\">

        <div class=\"main-slider-carousel owl-carousel owl-theme\">

            <div class=\"slide\" style=\"background-image:url({{ asset('front/images/main-slider/image-1.jpg') }} )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"slide\" style=\"background-image:url( {{ asset('front/images/main-slider/image-2.jpg ') }} )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"slide\" style=\"background-image:url( {{ asset('front/images/main-slider/image-3.jpg ')}} )\">
                <div class=\"container\">
                    <div class=\"content\">
                        <h3>Digital Conference 2018</h3>
                        <h2>The New Era of Technical <br> Companies</h2>
                        <div class=\"text\">18 - 21 DECEMBER, 2017, Alaska</div>
                        <div class=\"link-box\">
                            <a href=\"#\" class=\"theme-btn btn-style-two\">Register Now</a> <a href=\"#\" class=\"theme-btn btn-style-three\">Buy Tickets</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Main Slider-->

    <section class=\"welcome-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"icon-holder\">
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></a>
                            <h6>22 - 25 Feb, 19</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i></a>
                            <h6>Canada</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-sitemap\" aria-hidden=\"true\"></i></a>
                            <h6>500 Seats</h6>
                        </div>
                        <div class=\"item text-center\">
                            <a href=\"#\"><i class=\"fa fa-microphone\" aria-hidden=\"true\"></i></a>
                            <h6>50 Speakers</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"content-text\">
                        <h3>Business<br><span>Conference</span> 2019</h3>
                        <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut labore et dolore magna aliqu enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"btn-style-three\">Buy Ticket</a><a href=\"#\" class=\"btn-style-two\">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About Section-->
    <section class=\"about-section two\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-md-12 col-sm-12\">
                    <div class=\"about-image\">
                        <figure>
                            <img src=\"{{ asset('front/images/about/2.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"play-btn\">
                            <a href=\"https://youtu.be/juEo4ows7Po\" class=\"lightbox-image video-fancybox\" title=\"\"><i class=\"flaticon-play-button\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6 col-md-12 col-sm-12\">
                    <div class=\"about-text\">
                        <div class=\"sec-title\">
                            <h6>LITTLE ABOUT</h6>
                            <h2>Welcome To <br>Our  <span>Wiscon</span></h2>
                        </div>
                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.Bring to the table win-win survival strategies to ensure proactive domination.</p>
                        <div class=\"row\">
                            <div class=\"col-xl-6 col-md-6 col-sm-6\">
                                <div class=\"about-item-two\">
                                    <i class=\"flaticon-gps\"></i>
                                    <span>Tamara Loaf Apt. 068. San Fancisco, CA United State of America</span>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-md-6 col-sm-6\">
                                <div class=\"about-item-two\">
                                    <i class=\"flaticon-clock\"></i>
                                    <span>Sunday to Wednesday Jan 21 to 31, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    <!--Newslatter Section-->
    <section class=\"newslatter-section\">
        <div class=\"container\">
            <div class=\"sec-title-three text-center\">
                <h4>Sign Up For Our Newsletter</h4>
            </div>
            <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/contact.html\">
                <div class=\"form-group\">
                    <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Your Mail Address\" required=\"\">
                    <button type=\"submit\" class=\"btn-style-two\">Subscribes</button>
                </div>
            </form>
        </div>
    </section>
    <!--Newslatter Section-->

    <!-- Team Section -->
    <section class=\"our-team\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>OUR SPEAKERS</h6>
                <h2>All The<span>Professionals</span></h2>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-9 col-md-12 col-sm-12 team-colmun\">
                    <div class=\"bxslider-area\">
                        <div class=\"bxslider\">
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"{{ asset('front/images/team/7.jpg')}}\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"{{ asset('front/images/team/7.jpg')}}\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"{{ asset('front/images/team/7.jpg')}}\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide-item\">
                                <figure class=\"img-box\">
                                    <a href=\"team.html\"><img src=\"{{ asset('front/images/team/7.jpg')}}\" alt=\"\"></a>
                                </figure>
                                <div class=\"content-text\">
                                    <h5>Parker Olsen <span>-Creative Director, Pixel Ltd.</span></h5>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation</p>
                                    <div class=\"link-area clearfix\">
                                        <ul class=\"social-link float-left\">
                                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-vimeo-v\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-pinterest\"></i></a></li>
                                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                        </ul>
                                        <div class=\"link-btn float-right\">
                                            <a href=\"#\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"slider-pager one\">
                            <div class=\"center\">
                                <ul class=\"nav-link\">
                                    <li id=\"slider-prev\"></li>
                                    <li id=\"slider-next\"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-12 col-sm-12 team-colmun\">
                    <div class=\"slider-pager two\">
                        <ul class=\"list-inline thumb-box\">
                            <li>
                                <a class=\"active\" data-slide-index=\"0\" href=\"#\"><figure><img src=\"{{ asset('front/images/team/11.jpg')}}\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"1\" href=\"#\"><figure><img src=\"{{ asset('front/images/team/12.jpg')}}\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"2\" href=\"#\"><figure><img src=\"{{ asset('front/images/team/13.jpg')}}\" alt=\"\"></figure></a>
                            </li>
                            <li>
                                <a data-slide-index=\"3\" href=\"#\"><figure><img src=\"{{ asset('front/images/team/14.jpg')}}\" alt=\"\"></figure></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!--Testimonials Section-->
    <section class=\"testimonials-section\" style=\"background: url({{ asset('front/images/background/testimonials.jpg') }});\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>FEEDBACKS</h6>
                <h2>People Say <span>Nicest Thing</span></h2>
            </div>
            <div class=\"testimonial-container\">
                <div class=\"testimonial-carousel owl-carousel owl-theme\">
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                    <div class=\"testimonial-item-one text-center\">
                        <span>“</span>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative</p>
                        <h6>Alex Patterson</h6>
                        <div class=\"text\">UI Designer, CNN</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonials Section-->

    <!--Schedule Section-->
    <section class=\"schedule-section one\" id=\"schedule-tab\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>EVENT TIMELINE</h6>
                <h2>Conference <span>Schedule</span></h2>
            </div>
            <div class=\"schedule-area\">
                <div class=\"schedule-title\">
                    <div class=\"item active\" data-tab-name=\"day-one\">
                        <div class=\"item-text\">
                            <h6>DAY 1</h6>
                            <span>5 jan, 2018</span>
                        </div>
                    </div>
                    <div class=\"item\" data-tab-name=\"day-two\">
                        <div class=\"item-text\">
                            <h6>DAY 2</h6>
                            <span>15 jan, 2018</span>
                        </div>
                    </div>
                    <div class=\"item\" data-tab-name=\"day-three\">
                        <div class=\"item-text\">
                            <h6>DAY 3</h6>
                            <span>18 jan, 2018</span>
                        </div>
                    </div>
                </div>
                <div class=\"schedule-content clearfix\">
                    <div id=\"day-one\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Introduction to UI/Ux
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-1.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        09:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">02</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Basics WordPress
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-2.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        10:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">03</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        WP Plugins Installation
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-3.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        11:00 AM
                                    </td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">04</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Basic GO Language
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-4.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        12:00 PM
                                    </td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">05</td>
                                    <td class=\"session\">
                                        <i class=\"fas fa-caret-right\"></i>
                                        Business Analysis
                                    </td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-5.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\">
                                        <i class=\"far fa-clock\"></i>
                                        02:00 PM
                                    </td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id=\"day-two\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i> Introduction to UI/Ux</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-1.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>09:00 AM</td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basics WordPress</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-2.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>10:00 AM</td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>WP Plugins Installation</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-3.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>11:00 AM</td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basic GO Language</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-4.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>12:00 PM</td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Business Analysis</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-5.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>02:00 PM</td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id=\"day-three\" class=\"item1\">
                        <div class=\"inner-box  table-responsive\">
                            <table class=\"table table-hover\">
                                <thead>
                                <tr>
                                    <th class=\"srial\">#</th>
                                    <th class=\"session\">Session</th>
                                    <th class=\"speakers\">Speakers</th>
                                    <th class=\"time\">Time</th>
                                    <th class=\"venue\">Venue</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i> Introduction to UI/Ux</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-1.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>09:00 AM</td>
                                    <td class=\"venue\">Hall 1</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basics WordPress</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-2.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Jhone Doe</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>10:00 AM</td>
                                    <td class=\"venue\">Hall 2</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>WP Plugins Installation</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-3.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Margarita Rose</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>11:00 AM</td>
                                    <td class=\"venue\">Hall 3</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Basic GO Language</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-4.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Henry Keen</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>12:00 PM</td>
                                    <td class=\"venue\">Hall 4</td>
                                </tr>
                                <tr>
                                    <td class=\"srial\">01</td>
                                    <td class=\"session\"><i class=\"fas fa-caret-right\"></i>Business Analysis</td>
                                    <td class=\"speakers\">
                                        <figure>
                                            <img src=\"{{ asset('front/images/resources/schedule-5.jpg')}}\" alt=\"\">
                                        </figure>
                                        <h6>Donald Pump</h6>
                                    </td>
                                    <td class=\"time\"><i class=\"far fa-clock\"></i>02:00 PM</td>
                                    <td class=\"venue\">Hall 5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Schedule Section-->

    <!--Gallery Section-->
    <section class=\"gallery-section two\">
        <div class=\"container-fluid\">
            <div class=\"sec-title-two text-center\">
                <h6>OUR GALLERY</h6>
                <h2>Our Latest Events</h2>
            </div>
            <div class=\"row gallery-one\">
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/9.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/10.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/11.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/12.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/13.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/14.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/15.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/16.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/17.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/18.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/19.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/20.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/21.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/22.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/23.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/24.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/25.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"p-0 col-xl-2 col-md-4 col-sm-6\">
                    <div class=\"image-box\">
                        <figure>
                            <img src=\"{{ asset('front/images/gallery/26.jpg')}}\" alt=\"\">
                        </figure>
                        <div class=\"location\">
                            <a href=\"#\">
                                <i class=\"flaticon-placeholder\"></i>
                                <span>Beekman Street,</span>
                                <h6>New York</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->

    <!--Price Section-->
    <section class=\"price-section\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>SEATS PRICE</h6>
                <h2>Choose Your <span>Seats</span></h2>
            </div>
            <div class=\"row price-area\">
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>STARTER</h6>
                            <h2>\$ 26.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch<i class=\"fas fa-times\"></i></li>
                            <li>Workshops<i class=\"fas fa-times\"></i></li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>Standard</h6>
                            <h2>\$ 30.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch<i class=\"fas fa-times\"></i></li>
                            <li>Workshops</li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-sm-12\">
                    <div class=\"price-item-one text-center\">
                        <div class=\"title\">
                            <h6>Premium</h6>
                            <h2>\$ 35.00<span>/day</span></h2>
                        </div>
                        <ul class=\"item-list\">
                            <li>Conference Seats</li>
                            <li>Coffee Breaks</li>
                            <li>Lunch</li>
                            <li>Workshops</li>
                            <li>Papers</li>
                        </ul>
                        <div class=\"link-btn\">
                            <a href=\"#\" class=\"theme-btn btn-style-one\">Buy a Seat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Price Section-->

    <!--Fact Counter Area-->
    <section class=\"fact-counter-area two\" style=\"background-image:url( {{ asset('front/images/background/fact-counter-1.jpg') }});\">
        <div class=\"container\">
            <div class=\"row\">

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-microphone\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"8\" data-speed=\"5000\" data-refresh-interval=\"4\">8</span>
                        <p>SPEAKERS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-flag\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"500\" data-speed=\"5000\" data-refresh-interval=\"50\">+500</span>
                        <p>SEATS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-shapes\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"300\" data-speed=\"5000\" data-refresh-interval=\"50\">300</span>
                        <p>TICKETS</p>
                    </div>
                </div>
                <!--End single item-->

                <!--Start single item-->
                <div class=\"col-xl-3 col-md-6 col-sm-12\">
                    <div class=\"fact-single-item two text-center\">
                        <i class=\"flaticon-calendar\"></i>
                        <span class=\"timer\" data-from=\"1\" data-to=\"3\" data-speed=\"5000\" data-refresh-interval=\"2\">3</span>
                        <p>DAYS EVENT</p>
                    </div>
                </div>
                <!--End single item-->
            </div>
        </div>
    </section>
    <!--End Fact Counter Area-->

    <!--Sponsor Section-->
    <section class=\"sponsor-section two\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>SPONSERS</h6>
                <h2>Who Supporting <span>Us</span></h2>
            </div>
            <ul class=\"sponsor-carousel owl-carousel owl-theme\">
                <li><a href=\"#\"><img src=\"{{ asset('front/images/sponsor/s1.png')}}\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"{{ asset('front/images/sponsor/s2.png')}}\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"{{ asset('front/images/sponsor/s3.png')}}\" alt=\"\"></a></li>
                <li><a href=\"#\"><img src=\"{{ asset('front/images/sponsor/s4.png')}}\" alt=\"\"></a></li>
            </ul>
        </div>
    </section>
    <!--End Sponsor Section-->

    <!--News Section-->
    <section class=\"news-section two\" style=\"background: url({{ asset('front/images/background/news.jpg') }});\">
        <div class=\"container\">
            <div class=\"sec-title-two text-center\">
                <h6>NEWS</h6>
                <h2>From Our <span>Blog</span></h2>
            </div>
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"{{ asset('front/images/blog/3.jpg')}}\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"{{ asset('front/images/blog/4.jpg')}}\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-12 col-sm-12\">
                    <div class=\"blog-item-one\">
                        <div class=\"iamge-box\">
                            <figure>
                                <a href=\"blog-single.html\"><img src=\"{{ asset('front/images/blog/5.jpg')}}\" alt=\"\"></a>
                            </figure>
                        </div>
                        <div class=\"image-text\">
                            <a href=\"blog-single.html\"><h5>Pure Conference Power</h5></a>
                            <div class=\"blog-info clearfix\">
                                <ul class=\"social-link\">
                                    <li><i class=\"far fa-clock\"></i>Jan 02, 2018</li>
                                </ul>
                                <div class=\"link-btn\">
                                    <a href=\"blog-single.html\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section-->

    <!--Contact Section-->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-5 col-md-12 col-sm-12\">
                    <!--Map Outer-->
                    <div class=\"map-outer\">
                        <!--Map Canvas-->
                        <div class=\"map-canvas\"
                             data-zoom=\"12\"
                             data-lat=\"-37.815038\"
                             data-lng=\"144.967359\"
                             data-type=\"roadmap\"
                             data-hue=\"#ffc400\"
                             data-title=\"184 Collins Street West Victoria,\"
                             data-icon-path=\" {{ asset('front/images/icons/map-marker.png ') }}\"
                             data-content=\"184 Collins Street West Victoria<br><a href='mailto:info@youremail.com'>info@youremail.com</a>\">
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-7 col-md-12 col-sm-12\">
                    <div class=\"contact-form\">
                        <div class=\"title\">
                            <h4>Online Request</h4>
                        </div>
                        <!--Comment Form-->
                        <form method=\"post\" action=\"http://html.tonatheme.com/2019/Wiscon/sendemail.php\" id=\"contact-form\">
                            <div class=\"row clearfix\">
                                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                                    <input type=\"text\" name=\"username\" placeholder=\"Username\" required>
                                </div>

                                <div class=\"col-md-6 col-sm-6 col-xs-12 form-group\">
                                    <input type=\"email\" name=\"email\" placeholder=\"Email address\" required>
                                </div>

                                <div class=\"col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <input type=\"text\" name=\"subject\" placeholder=\"Subject\" required>
                                </div>

                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <textarea name=\"message\" placeholder=\"Message\"></textarea>
                                </div>

                                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group\">
                                    <button class=\"theme-btn btn-style-one\" type=\"submit\" name=\"submit-form\">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->

    <!--Scroll to top-->
    <div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-angle-up\"></span></div>
{% endblock %}


", "@User/front/index.html.twig", "C:\\Users\\user\\Documents\\GitHub\\PIDEVWEBB\\src\\UserBundle\\Resources\\views\\front\\index.html.twig");
    }
}
