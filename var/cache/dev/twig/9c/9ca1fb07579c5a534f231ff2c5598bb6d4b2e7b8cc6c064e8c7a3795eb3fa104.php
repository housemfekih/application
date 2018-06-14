<?php

/* ::logout.html.twig */
class __TwigTemplate_f70b3c43be315665beb64bd518f51272559813becbf8e57f028b644a34d9b703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::logout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::logout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

       <!-- App css -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>



    </head>


    <body class=\"bg-accpunt-pages\">

        <!-- HOME -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"wrapper-page\">

                            <div class=\"account-pages\">
                                <div class=\"account-box\">
                                    <div class=\"account-logo-box\">
                                        <h2 class=\"text-uppercase text-center\">
                                            <a href=\"index.html\" class=\"text-success\">
                                                <span><img src=\"assets/images/logo_dark.png\" alt=\"\" height=\"20\"></span>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class=\"account-content\">
                                        <div class=\"text-center m-b-20\">
                                            <div class=\"m-b-20\">
                                                <div class=\"checkmark\">
                                                    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                         viewBox=\"0 0 161.2 161.2\" enable-background=\"new 0 0 161.2 161.2\" xml:space=\"preserve\">
                                                    <path class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-miterlimit=\"10\" d=\"M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                                        c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                                        c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z\"/>
                                                    <circle class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"4\" stroke-miterlimit=\"10\" cx=\"80.6\" cy=\"80.6\" r=\"62.1\"/>
                                                    <polyline class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"6\" stroke-linecap=\"round\" stroke-miterlimit=\"10\" points=\"113,52.8
                                                        74.1,108.4 48.2,86.4 \"/>

                                                    <circle class=\"spin\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke-dasharray=\"12.2175,12.2175\" cx=\"80.6\" cy=\"80.6\" r=\"73.9\"/>

                                                </svg>

                                                </div>
                                            </div>

                                            <h5>See You Again !</h5>

                                            <p class=\"text-muted font-14 m-t-10\"> You are now successfully sign out. Back to <a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"text-primary m-r-5\"><b>Sign In</b></a></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <!-- jQuery  -->

           <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

       

            <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 106,  176 => 105,  168 => 100,  164 => 99,  160 => 98,  156 => 97,  152 => 96,  148 => 95,  144 => 94,  140 => 93,  114 => 70,  63 => 22,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  25 => 1,);
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
    <head>
        <meta charset=\"utf-8\" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <!-- App favicon -->
        <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

       <!-- App css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/chosen.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/metismenu.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/style.css')}}\">

        <script src=\"{{ asset ('template/assets/js/modernizr.min.js')}}\"></script>



    </head>


    <body class=\"bg-accpunt-pages\">

        <!-- HOME -->
        <section>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">

                        <div class=\"wrapper-page\">

                            <div class=\"account-pages\">
                                <div class=\"account-box\">
                                    <div class=\"account-logo-box\">
                                        <h2 class=\"text-uppercase text-center\">
                                            <a href=\"index.html\" class=\"text-success\">
                                                <span><img src=\"assets/images/logo_dark.png\" alt=\"\" height=\"20\"></span>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class=\"account-content\">
                                        <div class=\"text-center m-b-20\">
                                            <div class=\"m-b-20\">
                                                <div class=\"checkmark\">
                                                    <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                                         viewBox=\"0 0 161.2 161.2\" enable-background=\"new 0 0 161.2 161.2\" xml:space=\"preserve\">
                                                    <path class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-miterlimit=\"10\" d=\"M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                                        c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                                        c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z\"/>
                                                    <circle class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"4\" stroke-miterlimit=\"10\" cx=\"80.6\" cy=\"80.6\" r=\"62.1\"/>
                                                    <polyline class=\"path\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"6\" stroke-linecap=\"round\" stroke-miterlimit=\"10\" points=\"113,52.8
                                                        74.1,108.4 48.2,86.4 \"/>

                                                    <circle class=\"spin\" fill=\"none\" stroke=\"#32c861\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke-dasharray=\"12.2175,12.2175\" cx=\"80.6\" cy=\"80.6\" r=\"73.9\"/>

                                                </svg>

                                                </div>
                                            </div>

                                            <h5>See You Again !</h5>

                                            <p class=\"text-muted font-14 m-t-10\"> You are now successfully sign out. Back to <a href=\"{{ path('fos_user_security_login')}}\" class=\"text-primary m-r-5\"><b>Sign In</b></a></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <!-- jQuery  -->

           <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/waypoints/lib/jquery.waypoints.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/counterup/jquery.counterup.min.js')}}\"></script>

       

            <!-- App js -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.core.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.app.js')}}\"></script>

    </body>
</html>", "::logout.html.twig", "/home/houssem/Application/app/Resources/views/logout.html.twig");
    }
}
