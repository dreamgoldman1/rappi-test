<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_71eabe95e9cfc0d531445abbd1392b37745f1fc51aa6c854845e65142150dc03 extends Twig_Template
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
        $__internal_146636ea58efd2ed28dab8e2edd1730ab7e8e51f463a3643eaf77f660345aa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146636ea58efd2ed28dab8e2edd1730ab7e8e51f463a3643eaf77f660345aa38->enter($__internal_146636ea58efd2ed28dab8e2edd1730ab7e8e51f463a3643eaf77f660345aa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_80c3ad89bc6bc612bfd3b599db4da0a7c5dca18371c4e5cf208224b3fa3938ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c3ad89bc6bc612bfd3b599db4da0a7c5dca18371c4e5cf208224b3fa3938ff->enter($__internal_80c3ad89bc6bc612bfd3b599db4da0a7c5dca18371c4e5cf208224b3fa3938ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_146636ea58efd2ed28dab8e2edd1730ab7e8e51f463a3643eaf77f660345aa38->leave($__internal_146636ea58efd2ed28dab8e2edd1730ab7e8e51f463a3643eaf77f660345aa38_prof);

        
        $__internal_80c3ad89bc6bc612bfd3b599db4da0a7c5dca18371c4e5cf208224b3fa3938ff->leave($__internal_80c3ad89bc6bc612bfd3b599db4da0a7c5dca18371c4e5cf208224b3fa3938ff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
