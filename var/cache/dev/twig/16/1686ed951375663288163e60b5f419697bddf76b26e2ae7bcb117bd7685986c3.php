<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_de90c5e5eb9e288272d6f5c720f211d5bfd238d4b4094c8797d2175df0c4ac97 extends Twig_Template
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
        $__internal_085a83d716238baeef6adfe78e3e40c644297f395aed3fdb4886dbb880075286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085a83d716238baeef6adfe78e3e40c644297f395aed3fdb4886dbb880075286->enter($__internal_085a83d716238baeef6adfe78e3e40c644297f395aed3fdb4886dbb880075286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_84464a17ec7ab0a1e3862baa2a5904d71eff1d2120994e4529b61847e773b149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84464a17ec7ab0a1e3862baa2a5904d71eff1d2120994e4529b61847e773b149->enter($__internal_84464a17ec7ab0a1e3862baa2a5904d71eff1d2120994e4529b61847e773b149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_085a83d716238baeef6adfe78e3e40c644297f395aed3fdb4886dbb880075286->leave($__internal_085a83d716238baeef6adfe78e3e40c644297f395aed3fdb4886dbb880075286_prof);

        
        $__internal_84464a17ec7ab0a1e3862baa2a5904d71eff1d2120994e4529b61847e773b149->leave($__internal_84464a17ec7ab0a1e3862baa2a5904d71eff1d2120994e4529b61847e773b149_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
