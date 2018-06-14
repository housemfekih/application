<?php

/* ::admiSn.html.twig */
class __TwigTemplate_d4c70d64f1b8b5bb318893b5cbb7dd9456c9cb076dda36cb13be2792caef4b65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'calend' => array($this, 'block_calend'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admiSn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admiSn.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
\t<meta charset=\"utf-8\" />
\t\t   <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>

        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/favicon.ico"), "html", null, true);
        echo "\">

         <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.css"), "html", null, true);
        echo "\">

        <!--calendar css-->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\">

        <!-- Summernote css -->
       <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">

        <!-- DataTables -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <!-- Responsive datatable examples -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/responsive.bootstrap4.min.css"), "html", null, true);
        echo "\">
      
        <!-- App css -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

    </head>


    <body>


<div class=\"btn btn-success waves-effect waves-light btn-sm\" id=\"toastr-three\"></div>

       <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <a href=\"index.html\" class=\"logo\">
                        <span>
                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" height=\"16\">
                        </span>
                        <i>
                            <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo_sm.png"), "html", null, true);
        echo "\" alt=\"\" height=\"28\">
                        </i>
                    </a>
                </div>

                <nav class=\"navbar-custom\">

                    <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">
                      

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-bell noti-icon\"></i>
                                <span class=\"badge badge-danger badge-pill noti-icon-badge\">4</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"m-0\"><span class=\"float-right\"><a href=\"\" class=\"text-dark\"><small>Clear All</small></a> </span>Notification</h6>
                                </div>

                                <div class=\"slimscroll\" style=\"max-height: 190px;\">
                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-comment-account-outline\"></i></div>
                                        <p class=\"notify-details\">Caleb Flakelar commented on Admin<small class=\"text-muted\">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-info\"><i class=\"mdi mdi-account-plus\"></i></div>
                                        <p class=\"notify-details\">New user registered.<small class=\"text-muted\">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-danger\"><i class=\"mdi mdi-heart\"></i></div>
                                        <p class=\"notify-details\">Carlos Crouch liked <b>Admin</b><small class=\"text-muted\">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-warning\"><i class=\"mdi mdi-comment-account-outline\"></i></div>
                                        <p class=\"notify-details\">Caleb Flakelar commented on Admin<small class=\"text-muted\">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-purple\"><i class=\"mdi mdi-account-plus\"></i></div>
                                        <p class=\"notify-details\">New user registered.<small class=\"text-muted\">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-custom\"><i class=\"mdi mdi-heart\"></i></div>
                                        <p class=\"notify-details\">Carlos Crouch liked <b>Admin</b><small class=\"text-muted\">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-speech-bubble noti-icon\"></i>
                                <span class=\"badge badge-light badge-pill noti-icon-badge\">6</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"m-0\"><span class=\"float-right\"><a href=\"\" class=\"text-dark\"><small>Clear All</small></a> </span>Chat</h6>
                                </div>

                                <div class=\"slimscroll\" style=\"max-height: 190px;\">
                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Cristina Pride</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sam Garret</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Karen Robinson</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/\"assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sherry Marshall</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Shawn Millard</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle waves-effect waves-light nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">

                         ";
        // line 187
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()))) {
            // line 188
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-1.jpg"), "html", null, true);
            echo "\" alt=\"user\" class=\"rounded-circle\">
                        ";
        } else {
            // line 189
            echo "\t
\t\t\t\t\t\t\t    <img src=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()))), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle\">
                       ";
        }
        // line 192
        echo "
                                
                                 <span class=\"ml-1\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <i class=\"mdi mdi-chevron-down\"></i> </span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href=\"";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-cog\"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-help\"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-lock\"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href=\"";
        // line 222
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout_page");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-power\"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class=\"list-inline menu-left mb-0\">
                        <li class=\"float-left\">
                            <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                <i class=\"dripicons-menu\"></i>
                            </button>
                        </li>
                        <li class=\"hide-phone app-search\">
                            <form role=\"search\" class=\"\">
                                <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                <a href=\"\"><i class=\"fa fa-search\"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <div class=\"slimscroll-menu\" id=\"remove-scroll\">

                    <!--- Sidemenu -->
                    <div id=\"sidebar-menu\">
                        <!-- Left Menu Start -->
                        <ul class=\"metismenu\" id=\"side-menu\">
                            <li class=\"menu-title\">Navigation</li>
                            <li>
                                <a href=\"index.html\">
                                    <i class=\"fi-air-play\"></i><span class=\"badge badge-danger badge-pill pull-right\">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                         

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Icons </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"icons-materialdesign.html\">Material Design</a></li>
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                    <li><a href=\"icons-feather.html\">Feather Icons</a></li>
                                </ul>
                            </li>


                 <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Tools </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                    <li><a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\"><span class=\"lbl\">Create CV</span></a></li>
