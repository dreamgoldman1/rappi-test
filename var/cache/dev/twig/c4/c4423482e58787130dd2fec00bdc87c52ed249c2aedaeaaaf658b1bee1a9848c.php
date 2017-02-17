<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_8f8f83077e472ff27ca7b9322d4571ce64e7d87c495e07e8a14acae6119369b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8f83077e472ff27ca7b9322d4571ce64e7d87c495e07e8a14acae6119369b9->enter($__internal_8f8f83077e472ff27ca7b9322d4571ce64e7d87c495e07e8a14acae6119369b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_57546a956123a1588101e0de05fb5499549eedbf28eb78660ac99b062e749c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57546a956123a1588101e0de05fb5499549eedbf28eb78660ac99b062e749c92->enter($__internal_57546a956123a1588101e0de05fb5499549eedbf28eb78660ac99b062e749c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8f8f83077e472ff27ca7b9322d4571ce64e7d87c495e07e8a14acae6119369b9->leave($__internal_8f8f83077e472ff27ca7b9322d4571ce64e7d87c495e07e8a14acae6119369b9_prof);

        
        $__internal_57546a956123a1588101e0de05fb5499549eedbf28eb78660ac99b062e749c92->leave($__internal_57546a956123a1588101e0de05fb5499549eedbf28eb78660ac99b062e749c92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
