<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_35d98a022057ca5bdfc03d9ffba3c0e8600495754e41c1bb6f80f952b9e68132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6a8f872fa6674b3590feed800c33754b6d1f8d6267c230d1e2c922d72ce7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6a8f872fa6674b3590feed800c33754b6d1f8d6267c230d1e2c922d72ce7c6->enter($__internal_0f6a8f872fa6674b3590feed800c33754b6d1f8d6267c230d1e2c922d72ce7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dbcdb97785f4ab993d869e6aaf36f3c7edfa5b002242fb5c7f7b48cfe95d32d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcdb97785f4ab993d869e6aaf36f3c7edfa5b002242fb5c7f7b48cfe95d32d8->enter($__internal_dbcdb97785f4ab993d869e6aaf36f3c7edfa5b002242fb5c7f7b48cfe95d32d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0f6a8f872fa6674b3590feed800c33754b6d1f8d6267c230d1e2c922d72ce7c6->leave($__internal_0f6a8f872fa6674b3590feed800c33754b6d1f8d6267c230d1e2c922d72ce7c6_prof);

        
        $__internal_dbcdb97785f4ab993d869e6aaf36f3c7edfa5b002242fb5c7f7b48cfe95d32d8->leave($__internal_dbcdb97785f4ab993d869e6aaf36f3c7edfa5b002242fb5c7f7b48cfe95d32d8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_17dc95a56ed09a2c24b8ac95c748f5af62499af299dbca29153e8662f8da3115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17dc95a56ed09a2c24b8ac95c748f5af62499af299dbca29153e8662f8da3115->enter($__internal_17dc95a56ed09a2c24b8ac95c748f5af62499af299dbca29153e8662f8da3115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_177cc4a7831bcc69b2fe9870f437b53a9c79c1945e9501626afe424b0901af42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177cc4a7831bcc69b2fe9870f437b53a9c79c1945e9501626afe424b0901af42->enter($__internal_177cc4a7831bcc69b2fe9870f437b53a9c79c1945e9501626afe424b0901af42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_177cc4a7831bcc69b2fe9870f437b53a9c79c1945e9501626afe424b0901af42->leave($__internal_177cc4a7831bcc69b2fe9870f437b53a9c79c1945e9501626afe424b0901af42_prof);

        
        $__internal_17dc95a56ed09a2c24b8ac95c748f5af62499af299dbca29153e8662f8da3115->leave($__internal_17dc95a56ed09a2c24b8ac95c748f5af62499af299dbca29153e8662f8da3115_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
