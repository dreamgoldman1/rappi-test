<?php

/* GOLFooterBundle:Footer:footer.html.twig */
class __TwigTemplate_433abdb051fd0b2dd68ce506723e47419f092e931a0579f4d592e67e4d68e310 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "admin\">Cambiar Json</a>
            </div>
        </div>
        <p class=\"pull-right\"><a href=\"http://cv.gilbertoorozco.net\" target=\"_blank\">Gilberto Orozco Linero</a> &copy; 2017</p>
    </div><!-- Container End -->
</div>";
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
        return array (  49 => 13,  44 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLFooterBundle:Footer:footer.html.twig", "/var/www/rappi/src/GOL/FooterBundle/Resources/views/Footer/footer.html.twig");
    }
}
