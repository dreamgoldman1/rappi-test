<?php

/* GOLSidebarBundle:Sidebar:sidebar.html.twig */
class __TwigTemplate_67924e1333a3902ea1f7c359297d9910c7a6d6a76c08c4ff770401e93f810d01 extends Twig_Template
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
        $__internal_1514a670f50b87674b70539f3a883583fc50d5772959708d69f147d72dcba5d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1514a670f50b87674b70539f3a883583fc50d5772959708d69f147d72dcba5d6->enter($__internal_1514a670f50b87674b70539f3a883583fc50d5772959708d69f147d72dcba5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLSidebarBundle:Sidebar:sidebar.html.twig"));

        $__internal_3e43d9e592dfd1674c9051211e93b74ffd77bdca92545368bb8251da9aa33798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e43d9e592dfd1674c9051211e93b74ffd77bdca92545368bb8251da9aa33798->enter($__internal_3e43d9e592dfd1674c9051211e93b74ffd77bdca92545368bb8251da9aa33798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLSidebarBundle:Sidebar:sidebar.html.twig"));

        // line 1
        echo "<!-- Sidebar ================================================== -->
<div id=\"sidebar\" class=\"span3\">
    <div class=\"well well-small\">
        <a id=\"myCart\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "carrito\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">
            <span class=\"numItems\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : $this->getContext($context, "numItems")), "html", null, true);
        echo "</span> Item(s) en el carrito <span class=\"badge badge-warning pull-right totalCarrito\">\$";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCarrito"]) ? $context["totalCarrito"] : $this->getContext($context, "totalCarrito")), 0, ",", "."), "html", null, true);
        echo "</span>
        </a>
    </div>
    <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <li class=\"\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
            echo "categoria/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categori_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qtyByCategory"]) ? $context["qtyByCategory"] : $this->getContext($context, "qtyByCategory")), $this->getAttribute($context["category"], "categori_id", array())), "html", null, true);
            echo "]</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
    
    ";
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLSidebarBundle:MasVendidos:masvendidos"));
        echo "
</div>
<!-- Sidebar end=============================================== -->";
        
        $__internal_1514a670f50b87674b70539f3a883583fc50d5772959708d69f147d72dcba5d6->leave($__internal_1514a670f50b87674b70539f3a883583fc50d5772959708d69f147d72dcba5d6_prof);

        
        $__internal_3e43d9e592dfd1674c9051211e93b74ffd77bdca92545368bb8251da9aa33798->leave($__internal_3e43d9e592dfd1674c9051211e93b74ffd77bdca92545368bb8251da9aa33798_prof);

    }

    public function getTemplateName()
    {
        return "GOLSidebarBundle:Sidebar:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 15,  54 => 12,  51 => 11,  47 => 10,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Sidebar ================================================== -->
<div id=\"sidebar\" class=\"span3\">
    <div class=\"well well-small\">
        <a id=\"myCart\" href=\"{{ env }}carrito\">
            <img src=\"{{ asset('assets/themes/images/ico-cart.png') }}\" alt=\"cart\">
            <span class=\"numItems\">{{ numItems }}</span> Item(s) en el carrito <span class=\"badge badge-warning pull-right totalCarrito\">\${{ totalCarrito | number_format(0,',','.') }}</span>
        </a>
    </div>
    <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
        {% for category in categories %}
            <li class=\"\">
                <a href=\"{{ env }}categoria/{{ category.categori_id }}\">{{ category.name | title }} [{{ attribute (qtyByCategory, category.categori_id) }}]</a>
            </li>
        {% endfor %}
    </ul>
    
    {# Render Widget MasVendidos Controller #}
    {{ render(controller('GOLSidebarBundle:MasVendidos:masvendidos')) }}
</div>
<!-- Sidebar end=============================================== -->", "GOLSidebarBundle:Sidebar:sidebar.html.twig", "/var/www/rappi/src/GOL/SidebarBundle/Resources/views/Sidebar/sidebar.html.twig");
    }
}
