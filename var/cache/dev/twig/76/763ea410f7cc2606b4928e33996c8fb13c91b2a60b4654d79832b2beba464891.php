<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8432f4ab7bfa7e4beef8becc940c8f3fdd4c1891d5789a3801d8ffe97026435c extends Twig_Template
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
        $__internal_2ee56b6ac1d641fbb3749e7ea3eff508300be993b309657fc99e89d32dbd027e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee56b6ac1d641fbb3749e7ea3eff508300be993b309657fc99e89d32dbd027e->enter($__internal_2ee56b6ac1d641fbb3749e7ea3eff508300be993b309657fc99e89d32dbd027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_77c984f8d4510c660b5b8efaf5ea4032f0086c46210c19c202c321fb1a49b49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c984f8d4510c660b5b8efaf5ea4032f0086c46210c19c202c321fb1a49b49f->enter($__internal_77c984f8d4510c660b5b8efaf5ea4032f0086c46210c19c202c321fb1a49b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2ee56b6ac1d641fbb3749e7ea3eff508300be993b309657fc99e89d32dbd027e->leave($__internal_2ee56b6ac1d641fbb3749e7ea3eff508300be993b309657fc99e89d32dbd027e_prof);

        
        $__internal_77c984f8d4510c660b5b8efaf5ea4032f0086c46210c19c202c321fb1a49b49f->leave($__internal_77c984f8d4510c660b5b8efaf5ea4032f0086c46210c19c202c321fb1a49b49f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
