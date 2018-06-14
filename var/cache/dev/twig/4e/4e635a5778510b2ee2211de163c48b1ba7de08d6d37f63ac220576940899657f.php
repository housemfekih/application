<?php

/* ::calendrier.html.twig */
class __TwigTemplate_fc92e6d922ba2eeb0aa763ab805bf78e9664303af504697e74de0bb05f736bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "::calendrier.html.twig", 1);
        $this->blocks = array(
            'calend' => array($this, 'block_calend'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::calendrier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_calend($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        // line 3
        echo "
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Calendar</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item active\">Calendar</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class=\"row\">
                            <div class=\"col-lg-12\">

                                <div class=\"card-box\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-gradient btn-block waves-effect m-t-20 waves-light\">
                                                <i class=\"fa fa-plus\"></i> Create New
                                            </a>
                                            <div id=\"external-events\" class=\"m-t-20\">
                                                <br>
                                                <p class=\"text-muted\">Drag and drop your event or click in the calendar</p>
                                                <div class=\"external-event bg-success\" data-class=\"bg-success\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>New Theme Release
                                                </div>
                                                <div class=\"external-event bg-info\" data-class=\"bg-info\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>My Event
                                                </div>
                                                <div class=\"external-event bg-warning\" data-class=\"bg-warning\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>Meet manager
                                                </div>
                                                <div class=\"external-event bg-purple\" data-class=\"bg-purple\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class=\"checkbox checkbox-primary mt-3\">
                                                <input type=\"checkbox\" id=\"drop-remove\">
                                                <label for=\"drop-remove\">
                                                    Remove after drop
                                                </label>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class=\"col-md-9\">
                                            <div id=\"calendar\"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class=\"modal fade none-border\" id=\"event-modal\" tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Add New Event</h4>
                                            </div>
                                            <div class=\"modal-body p-b-0\"></div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                                <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class=\"modal fade none-border\" id=\"add-category\" tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Add a category</h4>
                                            </div>
                                            <div class=\"modal-body p-b-0\">
                                                <form role=\"form\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Category Name</label>
                                                        <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\"/>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Choose Category Color</label>
                                                        <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                            <option value=\"success\">Success</option>
                                                            <option value=\"danger\">Danger</option>
                                                            <option value=\"info\">Info</option>
                                                            <option value=\"pink\">Pink</option>
                                                            <option value=\"primary\">Primary</option>
                                                            <option value=\"warning\">Warning</option>
                                                            <option value=\"inverse\">Inverse</option>
                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    
      

            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
 {% block calend %}

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Calendar</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item active\">Calendar</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class=\"row\">
                            <div class=\"col-lg-12\">

                                <div class=\"card-box\">
                                    <div class=\"row\">
                                        <div class=\"col-md-3\">
                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#add-category\" class=\"btn btn-lg btn-gradient btn-block waves-effect m-t-20 waves-light\">
                                                <i class=\"fa fa-plus\"></i> Create New
                                            </a>
                                            <div id=\"external-events\" class=\"m-t-20\">
                                                <br>
                                                <p class=\"text-muted\">Drag and drop your event or click in the calendar</p>
                                                <div class=\"external-event bg-success\" data-class=\"bg-success\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>New Theme Release
                                                </div>
                                                <div class=\"external-event bg-info\" data-class=\"bg-info\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>My Event
                                                </div>
                                                <div class=\"external-event bg-warning\" data-class=\"bg-warning\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>Meet manager
                                                </div>
                                                <div class=\"external-event bg-purple\" data-class=\"bg-purple\">
                                                    <i class=\"mdi mdi-checkbox-blank-circle mr-2 vertical-middle\"></i>Create New theme
                                                </div>
                                            </div>

                                            <!-- checkbox -->
                                            <div class=\"checkbox checkbox-primary mt-3\">
                                                <input type=\"checkbox\" id=\"drop-remove\">
                                                <label for=\"drop-remove\">
                                                    Remove after drop
                                                </label>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class=\"col-md-9\">
                                            <div id=\"calendar\"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class=\"modal fade none-border\" id=\"event-modal\" tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Add New Event</h4>
                                            </div>
                                            <div class=\"modal-body p-b-0\"></div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-success save-event waves-effect waves-light\">Create event</button>
                                                <button type=\"button\" class=\"btn btn-danger delete-event waves-effect waves-light\" data-dismiss=\"modal\">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class=\"modal fade none-border\" id=\"add-category\" tabindex=\"-1\">
                                    <div class=\"modal-dialog\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                <h4 class=\"modal-title\">Add a category</h4>
                                            </div>
                                            <div class=\"modal-body p-b-0\">
                                                <form role=\"form\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Category Name</label>
                                                        <input class=\"form-control form-white\" placeholder=\"Enter name\" type=\"text\" name=\"category-name\"/>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Choose Category Color</label>
                                                        <select class=\"form-control form-white\" data-placeholder=\"Choose a color...\" name=\"category-color\">
                                                            <option value=\"success\">Success</option>
                                                            <option value=\"danger\">Danger</option>
                                                            <option value=\"info\">Info</option>
                                                            <option value=\"pink\">Pink</option>
                                                            <option value=\"primary\">Primary</option>
                                                            <option value=\"warning\">Warning</option>
                                                            <option value=\"inverse\">Inverse</option>
                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary waves-effect\" data-dismiss=\"modal\">Close</button>
                                                <button type=\"button\" class=\"btn btn-danger waves-effect waves-light save-category\" data-dismiss=\"modal\">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->

                    
      

            </div>
                        {% endblock %}", "::calendrier.html.twig", "/home/houssem/Application/app/Resources/views/calendrier.html.twig");
    }
}
