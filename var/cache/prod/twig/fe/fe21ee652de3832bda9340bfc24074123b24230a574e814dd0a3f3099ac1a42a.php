<?php

/* GOLSidebarBundle:Sidebar:sidebar.html.twig */
class __TwigTemplate_9dbc6ea5c9612dd5802e919020f143e1861e6f0106a02d0baa56273658be36d2 extends Twig_Template
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
        echo "<!-- Sidebar ================================================== -->
<div id=\"sidebar\" class=\"span3\">
    <div class=\"well well-small\">
        <a id=\"myCart\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "carrito\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico-cart.png"), "html", null, true);
        echo "\" alt=\"cart\">
            <span class=\"numItems\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : null), "html", null, true);
        echo "</span> Item(s) en el carrito <span class=\"badge badge-warning pull-right totalCarrito\">\$";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalCarrito"]) ? $context["totalCarrito"] : null), 0, ",", "."), "html", null, true);
        echo "</span>
        </a>
    </div>
    <ul id=\"sideManu\" class=\"nav nav-tabs nav-stacked\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <li class=\"\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
            echo "categoria/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "categori_id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($context["category"], "name", array())), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["qtyByCategory"]) ? $context["qtyByCategory"] : null), $this->getAttribute($context["category"], "categori_id", array())), "html", null, true);
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
        return array (  67 => 18,  63 => 15,  48 => 12,  45 => 11,  41 => 10,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLSidebarBundle:Sidebar:sidebar.html.twig", "/var/www/rappi/src/GOL/SidebarBundle/Resources/views/Sidebar/sidebar.html.twig");
    }
}
