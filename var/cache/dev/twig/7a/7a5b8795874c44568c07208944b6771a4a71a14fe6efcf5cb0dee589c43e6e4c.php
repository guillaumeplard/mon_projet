<?php

/* gaelicBundle:Default:gaelic.html.twig */
class __TwigTemplate_81e461f68f977a36eed3983b599eac5598c63b867220a95aed6152810867f358 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:gaelic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:gaelic.html.twig"));

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
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        echo "\">
    <title>Accueil</title>
</head>
<body>
<!-- fond de la page gaelic.html.twig-->
<div class=\"fond_homepage\">

<!-- Menu du header-->
    <div class=\"input-group mb-3 dismedia\">
        <div class=\"input-group-prepend\">
            <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\">
                    <img class=\"logoDisMedia\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></button>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\">Accueil</a>
                <a class=\"dropdown-item\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_page");
        echo "\">Le club</a>
                <a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_page");
        echo "\">partenaire</a>
                <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_page");
        echo "\">Contact</a>
                <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\">Se connecter</a>
            </div>
        </div>
    </div>


    <nav>
        <h1 class=\"accueilGaelique\">Accueil</h1>
        <div class=\"d-flex align-items-center justify-content-around menu\">
            <div class=\"menuLink\"><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_page");
        echo "\" alt=\"le club\">Le Club</a></div>
            <div class=\"menuLink\"><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_page");
        echo "\">Média</a></div>
            <div class=\"logo\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\"><img class=\"logo1\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"logo\"></a></div>
            <div class=\"menuLink\"><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsors_page");
        echo "\">Partenaires</a></div>
            <div class=\"menuLink\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_page");
        echo "\">Contact</a></div>
        </div>
    </nav>


    <!-- bouton administrateur pour aller sur l'interface d'EasyAdmin-->

    <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
        echo "\"><button  class=\"btnEasy\">Se connecter</button></a>



<!-- affichage de l'animation pour le jour des entrainement-->

    <div class=\"d-flex flex-column justify-content-center accueil\">
        <div class=\"presentation animate text-center pb-5\">
            <p class=\"accueilPolice\">Retrouvez nous</p>
            <p class=\"accueilPolice\">le lundi au Stade du Breillan à Blanquefort </p>
            <p class=\"accueilPolice\">le jeudi au Stade Colette Besson (terrain 16) à Bordeaux Lac</p>
        </div>
    </div>

    <div class=\"bouton\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("footballgaelic_page");
        echo "\" target=\"_blank\">Découvrir notre sport</a></div>


</div>

<!-- boucle twig pour faire afficher ma table New avec ses attributs-->

