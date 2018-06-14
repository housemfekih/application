<?php

/* :cv:index.html.twig */
class __TwigTemplate_9af9e832eb811161bdbbbd34d5d6ddd532226eeec67b456d7b1c3f5c128dba13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":cv:index.html.twig", 1);
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
        echo "    <h1>Liste des Cvs</h1>

<table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomcv</th>
                <th>Templateid</th>
                <th>Fichiercv</th>
                <th>Userid</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cvs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_show", array("id" => $this->getAttribute($context["cv"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "nomCv", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cv"], "templateId", array()), "nomTemplate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "fichierCv", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "userId", array()), "html", null, true);
            echo "</td>

                <td>
                    
                        
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_show", array("id" => $this->getAttribute($context["cv"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\"fi-eye\"></i> Afficher</a>
                        
                         <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_edit", array("id" => $this->getAttribute($context["cv"], "id", array()))), "html", null, true);
            echo "\">
                            <i class=\" dripicons-pencil\"></i>Modifier</a>
                        
                    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
  <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_before_new");
        echo "\"class=\"btn btn-success btn-rounded waves-light waves-effect w-md\">Creer nouveau CV</a>
    </ul>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
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
        return ":cv:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  114 => 48,  107 => 44,  101 => 40,  88 => 33,  82 => 30,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  56 => 21,  53 => 20,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cv:index.html.twig", "/home/houssem/myApp/app/Resources/views/cv/index.html.twig");
    }
}
