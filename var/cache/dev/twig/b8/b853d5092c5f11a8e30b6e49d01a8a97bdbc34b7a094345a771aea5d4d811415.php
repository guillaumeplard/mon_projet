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
    <title> Partenaire </title>

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
        echo "<div class=\"fondPartenaire\">
    <div class=\"col-lg-12 text-center titreConnemara\"><h2>Connemara</h2></div>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between align-items-center\">
            <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connemara.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"p-5 flex-shrink-1 bd-highlight text-right\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
        </div>
    </div>
    <div class=\"col-lg-12 text-center titreTeam\"><h2>Team 4 it</h2></div>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between align-items-center\">
            <div class=\"p-5 flex-shrink-1 bd-highlight text-left\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
            <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team.jpeg"), "html", null, true);
        echo "\" alt=\"\"></div>
        </div>
    </div>
</div>
    <nav>
        <div class=\"d-flex align-items-center justify-content-around menuMaillot\">
            <div><img class=\"logoMaillot\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></div>
            <div><h1>Nos maillots</h1></div>
            <div><img class=\"logoMaillot\" src=\"";
        // line 30
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
        return array (  107 => 30,  102 => 28,  93 => 22,  82 => 14,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    <title> Partenaire </title>

{% endblock %}

{% block content %}
<div class=\"fondPartenaire\">
    <div class=\"col-lg-12 text-center titreConnemara\"><h2>Connemara</h2></div>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between align-items-center\">
            <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"{{ asset('images/connemara.jpg') }}\" alt=\"\"></div>
            <div class=\"p-5 flex-shrink-1 bd-highlight text-right\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
        </div>
    </div>
    <div class=\"col-lg-12 text-center titreTeam\"><h2>Team 4 it</h2></div>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between align-items-center\">
            <div class=\"p-5 flex-shrink-1 bd-highlight text-left\"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis auctor justo. Pellentesque ultricies dui efficitur nulla rutrum, nec dapibus augue imperdiet. Nunc id turpis fringilla, ornare felis sagittis, interdum enim. Fusce accumsan lobortis sapien, eget gravida nunc bibendum quis. Nulla eu metus ac turpis aliquet lobortis. Nam dapibus purus venenatis mauris gravida, eu pulvinar tortor feugiat. Duis augue tortor, aliquam sit amet neque vitae, pellentesque pellentesque ante. Maecenas commodo a tortor sit amet eleifend. Fusce dignissim mattis vestibulum. Maecenas laoreet, massa eget aliquet mattis, felis ante facilisis est, vitae ultrices elit dui at arcu. Pellentesque condimentum mauris neque, quis cursus odio sagittis a. Etiam dictum libero vitae mi vestibulum tempor. Phasellus facilisis augue vel massa eleifend placerat. Aliquam nec risus nisl. Cras accumsan nisi dolor, sit amet consequat tortor sodales ac.</p></div>
            <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"{{ asset('images/team.jpeg') }}\" alt=\"\"></div>
        </div>
    </div>
</div>
    <nav>
        <div class=\"d-flex align-items-center justify-content-around menuMaillot\">
            <div><img class=\"logoMaillot\" src=\"{{ asset('images/bordeaux.jpg') }}\" alt=\"logo\"></div>
            <div><h1>Nos maillots</h1></div>
            <div><img class=\"logoMaillot\" src=\"{{ asset('images/bordeaux17.jpg') }}\" alt=\"logo\"></div>
        </div>
    </nav>

    {% endblock %}", "@gaelic/Default/partenaire.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/partenaire.html.twig");
    }
}
