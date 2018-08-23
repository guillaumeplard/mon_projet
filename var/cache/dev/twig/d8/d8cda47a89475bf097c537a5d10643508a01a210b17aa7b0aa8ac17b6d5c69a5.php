<?php

/* gaelicBundle:Default:club.html.twig */
class __TwigTemplate_74a04799332aebe03be512fc6eb2a7c4450360edbab63269a9023f2167611994 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:club.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:club.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        echo "\">
    <title class=\"titre\">Club</title>
</head>
<body>
<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\"><img class=\"logoclub\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"\"></a>
<h1 class=\"titre\">Club</h1>
<div class=\"container-fuid\">
    <h2 class=\"text-center terrainbis\">(terrain de football gaélique)</h2>
    <div class=\"container d-flex flex-row align-items-center justify-content-center\">
        <img class=\"terrainimage\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/terrain.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
</div>
<div class=\"container-fluid\">
    <h1 class=\"titre1\"> Histoire du Club</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\"><img class=\"logohistoire\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"col-lg-8 justify-content-center\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet leo a lacus blandit vestibulum in at nulla. Aliquam in neque bibendum, aliquam mi sit amet, auctor nulla. Mauris sed tortor vel risus interdum consequat vel ultricies augue. Aliquam vitae velit sed arcu luctus condimentum. In odio felis, varius quis scelerisque et, egestas a purus. Duis condimentum urna eu nisl consequat maximus. Suspendisse ut orci ac felis ultrices vehicula vel in dui. Fusce finibus ipsum in sem dignissim, sit amet venenatis lectus tempor.</p></div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h1 class=\"titre2\">Le bureau du club</h1>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>

        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h1 class=\"titre3\"> Photo de l'equipe</h1>
        <div class=\"container d-flex flex-row align-items-center justify-content-center\">
            <img class=\"equipe\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/equipe.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        </div>
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
        return "gaelicBundle:Default:club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 62,  104 => 51,  96 => 46,  88 => 41,  80 => 36,  66 => 25,  56 => 18,  46 => 13,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/main.css') }}\">
    <title class=\"titre\">Club</title>
</head>
<body>
<a href=\"{{ path('gaelic_homepage')}}\"><img class=\"logoclub\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"\"></a>
<h1 class=\"titre\">Club</h1>
<div class=\"container-fuid\">
    <h2 class=\"text-center terrainbis\">(terrain de football gaélique)</h2>
    <div class=\"container d-flex flex-row align-items-center justify-content-center\">
        <img class=\"terrainimage\" src=\"{{ asset('images/terrain.png') }}\" alt=\"\">
    </div>
</div>
<div class=\"container-fluid\">
    <h1 class=\"titre1\"> Histoire du Club</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\"><img class=\"logohistoire\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"\"></div>
            <div class=\"col-lg-8 justify-content-center\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet leo a lacus blandit vestibulum in at nulla. Aliquam in neque bibendum, aliquam mi sit amet, auctor nulla. Mauris sed tortor vel risus interdum consequat vel ultricies augue. Aliquam vitae velit sed arcu luctus condimentum. In odio felis, varius quis scelerisque et, egestas a purus. Duis condimentum urna eu nisl consequat maximus. Suspendisse ut orci ac felis ultrices vehicula vel in dui. Fusce finibus ipsum in sem dignissim, sit amet venenatis lectus tempor.</p></div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h1 class=\"titre2\">Le bureau du club</h1>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>

        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"container\">
        <h1 class=\"titre3\"> Photo de l'equipe</h1>
        <div class=\"container d-flex flex-row align-items-center justify-content-center\">
            <img class=\"equipe\" src=\"{{ asset('images/equipe.jpg') }}\" alt=\"\">
        </div>
        </div>
    </div>
</div>









    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>
</body>
</html>", "gaelicBundle:Default:club.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/club.html.twig");
    }
}
