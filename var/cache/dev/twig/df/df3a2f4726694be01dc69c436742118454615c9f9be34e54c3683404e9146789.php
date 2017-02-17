<?php

/* GOLContentBundle:Carrito:carrito.html.twig */
class __TwigTemplate_c31b38be6ebafbc52173d6eee5496b5707dea953b0865d4667dacfdc161002bd extends Twig_Template
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
        $__internal_8e5c5ceb107c2a6317a6182732560cd760add9f1e7a50e51ced399d641c414d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5c5ceb107c2a6317a6182732560cd760add9f1e7a50e51ced399d641c414d3->enter($__internal_8e5c5ceb107c2a6317a6182732560cd760add9f1e7a50e51ced399d641c414d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Carrito:carrito.html.twig"));

        $__internal_e6042b0e4bea47d7732c837966c84030e7b8796df9ece4aed22683c1f76df554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6042b0e4bea47d7732c837966c84030e7b8796df9ece4aed22683c1f76df554->enter($__internal_e6042b0e4bea47d7732c837966c84030e7b8796df9ece4aed22683c1f76df554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Carrito:carrito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5c5ceb107c2a6317a6182732560cd760add9f1e7a50e51ced399d641c414d3->leave($__internal_8e5c5ceb107c2a6317a6182732560cd760add9f1e7a50e51ced399d641c414d3_prof);

        
        $__internal_e6042b0e4bea47d7732c837966c84030e7b8796df9ece4aed22683c1f76df554->leave($__internal_e6042b0e4bea47d7732c837966c84030e7b8796df9ece4aed22683c1f76df554_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c688b938bb890c0794885c0324f08fc35bc7d68c52921c4d9d1f1298c67c8a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c688b938bb890c0794885c0324f08fc35bc7d68c52921c4d9d1f1298c67c8a66->enter($__internal_c688b938bb890c0794885c0324f08fc35bc7d68c52921c4d9d1f1298c67c8a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d47c49466461012d87b32f56fb6c833a616456fb0d496945c546611ba79db3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47c49466461012d87b32f56fb6c833a616456fb0d496945c546611ba79db3c0->enter($__internal_d47c49466461012d87b32f56fb6c833a616456fb0d496945c546611ba79db3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Inicio</a> <span class=\"divider\">/</span></li>
            <li class=\"active\"> Carrito</li>
        </ul>
        <h3>  CARRITO [ <small>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : $this->getContext($context, "numItems")), "html", null, true);
        echo " Item(s) </small>]<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["productoData"]) ? $context["productoData"] : $this->getContext($context, "productoData")));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
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
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
            echo "agregar-carrito/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "\"><i class=\"icon-check icon-white\"></i></a>
                            <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["productCarrito"]) {
                if (($this->getAttribute($context["productCarrito"], "id", array()) == $this->getAttribute($context["producto"], "id", array()))) {
                    $context["sumaTotal"] = ((isset($context["sumaTotal"]) ? $context["sumaTotal"] : $this->getContext($context, "sumaTotal")) + ($this->getAttribute($context["productCarrito"], "qty", array()) * $this->getAttribute($context["producto"], "price", array())));
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["sumaTotal"]) ? $context["sumaTotal"] : $this->getContext($context, "sumaTotal")), 0, ",", "."), "html", null, true);
        echo " </strong></td>
                </tr>
            </tbody>
        </table>
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "eliminar-carrito\" class=\"btn btn-large btn-danger\"><i class=\"icon-trash\"></i> Vaciar carrito </a>
    </div>
";
        
        $__internal_d47c49466461012d87b32f56fb6c833a616456fb0d496945c546611ba79db3c0->leave($__internal_d47c49466461012d87b32f56fb6c833a616456fb0d496945c546611ba79db3c0_prof);

        
        $__internal_c688b938bb890c0794885c0324f08fc35bc7d68c52921c4d9d1f1298c67c8a66->leave($__internal_c688b938bb890c0794885c0324f08fc35bc7d68c52921c4d9d1f1298c67c8a66_prof);

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
        return array (  159 => 45,  152 => 41,  147 => 38,  128 => 35,  124 => 34,  116 => 31,  110 => 30,  97 => 29,  91 => 26,  87 => 25,  84 => 24,  79 => 23,  77 => 22,  59 => 9,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'rappi.html.twig' %}

{% block content %}
    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"{{ env }}\">Inicio</a> <span class=\"divider\">/</span></li>
            <li class=\"active\"> Carrito</li>
        </ul>
        <h3>  CARRITO [ <small>{{ numItems }} Item(s) </small>]<a href=\"{{ env }}\" class=\"btn btn-large pull-right\"><i class=\"icon-arrow-left\"></i> Continuar comprando </a></h3>
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
                {% set sumaTotal = 0 %}
                {% for producto in productoData %}
                <tr>
                    <td> <img width=\"60\" src=\"{{ producto.img }}\" alt=\"\"></td>
                    <td>{{ producto.name }}</td>
                    <td>
                        <div class=\"input-append\">
                            <input class=\"span1\" style=\"max-width:34px\" placeholder=\"1\" id=\"appendedInputButtons\" size=\"16\" type=\"text\" value=\"{% for productCarrito in productos %}{% if productCarrito.id == producto.id %}{{ productCarrito.qty }}{% endif %}{% endfor %}\">
                            <a class=\"btn btn-success\" href=\"{{ env }}agregar-carrito/{{ producto.id }}\"><i class=\"icon-check icon-white\"></i></a>
                            <a class=\"btn btn-danger\" href=\"{{ env }}quitar-carrito/{{ producto.id }}\"><i class=\"icon-remove icon-white\"></i></a>
                        </div>
                    </td>
                    <td>\${{ producto.price | number_format(0, ',', '.') }}</td>
                    <td>\${% for productCarrito in productos %}{% if productCarrito.id == producto.id %}{% set sumaTotal = sumaTotal + (productCarrito.qty * producto.price) %}{{ (productCarrito.qty * producto.price) | number_format(0, ',', '.') }}{% endif %}{% endfor %}</td>
                </tr>
                {% endfor %}

                <tr>
                    <td colspan=\"4\" style=\"text-align:right\"><strong>TOTAL =</strong></td>
                    <td class=\"label label-important\" style=\"display:block\"> <strong> \${{ sumaTotal | number_format(0, ',', '.') }} </strong></td>
                </tr>
            </tbody>
        </table>
        <a href=\"{{ env }}eliminar-carrito\" class=\"btn btn-large btn-danger\"><i class=\"icon-trash\"></i> Vaciar carrito </a>
    </div>
{% endblock %}
", "GOLContentBundle:Carrito:carrito.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Carrito/carrito.html.twig");
    }
}
