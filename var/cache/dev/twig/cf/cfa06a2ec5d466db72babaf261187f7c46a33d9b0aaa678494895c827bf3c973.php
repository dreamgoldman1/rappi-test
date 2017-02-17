<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d10def0337bf3774b93fb4328d02b4add8a571f09f062ebb70006149535ad8da extends Twig_Template
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
        $__internal_571ad8a9c528a95c0948548812efe227bb649ea15e6b2444eea28bf57527a9ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571ad8a9c528a95c0948548812efe227bb649ea15e6b2444eea28bf57527a9ac->enter($__internal_571ad8a9c528a95c0948548812efe227bb649ea15e6b2444eea28bf57527a9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_607d5abfbc3409d7967d9ae394919193db9d98a10866352df2cce88c6c5a09cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607d5abfbc3409d7967d9ae394919193db9d98a10866352df2cce88c6c5a09cd->enter($__internal_607d5abfbc3409d7967d9ae394919193db9d98a10866352df2cce88c6c5a09cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_571ad8a9c528a95c0948548812efe227bb649ea15e6b2444eea28bf57527a9ac->leave($__internal_571ad8a9c528a95c0948548812efe227bb649ea15e6b2444eea28bf57527a9ac_prof);

        
        $__internal_607d5abfbc3409d7967d9ae394919193db9d98a10866352df2cce88c6c5a09cd->leave($__internal_607d5abfbc3409d7967d9ae394919193db9d98a10866352df2cce88c6c5a09cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
