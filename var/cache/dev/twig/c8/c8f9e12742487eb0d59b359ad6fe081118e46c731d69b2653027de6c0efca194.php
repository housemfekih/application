<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_3da697067a64aebf9375dcda54de8f031de3b6ad0ff3026dfe493ab36cf39a71 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/\"assets/images/favicon.ico"), "html", null, true);
        echo "\">

        <!-- App css -->

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 23
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
                                                <span><img src=\"assets/images/logo_dark.png\" alt=\"\" height=\"18\"></span>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class=\"account-content\">
                                        <div class=\"text-center m-b-20\">
                                            <p class=\"text-muted m-b-0\">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                                        </div>
                                       
<form action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"form-horizontal\">
                                            <div class=\"form-group row m-b-20\">
                                                <div class=\"col-12\">
                                                 <label for=\"username\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username"), "html", null, true);
        echo "</label>
                                          <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"john@deo.com\" />

                                                </div>
                                            </div>

                                            <div class=\"form-group row text-center m-t-10\">
                                                <div class=\"col-12\">
                                                    <button class=\"btn btn-block btn-gradient waves-effect waves-light\" type=\"submit\">Reset Password</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class=\"row m-t-50\">
                                            <div class=\"col-sm-12 text-center\">
                                                <p class=\"text-muted\">Back to <a href=\"page-login.html\" class=\"text-dark m-l-5\"><b>Sign In</b></a></p>
                                            </div>
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
        <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    </body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 101,  168 => 100,  162 => 97,  158 => 96,  154 => 95,  150 => 94,  146 => 93,  142 => 92,  101 => 54,  95 => 51,  64 => 23,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  40 => 14,  25 => 1,);
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
        <link rel=\"shortcut icon\" href=\"{{ asset ('template/\"assets/images/favicon.ico')}}\">

        <!-- App css -->

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
                                                <span><img src=\"assets/images/logo_dark.png\" alt=\"\" height=\"18\"></span>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class=\"account-content\">
                                        <div class=\"text-center m-b-20\">
                                            <p class=\"text-muted m-b-0\">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                                        </div>
                                       
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"form-horizontal\">
                                            <div class=\"form-group row m-b-20\">
                                                <div class=\"col-12\">
                                                 <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
                                          <input class=\"form-control\" type=\"text\" id=\"username\" name=\"username\" required=\"required\" placeholder=\"john@deo.com\" />

                                                </div>
                                            </div>

                                            <div class=\"form-group row text-center m-t-10\">
                                                <div class=\"col-12\">
                                                    <button class=\"btn btn-block btn-gradient waves-effect waves-light\" type=\"submit\">Reset Password</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class=\"row m-t-50\">
                                            <div class=\"col-sm-12 text-center\">
                                                <p class=\"text-muted\">Back to <a href=\"page-login.html\" class=\"text-dark m-l-5\"><b>Sign In</b></a></p>
                                            </div>
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
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>

        <!-- App js -->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.core.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.app.js')}}\"></script>

    </body>", "FOSUserBundle:Resetting:request_content.html.twig", "/home/houssem/Application/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
