<?php

/* GOLSidebarBundle:MasVendidos:masvendidos.html.twig */
class __TwigTemplate_6787d26b44c6b99354e1e99467caff10435603513dfcf607bccaca112bed7389 extends Twig_Template
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
        $__internal_5bd4c9092efa871147db75d91547f944397945d68f757ff79385b3058ffabf5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd4c9092efa871147db75d91547f944397945d68f757ff79385b3058ffabf5d->enter($__internal_5bd4c9092efa871147db75d91547f944397945d68f757ff79385b3058ffabf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLSidebarBundle:MasVendidos:masvendidos.html.twig"));

        $__internal_cd0c0ca9113cca01f8763f13891117c4e298e80d05885894b2340cc529c0c69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0c0ca9113cca01f8763f13891117c4e298e80d05885894b2340cc529c0c69c->enter($__internal_cd0c0ca9113cca01f8763f13891117c4e298e80d05885894b2340cc529c0c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLSidebarBundle:MasVendidos:masvendidos.html.twig"));

        // line 1
        echo "<br/>
<h4>Más vendidos</h4>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["masVendidos"]) ? $context["masVendidos"] : $this->getContext($context, "masVendidos")));
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
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
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
        
        $__internal_5bd4c9092efa871147db75d91547f944397945d68f757ff79385b3058ffabf5d->leave($__internal_5bd4c9092efa871147db75d91547f944397945d68f757ff79385b3058ffabf5d_prof);

        
        $__internal_cd0c0ca9113cca01f8763f13891117c4e298e80d05885894b2340cc529c0c69c->leave($__internal_cd0c0ca9113cca01f8763f13891117c4e298e80d05885894b2340cc529c0c69c_prof);

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
        return array (  65 => 14,  60 => 13,  56 => 11,  54 => 10,  48 => 9,  43 => 7,  36 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<br/>
<h4>Más vendidos</h4>
{% for product in masVendidos %}
<div class=\"thumbnail\">
    <img src=\"{{ product.img }}\" alt=\"{{ product.name }}\">
    <div class=\"caption\">
        <h5>{{ product.name }}</h5>
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
{% endfor %}", "GOLSidebarBundle:MasVendidos:masvendidos.html.twig", "/var/www/rappi/src/GOL/SidebarBundle/Resources/views/MasVendidos/masvendidos.html.twig");
    }
}
