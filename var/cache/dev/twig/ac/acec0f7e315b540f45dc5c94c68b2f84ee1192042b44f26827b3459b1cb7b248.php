<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_1057a5406f98737a0f6aa607744cdb59f9a16d0d40bace90531ae11e5284e2bb extends Twig_Template
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
        $__internal_eb55fe1f13902ed6f1b0c9dd7196a5708977751de892ff04ac0be130d6a7d6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb55fe1f13902ed6f1b0c9dd7196a5708977751de892ff04ac0be130d6a7d6dc->enter($__internal_eb55fe1f13902ed6f1b0c9dd7196a5708977751de892ff04ac0be130d6a7d6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_93a5fb778dc6a19f1ce5bd4f950924b96701668e7d569dbb4d03b7c81c69c874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a5fb778dc6a19f1ce5bd4f950924b96701668e7d569dbb4d03b7c81c69c874->enter($__internal_93a5fb778dc6a19f1ce5bd4f950924b96701668e7d569dbb4d03b7c81c69c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eb55fe1f13902ed6f1b0c9dd7196a5708977751de892ff04ac0be130d6a7d6dc->leave($__internal_eb55fe1f13902ed6f1b0c9dd7196a5708977751de892ff04ac0be130d6a7d6dc_prof);

        
        $__internal_93a5fb778dc6a19f1ce5bd4f950924b96701668e7d569dbb4d03b7c81c69c874->leave($__internal_93a5fb778dc6a19f1ce5bd4f950924b96701668e7d569dbb4d03b7c81c69c874_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
