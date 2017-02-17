<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_24831c6ba30ce9f4a261116c59c41da6bba0bae7ad183a78fd8b747b290e5c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_47b2aa476905877a7ce3ee63da65cdb08da02df0ee9905dd6d6243036170454e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b2aa476905877a7ce3ee63da65cdb08da02df0ee9905dd6d6243036170454e->enter($__internal_47b2aa476905877a7ce3ee63da65cdb08da02df0ee9905dd6d6243036170454e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_81a8017d1081e74274b4c0725f53affec3385331dda291400ae99f85e4db13a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a8017d1081e74274b4c0725f53affec3385331dda291400ae99f85e4db13a7->enter($__internal_81a8017d1081e74274b4c0725f53affec3385331dda291400ae99f85e4db13a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b2aa476905877a7ce3ee63da65cdb08da02df0ee9905dd6d6243036170454e->leave($__internal_47b2aa476905877a7ce3ee63da65cdb08da02df0ee9905dd6d6243036170454e_prof);

        
        $__internal_81a8017d1081e74274b4c0725f53affec3385331dda291400ae99f85e4db13a7->leave($__internal_81a8017d1081e74274b4c0725f53affec3385331dda291400ae99f85e4db13a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0005b6b689e92c4b75b3a2596614a97ae1853609ec6d35e2021e4de46e27e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0005b6b689e92c4b75b3a2596614a97ae1853609ec6d35e2021e4de46e27e9->enter($__internal_7c0005b6b689e92c4b75b3a2596614a97ae1853609ec6d35e2021e4de46e27e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_73456d92e9d25f34f8c2d0f6b2e1c932dd91e24e26a13ca1992a56b89a641be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73456d92e9d25f34f8c2d0f6b2e1c932dd91e24e26a13ca1992a56b89a641be2->enter($__internal_73456d92e9d25f34f8c2d0f6b2e1c932dd91e24e26a13ca1992a56b89a641be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_73456d92e9d25f34f8c2d0f6b2e1c932dd91e24e26a13ca1992a56b89a641be2->leave($__internal_73456d92e9d25f34f8c2d0f6b2e1c932dd91e24e26a13ca1992a56b89a641be2_prof);

        
        $__internal_7c0005b6b689e92c4b75b3a2596614a97ae1853609ec6d35e2021e4de46e27e9->leave($__internal_7c0005b6b689e92c4b75b3a2596614a97ae1853609ec6d35e2021e4de46e27e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4917de2dc0cb282f5918c5739dc7508c78b8bddd373e9cb646cd345a0840dcb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4917de2dc0cb282f5918c5739dc7508c78b8bddd373e9cb646cd345a0840dcb1->enter($__internal_4917de2dc0cb282f5918c5739dc7508c78b8bddd373e9cb646cd345a0840dcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b469f00ecece29fccf572c6cfeddffef4801e970ac568be1d54078e537a89be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b469f00ecece29fccf572c6cfeddffef4801e970ac568be1d54078e537a89be->enter($__internal_6b469f00ecece29fccf572c6cfeddffef4801e970ac568be1d54078e537a89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6b469f00ecece29fccf572c6cfeddffef4801e970ac568be1d54078e537a89be->leave($__internal_6b469f00ecece29fccf572c6cfeddffef4801e970ac568be1d54078e537a89be_prof);

        
        $__internal_4917de2dc0cb282f5918c5739dc7508c78b8bddd373e9cb646cd345a0840dcb1->leave($__internal_4917de2dc0cb282f5918c5739dc7508c78b8bddd373e9cb646cd345a0840dcb1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
