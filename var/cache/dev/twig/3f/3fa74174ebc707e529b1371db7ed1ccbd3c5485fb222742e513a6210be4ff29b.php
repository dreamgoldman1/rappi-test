<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2c29634760b17543e9ccd96df4246758ace5a478f063510b15e80269e5d87de4 extends Twig_Template
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
        $__internal_9752b2f017376fb6cccdf9fef789ec63dee0c80fb4854942758a2e170d6c7b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9752b2f017376fb6cccdf9fef789ec63dee0c80fb4854942758a2e170d6c7b3a->enter($__internal_9752b2f017376fb6cccdf9fef789ec63dee0c80fb4854942758a2e170d6c7b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e8c7782cff6da27038c1aaed2c2596ca676544dc1f6b9257ca500aebc1a2a763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c7782cff6da27038c1aaed2c2596ca676544dc1f6b9257ca500aebc1a2a763->enter($__internal_e8c7782cff6da27038c1aaed2c2596ca676544dc1f6b9257ca500aebc1a2a763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9752b2f017376fb6cccdf9fef789ec63dee0c80fb4854942758a2e170d6c7b3a->leave($__internal_9752b2f017376fb6cccdf9fef789ec63dee0c80fb4854942758a2e170d6c7b3a_prof);

        
        $__internal_e8c7782cff6da27038c1aaed2c2596ca676544dc1f6b9257ca500aebc1a2a763->leave($__internal_e8c7782cff6da27038c1aaed2c2596ca676544dc1f6b9257ca500aebc1a2a763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
