<?php

/* @gaelic/Default/base.html.twig */
class __TwigTemplate_8bfe436d46d79ae73b6b256b702d00d3cc6719779f2eef1a919084a9568d7251 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"32x32\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"64x64\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-64.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"96x96\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-96.png"), "html", null, true);
        echo "\" type=\"image/png\"><meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        echo "\">
    <title>Document</title>
</head>
<body>
<div class=\"fond_homepage\">
";
        // line 31
        echo "<nav>
    <div class=\"d-flex align-items-center justify-content-around menu\">
        <div class=\"menuLink\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_page");
        echo "\">Le Club</a></div>
        <div class=\"menuLink\"><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_page");
        echo "\">Média</a></div>
        <div class=\"logo\"><img class=\"logo1\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"logo\"></div>
        <div class=\"menuLink\"><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_page");
        echo "\">Partenaires</a></div>
        <div class=\"menuLink\"><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_page");
        echo "\">Contact</a></div>
    </div>
</nav>
<a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\"><button type=\"button\" class=\"btn\">se connecter</button></a>

<div class=\"d-flex flex-column justify-content-center accueil\">
    <div class=\"presentation animate text-center text-black pb-5\">
        <p>Retrouvez nous</p>
        <p>le lundi au stade du Breillan à Blanquefort </p>
        <p>le jeudi au stade Colette Besson (terrain 16) à Bordeaux Lac</p>
    </div>

<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("footballgaelic_page");
        echo "\" target=\"_blank\">
    <div class=\"bouton\">
        Découvrir notre sport
    </div>
</a>

</div>
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  95 => 40,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 31,  61 => 16,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ asset('images/favicon/favicon.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"32x32\" href=\"{{ asset('images/favicons/favicon-32.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"64x64\" href=\"{{ asset('images/favicons/favicon-64.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"96x96\" href=\"{{ asset('images/favicons/favicon-96.png') }}\" type=\"image/png\"><meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/main.css') }}\">
    <title>Document</title>
</head>
<body>
<div class=\"fond_homepage\">
{#<nav>
    <ul class=\"nav\">
        <li>Football Gaélique</li>
        <li>Le club</li>
        <li><img src=\"{{ asset('images/gaelic-football.png') }}\" alt=\"\"></li>
        <li>Média</li>
        <li>Partenaire</li>
        <li>Contact</li>
    </ul>
</nav>#}
<nav>
    <div class=\"d-flex align-items-center justify-content-around menu\">
        <div class=\"menuLink\"><a href=\"{{ path('club_page') }}\">Le Club</a></div>
        <div class=\"menuLink\"><a href=\"{{ path('media_page') }}\">Média</a></div>
        <div class=\"logo\"><img class=\"logo1\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"logo\"></div>
        <div class=\"menuLink\"><a href=\"{{ path('sponsors_page') }}\">Partenaires</a></div>
        <div class=\"menuLink\"><a href=\"{{ path('contact_page') }}\">Contact</a></div>
    </div>
</nav>
<a href=\"{{ path('fos_user_security_login') }}\"><button type=\"button\" class=\"btn\">se connecter</button></a>

<div class=\"d-flex flex-column justify-content-center accueil\">
    <div class=\"presentation animate text-center text-black pb-5\">
        <p>Retrouvez nous</p>
        <p>le lundi au stade du Breillan à Blanquefort </p>
        <p>le jeudi au stade Colette Besson (terrain 16) à Bordeaux Lac</p>
    </div>

<a href=\"{{ path('footballgaelic_page') }}\" target=\"_blank\">
    <div class=\"bouton\">
        Découvrir notre sport
    </div>
</a>

</div>
</div>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>


</body>
</html>", "@gaelic/Default/base.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/base.html.twig");
    }
}
