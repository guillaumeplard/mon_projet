<?php

/* gaelicBundle:Default:media.html.twig */
class __TwigTemplate_2f062b5372c827c07785fe2b9d3febd7f0ca4b750e38f8334b428f3e7906b5ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "gaelicBundle:Default:media.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:media.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:media.html.twig"));

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
    Media

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <div id=\"slideshow\" data-interval=\"2000\">

        <ul class=\"slides\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new Twig_Error_Runtime('Variable "medias" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 14
            echo "                <li><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("media/" . twig_get_attribute($this->env, $this->source, $context["media"], "image", array())) . "")), "html", null, true);
            echo "\" alt=\"\" /></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>

        <span class=\"arrow previous\"></span>
        <span class=\"arrow next\"></span>
    </div>



    <script>
        \$(window).load(function() {

            // We are listening to the window.load event, so we can be sure
            // that the images in the slideshow are loaded properly.

            // Testing wether the current browser supports the canvas element:
            var supportCanvas = 'getContext' in document.createElement('canvas');

            // The canvas manipulations of the images are CPU intensive,
            // this is why we are using setTimeout to make them asynchronous
            // and improve the responsiveness of the page.

            var slides = \$('#slideshow li'),
                current = 0,
                slideshow = {width: 0, height: 0};

            setTimeout(function () {

                if (supportCanvas) {
                    \$('#slideshow img').each(function () {

                        if (!slideshow.width) {
                            // Saving the dimensions of the first image:
                            slideshow.width = this.width;
                            slideshow.height = this.height;
                        }

                        // Rendering the modified versions of the images:
                        createCanvasOverlay(this);
                    });
                }

                \$('#slideshow .arrow').click(function () {
                    var li = slides.eq(current),
                        canvas = li.find('canvas'),
                        nextIndex = 0;

                    // Depending on whether this is the next or previous
                    // arrow, calculate the index of the next slide accordingly.

                    if (\$(this).hasClass('next')) {
                        nextIndex = current >= slides.length - 1 ? 0 : current + 1;
                    }
                    else {
                        nextIndex = current <= 0 ? slides.length - 1 : current - 1;
                    }

                    var next = slides.eq(nextIndex);


                });

            }, 100);
        });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gaelicBundle:Default:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  86 => 14,  82 => 13,  76 => 9,  67 => 8,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

    Media

{% endblock %}
{% block content %}

    <div id=\"slideshow\" data-interval=\"2000\">

        <ul class=\"slides\">
            {% for media in medias %}
                <li><img src=\"{{ asset('media/'~media.image~'') }}\" alt=\"\" /></li>
            {% endfor %}
        </ul>

        <span class=\"arrow previous\"></span>
        <span class=\"arrow next\"></span>
    </div>



    <script>
        \$(window).load(function() {

            // We are listening to the window.load event, so we can be sure
            // that the images in the slideshow are loaded properly.

            // Testing wether the current browser supports the canvas element:
            var supportCanvas = 'getContext' in document.createElement('canvas');

            // The canvas manipulations of the images are CPU intensive,
            // this is why we are using setTimeout to make them asynchronous
            // and improve the responsiveness of the page.

            var slides = \$('#slideshow li'),
                current = 0,
                slideshow = {width: 0, height: 0};

            setTimeout(function () {

                if (supportCanvas) {
                    \$('#slideshow img').each(function () {

                        if (!slideshow.width) {
                            // Saving the dimensions of the first image:
                            slideshow.width = this.width;
                            slideshow.height = this.height;
                        }

                        // Rendering the modified versions of the images:
                        createCanvasOverlay(this);
                    });
                }

                \$('#slideshow .arrow').click(function () {
                    var li = slides.eq(current),
                        canvas = li.find('canvas'),
                        nextIndex = 0;

                    // Depending on whether this is the next or previous
                    // arrow, calculate the index of the next slide accordingly.

                    if (\$(this).hasClass('next')) {
                        nextIndex = current >= slides.length - 1 ? 0 : current + 1;
                    }
                    else {
                        nextIndex = current <= 0 ? slides.length - 1 : current - 1;
                    }

                    var next = slides.eq(nextIndex);


                });

            }, 100);
        });

    </script>

{% endblock %}", "gaelicBundle:Default:media.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/media.html.twig");
    }
}
