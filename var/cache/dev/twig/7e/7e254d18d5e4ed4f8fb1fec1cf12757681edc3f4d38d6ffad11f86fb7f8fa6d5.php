<?php

/* gaelicBundle:Default:club.html.twig */
class __TwigTemplate_229863e511792c86bf538643fff5aa3408059acf400d72f89e19f51b3426f30b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "gaelicBundle:Default:club.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:club.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:club.html.twig"));

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
        echo "
<div class=\"container-fuid\">
    <h2 class=\"text-center terrainbis\">(terrain de football gaélique)</h2>
    <div class=\"container\">
        <div class=\"row relat\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stadev2.png"), "html", null, true);
        echo "\" alt=\"stade football gaelique\" class=\"img-fluid w-100\">
            <div class=\"col-8 font-italic text-muted legende text-center   \"> Le stade de football gaélique fait 100m de long et 70m de large</div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <h1 class=\"titre1\"> Histoire du Club</h1>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\"><img class=\"logohistoire\" src=\"";
        // line 24
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
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/president1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                <div class=\"col-lg-12\"><p>lorem ipsum hjfggjhjklkmhjkghjgfdsfhgjhkjlk</p></div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"col-lg-12 text-center\"><p>President</p></div>
                <div class=\"col-lg-12\"><img src=\"";
        // line 50
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
        // line 61
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
        return "gaelicBundle:Default:club.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  133 => 50,  125 => 45,  117 => 40,  109 => 35,  95 => 24,  83 => 15,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Club

{% endblock %}

{% block content %}

<div class=\"container-fuid\">
    <h2 class=\"text-center terrainbis\">(terrain de football gaélique)</h2>
    <div class=\"container\">
        <div class=\"row relat\">
            <img src=\"{{ asset('images/stadev2.png') }}\" alt=\"stade football gaelique\" class=\"img-fluid w-100\">
            <div class=\"col-8 font-italic text-muted legende text-center   \"> Le stade de football gaélique fait 100m de long et 70m de large</div>
        </div>
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

{% endblock %}
", "gaelicBundle:Default:club.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/club.html.twig");
    }
}
