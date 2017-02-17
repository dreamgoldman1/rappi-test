<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_53b499e9700e9227e65ed83fc6ff4397e9c6ac2ead38c2f540131efc88aa6332 extends Twig_Template
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
        $__internal_12158617856565a421312eb281c3db1de8fb24ebdb8ae2ca69db947e382f226e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12158617856565a421312eb281c3db1de8fb24ebdb8ae2ca69db947e382f226e->enter($__internal_12158617856565a421312eb281c3db1de8fb24ebdb8ae2ca69db947e382f226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_989b65b2d5be37481ba4b8315dac81652cb1ab40c22e9bf6446847611f307b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989b65b2d5be37481ba4b8315dac81652cb1ab40c22e9bf6446847611f307b26->enter($__internal_989b65b2d5be37481ba4b8315dac81652cb1ab40c22e9bf6446847611f307b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12158617856565a421312eb281c3db1de8fb24ebdb8ae2ca69db947e382f226e->leave($__internal_12158617856565a421312eb281c3db1de8fb24ebdb8ae2ca69db947e382f226e_prof);

        
        $__internal_989b65b2d5be37481ba4b8315dac81652cb1ab40c22e9bf6446847611f307b26->leave($__internal_989b65b2d5be37481ba4b8315dac81652cb1ab40c22e9bf6446847611f307b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
