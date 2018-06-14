<?php

/* :section:show.html.twig */
class __TwigTemplate_048b459f0ea0fa93825306b39e81eacef5522fbece257ed5d35d758cecf67d63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":section:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    <h1>Section</h1>

<table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsection</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? null), "nomSection", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Champs : </th>
                <td>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["section"] ?? null), "sectionChampsRel", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 21
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "nomChamp", array()), "html", null, true);
            echo " |
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</td>
            </tr>
        </tbody>
    </table>

    <ul>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_index");
        echo "\" class=\"btn btn-info btn-rounded waves-light waves-effect w-md\">Back to the list</a>
<br>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_edit", array("id" => $this->getAttribute(($context["section"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning btn-rounded waves-light waves-effect w-md\">Edit</a>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
            <br>
<button type=\"submit\" class=\"btn btn-danger btn-rounded waves-light waves-effect w-md\">Delete</button>            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":section:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  92 => 34,  87 => 32,  83 => 31,  78 => 29,  70 => 23,  59 => 21,  55 => 20,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":section:show.html.twig", "/home/houssem/myApp/app/Resources/views/section/show.html.twig");
    }
}
