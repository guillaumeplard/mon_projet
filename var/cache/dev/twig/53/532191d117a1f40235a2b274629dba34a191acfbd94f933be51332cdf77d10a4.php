<?php

/* gaelicBundle:Default:contact.html.twig */
class __TwigTemplate_b302e20fb241ff57a46d64d92835652fcdba7648996e0e2148aabff112a11f6a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "gaelicBundle:Default:contact.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:contact.html.twig"));

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
        echo "    <div class=\"fondContact\">
        <div class=\"fondEntrainement\">
            <h2 class=\"trouver\">Où nous trouver?</h2>
            <h3 class=\"day\">Le lundi</h3>
            <div class=\"container-fluid\">
                <div class=\"container d-flex justify-content-between entrainement1\">
                    <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connemara.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                    <div class=\"p-2 flex-shrink-1 bd-highlight text-justify\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>

                </div>
            </div>

            <h3 class=\"day\">Le jeudi</h3>
            <div class=\"row\"></div>
            <div class=\"container-fluid\">
                <div class=\"container d-flex justify-content-between entrainement\">
                    <div class=\"p-2 flex-shrink-1 bd-highlight text-justify\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
                    <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team.jpeg"), "html", null, true);
        echo "\" alt=\"\"></div>
                </div>
            </div>
        </div>

        <div class=\"bgContact\">

            <p class=\"infoContact\">formulaire de contact!</p>

            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 36, $this->source); })()), 'form_start');
        echo "

            <p class=\"labelContactForm\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 38, $this->source); })()), "nom", array()), 'label', array("label" => "Nom"));
        echo "</p>
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 39, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 41, $this->source); })()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "</p>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 42, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 44, $this->source); })()), "email", array()), 'label', array("label" => "Email"));
        echo "</p>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 45, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 47, $this->source); })()), "sujet", array()), 'label', array("label" => "Sujet"));
        echo "</p>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 48, $this->source); })()), "sujet", array()), 'widget', array("attr" => array("class" => "widgetContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 50, $this->source); })()), "message", array()), 'label', array("label" => "Votre message"));
        echo "</p>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 51, $this->source); })()), "message", array()), 'widget', array("attr" => array("class" => "messageContactForm")));
        echo "

            <p class=\"labelContactForm\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 53, $this->source); })()), "submit", array()), 'row', array("label" => "Envoyer", "attr" => array("class" => "boutonEnvoyer")));
        echo "</p>

            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gaelicBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  160 => 53,  155 => 51,  151 => 50,  146 => 48,  142 => 47,  137 => 45,  133 => 44,  128 => 42,  124 => 41,  119 => 39,  115 => 38,  110 => 36,  98 => 27,  84 => 16,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Contact

{% endblock %}

{% block content %}
    <div class=\"fondContact\">
        <div class=\"fondEntrainement\">
            <h2 class=\"trouver\">Où nous trouver?</h2>
            <h3 class=\"day\">Le lundi</h3>
            <div class=\"container-fluid\">
                <div class=\"container d-flex justify-content-between entrainement1\">
                    <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"{{ asset('images/connemara.jpg') }}\" alt=\"\"></div>
                    <div class=\"p-2 flex-shrink-1 bd-highlight text-justify\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>

                </div>
            </div>

            <h3 class=\"day\">Le jeudi</h3>
            <div class=\"row\"></div>
            <div class=\"container-fluid\">
                <div class=\"container d-flex justify-content-between entrainement\">
                    <div class=\"p-2 flex-shrink-1 bd-highlight text-justify\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
                    <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"{{ asset('images/team.jpeg') }}\" alt=\"\"></div>
                </div>
            </div>
        </div>

        <div class=\"bgContact\">

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
{% endblock %}", "gaelicBundle:Default:contact.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/contact.html.twig");
    }
}
