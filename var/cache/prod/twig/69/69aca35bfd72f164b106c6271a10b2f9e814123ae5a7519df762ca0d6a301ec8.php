<?php

/* GOLHeaderBundle:Header:header.html.twig */
class __TwigTemplate_1182ca759c605590cbda29cd18a26d02349ad2a39d509eaae103ef99adfa7d38 extends Twig_Template
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
        echo "<div id=\"header\">
    <div class=\"container\">
        <div id=\"welcomeLine\" class=\"row\">
            <div class=\"span6\">Bienvenido!<strong> Invitado</strong></div>
            <div class=\"span6\">
                <div class=\"pull-right\">
                    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "carrito\"><span class=\"btn btn-mini btn-primary\"><i class=\"icon-shopping-cart icon-white\"></i> [ <span class=\"numItems\">";
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : null), "html", null, true);
        echo "</span> ] en el carrito </span> </a>
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id=\"logoArea\" class=\"navbar\">
            <a id=\"smallScreen\" data-target=\"#topMenu\" data-toggle=\"collapse\" class=\"btn btn-navbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"navbar-inner\">
                <a class=\"brand\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/logo.png"), "html", null, true);
        echo "\" alt=\"Bootsshop\"/></a>
                <form class=\"form-inline navbar-search\" method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "productos\" >
                    <input type=\"text\" name=\"producto\" />
                    <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\"><span class=\"icon-search\"></span></button>
                </form>
                <ul id=\"topMenu\" class=\"nav navbar-nav pull-right\">
                    <li class=\"\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "productos-mas-vendidos\">Más Vendidos</a></li>
                    <li class=\"\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : null), "html", null, true);
        echo "productos-agotados\">Agotados</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->";
    }

    public function getTemplateName()
    {
        return "GOLHeaderBundle:Header:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 26,  58 => 25,  50 => 20,  44 => 19,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLHeaderBundle:Header:header.html.twig", "/var/www/rappi/src/GOL/HeaderBundle/Resources/views/Header/header.html.twig");
    }
}
