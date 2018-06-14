<?php

/* :templates:a513f37cecfab0ba24044b3ea705de94.html.twig */
class __TwigTemplate_75c2adbc2b213b8d5f9ba0966d7fd4d6699e5e140bbd3372b88e0fdf13a318cc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:a513f37cecfab0ba24044b3ea705de94.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:a513f37cecfab0ba24044b3ea705de94.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->  
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->  
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Responsive HTML5 Resume/CV Template for Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">    
    <link rel=\"shortcut icon\" href=\"favicon.ico\">  

    <!-- Global CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">   
    <!-- Plugins CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    
    <!-- Theme CSS -->  
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles-3.css"), "html", null, true);
        echo "\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 
</head> 

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                <img class=\"profile\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/profile.png"), "html", null, true);
        echo "\" alt=\"\" />
                <h1 class=\"name\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch12", array(), "array"), "content", array()), "html", null, true);
        echo "</h1>
                <h3 class=\"tagline\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch13", array(), "array"), "content", array()), "html", null, true);
        echo "</h3>
            </div><!--//profile-container-->
            
            <div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch14", array(), "array"), "content", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch15", array(), "array"), "content", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch16", array(), "array"), "content", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch17", array(), "array"), "content", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch18", array(), "array"), "content", array()), "html", null, true);
        echo "</a></li>
                    <li class=\"twitter\"><i class=\"fa fa-twitter\"></i></li>
                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
                    <h4 class=\"degree\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"), "content", array()), "html", null, true);
        echo "</h4>
                    <h5 class=\"meta\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch23", array(), "array"), "content", array()), "html", null, true);
        echo "</h5>
                    <div class=\"time\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch24", array(), "array"), "content", array()), "html", null, true);
        echo "</div>
                </div><!--//item-->
                <div class=\"item\">
                    <h4 class=\"degree\">";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"), "content", array()), "html", null, true);
        echo "</h4>
                    <h5 class=\"meta\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch23", array(), "array"), "content", array()), "html", null, true);
        echo "</h5>
                    <div class=\"time\">";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch24", array(), "array"), "content", array()), "html", null, true);
        echo "</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s7"] ?? $this->getContext($context, "s7")), "ch25", array(), "array"), "content", array()), "html", null, true);
        echo " <span class=\"lang-desc\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s7"] ?? $this->getContext($context, "s7")), "ch25", array(), "array"), "content", array()), "html", null, true);
        echo "</span></li>
                    <li>French <span class=\"lang-desc\">(Professional)</span></li>
                    <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s8"] ?? $this->getContext($context, "s8")), "ch27", array(), "array"), "content", array()), "html", null, true);
        echo "</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
\t\t\t\t";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s9"] ?? $this->getContext($context, "s9")), "ch28", array(), "array"), "content", array()), "html", null, true);
        echo "
\t\t\t
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch29", array(), "array"), "content", array()), "html", null, true);
        echo "</h3>
                            <div class=\"time\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch30", array(), "array"), "content", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch31", array(), "array"), "content", array()), "html", null, true);
        echo "</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch32", array(), "array"), "content", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch33", array(), "array"), "content", array()), "html", null, true);
        echo "</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch34", array(), "array"), "content", array()), "html", null, true);
        echo " </p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">Senior Software Engineer</h3>
                            <div class=\"time\">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Google, London</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">UI Developer</h3>
                            <div class=\"time\">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Amazon, London</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class=\"section projects-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-archive\"></i>Projects</h2>
                <div class=\"intro\">
                    <p>";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s11"] ?? $this->getContext($context, "s11")), "ch35", array(), "array"), "content", array()), "html", null, true);
        echo "</p>
                </div><!--//intro-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"#hook\">Velocity</a></span> - <span class=\"project-tagline\">";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s11"] ?? $this->getContext($context, "s11")), "ch36", array(), "array"), "content", array()), "html", null, true);
        echo "</span>
                    
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\" target=\"_blank\">DevStudio</a></span> - 
                    <span class=\"project-tagline\">A responsive website template designed to help web developers/designers market their services. </span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/\" target=\"_blank\">Tempo</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/\" target=\"_blank\">Atom</a></span> - <span class=\"project-tagline\">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/\" target=\"_blank\">Delta</a></span> - <span class=\"project-tagline\">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class=\"skills-section section\">
                <h2 class=\"section-title\"><i class=\"fa fa-rocket\"></i>Skills &amp; Proficiency</h2>
                <div class=\"skillset\">        
                    <div class=\"item\">
                        <h3 class=\"level-title\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s12"] ?? $this->getContext($context, "s12")), "ch37", array(), "array"), "content", array()), "html", null, true);
        echo "</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["s12"] ?? $this->getContext($context, "s12")), "ch38", array(), "array"), "content", array()), "html", null, true);
        echo "%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Javascript &amp; jQuery</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Angular</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">HTML5 &amp; CSS</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"95%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Ruby on Rails</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"85%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Sketch &amp; Photoshop</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"60%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class=\"footer\">
        <div class=\"text-center\">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class=\"copyright\">Designed with <i class=\"fa fa-heart\"></i> by <a href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>            
