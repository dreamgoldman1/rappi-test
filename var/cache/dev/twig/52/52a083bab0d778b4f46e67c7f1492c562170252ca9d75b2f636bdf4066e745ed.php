<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8dc9e6c82196d273eff516f503cb02cd1de7ad444fd39dc242077a723ca70405 extends Twig_Template
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
        $__internal_31f34c0fc1eb663950dc9d85f1d6587bea059dfcd6d099238e1b61bef025ef24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f34c0fc1eb663950dc9d85f1d6587bea059dfcd6d099238e1b61bef025ef24->enter($__internal_31f34c0fc1eb663950dc9d85f1d6587bea059dfcd6d099238e1b61bef025ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_0b8fb3a0957a5ab053dd8823ec5ff3404ee9776c8427dc0bf0eac9ad928a2690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8fb3a0957a5ab053dd8823ec5ff3404ee9776c8427dc0bf0eac9ad928a2690->enter($__internal_0b8fb3a0957a5ab053dd8823ec5ff3404ee9776c8427dc0bf0eac9ad928a2690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_31f34c0fc1eb663950dc9d85f1d6587bea059dfcd6d099238e1b61bef025ef24->leave($__internal_31f34c0fc1eb663950dc9d85f1d6587bea059dfcd6d099238e1b61bef025ef24_prof);

        
        $__internal_0b8fb3a0957a5ab053dd8823ec5ff3404ee9776c8427dc0bf0eac9ad928a2690->leave($__internal_0b8fb3a0957a5ab053dd8823ec5ff3404ee9776c8427dc0bf0eac9ad928a2690_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
