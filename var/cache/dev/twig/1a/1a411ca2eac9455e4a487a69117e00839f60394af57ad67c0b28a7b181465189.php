<?php

/* :cv:new.html.twig */
class __TwigTemplate_8dcbd720ee4a892af83ebbf6088c26182336ebc15354b8b2f63085d7501fcf18 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cv:new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":cv:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cv creation</h1>

    <!-- Basic Form Wizard -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card-box\">
                                    <h4 class=\"m-t-0 header-title\"><b>Nouveau CV</b></h4>
                                  


";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-group clearfix", "id" => "basic-form", "novalidate" => "novalidate")));
        echo "
 <div class=\"col-sm-12\">
 <h3>Créer votre CV </h3>
 <section>
 <div>
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "templateID", array()), 'row');
        echo "
\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomCv", array()), 'row');
        echo "
\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fichierCv", array()), 'row');
        echo "
\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "contenuCv", array()), 'row');
        echo "
</div>
</section>
";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["templates"] ?? $this->getContext($context, "templates")), "sections", array()));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    <script>
\$(document).ready( function () {

\t
\t\$(\".tmpl\").val(";
        // line 73
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  256 => 91,  249 => 87,  232 => 73,  226 => 69,  217 => 68,  203 => 63,  190 => 53,  182 => 48,  177 => 45,  169 => 42,  163 => 41,  151 => 39,  148 => 38,  143 => 36,  127 => 34,  125 => 33,  112 => 32,  109 => 31,  105 => 30,  99 => 29,  92 => 26,  88 => 25,  82 => 22,  78 => 21,  74 => 20,  70 => 19,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}

{% block body %}
    <h1>Cv creation</h1>

    <!-- Basic Form Wizard -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card-box\">
                                    <h4 class=\"m-t-0 header-title\"><b>Nouveau CV</b></h4>
                                  


{{ form_start(form, { 'attr': { 'class': 'form-group clearfix' , 'id': 'basic-form' , novalidate: 'novalidate'} }) }}
 <div class=\"col-sm-12\">
 <h3>Créer votre CV </h3>
 <section>
 <div>
        {{ form_row(form.templateID) }}
\t\t{{ form_row(form.nomCv) }}
\t\t{{ form_row(form.fichierCv) }}
\t\t{{ form_row(form.contenuCv) }}
</div>
</section>
{% for section in templates.sections %}
\t<h3 >{{ section.name }}</h3>
 <section>
 <div>
 <h4 class=\"sec\" id=\"{{ section.id }}\" style=\"\">{{ section.name }}</h4>
 {% for champ in section.champs %}
\t{% if champ[1] != 'textarea' %}
\t\t{{ champ[0] }} : <input type=\"{{ champ[1] }}\" name=\"{{ champ[0] }}\" id=\"{{champ[3]}}\" data=\"{{ section.id }}\" class=\"cls form-control\" />
\t\t{% if  champ[4]  %}
\t\t<button type=\"button\" class=\"add\" data='{{ champ[0] }} : <input type=\"{{ champ[1] }}\" name=\"{{ champ[0] }}\" id=\"{{champ[3]}}\" data=\"{{ section.id }}\" class=\"cls form-control\" />' id=\"{{champ[3]}}\">
\t\t\tAdd</button><br>
\t\t<span class=\"a{{champ[3]}}\"></span><br>
\t\t{% endif %}
\t{% else %}
\t\t{{ champ[0] }} : <textarea  name=\"{{ champ[0] }}\" id=\"{{champ[3]}}\" data=\"{{ section.id }}\" class=\"cls\" ></textarea><br>
\t{% endif %}
 {% endfor %}
 </div>
 </section>
{% endfor %}
 <h3>Valider et terminer </h3>
 <section>
 <div>
 <button  type=\"button\" onclick=\"location.href = {{ path('templatechamp_new_tmp') }};\" class=\"btn btn-success btn-rounded waves-light waves-effect w-md\"  id=\"visualiser\">visualiser</button>
\t\t
\t\t</div>
</section>
\t\t</div>
    {{ form_end(form) }}

\t
    
\t</div>
\t</div>
\t</div>

    <ul>
        <li>
            <a href=\"{{ path('cv_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}

{% block javascripts %}
    <script>
\$(document).ready( function () {

\t
\t\$(\".tmpl\").val({{ id }});
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
\t\t   url: \"{{ path('templatechamp_new_tmp') }}\",
\t\t   data: {
\t\t\t  array: array,
\t\t\t  tmpl : \$(\".tmpl\").val(),
\t\t\t  userId : {{ app.user.id }}
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
        {% endblock %}", ":cv:new.html.twig", "/home/houssem/Application/app/Resources/views/cv/new.html.twig");
    }
}
