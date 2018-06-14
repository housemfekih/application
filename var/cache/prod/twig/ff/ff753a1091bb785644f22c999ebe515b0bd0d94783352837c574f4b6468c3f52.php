<?php

/* :champ:index.html.twig */
class __TwigTemplate_2375278a71e7a76770f15c5d6d4dd565950753ac6f5b77514dd7f01458c13c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":champ:index.html.twig", 1);
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
        echo "    <h1>Liste des champs</h1>
 <div class=\"row\">
 
                            <div class=\"col-12\">
                                <div class=\"card-box table-responsive\">
                                    <h4 class=\"m-t-0 header-title\"><b>Table champs</b></h4>
                                    <p class=\"text-muted font-14 m-b-30\">
 

                                    <table id=\"datatable\" class=\"table table-bordered\">
                                       <thead>
            <tr>
                <th>Id</th>
                <th>Nomchamp</th>
                <th>Typechamp</th>
                <th>Longeurchamp</th>
                <th>Actions</th>
            </tr>
        </thead>


        <tbody>
          ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["champs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_show", array("id" => $this->getAttribute($context["champ"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "nomChamp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "typeChamp", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "longeurChamp", array()), "html", null, true);
            echo "</td>
                  <td>
                    
                        
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_show", array("id" => $this->getAttribute($context["champ"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fi-eye\"></i> Afficher</a>
                        
                         <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_edit", array("id" => $this->getAttribute($context["champ"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\" dripicons-pencil\"></i>Modifier</a>
                        
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


    <ul>
         <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_new");
        echo "\"class=\"btn btn-success btn-rounded waves-light waves-effect w-md\">Creer nouveau champs</a>

    </ul>
";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return ":champ:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  121 => 58,  113 => 53,  103 => 45,  90 => 38,  84 => 35,  77 => 31,  73 => 30,  69 => 29,  63 => 28,  60 => 27,  56 => 26,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":champ:index.html.twig", "/home/houssem/myApp/app/Resources/views/champ/index.html.twig");
    }
}
