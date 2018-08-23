<?php

/* gaelicBundle:Default:media.html.twig */
class __TwigTemplate_d5f2acc5baa68a9a4a64eba0d6d1144363c09bc8394310b4b30cff52df0a9c69 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:media.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:media.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>media</title>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/script.js"), "html", null, true);
        echo "\"></script>

    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        echo "\">

</head>

<body>
<div class=\"fondmedia\">
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gaelic_homepage");
        echo "\"><img class=\"logomedia\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-burdi.png"), "html", null, true);
        echo "\" alt=\"\"></a>

    <div id=\"slideshow\">

        <ul class=\"slides\">
            <li><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux11.jpg"), "html", null, true);
        echo "\" alt=\"Marsa Alam\" /></li>
            <li><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux3.jpg"), "html", null, true);
        echo "\" alt=\"Turrimetta Beach\" /></li>
            <li><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux4.jpg"), "html", null, true);
        echo "\" alt=\"Power Station\" /></li>
            <li><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bordeaux6.jpg"), "html", null, true);
        echo "\" alt=\"Colors of Nature\" /></li>
        </ul>

        <span class=\"arrow previous\"></span>
        <span class=\"arrow next\"></span>
    </div>
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
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  73 => 23,  69 => 22,  65 => 21,  61 => 20,  51 => 15,  42 => 9,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>media</title>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>
    <script src=\"{{ asset('asset/js/script.js') }}\"></script>

    <link rel=\"stylesheet\" href=\"{{ asset('asset/css/main.css') }}\">

</head>

<body>
<div class=\"fondmedia\">
    <a href=\"{{ path('gaelic_homepage')}}\"><img class=\"logomedia\" src=\"{{ asset('images/logo-burdi.png') }}\" alt=\"\"></a>

    <div id=\"slideshow\">

        <ul class=\"slides\">
            <li><img src=\"{{ asset('images/bordeaux11.jpg') }}\" alt=\"Marsa Alam\" /></li>
            <li><img src=\"{{ asset('images/bordeaux3.jpg') }}\" alt=\"Turrimetta Beach\" /></li>
            <li><img src=\"{{ asset('images/bordeaux4.jpg') }}\" alt=\"Power Station\" /></li>
            <li><img src=\"{{ asset('images/bordeaux6.jpg') }}\" alt=\"Colors of Nature\" /></li>
        </ul>

        <span class=\"arrow previous\"></span>
        <span class=\"arrow next\"></span>
    </div>
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
</body>
</html>", "gaelicBundle:Default:media.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/media.html.twig");
    }
}
