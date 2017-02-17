<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8512ec94405e80af9e1916e241449eda80b2c574b94bde22fc6d8e995040db9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deab2841820c2d74ead624fc8ac407cd6f72ba332ccaa848cb2db30feecaaa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deab2841820c2d74ead624fc8ac407cd6f72ba332ccaa848cb2db30feecaaa09->enter($__internal_deab2841820c2d74ead624fc8ac407cd6f72ba332ccaa848cb2db30feecaaa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4dfb6e511ae62effb78b65990a3a53f263a6c0eeac31de9cf516a668434e0611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dfb6e511ae62effb78b65990a3a53f263a6c0eeac31de9cf516a668434e0611->enter($__internal_4dfb6e511ae62effb78b65990a3a53f263a6c0eeac31de9cf516a668434e0611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_deab2841820c2d74ead624fc8ac407cd6f72ba332ccaa848cb2db30feecaaa09->leave($__internal_deab2841820c2d74ead624fc8ac407cd6f72ba332ccaa848cb2db30feecaaa09_prof);

        
        $__internal_4dfb6e511ae62effb78b65990a3a53f263a6c0eeac31de9cf516a668434e0611->leave($__internal_4dfb6e511ae62effb78b65990a3a53f263a6c0eeac31de9cf516a668434e0611_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
