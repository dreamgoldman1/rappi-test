<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_cf4ec3de8f5ed9a5fe3b4e068c101ffbf15fc1d15d4eb233682cdc68ea0866ab extends Twig_Template
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
        $__internal_888fdd7192f292c4f20f1c77d8c66e3c11b69bae74777c6eca48a7a14c9fb47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888fdd7192f292c4f20f1c77d8c66e3c11b69bae74777c6eca48a7a14c9fb47f->enter($__internal_888fdd7192f292c4f20f1c77d8c66e3c11b69bae74777c6eca48a7a14c9fb47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_12f938b824eca8d2082171265a3ffcb8e9b0cc166e2690342d8f331ea6b57d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f938b824eca8d2082171265a3ffcb8e9b0cc166e2690342d8f331ea6b57d3b->enter($__internal_12f938b824eca8d2082171265a3ffcb8e9b0cc166e2690342d8f331ea6b57d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_888fdd7192f292c4f20f1c77d8c66e3c11b69bae74777c6eca48a7a14c9fb47f->leave($__internal_888fdd7192f292c4f20f1c77d8c66e3c11b69bae74777c6eca48a7a14c9fb47f_prof);

        
        $__internal_12f938b824eca8d2082171265a3ffcb8e9b0cc166e2690342d8f331ea6b57d3b->leave($__internal_12f938b824eca8d2082171265a3ffcb8e9b0cc166e2690342d8f331ea6b57d3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
