<?php

/* interlogin.html.twig */
class __TwigTemplate_20bcee6522aef4da6d3399be2b3d88682cc9185a696411c120ec80dbc219cf0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "interlogin.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>CV BUILDER</title>
        <!-- App css -->
        <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"assets/css/metismenu.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />

        <script src=\"assets/js/modernizr.min.js\"></script>

 <!-- Bootstrap login -->

  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/animate/animate.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/util.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/css/main.css"), "html", null, true);
        echo "\">

  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/animate.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/prettyPhoto.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/style.css"), "html", null, true);
        echo "\">
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"navigation\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse.collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
            <div class=\"navbar-brand\">
              <a href=\"index.html\"><h1><span>CV</span>BUILDER</h1></a>
            </div>
          </div>

           <div class=\"navbar-collapse collapse\">
            <div class=\"menu\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\">Home</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutPage");
        echo "\">About Us</a></li>
                <li role=\"presentation\"><a href=\"services.html\">Services</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("themePage");
        echo "\">Themes</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactPage");
        echo "\">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
      <div class=\"carousel-inner\">
<div class=\"item active\" style=\"background-image: url('";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/slider/bg1.jpg"), "html", null, true);
        echo "')\">  

          <div class=\"container\">
            <div class=\"row slide-margin\">
              <div class=\"col-sm-6\">
                <div class=\"carousel-content\">
                  <h2 class=\"animation animated-item-1\">Bienvenue dans <span>CV BUILDER</span></h2>
                  <p class=\"animation animated-item-2\">Créer un CV remarquable en quelques minutes
