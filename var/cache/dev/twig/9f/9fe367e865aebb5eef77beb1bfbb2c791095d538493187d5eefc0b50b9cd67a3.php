<?php

/* @gaelic/Default/sendmail.html.twig */
class __TwigTemplate_a1ba85daff3a65bed15a909000d6d43ef8a2c7ebbeed0b6206907cc3537072a2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/sendmail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@gaelic/Default/sendmail.html.twig"));

        // line 1
        echo "<h1> Bonjour, vous avez reçu un message</h1>

 <p>Nom: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 3, $this->source); })()), "vars", array()), "value", array()), "nom", array()), "html", null, true);
        echo " </p>
<p>Prenom: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 4, $this->source); })()), "vars", array()), "value", array()), "prenom", array()), "html", null, true);
        echo " </p>
<p>Email: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 5, $this->source); })()), "vars", array()), "value", array()), "email", array()), "html", null, true);
        echo "</p>
<p>Sujet: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 6, $this->source); })()), "vars", array()), "value", array()), "sujet", array()), "html", null, true);
        echo "</p>
<p>Message:";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formView"]) || array_key_exists("formView", $context) ? $context["formView"] : (function () { throw new Twig_Error_Runtime('Variable "formView" does not exist.', 7, $this->source); })()), "vars", array()), "value", array()), "message", array()), "html", null, true);
        echo "</p>
 ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@gaelic/Default/sendmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1> Bonjour, vous avez reçu un message</h1>

 <p>Nom: {{ formView.vars.value.nom }} </p>
<p>Prenom: {{ formView.vars.value.prenom }} </p>
<p>Email: {{ formView.vars.value.email }}</p>
<p>Sujet: {{ formView.vars.value.sujet }}</p>
<p>Message:{{ formView.vars.value.message }}</p>
 ", "@gaelic/Default/sendmail.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/sendmail.html.twig");
    }
}
