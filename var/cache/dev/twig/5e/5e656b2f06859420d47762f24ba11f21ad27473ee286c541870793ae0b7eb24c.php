<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c77f1ec3db1d241ec74821bf3638517286e3991bef0b170432a39d181b3d29da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d905562796999ee7a9e5d891080f0a98a6ec823bf5abd271f8de61f62b7fe39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d905562796999ee7a9e5d891080f0a98a6ec823bf5abd271f8de61f62b7fe39->enter($__internal_1d905562796999ee7a9e5d891080f0a98a6ec823bf5abd271f8de61f62b7fe39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_04c73ea9b9c24bf494b5a95f501bd2a3022a57baf419578b10114e733be4b63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04c73ea9b9c24bf494b5a95f501bd2a3022a57baf419578b10114e733be4b63c->enter($__internal_04c73ea9b9c24bf494b5a95f501bd2a3022a57baf419578b10114e733be4b63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d905562796999ee7a9e5d891080f0a98a6ec823bf5abd271f8de61f62b7fe39->leave($__internal_1d905562796999ee7a9e5d891080f0a98a6ec823bf5abd271f8de61f62b7fe39_prof);

        
        $__internal_04c73ea9b9c24bf494b5a95f501bd2a3022a57baf419578b10114e733be4b63c->leave($__internal_04c73ea9b9c24bf494b5a95f501bd2a3022a57baf419578b10114e733be4b63c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_391d6c7794152bf74b2a6afd69638ee0d14a75a601d8769d778d16025e3aacc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391d6c7794152bf74b2a6afd69638ee0d14a75a601d8769d778d16025e3aacc9->enter($__internal_391d6c7794152bf74b2a6afd69638ee0d14a75a601d8769d778d16025e3aacc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e222aa17f66bbfac44a835adb46c513b92d8ce0e82ba254e5a70c04ba36fbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e222aa17f66bbfac44a835adb46c513b92d8ce0e82ba254e5a70c04ba36fbc5->enter($__internal_9e222aa17f66bbfac44a835adb46c513b92d8ce0e82ba254e5a70c04ba36fbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9e222aa17f66bbfac44a835adb46c513b92d8ce0e82ba254e5a70c04ba36fbc5->leave($__internal_9e222aa17f66bbfac44a835adb46c513b92d8ce0e82ba254e5a70c04ba36fbc5_prof);

        
        $__internal_391d6c7794152bf74b2a6afd69638ee0d14a75a601d8769d778d16025e3aacc9->leave($__internal_391d6c7794152bf74b2a6afd69638ee0d14a75a601d8769d778d16025e3aacc9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c4879fd8a3029b763df9def67802739789267c544aa7a5e100941048c1aae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4879fd8a3029b763df9def67802739789267c544aa7a5e100941048c1aae9e->enter($__internal_0c4879fd8a3029b763df9def67802739789267c544aa7a5e100941048c1aae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01a3bb6bfbb9b1d1c61a7b17cda3833740231d82bd52edc37f4309574c68effd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a3bb6bfbb9b1d1c61a7b17cda3833740231d82bd52edc37f4309574c68effd->enter($__internal_01a3bb6bfbb9b1d1c61a7b17cda3833740231d82bd52edc37f4309574c68effd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_01a3bb6bfbb9b1d1c61a7b17cda3833740231d82bd52edc37f4309574c68effd->leave($__internal_01a3bb6bfbb9b1d1c61a7b17cda3833740231d82bd52edc37f4309574c68effd_prof);

        
        $__internal_0c4879fd8a3029b763df9def67802739789267c544aa7a5e100941048c1aae9e->leave($__internal_0c4879fd8a3029b763df9def67802739789267c544aa7a5e100941048c1aae9e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
