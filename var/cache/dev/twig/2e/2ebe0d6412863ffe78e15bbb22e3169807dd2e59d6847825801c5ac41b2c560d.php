<?php

/* GOLContentBundle:Producto:producto-detalle.html.twig */
class __TwigTemplate_017827f4020f24260cb754b49776f7696b96200b056da4c2b58b09638ab7885f extends Twig_Template
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
        $__internal_5304fdda3dff8d8bb02e120e08cd0dadba8e18d3a5347807335db5a34b2f7182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5304fdda3dff8d8bb02e120e08cd0dadba8e18d3a5347807335db5a34b2f7182->enter($__internal_5304fdda3dff8d8bb02e120e08cd0dadba8e18d3a5347807335db5a34b2f7182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Producto:producto-detalle.html.twig"));

        $__internal_4f27cb1cec10fe9982e491b400bd9e87d6707dce6a06498a7a2e2abd099c7460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f27cb1cec10fe9982e491b400bd9e87d6707dce6a06498a7a2e2abd099c7460->enter($__internal_4f27cb1cec10fe9982e491b400bd9e87d6707dce6a06498a7a2e2abd099c7460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLContentBundle:Producto:producto-detalle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5304fdda3dff8d8bb02e120e08cd0dadba8e18d3a5347807335db5a34b2f7182->leave($__internal_5304fdda3dff8d8bb02e120e08cd0dadba8e18d3a5347807335db5a34b2f7182_prof);

        
        $__internal_4f27cb1cec10fe9982e491b400bd9e87d6707dce6a06498a7a2e2abd099c7460->leave($__internal_4f27cb1cec10fe9982e491b400bd9e87d6707dce6a06498a7a2e2abd099c7460_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7206a5c08d82495de143422cc9463561e1fe4ac6b76865ad2080931d57ba6021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7206a5c08d82495de143422cc9463561e1fe4ac6b76865ad2080931d57ba6021->enter($__internal_7206a5c08d82495de143422cc9463561e1fe4ac6b76865ad2080931d57ba6021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_27f5955f17d65458f2716e63c0c30b860e32713e33169f64a8ed0489f818a567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f5955f17d65458f2716e63c0c30b860e32713e33169f64a8ed0489f818a567->enter($__internal_27f5955f17d65458f2716e63c0c30b860e32713e33169f64a8ed0489f818a567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Inicio</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">Detalles del producto</li>
        </ul>\t
        <div class=\"row\">\t  
            <div id=\"gallery\" class=\"span3\">
                <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "img", array()), "html", null, true);
        echo "\" style=\"width:100%\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "\">
                <div class=\"text-info\">
                    <h4>";
        // line 13
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "best_seller", array())) {
            echo "Best Seller";
        }
        echo "</h4>
                </div>
                <div>
                    <h4 class=\"text-bold\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["productCategory"]) {
            // line 18
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 19
                echo "                                ";
                if (($this->getAttribute($context["category"], "categori_id", array()) == $context["productCategory"])) {
                    // line 20
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
                    echo " ";
                    if (($context["productCategory"] != twig_last($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array())))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h3>
                <hr class=\"soft\">
                <form class=\"form-horizontal qtyFrm\">
                    <div class=\"control-group\">
                        <label class=\"control-label\"><span>\$";
        // line 32
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), 0, ",", "."), "html", null, true);
        echo "</span></label>
                        <h4 class=\"controls\">
                            <button type='button' class=\"btn btn-large ";
        // line 34
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "available", array())) {
            echo "btn-primary agregar-carrito";
        } else {
            echo "btn-error disabled";
        }
        echo " pull-right\"> Agregar <i class=\" icon-shopping-cart\"></i></button>
                            <span class=\"hide product-id\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "</span>
                        </h4>
                    </div>
                </form>

                <hr class=\"soft\">
                ";
        // line 41
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "available", array())) {
            echo "<h4 class=\"text-success\">Disponible</h4>";
        } else {
            echo "<h4 class=\"text-error\">No Disponible</h4>";
        }
        // line 42
        echo "                <hr class=\"soft clr\">
                <p>
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "
                </p>
                <br class=\"clr\">
                <a href=\"#\" name=\"detail\"></a>
                <hr class=\"soft\">
            </div>
        </div>
    </div>
";
        
        $__internal_27f5955f17d65458f2716e63c0c30b860e32713e33169f64a8ed0489f818a567->leave($__internal_27f5955f17d65458f2716e63c0c30b860e32713e33169f64a8ed0489f818a567_prof);

        
        $__internal_7206a5c08d82495de143422cc9463561e1fe4ac6b76865ad2080931d57ba6021->leave($__internal_7206a5c08d82495de143422cc9463561e1fe4ac6b76865ad2080931d57ba6021_prof);

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
        return array (  156 => 44,  152 => 42,  146 => 41,  137 => 35,  129 => 34,  124 => 32,  117 => 28,  111 => 24,  105 => 23,  99 => 22,  96 => 21,  89 => 20,  86 => 19,  81 => 18,  77 => 17,  68 => 13,  61 => 11,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <li class=\"active\">Detalles del producto</li>
        </ul>\t
        <div class=\"row\">\t  
            <div id=\"gallery\" class=\"span3\">
                <img src=\"{{ product.img }}\" style=\"width:100%\" alt=\"{{ product.name }}\">
                <div class=\"text-info\">
                    <h4>{% if product.best_seller %}Best Seller{% endif %}</h4>
                </div>
                <div>
                    <h4 class=\"text-bold\">
                        {% for productCategory in product.categories %}
                            {% for key, category in categories %}
                                {% if category.categori_id == productCategory %}
                                    {{ category.name | title }} {% if productCategory != product.categories|last %}-{% endif %}
                                {% endif %}
                            {% endfor %}
                        {% endfor %}
                    </h4>
                </div>
            </div>
            <div class=\"span6\">
                <h3>{{ product.name }}</h3>
                <hr class=\"soft\">
                <form class=\"form-horizontal qtyFrm\">
                    <div class=\"control-group\">
                        <label class=\"control-label\"><span>\${{ product.price | number_format(0, ',', '.') }}</span></label>
                        <h4 class=\"controls\">
                            <button type='button' class=\"btn btn-large {% if product.available %}btn-primary agregar-carrito{% else %}btn-error disabled{% endif %} pull-right\"> Agregar <i class=\" icon-shopping-cart\"></i></button>
                            <span class=\"hide product-id\">{{ product.id }}</span>
                        </h4>
                    </div>
                </form>

                <hr class=\"soft\">
                {% if product.available %}<h4 class=\"text-success\">Disponible</h4>{% else %}<h4 class=\"text-error\">No Disponible</h4>{% endif %}
                <hr class=\"soft clr\">
                <p>
                    {{ product.description }}
                </p>
                <br class=\"clr\">
                <a href=\"#\" name=\"detail\"></a>
                <hr class=\"soft\">
            </div>
        </div>
    </div>
{% endblock %}
", "GOLContentBundle:Producto:producto-detalle.html.twig", "/var/www/rappi/src/GOL/ContentBundle/Resources/views/Producto/producto-detalle.html.twig");
    }
}
