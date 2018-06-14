<?php

/* :cv:new.html.twig */
class __TwigTemplate_53c9455478aed469be2f932b2cd306e5239b0ca164be3223201166f8a62c1cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":cv:new.html.twig", 1);
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
                                  


";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-group clearfix", "id" => "basic-form", "novalidate" => "novalidate")));
        echo "
 <div class=\"col-sm-12\">
 <h3>Créer votre CV </h3>
 <section>
 <div>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "templateID", array()), 'row');
        echo "
\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nomCv", array()), 'row');
        echo "
\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fichierCv", array()), 'row');
        echo "
\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "contenuCv", array()), 'row');
        echo "
</div>
</section>
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templates"] ?? null), "sections", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 26
            echo "\t<h3 >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "name", array()), "html", null, true);
            echo "</h3>
 <section>
 <div>
 <h4 class=\"sec\" id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
            echo "\" style=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "name", array()), "html", null, true);
            echo "</h4>
 ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["section"], "champs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
                // line 31
                echo "\t";
                if (($this->getAttribute($context["champ"], 1, array(), "array") != "textarea")) {
                    // line 32
                    echo "\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                    echo " : <input type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 1, array(), "array"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 3, array(), "array"), "html", null, true);
                    echo "\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                    echo "\" class=\"cls form-control\" />
\t\t";
                    // line 33
                    if ($this->getAttribute($context["champ"], 4, array(), "array")) {
                        // line 34
                        echo "\t\t<button type=\"button\" class=\"add\" data='";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                        echo " : <input type=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 1, array(), "array"), "html", null, true);
                        echo "\" name=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                        echo "\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 3, array(), "array"), "html", null, true);
                        echo "\" data=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                        echo "\" class=\"cls form-control\" />' id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 3, array(), "array"), "html", null, true);
                        echo "\">
\t\t\tAdd</button><br>
\t\t<span class=\"a";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 3, array(), "array"), "html", null, true);
                        echo "\"></span><br>
\t\t";
                    }
                    // line 38
                    echo "\t";
                } else {
                    // line 39
                    echo "\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                    echo " : <textarea  name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 0, array(), "array"), "html", null, true);
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], 3, array(), "array"), "html", null, true);
                    echo "\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                    echo "\" class=\"cls\" ></textarea><br>
\t";
                }
                // line 41
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo " </div>
 </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo " <h3>Valider et terminer </h3>
 <section>
 <div>
 <button  type=\"button\" onclick=\"location.href = ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("templatechamp_new_tmp");
        echo ";\" class=\"btn btn-success btn-rounded waves-light waves-effect w-md\"  id=\"visualiser\">visualiser</button>
\t\t
\t\t</div>
</section>
\t\t</div>
    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

\t
    
\t</div>
\t</div>
\t</div>

    <ul>
        <li>
            <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        // line 69
        echo "    <script>
\$(document).ready( function () {

\t
\t\$(\".tmpl\").val(";
        // line 73
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo ");
\t\$('#visualiser').on('click',function(event){
\t\t\tvar array = \"\"
\t\t\t\$('#basic-form input, #basic-form textarea').each(
\t\t\t\tfunction(index){  
\t\t\t\t\t
\t\t\t\t\tvar input = \$(this);
\t\t\t\t\tif (input.hasClass('cls')) {
\t\t\t\t\t\tarray +=  input.attr('id') + \"|\" +  input.attr('data') + \"|\" +  input.val() + \";\";
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t\talert(array)
\t\t\t  \$.ajax({
\t\t   url: \"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("templatechamp_new_tmp");
        echo "\",
\t\t   data: {
\t\t\t  array: array,
\t\t\t  tmpl : \$(\".tmpl\").val(),
\t\t\t  userId : ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()), "html", null, true);
        echo "
\t\t   },
\t\t   error: function() {
\t\t\t  \$('#info').html('<p>An error has occurred</p>');
\t\t   },
\t\t   dataType: 'json',
\t\t   success: function(data) {
\t\t   
\t\t   \$(\".dichCv\").val(data[\"dichCv\"]);
\t\t   \$(\".contCv\").val(data[\"contCv\"]);
\t\t   
\t\t\t
\t\t\t  
\t\t   },
\t\t   type: 'POST'
\t\t});

\t\t});
\t\t
\t\t\$('.add').on('click',function(event){
\t\t
\t\t\t
\t\t\t
\t\t\t\$(\".a\" + \$(this).attr('id')).append(\$(this).attr('data'));
\t\t
\t\t});
\t});
    </script>
        ";
    }

    public function getTemplateName()
    {
        return ":cv:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 91,  219 => 87,  202 => 73,  196 => 69,  193 => 68,  185 => 63,  172 => 53,  164 => 48,  159 => 45,  151 => 42,  145 => 41,  133 => 39,  130 => 38,  125 => 36,  109 => 34,  107 => 33,  94 => 32,  91 => 31,  87 => 30,  81 => 29,  74 => 26,  70 => 25,  64 => 22,  60 => 21,  56 => 20,  52 => 19,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":cv:new.html.twig", "/home/houssem/myApp/app/Resources/views/cv/new.html.twig");
    }
}
