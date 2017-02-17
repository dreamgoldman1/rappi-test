<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c621eb95187c1501f9d56c8ff3d154326d4a85cd90f91ec42323e881e9e96e15 extends Twig_Template
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
        $__internal_856f56f87300e2fd7a56c0f5cc60485787bcde98a59bf95bfed01b14ba821bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856f56f87300e2fd7a56c0f5cc60485787bcde98a59bf95bfed01b14ba821bf3->enter($__internal_856f56f87300e2fd7a56c0f5cc60485787bcde98a59bf95bfed01b14ba821bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a9a2213e891cad93c16ffda0ca9fce73d1e019db9a4b4a1fed75fc4758edbc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a2213e891cad93c16ffda0ca9fce73d1e019db9a4b4a1fed75fc4758edbc67->enter($__internal_a9a2213e891cad93c16ffda0ca9fce73d1e019db9a4b4a1fed75fc4758edbc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_856f56f87300e2fd7a56c0f5cc60485787bcde98a59bf95bfed01b14ba821bf3->leave($__internal_856f56f87300e2fd7a56c0f5cc60485787bcde98a59bf95bfed01b14ba821bf3_prof);

        
        $__internal_a9a2213e891cad93c16ffda0ca9fce73d1e019db9a4b4a1fed75fc4758edbc67->leave($__internal_a9a2213e891cad93c16ffda0ca9fce73d1e019db9a4b4a1fed75fc4758edbc67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
