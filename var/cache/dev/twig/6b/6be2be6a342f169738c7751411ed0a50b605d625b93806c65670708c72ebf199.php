<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_badaea7f31119e98727051b89aff003fa57d9ac1331a446306d01003014d9c3b extends Twig_Template
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
        $__internal_2ff2859cb55504b3c067469bf8fc11211bad8421c298b39909daecf20d2a264e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff2859cb55504b3c067469bf8fc11211bad8421c298b39909daecf20d2a264e->enter($__internal_2ff2859cb55504b3c067469bf8fc11211bad8421c298b39909daecf20d2a264e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_30d7fd27c8f747bf01eaf0fe7bdc9bd95d67eb18038393637e224b8ddd69e54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d7fd27c8f747bf01eaf0fe7bdc9bd95d67eb18038393637e224b8ddd69e54d->enter($__internal_30d7fd27c8f747bf01eaf0fe7bdc9bd95d67eb18038393637e224b8ddd69e54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2ff2859cb55504b3c067469bf8fc11211bad8421c298b39909daecf20d2a264e->leave($__internal_2ff2859cb55504b3c067469bf8fc11211bad8421c298b39909daecf20d2a264e_prof);

        
        $__internal_30d7fd27c8f747bf01eaf0fe7bdc9bd95d67eb18038393637e224b8ddd69e54d->leave($__internal_30d7fd27c8f747bf01eaf0fe7bdc9bd95d67eb18038393637e224b8ddd69e54d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
