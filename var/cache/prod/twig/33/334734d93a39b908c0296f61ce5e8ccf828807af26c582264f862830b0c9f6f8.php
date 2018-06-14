<?php

/* :cv:beforeNew.html.twig */
class __TwigTemplate_b170c1e4627b3685e1f134fa220891af3d2049d71c89d7b507a7742f004b4788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":cv:beforeNew.html.twig", 1);
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
        echo "    <h1>Cv creation</h1>

    <!-- Basic Form Wizard -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card-box\">
                                    <h4 class=\"m-t-0 header-title\"><b>Nouveau CV</b></h4>
                                  


 <div class=\"col-sm-12\">

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 17
            echo "\t\t\t
\t\t\t<!-- <iframe class=\"browser1\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, (($context["url"] ?? null) . $this->getAttribute($context["template"], "fichierTemplate", array())), "html", null, true);
            echo "\"> </iframe> -->
\t\t\t<div style=\"width:30%;float:left;\">
\t\t\t<div class=\"col-sm-12 img-";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
            echo " msg\">
\t\t\t<img class=\"photo\" src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["url"] ?? null) . $this->getAttribute($context["template"], "content", array()))), "html", null, true);
            echo "\" style=\"width:100%\" data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#myModal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
            echo "\"></img>
\t\t\t</div>
\t\t\t<h3 class=\"col-sm-12\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "nomTemplate", array()), "html", null, true);
            echo "</h3>
\t\t\t<div id=\"myModal";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
            echo "\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                                                    <h5 class=\"modal-title\" id=\"myModalLabel\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "nomTemplate", array()), "html", null, true);
            echo "</h5>
                                                </div>
                                                <div class=\"modal-body\">
                                                   <img class=\"photo\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["url"] ?? null) . $this->getAttribute($context["template"], "content", array()))), "html", null, true);
            echo "\" style=\"width:100%\" data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#myModal\"></img>
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Close</button>
                                                  
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t</div>
\t\t<div style=\"clear: both;\"></div>
\t\t <div class=\"col-sm-12\">
\t\t<button  class=\"btn btn-success btn-rounded waves-light waves-effect w-md\"  id=\"create\">Creer un nouveau CV</button>
\t\t</div>
\t\t<span id=\"templateId\"></span>
\t
    
\t</div>
\t</div>
\t</div>

    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "    <script>
\$(document).ready( function () {
    \$('.photo').on('click',function(event){

        ch=\$(this).data('id');
        \$('#templateId').html(ch);
\t\tunhilight_css = {\"border-bottom-color\":\"red\", 
               \"background-color\":\"#fff\"};
\t\t\$(\".msg\").css(unhilight_css);
        hilight_css = {\"border-bottom-color\":\"red\", 
               \"background-color\":\"#000\"};
\t\t\$(\".img-\" + ch).css(hilight_css);
    });
\t
\t \$('#create').on('click',function(event){
\t var url = \"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_new", array("id" => "template_id"));
        echo "\"; 
    url = url.replace(\"template_id\", \$('#templateId').text());
\t\$(location).attr('href', url );
\t
\t\t});
\t\t});
    </script>
        ";
    }

    public function getTemplateName()
    {
        return ":cv:beforeNew.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 79,  136 => 64,  133 => 63,  125 => 58,  109 => 44,  89 => 32,  83 => 29,  75 => 24,  71 => 23,  62 => 21,  58 => 20,  53 => 18,  50 => 17,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cv:beforeNew.html.twig", "/home/houssem/myApp/app/Resources/views/cv/beforeNew.html.twig");
    }
}
