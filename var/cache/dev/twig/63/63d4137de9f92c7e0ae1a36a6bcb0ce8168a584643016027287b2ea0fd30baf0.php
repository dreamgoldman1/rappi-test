<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_82e2864967a076e2a826abd420b60d0a08656700d06b6b0d98e43ba8d6af745f extends Twig_Template
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
        $__internal_53866d688ec0ee149711c82f588d3164638fbc131baff343e03f964dc6284892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53866d688ec0ee149711c82f588d3164638fbc131baff343e03f964dc6284892->enter($__internal_53866d688ec0ee149711c82f588d3164638fbc131baff343e03f964dc6284892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_70f27a0136e37dca2b8ab4623e8529fcd8fff2701a3a4ef12d7217b362577665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f27a0136e37dca2b8ab4623e8529fcd8fff2701a3a4ef12d7217b362577665->enter($__internal_70f27a0136e37dca2b8ab4623e8529fcd8fff2701a3a4ef12d7217b362577665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_53866d688ec0ee149711c82f588d3164638fbc131baff343e03f964dc6284892->leave($__internal_53866d688ec0ee149711c82f588d3164638fbc131baff343e03f964dc6284892_prof);

        
        $__internal_70f27a0136e37dca2b8ab4623e8529fcd8fff2701a3a4ef12d7217b362577665->leave($__internal_70f27a0136e37dca2b8ab4623e8529fcd8fff2701a3a4ef12d7217b362577665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
