<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acdd87b6028865daba01f3066f521beaa92c0961ca7a3a0a44d45f23ad1e4a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdd87b6028865daba01f3066f521beaa92c0961ca7a3a0a44d45f23ad1e4a07->enter($__internal_acdd87b6028865daba01f3066f521beaa92c0961ca7a3a0a44d45f23ad1e4a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d8f582d533a938719b14b24cc8eb2384a9ddfb79682a0a69e65999a693aa6653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f582d533a938719b14b24cc8eb2384a9ddfb79682a0a69e65999a693aa6653->enter($__internal_d8f582d533a938719b14b24cc8eb2384a9ddfb79682a0a69e65999a693aa6653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_acdd87b6028865daba01f3066f521beaa92c0961ca7a3a0a44d45f23ad1e4a07->leave($__internal_acdd87b6028865daba01f3066f521beaa92c0961ca7a3a0a44d45f23ad1e4a07_prof);

        
        $__internal_d8f582d533a938719b14b24cc8eb2384a9ddfb79682a0a69e65999a693aa6653->leave($__internal_d8f582d533a938719b14b24cc8eb2384a9ddfb79682a0a69e65999a693aa6653_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c9412468ba08f459f5dc6a9d4b07b18a5689c1b8e8116530780836d34abca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c9412468ba08f459f5dc6a9d4b07b18a5689c1b8e8116530780836d34abca8->enter($__internal_25c9412468ba08f459f5dc6a9d4b07b18a5689c1b8e8116530780836d34abca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_088a4bbefcd8146e26cd8005994486905d244903c77df39b9eb71e22a864b4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088a4bbefcd8146e26cd8005994486905d244903c77df39b9eb71e22a864b4ce->enter($__internal_088a4bbefcd8146e26cd8005994486905d244903c77df39b9eb71e22a864b4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_088a4bbefcd8146e26cd8005994486905d244903c77df39b9eb71e22a864b4ce->leave($__internal_088a4bbefcd8146e26cd8005994486905d244903c77df39b9eb71e22a864b4ce_prof);

        
        $__internal_25c9412468ba08f459f5dc6a9d4b07b18a5689c1b8e8116530780836d34abca8->leave($__internal_25c9412468ba08f459f5dc6a9d4b07b18a5689c1b8e8116530780836d34abca8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d2f7dd6ad54c50d19a899670994db40a1d28f8683d530d455f46446f453a07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2f7dd6ad54c50d19a899670994db40a1d28f8683d530d455f46446f453a07d->enter($__internal_6d2f7dd6ad54c50d19a899670994db40a1d28f8683d530d455f46446f453a07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f6e49d674af1142dc80048ea0d6335b383ef6e3555ea19ab1d6fc0caac3cc9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e49d674af1142dc80048ea0d6335b383ef6e3555ea19ab1d6fc0caac3cc9b7->enter($__internal_f6e49d674af1142dc80048ea0d6335b383ef6e3555ea19ab1d6fc0caac3cc9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f6e49d674af1142dc80048ea0d6335b383ef6e3555ea19ab1d6fc0caac3cc9b7->leave($__internal_f6e49d674af1142dc80048ea0d6335b383ef6e3555ea19ab1d6fc0caac3cc9b7_prof);

        
        $__internal_6d2f7dd6ad54c50d19a899670994db40a1d28f8683d530d455f46446f453a07d->leave($__internal_6d2f7dd6ad54c50d19a899670994db40a1d28f8683d530d455f46446f453a07d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8eb5b75a5168aefeb644c81a828cc253348e82c650dea05365647e0fecef8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8eb5b75a5168aefeb644c81a828cc253348e82c650dea05365647e0fecef8c6->enter($__internal_c8eb5b75a5168aefeb644c81a828cc253348e82c650dea05365647e0fecef8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67b5197031c1d668b18c416dea41bd5fb02f527d20365160873e1f63289c6cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b5197031c1d668b18c416dea41bd5fb02f527d20365160873e1f63289c6cf1->enter($__internal_67b5197031c1d668b18c416dea41bd5fb02f527d20365160873e1f63289c6cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67b5197031c1d668b18c416dea41bd5fb02f527d20365160873e1f63289c6cf1->leave($__internal_67b5197031c1d668b18c416dea41bd5fb02f527d20365160873e1f63289c6cf1_prof);

        
        $__internal_c8eb5b75a5168aefeb644c81a828cc253348e82c650dea05365647e0fecef8c6->leave($__internal_c8eb5b75a5168aefeb644c81a828cc253348e82c650dea05365647e0fecef8c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c68c94caeeb59171a4523d5c26607dc1cf60242ca614a654b6c703d9c53e307e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68c94caeeb59171a4523d5c26607dc1cf60242ca614a654b6c703d9c53e307e->enter($__internal_c68c94caeeb59171a4523d5c26607dc1cf60242ca614a654b6c703d9c53e307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91e56a13ba303d07d085b48d8e97fc5d989c54990e6bdf62ebbfa76264ae4ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91e56a13ba303d07d085b48d8e97fc5d989c54990e6bdf62ebbfa76264ae4ee8->enter($__internal_91e56a13ba303d07d085b48d8e97fc5d989c54990e6bdf62ebbfa76264ae4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91e56a13ba303d07d085b48d8e97fc5d989c54990e6bdf62ebbfa76264ae4ee8->leave($__internal_91e56a13ba303d07d085b48d8e97fc5d989c54990e6bdf62ebbfa76264ae4ee8_prof);

        
        $__internal_c68c94caeeb59171a4523d5c26607dc1cf60242ca614a654b6c703d9c53e307e->leave($__internal_c68c94caeeb59171a4523d5c26607dc1cf60242ca614a654b6c703d9c53e307e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/rappi/app/Resources/views/base.html.twig");
    }
}
