<?php

/* @IvoryCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_f2b1612df9d629d01ebe005b460d2be602d79e2a5208c784a2fd194db7b547e1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php", "/Applications/MAMP/htdocs/mon_projet/vendor/egeloen/ckeditor-bundle/Resources/views/Form/_ckeditor_javascript.html.php");
    }
}
