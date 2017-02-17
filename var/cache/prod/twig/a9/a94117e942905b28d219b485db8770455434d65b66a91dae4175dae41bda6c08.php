<?php

/* GOLContentBundle:Carrito:carrito.html.twig */
class __TwigTemplate_d752fdfed4d1566d7fd1d73af3d22724c319372190c2ee6b8714de4c843beb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rappi.html.twig", "GOLContentBundle:Carrito:carrito.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "rappi.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "\">Inicio</a> <span class=\"divider\">/</span></li>
            <li class=\"active\"> Carrito</li>
        </ul>
        <h3>  CARRITO [ <small>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : null), "html", null, true);
        echo " Item(s) </small>]<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "\" class=\"btn btn-large pull-right\"><i class=\"icon-arrow-left\"></i> Continuar comprando </a></h3>
        <hr class=\"soft\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context["sumaTotal"] = 0;
        // line 23
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productoData"]) ? $context["productoData"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 24
            echo "                <tr>
                    <td> <img width=\"60\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "img", array()), "html", null, true);
            echo "\" alt=\"\"></td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"input-append\">
                            <input class=\"span1\" style=\"max-width:34px\" placeholder=\"1\" id=\"appendedInputButtons\" size=\"16\" type=\"text\" value=\"";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["productCarrito"]) {
                if (($this->getAttribute($context["productCarrito"], "id", array()) == $this->getAttribute($context["producto"], "id", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productCarrito"], "qty", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productCarrito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
                            <a class=\"btn btn-success\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
            echo "agregar-carrito/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon-check icon-white\"></i></a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
            echo "quitar-carrito/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon-remove icon-white\"></i></a>
                        </div>
                    </td>
                    <td>\$";
            // line 34
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["producto"], "price", array()), 0, ",", "."), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["productCarrito"]) {
                if (($this->getAttribute($context["productCarrito"], "id", array()) == $this->getAttribute($context["producto"], "id", array()))) {
                    $context["sumaTotal"] = ((isset($context["sumaTotal"]) ? $context["sumaTotal"] : null) + ($this->getAttribute($context["productCarrito"], "qty", array()) * $this->getAttribute($context["producto"], "price", array())));
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute($context["productCarrito"], "qty", array()) * $this->getAttribute($context["producto"], "price", array())), 0, ",", "."), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productCarrito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                <tr>
                    <td colspan=\"4\" style=\"text-align:right\"><strong>TOTAL =</strong></td>
                    <td class=\"label label-important\" style=\"display:block\"> <strong> \$";
        // line 41
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumaTotal"]) ? $context["sumaTotal"] : null), 0, ",", "."), "html", null, true);
        echo " </strong></td>
                </tr>
            </tbody>
        </table>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "eliminar-carrito\" class=\"btn btn-large btn-danger\"><i class=\"icon-trash\"></i> Vaciar carrito </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Carrito:carrito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  134 => 41,  129 => 38,  110 => 35,  106 => 34,  98 => 31,  92 => 30,  79 => 29,  73 => 26,  69 => 25,  66 => 24,  61 => 23,  59 => 22,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLContentBundle:Carrito:carrito.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Carrito/carrito.html.twig");
    }
}
