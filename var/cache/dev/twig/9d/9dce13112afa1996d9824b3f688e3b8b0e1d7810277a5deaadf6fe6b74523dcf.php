<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_7aa7d921ea3bb26fdadfe9ea6cfdb6936d5667698cc484b716330a64cdf5a50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
  <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Boite de réception</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Messages</a></li>
                                        <li class=\"breadcrumb-item active\">Boite de réception</li>
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
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_new");
        echo "\" class=\"btn btn-danger btn-block waves-effect waves-light\">Nouveau message</a>

                                        <div class=\"mail-list mt-4\">
                                                <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\"  class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boit de réception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>

                                      
                                          
                                               <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_sent");
        echo "\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyées</a>

                                                <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_deleted");
        echo "\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                        
                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                      
                           \t\t\t<table class=\"table table-striped\">
                                   <thead>
        <tr>
            <th>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("subject", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("starter", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("startdate", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messages", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("last_message", array(), "FOSMessageBundle");
        echo "</th>
            <th>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("actions", array(), "FOSMessageBundle");
        echo "</th>
        </tr>
    </thead>

    <tbody>

    ";
        // line 65
        if (($context["threads"] ?? $this->getContext($context, "threads"))) {
            // line 66
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["threads"] ?? $this->getContext($context, "threads")));
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                // line 67
                echo "            <tr>
                <td>
                    <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "subject", array()), "html", null, true);
                echo "
                    </a>

                    ";
                // line 73
                if ( !$this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isRead($context["thread"])) {
                    // line 74
                    echo "                        (";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("new", array(), "FOSMessageBundle");
                    echo ")
                    ";
                }
                // line 76
                echo "                </td>
                <td>
                    ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "createdBy", array()), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdAt", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 84
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["thread"], "messages", array())), "html", null, true);
                echo "
                </td>
                <td>
                    ";
                // line 87
                if ($this->getAttribute($context["thread"], "lastMessage", array())) {
                    // line 88
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                    echo "#message_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "id", array()), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("goto_last", array(), "FOSMessageBundle");
                    echo "\">
                            →
                        </a>
                        ";
                    // line 91
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("on", array("%date%" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "createdAt", array()))), "FOSMessageBundle");
                    // line 92
                    echo "                        <br />
                        ";
                    // line 93
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("by", array("%sender%" => twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["thread"], "lastMessage", array()), "sender", array()))), "FOSMessageBundle");
                    // line 94
                    echo "                    ";
                } else {
                    // line 95
                    echo "                        ----
                    ";
                }
                // line 97
                echo "                </td>
                <td>
                    ";
                // line 99
                if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->canDeleteThread($context["thread"])) {
                    // line 100
                    echo "                        ";
                    if ($this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->isThreadDeletedByParticipant($context["thread"])) {
                        // line 101
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_undelete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 102
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("undelete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 103
                        echo "                        ";
                    } else {
                        // line 104
                        echo "                            ";
                        ob_start();
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                        $context["formAction"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 105
                        echo "                            ";
                        ob_start();
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("delete", array(), "FOSMessageBundle");
                        $context["submitValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 106
                        echo "                        ";
                    }
                    // line 107
                    echo "                        <form action=\"";
                    echo twig_escape_filter($this->env, ($context["formAction"] ?? $this->getContext($context, "formAction")), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" value=\"";
                    // line 108
                    echo twig_escape_filter($this->env, ($context["submitValue"] ?? $this->getContext($context, "submitValue")), "html", null, true);
                    echo "\" />
                        </form>
                    ";
                }
                // line 111
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "    ";
        } else {
            // line 115
            echo "        <tr>
            <td colspan=\"6\">
                ";
            // line 117
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("no_thread", array(), "FOSMessageBundle");
            echo ".
            </td>
        </tr>
    ";
        }
        // line 121
        echo "
    </tbody>

</table>

                                        <div class=\"row\">
                                            <div class=\"col-7\">


                                              
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"col-5\">
                                                <div class=\"btn-group float-right\">
                                                    <button type=\"button\" class=\"btn btn-gradient waves-effect\"><i class=\"fa fa-chevron-left\"></i></button>
                                                    <button type=\"button\" class=\"btn btn-gradient waves-effect\"><i class=\"fa fa-chevron-right\"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class=\"clearfix\"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->


                    </div> <!-- container -->

                </div> <!-- content -->

          

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


      
        <!-- END wrapper -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 121,  281 => 117,  277 => 115,  274 => 114,  266 => 111,  260 => 108,  255 => 107,  252 => 106,  247 => 105,  242 => 104,  239 => 103,  234 => 102,  229 => 101,  226 => 100,  224 => 99,  220 => 97,  216 => 95,  213 => 94,  211 => 93,  208 => 92,  206 => 91,  195 => 88,  193 => 87,  187 => 84,  181 => 81,  175 => 78,  171 => 76,  165 => 74,  163 => 73,  157 => 70,  153 => 69,  149 => 67,  144 => 66,  142 => 65,  133 => 59,  129 => 58,  125 => 57,  121 => 56,  117 => 55,  113 => 54,  97 => 41,  92 => 39,  85 => 35,  79 => 32,  49 => 4,  40 => 3,  11 => 1,);
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
                                    <h4 class=\"page-title float-left\">Boite de réception</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Messages</a></li>
                                        <li class=\"breadcrumb-item active\">Boite de réception</li>
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

                                        <a href=\"{{ path('fos_message_thread_new')}}\" class=\"btn btn-danger btn-block waves-effect waves-light\">Nouveau message</a>

                                        <div class=\"mail-list mt-4\">
                                                <a href=\"{{ path('fos_message_inbox')}}\"  class=\"list-group-item border-0 text-danger\"><i class=\"mdi mdi-inbox font-18 align-middle mr-2\"></i><b>Boit de réception</b><span class=\"badge badge-danger float-right ml-2\">8</span></a>

                                      
                                          
                                               <a href=\"{{ path('fos_message_sent')}}\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-send font-18 align-middle mr-2\"></i>Message envoyées</a>

                                                <a href=\"{{ path('fos_message_deleted')}}\"  class=\"list-group-item border-0\"><i class=\"mdi mdi-delete font-18 align-middle mr-2\"></i>Message supprimées</a>
                                        </div>

                                        
                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class=\"inbox-rightbar\">

                                      
                           \t\t\t<table class=\"table table-striped\">
                                   <thead>
        <tr>
            <th>{% trans from 'FOSMessageBundle' %}subject{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}starter{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}startdate{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}messages{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}last_message{% endtrans %}</th>
            <th>{% trans from 'FOSMessageBundle' %}actions{% endtrans %}</th>
        </tr>
    </thead>

    <tbody>

    {% if threads %}
        {% for thread in threads %}
            <tr>
                <td>
                    <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\">
                        {{ thread.subject }}
                    </a>

                    {% if not fos_message_is_read(thread) %}
                        ({% trans from 'FOSMessageBundle' %}new{% endtrans %})
                    {% endif %}
                </td>
                <td>
                    {{ thread.createdBy }}
                </td>
                <td>
                    {{ thread.createdAt|date }}
                </td>
                <td>
                    {{ thread.messages|length }}
                </td>
                <td>
                    {% if thread.lastMessage %}
                        <a href=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}#message_{{ thread.lastMessage.id }}\" title=\"{% trans from 'FOSMessageBundle' %}goto_last{% endtrans %}\">
                            →
                        </a>
                        {% trans with {'%date%': thread.lastMessage.createdAt|date} from 'FOSMessageBundle' %}on{% endtrans %}
                        <br />
                        {% trans with {'%sender%': thread.lastMessage.sender|e } from 'FOSMessageBundle' %}by{% endtrans %}
                    {% else %}
                        ----
                    {% endif %}
                </td>
                <td>
                    {% if fos_message_can_delete_thread(thread) %}
                        {% if fos_message_deleted_by_participant(thread) %}
                            {% set formAction %}{{ url('fos_message_thread_undelete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}undelete{% endtrans %}{% endset %}
                        {% else %}
                            {% set formAction %}{{ url('fos_message_thread_delete', {'threadId': thread.id}) }}{% endset %}
                            {% set submitValue %}{% trans from 'FOSMessageBundle' %}delete{% endtrans %}{% endset %}
                        {% endif %}
                        <form action=\"{{ formAction }}\" method=\"post\">
                                <input type=\"submit\" value=\"{{ submitValue }}\" />
                        </form>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% else %}
        <tr>
            <td colspan=\"6\">
                {% trans from 'FOSMessageBundle' %}no_thread{% endtrans %}.
            </td>
        </tr>
    {% endif %}

    </tbody>

</table>

                                        <div class=\"row\">
                                            <div class=\"col-7\">


                                              
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"col-5\">
                                                <div class=\"btn-group float-right\">
                                                    <button type=\"button\" class=\"btn btn-gradient waves-effect\"><i class=\"fa fa-chevron-left\"></i></button>
                                                    <button type=\"button\" class=\"btn btn-gradient waves-effect\"><i class=\"fa fa-chevron-right\"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class=\"clearfix\"></div>
                                </div>

                            </div> <!-- end Col -->

                        </div><!-- End row -->


                    </div> <!-- container -->

                </div> <!-- content -->

          

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


      
        <!-- END wrapper -->


{% endblock %}
", "FOSMessageBundle:Message:inbox.html.twig", "/home/houssem/myApp/app/Resources/FOSMessageBundle/views/Message/inbox.html.twig");
    }
}