<?php

/* section/index.html.twig */
class __TwigTemplate_a9078227a88ca8168fbe8ebdfb9a37338ca963372655af783d8cab7d52573b5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "section/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "section/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des sections</h1>
 <div class=\"row\">
 
                            <div class=\"col-12\">
                                <div class=\"card-box table-responsive\">
                                    <h4 class=\"m-t-0 header-title\"><b>Table de section</b></h4>
                                    <p class=\"text-muted font-14 m-b-30\">
 

                                    <table id=\"datatable\" class=\"table table-bordered\">
                                        <thead>
            <tr>
                <th>Id</th>
                <th>Nom de section</th>
                <th>Actions</th>
            </tr>
        </thead>

 <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 24
            echo "            <tr>
            
            


                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_show", array("id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "nomSection", array()), "html", null, true);
            echo "</td>
                <td>
                    
                        
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_show", array("id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fi-eye\"></i> Afficher</a>
                        
                         <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_edit", array("id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\" dripicons-pencil\"></i>Modifier</a>
                        
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


    <div >
        
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_new");
        echo "\"class=\"btn btn-success btn-rounded waves-light waves-effect w-md\">Creer nouvelle section</a>
   
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "  <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').DataTable();

                //Buttons examples
                var table = \$('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "section/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 59,  127 => 58,  116 => 53,  105 => 44,  92 => 37,  86 => 34,  79 => 30,  73 => 29,  66 => 24,  62 => 23,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends 'admin.html.twig' %}

{% block body %}
    <h1>Liste des sections</h1>
 <div class=\"row\">
 
                            <div class=\"col-12\">
                                <div class=\"card-box table-responsive\">
                                    <h4 class=\"m-t-0 header-title\"><b>Table de section</b></h4>
                                    <p class=\"text-muted font-14 m-b-30\">
 

                                    <table id=\"datatable\" class=\"table table-bordered\">
                                        <thead>
            <tr>
                <th>Id</th>
                <th>Nom de section</th>
                <th>Actions</th>
            </tr>
        </thead>

 <tbody>
        {% for section in sections %}
            <tr>
            
            


                <td><a href=\"{{ path('section_show', { 'id': section.id }) }}\">{{ section.id }}</a></td>
                <td>{{ section.nomSection }}</td>
                <td>
                    
                        
                            <a href=\"{{ path('section_show', { 'id': section.id }) }}\">
                            <i class=\"fi-eye\"></i> Afficher</a>
                        
                         <a href=\"{{ path('section_edit', { 'id': section.id }) }}\">
                            <i class=\" dripicons-pencil\"></i>Modifier</a>
                        
                    
                </td>
            </tr>
        {% endfor %}
        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


    <div >
        
            <a href=\"{{ path('section_new') }}\"class=\"btn btn-success btn-rounded waves-light waves-effect w-md\">Creer nouvelle section</a>
   
    </div>
{% endblock %}

{% block javascripts %}
  <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').DataTable();

                //Buttons examples
                var table = \$('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
{% endblock %}

", "section/index.html.twig", "/home/houssem/myApp/app/Resources/views/section/index.html.twig");
    }
}
