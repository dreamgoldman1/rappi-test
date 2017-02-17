<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_563548ec3e46ac7c53541fe3d28b90bba1fc007bc3c7adc7c20baf712c351127 extends Twig_Template
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
        $__internal_128f21e62152a8289a5ea4d539c83337c123ddcef2966ff1de1b6b3df5a94ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128f21e62152a8289a5ea4d539c83337c123ddcef2966ff1de1b6b3df5a94ddb->enter($__internal_128f21e62152a8289a5ea4d539c83337c123ddcef2966ff1de1b6b3df5a94ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3bdd087c615d52cf6314b6842743be3dfb1ab2d5c6568382dec91911b197cbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdd087c615d52cf6314b6842743be3dfb1ab2d5c6568382dec91911b197cbc1->enter($__internal_3bdd087c615d52cf6314b6842743be3dfb1ab2d5c6568382dec91911b197cbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_128f21e62152a8289a5ea4d539c83337c123ddcef2966ff1de1b6b3df5a94ddb->leave($__internal_128f21e62152a8289a5ea4d539c83337c123ddcef2966ff1de1b6b3df5a94ddb_prof);

        
        $__internal_3bdd087c615d52cf6314b6842743be3dfb1ab2d5c6568382dec91911b197cbc1->leave($__internal_3bdd087c615d52cf6314b6842743be3dfb1ab2d5c6568382dec91911b197cbc1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
