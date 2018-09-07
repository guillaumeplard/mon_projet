<?php

/* gaelicBundle:Default:footballgaelic.html.twig */
class __TwigTemplate_1feb834a14cbc8e126f49f6a81d20ba28f0b96911b79272189618761e42539ec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@gaelic/Default/base.html.twig", "gaelicBundle:Default:footballgaelic.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:footballgaelic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gaelicBundle:Default:footballgaelic.html.twig"));

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
     Football Gaélic

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
<h1 class=\"titreFootballGaelic\">Football Gaélic (les règles)</h1>
         <div class=\"container regle\">
                   <div class=\"col-lg-12 text-center p-5\"><h2>le terrain</h2></div>
                   <div class=\"col-lg-12 \"><p>Le terrain est de forme rectangulaire, aux mesures réglementaires de 140 x 90 m pour 15 joueurs par équipe. En Europe Continentale, en l’absence de terrain approprié, il correspond à un terrain de football ou rugby et n’oppose que 11 joueurs dans chaque équipe.

                             Les poteaux de l’en-but ont une forme de H avec la partie basse fermée par un filet. Des lignes sont dessinées au sol à une distance de 13m, 20m et 45 m de la ligne de fonds du terrain.

                             Des terrains plus petits tant en largeur qu’en longueur sont utilisés pour les jeunes de moins de 14 ans et pour les tournois amicaux.</p></div>
                   <div class=\"col-lg-12 text-center p-5\"><h2>Durée du match</h2></div>
                   <div class=\"col-lg-12\"><p>Les matches de football gaélique durent 60 minutes, pour deux mi-temps de 30 minutes chacune. Cependant en tournoi, les matchs durent 2 x 15minutes. Un match ne pouvant se terminer par un match nul, deux solutions existent en fonction des compétitions : on rejoue le match ou on joue une prolongation de 2 mi-temps</p></div>
                   <div class=\"col-lg-12 text-center p-5\"><h2>Les équipes</h2></div>
                  <div class=\"col-lg-12\"><p>En Europe Continentale, les équipes sont composées de 11 joueurs qui se répartissent ainsi:</p></div>
                      <ul>
                          <li><p>1 gardien de but</p></li>
                          <li><p>2 défenseurs (full back)</p></li>
                          <li><p>2 milieux défensifs (half back)</p></li>
                          <li><p>2 milieux centraux (mid fielder)</p></li>
                          <li><p>2 milieux offensifs (half forward)</p></li>
                          <li><p>2 attaquants (full forward)</p></li>
                      </ul>
                  <div class=\"col-lg-12\"><p>A ces onze joueurs s’ajoutent 5 remplaçants, qui peuvent pénétrer sur le terrain à n’importe que moment pendant le match. Chaque joueur est numéroté de 1 à 16. Le gardien de but porte un maillot de couleurs différentes des tous les autres joueurs.</p></div>
                  <div class=\"col-lg-12 text-center p-5\"><h2>Le ballon</h2></div>
                  <div class=\"col-lg-12\"><p>Le ballon est de forme sphérique, similaire au ballon de football, mais plus lourd. L’enveloppe est constituée de bandes rectangulaires, ce qui lui donne des allures de ballon de volley-ball. Le ballon peut être frappé du pied ou de la main.

                          Les ballons de Football Gaélique ne sont pas vendus en France, ils sont donc une ressource rare et précieuse pour les clubs !</p></div>
                  <div class=\"col-lg-12 text-center p-5\"><h2>Les buts et le décompte des points</h2></div>
             <div class=\"col-lg-12 d-inline-block d-flex align-items-center\">
                   <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/3.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
             <div class=\"col-lg-6\"><p>Il existe deux façons de marquer au football gaélique:</p>

                   <p>Si la balle passe entre les poteaux et au dessus de la barre transversale, on marque 1 point
                           Si la balle entre dans le but sous la barre transversale, on marque un but, soit 3 points.
                           Les points sont par exemple comptabilisés de cette façon :</p>
                      <ul>
                          <li>Equipe A : 0-15</li>
                          <li>Equipe B : 1-11</li>
                      </ul>
                      <p>Ce qui signifie :</p>
                      <ul>
                          <li>Equipe A : 0 but et 15 points</li>
                          <li>Equipe B : 1 but et 11 points, soit 14 points</li>
                      </ul>
                      <p>L’équipe A est donc victorieuse</p></div>
             </div>
                      <div class=\"col-lg-12 text-center p-5\"><h2>Le jeu </h2></div>
                      <div class=\"col-lg-12\"><p>Le porteur du ballon n’a pas le droit de faire plus de quatre pas en portant le ballon. Pour continuer son action et progresser sur le terrain, le joueur peut effectuer un dribble (comme au basket-ball), ou bien enchaîner sur un « solo » (ou toe-tap) c’est-à-dire lâcher le ballon sur son pied et le renvoyer dans ses mains. Il peut alors repartir pour quatre pas. Si le joueur peut enchaîner autant de solos qu’il le souhaite, il n’a pas le droit d’effectuer deux dribble consécutifs. On peut donc schématiser une séquence de progression comme cela:</p></div>
                      <div class=\"col-lg-12\"><p>-> 4 pas + 1 dribble + 4 pas + un solo et ainsi de suite</p></div>
                       <div class=\"col-lg-12\"><p>
                              Le joueur n’a pas le droit de ramasser le ballon au sol avec les mains. Il faut soulever le ballon avec le pied, faire un petit jongle pour se l’amener dans les mains (un « pick-up »).

                              La passe à la main est autorisée, mais le jet de ballon est interdit. La passe se fait en tapant le ballon : il faut propulser le ballon de telle façon qu’au moment de la frappe les deux mains soient en contact avec celui-ci. Volleyer le ballon (c’est à dire le soulever de la main qui le tient avant de frapper) est donc interdit.

                              Les contacts physiques sont très réglementés. Si les contacts épaule contre épaule sont autorisés, les placages comme ceux que l’on retrouve au rugby sont interdits. Toute faute de jeu est pénalisée : le joueur relance le jeu en tapant la balle au pied depuis le lieu de la faute.</p></div>
                      <div class=\"col-lg-12 text-center p-5\"><h2>L’arbitrage</h2></div>
                      <div class=\"col-lg-12\"><p>Au football gaélique il y a jusqu’à huit arbitres pour diriger une rencontre:</p></div>
                        <ul>
                              <li>L’arbitre de champ (arbitre principal) : il est responsable du bon déroulement de la partie. Il juge les fautes de jeu, compte les points, et sanctionne quand cela est nécessaire</li>
                              <li>Deux juges de touche : ils jugent les remises en jeu après que le ballon soit sorti du terrain.</li>
                              <li>Quatre assesseurs (deux auprès de chaque but) : leur rôle est de valider les points. Vêtus d’une blouse blanche, ils agitent un drapeau blanc pour valider les points et un drapeau vert pour les buts marqués. Pour signaler que le point n’est pas marqu” ils mettent leurs bras en croix sans prendre les drapeaux.</li>
                              <li>  Un deuxième arbitre officiel, placé sur le bord du terrain, gère les remplacements et le chronométrage, et un juge de touche remplaçant (en championnat All-Ireland uniquement)</li>

                          </ul>
                          <div class=\"col-lg-12 arbitre\"><p>Tous les arbitres peuvent signaler une faute à l’arbitre de champ et l’aider dans sa prise de décision. L’arbitre de champ a toujours le dernier mot et peut invalider une décision d’un de ses subordonnés.</p></div>


         </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gaelicBundle:Default:footballgaelic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  76 => 10,  67 => 9,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@gaelic/Default/base.html.twig' %}

