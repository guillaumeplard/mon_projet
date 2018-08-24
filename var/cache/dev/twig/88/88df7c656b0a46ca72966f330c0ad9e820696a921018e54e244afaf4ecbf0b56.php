<?php

/* @gaelic/Default/footballgaelic.html.twig */
class __TwigTemplate_a3c541edf28265f5cfa03f0b40fc46b37d728ab076347b517fd4d2973402c571 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/footballgaelic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/footballgaelic.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"32x32\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-32.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"64x64\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-64.png"), "html", null, true);
        echo "\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"96x96\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicons/favicon-96.png"), "html", null, true);
        echo "\" type=\"image/png\"><meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>media</title>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        echo "\">

</head>

<body>
<div class=\"fondFootballGaelic\">
<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\"><img class=\"logoFootballGaelic\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"\"></a>
<h1 class=\"titreFootballGaelic\">Media</h1>


</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/footballgaelic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  62 => 14,  57 => 12,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('images/favicon/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ asset('images/favicon/favicon.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"32x32\" href=\"{{ asset('images/favicons/favicon-32.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"64x64\" href=\"{{ asset('images/favicons/favicon-64.png') }}\" type=\"image/png\">
    <link rel=\"icon\" sizes=\"96x96\" href=\"{{ asset('images/favicons/favicon-96.png') }}\" type=\"image/png\"><meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>media</title>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"{{ asset('asset/js/script.js') }}\"></script>

    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/main.css') }}\">

</head>

<body>
<div class=\"fondFootballGaelic\">
<a href=\"{{ path('gaelic_homepage')}}\"><img class=\"logoFootballGaelic\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"\"></a>
<h1 class=\"titreFootballGaelic\">Media</h1>


</div>
</body>
</html>", "@gaelic/Default/footballgaelic.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/footballgaelic.html.twig");
    }
}
