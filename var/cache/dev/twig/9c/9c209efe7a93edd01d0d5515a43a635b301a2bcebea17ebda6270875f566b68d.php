<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d190c8eb8212fd21ba767679ac936bf4bc16ecd729c80d7b6d5e107d31acd0c0 extends Twig_Template
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
        $__internal_0b8a99202461797c12d4a55e906e0e53ee2156596cabc78c372256b173aa71f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8a99202461797c12d4a55e906e0e53ee2156596cabc78c372256b173aa71f4->enter($__internal_0b8a99202461797c12d4a55e906e0e53ee2156596cabc78c372256b173aa71f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_232fe6625385931db190863b29c0af563417df4686e1120c22429138c746d5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232fe6625385931db190863b29c0af563417df4686e1120c22429138c746d5a6->enter($__internal_232fe6625385931db190863b29c0af563417df4686e1120c22429138c746d5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0b8a99202461797c12d4a55e906e0e53ee2156596cabc78c372256b173aa71f4->leave($__internal_0b8a99202461797c12d4a55e906e0e53ee2156596cabc78c372256b173aa71f4_prof);

        
        $__internal_232fe6625385931db190863b29c0af563417df4686e1120c22429138c746d5a6->leave($__internal_232fe6625385931db190863b29c0af563417df4686e1120c22429138c746d5a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
