<?php

/* @gaelic/Default/contact.html.twig */
class __TwigTemplate_fb7809e2078a4af905e1af307bdbd7603419c637faac0af9c79126c0cbf62703 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "@gaelic/Default/contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/contact.html.twig"));

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
    Contact

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
        echo "    <h1 class=\"accueilContact\">Contact</h1>
    <div class=\"fondContact\">
        <div class=\"fondEntrainement\">
            <h2 class=\"trouver\">Où nous trouver?</h2>
            ";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrainements"]) || array_key_exists("entrainements", $context) ? $context["entrainements"] : (function () { throw new Twig_Error_Runtime('Variable "entrainements" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entrainement"]) {
            // line 16
            echo "                ";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 16, $this->source); })()) < 3)) {
                // line 17
                echo "                    ";
                if ((((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 17, $this->source); })()) % 2) == 0)) {
                    // line 18
                    echo "                        <h3 class=\"day\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entrainement"], "titre", array()), "html", null, true);
                    echo "</h3>
                        <div class=\"container-fluid\">
                            <div class=\"container d-flex justify-content-between entrainement1\">
                                <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara1\" src=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("entrainement/" . twig_get_attribute($this->env, $this->source, $context["entrainement"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                                <div class=\"p-2 flex-shrink-1 bd-highlight text-center connemaraText1 \"><p>";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["entrainement"], "contenu", array());
                    echo "</p></div>
                            </div>
                        </div>
                    ";
                } else {
                    // line 26
                    echo "                        <h3 class=\"day\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entrainement"], "titre", array()), "html", null, true);
                    echo "</h3>
                        <div class=\"container-fluid\">
                            <div class=\"container d-flex justify-content-between  entrainement\">
                                <div class=\"p-2 flex-shrink-1 bd-highlight text-center connemaraText\"><p>";
                    // line 29
                    echo twig_get_attribute($this->env, $this->source, $context["entrainement"], "contenu", array());
                    echo "</p></div>
                                <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("entrainement/" . twig_get_attribute($this->env, $this->source, $context["entrainement"], "image", array())) . "")), "html", null, true);
                    echo "\" alt=\"\"></div>
                            </div>
                        </div>
                    ";
                }
                // line 34
                echo "                ";
            }
            // line 35
            echo "                ";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new Twig_Error_Runtime('Variable "i" does not exist.', 35, $this->source); })()) + 1);
            // line 36
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrainement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>

        <div class=\"bgContact \">

            <p class=\"infoContact\">formulaire de contact!</p>

            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 43, $this->source); })()), 'form_start');
        echo "

            <p class=\"labelContactForm\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 45, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo "</p>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 46, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 48, $this->source); })()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "</p>
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 49, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 51, $this->source); })()), "email", array()), 'label', array("label" => "Email"));
        echo "</p>
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 52, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 54, $this->source); })()), "sujet", array()), 'label', array("label" => "Sujet"));
        echo "</p>
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 55, $this->source); })()), "sujet", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 57, $this->source); })()), "message", array()), 'label', array("label" => "Votre message"));
        echo "</p>
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 58, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "messageContactForm")));
        echo "


            <p class=\"labelContactForm\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 61, $this->source); })()), "submit", array()), 'row', array("label" => "Envoyer", "attr" => array("class" => "boutonEnvoyer")));
        echo "</p>

            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 63, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 63,  202 => 61,  196 => 58,  192 => 57,  187 => 55,  183 => 54,  178 => 52,  174 => 51,  169 => 49,  165 => 48,  160 => 46,  156 => 45,  151 => 43,  143 => 37,  137 => 36,  134 => 35,  131 => 34,  124 => 30,  120 => 29,  113 => 26,  106 => 22,  102 => 21,  95 => 18,  92 => 17,  89 => 16,  84 => 15,  82 => 14,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Contact

{% endblock %}

{% block content %}
    <h1 class=\"accueilContact\">Contact</h1>
    <div class=\"fondContact\">
        <div class=\"fondEntrainement\">
            <h2 class=\"trouver\">Où nous trouver?</h2>
            {% set i = 0 %}
            {% for entrainement in entrainements %}
                {% if i < 3 %}
                    {% if i% 2 == 0 %}
                        <h3 class=\"day\">{{ entrainement.titre }}</h3>
                        <div class=\"container-fluid\">
                            <div class=\"container d-flex justify-content-between entrainement1\">
                                <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara1\" src=\"{{ asset('entrainement/'~entrainement.image~'') }}\" alt=\"\"></div>
                                <div class=\"p-2 flex-shrink-1 bd-highlight text-center connemaraText1 \"><p>{{ entrainement.contenu|raw }}</p></div>
                            </div>
                        </div>
                    {% else %}
                        <h3 class=\"day\">{{ entrainement.titre }}</h3>
                        <div class=\"container-fluid\">
                            <div class=\"container d-flex justify-content-between  entrainement\">
                                <div class=\"p-2 flex-shrink-1 bd-highlight text-center connemaraText\"><p>{{ entrainement.contenu|raw }}</p></div>
                                <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"{{ asset('entrainement/'~entrainement.image~'') }}\" alt=\"\"></div>
                            </div>
                        </div>
                    {% endif %}
                {% endif %}
                {% set i = i + 1 %}
            {% endfor %}
        </div>

        <div class=\"bgContact \">

            <p class=\"infoContact\">formulaire de contact!</p>

            {{ form_start(formView) }}

            <p class=\"labelContactForm\">{{ form_label(formView.nom, 'Nom') }}</p>
            {{ form_widget(formView.nom, { 'attr': {'class': 'widgetContactForm'} }) }}

            <p class=\"labelContactForm\">{{ form_label(formView.prenom, 'Prénom') }}</p>
            {{ form_widget(formView.prenom, { 'attr': {'class': 'widgetContactForm'} }) }}

            <p class=\"labelContactForm\">{{ form_label(formView.email, 'Email') }}</p>
            {{ form_widget(formView.email, { 'attr': {'class': 'widgetContactForm'} }) }}

            <p class=\"labelContactForm\">{{ form_label(formView.sujet, 'Sujet') }}</p>
            {{ form_widget(formView.sujet, { 'attr': {'class': 'widgetContactForm'} }) }}

            <p class=\"labelContactForm\">{{ form_label(formView.message, 'Votre message') }}</p>
            {{ form_widget(formView.message, { 'attr': {'class': 'messageContactForm'} }) }}


            <p class=\"labelContactForm\">{{ form_row(formView.submit, { 'label': 'Envoyer', 'attr': {'class': 'boutonEnvoyer'} }) }}</p>

            {{ form_end(formView) }}

        </div>
    </div>
{% endblock %}", "@gaelic/Default/contact.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/contact.html.twig");
    }
}
