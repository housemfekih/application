<?php

/* ::user.html.twig */
class __TwigTemplate_40a3544731fae63266e25ef6c32b6ba955f3ba7af8dcb46570cfeb00bd87a14f extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.css"), "html", null, true);
        echo "\">
        <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/css/jquery.steps.css"), "html", null, true);
        echo "\">
 
        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/favicon.ico"), "html", null, true);
        echo "\">
        <!-- Summernote css -->
         <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
        <!-- DataTables -->
         <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.css"), "html", null, true);
        echo "\">
        <!--calendar css-->
         <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/css/fullcalendar.min.css"), "html", null, true);
        echo "\">

        <!-- App css -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

         


        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- Top Bar Start -->
            <div class=\"topbar\">

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <a href=\"index.html\" class=\"logo\">
                        <span>
                            <img src=\"assets/images/logo.png\" alt=\"\" height=\"16\">
                        </span>
                        <i>
                            <img src=\"assets/images/logo_sm.png\" alt=\"\" height=\"28\">
                        </i>
                    </a>
                </div>

                <nav class=\"navbar-custom\">

                    <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">
                      

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-bell noti-icon\"></i>
                                <span class=\"badge badge-danger badge-pill noti-icon-badge\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(), "html", null, true);
        echo "</span>
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
        // line 134
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))) {
            // line 135
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-1.jpg"), "html", null, true);
            echo "\" alt=\"user\" class=\"rounded-circle\">
                        ";
        } else {
            // line 136
            echo "\t
\t\t\t\t\t\t\t    <img src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle\">
                       ";
        }
        // line 139
        echo "
                                
                                 <span class=\"ml-1\">";
        // line 141
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
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"";
        // line 158
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
        // line 173
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
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\"><span class=\"lbl\">Create CV</span></a></li>
\t                          <li><a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_index");
        echo "\"><span class=\"lbl\">Templates</span></a></li>
\t                          <li><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_index");
        echo "\"><span class=\"lbl\">Groupes</span></a></li>\t\t\t  \t\t\t\t\t   </span></a></li>
\t                          <li><a href=\"";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_index");
        echo "\"><span class=\"lbl\">Champs</span></a></li>
\t\t\t\t\t         <li><a href=\"";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_index");
        echo "\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>
                             <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 245
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
        // line 254
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Liste users</a></li>
                             </ul>
                            </li>
                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"email-inbox.html\">Inbox</a></li>
                                    <li><a href=\"email-read.html\">Read Email</a></li>
                                    <li><a href=\"email-compose.html\">Compose Email</a></li>
                                </ul>
                            </li>

   

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
        // line 295
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 297
        echo "                        ";
        $this->displayBlock('calend', $context, $blocks);
        // line 299
        echo "

                        ";
        // line 301
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 303
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 305
        echo "     
                    


                     



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



         <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>



        <!--Form Wizard-->
        <script type=\"text/javascript\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>

       

         <!-- Required datatable js -->
        <script type=\"text/javascript\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
         <!-- Buttons examples -->
        <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>

        <!--Summernote js-->
        <script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
\t     <!--Choosen js-->
        <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js"), "html", null, true);
        echo "\"></script>
\t    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.loupe.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        
          ";
        // line 371
        $this->displayBlock('javascripts', $context, $blocks);
        echo "  

        <!-- Jquery-Ui -->
        <script type=\"text/javascript\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <!-- SCRIPTS -->
        <script type=\"text/javascript\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.calendar.js"), "html", null, true);
        echo "\"></script>


        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
\t\t <!--wizard initialization-->
        <!-- <script type=\"text/javascript\" src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.wizard-init.js"), "html", null, true);
        echo "\"></script> -->
";
    }

    // line 295
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 296
        echo "                        ";
    }

    // line 297
    public function block_calend($context, array $blocks = array())
    {
        // line 298
        echo "                        ";
    }

    // line 301
    public function block_fos_message_content($context, array $blocks = array())
    {
        // line 302
        echo "                        ";
    }

    // line 303
    public function block_body($context, array $blocks = array())
    {
        // line 304
        echo "                         ";
    }

    // line 371
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  629 => 371,  625 => 304,  622 => 303,  618 => 302,  615 => 301,  611 => 298,  608 => 297,  604 => 296,  601 => 295,  595 => 386,  590 => 384,  586 => 383,  579 => 379,  575 => 378,  571 => 377,  565 => 374,  559 => 371,  553 => 368,  549 => 367,  545 => 366,  540 => 364,  534 => 361,  530 => 360,  526 => 359,  522 => 358,  518 => 357,  514 => 356,  510 => 355,  505 => 353,  501 => 352,  493 => 347,  485 => 342,  481 => 341,  477 => 340,  473 => 339,  469 => 338,  465 => 337,  461 => 336,  457 => 335,  425 => 305,  422 => 303,  420 => 301,  416 => 299,  413 => 297,  411 => 295,  367 => 254,  355 => 245,  351 => 244,  341 => 237,  337 => 236,  333 => 235,  329 => 234,  325 => 233,  262 => 173,  244 => 158,  236 => 153,  221 => 141,  217 => 139,  212 => 137,  209 => 136,  203 => 135,  201 => 134,  135 => 71,  98 => 37,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  68 => 25,  63 => 23,  59 => 22,  54 => 20,  49 => 18,  43 => 15,  38 => 13,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::user.html.twig", "/home/houssem/myApp/app/Resources/views/user.html.twig");
    }
}
