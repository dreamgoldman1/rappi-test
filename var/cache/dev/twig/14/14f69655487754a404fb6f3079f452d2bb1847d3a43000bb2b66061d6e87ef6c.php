<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c2a257afc4df593fdbd94b33c6ee1d0de41746940c8ad30b81ac40689c8f7970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00c770a28d38e21c53d9d93eb51041f4d817e8c18dad25dc5a01428bb172258a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c770a28d38e21c53d9d93eb51041f4d817e8c18dad25dc5a01428bb172258a->enter($__internal_00c770a28d38e21c53d9d93eb51041f4d817e8c18dad25dc5a01428bb172258a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0671c281ae2ff4aac766a4277c4a37fc055a2f86a61b14c007ada13d78680bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0671c281ae2ff4aac766a4277c4a37fc055a2f86a61b14c007ada13d78680bfb->enter($__internal_0671c281ae2ff4aac766a4277c4a37fc055a2f86a61b14c007ada13d78680bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00c770a28d38e21c53d9d93eb51041f4d817e8c18dad25dc5a01428bb172258a->leave($__internal_00c770a28d38e21c53d9d93eb51041f4d817e8c18dad25dc5a01428bb172258a_prof);

        
        $__internal_0671c281ae2ff4aac766a4277c4a37fc055a2f86a61b14c007ada13d78680bfb->leave($__internal_0671c281ae2ff4aac766a4277c4a37fc055a2f86a61b14c007ada13d78680bfb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_471164063b752f470606568097e5b21b20d8161cce9932f99ec3590d5c147ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471164063b752f470606568097e5b21b20d8161cce9932f99ec3590d5c147ac2->enter($__internal_471164063b752f470606568097e5b21b20d8161cce9932f99ec3590d5c147ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0b231ad2862f8c37c9525984cf5e885cc1de84c58f1abc4d4c848ec1b50bc406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b231ad2862f8c37c9525984cf5e885cc1de84c58f1abc4d4c848ec1b50bc406->enter($__internal_0b231ad2862f8c37c9525984cf5e885cc1de84c58f1abc4d4c848ec1b50bc406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_0b231ad2862f8c37c9525984cf5e885cc1de84c58f1abc4d4c848ec1b50bc406->leave($__internal_0b231ad2862f8c37c9525984cf5e885cc1de84c58f1abc4d4c848ec1b50bc406_prof);

        
        $__internal_471164063b752f470606568097e5b21b20d8161cce9932f99ec3590d5c147ac2->leave($__internal_471164063b752f470606568097e5b21b20d8161cce9932f99ec3590d5c147ac2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efae489ca314bdee647fa0acea2b11079cea275d6aa97457ea69a4e5c292bb85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efae489ca314bdee647fa0acea2b11079cea275d6aa97457ea69a4e5c292bb85->enter($__internal_efae489ca314bdee647fa0acea2b11079cea275d6aa97457ea69a4e5c292bb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55ea4d03430cf84dc9f2be5824e217a356c9f8ceca927ff18de81fefe38007fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ea4d03430cf84dc9f2be5824e217a356c9f8ceca927ff18de81fefe38007fd->enter($__internal_55ea4d03430cf84dc9f2be5824e217a356c9f8ceca927ff18de81fefe38007fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_55ea4d03430cf84dc9f2be5824e217a356c9f8ceca927ff18de81fefe38007fd->leave($__internal_55ea4d03430cf84dc9f2be5824e217a356c9f8ceca927ff18de81fefe38007fd_prof);

        
        $__internal_efae489ca314bdee647fa0acea2b11079cea275d6aa97457ea69a4e5c292bb85->leave($__internal_efae489ca314bdee647fa0acea2b11079cea275d6aa97457ea69a4e5c292bb85_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
