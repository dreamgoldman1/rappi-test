<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_656542e63b73636bb4cc63eb611de1f16d3f23a1c63243464d3c2e1c23a62604 extends Twig_Template
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
        $__internal_ffd985fdcea2b1ddc1b45659443eb17f86bfe0155e170ef4c40815a593d9b470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd985fdcea2b1ddc1b45659443eb17f86bfe0155e170ef4c40815a593d9b470->enter($__internal_ffd985fdcea2b1ddc1b45659443eb17f86bfe0155e170ef4c40815a593d9b470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_16de68b287741d366cb5e5e36fec78343e3ed9706276519def14d0db05ab0e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16de68b287741d366cb5e5e36fec78343e3ed9706276519def14d0db05ab0e1d->enter($__internal_16de68b287741d366cb5e5e36fec78343e3ed9706276519def14d0db05ab0e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ffd985fdcea2b1ddc1b45659443eb17f86bfe0155e170ef4c40815a593d9b470->leave($__internal_ffd985fdcea2b1ddc1b45659443eb17f86bfe0155e170ef4c40815a593d9b470_prof);

        
        $__internal_16de68b287741d366cb5e5e36fec78343e3ed9706276519def14d0db05ab0e1d->leave($__internal_16de68b287741d366cb5e5e36fec78343e3ed9706276519def14d0db05ab0e1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
