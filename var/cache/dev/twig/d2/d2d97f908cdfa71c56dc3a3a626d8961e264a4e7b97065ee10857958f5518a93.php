<?php

/* @SalleMatriel/back/ajoutReservation.html.twig */
class __TwigTemplate_48b08269f7a0b9cf62e61967c098f0f42e0947527e81e851add6020510521678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@SalleMatriel/back/ajoutReservation.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu_bar' => [$this, 'block_menu_bar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalleMatriel/back/ajoutReservation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SalleMatriel/back/ajoutReservation.html.twig"));

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
        echo "    Gestion Programme || ADMIN
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_menu_bar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_bar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_bar"));

        // line 30
        echo "    <li class=\"header\">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\"><i class=\"fa fa-link\"></i> <span>Index</span></a></li>
    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("evenement_homepage");
        echo "\"><i class=\"fa fa-link\"></i> <span>Gestion des evénements</span></a></li>
    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programme_homepage");
        echo "\"><i class=\"fa fa-link\"></i> <span>Gestion des programmes </span></a></li>
    <li class=\"active treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des Salles <br> et  Matériels</span>
            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("salle_homepage");
        echo "\">Gestion des Salles</a></li>
            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("matriel_homepage");
        echo "\">Gestion des Matériels</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des actualités <br>et publicités </span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"#\">Gestion des actualités</a></li>
            <li><a href=\"#\">Gestion des publicités</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des planning<br> et ventes</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"#\">Link in level 2</a></li>
            <li><a href=\"#\">Link in level 2</a></li>
        </ul>
    </li>
    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_homepage");
        echo "\"><i class=\"fa fa-link\"></i><span>Forum </span></a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "
        Gestion des salles
        <center>
            <h1>Ajouter Reservation</h1>
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form_add"] ?? $this->getContext($context, "form_add")), 'form');
        echo "
        </center>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SalleMatriel/back/ajoutReservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 76,  147 => 72,  138 => 71,  126 => 68,  98 => 43,  94 => 42,  83 => 34,  79 => 33,  75 => 32,  71 => 30,  62 => 29,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\"%}
{% block title %}
    Gestion Programme || ADMIN
{% endblock %}

{#{% block profile %}
   <img src=\"{{ user.image }}\" class=\"user-image\" alt=\"User Image\">
    <!-- hidden-xs hides the username on small devices so only the image appears. -->
    <span class=\"hidden-xs\">{{ user.nom }} {{ user.prenom }} </span>
{% endblock %}
{% block profile2 %}
    <img src=\"{{ user.image }}\" class=\"img-circle\" alt=\"User Image\">

    <p>
        {{ user.nom }} {{ user.prenom }}
        <small>Member since {{ user.nom }} </small>
    </p>
{% endblock %}
{% block profile3 %}
    <div class=\"pull-left image\">
        <img src=\"{{ user.image }}\" class=\"img-circle\" alt=\"User Image\">
    </div>
    <div class=\"pull-left info\">
        <p>{{ user.nom }} {{ user.prenom }}</p>
        <!-- Status -->
        <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
    </div>
{% endblock %}#}
{% block menu_bar %}
    <li class=\"header\">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href=\"{{ path('admin') }}\"><i class=\"fa fa-link\"></i> <span>Index</span></a></li>
    <li><a href=\"{{ path('evenement_homepage') }}\"><i class=\"fa fa-link\"></i> <span>Gestion des evénements</span></a></li>
    <li><a href=\"{{ path('programme_homepage') }}\"><i class=\"fa fa-link\"></i> <span>Gestion des programmes </span></a></li>
    <li class=\"active treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des Salles <br> et  Matériels</span>
            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
        </a>
        <ul class=\"treeview-menu\">
            <li class=\"active\"><a href=\"{{ path('salle_homepage') }}\">Gestion des Salles</a></li>
            <li><a href=\"{{ path('matriel_homepage') }}\">Gestion des Matériels</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des actualités <br>et publicités </span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"#\">Gestion des actualités</a></li>
            <li><a href=\"#\">Gestion des publicités</a></li>
        </ul>
    </li>
    <li class=\"treeview\">
        <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Gestion des planning<br> et ventes</span>
            <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
        </a>
        <ul class=\"treeview-menu\">
            <li><a href=\"#\">Link in level 2</a></li>
            <li><a href=\"#\">Link in level 2</a></li>
        </ul>
    </li>
    <li><a href=\"{{ path('forum_homepage') }}\"><i class=\"fa fa-link\"></i><span>Forum </span></a></li>
{% endblock %}

    {% block body %}

        Gestion des salles
        <center>
            <h1>Ajouter Reservation</h1>
            {{ form(form_add) }}
        </center>

    {% endblock %}
", "@SalleMatriel/back/ajoutReservation.html.twig", "C:\\Users\\user\\Documents\\GitHub\\PIDEVWEBB\\src\\SalleMatrielBundle\\Resources\\views\\back\\ajoutReservation.html.twig");
    }
}
