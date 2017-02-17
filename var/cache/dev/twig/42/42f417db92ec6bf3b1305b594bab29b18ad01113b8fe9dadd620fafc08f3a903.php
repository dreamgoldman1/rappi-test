<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00e3439f29d75e14d4dd1f4bf44c63ceb743e2e01f13feccb59e8fd0521124fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e3439f29d75e14d4dd1f4bf44c63ceb743e2e01f13feccb59e8fd0521124fd->enter($__internal_00e3439f29d75e14d4dd1f4bf44c63ceb743e2e01f13feccb59e8fd0521124fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_c4e0e3f4edc646ce385ad0c3e591e2124a8a66a0d8e3e2bbbb5ef9372e98bf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e0e3f4edc646ce385ad0c3e591e2124a8a66a0d8e3e2bbbb5ef9372e98bf73->enter($__internal_c4e0e3f4edc646ce385ad0c3e591e2124a8a66a0d8e3e2bbbb5ef9372e98bf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e3439f29d75e14d4dd1f4bf44c63ceb743e2e01f13feccb59e8fd0521124fd->leave($__internal_00e3439f29d75e14d4dd1f4bf44c63ceb743e2e01f13feccb59e8fd0521124fd_prof);

        
        $__internal_c4e0e3f4edc646ce385ad0c3e591e2124a8a66a0d8e3e2bbbb5ef9372e98bf73->leave($__internal_c4e0e3f4edc646ce385ad0c3e591e2124a8a66a0d8e3e2bbbb5ef9372e98bf73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cee69ddc1bc291357606863dac7751361ed1fa689a70fe8ed21efa1bd657cc3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee69ddc1bc291357606863dac7751361ed1fa689a70fe8ed21efa1bd657cc3d->enter($__internal_cee69ddc1bc291357606863dac7751361ed1fa689a70fe8ed21efa1bd657cc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_66ea901b33fa2e5f499d45c901545c157f6244f14d04a4ad91ccd107a668568d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ea901b33fa2e5f499d45c901545c157f6244f14d04a4ad91ccd107a668568d->enter($__internal_66ea901b33fa2e5f499d45c901545c157f6244f14d04a4ad91ccd107a668568d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_66ea901b33fa2e5f499d45c901545c157f6244f14d04a4ad91ccd107a668568d->leave($__internal_66ea901b33fa2e5f499d45c901545c157f6244f14d04a4ad91ccd107a668568d_prof);

        
        $__internal_cee69ddc1bc291357606863dac7751361ed1fa689a70fe8ed21efa1bd657cc3d->leave($__internal_cee69ddc1bc291357606863dac7751361ed1fa689a70fe8ed21efa1bd657cc3d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caef3fe3d401a044620179e7b32de19160294e379af3541cc159eec45c44de2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caef3fe3d401a044620179e7b32de19160294e379af3541cc159eec45c44de2d->enter($__internal_caef3fe3d401a044620179e7b32de19160294e379af3541cc159eec45c44de2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a8e2729084233b66913e479453b98ea06b51d0ecf938b4e3c60a4a0108d8f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8e2729084233b66913e479453b98ea06b51d0ecf938b4e3c60a4a0108d8f56->enter($__internal_8a8e2729084233b66913e479453b98ea06b51d0ecf938b4e3c60a4a0108d8f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a8e2729084233b66913e479453b98ea06b51d0ecf938b4e3c60a4a0108d8f56->leave($__internal_8a8e2729084233b66913e479453b98ea06b51d0ecf938b4e3c60a4a0108d8f56_prof);

        
        $__internal_caef3fe3d401a044620179e7b32de19160294e379af3541cc159eec45c44de2d->leave($__internal_caef3fe3d401a044620179e7b32de19160294e379af3541cc159eec45c44de2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5aad22a783743947efb0a7da43fbadc396733c7af663cfe1a333c2e14cc24ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aad22a783743947efb0a7da43fbadc396733c7af663cfe1a333c2e14cc24ec->enter($__internal_e5aad22a783743947efb0a7da43fbadc396733c7af663cfe1a333c2e14cc24ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93f46867021472ae7d0893cddb9e78b031a052e18847338feae1224fcd74c45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f46867021472ae7d0893cddb9e78b031a052e18847338feae1224fcd74c45b->enter($__internal_93f46867021472ae7d0893cddb9e78b031a052e18847338feae1224fcd74c45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_93f46867021472ae7d0893cddb9e78b031a052e18847338feae1224fcd74c45b->leave($__internal_93f46867021472ae7d0893cddb9e78b031a052e18847338feae1224fcd74c45b_prof);

        
        $__internal_e5aad22a783743947efb0a7da43fbadc396733c7af663cfe1a333c2e14cc24ec->leave($__internal_e5aad22a783743947efb0a7da43fbadc396733c7af663cfe1a333c2e14cc24ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