{% block title %}

     Football Gaélic

{% endblock %}

{% block content %}

<h1 class=\"titreFootballGaelic\">Football Gaélic (les règles)</h1>
         <div class=\"container regle\">
                   <div class=\"col-lg-12 text-center p-5\"><h2>le terrain</h2></div>
                   <div class=\"col-lg-12 \"><p>Le terrain est de forme rectangulaire, aux mesures réglementaires de 140 x 90 m pour 15 joueurs par équipe. En Europe Continentale, en l’absence de terrain approprié, il correspond à un terrain de football ou rugby et n’oppose que 11 joueurs dans chaque équipe.

                             Les poteaux de l’en-but ont une forme de H avec la partie basse fermée par un filet. Des lignes sont dessinées au sol à une distance de 13m, 20m et 45 m de la ligne de fonds du terrain.

                             Des terrains plus petits tant en largeur qu’en longueur sont utilisés pour les jeunes de moins de 14 ans et pour les tournois amicaux.</p></div>
                   <div class=\"col-lg-12 text-center p-5\"><h2>Durée du match</h2></div>
                   <div class=\"col-lg-12\"><p>Les matches de football gaélique durent 60 minutes, pour deux mi-temps de 30 minutes chacune. Cependant en tournoi, les matchs durent 2 x 15minutes. Un match ne pouvant se terminer par un match nul, deux solutions existent en fonction des compétitions : on rejoue le match ou on joue une prolongation de 2 mi-temps</p></div>
                   <div class=\"col-lg-12 text-center p-5\"><h2>Les équipes</h2></div>
                  <div class=\"col-lg-12\"><p>En Europe Continentale, les équipes sont composées de 11 joueurs qui se répartissent ainsi:</p></div>
                      <ul>
                          <li><p>1 gardien de but</p></li>
                          <li><p>2 défenseurs (full back)</p></li>
                          <li><p>2 milieux défensifs (half back)</p></li>
                          <li><p>2 milieux centraux (mid fielder)</p></li>
                          <li><p>2 milieux offensifs (half forward)</p></li>
                          <li><p>2 attaquants (full forward)</p></li>
                      </ul>
                  <div class=\"col-lg-12\"><p>A ces onze joueurs s’ajoutent 5 remplaçants, qui peuvent pénétrer sur le terrain à n’importe que moment pendant le match. Chaque joueur est numéroté de 1 à 16. Le gardien de but porte un maillot de couleurs différentes des tous les autres joueurs.</p></div>
                  <div class=\"col-lg-12 text-center p-5\"><h2>Le ballon</h2></div>
                  <div class=\"col-lg-12\"><p>Le ballon est de forme sphérique, similaire au ballon de football, mais plus lourd. L’enveloppe est constituée de bandes rectangulaires, ce qui lui donne des allures de ballon de volley-ball. Le ballon peut être frappé du pied ou de la main.

                          Les ballons de Football Gaélique ne sont pas vendus en France, ils sont donc une ressource rare et précieuse pour les clubs !</p></div>
                  <div class=\"col-lg-12 text-center p-5\"><h2>Les buts et le décompte des points</h2></div>
             <div class=\"col-lg-12 d-inline-block d-flex align-items-center\">
                   <div class=\"col-lg-6\"><img class=\"img-fluid\" src=\"{{ asset('images/3.jpg') }}\" alt=\"\"></div>
             <div class=\"col-lg-6\"><p>Il existe deux façons de marquer au football gaélique:</p>

                   <p>Si la balle passe entre les poteaux et au dessus de la barre transversale, on marque 1 point
                           Si la balle entre dans le but sous la barre transversale, on marque un but, soit 3 points.
                           Les points sont par exemple comptabilisés de cette façon :</p>
                      <ul>
                          <li>Equipe A : 0-15</li>
                          <li>Equipe B : 1-11</li>
                      </ul>
                      <p>Ce qui signifie :</p>
                      <ul>
                          <li>Equipe A : 0 but et 15 points</li>
                          <li>Equipe B : 1 but et 11 points, soit 14 points</li>
                      </ul>
                      <p>L’équipe A est donc victorieuse</p></div>
             </div>
                      <div class=\"col-lg-12 text-center p-5\"><h2>Le jeu </h2></div>
                      <div class=\"col-lg-12\"><p>Le porteur du ballon n’a pas le droit de faire plus de quatre pas en portant le ballon. Pour continuer son action et progresser sur le terrain, le joueur peut effectuer un dribble (comme au basket-ball), ou bien enchaîner sur un « solo » (ou toe-tap) c’est-à-dire lâcher le ballon sur son pied et le renvoyer dans ses mains. Il peut alors repartir pour quatre pas. Si le joueur peut enchaîner autant de solos qu’il le souhaite, il n’a pas le droit d’effectuer deux dribble consécutifs. On peut donc schématiser une séquence de progression comme cela:</p></div>
                      <div class=\"col-lg-12\"><p>-> 4 pas + 1 dribble + 4 pas + un solo et ainsi de suite</p></div>
                       <div class=\"col-lg-12\"><p>
                              Le joueur n’a pas le droit de ramasser le ballon au sol avec les mains. Il faut soulever le ballon avec le pied, faire un petit jongle pour se l’amener dans les mains (un « pick-up »).

                              La passe à la main est autorisée, mais le jet de ballon est interdit. La passe se fait en tapant le ballon : il faut propulser le ballon de telle façon qu’au moment de la frappe les deux mains soient en contact avec celui-ci. Volleyer le ballon (c’est à dire le soulever de la main qui le tient avant de frapper) est donc interdit.

                              Les contacts physiques sont très réglementés. Si les contacts épaule contre épaule sont autorisés, les placages comme ceux que l’on retrouve au rugby sont interdits. Toute faute de jeu est pénalisée : le joueur relance le jeu en tapant la balle au pied depuis le lieu de la faute.</p></div>
                      <div class=\"col-lg-12 text-center p-5\"><h2>L’arbitrage</h2></div>
                      <div class=\"col-lg-12\"><p>Au football gaélique il y a jusqu’à huit arbitres pour diriger une rencontre:</p></div>
                        <ul>
                              <li>L’arbitre de champ (arbitre principal) : il est responsable du bon déroulement de la partie. Il juge les fautes de jeu, compte les points, et sanctionne quand cela est nécessaire</li>
                              <li>Deux juges de touche : ils jugent les remises en jeu après que le ballon soit sorti du terrain.</li>
                              <li>Quatre assesseurs (deux auprès de chaque but) : leur rôle est de valider les points. Vêtus d’une blouse blanche, ils agitent un drapeau blanc pour valider les points et un drapeau vert pour les buts marqués. Pour signaler que le point n’est pas marqu” ils mettent leurs bras en croix sans prendre les drapeaux.</li>
                              <li>  Un deuxième arbitre officiel, placé sur le bord du terrain, gère les remplacements et le chronométrage, et un juge de touche remplaçant (en championnat All-Ireland uniquement)</li>

                          </ul>
                          <div class=\"col-lg-12 arbitre\"><p>Tous les arbitres peuvent signaler une faute à l’arbitre de champ et l’aider dans sa prise de décision. L’arbitre de champ a toujours le dernier mot et peut invalider une décision d’un de ses subordonnés.</p></div>


         </div>



{% endblock %}", "gaelicBundle:Default:footballgaelic.html.twig", "/Applications/MAMP/htdocs/mon_projet/src/gaelicBundle/Resources/views/Default/footballgaelic.html.twig");
    }
}
