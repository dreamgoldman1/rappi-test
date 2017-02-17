<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3557b91a33e0c19ab6d5fa4b2f590fc29931f21569e5f85cd2698b980962859 extends Twig_Template
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
        $__internal_b1f463521a0afc3fd176b4aeba90d4be0187a2a21818a230d0c06ee49ab15c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f463521a0afc3fd176b4aeba90d4be0187a2a21818a230d0c06ee49ab15c53->enter($__internal_b1f463521a0afc3fd176b4aeba90d4be0187a2a21818a230d0c06ee49ab15c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e63b0adb21bf4527e24517d5c990dc129c85f5d69efbca89713f4e50cd01f03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63b0adb21bf4527e24517d5c990dc129c85f5d69efbca89713f4e50cd01f03c->enter($__internal_e63b0adb21bf4527e24517d5c990dc129c85f5d69efbca89713f4e50cd01f03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b1f463521a0afc3fd176b4aeba90d4be0187a2a21818a230d0c06ee49ab15c53->leave($__internal_b1f463521a0afc3fd176b4aeba90d4be0187a2a21818a230d0c06ee49ab15c53_prof);

        
        $__internal_e63b0adb21bf4527e24517d5c990dc129c85f5d69efbca89713f4e50cd01f03c->leave($__internal_e63b0adb21bf4527e24517d5c990dc129c85f5d69efbca89713f4e50cd01f03c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