Réinventez votre CV en moins de 10 minutes, pour se faire embaucher plus rapidement.</p>
                </div>

              </div>

              <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                <div class=\"slider-img\">
                              


            ";
        // line 95
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 99
        echo "     
             

        </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  

  <section id=\"conatcat-info\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8\">
          <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"pull-left\">
              <i class=\"fa fa-phone\"></i>
            </div>
            <div class=\"media-body\">
              <h2>Besoin d'aide ? </h2>
              <p>Adresse: Bureau 504 ,Imm Louzir , Avenue Palestine ,Cité ben Alaya Sahloul 2 Sousse, sahloul 4054</p>
              <p>Telephone: 216 73 821 678</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

  <footer>
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"social-icon\">
          <div class=\"col-md-4\">
            <ul class=\"social-network\">
              <li><a href=\"#\" class=\"fb tool-tip\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\" class=\"twitter tool-tip\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\" class=\"gplus tool-tip\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li><a href=\"#\" class=\"linkedin tool-tip\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"#\" class=\"ytube tool-tip\" title=\"You Tube\"><i class=\"fa fa-youtube-play\"></i></a></li>
            </ul>
          </div>
        </div>

        <div class=\"col-md-4 col-md-offset-4\">
          <div class=\"copyright\">
            &copy; Company Theme. All Rights Reserved.
            <div class=\"credits\">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              <a href=\"https://bootstrapmade.com/bootstrap-business-templates/\">Bootstrap Business Templates</a> by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pull-right\">
        <a href=\"#home\" class=\"scrollup\"><i class=\"fa fa-angle-up fa-3x\"></i></a>
      </div>
    </div>
  </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script type=\"text/javascript\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/functions.js"), "html", null, true);
        echo "\"></script>


  <!--===============================================================================================-->  
  <script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>

  <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/vendor/tilt/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>

  <script >
    \$('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/js/main.js"), "html", null, true);
        echo "\"></script>


</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 96
        echo "     

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "interlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 96,  330 => 95,  316 => 205,  305 => 197,  299 => 194,  293 => 191,  288 => 189,  282 => 186,  275 => 182,  271 => 181,  267 => 180,  263 => 179,  259 => 178,  254 => 176,  175 => 99,  173 => 95,  152 => 77,  138 => 66,  134 => 65,  130 => 64,  125 => 62,  121 => 61,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  67 => 25,  63 => 24,  59 => 23,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  23 => 1,);
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
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>CV BUILDER</title>
        <!-- App css -->
        <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"assets/css/metismenu.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />

        <script src=\"assets/js/modernizr.min.js\"></script>

 <!-- Bootstrap login -->

  <link rel=\"stylesheet\" href=\"{{ asset ('login/vendor/bootstrap/css/bootstrap.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/vendor/animate/animate.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/vendor/css-hamburgers/hamburgers.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/vendor/select2/select2.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/css/util.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('login/css/main.css')}}\">

  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"{{ asset ('homepage/css/bootstrap.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('homepage/css/font-awesome.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('homepage/css/animate.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('homepage/css/prettyPhoto.css')}}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('homepage/css/style.css')}}\">
  <!-- =======================================================
    Theme Name: Company
    Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"navigation\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse.collapse\">
\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</button>
            <div class=\"navbar-brand\">
              <a href=\"index.html\"><h1><span>CV</span>BUILDER</h1></a>
            </div>
          </div>

           <div class=\"navbar-collapse collapse\">
            <div class=\"menu\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\"><a href=\"{{path ('acceuilPage')}}\">Home</a></li>
                <li role=\"presentation\"><a href=\"{{path ('aboutPage')}}\">About Us</a></li>
                <li role=\"presentation\"><a href=\"services.html\">Services</a></li>
                <li role=\"presentation\"><a href=\"{{path ('themePage')}}\">Themes</a></li>
                <li role=\"presentation\"><a href=\"{{path ('fos_user_security_login')}}\">Se connecter</a></li>
                <li role=\"presentation\"><a href=\"{{path ('contactPage')}}\">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <section id=\"main-slider\" class=\"no-margin\">
    <div class=\"carousel slide\">
      <div class=\"carousel-inner\">
<div class=\"item active\" style=\"background-image: url('{{ asset('homepage/images/slider/bg1.jpg') }}')\">  

          <div class=\"container\">
            <div class=\"row slide-margin\">
              <div class=\"col-sm-6\">
                <div class=\"carousel-content\">
                  <h2 class=\"animation animated-item-1\">Bienvenue dans <span>CV BUILDER</span></h2>
                  <p class=\"animation animated-item-2\">Créer un CV remarquable en quelques minutes
Réinventez votre CV en moins de 10 minutes, pour se faire embaucher plus rapidement.</p>
                </div>

              </div>

              <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                <div class=\"slider-img\">
                              


            {% block fos_user_content %}
     

            {% endblock fos_user_content %}
     
             

        </div>

            </div>
          </div>
        </div>
        <!--/.item-->
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
  

  <section id=\"conatcat-info\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-8\">
          <div class=\"media contact-info wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
            <div class=\"pull-left\">
              <i class=\"fa fa-phone\"></i>
            </div>
            <div class=\"media-body\">
              <h2>Besoin d'aide ? </h2>
              <p>Adresse: Bureau 504 ,Imm Louzir , Avenue Palestine ,Cité ben Alaya Sahloul 2 Sousse, sahloul 4054</p>
              <p>Telephone: 216 73 821 678</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </section>
  <!--/#conatcat-info-->

  <footer>
    <div class=\"footer\">
      <div class=\"container\">
        <div class=\"social-icon\">
          <div class=\"col-md-4\">
            <ul class=\"social-network\">
              <li><a href=\"#\" class=\"fb tool-tip\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\" class=\"twitter tool-tip\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\" class=\"gplus tool-tip\" title=\"Google Plus\"><i class=\"fa fa-google-plus\"></i></a></li>
              <li><a href=\"#\" class=\"linkedin tool-tip\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
              <li><a href=\"#\" class=\"ytube tool-tip\" title=\"You Tube\"><i class=\"fa fa-youtube-play\"></i></a></li>
            </ul>
          </div>
        </div>

        <div class=\"col-md-4 col-md-offset-4\">
          <div class=\"copyright\">
            &copy; Company Theme. All Rights Reserved.
            <div class=\"credits\">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
              -->
              <a href=\"https://bootstrapmade.com/bootstrap-business-templates/\">Bootstrap Business Templates</a> by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pull-right\">
        <a href=\"#home\" class=\"scrollup\"><i class=\"fa fa-angle-up fa-3x\"></i></a>
      </div>
    </div>
  </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/jquery-2.1.1.min.js')}}\"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/bootstrap.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/jquery.prettyPhoto.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/jquery.isotope.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/wow.min.js')}}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset ('homepage/js/functions.js')}}\"></script>


  <!--===============================================================================================-->  
  <script type=\"text/javascript\" src=\"{{ asset ('login/vendor/jquery/jquery-3.2.1.min.js')}}\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"{{ asset ('login/vendor/bootstrap/js/popper.js')}}\"></script>

  <script type=\"text/javascript\" src=\"{{ asset ('login/vendor/bootstrap/js/bootstrap.min.js')}}\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"{{ asset ('login/vendor/select2/select2.min.js')}}\"></script>

<!--===============================================================================================-->
  <script type=\"text/javascript\" src=\"{{ asset ('login/vendor/tilt/tilt.jquery.min.js')}}\"></script>

  <script >
    \$('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src=\"{{asset ('login/js/main.js')}}\"></script>


</body>

</html>
", "interlogin.html.twig", "/home/houssem/myApp/app/Resources/views/interlogin.html.twig");
    }
}
