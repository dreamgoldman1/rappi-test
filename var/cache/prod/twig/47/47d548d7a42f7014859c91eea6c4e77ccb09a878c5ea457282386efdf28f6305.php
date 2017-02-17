<?php

/* GOLContentBundle:Producto:productos.html.twig */
class __TwigTemplate_cb0d7dffee4bfa66317371d40962a60e1eb4267df794ffe6fcae609f34ae2e85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rappi.html.twig", "GOLContentBundle:Producto:productos.html.twig", 1);
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
            ";
        // line 7
        if (array_key_exists("categories", $context)) {
            // line 8
            echo "                <li class=\"active\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "categori_id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : null))) {
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</li>
            ";
        } else {
            // line 10
            echo "                ";
            if (array_key_exists("agotados", $context)) {
                echo "<li class=\"active\">";
                echo twig_escape_filter($this->env, (isset($context["agotados"]) ? $context["agotados"] : null), "html", null, true);
                echo "</li>";
            }
            // line 11
            echo "            ";
        }
        // line 12
        echo "        </ul>
        <h3> ";
        // line 13
        if (array_key_exists("categories", $context)) {
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "categori_id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : null))) {
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            echo "Productos ";
            if (array_key_exists("agotados", $context)) {
                echo twig_escape_filter($this->env, (isset($context["agotados"]) ? $context["agotados"] : null), "html", null, true);
            }
            if (array_key_exists("masVendidos", $context)) {
                echo twig_escape_filter($this->env, (isset($context["masVendidos"]) ? $context["masVendidos"] : null), "html", null, true);
            }
        }
        // line 14
        echo "            <small class=\"pull-right\"> ";
        echo twig_escape_filter($this->env, (isset($context["totalProductos"]) ? $context["totalProductos"] : null), "html", null, true);
        echo " productos encontrados </small>
        </h3>
        <hr class=\"soft\"/>
        <p>
            Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
        </p>
        <hr class=\"soft\"/>
        <form class=\"form-horizontal span6\">
            <div class=\"control-group\">
                <label class=\"control-label alignL\">Organizar por </label>
                <select id=\"filtros\" name=\"filtros\">
                    <option value=\"predesc\" ";
        // line 25
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "predesc"))) {
            echo "Selected";
        }
        echo ">Mayor Precio</option>
                    <option value=\"preasc\" ";
        // line 26
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "preasc"))) {
            echo "Selected";
        }
        echo ">Menor Precio</option>
                    <option value=\"mendiez\" ";
        // line 27
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "mendiez"))) {
            echo "Selected";
        }
        echo ">< \$10.000</option>
                    <option value=\"maytre\" ";
        // line 28
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "maytre"))) {
            echo "Selected";
        }
        echo ">> \$30.000</option>
                    <option value=\"nomasc\" ";
        // line 29
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "nomasc"))) {
            echo "Selected";
        }
        echo ">A - Z</option>
                    <option value=\"nomdesc\" ";
        // line 30
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : null) == "nomdesc"))) {
            echo "Selected";
        }
        echo ">Z - A</option>
                </select>
            </div>
        </form>

        <br class=\"clr\"/>
        <div class=\"tab-content\">
            <div class=\"tab-pane  active\" id=\"blockView\">
                <ul class=\"thumbnails\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 40
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "img", array()), "html", null, true);
            echo "\" alt=\"\"/>
                            <div class=\"caption\">
                                <h5>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h5>
                                <p>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</p>
                                <h4 style=\"text-align:center\">
                                    <a class=\"btn\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
            echo "producto-detalle/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\"> <i class=\"icon-zoom-in\"></i></a>
                                    ";
            // line 48
            if ($this->getAttribute($context["product"], "available", array())) {
                // line 49
                echo "                                        <button class=\"btn agregar-carrito\">Agregar <i class=\"icon-shopping-cart\"></i></button>
                                    ";
            }
            // line 51
            echo "                                    <span class=\"btn btn-primary\">\$";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ",", "."), "html", null, true);
            echo "</span>
                                    <span class=\"hide product-id\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </ul>
                <hr class=\"soft\"/>
            </div>
        </div>
        <br class=\"clr\"/>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Producto:productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  188 => 52,  183 => 51,  179 => 49,  177 => 48,  171 => 47,  166 => 45,  162 => 44,  157 => 42,  153 => 40,  149 => 39,  135 => 30,  129 => 29,  123 => 28,  117 => 27,  111 => 26,  105 => 25,  90 => 14,  69 => 13,  66 => 12,  63 => 11,  56 => 10,  41 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLContentBundle:Producto:productos.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Producto/productos.html.twig");
    }
}
