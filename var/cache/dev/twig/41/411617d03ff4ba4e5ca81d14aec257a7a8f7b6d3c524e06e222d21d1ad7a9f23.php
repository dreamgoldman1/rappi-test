<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b4a29dee895eb44c4fc4c769a9bf6a6cd17510742296424531ade6a971944754 extends Twig_Template
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
        $__internal_ef8bc29341f0194b050a238e0e33ccafba00992d94d0ec3bd51af1bb02286adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8bc29341f0194b050a238e0e33ccafba00992d94d0ec3bd51af1bb02286adc->enter($__internal_ef8bc29341f0194b050a238e0e33ccafba00992d94d0ec3bd51af1bb02286adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ba1274b873d6a968d18e2fe3cd32a6e77ef0b5064eaa1b149fe4b0091d307685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1274b873d6a968d18e2fe3cd32a6e77ef0b5064eaa1b149fe4b0091d307685->enter($__internal_ba1274b873d6a968d18e2fe3cd32a6e77ef0b5064eaa1b149fe4b0091d307685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ef8bc29341f0194b050a238e0e33ccafba00992d94d0ec3bd51af1bb02286adc->leave($__internal_ef8bc29341f0194b050a238e0e33ccafba00992d94d0ec3bd51af1bb02286adc_prof);

        
        $__internal_ba1274b873d6a968d18e2fe3cd32a6e77ef0b5064eaa1b149fe4b0091d307685->leave($__internal_ba1274b873d6a968d18e2fe3cd32a6e77ef0b5064eaa1b149fe4b0091d307685_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
