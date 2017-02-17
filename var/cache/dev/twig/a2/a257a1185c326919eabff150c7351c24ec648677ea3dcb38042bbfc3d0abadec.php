<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a1fdff7aafdd46a148527a476088d3fe0b3e05781102cd8f9aad4af5b4799ef9 extends Twig_Template
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
        $__internal_748b06711921497074cd2fd1c713a534e10da765d1fdbcc82c90476e083d7a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748b06711921497074cd2fd1c713a534e10da765d1fdbcc82c90476e083d7a9d->enter($__internal_748b06711921497074cd2fd1c713a534e10da765d1fdbcc82c90476e083d7a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_46ebd03b16dcd188b4533f65d3a0d3902b91e0808d687f9ff86fc25a30dcd779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ebd03b16dcd188b4533f65d3a0d3902b91e0808d687f9ff86fc25a30dcd779->enter($__internal_46ebd03b16dcd188b4533f65d3a0d3902b91e0808d687f9ff86fc25a30dcd779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_748b06711921497074cd2fd1c713a534e10da765d1fdbcc82c90476e083d7a9d->leave($__internal_748b06711921497074cd2fd1c713a534e10da765d1fdbcc82c90476e083d7a9d_prof);

        
        $__internal_46ebd03b16dcd188b4533f65d3a0d3902b91e0808d687f9ff86fc25a30dcd779->leave($__internal_46ebd03b16dcd188b4533f65d3a0d3902b91e0808d687f9ff86fc25a30dcd779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
