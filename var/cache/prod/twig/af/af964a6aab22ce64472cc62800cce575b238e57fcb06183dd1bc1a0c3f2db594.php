<?php

/* rappi.html.twig */
class __TwigTemplate_fca80ddfe34f8a7664b1319b304fb07981b4ee5c3f5d42bc09cf2d94d8a8dd8b extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo ".:: Rappi | Gilberto Orozco Linero ::. ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
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
        return array (  166 => 46,  160 => 5,  153 => 65,  149 => 64,  145 => 63,  140 => 61,  136 => 60,  131 => 58,  127 => 57,  123 => 56,  116 => 53,  109 => 47,  107 => 46,  101 => 44,  91 => 37,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  62 => 25,  57 => 23,  53 => 22,  48 => 20,  44 => 19,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rappi.html.twig", "/var/www/rappi/app/Resources/views/rappi.html.twig");
    }
}
