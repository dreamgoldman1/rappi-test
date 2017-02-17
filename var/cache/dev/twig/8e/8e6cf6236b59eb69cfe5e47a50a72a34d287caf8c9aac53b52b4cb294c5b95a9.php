<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c784234235a7ff887bc50d174fd272f250a41d940cce5594db2bbeb23d36505b extends Twig_Template
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
        $__internal_1a4ff5422409b828ac7831a082cd5b60c359d9257cb7f447595268fb9bbce5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4ff5422409b828ac7831a082cd5b60c359d9257cb7f447595268fb9bbce5d0->enter($__internal_1a4ff5422409b828ac7831a082cd5b60c359d9257cb7f447595268fb9bbce5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_91dffc3f2a0a7842f268aaeaba504cc943d82353ebf35703088b19c64976e261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dffc3f2a0a7842f268aaeaba504cc943d82353ebf35703088b19c64976e261->enter($__internal_91dffc3f2a0a7842f268aaeaba504cc943d82353ebf35703088b19c64976e261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1a4ff5422409b828ac7831a082cd5b60c359d9257cb7f447595268fb9bbce5d0->leave($__internal_1a4ff5422409b828ac7831a082cd5b60c359d9257cb7f447595268fb9bbce5d0_prof);

        
        $__internal_91dffc3f2a0a7842f268aaeaba504cc943d82353ebf35703088b19c64976e261->leave($__internal_91dffc3f2a0a7842f268aaeaba504cc943d82353ebf35703088b19c64976e261_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
