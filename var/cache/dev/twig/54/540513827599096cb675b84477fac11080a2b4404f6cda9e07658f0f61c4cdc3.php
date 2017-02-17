<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_654819bdcf511366fb23395f110f0e4a8ee8395d547cf3a84b647e81e159a929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654819bdcf511366fb23395f110f0e4a8ee8395d547cf3a84b647e81e159a929->enter($__internal_654819bdcf511366fb23395f110f0e4a8ee8395d547cf3a84b647e81e159a929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7a2087ef11ab48a951883b5baddcdc56927324e6f738b4223f8735187763a89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2087ef11ab48a951883b5baddcdc56927324e6f738b4223f8735187763a89a->enter($__internal_7a2087ef11ab48a951883b5baddcdc56927324e6f738b4223f8735187763a89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_654819bdcf511366fb23395f110f0e4a8ee8395d547cf3a84b647e81e159a929->leave($__internal_654819bdcf511366fb23395f110f0e4a8ee8395d547cf3a84b647e81e159a929_prof);

        
        $__internal_7a2087ef11ab48a951883b5baddcdc56927324e6f738b4223f8735187763a89a->leave($__internal_7a2087ef11ab48a951883b5baddcdc56927324e6f738b4223f8735187763a89a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
