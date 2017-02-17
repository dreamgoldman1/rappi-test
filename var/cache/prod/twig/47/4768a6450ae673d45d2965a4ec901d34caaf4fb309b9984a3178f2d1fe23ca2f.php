<?php

/* GOLApiBundle:Api:admin.html.twig */
class __TwigTemplate_9a56a86c8b740b12bf060a5b4dc2f370224565633216cffd01ab405a970c13ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("rappi.html.twig", "GOLApiBundle:Api:admin.html.twig", 1);
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
            <li class=\"active\">Administrador</li>
        </ul>
        <h3>Administrador</h3>
        ";
        // line 10
        if (((isset($context["mens"]) ? $context["mens"] : null) != "")) {
            // line 11
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["mens"]) ? $context["mens"] : null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 16
        echo "        <form class=\"form-horizontal\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"control-group input-group\">
                <label>Fuente de la información:</label>
                <input type=\"radio\" class=\"radio fuente\" name=\"fuente\" value=\"url\"> URL <br/>
                <input type=\"radio\" class=\"radio fuente\" name=\"fuente\" value=\"file\"> Archivo
            </div>
            <div class=\"control-group input-group group-url\">
                <hr class=\"soft\">
                <label>URL:</label>
                <input type=\"text\" class=\"\" name=\"url\"><br/>
                <span class=\"text-small\">Indique la URL de donde se tomará la información</span>
            </div>
            <div class=\"control-group input-group group-file\">
                <hr class=\"soft\">
                <label>Archivo:</label>
                <input type=\"file\" class=\"\" name=\"file\"><br/>
                <span class=\"text-small\">Seleccione el archivo que desea cargar con la información</span>
            </div>
            <div class=\"control-group input-group group-button\">
                <hr class=\"soft\">
                <button type=\"submit\" name=\"actualizar\" class=\"btn btn-large btn-primary\">Actualizar</button>
            </div>
        </form>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "GOLApiBundle:Api:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  50 => 13,  44 => 11,  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "GOLApiBundle:Api:admin.html.twig", "/var/www/rappi/src/GOL/ApiBundle/Resources/views/Api/admin.html.twig");
    }
}
