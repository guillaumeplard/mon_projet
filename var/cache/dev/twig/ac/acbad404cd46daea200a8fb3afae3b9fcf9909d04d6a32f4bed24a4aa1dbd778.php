<?php

/* @gaelic/Default/club.html.twig */
class __TwigTemplate_a099924b1289daad9aed1778359b2da4a384e1f1a336162b62a565d4d56fe652 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "@gaelic/Default/club.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gaelic/Default/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/club.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/club.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    Club

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h1 class=\"accueilClub\">Le Club</h1>

<div class=\"container-fuid fondTerrain\">
    <h2 class=\"text-center terrainbis\">terrain de football gaélique</h2>
    <div class=\"container\">
        <div class=\"row relat\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/1.png"), "html", null, true);
        echo "\" alt=\"stade football gaelique\" class=\"img-fluid w-100\">
            <div class=\"col-8 font-italic legende text-center   \"> Le stade de football gaélique fait 140m de long et 90m de large</div>
        </div>
    </div>
</div>
<div class=\"container-fluid fondHistoire\">
    <h1 class=\"titre1\"> Histoire du Club</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\"><img class=\"logohistoire\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"col-lg-8 justify-content-center\"><p>Notre club de football gaélique a été créé en mai 2013 grâce à l’envie et la ténacité de bénévoles motivés.

                    Depuis sa création, le club suscite un réel engouement sur Bordeaux et de plus en plus de joueurs et joueuses se joignent au projet. Avec le soutien de la Mairie de Bordeaux, nous avons réussi à avoir un terrain d’entrainement deux fois par semaine à Bordeaux Lac, Blanquefort et Talence.</p></div>
        </div>
    </div>
</div>
<div class=\"container-fluid fondBureau\">
    <div class=\"container\">
        <h1 class=\"titre2\">Le bureau du club</h1>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>

        </div>
    </div>
</div>
<div class=\"container-fluid fondEquipe\">
    <div class=\"container\">
        <h1 class=\"titre3\"> Photo de l'equipe</h1>
        <div class=\"container d-flex flex-row align-items-center justify-content-center\">
            <img class=\"equipe\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/equipe.jpg"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 64,  136 => 53,  128 => 48,  120 => 43,  112 => 38,  96 => 25,  84 => 16,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Club

{% endblock %}

{% block content %}
    <h1 class=\"accueilClub\">Le Club</h1>

<div class=\"container-fuid fondTerrain\">
    <h2 class=\"text-center terrainbis\">terrain de football gaélique</h2>
    <div class=\"container\">
        <div class=\"row relat\">
            <img src=\"{{ asset('images/1.png') }}\" alt=\"stade football gaelique\" class=\"img-fluid w-100\">
            <div class=\"col-8 font-italic legende text-center   \"> Le stade de football gaélique fait 140m de long et 90m de large</div>
        </div>
    </div>
</div>
<div class=\"container-fluid fondHistoire\">
    <h1 class=\"titre1\"> Histoire du Club</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\"><img class=\"logohistoire\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"\"></div>
            <div class=\"col-lg-8 justify-content-center\"><p>Notre club de football gaélique a été créé en mai 2013 grâce à l’envie et la ténacité de bénévoles motivés.

                    Depuis sa création, le club suscite un réel engouement sur Bordeaux et de plus en plus de joueurs et joueuses se joignent au projet. Avec le soutien de la Mairie de Bordeaux, nous avons réussi à avoir un terrain d’entrainement deux fois par semaine à Bordeaux Lac, Blanquefort et Talence.</p></div>
        </div>
    </div>
</div>
<div class=\"container-fluid fondBureau\">
    <div class=\"container\">
        <h1 class=\"titre2\">Le bureau du club</h1>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center \"><p>President</p></div>
                <div class=\"col-lg-12 president\"><img src=\"{{ asset('images/president1.jpg') }}\" alt=\"\"></div>
                <div class=\"col-lg-12 text-center\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>

        </div>
    </div>
</div>
<div class=\"container-fluid fondEquipe\">
    <div class=\"container\">
        <h1 class=\"titre3\"> Photo de l'equipe</h1>
        <div class=\"container d-flex flex-row align-items-center justify-content-center\">
            <img class=\"equipe\" src=\"{{ asset('images/equipe.jpg') }}\" alt=\"\">
        </div>
        </div>
    </div>

{% endblock %}
", "@gaelic/Default/club.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/club.html.twig");
    }
}
