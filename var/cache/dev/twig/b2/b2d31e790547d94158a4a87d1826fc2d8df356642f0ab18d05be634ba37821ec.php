<?php

/* :templates:229826238840a11719f5668b1b47d5ec.html.twig */
class __TwigTemplate_21f282aa68ff52afe7856cdaafdf7f3b763f4c09703f0e7250e803e1c384deca extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:229826238840a11719f5668b1b47d5ec.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:229826238840a11719f5668b1b47d5ec.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles.css"), "html", null, true);
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
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch12", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch12"]) {
            // line 32
            echo "\t\t\t\t<h1 class=\"name\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch12"], "content", array()), "html", null, true);
            echo "</h1>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch12'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch13", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch13"]) {
            // line 35
            echo "                <h3 class=\"tagline\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch13"], "content", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch13'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div><!--//profile-container-->
            
            <div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch14", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch14"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch14"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch14'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a></li>
                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch15", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch15"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch15"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch15'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a></li>
                    <li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch16", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch16"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch16"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch16'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </a></li>
                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch17", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch17"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch17"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch17'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a></li>
                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch18", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch18"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch18"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch18'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</a></li>
                    <li class=\"twitter\"><i class=\"fa fa-twitter\"></i></li>
                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s6ch22"]) {
            // line 53
            echo "                    <h4 class=\"degree\">MSc in Computer Science</h4>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch22'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t
\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s6ch22"]) {
            echo "\t
                    <h5 class=\"meta\">University of London</h5>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch22'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s6ch22"]) {
            echo "\t
                    <div class=\"time\">2011 - 2012</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch22'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t
                </div><!--//item-->
                <div class=\"item\">
                    <h4 class=\"degree\">BSc in Applied Mathematics</h4>
                    <h5 class=\"meta\">Bristol University</h5>
                    <div class=\"time\">2007 - 2011</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>English <span class=\"lang-desc\">(Native)</span></li>
                    <li>French <span class=\"lang-desc\">(Professional)</span></li>
                    <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">Lead Developer</h3>
                            <div class=\"time\">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>  
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
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
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"#hook\">Velocity</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote, market and sell their products.</span>
                    
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
                        <h3 class=\"level-title\">Python &amp; Django</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
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
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 236
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
        return ":templates:229826238840a11719f5668b1b47d5ec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 236,  389 => 234,  385 => 233,  210 => 60,  198 => 58,  187 => 55,  184 => 54,  177 => 53,  173 => 52,  154 => 45,  141 => 44,  128 => 43,  115 => 42,  102 => 41,  96 => 37,  87 => 35,  82 => 34,  73 => 32,  69 => 31,  65 => 30,  53 => 21,  47 => 18,  42 => 16,  25 => 1,);
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
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"{{ asset ('assets/css/styles.css')}}\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 
</head> 

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                <img class=\"profile\" src=\"{{ asset ('assets/images/profile.png')}}\" alt=\"\" />
                {% for s5ch12 in s5['ch12']  %}
\t\t\t\t<h1 class=\"name\"> {{ s5ch12.content }}</h1>
\t\t\t\t{% endfor %}
\t\t\t\t{% for s5ch13 in s5['ch13']  %}
                <h3 class=\"tagline\">{{ s5ch13.content }}</h3>
\t\t\t\t{% endfor %}
            </div><!--//profile-container-->
            
            <div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">{% for s5ch14 in s5['ch14']  %} {{ s5ch14.content }} {% endfor %}</a></li>
                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">{% for s5ch15 in s5['ch15']  %} {{ s5ch15.content }} {% endfor %}</a></li>
                    <li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">{% for s5ch16 in s5['ch16']  %} {{ s5ch16.content }} {% endfor %} </a></li>
                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">{% for s5ch17 in s5['ch17']  %} {{ s5ch17.content }} {% endfor %}</a></li>
                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">{% for s5ch18 in s5['ch18']  %} {{ s5ch18.content }} {% endfor %}</a></li>
                    <li class=\"twitter\"><i class=\"fa fa-twitter\"></i></li>
                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
\t\t\t\t{% for s6ch22 in s6['ch22']  %}
                    <h4 class=\"degree\">MSc in Computer Science</h4>
\t\t\t\t{% endfor %}\t
\t\t\t\t{% for s6ch22 in s6['ch22']  %}\t
                    <h5 class=\"meta\">University of London</h5>
\t\t\t\t{% endfor %}
\t\t\t\t{% for s6ch22 in s6['ch22']  %}\t
                    <div class=\"time\">2011 - 2012</div>
\t\t\t\t{% endfor %}\t
                </div><!--//item-->
                <div class=\"item\">
                    <h4 class=\"degree\">BSc in Applied Mathematics</h4>
                    <h5 class=\"meta\">Bristol University</h5>
                    <div class=\"time\">2007 - 2011</div>
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>English <span class=\"lang-desc\">(Native)</span></li>
                    <li>French <span class=\"lang-desc\">(Professional)</span></li>
                    <li>Spanish <span class=\"lang-desc\">(Professional)</span></li>
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
                    <p>Summarise your career here lorem ipsum dolor sit amet, consectetuer adipiscing elit. You can download this free resume/CV template here</a>. Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
                            <h3 class=\"job-title\">Lead Developer</h3>
                            <div class=\"time\">2015 - Present</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">Startup Hubs, San Francisco</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>Describe your role here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.</p>  
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
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
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <div class=\"item\">
                    <span class=\"project-title\"><a href=\"#hook\">Velocity</a></span> - <span class=\"project-tagline\">A responsive website template designed to help startups promote, market and sell their products.</span>
                    
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
                        <h3 class=\"level-title\">Python &amp; Django</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"98%\">
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

", ":templates:229826238840a11719f5668b1b47d5ec.html.twig", "/home/houssem/Application/app/Resources/views/templates/229826238840a11719f5668b1b47d5ec.html.twig");
    }
}
