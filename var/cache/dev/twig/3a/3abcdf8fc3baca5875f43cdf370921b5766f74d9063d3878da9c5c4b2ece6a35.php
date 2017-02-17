<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_ba453e1919073f73f3bc59bb97988a349d4b48c1eae8f0c1e3d888762907eef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba453e1919073f73f3bc59bb97988a349d4b48c1eae8f0c1e3d888762907eef3->enter($__internal_ba453e1919073f73f3bc59bb97988a349d4b48c1eae8f0c1e3d888762907eef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d76599671a486eb9dbee6d4c3b24723f7a539f36d0b65fc712fc40fb048c3a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76599671a486eb9dbee6d4c3b24723f7a539f36d0b65fc712fc40fb048c3a2c->enter($__internal_d76599671a486eb9dbee6d4c3b24723f7a539f36d0b65fc712fc40fb048c3a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ba453e1919073f73f3bc59bb97988a349d4b48c1eae8f0c1e3d888762907eef3->leave($__internal_ba453e1919073f73f3bc59bb97988a349d4b48c1eae8f0c1e3d888762907eef3_prof);

        
        $__internal_d76599671a486eb9dbee6d4c3b24723f7a539f36d0b65fc712fc40fb048c3a2c->leave($__internal_d76599671a486eb9dbee6d4c3b24723f7a539f36d0b65fc712fc40fb048c3a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
