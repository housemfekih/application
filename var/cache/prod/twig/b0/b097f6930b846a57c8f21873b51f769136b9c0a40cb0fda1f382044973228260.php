<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_0f9e7864d9a842c1cb03f7563ade3fd045c031b8b39511cdf8748110398fa7d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "




                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Email Compose</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Email</a></li>
                                        <li class=\"breadcrumb-item active\">Email Compose</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class=\"row\">

                            <!-- Right Sidebar -->
                            <div class=\"col-lg-12\">
                                <div class=\"card-box\">
                                    <!-- Left sidebar -->
                                    <div class=\"inbox-leftbar\">

                                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\" class=\"btn btn-danger btn-block waves-effect waves-light\">Boite de réception</a>

                                        <div class=\"mail-list mt-4\">
                                         <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\"  class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boite de réception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>
                                           
                                          <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyées</a>
                                          <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                       

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                        <div class=\"\" role=\"toolbar\">
                                      
                                           
<h2>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("send_new", array(), "FOSMessageBundle");
        echo "</h2>


                                   
                                        </div>

                                        <div class=\"mt-4\">

<form action=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
                                                <div class=\"form-group\">
    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                                                </div>

                   
                                          
                                              

                                                <div class=\"form-group m-b-0\">
                                                    <div class=\"text-right\">
                                                      
                                                        <button type=\"submit\" class=\"btn btn-purple waves-effect waves-light\"> <span>Envoyé</span> <i class=\"fa fa-send m-l-10\"></i> </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end card-->

                                    </div>

                                    <div class=\"clearfix\"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->


               

        
            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo " <script>
            jQuery(document).ready(function(){
                \$('.summernote').summernote({
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
 </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 98,  161 => 97,  122 => 65,  117 => 63,  106 => 55,  90 => 42,  86 => 41,  81 => 39,  75 => 36,  41 => 4,  35 => 3,  11 => 1,);
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

{% block fos_message_content %}





                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Email Compose</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Email</a></li>
                                        <li class=\"breadcrumb-item active\">Email Compose</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <div class=\"row\">

                            <!-- Right Sidebar -->
                            <div class=\"col-lg-12\">
                                <div class=\"card-box\">
                                    <!-- Left sidebar -->
                                    <div class=\"inbox-leftbar\">

                                        <a href=\"{{path ('fos_message_inbox')}}\" class=\"btn btn-danger btn-block waves-effect waves-light\">Boite de réception</a>

                                        <div class=\"mail-list mt-4\">
                                         <a href=\"{{path ('fos_message_inbox')}}\"  class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boite de réception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>
                                           
                                          <a href=\"{{path ('fos_message_sent')}}\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyées</a>
                                          <a href=\"{{path ('fos_message_deleted')}}\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                       

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                        <div class=\"\" role=\"toolbar\">
                                      
                                           
<h2>{% trans from 'FOSMessageBundle' %}send_new{% endtrans %}</h2>


                                   
                                        </div>

                                        <div class=\"mt-4\">

<form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
                                                <div class=\"form-group\">
    {{ form_widget(form) }}
                                                </div>

                   
                                          
                                              

                                                <div class=\"form-group m-b-0\">
                                                    <div class=\"text-right\">
                                                      
                                                        <button type=\"submit\" class=\"btn btn-purple waves-effect waves-light\"> <span>Envoyé</span> <i class=\"fa fa-send m-l-10\"></i> </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end card-->

                                    </div>

                                    <div class=\"clearfix\"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->


               

        
            </div>
{% endblock %}
{% block javascripts %}
 <script>
            jQuery(document).ready(function(){
                \$('.summernote').summernote({
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
 </script>

{% endblock %}


", "FOSMessageBundle:Message:newThread.html.twig", "/home/houssem/myApp/app/Resources/FOSMessageBundle/views/Message/newThread.html.twig");
    }
}
