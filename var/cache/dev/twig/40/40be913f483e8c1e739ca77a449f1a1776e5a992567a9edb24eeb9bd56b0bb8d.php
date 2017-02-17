<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82ba383184c3e7eea6fd4fc91c5f90ac93f4643875a645f8063060334e432ebb extends Twig_Template
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
        $__internal_e503b9168788d48c8716efe4ab6bfcdac523e026b527455d2d7193b814805b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e503b9168788d48c8716efe4ab6bfcdac523e026b527455d2d7193b814805b25->enter($__internal_e503b9168788d48c8716efe4ab6bfcdac523e026b527455d2d7193b814805b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e8c215724036765f51eb0b3420c8fe7804fc2945c029109831fe41b463d4aeec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c215724036765f51eb0b3420c8fe7804fc2945c029109831fe41b463d4aeec->enter($__internal_e8c215724036765f51eb0b3420c8fe7804fc2945c029109831fe41b463d4aeec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e503b9168788d48c8716efe4ab6bfcdac523e026b527455d2d7193b814805b25->leave($__internal_e503b9168788d48c8716efe4ab6bfcdac523e026b527455d2d7193b814805b25_prof);

        
        $__internal_e8c215724036765f51eb0b3420c8fe7804fc2945c029109831fe41b463d4aeec->leave($__internal_e8c215724036765f51eb0b3420c8fe7804fc2945c029109831fe41b463d4aeec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/rappi/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
