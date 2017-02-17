<?php

/* GOLHeaderBundle:Header:header.html.twig */
class __TwigTemplate_c64b4d7f313d86513bded7073fb77608da9d84492e76dad887ba550ae9c52f08 extends Twig_Template
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
        $__internal_0f2bedc860e32d3b5cbd1415c177e035dbfab7fdc0824b41aad91a774c049c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2bedc860e32d3b5cbd1415c177e035dbfab7fdc0824b41aad91a774c049c21->enter($__internal_0f2bedc860e32d3b5cbd1415c177e035dbfab7fdc0824b41aad91a774c049c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLHeaderBundle:Header:header.html.twig"));

        $__internal_c3a77ab31f6dace00c7a923a1d9a96d62ea7531a22bc0b64e3f25b140178152a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a77ab31f6dace00c7a923a1d9a96d62ea7531a22bc0b64e3f25b140178152a->enter($__internal_c3a77ab31f6dace00c7a923a1d9a96d62ea7531a22bc0b64e3f25b140178152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLHeaderBundle:Header:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <div id=\"welcomeLine\" class=\"row\">
            <div class=\"span6\">Bienvenido!<strong> Invitado</strong></div>
            <div class=\"span6\">
                <div class=\"pull-right\">
                    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "carrito\"><span class=\"btn btn-mini btn-primary\"><i class=\"icon-shopping-cart icon-white\"></i> [ <span class=\"numItems\">";
        echo twig_escape_filter($this->env, (isset($context["numItems"]) ? $context["numItems"] : $this->getContext($context, "numItems")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/logo.png"), "html", null, true);
        echo "\" alt=\"Bootsshop\"/></a>
                <form class=\"form-inline navbar-search\" method=\"POST\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "productos\" >
                    <input type=\"text\" name=\"producto\" />
                    <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\"><span class=\"icon-search\"></span></button>
                </form>
                <ul id=\"topMenu\" class=\"nav navbar-nav pull-right\">
                    <li class=\"\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "productos-mas-vendidos\">Más Vendidos</a></li>
                    <li class=\"\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "productos-agotados\">Agotados</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->";
        
        $__internal_0f2bedc860e32d3b5cbd1415c177e035dbfab7fdc0824b41aad91a774c049c21->leave($__internal_0f2bedc860e32d3b5cbd1415c177e035dbfab7fdc0824b41aad91a774c049c21_prof);

        
        $__internal_c3a77ab31f6dace00c7a923a1d9a96d62ea7531a22bc0b64e3f25b140178152a->leave($__internal_c3a77ab31f6dace00c7a923a1d9a96d62ea7531a22bc0b64e3f25b140178152a_prof);

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
        return array (  68 => 26,  64 => 25,  56 => 20,  50 => 19,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <div id=\"welcomeLine\" class=\"row\">
            <div class=\"span6\">Bienvenido!<strong> Invitado</strong></div>
            <div class=\"span6\">
                <div class=\"pull-right\">
                    <a href=\"{{ env }}carrito\"><span class=\"btn btn-mini btn-primary\"><i class=\"icon-shopping-cart icon-white\"></i> [ <span class=\"numItems\">{{ numItems }}</span> ] en el carrito </span> </a>
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
                <a class=\"brand\" href=\"{{ env }}\"><img src=\"{{ asset('assets/themes/images/logo.png') }}\" alt=\"Bootsshop\"/></a>
                <form class=\"form-inline navbar-search\" method=\"POST\" action=\"{{ env }}productos\" >
                    <input type=\"text\" name=\"producto\" />
                    <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\"><span class=\"icon-search\"></span></button>
                </form>
                <ul id=\"topMenu\" class=\"nav navbar-nav pull-right\">
                    <li class=\"\"><a href=\"{{ env }}productos-mas-vendidos\">Más Vendidos</a></li>
                    <li class=\"\"><a href=\"{{ env }}productos-agotados\">Agotados</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Header End====================================================================== -->", "GOLHeaderBundle:Header:header.html.twig", "/var/www/rappi/src/GOL/HeaderBundle/Resources/views/Header/header.html.twig");
    }
}
