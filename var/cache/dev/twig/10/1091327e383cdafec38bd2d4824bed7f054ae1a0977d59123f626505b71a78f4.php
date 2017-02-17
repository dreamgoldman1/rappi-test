<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_af532fd45c90dc18c02268b12b5eb324e68c93d7669b7347f9156860d997db56 extends Twig_Template
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
        $__internal_3346c03a39ca9d6f3b77de04d88e20132a9ac7a0c77d703330dfd26fb2d48f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3346c03a39ca9d6f3b77de04d88e20132a9ac7a0c77d703330dfd26fb2d48f15->enter($__internal_3346c03a39ca9d6f3b77de04d88e20132a9ac7a0c77d703330dfd26fb2d48f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_68f869b0ab0f0479f795c96b063c43d50eb128fcf7e5a6ccbbd460d073cb27e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f869b0ab0f0479f795c96b063c43d50eb128fcf7e5a6ccbbd460d073cb27e2->enter($__internal_68f869b0ab0f0479f795c96b063c43d50eb128fcf7e5a6ccbbd460d073cb27e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3346c03a39ca9d6f3b77de04d88e20132a9ac7a0c77d703330dfd26fb2d48f15->leave($__internal_3346c03a39ca9d6f3b77de04d88e20132a9ac7a0c77d703330dfd26fb2d48f15_prof);

        
        $__internal_68f869b0ab0f0479f795c96b063c43d50eb128fcf7e5a6ccbbd460d073cb27e2->leave($__internal_68f869b0ab0f0479f795c96b063c43d50eb128fcf7e5a6ccbbd460d073cb27e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
