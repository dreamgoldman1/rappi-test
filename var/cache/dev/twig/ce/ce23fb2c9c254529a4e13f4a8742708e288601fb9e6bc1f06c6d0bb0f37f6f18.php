<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_d8316e43fc6f880979cf43acf6686b3083da68a7386615909bf83a51a245a455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8316e43fc6f880979cf43acf6686b3083da68a7386615909bf83a51a245a455->enter($__internal_d8316e43fc6f880979cf43acf6686b3083da68a7386615909bf83a51a245a455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_57ebb5ad9bd56450b7f368e7646fa4d19907cf019c554ea1e36ce4ddbd727597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ebb5ad9bd56450b7f368e7646fa4d19907cf019c554ea1e36ce4ddbd727597->enter($__internal_57ebb5ad9bd56450b7f368e7646fa4d19907cf019c554ea1e36ce4ddbd727597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d8316e43fc6f880979cf43acf6686b3083da68a7386615909bf83a51a245a455->leave($__internal_d8316e43fc6f880979cf43acf6686b3083da68a7386615909bf83a51a245a455_prof);

        
        $__internal_57ebb5ad9bd56450b7f368e7646fa4d19907cf019c554ea1e36ce4ddbd727597->leave($__internal_57ebb5ad9bd56450b7f368e7646fa4d19907cf019c554ea1e36ce4ddbd727597_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