</body>
</html> 

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return ":templates:a513f37cecfab0ba24044b3ea705de94.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 226,  342 => 224,  338 => 223,  276 => 164,  271 => 162,  246 => 140,  240 => 137,  201 => 101,  193 => 98,  187 => 96,  183 => 95,  169 => 84,  153 => 71,  139 => 62,  129 => 55,  125 => 54,  121 => 53,  115 => 50,  111 => 49,  107 => 48,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  73 => 32,  69 => 31,  65 => 30,  53 => 21,  47 => 18,  42 => 16,  25 => 1,);
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
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->  
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->  
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->  
<head>
    <title>Responsive Resume/CV Template for Developers</title>
    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Responsive HTML5 Resume/CV Template for Developers\">
    <meta name=\"author\" content=\"Xiaoying Riley at 3rd Wave Media\">    
    <link rel=\"shortcut icon\" href=\"favicon.ico\">  

    <!-- Global CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('assets/plugins/bootstrap/css/bootstrap.min.css')}}\">   
    <!-- Plugins CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset ('assets/plugins/font-awesome/css/font-awesome.css')}}\">
    
    <!-- Theme CSS -->  
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"{{ asset ('assets/css/styles-3.css')}}\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 
</head> 

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                <img class=\"profile\" src=\"{{ asset ('assets/images/profile.png')}}\" alt=\"\" />
                <h1 class=\"name\">{{ s5['ch12'].content }}</h1>
                <h3 class=\"tagline\">{{ s5['ch13'].content }}</h3>
            </div><!--//profile-container-->
            
            <div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">{{ s5['ch14'].content }}</a></li>
                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">{{ s5['ch15'].content }}</a></li>
                    <li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">{{ s5['ch16'].content }}</a></li>
                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">{{ s5['ch17'].content }}</a></li>
                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">{{ s5['ch18'].content }}</a></li>
                    <li class=\"twitter\"><i class=\"fa fa-twitter\"></i></li>
                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
                    <h4 class=\"degree\">{{ s6['ch22'].content }}</h4>
                    <h5 class=\"meta\">{{ s6['ch23'].content }}</h5>
                    <div class=\"time\">{{ s6['ch24'].content }}</div>
                </div><!--//item-->
                <div class=\"item\">
                    <h4 class=\"degree\">{{ s6['ch22'].content }}</h4>
                    <h5 class=\"meta\">{{ s6['ch23'].content }}</h5>
                    <div class=\"time\">{{ s6['ch24'].content }}</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>{{ s7['ch25'].content }} <span class=\"lang-desc\">{{ s7['ch25'].content }}</span></li>
                    <li>French <span class=\"lang-desc\">(Professional)</span></li>
                    <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>{{ s8['ch27'].content }}</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
\t\t\t\t{{ s9['ch28'].content }}
\t\t\t
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">{{ s10['ch29'].content }}</h3>
                            <div class=\"time\">{{ s10['ch30'].content }}{{ s10['ch31'].content }}</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">{{ s10['ch32'].content }} {{ s10['ch33'].content }}</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>{{ s10['ch34'].content }} </p>
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">Senior Software Engineer</h3>
                            <div class=\"time\">2014 - 2015</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Google, London</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                        
                    </div><!--//details-->
                </div><!--//item-->
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">UI Developer</h3>
                            <div class=\"time\">2012 - 2014</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Amazon, London</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>  
                    </div><!--//details-->
                </div><!--//item-->
                
            </section><!--//section-->
            
            <section class=\"section projects-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-archive\"></i>Projects</h2>
                <div class=\"intro\">
                    <p>{{ s11['ch35'].content }}</p>
                </div><!--//intro-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"#hook\">Velocity</a></span> - <span class=\"project-tagline\">{{ s11['ch36'].content }}</span>
                    
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/\" target=\"_blank\">DevStudio</a></span> - 
                    <span class=\"project-tagline\">A responsive website template designed to help web developers/designers market their services. </span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/\" target=\"_blank\">Tempo</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote their products or services and to attract users &amp; investors</span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"hhttp://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/\" target=\"_blank\">Atom</a></span> - <span class=\"project-tagline\">A comprehensive website template solution for startups/developers to market their mobile apps. </span>
                </div><!--//item-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/\" target=\"_blank\">Delta</a></span> - <span class=\"project-tagline\">A responsive Bootstrap one page theme designed to help app developers promote their mobile apps</span>
                </div><!--//item-->
            </section><!--//section-->
            
            <section class=\"skills-section section\">
                <h2 class=\"section-title\"><i class=\"fa fa-rocket\"></i>Skills &amp; Proficiency</h2>
                <div class=\"skillset\">        
                    <div class=\"item\">
                        <h3 class=\"level-title\">{{ s12['ch37'].content }}</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"{{ s12['ch38'].content }}%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Javascript &amp; jQuery</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Angular</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">HTML5 &amp; CSS</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"95%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Ruby on Rails</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"85%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                    <div class=\"item\">
                        <h3 class=\"level-title\">Sketch &amp; Photoshop</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"60%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class=\"footer\">
        <div class=\"text-center\">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class=\"copyright\">Designed with <i class=\"fa fa-heart\"></i> by <a href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type=\"text/javascript\" src=\"{{ asset ('assets/plugins/jquery-1.11.3.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('assets/plugins/bootstrap/js/bootstrap.min.js')}}\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"{{ asset ('assets/js/main.js')}}\"></script>            
</body>
</html> 

", ":templates:a513f37cecfab0ba24044b3ea705de94.html.twig", "/home/houssem/Application/app/Resources/views/templates/a513f37cecfab0ba24044b3ea705de94.html.twig");
    }
}
