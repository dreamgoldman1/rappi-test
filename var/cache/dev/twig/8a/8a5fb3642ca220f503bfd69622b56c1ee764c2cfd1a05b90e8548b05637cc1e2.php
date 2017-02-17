<?php

/* GOLContentBundle:Producto:productos.html.twig */
class __TwigTemplate_08c253b813167f8a22cad24388db3553a58e10c54159ccfc0ac8b69ad69fb7f6 extends Twig_Template
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
        $__internal_1753ac2ef401c559a3b1bf81406d02edbde19ef621cde882fa3e0fd0121a0514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1753ac2ef401c559a3b1bf81406d02edbde19ef621cde882fa3e0fd0121a0514->enter($__internal_1753ac2ef401c559a3b1bf81406d02edbde19ef621cde882fa3e0fd0121a0514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Producto:productos.html.twig"));

        $__internal_7e4b370d4c7ebfac89758ab1d0a7c2bda87fc4b534ada68140e8cabe01220680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4b370d4c7ebfac89758ab1d0a7c2bda87fc4b534ada68140e8cabe01220680->enter($__internal_7e4b370d4c7ebfac89758ab1d0a7c2bda87fc4b534ada68140e8cabe01220680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Producto:productos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1753ac2ef401c559a3b1bf81406d02edbde19ef621cde882fa3e0fd0121a0514->leave($__internal_1753ac2ef401c559a3b1bf81406d02edbde19ef621cde882fa3e0fd0121a0514_prof);

        
        $__internal_7e4b370d4c7ebfac89758ab1d0a7c2bda87fc4b534ada68140e8cabe01220680->leave($__internal_7e4b370d4c7ebfac89758ab1d0a7c2bda87fc4b534ada68140e8cabe01220680_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b0a4c24a67b21bb6e75530f9ef21311c2a6f6ec49ff9e422dcc28601cfd891b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0a4c24a67b21bb6e75530f9ef21311c2a6f6ec49ff9e422dcc28601cfd891b->enter($__internal_8b0a4c24a67b21bb6e75530f9ef21311c2a6f6ec49ff9e422dcc28601cfd891b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c44aed771cb0f05d22fc776f8e69088cb124c941451766df37068d0bef2c680f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44aed771cb0f05d22fc776f8e69088cb124c941451766df37068d0bef2c680f->enter($__internal_c44aed771cb0f05d22fc776f8e69088cb124c941451766df37068d0bef2c680f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Inicio</a> <span class=\"divider\">/</span></li>
            ";
        // line 7
        if (array_key_exists("categories", $context)) {
            // line 8
            echo "                <li class=\"active\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "categori_id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")))) {
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
                echo twig_escape_filter($this->env, (isset($context["agotados"]) ? $context["agotados"] : $this->getContext($context, "agotados")), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "categori_id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")))) {
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            echo "Productos ";
            if (array_key_exists("agotados", $context)) {
                echo twig_escape_filter($this->env, (isset($context["agotados"]) ? $context["agotados"] : $this->getContext($context, "agotados")), "html", null, true);
            }
            if (array_key_exists("masVendidos", $context)) {
                echo twig_escape_filter($this->env, (isset($context["masVendidos"]) ? $context["masVendidos"] : $this->getContext($context, "masVendidos")), "html", null, true);
            }
        }
        // line 14
        echo "            <small class=\"pull-right\"> ";
        echo twig_escape_filter($this->env, (isset($context["totalProductos"]) ? $context["totalProductos"] : $this->getContext($context, "totalProductos")), "html", null, true);
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
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "predesc"))) {
            echo "Selected";
        }
        echo ">Mayor Precio</option>
                    <option value=\"preasc\" ";
        // line 26
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "preasc"))) {
            echo "Selected";
        }
        echo ">Menor Precio</option>
                    <option value=\"mendiez\" ";
        // line 27
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "mendiez"))) {
            echo "Selected";
        }
        echo ">< \$10.000</option>
                    <option value=\"maytre\" ";
        // line 28
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "maytre"))) {
            echo "Selected";
        }
        echo ">> \$30.000</option>
                    <option value=\"nomasc\" ";
        // line 29
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "nomasc"))) {
            echo "Selected";
        }
        echo ">A - Z</option>
                    <option value=\"nomdesc\" ";
        // line 30
        if ((array_key_exists("order", $context) && ((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")) == "nomdesc"))) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
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
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
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
        
        $__internal_c44aed771cb0f05d22fc776f8e69088cb124c941451766df37068d0bef2c680f->leave($__internal_c44aed771cb0f05d22fc776f8e69088cb124c941451766df37068d0bef2c680f_prof);

        
        $__internal_8b0a4c24a67b21bb6e75530f9ef21311c2a6f6ec49ff9e422dcc28601cfd891b->leave($__internal_8b0a4c24a67b21bb6e75530f9ef21311c2a6f6ec49ff9e422dcc28601cfd891b_prof);

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
        return array (  218 => 58,  206 => 52,  201 => 51,  197 => 49,  195 => 48,  189 => 47,  184 => 45,  180 => 44,  175 => 42,  171 => 40,  167 => 39,  153 => 30,  147 => 29,  141 => 28,  135 => 27,  129 => 26,  123 => 25,  108 => 14,  87 => 13,  84 => 12,  81 => 11,  74 => 10,  59 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            {% if categories is defined %}
                <li class=\"active\">{% for category in categories %}{% if category.categori_id == categoryId %}{{ category.name | title }}{% endif %}{% endfor %}</li>
            {% else %}
                {% if agotados is defined %}<li class=\"active\">{{ agotados }}</li>{% endif %}
            {% endif %}
        </ul>
        <h3> {% if categories is defined %}{% for category in categories %}{% if category.categori_id == categoryId %}{{ category.name | title}}{% endif %}{% endfor %}{% else %}Productos {% if agotados is defined %}{{ agotados }}{% endif %}{% if masVendidos is defined %}{{ masVendidos }}{% endif %}{% endif %}
            <small class=\"pull-right\"> {{ totalProductos }} productos encontrados </small>
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
                    <option value=\"predesc\" {% if order is defined and order == 'predesc' %}Selected{% endif %}>Mayor Precio</option>
                    <option value=\"preasc\" {% if order is defined and order == 'preasc' %}Selected{% endif %}>Menor Precio</option>
                    <option value=\"mendiez\" {% if order is defined and order == 'mendiez' %}Selected{% endif %}>< \$10.000</option>
                    <option value=\"maytre\" {% if order is defined and order == 'maytre' %}Selected{% endif %}>> \$30.000</option>
                    <option value=\"nomasc\" {% if order is defined and order == 'nomasc' %}Selected{% endif %}>A - Z</option>
                    <option value=\"nomdesc\" {% if order is defined and order == 'nomdesc' %}Selected{% endif %}>Z - A</option>
                </select>
            </div>
        </form>

        <br class=\"clr\"/>
        <div class=\"tab-content\">
            <div class=\"tab-pane  active\" id=\"blockView\">
                <ul class=\"thumbnails\">
                    {% for product in products %}
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ product.img }}\" alt=\"\"/>
                            <div class=\"caption\">
                                <h5>{{ product.name }}</h5>
                                <p>{{ product.description }}</p>
                                <h4 style=\"text-align:center\">
                                    <a class=\"btn\" href=\"{{ env }}producto-detalle/{{ product.id }}\"> <i class=\"icon-zoom-in\"></i></a>
                                    {% if product.available %}
                                        <button class=\"btn agregar-carrito\">Agregar <i class=\"icon-shopping-cart\"></i></button>
                                    {% endif %}
                                    <span class=\"btn btn-primary\">\${{ product.price | number_format(0, ',', '.') }}</span>
                                    <span class=\"hide product-id\">{{ product.id }}</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    {% endfor %}
                </ul>
                <hr class=\"soft\"/>
            </div>
        </div>
        <br class=\"clr\"/>
    </div>
{% endblock %}
", "GOLContentBundle:Producto:productos.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Producto/productos.html.twig");
    }
}
