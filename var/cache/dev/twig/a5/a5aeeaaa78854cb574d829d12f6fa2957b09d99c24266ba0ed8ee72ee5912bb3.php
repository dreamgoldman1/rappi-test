<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_bba017919bdf57e282372139b2f1844b2afe0738943686fa027d60ab02ea55f2 extends Twig_Template
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
        $__internal_90f1d8b5d8724d3480d2e4f3e72e584027c6f82b4982ba610ed09f2cd09cb242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f1d8b5d8724d3480d2e4f3e72e584027c6f82b4982ba610ed09f2cd09cb242->enter($__internal_90f1d8b5d8724d3480d2e4f3e72e584027c6f82b4982ba610ed09f2cd09cb242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_94a22d6d6c7fa31db08e2b0d3afa67729abb7f10f8a38d5a11edb2b09db38075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a22d6d6c7fa31db08e2b0d3afa67729abb7f10f8a38d5a11edb2b09db38075->enter($__internal_94a22d6d6c7fa31db08e2b0d3afa67729abb7f10f8a38d5a11edb2b09db38075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_90f1d8b5d8724d3480d2e4f3e72e584027c6f82b4982ba610ed09f2cd09cb242->leave($__internal_90f1d8b5d8724d3480d2e4f3e72e584027c6f82b4982ba610ed09f2cd09cb242_prof);

        
        $__internal_94a22d6d6c7fa31db08e2b0d3afa67729abb7f10f8a38d5a11edb2b09db38075->leave($__internal_94a22d6d6c7fa31db08e2b0d3afa67729abb7f10f8a38d5a11edb2b09db38075_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
