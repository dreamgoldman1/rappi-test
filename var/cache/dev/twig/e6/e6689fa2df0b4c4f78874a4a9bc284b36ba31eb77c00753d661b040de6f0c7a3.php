<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f03da5bf6ff20eb61a1beab852060880a3dae0ef0791dfe919ec11c308d081e7 extends Twig_Template
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
        $__internal_80c9f34a0823d2dffb459414b7b27145e8e0eb6dee48d47316c6caf69b765e54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c9f34a0823d2dffb459414b7b27145e8e0eb6dee48d47316c6caf69b765e54->enter($__internal_80c9f34a0823d2dffb459414b7b27145e8e0eb6dee48d47316c6caf69b765e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3421b6f9dafed1f5ed6be8572c14a0bacf00aae3729d35060b2370493067b43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3421b6f9dafed1f5ed6be8572c14a0bacf00aae3729d35060b2370493067b43d->enter($__internal_3421b6f9dafed1f5ed6be8572c14a0bacf00aae3729d35060b2370493067b43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_80c9f34a0823d2dffb459414b7b27145e8e0eb6dee48d47316c6caf69b765e54->leave($__internal_80c9f34a0823d2dffb459414b7b27145e8e0eb6dee48d47316c6caf69b765e54_prof);

        
        $__internal_3421b6f9dafed1f5ed6be8572c14a0bacf00aae3729d35060b2370493067b43d->leave($__internal_3421b6f9dafed1f5ed6be8572c14a0bacf00aae3729d35060b2370493067b43d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
