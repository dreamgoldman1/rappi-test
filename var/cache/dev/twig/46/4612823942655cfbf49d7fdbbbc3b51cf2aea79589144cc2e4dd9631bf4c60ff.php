<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_54b9b918dad1cd275aa79252279314378caa278b0c1c5029de4ee8f033419821 extends Twig_Template
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
        $__internal_5ee13bf178b46d072e51afe327576a76f9a6e0de643b7a47d8c755bd0b7c300e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee13bf178b46d072e51afe327576a76f9a6e0de643b7a47d8c755bd0b7c300e->enter($__internal_5ee13bf178b46d072e51afe327576a76f9a6e0de643b7a47d8c755bd0b7c300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_589916d1f7587f1b33362e90d8acacc0fe39a12c46a832d31ec48ed4cc932901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_589916d1f7587f1b33362e90d8acacc0fe39a12c46a832d31ec48ed4cc932901->enter($__internal_589916d1f7587f1b33362e90d8acacc0fe39a12c46a832d31ec48ed4cc932901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5ee13bf178b46d072e51afe327576a76f9a6e0de643b7a47d8c755bd0b7c300e->leave($__internal_5ee13bf178b46d072e51afe327576a76f9a6e0de643b7a47d8c755bd0b7c300e_prof);

        
        $__internal_589916d1f7587f1b33362e90d8acacc0fe39a12c46a832d31ec48ed4cc932901->leave($__internal_589916d1f7587f1b33362e90d8acacc0fe39a12c46a832d31ec48ed4cc932901_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
