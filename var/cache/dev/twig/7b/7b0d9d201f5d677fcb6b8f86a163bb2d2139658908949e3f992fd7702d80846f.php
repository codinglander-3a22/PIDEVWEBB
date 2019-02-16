<?php

/* base.html.twig */
class __TwigTemplate_73b339b4d92c3ddd9bf4054b17f37ff9e355aa61aff0f7f65e3599c18a17b2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'profile' => array($this, 'block_profile'),
            'user2' => array($this, 'block_user2'),
            'profile2' => array($this, 'block_profile2'),
            'profile3' => array($this, 'block_profile3'),
            'menu_bar' => array($this, 'block_menu_bar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" >
    </head>

<body class=\"hold-transition skin-blue sidebar-mini\">

    <div class=\"wrapper\">

        <header class=\"main-header\">
            ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 195
        echo "        </header>

        <aside class=\"main-sidebar\">

            <section class=\"sidebar\">
                <div class=\"user-panel\">
                    ";
        // line 201
        $this->displayBlock('profile3', $context, $blocks);
        // line 211
        echo "                </div>


                <!-- Sidebar Menu -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    ";
        // line 216
        $this->displayBlock('menu_bar', $context, $blocks);
        // line 267
        echo "                </ul>


                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class=\"content-wrapper\">


            <section class=\"content container-fluid\">
                ";
        // line 279
        $this->displayBlock('body', $context, $blocks);
        // line 282
        echo "            </section>


        </div>
        <!-- /.content-wrapper -->


        <footer class=\"main-footer\">
            ";
        // line 290
        $this->displayBlock('footer', $context, $blocks);
        // line 293
        echo "        </footer>

    </div>

    ";
        // line 297
        $this->displayBlock('javascripts', $context, $blocks);
        // line 304
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">


            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">


            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "            <a href=\"\" class=\"logo\">
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class=\"dropdown notifications-menu\">
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class=\"menu\">
                                        <li><!-- start notification -->
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class=\"dropdown tasks-menu\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class=\"progress xs\">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class=\"dropdown user user-menu\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                ";
        // line 146
        $this->displayBlock('profile', $context, $blocks);
        // line 151
        echo "                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- The user image in the menu -->
                                <li class=\"user-header\">
                                    ";
        // line 155
        $this->displayBlock('profile2', $context, $blocks);
        // line 163
        echo "                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_profile($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile"));

        // line 147
        echo "                                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class=\"hidden-xs\">";
        // line 149
        $this->displayBlock('user2', $context, $blocks);
        echo "</span>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_user2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user2"));

        echo " Foulen ben Foulen ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_profile2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile2"));

        // line 156
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                                    <p>
                                        Foulen ben Foulen
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_profile3($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "profile3"));

        // line 202
        echo "                    <div class=\"pull-left image\">
                        <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Foulen ben Foulen</p>
                        <!-- Status -->
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 216
    public function block_menu_bar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_bar"));

        // line 217
        echo "                    <li class=\"header\">HEADER</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Index</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module1</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 2 </span></a></li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 3 </span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 4 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 5 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 6 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 280
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 290
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 291
        echo "            <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("back/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 302,  599 => 300,  593 => 298,  584 => 297,  573 => 291,  564 => 290,  553 => 280,  544 => 279,  485 => 217,  476 => 216,  458 => 203,  455 => 202,  446 => 201,  428 => 156,  419 => 155,  390 => 149,  384 => 147,  375 => 146,  355 => 185,  331 => 163,  329 => 155,  323 => 151,  321 => 146,  206 => 33,  197 => 32,  182 => 18,  177 => 16,  171 => 13,  166 => 11,  160 => 9,  151 => 8,  133 => 7,  121 => 304,  119 => 297,  113 => 293,  111 => 290,  101 => 282,  99 => 279,  85 => 267,  83 => 216,  76 => 211,  74 => 201,  66 => 195,  64 => 32,  53 => 24,  50 => 23,  48 => 8,  44 => 7,  36 => 1,);
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
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('back/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('back/bower_components/font-awesome/css/font-awesome.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('back/bower_components/Ionicons/css/ionicons.min.css') }}\">


            <link rel=\"stylesheet\" href=\"{{ asset('back/dist/css/AdminLTE.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('back/dist/css/skins/skin-blue.min.css') }}\">


            <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
         {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" >
    </head>

<body class=\"hold-transition skin-blue sidebar-mini\">

    <div class=\"wrapper\">

        <header class=\"main-header\">
            {% block header %}
            <a href=\"\" class=\"logo\">
                <span class=\"logo-mini\"><b>A</b>LT</span>
                <span class=\"logo-lg\"><b>Admin</b>LTE</span>
            </a>

            <!-- Header Navbar -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class=\"navbar-custom-menu\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                    </ul>
                                    <!-- /.menu -->
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class=\"dropdown notifications-menu\">
                            <!-- Menu toggle button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-bell-o\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class=\"menu\">
                                        <li><!-- start notification -->
                                            <a href=\"#\">
                                                <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class=\"dropdown tasks-menu\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-flag-o\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class=\"progress xs\">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\"
                                                         aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class=\"dropdown user user-menu\">
                            <!-- Menu Toggle Button -->
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                {% block profile %}
                                <img src=\"{{ asset('back/dist/img/user2-160x160.jpg') }}\" class=\"user-image\" alt=\"User Image\">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class=\"hidden-xs\">{% block user2 %} Foulen ben Foulen {% endblock %}</span>
                                {% endblock %}
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- The user image in the menu -->
                                <li class=\"user-header\">
                                    {% block profile2 %}
                                    <img src=\"{{ asset('back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">

                                    <p>
                                        Foulen ben Foulen
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                    {% endblock %}
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
            {% endblock %}
        </header>

        <aside class=\"main-sidebar\">

            <section class=\"sidebar\">
                <div class=\"user-panel\">
                    {% block profile3 %}
                    <div class=\"pull-left image\">
                        <img src=\"{{ asset('back/dist/img/user2-160x160.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <div class=\"pull-left info\">
                        <p>Foulen ben Foulen</p>
                        <!-- Status -->
                        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                    </div>
                    {% endblock %}
                </div>


                <!-- Sidebar Menu -->
                <ul class=\"sidebar-menu\" data-widget=\"tree\">
                    {% block menu_bar %}
                    <li class=\"header\">HEADER</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Index</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module1</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 2 </span></a></li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 3 </span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 4 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 5 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Module 6 </span>
                            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\">Link in level 2</a></li>
                            <li><a href=\"#\">Link in level 2</a></li>
                        </ul>
                    </li>
                    {% endblock %}
                </ul>


                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class=\"content-wrapper\">


            <section class=\"content container-fluid\">
                {% block body %}

                {% endblock %}
            </section>


        </div>
        <!-- /.content-wrapper -->


        <footer class=\"main-footer\">
            {% block footer %}
            <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
            {% endblock %}
        </footer>

    </div>

    {% block javascripts %}
        <script src=\"{{ asset('back/bower_components/jquery/dist/jquery.min.js')}}\"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src=\"{{ asset('back/bower_components/bootstrap/dist/js/bootstrap.min.js')}}\"></script>
        <!-- AdminLTE App -->
        <script src=\"{{ asset('back/dist/js/adminlte.min.js')}}\"></script>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "D:\\wamp64\\www\\PIDEVWEB\\app\\Resources\\views\\base.html.twig");
    }
}