\t                <li><a href=\"";
        // line 285
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_index");
        echo "\"><span class=\"lbl\">Templates</span></a></li>
\t                 <li><a href=\"";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_index");
        echo "\"><span class=\"lbl\">Groupes</span></a></li>\t\t\t  \t\t\t\t\t   </span></a></li>
\t                 <li><a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_index");
        echo "\"><span class=\"lbl\">Champs</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_index");
        echo "\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>

                          

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 298
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_new");
        echo "\">compose</a></li>
                                    <li><a href=\"email-compose.html\">Compose Email</a></li>
                                </ul>
                            </li>

                               <li>
                                <a href=\"javascript: void(0);\"><i class=\"mdi mdi-account-circle
\"></i><span> Users </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 308
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Liste users</a></li>
                             </ul>
                            </li>


                            
                            

                            <li class=\"menu-title\">More</li>

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-map\"></i> <span> Maps </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"maps-google.html\">Google Maps</a></li>
                                    <li><a href=\"maps-vector.html\">Vector Maps</a></li>
                                    <li><a href=\"maps-mapael.html\">Mapael Maps</a></li>
                                </ul>
                            </li>
                            <li><a href=\"";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calend_page");
        echo "\"><i class=\"fi-clock\"></i> <span>Calendar</span> </a></li>

                            


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class=\"clearfix\"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class=\"content-page\">
                <!-- Start content -->
               
                <div class=\"content\">
                    <div class=\"container-fluid\">
   
                       
                        ";
        // line 355
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 357
        echo "                        ";
        $this->displayBlock('calend', $context, $blocks);
        // line 359
        echo "

                        ";
        // line 361
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 363
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 365
        echo "     
                        <!-- end row -->


                       

                       

                           


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

      <!-- Toastr js -->
         <script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.toastr.js"), "html", null, true);
        echo "\"></script>
      

        <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Jquery-Ui -->
         <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart JS -->
        <script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/chart.js/chart.bundle.js"), "html", null, true);
        echo "\"></script>

        <!-- init dashboard -->
          <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.dashboard.init.js"), "html", null, true);
        echo "\"></script>
   
        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
