<?php

/* :groupe:index.html.twig */
class __TwigTemplate_404441b2cf63c542f1464fc595f78e75775da8e4d1a6554601a4bb639c43743f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":groupe:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Groupe list</h1>
 <div class=\"row\">
 
                            <div class=\"col-12\">
                                <div class=\"card-box table-responsive\">
                                    <h4 class=\"m-t-0 header-title\"><b>Table champs</b></h4>
                                    <p class=\"text-muted font-14 m-b-30\">
 

                                    <table id=\"datatable\" class=\"table table-bordered\">
                                       <thead>
            <tr>
                <th>Id</th>
                <th>Nomgroupe</th>
                <th>Actions</th>
            </tr>
        </thead>


         <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "nomGroupe", array()), "html", null, true);
            echo "</td>
                  <td>
                    
                        
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_show", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fi-eye\"></i> Afficher</a>
                        
                         <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_edit", array("id" => $this->getAttribute($context["groupe"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\" dripicons-pencil\"></i>Modifier</a>
                        
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


   <ul>
      <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_new");
        echo "\"class=\"btn btn-success btn-rounded waves-light waves-effect w-md\">Creer groupe</a>

    </ul>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
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
    }

    public function getTemplateName()
    {
        return ":groupe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 55,  111 => 54,  103 => 49,  93 => 41,  80 => 34,  74 => 31,  67 => 27,  61 => 26,  58 => 25,  54 => 24,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":groupe:index.html.twig", "/home/houssem/myApp/app/Resources/views/groupe/index.html.twig");
    }
}
