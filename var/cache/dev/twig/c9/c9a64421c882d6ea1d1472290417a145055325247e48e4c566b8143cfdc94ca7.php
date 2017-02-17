<?php

/* GOLApiBundle:Api:admin.html.twig */
class __TwigTemplate_e204bdc467d6571219273ad457d89da9b3edae2702def532876dc00ee23beb9f extends Twig_Template
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
        $__internal_d9634b84b82fe2a9b652e6e5629615c721afd8dd631432cc6163ad1defb3e9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9634b84b82fe2a9b652e6e5629615c721afd8dd631432cc6163ad1defb3e9fa->enter($__internal_d9634b84b82fe2a9b652e6e5629615c721afd8dd631432cc6163ad1defb3e9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLApiBundle:Api:admin.html.twig"));

        $__internal_b961784b7f2d292e461ec0b4099e2a6d42849835cdff8935149227676204c810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b961784b7f2d292e461ec0b4099e2a6d42849835cdff8935149227676204c810->enter($__internal_b961784b7f2d292e461ec0b4099e2a6d42849835cdff8935149227676204c810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GOLApiBundle:Api:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9634b84b82fe2a9b652e6e5629615c721afd8dd631432cc6163ad1defb3e9fa->leave($__internal_d9634b84b82fe2a9b652e6e5629615c721afd8dd631432cc6163ad1defb3e9fa_prof);

        
        $__internal_b961784b7f2d292e461ec0b4099e2a6d42849835cdff8935149227676204c810->leave($__internal_b961784b7f2d292e461ec0b4099e2a6d42849835cdff8935149227676204c810_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3bd2081256f6f04d65e4844aeeb26056e49cb1bade0caf80a4bcc58d9dbfadbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd2081256f6f04d65e4844aeeb26056e49cb1bade0caf80a4bcc58d9dbfadbb->enter($__internal_3bd2081256f6f04d65e4844aeeb26056e49cb1bade0caf80a4bcc58d9dbfadbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ae6748f4fef8dbe6c6672c959e350fe86fd1250405f0fde4935d0d43e965c688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6748f4fef8dbe6c6672c959e350fe86fd1250405f0fde4935d0d43e965c688->enter($__internal_ae6748f4fef8dbe6c6672c959e350fe86fd1250405f0fde4935d0d43e965c688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"span9\">
        <ul class=\"breadcrumb\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["env"]) ? $context["env"] : $this->getContext($context, "env")), "html", null, true);
        echo "\">Inicio</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">Administrador</li>
        </ul>
        <h3>Administrador</h3>
        ";
        // line 10
        if (((isset($context["mens"]) ? $context["mens"] : $this->getContext($context, "mens")) != "")) {
            // line 11
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["mens"]) ? $context["mens"] : $this->getContext($context, "mens")), "html", null, true);
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
        
        $__internal_ae6748f4fef8dbe6c6672c959e350fe86fd1250405f0fde4935d0d43e965c688->leave($__internal_ae6748f4fef8dbe6c6672c959e350fe86fd1250405f0fde4935d0d43e965c688_prof);

        
        $__internal_3bd2081256f6f04d65e4844aeeb26056e49cb1bade0caf80a4bcc58d9dbfadbb->leave($__internal_3bd2081256f6f04d65e4844aeeb26056e49cb1bade0caf80a4bcc58d9dbfadbb_prof);

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
        return array (  74 => 16,  68 => 13,  62 => 11,  60 => 10,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
            <li class=\"active\">Administrador</li>
        </ul>
        <h3>Administrador</h3>
        {% if mens != '' %}
            <div class=\"alert alert-{{ class}}\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                {{ mens }}
            </div>
        {% endif %}
        <form class=\"form-horizontal\" method=\"POST\" enctype=\"multipart/form-data\">
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
{% endblock %}
", "GOLApiBundle:Api:admin.html.twig", "/var/www/rappi/src/GOL/ApiBundle/Resources/views/Api/admin.html.twig");
    }
}
