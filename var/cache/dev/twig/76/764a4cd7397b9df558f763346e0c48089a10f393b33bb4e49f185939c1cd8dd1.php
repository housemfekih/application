<?php

/* ::about.html.twig */
class __TwigTemplate_276975e8534a1c501ad855f69b25ba0f9744b53b9625a88e58d08cb808f88847 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::about.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/animate.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/prettyPhoto.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
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
              <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\"><h1><span>CV</span>BUILDER</h1></a>
            </div>
          </div>

          <div class=\"navbar-collapse collapse\">
            <div class=\"menu\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\">Home</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutPage");
        echo "\">About Us</a></li>
                <li role=\"presentation\"><a href=\"services.html\">Services</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("themePage");
        echo "\">Themes</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contactPage");
        echo "\">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div id=\"breadcrumb\">
    <div class=\"container\">
      <div class=\"breadcrumb\">
        <li><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\">Home</a></li>
        <li>About Us</li>
      </div>
    </div>
  </div>

  <div class=\"aboutus\">
    <div class=\"container\">
      <h3>Our company information</h3>
      <hr>
      <div class=\"col-md-7 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/7.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\">
        <h4>We Create, Design and Make it Real</h4>
        <p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nulla risus, vel tincidunt
          turpis. Aliquam a nulla mi, placerat blandit eros. </p>
        <p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
      </div>
      <div class=\"col-md-5 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"skill\">
          <h2>Our Skills</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class=\"progress-wrap\">
            <h3>Graphic Design</h3>
            <div class=\"progress\">
              <div class=\"progress-bar  color1\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                <span class=\"bar-width\">85%</span>
              </div>

            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>HTML</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color2\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\">
                <span class=\"bar-width\">95%</span>
              </div>
            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>CSS</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color3\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                <span class=\"bar-width\">80%</span>
              </div>
            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>Wordpress</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color4\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                <span class=\"bar-width\">90%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"our-team\">
    <div class=\"container\">
      <h3>Our Team</h3>
      <div class=\"text-center\">
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
          <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/services/1.jpg"), "html", null, true);
        echo "\" alt=\"ss\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
          <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/services/2.jpg"), "html", null, true);
        echo "\" alt=\"ss\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
          <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/services/3.jpg"), "html", null, true);
        echo "\" alt=\"sd\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
      </div>
    </div>
  </div>

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
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/functions.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 193,  278 => 192,  274 => 191,  270 => 190,  266 => 189,  261 => 187,  210 => 139,  202 => 134,  194 => 129,  134 => 72,  120 => 61,  105 => 49,  101 => 48,  97 => 47,  92 => 45,  88 => 44,  78 => 37,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  25 => 1,);
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
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Company-HTML Bootstrap theme</title>

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
              <a href=\"{{path ('acceuilPage')}}\"><h1><span>CV</span>BUILDER</h1></a>
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

  <div id=\"breadcrumb\">
    <div class=\"container\">
      <div class=\"breadcrumb\">
        <li><a href=\"{{path ('acceuilPage')}}\">Home</a></li>
        <li>About Us</li>
      </div>
    </div>
  </div>

  <div class=\"aboutus\">
    <div class=\"container\">
      <h3>Our company information</h3>
      <hr>
      <div class=\"col-md-7 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
        <img src=\"{{asset ('homepage/images/7.jpg')}}\" class=\"img-responsive\">
        <h4>We Create, Design and Make it Real</h4>
        <p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nulla risus, vel tincidunt
          turpis. Aliquam a nulla mi, placerat blandit eros. </p>
        <p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
      </div>
      <div class=\"col-md-5 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"skill\">
          <h2>Our Skills</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <div class=\"progress-wrap\">
            <h3>Graphic Design</h3>
            <div class=\"progress\">
              <div class=\"progress-bar  color1\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                <span class=\"bar-width\">85%</span>
              </div>

            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>HTML</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color2\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 95%\">
                <span class=\"bar-width\">95%</span>
              </div>
            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>CSS</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color3\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                <span class=\"bar-width\">80%</span>
              </div>
            </div>
          </div>

          <div class=\"progress-wrap\">
            <h4>Wordpress</h4>
            <div class=\"progress\">
              <div class=\"progress-bar color4\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 90%\">
                <span class=\"bar-width\">90%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"our-team\">
    <div class=\"container\">
      <h3>Our Team</h3>
      <div class=\"text-center\">
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
          <img src=\"{{asset ('homepage/images/services/1.jpg')}}\" alt=\"ss\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
          <img src=\"{{asset ('homepage/images/services/2.jpg')}}\" alt=\"ss\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class=\"col-md-4 wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
          <img src=\"{{asset ('homepage/images/services/3.jpg')}}\" alt=\"sd\">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
      </div>
    </div>
  </div>

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
</body>

</html>
", "::about.html.twig", "/home/houssem/myApp/app/Resources/views/about.html.twig");
    }
}