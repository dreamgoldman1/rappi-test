<?php

/* GOLContentBundle:Producto:producto-detalle.html.twig */
class __TwigTemplate_9831f37d63232cb2c710cbcd3ef3a5258f49cf2984a9c6e95b466bc66fc0971a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rappi.html.twig", "GOLContentBundle:Producto:producto-detalle.html.twig", 1);
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
            <li class=\"active\">Detalles del producto</li>
        </ul>\t
        <div class=\"row\">\t  
            <div id=\"gallery\" class=\"span3\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "img", array()), "html", null, true);
        echo "\" style=\"width:100%\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "\">
                <div class=\"text-info\">
                    <h4>";
        // line 13
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "best_seller", array())) {
            echo "Best Seller";
        }
        echo "</h4>
                </div>
                <div>
                    <h4 class=\"text-bold\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productCategory"]) {
            // line 18
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 19
                echo "                                ";
                if (($this->getAttribute($context["category"], "categori_id", array()) == $context["productCategory"])) {
                    // line 20
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
                    echo " ";
                    if (($context["productCategory"] != twig_last($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array())))) {
                        echo "-";
                    }
                    // line 21
                    echo "                                ";
                }
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </h4>
                </div>
            </div>
            <div class=\"span6\">
                <h3>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</h3>
                <hr class=\"soft\">
                <form class=\"form-horizontal qtyFrm\">
                    <div class=\"control-group\">
                        <label class=\"control-label\"><span>\$";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), 0, ",", "."), "html", null, true);
        echo "</span></label>
                        <h4 class=\"controls\">
                            <button type='button' class=\"btn btn-large ";
        // line 34
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "available", array())) {
            echo "btn-primary agregar-carrito";
        } else {
            echo "btn-error disabled";
        }
        echo " pull-right\"> Agregar <i class=\" icon-shopping-cart\"></i></button>
                            <span class=\"hide product-id\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()), "html", null, true);
        echo "</span>
                        </h4>
                    </div>
                </form>

                <hr class=\"soft\">
                ";
        // line 41
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "available", array())) {
            echo "<h4 class=\"text-success\">Disponible</h4>";
        } else {
            echo "<h4 class=\"text-error\">No Disponible</h4>";
        }
        // line 42
        echo "                <hr class=\"soft clr\">
                <p>
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "
                </p>
                <br class=\"clr\">
                <a href=\"#\" name=\"detail\"></a>
                <hr class=\"soft\">
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLContentBundle:Producto:producto-detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  134 => 42,  128 => 41,  119 => 35,  111 => 34,  106 => 32,  99 => 28,  93 => 24,  87 => 23,  81 => 22,  78 => 21,  71 => 20,  68 => 19,  63 => 18,  59 => 17,  50 => 13,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLContentBundle:Producto:producto-detalle.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Producto/producto-detalle.html.twig");
    }
}
