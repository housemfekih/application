<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_78ba64f37334dfdeb181cbdf16521a7338fbd9f6cecea6a0b511a89c974b251f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
            'thread' => array($this, 'block_thread'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 7
        echo "






<div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Nouveau messsage/h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Email</a></li>
                                        <li class=\"breadcrumb-item active\">Nouveau message</li>
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
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\" class=\"btn btn-danger btn-block waves-effect waves-light\">Boite de réception</a>

                                        <div class=\"mail-list mt-4\">
                                            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\" class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boite de reception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>
                                           
                                            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\" class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyés</a>
                                           <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\" class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                       

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                        <div class=\"\" role=\"toolbar\">
                                      
                                           

                                            
                                        </div>

                                        <div class=\"mt-4\">
";
        // line 65
        $this->displayBlock('thread', $context, $blocks);
        // line 77
        echo "
<h3>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("reply", array(), "FOSMessageBundle");
        echo "</h3>

<form action=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                                                <div class=\"form-group\">

    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

</div>

                                                <div class=\"form-group m-b-0\">
                                                    <div class=\"text-right\">
                                                        <button type=\"button\" class=\"btn btn-success waves-effect waves-light m-r-5\"><i class=\"fa fa-floppy-o\"></i></button>
                                                        <button type=\"button\" class=\"btn btn-success waves-effect waves-light m-r-5\"><i class=\"fa fa-trash-o\"></i></button>
                                                        <button type=\"submit\" class=\"btn btn-purple waves-effect waves-light\"> <span>Send</span> <i class=\"fa fa-send m-l-10\"></i> </button>
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

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_thread($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thread"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thread"));

        // line 66
        echo "                                            <h3>  Sujet : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h3>


";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 70
            echo "    
         <h3>   ";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", array())), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", array()))), "FOSMessageBundle");
            echo "</h3>

           Messsage : <br> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 73,  201 => 71,  198 => 70,  194 => 69,  187 => 66,  178 => 65,  138 => 83,  132 => 80,  127 => 78,  124 => 77,  122 => 65,  101 => 47,  97 => 46,  92 => 44,  86 => 41,  50 => 7,  41 => 6,  11 => 1,);
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
                                    <h4 class=\"page-title float-left\">Nouveau messsage/h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Email</a></li>
                                        <li class=\"breadcrumb-item active\">Nouveau message</li>
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
                                            <a href=\"{{path ('fos_message_inbox')}}\" class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boite de reception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>
                                           
                                            <a href=\"{{path ('fos_message_sent')}}\" class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyés</a>
                                           <a href=\"{{path ('fos_message_deleted')}}\" class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                       

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                        <div class=\"\" role=\"toolbar\">
                                      
                                           

                                            
                                        </div>

                                        <div class=\"mt-4\">
{% block thread %}
                                            <h3>  Sujet : {{ thread.subject }}</h3>


{% for message in thread.messages %}
    
         <h3>   {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}</h3>

           Messsage : <br> {{ message.body }}
    
{% endfor %}
{% endblock %}

<h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

<form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
                                                <div class=\"form-group\">

    {{ form_widget(form) }}

</div>

                                                <div class=\"form-group m-b-0\">
                                                    <div class=\"text-right\">
                                                        <button type=\"button\" class=\"btn btn-success waves-effect waves-light m-r-5\"><i class=\"fa fa-floppy-o\"></i></button>
                                                        <button type=\"button\" class=\"btn btn-success waves-effect waves-light m-r-5\"><i class=\"fa fa-trash-o\"></i></button>
                                                        <button type=\"submit\" class=\"btn btn-purple waves-effect waves-light\"> <span>Send</span> <i class=\"fa fa-send m-l-10\"></i> </button>
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
{% endblock %}", "FOSMessageBundle:Message:thread.html.twig", "/home/houssem/Application/app/Resources/FOSMessageBundle/views/Message/thread.html.twig");
    }
}
