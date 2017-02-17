<?php

/* GOLFooterBundle:Footer:footer.html.twig */
class __TwigTemplate_5be9dfd389744b6e7b135dfe8a24c51b8c9d9797e7f9672d299626ea49166e53 extends Twig_Template
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
        $__internal_7a8ceca641ce484b48f9ac4bda80c6335c74da16afd80f9fc38e9e6d78b41eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8ceca641ce484b48f9ac4bda80c6335c74da16afd80f9fc38e9e6d78b41eee->enter($__internal_7a8ceca641ce484b48f9ac4bda80c6335c74da16afd80f9fc38e9e6d78b41eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLFooterBundle:Footer:footer.html.twig"));

        $__internal_282cbfcc3a8c37e4c29906fbef773b76b17dc3103b67f349fb16f86a2f4fc8b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282cbfcc3a8c37e4c29906fbef773b76b17dc3103b67f349fb16f86a2f4fc8b4->enter($__internal_282cbfcc3a8c37e4c29906fbef773b76b17dc3103b67f349fb16f86a2f4fc8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLFooterBundle:Footer:footer.html.twig"));

        // line 1
        echo "<!-- Footer ================================================================== -->
<div  id=\"footerSection\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                <h5>CATEGORIAS</h5>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
            echo "categoria/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categori_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </div>
            <div class=\"span3\">
                <h5>ADMINISTRADOR</h5>
                    <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "admin\">Cambiar Json</a>
            </div>
        </div>
        <p class=\"pull-right\"><a href=\"http://cv.gilbertoorozco.net\" target=\"_blank\">Gilberto Orozco Linero</a> &copy; 2017</p>
    </div><!-- Container End -->
</div>";
        
        $__internal_7a8ceca641ce484b48f9ac4bda80c6335c74da16afd80f9fc38e9e6d78b41eee->leave($__internal_7a8ceca641ce484b48f9ac4bda80c6335c74da16afd80f9fc38e9e6d78b41eee_prof);

        
        $__internal_282cbfcc3a8c37e4c29906fbef773b76b17dc3103b67f349fb16f86a2f4fc8b4->leave($__internal_282cbfcc3a8c37e4c29906fbef773b76b17dc3103b67f349fb16f86a2f4fc8b4_prof);

    }

    public function getTemplateName()
    {
        return "GOLFooterBundle:Footer:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  50 => 10,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Footer ================================================================== -->
<div  id=\"footerSection\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                <h5>CATEGORIAS</h5>
                {% for category in categories %}
                    <a href=\"{{ env }}categoria/{{ category.categori_id }}\">{{ category.name | title }}</a>
                {% endfor %}
            </div>
            <div class=\"span3\">
                <h5>ADMINISTRADOR</h5>
                    <a href=\"{{ env }}admin\">Cambiar Json</a>
            </div>
        </div>
        <p class=\"pull-right\"><a href=\"http://cv.gilbertoorozco.net\" target=\"_blank\">Gilberto Orozco Linero</a> &copy; 2017</p>
    </div><!-- Container End -->
</div>", "GOLFooterBundle:Footer:footer.html.twig", "/var/www/rappi/src/GOL/FooterBundle/Resources/views/Footer/footer.html.twig");
    }
}
