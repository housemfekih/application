<?php

/* :champ:show.html.twig */
class __TwigTemplate_752f838fd8c31bc9dadbda41c9d913b116fef2a1b19c61f9dc504ff454607a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":champ:show.html.twig", 1);
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
        echo "<table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["champ"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomchamps</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["champ"] ?? null), "nomChamp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typechamps</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["champ"] ?? null), "typeChamp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longeurchamps</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["champ"] ?? null), "longeurChamp", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_edit", array("id" => $this->getAttribute(($context["champ"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":champ:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 35,  80 => 33,  74 => 30,  68 => 27,  58 => 20,  51 => 16,  44 => 12,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":champ:show.html.twig", "/home/houssem/myApp/app/Resources/views/champ/show.html.twig");
    }
}
