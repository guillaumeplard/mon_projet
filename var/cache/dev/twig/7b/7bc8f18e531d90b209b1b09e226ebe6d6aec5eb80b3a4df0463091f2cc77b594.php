<?php

/* @gaelic/Default/new.html.twig */
class __TwigTemplate_9b2aa8d97d9f24880c44f805d4a4f6b50ab2b1acb9ee203b7d826542501bf020 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'article' => array($this, 'block_article'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/new.html.twig"));

        // line 1
        $this->loadTemplate("@gaelic/Default/gaelic.html.twig", "@gaelic/Default/new.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('article', $context, $blocks);
        // line 40
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_article($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "article"));

        // line 4
        echo "

    <div class=\"container-fluid new\">
        <div class=\"actuGaelic text-center\"><h2>Actualité</h2></div>
        ";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 9, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 10
            echo "            ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 10, $this->source); })()) < 3)) {
                // line 11
                echo "                ";
                if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 11, $this->source); })()) % 2) == 0)) {
                    // line 12
                    echo "
                    <div class=\"text-center titreNew\"><p>";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "titre", array()), "html", null, true);
                    echo "</p></div>
                    <div class=\"row\">
                        <div class=\"container d-flex justify-content-center m-t-4 m-b-2 blocActualite\">
                            <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("new/" . twig_get_attribute($this->env, $this->source, $context["new"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                            <div class=\"col-lg-8 text-justify\"><textarea>";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "contenu", array());
                    echo "</textarea></div>
                        </div>
                    </div>
                ";
                } else {
                    // line 21
                    echo "                    <div class=\"text-center titreNew\"><p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "titre", array()), "html", null, true);
                    echo "</p></div>
                    <div class=\"row\">
                        <div class=\"container d-flex justify-content-center m-t-4 m-b-4 blocActualite\">
                            <div class=\"col-lg-8 text-justify textar\"><textarea><p>";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "contenu", array());
                    echo "</p></textarea></div>
                            <div class=\"col-lg-4\"><img class=\"img-fluid imgActualite\" src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("new/" . twig_get_attribute($this->env, $this->source, $context["new"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                        </div>
                    </div>
                ";
                }
                // line 29
                echo "            ";
            }
            // line 30
            echo "            ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 30, $this->source); })()) + 1);
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        <div class=\"\">

            <div><img class=\"avantFooter\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bandeau.png"), "html", null, true);
        echo "\" alt=\"\"></div>

        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  126 => 32,  120 => 31,  117 => 30,  114 => 29,  107 => 25,  103 => 24,  96 => 21,  89 => 17,  85 => 16,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  65 => 9,  63 => 8,  57 => 4,  48 => 3,  37 => 40,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@gaelic/Default/gaelic.html.twig' %}

{% block article %}


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
{% endblock %}

", "@gaelic/Default/new.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/new.html.twig");
    }
}
