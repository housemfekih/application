<?php

/* ::user.html.twig */
class __TwigTemplate_fb2d2d22c58249c2493daa76e51683ff7ac9ea69c90b21f2c2b4af0d9f0a4149 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>ADMIN</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <!-- Editable css -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/bootstrap-xeditable/css/bootstrap-editable.css"), "html", null, true);
        echo "\">
        <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-toastr/jquery.toast.min.css"), "html", null, true);
        echo "\">
        <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"";
        // line 16
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
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" height=\"50\">
                        </span>
                        <i>
                            <img src=\"";
        // line 57
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
                                <span class=\"badge badge-light badge-pill noti-icon-badge\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(), "html", null, true);
        echo "</span>
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
                                        <p class=\"notify-details\">
                                    
                                    
                                        
                                        </p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">
                                        

                                        </p>
                                    </a>

                                
                                   

                                <!-- All-->
                                <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle waves-effect waves-light nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                
                                
                                  ";
        // line 140
        if ((null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()))) {
            // line 141
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/images/users/avatar-1.jpg"), "html", null, true);
            echo "\" alt=\"user\" class=\"rounded-circle\">
                        ";
        } else {
            // line 142
            echo "  
                                <img src=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("public/uploads/avatars/" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "avatar", array()))), "html", null, true);
            echo "\" alt=\"avatar\" class=\"rounded-circle\">
                       ";
        }
        // line 145
        echo "
                                
                                 <span class=\"ml-1\">";
        // line 147
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
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"dropdown-item notify-item\">
                                    <i class=\"fi-head\"></i> <span>My Account</span>
                                </a>

                                <!-- item-->
                                       <a href=\"";
        // line 164
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
        // line 179
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
                                <a href=\"";
        // line 220
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
        echo "\">
                                    <i class=\"fi-air-play\"></i><span class=\"badge badge-danger badge-pill pull-right\">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                         


                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Tools </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                               <li><a href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv_index");
        echo "\"><span class=\"lbl\">Create CV</span></a></li>
                              <li><a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_index");
        echo "\"><span class=\"lbl\">Templates</span></a></li>
                              <li><a href=\"";
        // line 233
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groupe_index");
        echo "\"><span class=\"lbl\">Groupes</span></a></li>                                   </span></a></li>
                              <li><a href=\"";
        // line 234
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("champ_index");
        echo "\"><span class=\"lbl\">Champs</span></a></li>
                             <li><a href=\"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_index");
        echo "\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>
                             <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
        echo "\">Boite de réception</a></li>
                                    <li><a href=\"";
        // line 243
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_new");
        echo "\">Nouveau message</a></li>
                                    <li><a href=\"email-compose.html\">Message envoyées</a></li>
                                </ul>
                            </li>

                               <li>
                                <a href=\"javascript: void(0);\"><i class=\"mdi mdi-account-circle
