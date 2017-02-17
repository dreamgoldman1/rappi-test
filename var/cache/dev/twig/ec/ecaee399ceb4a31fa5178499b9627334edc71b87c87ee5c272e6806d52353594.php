<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_da93badab076d58e183c69d35c44eee527bf462fe0fce1d6d6c9310bda6822b5 extends Twig_Template
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
        $__internal_184ccc07cb8ee8e0830b6aa3c88ee7f20b79c81a501cb1126ddd11f3b0af0390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_184ccc07cb8ee8e0830b6aa3c88ee7f20b79c81a501cb1126ddd11f3b0af0390->enter($__internal_184ccc07cb8ee8e0830b6aa3c88ee7f20b79c81a501cb1126ddd11f3b0af0390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f302ba5e177092a4db2aa757db45a69f839bd6fece9da2fb8c1fb55eb3710d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f302ba5e177092a4db2aa757db45a69f839bd6fece9da2fb8c1fb55eb3710d39->enter($__internal_f302ba5e177092a4db2aa757db45a69f839bd6fece9da2fb8c1fb55eb3710d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_184ccc07cb8ee8e0830b6aa3c88ee7f20b79c81a501cb1126ddd11f3b0af0390->leave($__internal_184ccc07cb8ee8e0830b6aa3c88ee7f20b79c81a501cb1126ddd11f3b0af0390_prof);

        
        $__internal_f302ba5e177092a4db2aa757db45a69f839bd6fece9da2fb8c1fb55eb3710d39->leave($__internal_f302ba5e177092a4db2aa757db45a69f839bd6fece9da2fb8c1fb55eb3710d39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
