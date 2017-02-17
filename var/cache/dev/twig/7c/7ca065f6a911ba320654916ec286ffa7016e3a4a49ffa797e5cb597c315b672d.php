<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_60e8da93633c91ee986dfb1b219a60c843da13508e3d61c53290e3ed62da5379 extends Twig_Template
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
        $__internal_9f0691104ff1235129592295fb4f5b946f14da85f656d220efe599f4ddc74540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0691104ff1235129592295fb4f5b946f14da85f656d220efe599f4ddc74540->enter($__internal_9f0691104ff1235129592295fb4f5b946f14da85f656d220efe599f4ddc74540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_647068611ae74a14efb5b4dddd00922398c63f74427e916f3cfc93a8196c3ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647068611ae74a14efb5b4dddd00922398c63f74427e916f3cfc93a8196c3ae7->enter($__internal_647068611ae74a14efb5b4dddd00922398c63f74427e916f3cfc93a8196c3ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9f0691104ff1235129592295fb4f5b946f14da85f656d220efe599f4ddc74540->leave($__internal_9f0691104ff1235129592295fb4f5b946f14da85f656d220efe599f4ddc74540_prof);

        
        $__internal_647068611ae74a14efb5b4dddd00922398c63f74427e916f3cfc93a8196c3ae7->leave($__internal_647068611ae74a14efb5b4dddd00922398c63f74427e916f3cfc93a8196c3ae7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
