<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9d501caf755403338fee31fcd96c6a0e4dac6912f9aa46fcb3c2499266ad6277 extends Twig_Template
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
        $__internal_9cae8e0553fba22eece1d7f25ed82d76050eefeb6c178e322e072359c11be77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cae8e0553fba22eece1d7f25ed82d76050eefeb6c178e322e072359c11be77e->enter($__internal_9cae8e0553fba22eece1d7f25ed82d76050eefeb6c178e322e072359c11be77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d1e05d6a2daadfc82c1bd15d70e62a9cd162f85d3ecc527ee336d3c69ca5e355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e05d6a2daadfc82c1bd15d70e62a9cd162f85d3ecc527ee336d3c69ca5e355->enter($__internal_d1e05d6a2daadfc82c1bd15d70e62a9cd162f85d3ecc527ee336d3c69ca5e355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9cae8e0553fba22eece1d7f25ed82d76050eefeb6c178e322e072359c11be77e->leave($__internal_9cae8e0553fba22eece1d7f25ed82d76050eefeb6c178e322e072359c11be77e_prof);

        
        $__internal_d1e05d6a2daadfc82c1bd15d70e62a9cd162f85d3ecc527ee336d3c69ca5e355->leave($__internal_d1e05d6a2daadfc82c1bd15d70e62a9cd162f85d3ecc527ee336d3c69ca5e355_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
