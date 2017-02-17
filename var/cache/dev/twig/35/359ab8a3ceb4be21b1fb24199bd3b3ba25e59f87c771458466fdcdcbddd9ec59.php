<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_653c22a4f22f493e242cb783acb6e77e59cd051536346e88ad8bae2aa8116bc7 extends Twig_Template
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
        $__internal_802142360b5b18507bb0721a0db1e9b12c8e735e6597080fd7769b09dc92feba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802142360b5b18507bb0721a0db1e9b12c8e735e6597080fd7769b09dc92feba->enter($__internal_802142360b5b18507bb0721a0db1e9b12c8e735e6597080fd7769b09dc92feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d4fb7da8241fb7ab3fa33ae8373b0a339ffee2d9b062e2a63578838c9fe25a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fb7da8241fb7ab3fa33ae8373b0a339ffee2d9b062e2a63578838c9fe25a3f->enter($__internal_d4fb7da8241fb7ab3fa33ae8373b0a339ffee2d9b062e2a63578838c9fe25a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_802142360b5b18507bb0721a0db1e9b12c8e735e6597080fd7769b09dc92feba->leave($__internal_802142360b5b18507bb0721a0db1e9b12c8e735e6597080fd7769b09dc92feba_prof);

        
        $__internal_d4fb7da8241fb7ab3fa33ae8373b0a339ffee2d9b062e2a63578838c9fe25a3f->leave($__internal_d4fb7da8241fb7ab3fa33ae8373b0a339ffee2d9b062e2a63578838c9fe25a3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
