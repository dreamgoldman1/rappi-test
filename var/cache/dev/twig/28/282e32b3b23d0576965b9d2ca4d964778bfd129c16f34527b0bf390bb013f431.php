<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bcdc4cd527e49303b41a7101ff150b8c37c2738ca04f7082d96d8754942b7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcdc4cd527e49303b41a7101ff150b8c37c2738ca04f7082d96d8754942b7d9->enter($__internal_6bcdc4cd527e49303b41a7101ff150b8c37c2738ca04f7082d96d8754942b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f8360f71eb38f20009f0db88acb38f3abe8e5b258385977217808bdd87461cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8360f71eb38f20009f0db88acb38f3abe8e5b258385977217808bdd87461cc6->enter($__internal_f8360f71eb38f20009f0db88acb38f3abe8e5b258385977217808bdd87461cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bcdc4cd527e49303b41a7101ff150b8c37c2738ca04f7082d96d8754942b7d9->leave($__internal_6bcdc4cd527e49303b41a7101ff150b8c37c2738ca04f7082d96d8754942b7d9_prof);

        
        $__internal_f8360f71eb38f20009f0db88acb38f3abe8e5b258385977217808bdd87461cc6->leave($__internal_f8360f71eb38f20009f0db88acb38f3abe8e5b258385977217808bdd87461cc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6bf4d5f90e810eeb3e4ea56440ca0f25817bf277fcd6cfd19466760a2961475d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf4d5f90e810eeb3e4ea56440ca0f25817bf277fcd6cfd19466760a2961475d->enter($__internal_6bf4d5f90e810eeb3e4ea56440ca0f25817bf277fcd6cfd19466760a2961475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64424c6b1af46ad9d1e3baf009d562578dc7e2614bca0d48bf60121d81844d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64424c6b1af46ad9d1e3baf009d562578dc7e2614bca0d48bf60121d81844d83->enter($__internal_64424c6b1af46ad9d1e3baf009d562578dc7e2614bca0d48bf60121d81844d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_64424c6b1af46ad9d1e3baf009d562578dc7e2614bca0d48bf60121d81844d83->leave($__internal_64424c6b1af46ad9d1e3baf009d562578dc7e2614bca0d48bf60121d81844d83_prof);

        
        $__internal_6bf4d5f90e810eeb3e4ea56440ca0f25817bf277fcd6cfd19466760a2961475d->leave($__internal_6bf4d5f90e810eeb3e4ea56440ca0f25817bf277fcd6cfd19466760a2961475d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_208d20d0a486e83acb6363d4e92fce62fa5cf2da36f6b25640ce0254ef29c464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208d20d0a486e83acb6363d4e92fce62fa5cf2da36f6b25640ce0254ef29c464->enter($__internal_208d20d0a486e83acb6363d4e92fce62fa5cf2da36f6b25640ce0254ef29c464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed4074ddb9732f48efbf4ef6d35af1a87f38ef2baf8aa660808025f8b415563d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4074ddb9732f48efbf4ef6d35af1a87f38ef2baf8aa660808025f8b415563d->enter($__internal_ed4074ddb9732f48efbf4ef6d35af1a87f38ef2baf8aa660808025f8b415563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed4074ddb9732f48efbf4ef6d35af1a87f38ef2baf8aa660808025f8b415563d->leave($__internal_ed4074ddb9732f48efbf4ef6d35af1a87f38ef2baf8aa660808025f8b415563d_prof);

        
        $__internal_208d20d0a486e83acb6363d4e92fce62fa5cf2da36f6b25640ce0254ef29c464->leave($__internal_208d20d0a486e83acb6363d4e92fce62fa5cf2da36f6b25640ce0254ef29c464_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d757cd184afb883a25bee982c7139fad52f3f9039a0726f2debae0b8c9d105b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d757cd184afb883a25bee982c7139fad52f3f9039a0726f2debae0b8c9d105b->enter($__internal_9d757cd184afb883a25bee982c7139fad52f3f9039a0726f2debae0b8c9d105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88c49eb1bcbc6b99bbed64f7ee8adc53957ecb6a374abaa11117c801728d8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88c49eb1bcbc6b99bbed64f7ee8adc53957ecb6a374abaa11117c801728d8bb->enter($__internal_a88c49eb1bcbc6b99bbed64f7ee8adc53957ecb6a374abaa11117c801728d8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a88c49eb1bcbc6b99bbed64f7ee8adc53957ecb6a374abaa11117c801728d8bb->leave($__internal_a88c49eb1bcbc6b99bbed64f7ee8adc53957ecb6a374abaa11117c801728d8bb_prof);

        
        $__internal_9d757cd184afb883a25bee982c7139fad52f3f9039a0726f2debae0b8c9d105b->leave($__internal_9d757cd184afb883a25bee982c7139fad52f3f9039a0726f2debae0b8c9d105b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
