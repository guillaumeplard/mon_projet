<?php

/* gaelicBundle:Default:new.html.twig */
class __TwigTemplate_aa238039c0ea499c58125abbecfd63b150313887c22050a224fa75a1de2eab3f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:new.html.twig"));

        // line 1
        $this->loadTemplate("@gaelic/Default/gaelic.html.twig", "gaelicBundle:Default:new.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('article', $context, $blocks);
        // line 24
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
    <h3 class=\"day\">Le lundi</h3>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between entrainement\">
            <div class=\"p-2 w-100 bd-highlight\"><img class=\"imgConnemara\" src=\"";
        // line 8
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
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team.jpeg"), "html", null, true);
        echo "\" alt=\"\"></div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gaelicBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  63 => 8,  57 => 4,  48 => 3,  37 => 24,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@gaelic/Default/gaelic.html.twig' %}

{% block article %}

    <h3 class=\"day\">Le lundi</h3>
    <div class=\"container-fluid\">
        <div class=\"container d-flex justify-content-between entrainement\">
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

{% endblock %}

", "gaelicBundle:Default:new.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/new.html.twig");
    }
}
