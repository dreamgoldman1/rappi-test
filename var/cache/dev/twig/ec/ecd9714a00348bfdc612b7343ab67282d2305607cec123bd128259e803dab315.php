<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a92c607cd6c30e3f1b3c14e9d8b26551d0b78b33e66139ee68d2a59da1460061 extends Twig_Template
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
        $__internal_cc79e7c62c8925f4f7ba1153ff823211bb6c58f811bb83bc82ff3d9940d7bda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc79e7c62c8925f4f7ba1153ff823211bb6c58f811bb83bc82ff3d9940d7bda3->enter($__internal_cc79e7c62c8925f4f7ba1153ff823211bb6c58f811bb83bc82ff3d9940d7bda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_f9f31166c63ac44655bc26a9073a80987be2c360e3590b64b901d574dce2a184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f31166c63ac44655bc26a9073a80987be2c360e3590b64b901d574dce2a184->enter($__internal_f9f31166c63ac44655bc26a9073a80987be2c360e3590b64b901d574dce2a184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cc79e7c62c8925f4f7ba1153ff823211bb6c58f811bb83bc82ff3d9940d7bda3->leave($__internal_cc79e7c62c8925f4f7ba1153ff823211bb6c58f811bb83bc82ff3d9940d7bda3_prof);

        
        $__internal_f9f31166c63ac44655bc26a9073a80987be2c360e3590b64b901d574dce2a184->leave($__internal_f9f31166c63ac44655bc26a9073a80987be2c360e3590b64b901d574dce2a184_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