\"></i><span> Utilisateurs </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"";
        // line 252
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Liste users</a></li>
                             </ul>
                            </li>


   
                            <li><a href=\"";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calend_page");
        echo "\"><i class=\"fi-clock\"></i> <span>Calendrier</span> </a></li>



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
        // line 289
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 291
        echo "                        ";
        $this->displayBlock('calend', $context, $blocks);
        // line 293
        echo "

                        ";
        // line 295
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 297
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 299
        echo "     
                    


                     



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2017 - 2018 © CVBUILDER. - ZenHosting.tn
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



         <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>


        <!-- Xeditable -->
        <script type=\"text/javascript\" src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/moment/moment.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.xeditable.init.js\" type=\"text/javascript"), "html", null, true);
        echo "\"></script>
        
        <!--Form Wizard-->
        <script type=\"text/javascript\" src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>

       

         <!-- Required datatable js -->
        <script type=\"text/javascript\" src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
         <!-- Buttons examples -->
        <script type=\"text/javascript\" src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>

        <!--Summernote js-->
        <script type=\"text/javascript\" src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
         <!--Choosen js-->
        <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.loupe.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        
          ";
        // line 369
        $this->displayBlock('javascripts', $context, $blocks);
        echo "  

        <!-- Jquery-Ui -->
        <script type=\"text/javascript\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <!-- SCRIPTS -->
        <script type=\"text/javascript\" src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/fullcalendar/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.calendar.js"), "html", null, true);
        echo "\"></script>


        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
         <!--wizard initialization-->
        <script type=\"text/javascript\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.wizard-init.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 289
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 290
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 291
    public function block_calend($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calend"));

        // line 292
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 296
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 297
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 298
        echo "                         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 369
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  714 => 369,  704 => 298,  695 => 297,  685 => 296,  676 => 295,  666 => 292,  657 => 291,  647 => 290,  638 => 289,  626 => 384,  621 => 382,  617 => 381,  610 => 377,  606 => 376,  602 => 375,  596 => 372,  590 => 369,  584 => 366,  580 => 365,  576 => 364,  571 => 362,  565 => 359,  561 => 358,  557 => 357,  553 => 356,  549 => 355,  545 => 354,  541 => 353,  536 => 351,  532 => 350,  524 => 345,  518 => 342,  514 => 341,  510 => 340,  503 => 336,  499 => 335,  495 => 334,  491 => 333,  487 => 332,  483 => 331,  479 => 330,  475 => 329,  443 => 299,  440 => 297,  438 => 295,  434 => 293,  431 => 291,  429 => 289,  395 => 258,  386 => 252,  374 => 243,  370 => 242,  360 => 235,  356 => 234,  352 => 233,  348 => 232,  344 => 231,  330 => 220,  286 => 179,  268 => 164,  260 => 159,  245 => 147,  241 => 145,  236 => 143,  233 => 142,  227 => 141,  225 => 140,  210 => 128,  179 => 100,  133 => 57,  127 => 54,  107 => 37,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  77 => 25,  72 => 23,  68 => 22,  63 => 20,  58 => 18,  53 => 16,  48 => 14,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>ADMIN</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <!-- Editable css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/bootstrap-xeditable/css/bootstrap-editable.css')}}\">
        <!-- Toastr css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/jquery-toastr/jquery.toast.min.css')}}\">
        <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/jquery.steps/css/jquery.steps.css')}}\">
         <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"{{ asset ('template/assets/images/favicon.ico')}}\">
        <!-- Summernote css -->
         <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/summernote/summernote-bs4.css')}}\">
        <!-- DataTables -->
         <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/datatables/dataTables.bootstrap4.min.css')}}\">
         <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/datatables/buttons.bootstrap4.min.css')}}\">
        <!--calendar css-->
         <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/fullcalendar/css/fullcalendar.min.css')}}\">

        <!-- App css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/chosen.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/metismenu.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/style.css')}}\">

         


        <script src=\"{{ asset ('template/assets/js/modernizr.min.js')}}\"></script>

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
                            <img src=\"{{asset ('template/assets/images/logo.png')}}\" alt=\"\" height=\"50\">
                        </span>
                        <i>
                            <img src=\"{{asset ('template/assets/images/logo_sm.png')}}\" alt=\"\" height=\"28\">
                        </i>
                    </a>
                </div>

                <nav class=\"navbar-custom\">

                    <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">
                      

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle arrow-none waves-light waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                <i class=\"fi-bell noti-icon\"></i>
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
                                <span class=\"badge badge-light badge-pill noti-icon-badge\">{{ fos_message_nb_unread() }}</span>
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
                                        <p class=\"notify-details\">
                                    
                                    
                                        
                                        </p>
                                        <p class=\"text-muted font-13 mb-0 user-msg\">
                                        

                                        </p>
                                    </a>

                                
                                   

                                <!-- All-->
                                <a href=\"{{path ('fos_message_inbox')}}\" class=\"dropdown-item text-center text-primary notify-item notify-all\">
                                    View all <i class=\"fi-arrow-right\"></i>
                                </a>

                            </div>
                        </li>

                        <li class=\"dropdown notification-list\">
                            <a class=\"nav-link dropdown-toggle waves-effect waves-light nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                               aria-haspopup=\"false\" aria-expanded=\"false\">
                                
                                
                                  {% if app.user.avatar is null %}
                               <img src=\"{{ asset ('template/assets/images/users/avatar-1.jpg')}}\" alt=\"user\" class=\"rounded-circle\">
                        {% else %}  
                                <img src=\"{{ asset ('public/uploads/avatars/' ~ app.user.avatar) }}\" alt=\"avatar\" class=\"rounded-circle\">
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


            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <div class=\"slimscroll-menu\" id=\"remove-scroll\">

                    <!--- Sidemenu -->
                    <div id=\"sidebar-menu\">
                        <!-- Left Menu Start -->
                        <ul class=\"metismenu\" id=\"side-menu\">
                            <li class=\"menu-title\">Navigation</li>
                            <li>
                                <a href=\"{{path ('dashboard')}}\">
                                    <i class=\"fi-air-play\"></i><span class=\"badge badge-danger badge-pill pull-right\">3</span> <span> Dashboard </span>
                                </a>
                            </li>

                         


                            <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-box\"></i><span> Tools </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                               <li><a href=\"{{ path('cv_index') }}\"><span class=\"lbl\">Create CV</span></a></li>
                              <li><a href=\"{{ path('template_index') }}\"><span class=\"lbl\">Templates</span></a></li>
                              <li><a href=\"{{ path('groupe_index') }}\"><span class=\"lbl\">Groupes</span></a></li>                                   </span></a></li>
                              <li><a href=\"{{ path('champ_index') }}\"><span class=\"lbl\">Champs</span></a></li>
                             <li><a href=\"{{ path('section_index') }}\"><span class=\"lbl\">Sections</span></a></li>

                                </ul>
                            </li>
                             <li>
                                <a href=\"javascript: void(0);\"><i class=\"fi-mail\"></i><span> Email </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"{{ path('fos_message_inbox')}}\">Boite de réception</a></li>
                                    <li><a href=\"{{ path('fos_message_thread_new')}}\">Nouveau message</a></li>
                                    <li><a href=\"email-compose.html\">Message envoyées</a></li>
                                </ul>
                            </li>

                               <li>
                                <a href=\"javascript: void(0);\"><i class=\"mdi mdi-account-circle
\"></i><span> Utilisateurs </span> <span class=\"menu-arrow\"></span></a>
                                <ul class=\"nav-second-level\" aria-expanded=\"false\">
                                    <li><a href=\"{{ path('user_index')}}\">Liste users</a></li>
                             </ul>
                            </li>


   
                            <li><a href=\"{{path ('calend_page')}}\"><i class=\"fi-clock\"></i> <span>Calendrier</span> </a></li>



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
     
                    


                     



                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2017 - 2018 © CVBUILDER. - ZenHosting.tn
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



         <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/waypoints/lib/jquery.waypoints.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/counterup/jquery.counterup.min.js')}}\"></script>


        <!-- Xeditable -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/moment/moment.js\" type=\"text/javascript')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js\" type=\"text/javascript')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.xeditable.init.js\" type=\"text/javascript')}}\"></script>
        
        <!--Form Wizard-->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/jquery.steps/js/jquery.steps.min.js')}}\"></script>

       

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

        <!--Summernote js-->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/summernote/summernote-bs4.min.js')}}\"></script>
         <!--Choosen js-->
        <script src=\"{{ asset ('js/chosen.jquery.min.js')}}\"></script>
        <script src=\"{{ asset ('js/prism.js')}}\"></script>
        <script src=\"{{ asset ('js/jquery.loupe.min.js')}}\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        
          {% block javascripts %} {% endblock %}  

        <!-- Jquery-Ui -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/jquery-ui/jquery-ui.min.js')}}\"></script>

        <!-- SCRIPTS -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/moment/moment.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/fullcalendar/js/fullcalendar.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.calendar.js')}}\"></script>


        <!-- App js -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.core.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.app.js')}}\"></script>
         <!--wizard initialization-->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.wizard-init.js')}}\"></script>
", "::user.html.twig", "/home/houssem/Application/app/Resources/views/user.html.twig");
    }
}
