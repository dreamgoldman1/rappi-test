<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a6d7250fac0fe09ae9d9dc48481a6fc3c2cdd5b65b08e4cc7595d600b905dcec extends Twig_Template
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
        $__internal_84068ac175c7be79118b525ea22fe27cf4c955368a2ca9c67c13f0b222f368bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84068ac175c7be79118b525ea22fe27cf4c955368a2ca9c67c13f0b222f368bd->enter($__internal_84068ac175c7be79118b525ea22fe27cf4c955368a2ca9c67c13f0b222f368bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b8192fc14d01ca58e68d130c996fb7efd046691c9a66720de368fdbc4f0ad74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8192fc14d01ca58e68d130c996fb7efd046691c9a66720de368fdbc4f0ad74c->enter($__internal_b8192fc14d01ca58e68d130c996fb7efd046691c9a66720de368fdbc4f0ad74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_84068ac175c7be79118b525ea22fe27cf4c955368a2ca9c67c13f0b222f368bd->leave($__internal_84068ac175c7be79118b525ea22fe27cf4c955368a2ca9c67c13f0b222f368bd_prof);

        
        $__internal_b8192fc14d01ca58e68d130c996fb7efd046691c9a66720de368fdbc4f0ad74c->leave($__internal_b8192fc14d01ca58e68d130c996fb7efd046691c9a66720de368fdbc4f0ad74c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
