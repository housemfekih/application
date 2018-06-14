<?php

/* ::aa.html.twig */
class __TwigTemplate_f4b10107c05498d6f6743220100a6faa6e963c700f94bcb2f3a5609179636f51 extends Twig_Template
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
        // line 1
        echo "
        <title>";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("messenger", array(), "FOSMessageBundle");
        echo "</title>

          <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/css/jquery.steps.css"), "html", null, true);
        echo "\">
 

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
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 36
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" height=\"16\">
                        </span>
                        <i>
                            <img src=\"";
        // line 59
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Karen Robinson</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/\"assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sherry Marshall</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"";
        // line 172
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
        // line 190
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))) {
            // line 191
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-1.jpg"), "html", null, true);
            echo "\" alt=\"user\" class=\"rounded-circle\">
                        ";
        } else {
            // line 192
            echo "\t
\t\t\t\t\t\t\t    <img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle\">
                       ";
        }
        // line 195
        echo "
                                
                                 <span class=\"ml-1\">";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo " <i class=\"mdi mdi-chevron-down\"></i> </span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"";
        // line 210
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
        // line 225
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
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\"><span class=\"lbl\">Create CV</span></a></li>
\t                <li><a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_index");
        echo "\"><span class=\"lbl\">Templates</span></a></li>
\t                 <li><a href=\"";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_index");
        echo "\"><span class=\"lbl\">Groupes</span></a></li>\t\t\t  \t\t\t\t\t   </span></a></li>
\t                 <li><a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_index");
        echo "\"><span class=\"lbl\">Champs</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 291
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_index");
        echo "\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>

                          

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 301
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 302
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
        // line 311
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
        // line 329
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
        // line 358
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 360
        echo "                        ";
        $this->displayBlock('calend', $context, $blocks);
        // line 362
        echo "

                        ";
        // line 364
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 366
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 368
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
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.toastr.js"), "html", null, true);
        echo "\"></script>

       
        <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Jquery-Ui -->
         <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Chart JS -->
        <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/chart.js/chart.bundle.js"), "html", null, true);
        echo "\"></script>



        <!-- init dashboard -->
          <script type=\"text/javascript\" src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.dashboard.init.js"), "html", null, true);
        echo "\"></script>
   
     <!--Form Wizard-->
         <script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/plugins/jquery.steps/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>

        <!--wizard initialization-->
        <script type=\"text/javascript\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.wizard-init.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
\t\t  <!--Summernote js-->
        <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 435
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
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 450
        $this->displayBlock('javascripts', $context, $blocks);
        // line 455
        echo "


 <!-- Required datatable js -->
           <script type=\"text/javascript\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
       <!-- Buttons examples -->
         <script type=\"text/javascript\" src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
           <script type=\"text/javascript\" src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 465
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Responsive examples -->
        <script type=\"text/javascript\" src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 471
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
    }

    // line 358
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 359
        echo "                        ";
    }

    // line 360
    public function block_calend($context, array $blocks = array())
    {
        // line 361
        echo "                        ";
    }

    // line 364
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 365
        echo "                        ";
    }

    // line 366
    public function block_body($context, array $blocks = array())
    {
        // line 367
        echo "                         ";
    }

    // line 450
    public function block_javascripts($context, array $blocks = array())
    {
        // line 451
        echo "\t          
    

             ";
    }

    public function getTemplateName()
    {
        return "::aa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 451,  766 => 450,  762 => 367,  759 => 366,  755 => 365,  752 => 364,  748 => 361,  745 => 360,  741 => 359,  738 => 358,  712 => 471,  708 => 470,  703 => 468,  699 => 467,  695 => 466,  691 => 465,  687 => 464,  683 => 463,  679 => 462,  674 => 460,  670 => 459,  664 => 455,  662 => 450,  658 => 449,  654 => 448,  638 => 435,  634 => 434,  630 => 433,  626 => 432,  621 => 430,  617 => 429,  611 => 426,  605 => 423,  599 => 420,  591 => 415,  586 => 413,  581 => 411,  577 => 410,  573 => 409,  569 => 408,  565 => 407,  561 => 406,  557 => 405,  553 => 404,  546 => 400,  542 => 399,  509 => 368,  506 => 366,  504 => 364,  500 => 362,  497 => 360,  495 => 358,  463 => 329,  442 => 311,  430 => 302,  426 => 301,  413 => 291,  409 => 290,  405 => 289,  401 => 288,  397 => 287,  332 => 225,  314 => 210,  306 => 205,  295 => 197,  291 => 195,  286 => 193,  283 => 192,  277 => 191,  275 => 190,  254 => 172,  244 => 165,  234 => 158,  132 => 59,  126 => 56,  103 => 36,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  73 => 24,  68 => 22,  64 => 21,  58 => 18,  52 => 15,  46 => 12,  40 => 9,  33 => 5,  27 => 2,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::aa.html.twig", "/home/houssem/myApp/app/Resources/views/aa.html.twig");
    }
}
