<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4fb7cc18625e4a162a8e8b53b07c35b37a1eeda398e94458abbc14c92bada940 extends Twig_Template
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
        $__internal_56f8b25cf0334384dc265664b03a091e8a34101cd9628b246f6db73e23b7988e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f8b25cf0334384dc265664b03a091e8a34101cd9628b246f6db73e23b7988e->enter($__internal_56f8b25cf0334384dc265664b03a091e8a34101cd9628b246f6db73e23b7988e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cc0eb3eb6c01dc2c640f675982757c554e2247f43023bce60e8d4406e8c72e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0eb3eb6c01dc2c640f675982757c554e2247f43023bce60e8d4406e8c72e86->enter($__internal_cc0eb3eb6c01dc2c640f675982757c554e2247f43023bce60e8d4406e8c72e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_56f8b25cf0334384dc265664b03a091e8a34101cd9628b246f6db73e23b7988e->leave($__internal_56f8b25cf0334384dc265664b03a091e8a34101cd9628b246f6db73e23b7988e_prof);

        
        $__internal_cc0eb3eb6c01dc2c640f675982757c554e2247f43023bce60e8d4406e8c72e86->leave($__internal_cc0eb3eb6c01dc2c640f675982757c554e2247f43023bce60e8d4406e8c72e86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