<div class=\"container-fluid new\">
    <div class=\"actuGaelic text-center\"><h2>Actualité</h2></div>
    ";
        // line 79
        $context["i"] = 0;
        // line 80
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 80, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 81
            echo "        ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 81, $this->source); })()) < 3)) {
                // line 82
                echo "            ";
                if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 82, $this->source); })()) % 2) == 0)) {
                    // line 83
                    echo "
                <div class=\"text-center titreNew\"><p>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "titre", array()), "html", null, true);
                    echo "</p></div>
                <div class=\"row\">
                    <div class=\"container d-flex justify-content-center m-t-4 m-b-2 blocActualite\">
                        <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("new/" . twig_get_attribute($this->env, $this->source, $context["new"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                        <div class=\"col-lg-8 text-justify\"><textarea>";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "contenu", array());
                    echo "</textarea></div>
                    </div>
                </div>
            ";
                } else {
                    // line 92
                    echo "                <div class=\"text-center titreNew\"><p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "titre", array()), "html", null, true);
                    echo "</p></div>
                <div class=\"row\">
                    <div class=\"container d-flex justify-content-center m-t-4 m-b-4 blocActualite\">
                        <div class=\"col-lg-8 text-justify textar\"><textarea><p>";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "contenu", array());
                    echo "</p></textarea></div>
                        <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("new/" . twig_get_attribute($this->env, $this->source, $context["new"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                    </div>
                </div>
            ";
                }
                // line 100
                echo "        ";
            }
            // line 101
            echo "        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 101, $this->source); })()) + 1);
            // line 102
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "    <div class=\"\">

        <div><img class=\"avantFooter\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bandeau.png"), "html", null, true);
        echo "\" alt=\"\"></div>

    </div>

</div>
<!--- footer du gaelic.html.twig-->

<div class=\"burdigaelaFooter\">
    <p class=\"mention\"> 2018 - ©Burdigaela - All rights reserved - ©Guillaume Plard</p>
    <p class=\"follow\">#SUIVEZ-NOUS</p>
    <a href=\"https://www.facebook.com/BordeauxGaelicFootball/\"><img class=\"reseau\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQeSURBVGhD7Vk7aBRRFL0rIgh+8JOd2RgttFAUEVQsNP6iKUQUfwEVCz8kMbubSAqjqURBez8J0TSKnUYLsbQQFQsFE9TSD0JaQ7CKKOo58+6Emd3ZzS672RlhDlzyzvvcd8/7zds8iREjRmVokwXz02Jvy4rdEoax705ZOE/DKR8UkElYd2A/swn7b5jGGGAD52XRXA2vNBgR9og6epAR+3BWkrvDsE6xj2QT1pARZI8wNg1zanAmnIZindKs0MFYzMBa/ZpVHLqkuJweaFZkgLgewiZK2jNQvoPKOaXkHVK/FI2vXBKZQX5O6leiTi/TBJbdxqxYWaWCdBPspFKUpw5mJXVAKctPdoq1Uyl5lj6Usv9e9sE0+2TfjIHcOQBMbNvJiwKO97JyWlKN5OjkrOHWGi2/aJyZUUFHfeDjTBNYx09gX5Wy/AVNKcu/so5SYVv6YJo+6RvlV8nZp8MRg+GpRnLGSF4UuUIwmq3k7iihvAf8T1rq5jg8Yd/Auh1jmkD6MfI+K6WQ5zSlrP+ZdZSy/hh9ME2f9I28y+TsExyBp1pNeQVCuqVhoXfTZ2RRPfhRpRjFuhX+pVO3LiPJZqUs30xTivbJZtZRyoE6QB9KwZPH2IdStLdOMwamKxISJcRCNGtagJNntdMXlhKWzz4uPyyzVWfFSqI4YWr5ERkhWOuz4b8Hm/+bE1ABw6l1U5v4EAkhXZJaBr8fTaDWK3wTutOS3IX8Dfwu4BDYj7wTOLFGIeSpNvMhdCF6d/sE++E94YKAvt9HVgj8DcJ+e7/ohRBZIe3SsARLiXe3Qc0qisgKwbpvpz/cudZr1iTMx9U+jLI21yK7RzAb9+Fv3L10ukA/XQj4lxNYnll3tZoP4c5Iwn6GgEeUOmiT1GIInEDZa/fkco0zd0lWz9KqPoQ9I+8wwi+VOsByO6QBNWlWSQh7Rt7nCjF7gfsmuVazSkJNhGAPzERgx70b1wRsjeYKSYvd4QSE63pefVzZ3dtuLmoiBO02meCCrJCQAibWGa3qQ02EeDo50yHJ5V7z/r4g+Eswt46pZ5Yc9tAerepDrYVM3UkB4AfbBfrgvUyzfPh/hCSseziqfyAZ3jW+GkKwl97C3ijNQ02E4LTZ4nQSaOVs9uCvOlETIc6PpoR9DYHc9hqWy3f8DRSCsoc59fvdfzsFoSZCCgG+8j6Ik0Ki+EEshFhIAGIhmlURYiEBKEsIrgm+Z4VKUU0huIOV/qygDz349WYNaVZFqKoQxMTYSn5LROUB01HlT2/VEsL/yrMN7JZmTQ3OCjofNg2tIS4z7wNlOYZL4BfYh5y8645vvr148oPNbsHAPtJYht13mZLB6YODPrPMnJEIzRgDYylbhBcUhJHbambF/5g/3Wb6TG0t+309RowYORD5B3RJHZDaTls0AAAAAElFTkSuQmCC\"></a>
    <a href=\"https://twitter.com/hashtag/burdigaela\"><img class=\"reseau\" src=\"data:image/png;base64,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\"></a>
    <a href=\"https://www.instagram.com/burdigaela/?hl=fr\"><img class=\"reseau\" src=\"data:image/png;base64,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\"></a>
</div>
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "gaelicBundle:Default:gaelic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 105,  234 => 103,  228 => 102,  225 => 101,  222 => 100,  215 => 96,  211 => 95,  204 => 92,  197 => 88,  193 => 87,  187 => 84,  184 => 83,  181 => 82,  178 => 81,  173 => 80,  171 => 79,  159 => 70,  142 => 56,  132 => 49,  128 => 48,  122 => 47,  118 => 46,  114 => 45,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  81 => 30,  77 => 29,  64 => 19,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  29 => 1,);
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
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/main.css') }}\">
    <title>Accueil</title>
</head>
<body>
<!-- fond de la page gaelic.html.twig-->
<div class=\"fond_homepage\">

<!-- Menu du header-->
    <div class=\"input-group mb-3 dismedia\">
        <div class=\"input-group-prepend\">
            <button class=\"btn btn-outline-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><a href=\"{{ path('gaelic_homepage') }}\">
                    <img class=\"logoDisMedia\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"logo\"></a></button>
            <div class=\"dropdown-menu\">
                <a class=\"dropdown-item\" href=\"{{ path('gaelic_homepage') }}\">Accueil</a>
                <a class=\"dropdown-item\" href=\"{{ path('club_page') }}\">Le club</a>
                <a class=\"dropdown-item\" href=\"{{ path('sponsors_page') }}\">partenaire</a>
                <a class=\"dropdown-item\" href=\"{{ path('contact_page') }}\">Contact</a>
                <a class=\"dropdown-item\" href=\"{{ path('easyadmin') }}\">Se connecter</a>
            </div>
        </div>
    </div>


    <nav>
        <h1 class=\"accueilGaelique\">Accueil</h1>
        <div class=\"d-flex align-items-center justify-content-around menu\">
            <div class=\"menuLink\"><a href=\"{{ path('club_page') }}\" alt=\"le club\">Le Club</a></div>
            <div class=\"menuLink\"><a href=\"{{ path('media_page') }}\">Média</a></div>
            <div class=\"logo\"><a href=\"{{ path('gaelic_homepage') }}\"><img class=\"logo1\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"logo\"></a></div>
            <div class=\"menuLink\"><a href=\"{{ path('sponsors_page') }}\">Partenaires</a></div>
            <div class=\"menuLink\"><a href=\"{{ path('contact_page') }}\">Contact</a></div>
        </div>
    </nav>


    <!-- bouton administrateur pour aller sur l'interface d'EasyAdmin-->

    <a href=\"{{ path('easyadmin') }}\"><button  class=\"btnEasy\">Se connecter</button></a>



<!-- affichage de l'animation pour le jour des entrainement-->

    <div class=\"d-flex flex-column justify-content-center accueil\">
        <div class=\"presentation animate text-center pb-5\">
            <p class=\"accueilPolice\">Retrouvez nous</p>
            <p class=\"accueilPolice\">le lundi au Stade du Breillan à Blanquefort </p>
            <p class=\"accueilPolice\">le jeudi au Stade Colette Besson (terrain 16) à Bordeaux Lac</p>
        </div>
    </div>

    <div class=\"bouton\"><a href=\"{{ path('footballgaelic_page') }}\" target=\"_blank\">Découvrir notre sport</a></div>


</div>

<!-- boucle twig pour faire afficher ma table New avec ses attributs-->

<div class=\"container-fluid new\">
    <div class=\"actuGaelic text-center\"><h2>Actualité</h2></div>
    {% set i = 0 %}
    {% for new in news | reverse %}
        {% if i < 3 %}
            {% if i%2 == 0 %}

                <div class=\"text-center titreNew\"><p>{{ new.titre }}</p></div>
                <div class=\"row\">
                    <div class=\"container d-flex justify-content-center m-t-4 m-b-2 blocActualite\">
                        <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"{{ asset('new/'~new.image~'') }}\" alt=\"\"></div>
                        <div class=\"col-lg-8 text-justify\"><textarea>{{ new.contenu|raw }}</textarea></div>
                    </div>
                </div>
            {% else %}
                <div class=\"text-center titreNew\"><p>{{ new.titre }}</p></div>
                <div class=\"row\">
                    <div class=\"container d-flex justify-content-center m-t-4 m-b-4 blocActualite\">
                        <div class=\"col-lg-8 text-justify textar\"><textarea><p>{{ new.contenu|raw }}</p></textarea></div>
                        <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"{{ asset('new/'~new.image~'') }}\" alt=\"\"></div>
                    </div>
                </div>
            {% endif %}
        {% endif %}
        {% set i = i + 1 %}
    {% endfor %}
    <div class=\"\">

        <div><img class=\"avantFooter\" src=\"{{ asset('images/bandeau.png') }}\" alt=\"\"></div>

    </div>

</div>
<!--- footer du gaelic.html.twig-->

<div class=\"burdigaelaFooter\">
    <p class=\"mention\"> 2018 - ©Burdigaela - All rights reserved - ©Guillaume Plard</p>
    <p class=\"follow\">#SUIVEZ-NOUS</p>
    <a href=\"https://www.facebook.com/BordeauxGaelicFootball/\"><img class=\"reseau\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQeSURBVGhD7Vk7aBRRFL0rIgh+8JOd2RgttFAUEVQsNP6iKUQUfwEVCz8kMbubSAqjqURBez8J0TSKnUYLsbQQFQsFE9TSD0JaQ7CKKOo58+6Emd3ZzS672RlhDlzyzvvcd8/7zds8iREjRmVokwXz02Jvy4rdEoax705ZOE/DKR8UkElYd2A/swn7b5jGGGAD52XRXA2vNBgR9og6epAR+3BWkrvDsE6xj2QT1pARZI8wNg1zanAmnIZindKs0MFYzMBa/ZpVHLqkuJweaFZkgLgewiZK2jNQvoPKOaXkHVK/FI2vXBKZQX5O6leiTi/TBJbdxqxYWaWCdBPspFKUpw5mJXVAKctPdoq1Uyl5lj6Usv9e9sE0+2TfjIHcOQBMbNvJiwKO97JyWlKN5OjkrOHWGi2/aJyZUUFHfeDjTBNYx09gX5Wy/AVNKcu/so5SYVv6YJo+6RvlV8nZp8MRg+GpRnLGSF4UuUIwmq3k7iihvAf8T1rq5jg8Yd/Auh1jmkD6MfI+K6WQ5zSlrP+ZdZSy/hh9ME2f9I28y+TsExyBp1pNeQVCuqVhoXfTZ2RRPfhRpRjFuhX+pVO3LiPJZqUs30xTivbJZtZRyoE6QB9KwZPH2IdStLdOMwamKxISJcRCNGtagJNntdMXlhKWzz4uPyyzVWfFSqI4YWr5ERkhWOuz4b8Hm/+bE1ABw6l1U5v4EAkhXZJaBr8fTaDWK3wTutOS3IX8Dfwu4BDYj7wTOLFGIeSpNvMhdCF6d/sE++E94YKAvt9HVgj8DcJ+e7/ohRBZIe3SsARLiXe3Qc0qisgKwbpvpz/cudZr1iTMx9U+jLI21yK7RzAb9+Fv3L10ukA/XQj4lxNYnll3tZoP4c5Iwn6GgEeUOmiT1GIInEDZa/fkco0zd0lWz9KqPoQ9I+8wwi+VOsByO6QBNWlWSQh7Rt7nCjF7gfsmuVazSkJNhGAPzERgx70b1wRsjeYKSYvd4QSE63pefVzZ3dtuLmoiBO02meCCrJCQAibWGa3qQ02EeDo50yHJ5V7z/r4g+Eswt46pZ5Yc9tAerepDrYVM3UkB4AfbBfrgvUyzfPh/hCSseziqfyAZ3jW+GkKwl97C3ijNQ02E4LTZ4nQSaOVs9uCvOlETIc6PpoR9DYHc9hqWy3f8DRSCsoc59fvdfzsFoSZCCgG+8j6Ik0Ki+EEshFhIAGIhmlURYiEBKEsIrgm+Z4VKUU0huIOV/qygDz349WYNaVZFqKoQxMTYSn5LROUB01HlT2/VEsL/yrMN7JZmTQ3OCjofNg2tIS4z7wNlOYZL4BfYh5y8645vvr148oPNbsHAPtJYht13mZLB6YODPrPMnJEIzRgDYylbhBcUhJHbambF/5g/3Wb6TG0t+309RowYORD5B3RJHZDaTls0AAAAAElFTkSuQmCC\"></a>
    <a href=\"https://twitter.com/hashtag/burdigaela\"><img class=\"reseau\" src=\"data:image/png;base64,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\"></a>
    <a href=\"https://www.instagram.com/burdigaela/?hl=fr\"><img class=\"reseau\" src=\"data:image/png;base64,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\"></a>
</div>
</body>
</html>

", "gaelicBundle:Default:gaelic.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/gaelic.html.twig");
    }
}
