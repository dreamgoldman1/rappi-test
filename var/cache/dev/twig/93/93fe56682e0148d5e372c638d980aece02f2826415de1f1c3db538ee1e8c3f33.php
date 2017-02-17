<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d8abcaece1106146ffd3c6ceefbfbf032399b2a0a0bcc7d0ee29c851d13ad835 extends Twig_Template
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
        $__internal_387379aa4dad2153cbb7df46740fcd435592528815c66107212d845d4bcd3b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387379aa4dad2153cbb7df46740fcd435592528815c66107212d845d4bcd3b48->enter($__internal_387379aa4dad2153cbb7df46740fcd435592528815c66107212d845d4bcd3b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_783cb287c6d7a1d64a2f05538ce157bae263bd69ce4aeec66a7cd2f1a117d9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_783cb287c6d7a1d64a2f05538ce157bae263bd69ce4aeec66a7cd2f1a117d9e2->enter($__internal_783cb287c6d7a1d64a2f05538ce157bae263bd69ce4aeec66a7cd2f1a117d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_387379aa4dad2153cbb7df46740fcd435592528815c66107212d845d4bcd3b48->leave($__internal_387379aa4dad2153cbb7df46740fcd435592528815c66107212d845d4bcd3b48_prof);

        
        $__internal_783cb287c6d7a1d64a2f05538ce157bae263bd69ce4aeec66a7cd2f1a117d9e2->leave($__internal_783cb287c6d7a1d64a2f05538ce157bae263bd69ce4aeec66a7cd2f1a117d9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
