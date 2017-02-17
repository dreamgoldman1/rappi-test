<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5616e7d110e3a6e60a7dd2dfc55825fe5128bbf96406a592f0b93ee998585e6b extends Twig_Template
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
        $__internal_63684da8d77a71dd0036fce11a2d47acf6187a443914a55666f0f91c1213a210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63684da8d77a71dd0036fce11a2d47acf6187a443914a55666f0f91c1213a210->enter($__internal_63684da8d77a71dd0036fce11a2d47acf6187a443914a55666f0f91c1213a210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_5be2c117e3da0e9dc7aa1b5f9aee2148d69a88ad0245c7559eb1b63c25dca671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be2c117e3da0e9dc7aa1b5f9aee2148d69a88ad0245c7559eb1b63c25dca671->enter($__internal_5be2c117e3da0e9dc7aa1b5f9aee2148d69a88ad0245c7559eb1b63c25dca671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_63684da8d77a71dd0036fce11a2d47acf6187a443914a55666f0f91c1213a210->leave($__internal_63684da8d77a71dd0036fce11a2d47acf6187a443914a55666f0f91c1213a210_prof);

        
        $__internal_5be2c117e3da0e9dc7aa1b5f9aee2148d69a88ad0245c7559eb1b63c25dca671->leave($__internal_5be2c117e3da0e9dc7aa1b5f9aee2148d69a88ad0245c7559eb1b63c25dca671_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
