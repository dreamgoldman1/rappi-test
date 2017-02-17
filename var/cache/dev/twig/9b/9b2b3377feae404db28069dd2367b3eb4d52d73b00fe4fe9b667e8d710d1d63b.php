<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_13d2cab323493298aae66ba8fd42e4fc3803d2ad40cd5ce1ca51403000eda4e2 extends Twig_Template
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
        $__internal_35b3f1470a3d48e6246043af3df7fa3b205984122f1ca1d1aa8ffbc2f0a0a9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b3f1470a3d48e6246043af3df7fa3b205984122f1ca1d1aa8ffbc2f0a0a9a8->enter($__internal_35b3f1470a3d48e6246043af3df7fa3b205984122f1ca1d1aa8ffbc2f0a0a9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ee424de4cd1b8af4e80f7e863775a6dbd1f9cdc52d2448268360a5af8068dd0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee424de4cd1b8af4e80f7e863775a6dbd1f9cdc52d2448268360a5af8068dd0d->enter($__internal_ee424de4cd1b8af4e80f7e863775a6dbd1f9cdc52d2448268360a5af8068dd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_35b3f1470a3d48e6246043af3df7fa3b205984122f1ca1d1aa8ffbc2f0a0a9a8->leave($__internal_35b3f1470a3d48e6246043af3df7fa3b205984122f1ca1d1aa8ffbc2f0a0a9a8_prof);

        
        $__internal_ee424de4cd1b8af4e80f7e863775a6dbd1f9cdc52d2448268360a5af8068dd0d->leave($__internal_ee424de4cd1b8af4e80f7e863775a6dbd1f9cdc52d2448268360a5af8068dd0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
