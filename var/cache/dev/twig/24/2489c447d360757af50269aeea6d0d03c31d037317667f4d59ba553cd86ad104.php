<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b69598cfad517373e52a1f98c49b09292435511797e9c1596c8caaffd7bc673b extends Twig_Template
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
        $__internal_d9ea6c7454bff8cbdb4dc0cf28ab19724bcff29b4c9fe5020b2fd735a4ce1539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ea6c7454bff8cbdb4dc0cf28ab19724bcff29b4c9fe5020b2fd735a4ce1539->enter($__internal_d9ea6c7454bff8cbdb4dc0cf28ab19724bcff29b4c9fe5020b2fd735a4ce1539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3c51d53a10ff215223fc6b7ac65b00bd3e159e9bf954971922b1e6796d856e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c51d53a10ff215223fc6b7ac65b00bd3e159e9bf954971922b1e6796d856e69->enter($__internal_3c51d53a10ff215223fc6b7ac65b00bd3e159e9bf954971922b1e6796d856e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d9ea6c7454bff8cbdb4dc0cf28ab19724bcff29b4c9fe5020b2fd735a4ce1539->leave($__internal_d9ea6c7454bff8cbdb4dc0cf28ab19724bcff29b4c9fe5020b2fd735a4ce1539_prof);

        
        $__internal_3c51d53a10ff215223fc6b7ac65b00bd3e159e9bf954971922b1e6796d856e69->leave($__internal_3c51d53a10ff215223fc6b7ac65b00bd3e159e9bf954971922b1e6796d856e69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
