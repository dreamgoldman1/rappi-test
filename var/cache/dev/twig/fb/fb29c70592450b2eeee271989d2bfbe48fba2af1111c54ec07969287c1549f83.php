<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_10ea8850684cab12cc89fbbd5c26c4522cbff88ded48cc889ac04c06787b31f3 extends Twig_Template
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
        $__internal_5b3911f0a4aed23f6ce2157f4cba7a394ef2464abcec28b4ae6e3dafb6eefac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3911f0a4aed23f6ce2157f4cba7a394ef2464abcec28b4ae6e3dafb6eefac2->enter($__internal_5b3911f0a4aed23f6ce2157f4cba7a394ef2464abcec28b4ae6e3dafb6eefac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_21d5205bb401efc6c22f1a7f596504ed6629c3130525bff99bdb628e3efefb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d5205bb401efc6c22f1a7f596504ed6629c3130525bff99bdb628e3efefb0e->enter($__internal_21d5205bb401efc6c22f1a7f596504ed6629c3130525bff99bdb628e3efefb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5b3911f0a4aed23f6ce2157f4cba7a394ef2464abcec28b4ae6e3dafb6eefac2->leave($__internal_5b3911f0a4aed23f6ce2157f4cba7a394ef2464abcec28b4ae6e3dafb6eefac2_prof);

        
        $__internal_21d5205bb401efc6c22f1a7f596504ed6629c3130525bff99bdb628e3efefb0e->leave($__internal_21d5205bb401efc6c22f1a7f596504ed6629c3130525bff99bdb628e3efefb0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
