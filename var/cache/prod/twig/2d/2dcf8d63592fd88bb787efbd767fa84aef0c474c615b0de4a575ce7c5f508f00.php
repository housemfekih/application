<?php

/* :user:show.html.twig */
class __TwigTemplate_f830238d6f161d31591cfde5ed0edebfa9497603a4251e7f74165a73f9baca5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":user:show.html.twig", 1);
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
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "sexe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_naissance</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["user"] ?? null), "datenaissance", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "datenaissance", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Phone_number</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "phonenumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Facebookid</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "facebookID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Googleid</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "googleID", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
<td><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))), "html", null, true);
        echo "\" style=\"width:30%\" alt=\"avatar\" class=\"img-rounded\"></td>            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":user:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 48,  97 => 42,  90 => 38,  83 => 34,  76 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":user:show.html.twig", "/home/houssem/myApp/app/Resources/views/user/show.html.twig");
    }
}