\t\t  <!--Summernote js-->
        <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.calendar.js"), "html", null, true);
        echo "\"></script>
  <script>
            jQuery(document).ready(function(){
                \$('.summernote').summernote({
                    height: 150,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>


\t<script src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 439
        $this->displayBlock('javascripts', $context, $blocks);
        // line 444
        echo "


 <!-- Required datatable js -->
           <script type=\"text/javascript\" src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Buttons examples -->
        <script type=\"text/javascript\" src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
           <script type=\"text/javascript\" src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Responsive examples -->
        <script type=\"text/javascript\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/responsive.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').DataTable();

                //Buttons examples
                var table = \$('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
      

    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 355
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 356
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 357
    public function block_calend($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        // line 358
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 361
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 362
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 363
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 364
        echo "                         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 439
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 440
        echo "\t          
    

             ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::admiSn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 440,  808 => 439,  798 => 364,  789 => 363,  779 => 362,  770 => 361,  760 => 358,  751 => 357,  741 => 356,  732 => 355,  701 => 460,  697 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  663 => 449,  659 => 448,  653 => 444,  651 => 439,  647 => 438,  643 => 437,  627 => 424,  623 => 423,  619 => 422,  615 => 421,  610 => 419,  606 => 418,  600 => 415,  594 => 412,  589 => 410,  584 => 408,  580 => 407,  576 => 406,  572 => 405,  568 => 404,  564 => 403,  560 => 402,  556 => 401,  549 => 397,  545 => 396,  512 => 365,  509 => 363,  507 => 361,  503 => 359,  500 => 357,  498 => 355,  466 => 326,  445 => 308,  433 => 299,  429 => 298,  416 => 288,  412 => 287,  408 => 286,  404 => 285,  400 => 284,  335 => 222,  317 => 207,  309 => 202,  298 => 194,  294 => 192,  289 => 190,  286 => 189,  280 => 188,  278 => 187,  257 => 169,  247 => 162,  237 => 155,  135 => 56,  129 => 53,  106 => 33,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  79 => 24,  74 => 22,  70 => 21,  64 => 18,  58 => 15,  52 => 12,  46 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
\t<meta charset=\"utf-8\" />
\t\t   <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\" />
        <title>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</title>

        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"{{ asset ('template/assets/images/favicon.ico')}}\">

         <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/jquery-toastr/jquery.toast.min.css')}}\">

        <!--calendar css-->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/fullcalendar/css/fullcalendar.min.css')}}\">

        <!-- Summernote css -->
       <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/summernote/summernote-bs4.css')}}\">

        <!-- DataTables -->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/datatables/dataTables.bootstrap4.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/datatables/buttons.bootstrap4.min.css')}}\">
        <!-- Responsive datatable examples -->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/datatables/responsive.bootstrap4.min.css')}}\">
      
        <!-- App css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/chosen.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/metismenu.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/style.css')}}\">

        <script src=\"{{ asset ('template/assets/js/modernizr.min.js')}}\"></script>

    </head>


    <body>


<div class=\"btn btn-success waves-effect waves-light btn-sm\" id=\"toastr-three\"></div>

       <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <a href=\"index.html\" class=\"logo\">
                        <span>
                            <img src=\"{{ asset ('template/assets/images/logo.png')}}\" alt=\"\" height=\"16\">
                        </span>
                        <i>
                            <img src=\"{{ asset ('template/assets/images/logo_sm.png')}}\" alt=\"\" height=\"28\">
                        </i>
                    </a>
                </div>

                <nav class=\"navbar-custom\">

                    <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">
                      

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-bell noti-icon\"></i>
                                <span class=\"badge badge-danger badge-pill noti-icon-badge\">4</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"m-0\"><span class=\"float-right\"><a href=\"\" class=\"text-dark\"><small>Clear All</small></a> </span>Notification</h6>
                                </div>

                                <div class=\"slimscroll\" style=\"max-height: 190px;\">
                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-comment-account-outline\"></i></div>
                                        <p class=\"notify-details\">Caleb Flakelar commented on Admin<small class=\"text-muted\">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-info\"><i class=\"mdi mdi-account-plus\"></i></div>
                                        <p class=\"notify-details\">New user registered.<small class=\"text-muted\">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-danger\"><i class=\"mdi mdi-heart\"></i></div>
                                        <p class=\"notify-details\">Carlos Crouch liked <b>Admin</b><small class=\"text-muted\">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-warning\"><i class=\"mdi mdi-comment-account-outline\"></i></div>
                                        <p class=\"notify-details\">Caleb Flakelar commented on Admin<small class=\"text-muted\">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-purple\"><i class=\"mdi mdi-account-plus\"></i></div>
                                        <p class=\"notify-details\">New user registered.<small class=\"text-muted\">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon bg-custom\"><i class=\"mdi mdi-heart\"></i></div>
                                        <p class=\"notify-details\">Carlos Crouch liked <b>Admin</b><small class=\"text-muted\">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-speech-bubble noti-icon\"></i>
                                <span class=\"badge badge-light badge-pill noti-icon-badge\">6</span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right dropdown-lg\">

                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"m-0\"><span class=\"float-right\"><a href=\"\" class=\"text-dark\"><small>Clear All</small></a> </span>Chat</h6>
                                </div>

                                <div class=\"slimscroll\" style=\"max-height: 190px;\">
                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Cristina Pride</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sam Garret</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"{{ asset ('template/assets/images/users/avatar-4.jpg')}}\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Karen Robinson</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src={{ asset ('template/\"assets/images/users/avatar-5.jpg')}}\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sherry Marshall</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"{{ asset ('template/assets/images/users/avatar-6.jpg')}}\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Shawn Millard</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle waves-effect waves-light nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">

                         {% if app.user.avatar is null %}
                               <img src=\"{{ asset ('template/assets/images/users/avatar-1.jpg')}}\" alt=\"user\" class=\"rounded-circle\">
                        {% else %}\t
\t\t\t\t\t\t\t    <img src=\"{{ asset ('public/uploads/avatars/' ~ app.user.avatar) }}\" alt=\"avatar\" class=\"rounded-circle\">
                       {% endif %}

                                
                                 <span class=\"ml-1\">{{ app.user.username }} <i class=\"mdi mdi-chevron-down\"></i> </span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href=\"{{ path('fos_user_profile_show')}}\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"{{ path('fos_user_profile_edit')}}\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-cog\"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-help\"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-lock\"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href=\"{{ path('logout_page')}}\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-power\"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>

                    <ul class=\"list-inline menu-left mb-0\">
                        <li class=\"float-left\">
                            <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                <i class=\"dripicons-menu\"></i>
                            </button>
                        </li>
                        <li class=\"hide-phone app-search\">
                            <form role=\"search\" class=\"\">
                                <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                <a href=\"\"><i class=\"fa fa-search\"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <div class=\"slimscroll-menu\" id=\"remove-scroll\">

                    <!--- Sidemenu -->
                    <div id=\"sidebar-menu\">
                        <!-- Left Menu Start -->
                        <ul class=\"metismenu\" id=\"side-menu\">
                            <li class=\"menu-title\">Navigation</li>
                            <li>
                                <a href=\"index.html\">
                                    <i class=\"fi-air-play\"></i><span class=\"badge badge-danger badge-pill pull-right\">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                         

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Icons </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"icons-materialdesign.html\">Material Design</a></li>
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                    <li><a href=\"icons-feather.html\">Feather Icons</a></li>
                                </ul>
                            </li>


                 <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Tools </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                    <li><a href=\"{{ path('cv_index') }}\"><span class=\"lbl\">Create CV</span></a></li>
\t                <li><a href=\"{{ path('template_index') }}\"><span class=\"lbl\">Templates</span></a></li>
\t                 <li><a href=\"{{ path('groupe_index') }}\"><span class=\"lbl\">Groupes</span></a></li>\t\t\t  \t\t\t\t\t   </span></a></li>
\t                 <li><a href=\"{{ path('champ_index') }}\"><span class=\"lbl\">Champs</span></a></li>
\t\t\t\t\t<li><a href=\"{{ path('section_index') }}\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>

                          

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"{{ path('fos_message_inbox')}}\">Inbox</a></li>
                                    <li><a href=\"{{ path('fos_message_thread_new')}}\">compose</a></li>
                                    <li><a href=\"email-compose.html\">Compose Email</a></li>
                                </ul>
                            </li>

                               <li>
                                <a href=\"javascript: void(0);\"><i class=\"mdi mdi-account-circle
\"></i><span> Users </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"{{ path('user_index')}}\">Liste users</a></li>
                             </ul>
                            </li>


                            
                            

                            <li class=\"menu-title\">More</li>

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-map\"></i> <span> Maps </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"maps-google.html\">Google Maps</a></li>
                                    <li><a href=\"maps-vector.html\">Vector Maps</a></li>
                                    <li><a href=\"maps-mapael.html\">Mapael Maps</a></li>
                                </ul>
                            </li>
                            <li><a href=\"{{ path('calend_page')}}\"><i class=\"fi-clock\"></i> <span>Calendar</span> </a></li>

                            


                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class=\"clearfix\"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class=\"content-page\">
                <!-- Start content -->
               
                <div class=\"content\">
                    <div class=\"container-fluid\">
   
                       
                        {% block fos_user_content %}
                        {% endblock %}
                        {% block calend %}
                        {% endblock %}


                        {% block fos_message_content %}
                        {% endblock %}
                        {% block body %}
                         {% endblock %}
     
                        <!-- end row -->


                       

                       

                           


                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

      <!-- Toastr js -->
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/jquery-toastr/jquery.toast.min.js')}}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.toastr.js')}}\"></script>
      

        <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/waypoints/lib/jquery.waypoints.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/counterup/jquery.counterup.min.js')}}\"></script>
    <!-- Jquery-Ui -->
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>
        <!-- Chart JS -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/chart.js/chart.bundle.js')}}\"></script>

        <!-- init dashboard -->
          <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.dashboard.init.js')}}\"></script>
   
        <!-- App js -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.core.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.app.js')}}\"></script>
\t\t  <!--Summernote js-->
        <script src=\"{{ asset ('template/plugins/summernote/summernote-bs4.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/moment/moment.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/fullcalendar/js/fullcalendar.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.calendar.js')}}\"></script>
  <script>
            jQuery(document).ready(function(){
                \$('.summernote').summernote({
                    height: 150,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>


\t<script src=\"{{ asset ('js/chosen.jquery.min.js')}}\"></script>
\t<script src=\"{{ asset ('js/prism.js')}}\"></script>
            {% block javascripts %}
\t          
    

             {% endblock %}



 <!-- Required datatable js -->
           <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
          <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/dataTables.bootstrap4.min.js')}}\"></script>
        <!-- Buttons examples -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
          <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/buttons.bootstrap4.min.js')}}\"></script>
           <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/jszip.min.js')}}\"></script>
          <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/pdfmake.min.js')}}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/vfs_fonts.js')}}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/buttons.html5.min.js')}}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/buttons.print.min.js')}}\"></script>
        <!-- Responsive examples -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/responsive.bootstrap4.min.js')}}\"></script>
        <script type=\"text/javascript\">
            \$(document).ready(function() {
                \$('#datatable').DataTable();

                //Buttons examples
                var table = \$('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
      

    </body>
</html>
", "::admiSn.html.twig", "/home/houssem/myApp/app/Resources/views/admiSn.html.twig");
    }
}
