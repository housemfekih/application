<?php

/* user2.txt */
class __TwigTemplate_07bf61a3a6591876a22e990f97415b84122056324e054aaf598139c3a4383793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Welcome ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array());
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/favicon.ico");
        echo "\">

    <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.css");
        echo "\">


        <!-- Summernote css -->
       <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.css");
        echo "\">

        <!-- DataTables -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.css");
        echo "\">
        <!-- Responsive datatable examples -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/responsive.bootstrap4.min.css");
        echo "\">
      
        <!-- App css -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css");
        echo "\">

        <script src=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/modernizr.min.js");
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
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo.png");
        echo "\" alt=\"\" height=\"16\">
                        </span>
                        <i>
                            <img src=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo_sm.png");
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
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-4.jpg");
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Karen Robinson</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=";
        // line 164
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/\"assets/images/users/avatar-5.jpg");
        echo "\" class=\"img-fluid rounded-circle\" alt=\"\" /> </div>
                                        <p class=\"notify-details\">Sherry Marshall</p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                        <div class=\"notify-icon\"><img src=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-6.jpg");
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
        // line 189
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array()))) {
            // line 190
            echo "                               <img src=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-1.jpg");
            echo "\" alt=\"user\" class=\"rounded-circle\">
                        ";
        } else {
            // line 191
            echo "\t
\t\t\t\t\t\t\t    <img src=\"";
            // line 192
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "avatar", array())));
            echo "\" alt=\"avatar\" class=\"rounded-circle\">
                       ";
        }
        // line 194
        echo "
                                
                                 <span class=\"ml-1\">";
        // line 196
        echo $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array());
        echo " <i class=\"mdi mdi-chevron-down\"></i> </span>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                <!-- item-->
                                <div class=\"dropdown-item noti-title\">
                                    <h6 class=\"text-overflow m-0\">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href=\"";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"";
        // line 209
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
        // line 224
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
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\"><span class=\"lbl\">Create CV</span></a></li>
\t                <li><a href=\"";
        // line 287
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("templates_index");
        echo "\"><span class=\"lbl\">Templates</span></a></li>
\t                 <li><a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupes_index");
        echo "\"><span class=\"lbl\">Groupes</span></a></li>\t\t\t  \t\t\t\t\t   </span></a></li>
\t                 <li><a href=\"";
        // line 289
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champs_index");
        echo "\"><span class=\"lbl\">Champs</span></a></li>
\t\t\t\t\t<li><a href=\"";
        // line 290
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sections_index");
        echo "\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>

                          

                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 300
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 301
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
        // line 310
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Inbox</a></li>
                                    <li><a href=\"";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_new");
        echo "\">compose</a></li>
                                    <li><a href=\"email-compose.html\">Compose Email</a></li>
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

                            <li><a href=\"calendar.html\"><i class=\"fi-clock\"></i> <span>Calendar</span> </a></li>

                            


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
        // line 360
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 362
        echo "
                        ";
        // line 363
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 365
        $this->displayBlock('body', $context, $blocks);
        // line 367
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
        // line 398
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.js");
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 399
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.toastr.js");
        echo "\"></script>


        <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 403
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 404
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 405
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 407
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 408
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 410
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js");
        echo "\"></script>

        <!-- Chart JS -->
        <script type=\"text/javascript\" src=\"";
        // line 413
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/chart.js/chart.bundle.js");
        echo "\"></script>

        <!-- init dashboard -->
          <script type=\"text/javascript\" src=\"";
        // line 416
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.dashboard.init.js");
        echo "\"></script>

        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 420
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js");
        echo "\"></script>
\t\t  <!--Summernote js-->
        <script src=\"";
        // line 422
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.min.js");
        echo "\"></script>

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


\t<script src=\"";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 437
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js");
        echo "\"></script>
            ";
        // line 438
        $this->displayBlock('javascripts', $context, $blocks);
        // line 441
        echo "


 <!-- Required datatable js -->
           <script type=\"text/javascript\" src=\"";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js");
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js");
        echo "\"></script>
        <!-- Buttons examples -->
        <script type=\"text/javascript\" src=\"";
        // line 448
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.buttons.min.js");
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 449
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.js");
        echo "\"></script>
           <script type=\"text/javascript\" src=\"";
        // line 450
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jszip.min.js");
        echo "\"></script>
          <script type=\"text/javascript\" src=\"";
        // line 451
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/pdfmake.min.js");
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 452
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/vfs_fonts.js");
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.html5.min.js");
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.print.min.js");
        echo "\"></script>
        <!-- Responsive examples -->
        <script type=\"text/javascript\" src=\"";
        // line 456
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.responsive.min.js");
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 457
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/responsive.bootstrap4.min.js");
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

    // line 360
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    // line 363
    public function block_fos_message_content($context, array $blocks = array())
    {
    }

    // line 365
    public function block_body($context, array $blocks = array())
    {
        // line 366
        echo "       ";
    }

    // line 438
    public function block_javascripts($context, array $blocks = array())
    {
        // line 439
        echo "\t
             ";
    }

    public function getTemplateName()
    {
        return "user2.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  717 => 439,  714 => 438,  710 => 366,  707 => 365,  702 => 363,  697 => 360,  673 => 457,  669 => 456,  664 => 454,  660 => 453,  656 => 452,  652 => 451,  648 => 450,  644 => 449,  640 => 448,  635 => 446,  631 => 445,  625 => 441,  623 => 438,  619 => 437,  615 => 436,  598 => 422,  593 => 420,  589 => 419,  583 => 416,  577 => 413,  571 => 410,  567 => 409,  563 => 408,  559 => 407,  555 => 406,  551 => 405,  547 => 404,  543 => 403,  536 => 399,  532 => 398,  499 => 367,  497 => 365,  495 => 363,  492 => 362,  490 => 360,  438 => 311,  434 => 310,  422 => 301,  418 => 300,  405 => 290,  401 => 289,  397 => 288,  393 => 287,  389 => 286,  324 => 224,  306 => 209,  298 => 204,  287 => 196,  283 => 194,  278 => 192,  275 => 191,  269 => 190,  267 => 189,  246 => 171,  236 => 164,  226 => 157,  124 => 58,  118 => 55,  95 => 35,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  68 => 26,  63 => 24,  59 => 23,  53 => 20,  46 => 16,  40 => 13,  30 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user2.txt", "/home/houssem/myApp/app/Resources/views/user2.txt");
    }
}
