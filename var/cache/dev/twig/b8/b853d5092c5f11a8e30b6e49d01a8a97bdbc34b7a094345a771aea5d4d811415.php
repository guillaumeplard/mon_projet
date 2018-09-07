<?php

/* @gaelic/Default/partenaire.html.twig */
class __TwigTemplate_a3e8c48b8d10e81584dbfffda06eff42bd985f020b8dbd1681f6bfe10b64842c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "@gaelic/Default/partenaire.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/partenaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/partenaire.html.twig"));

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
    Partenaire

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
        echo "    <h1 class=\"accueilPartenaire\">Nos partenaires</h1>
    <div class=\"fondPartenaire\">
    ";
        // line 12
        $context["i"] = 0;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) || array_key_exists("partenaires", $context) ? $context["partenaires"] : (function () { throw new Twig_Error_Runtime('Variable "partenaires" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 14
            echo "        ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 14, $this->source); })()) < 3)) {
                // line 15
                echo "            ";
                if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 15, $this->source); })()) % 2) == 0)) {
                    // line 16
                    echo "                <div class=\"col-lg-12 text-center titreConnemara\"><h2>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "titre", array()), "html", null, true);
                    echo "</h2></div>
                <div class=\"container-fluid d-flex align-items-center\">
                        <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara2\" src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("sponsor/" . twig_get_attribute($this->env, $this->source, $context["partenaire"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                        <div class=\"p-2 flex-shrink-1 bd-highlight text-justify texteConnemara2\"><p>";
                    // line 19
                    echo twig_get_attribute($this->env, $this->source, $context["partenaire"], "contenu", array());
                    echo "</p></div>
                </div>
            ";
                } else {
                    // line 22
                    echo "                <div class=\"col-lg-12 text-center titreTeam\"><h2>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["partenaire"], "titre", array()), "html", null, true);
                    echo "</h2></div>
                <div class=\"container-fluid d-flex align-items-center\">
                        <div class=\"p-2text-justify texteConnemara3\"><p>";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["partenaire"], "contenu", array());
                    echo "</p></div>
                        <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara3\" src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("sponsor/" . twig_get_attribute($this->env, $this->source, $context["partenaire"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                </div>
                </div>
            ";
                }
                // line 29
                echo "        ";
            }
            // line 30
            echo "        ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 30, $this->source); })()) + 1);
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <nav>
        <div class=\"d-flex align-items-center justify-content-around menuMaillot\">
            <div><img class=\"logoMaillot\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></div>
            <div class=\"text-center\"><h1>Nos maillots</h1></div>
            <div><img class=\"logoMaillot1\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux17.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></div>
        </div>
    </nav>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 37,  143 => 35,  138 => 32,  132 => 31,  129 => 30,  126 => 29,  119 => 25,  115 => 24,  109 => 22,  103 => 19,  99 => 18,  93 => 16,  90 => 15,  87 => 14,  82 => 13,  80 => 12,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Partenaire

{% endblock %}

{% block content %}
    <h1 class=\"accueilPartenaire\">Nos partenaires</h1>
    <div class=\"fondPartenaire\">
    {% set i = 0 %}
    {% for partenaire in partenaires %}
        {% if i < 3 %}
            {% if i % 2 == 0 %}
                <div class=\"col-lg-12 text-center titreConnemara\"><h2>{{ partenaire.titre }}</h2></div>
                <div class=\"container-fluid d-flex align-items-center\">
                        <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara2\" src=\"{{ asset('sponsor/'~partenaire.image~'') }}\" alt=\"\"></div>
                        <div class=\"p-2 flex-shrink-1 bd-highlight text-justify texteConnemara2\"><p>{{ partenaire.contenu|raw }}</p></div>
                </div>
            {% else %}
                <div class=\"col-lg-12 text-center titreTeam\"><h2>{{ partenaire.titre }}</h2></div>
                <div class=\"container-fluid d-flex align-items-center\">
                        <div class=\"p-2text-justify texteConnemara3\"><p>{{ partenaire.contenu|raw }}</p></div>
                        <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara3\" src=\"{{ asset('sponsor/'~partenaire.image~'') }}\" alt=\"\"></div>
                </div>
                </div>
            {% endif %}
        {% endif %}
        {% set i = i + 1 %}
    {% endfor %}

    <nav>
        <div class=\"d-flex align-items-center justify-content-around menuMaillot\">
            <div><img class=\"logoMaillot\" src=\"{{ asset('images/bordeaux.jpg') }}\" alt=\"logo\"></div>
            <div class=\"text-center\"><h1>Nos maillots</h1></div>
            <div><img class=\"logoMaillot1\" src=\"{{ asset('images/bordeaux17.jpg') }}\" alt=\"logo\"></div>
        </div>
    </nav>

{% endblock %}", "@gaelic/Default/partenaire.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/partenaire.html.twig");
    }
}
