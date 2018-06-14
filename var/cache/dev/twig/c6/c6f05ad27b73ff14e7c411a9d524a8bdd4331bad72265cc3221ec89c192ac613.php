<?php

/* ::themes.html.twig */
class __TwigTemplate_2c3f2b7ca75ba55df92bb772fe5cb6d825c8f1ee40c67da74fbc9df21620fb0b extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::themes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::themes.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/animate.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/css/prettyPhoto.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\"><h1><span>CV</span>BUILDER</h1></a>
            </div>
          </div>

          <div class=\"navbar-collapse collapse\">
            <div class=\"menu\">
              <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li role=\"presentation\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\">Home</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutPage");
        echo "\">About Us</a></li>
                <li role=\"presentation\"><a href=\"services.html\">Services</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("themePage");
        echo "\">Themes</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
                <li role=\"presentation\"><a href=\"";
        // line 50
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
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuilPage");
        echo "\">Home</a></li>
        <li>Theme</li>
      </div>
    </div>
  </div>

  <section id=\"portfolio\">
    <div class=\"container\">
      <div class=\"center\">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
      </div>

      <ul class=\"portfolio-filter text-center\">
        <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
      </ul>
      <!--/#portfolio-filter-->
    </div>
    <div class=\"container\">
      <div class=\"\">
        <div class=\"portfolio-items\">
          <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item1.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item1.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item2.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item2.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item3.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item3.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item4.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item4.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item5.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item5.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item6.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item6.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item7.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item7.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/recent/item8.png"), "html", null, true);
        echo "\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/images/portfolio/full/item8.png"), "html", null, true);
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->


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
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script type=\"text/javascript\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("homepage/js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 246
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
        return "::themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 246,  367 => 245,  363 => 244,  359 => 243,  355 => 242,  350 => 240,  297 => 190,  289 => 185,  277 => 176,  269 => 171,  257 => 162,  249 => 157,  237 => 148,  229 => 143,  217 => 134,  209 => 129,  197 => 120,  189 => 115,  177 => 106,  169 => 101,  157 => 92,  149 => 87,  121 => 62,  106 => 50,  102 => 49,  98 => 48,  93 => 46,  89 => 45,  79 => 38,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  25 => 1,);
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
        <li>Theme</li>
      </div>
    </div>
  </div>

  <section id=\"portfolio\">
    <div class=\"container\">
      <div class=\"center\">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt</p>
      </div>

      <ul class=\"portfolio-filter text-center\">
        <li><a class=\"btn btn-default active\" href=\"#\" data-filter=\"*\">All Works</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".bootstrap\">Creative</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".html\">Photography</a></li>
        <li><a class=\"btn btn-default\" href=\"#\" data-filter=\".wordpress\">Web Development</a></li>
      </ul>
      <!--/#portfolio-filter-->
    </div>
    <div class=\"container\">
      <div class=\"\">
        <div class=\"portfolio-items\">
          <div class=\"portfolio-item apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item1.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item1.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item2.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item2.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item3.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item3.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item4.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item4.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item5.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item5.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item6.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item6.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item7.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item7.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->

          <div class=\"portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3\">
            <div class=\"recent-work-wrap\">
              <img class=\"img-responsive\" src=\"{{asset ('homepage/images/portfolio/recent/item8.png')}}\" alt=\"\">
              <div class=\"overlay\">
                <div class=\"recent-work-inner\">
                  <h3><a href=\"#\">Business theme</a></h3>
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                  <a class=\"preview\" href=\"{{asset ('homepage/images/portfolio/full/item8.png')}}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i> View</a>
                </div>
              </div>
            </div>
          </div>
          <!--/.portfolio-item-->
        </div>
      </div>
    </div>
  </section>
  <!--/#portfolio-item-->


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
", "::themes.html.twig", "/home/houssem/myApp/app/Resources/views/themes.html.twig");
    }
}
