<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a5c698edca1c82f3b2ee1293ead66260beb3a3949b38ee76ada0365385af955a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c698edca1c82f3b2ee1293ead66260beb3a3949b38ee76ada0365385af955a->enter($__internal_a5c698edca1c82f3b2ee1293ead66260beb3a3949b38ee76ada0365385af955a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_61e23ffec79b3e805820a541dc19d0468bc090247f8788c3020ca6451334e9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e23ffec79b3e805820a541dc19d0468bc090247f8788c3020ca6451334e9c0->enter($__internal_61e23ffec79b3e805820a541dc19d0468bc090247f8788c3020ca6451334e9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c698edca1c82f3b2ee1293ead66260beb3a3949b38ee76ada0365385af955a->leave($__internal_a5c698edca1c82f3b2ee1293ead66260beb3a3949b38ee76ada0365385af955a_prof);

        
        $__internal_61e23ffec79b3e805820a541dc19d0468bc090247f8788c3020ca6451334e9c0->leave($__internal_61e23ffec79b3e805820a541dc19d0468bc090247f8788c3020ca6451334e9c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d3be1632cddb4f4616520251b284d97b17a870dd8c5f63a9e9eaa007cfca535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3be1632cddb4f4616520251b284d97b17a870dd8c5f63a9e9eaa007cfca535->enter($__internal_7d3be1632cddb4f4616520251b284d97b17a870dd8c5f63a9e9eaa007cfca535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_948c577e2f3b387a825c9cbacd8df9333e3b03003043fa6a440f16f3b3601c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948c577e2f3b387a825c9cbacd8df9333e3b03003043fa6a440f16f3b3601c7b->enter($__internal_948c577e2f3b387a825c9cbacd8df9333e3b03003043fa6a440f16f3b3601c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_948c577e2f3b387a825c9cbacd8df9333e3b03003043fa6a440f16f3b3601c7b->leave($__internal_948c577e2f3b387a825c9cbacd8df9333e3b03003043fa6a440f16f3b3601c7b_prof);

        
        $__internal_7d3be1632cddb4f4616520251b284d97b17a870dd8c5f63a9e9eaa007cfca535->leave($__internal_7d3be1632cddb4f4616520251b284d97b17a870dd8c5f63a9e9eaa007cfca535_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c69e549bda643a48c612f5185c825a4f89645d90053e929f20592ae1f674a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c69e549bda643a48c612f5185c825a4f89645d90053e929f20592ae1f674a70->enter($__internal_2c69e549bda643a48c612f5185c825a4f89645d90053e929f20592ae1f674a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b48e477fcebc03e7881c87f18e91beedbd82272c78122db5f74b1bfe1b40ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b48e477fcebc03e7881c87f18e91beedbd82272c78122db5f74b1bfe1b40ed8->enter($__internal_9b48e477fcebc03e7881c87f18e91beedbd82272c78122db5f74b1bfe1b40ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9b48e477fcebc03e7881c87f18e91beedbd82272c78122db5f74b1bfe1b40ed8->leave($__internal_9b48e477fcebc03e7881c87f18e91beedbd82272c78122db5f74b1bfe1b40ed8_prof);

        
        $__internal_2c69e549bda643a48c612f5185c825a4f89645d90053e929f20592ae1f674a70->leave($__internal_2c69e549bda643a48c612f5185c825a4f89645d90053e929f20592ae1f674a70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca1de89171e2db1561f8a71aeb4b3eb128f2918332cb81983bc6fe1ca8191787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1de89171e2db1561f8a71aeb4b3eb128f2918332cb81983bc6fe1ca8191787->enter($__internal_ca1de89171e2db1561f8a71aeb4b3eb128f2918332cb81983bc6fe1ca8191787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eb5868f62285ad6ccede713dd75fd0bc63ce1b2610d7c1f9d485d62317200633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5868f62285ad6ccede713dd75fd0bc63ce1b2610d7c1f9d485d62317200633->enter($__internal_eb5868f62285ad6ccede713dd75fd0bc63ce1b2610d7c1f9d485d62317200633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_eb5868f62285ad6ccede713dd75fd0bc63ce1b2610d7c1f9d485d62317200633->leave($__internal_eb5868f62285ad6ccede713dd75fd0bc63ce1b2610d7c1f9d485d62317200633_prof);

        
        $__internal_ca1de89171e2db1561f8a71aeb4b3eb128f2918332cb81983bc6fe1ca8191787->leave($__internal_ca1de89171e2db1561f8a71aeb4b3eb128f2918332cb81983bc6fe1ca8191787_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
