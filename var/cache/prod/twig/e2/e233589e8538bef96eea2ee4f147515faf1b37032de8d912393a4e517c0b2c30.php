<?php

/* GOLSidebarBundle:MasVendidos:masvendidos.html.twig */
class __TwigTemplate_0b26b84819d6527b70c1fcf0d92e9a2e4d65018a65524a35318d5107cfe5846e extends Twig_Template
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
        echo "<br/>
<h4>Más vendidos</h4>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masVendidos"]) ? $context["masVendidos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "<div class=\"thumbnail\">
    <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\">
    <div class=\"caption\">
        <h5>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h5>
        <h4 style=\"text-align:center\">
            <a class=\"btn\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
            echo "producto-detalle/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\"> <i class=\"icon-zoom-in\"></i></a>
            ";
            // line 10
            if ($this->getAttribute($context["product"], "available", array())) {
                // line 11
                echo "                <button class=\"btn agregar-carrito\">Agregar <i class=\"icon-shopping-cart\"></i></button> 
            ";
            }
            // line 13
            echo "            <span class=\"btn btn-primary\">\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ",", "."), "html", null, true);
            echo "</span>
            <span class=\"hide product-id\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</span>
        </h4>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "GOLSidebarBundle:MasVendidos:masvendidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  54 => 13,  50 => 11,  48 => 10,  42 => 9,  37 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLSidebarBundle:MasVendidos:masvendidos.html.twig", "/var/www/rappi/src/GOL/SidebarBundle/Resources/views/MasVendidos/masvendidos.html.twig");
    }
}
