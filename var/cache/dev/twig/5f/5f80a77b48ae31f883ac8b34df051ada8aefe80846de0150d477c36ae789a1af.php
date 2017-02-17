<?php

/* rappi.html.twig */
class __TwigTemplate_72f1a54e0af6a0955195dbe80ef37cec55de1bb71eeef66ba307cfed4fcfdbc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2d92c1803ce7f0901718635cd987dc7c8e6c7c8025dd970972ca9a84304d521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d92c1803ce7f0901718635cd987dc7c8e6c7c8025dd970972ca9a84304d521->enter($__internal_e2d92c1803ce7f0901718635cd987dc7c8e6c7c8025dd970972ca9a84304d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rappi.html.twig"));

        $__internal_000e1b64fabee7ec8a0cb6e625d698d2ea05f46c50d5703ecb6c2742d2a29150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000e1b64fabee7ec8a0cb6e625d698d2ea05f46c50d5703ecb6c2742d2a29150->enter($__internal_000e1b64fabee7ec8a0cb6e625d698d2ea05f46c50d5703ecb6c2742d2a29150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rappi.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!--Less styles -->
        <!-- Other Less css file //different less files has different color scheam
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/simplex.less\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/classified.less\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/amelia.less\">  MOVE DOWN TO activate
        -->
        <!--<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/bootshop.less\">
        <script src=\"themes/js/less.js\" type=\"text/javascript\"></script> -->

        <!-- Bootstrap style --> 
        <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\"/>
        <!-- Bootstrap style responsive -->\t
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <!-- Google-code-prettify -->\t
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/google-code-prettify/prettify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/images/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
        <style type=\"text/css\" id=\"enject\"></style>
    </head>
    <body>
        
        ";
        // line 37
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLHeaderBundle:Header:header"));
        echo "
        
        <div id=\"mainBody\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    ";
        // line 44
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLSidebarBundle:Sidebar:sidebar"));
        echo "
                    
                    ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
        </div>
        <!-- MainBody End ============================= -->
        
        ";
        // line 53
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GOLFooterBundle:Footer:footer"));
        echo "
        
        <!-- Placed at the end of the document so the pages load faster ============================================= -->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/google-code-prettify/prettify.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/bootshop.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/themes/js/jquery.lightbox-0.5.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/carrito.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/orden.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/admin.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>";
        
        $__internal_e2d92c1803ce7f0901718635cd987dc7c8e6c7c8025dd970972ca9a84304d521->leave($__internal_e2d92c1803ce7f0901718635cd987dc7c8e6c7c8025dd970972ca9a84304d521_prof);

        
        $__internal_000e1b64fabee7ec8a0cb6e625d698d2ea05f46c50d5703ecb6c2742d2a29150->leave($__internal_000e1b64fabee7ec8a0cb6e625d698d2ea05f46c50d5703ecb6c2742d2a29150_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e255b53e44eb3ce31ccdcaab616e24d2c49c967a8e7fa1fa916b47c841067ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e255b53e44eb3ce31ccdcaab616e24d2c49c967a8e7fa1fa916b47c841067ab->enter($__internal_6e255b53e44eb3ce31ccdcaab616e24d2c49c967a8e7fa1fa916b47c841067ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb3619317dbf655316f9c1c45dec5b1419945837a68e2518c202346c25d44d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3619317dbf655316f9c1c45dec5b1419945837a68e2518c202346c25d44d16->enter($__internal_bb3619317dbf655316f9c1c45dec5b1419945837a68e2518c202346c25d44d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo ".:: Rappi | Gilberto Orozco Linero ::. ";
        
        $__internal_bb3619317dbf655316f9c1c45dec5b1419945837a68e2518c202346c25d44d16->leave($__internal_bb3619317dbf655316f9c1c45dec5b1419945837a68e2518c202346c25d44d16_prof);

        
        $__internal_6e255b53e44eb3ce31ccdcaab616e24d2c49c967a8e7fa1fa916b47c841067ab->leave($__internal_6e255b53e44eb3ce31ccdcaab616e24d2c49c967a8e7fa1fa916b47c841067ab_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ae38c672ec1c80d4efea537319dddf16954d1d24b5e8a62548af801d81069ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae38c672ec1c80d4efea537319dddf16954d1d24b5e8a62548af801d81069ae->enter($__internal_5ae38c672ec1c80d4efea537319dddf16954d1d24b5e8a62548af801d81069ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_023d20581a68c55528bd4e19e16d35030e09638ef498c35387a314c30bf9672e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d20581a68c55528bd4e19e16d35030e09638ef498c35387a314c30bf9672e->enter($__internal_023d20581a68c55528bd4e19e16d35030e09638ef498c35387a314c30bf9672e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_023d20581a68c55528bd4e19e16d35030e09638ef498c35387a314c30bf9672e->leave($__internal_023d20581a68c55528bd4e19e16d35030e09638ef498c35387a314c30bf9672e_prof);

        
        $__internal_5ae38c672ec1c80d4efea537319dddf16954d1d24b5e8a62548af801d81069ae->leave($__internal_5ae38c672ec1c80d4efea537319dddf16954d1d24b5e8a62548af801d81069ae_prof);

    }

    public function getTemplateName()
    {
        return "rappi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 46,  172 => 5,  159 => 65,  155 => 64,  151 => 63,  146 => 61,  142 => 60,  137 => 58,  133 => 57,  129 => 56,  122 => 53,  115 => 47,  113 => 46,  107 => 44,  97 => 37,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  68 => 25,  63 => 23,  59 => 22,  54 => 20,  50 => 19,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>{% block title %}.:: Rappi | Gilberto Orozco Linero ::. {% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <!--Less styles -->
        <!-- Other Less css file //different less files has different color scheam
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/simplex.less\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/classified.less\">
             <link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/amelia.less\">  MOVE DOWN TO activate
        -->
        <!--<link rel=\"stylesheet/less\" type=\"text/css\" href=\"themes/less/bootshop.less\">
        <script src=\"themes/js/less.js\" type=\"text/javascript\"></script> -->

        <!-- Bootstrap style --> 
        <link id=\"callCss\" rel=\"stylesheet\" href=\"{{ asset('assets/themes/bootshop/bootstrap.min.css') }}\" media=\"screen\"/>
        <link href=\"{{ asset('assets/themes/css/base.css') }}\" rel=\"stylesheet\" media=\"screen\"/>
        <!-- Bootstrap style responsive -->\t
        <link href=\"{{ asset('assets/themes/css/bootstrap-responsive.min.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('assets/themes/css/font-awesome.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <!-- Google-code-prettify -->\t
        <link href=\"{{ asset('assets/themes/js/google-code-prettify/prettify.css') }}\" rel=\"stylesheet\"/>
        <!-- fav and touch icons -->
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/themes/images/ico/favicon.ico') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets/themes/images/ico/apple-touch-icon-144-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('assets/themes/images/ico/apple-touch-icon-114-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets/themes/images/ico/apple-touch-icon-72-precomposed.png') }}\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/themes/images/ico/apple-touch-icon-57-precomposed.png') }}\">
        <style type=\"text/css\" id=\"enject\"></style>
    </head>
    <body>
        
        {# Render Header Controller #}
        {{ render(controller('GOLHeaderBundle:Header:header')) }}
        
        <div id=\"mainBody\">
            <div class=\"container\">
                <div class=\"row\">
                    
                    {# Render Sidebar Controller #}
                    {{ render(controller('GOLSidebarBundle:Sidebar:sidebar')) }}
                    
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
        <!-- MainBody End ============================= -->
        
        {# Render Footer Controller #}
        {{ render(controller('GOLFooterBundle:Footer:footer')) }}
        
        <!-- Placed at the end of the document so the pages load faster ============================================= -->
        <script src=\"{{ asset('assets/themes/js/jquery.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/themes/js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('assets/themes/js/google-code-prettify/prettify.js') }}\"></script>

        <script src=\"{{ asset('assets/themes/js/bootshop.js') }}\"></script>
        <script src=\"{{ asset('assets/themes/js/jquery.lightbox-0.5.js') }}\"></script>
        
        <script src=\"{{ asset('assets/js/carrito.js') }}\"></script>
        <script src=\"{{ asset('assets/js/orden.js') }}\"></script>
        <script src=\"{{ asset('assets/js/admin.js') }}\"></script>
    </body>
</html>", "rappi.html.twig", "/var/www/rappi/app/Resources/views/rappi.html.twig");
    }
}
