<?php

/* :templates:94d88c307afd64895a29b86c4a9c5230.html.twig */
class __TwigTemplate_f8f04ae4dfca3c25ed612dea452806322d2281d1786958fcda2067e948d67fb3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:94d88c307afd64895a29b86c4a9c5230.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:94d88c307afd64895a29b86c4a9c5230.html.twig"));

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
\t\t\t
\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch14", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch14"]) {
            // line 43
            echo "\t\t\t  <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch14"], "content", array()), "html", null, true);
            echo "</a></li>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch14'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch15", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch15"]) {
            // line 46
            echo "                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch15"], "content", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch15'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch16", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch16"]) {
            // line 50
            echo "\t\t\t\t\t<li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch16"], "content", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch16'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch17", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch17"]) {
            // line 53
            echo "                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch17"], "content", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch17'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch18", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch18"]) {
            // line 56
            echo "                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch18"], "content", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch18'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch19", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch19"]) {
            // line 60
            echo "\t\t\t\t\t   <li class=\"twitter\"><i class=\"fa fa-twitter\"></i><a href=\"https://twitter.com/3rdwave_themes\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch19"], "content", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch19'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch22", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s6ch22"]) {
            // line 68
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch23", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s6ch23"]) {
                // line 69
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? $this->getContext($context, "s6")), "ch24", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["s6ch24"]) {
                    // line 70
                    echo "                    <h4 class=\"degree\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s6ch22"], "content", array()), "html", null, true);
                    echo "</h4>
                    <h5 class=\"meta\">";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s6ch23"], "content", array()), "html", null, true);
                    echo "</h5>
                    <div class=\"time\">";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s6ch24"], "content", array()), "html", null, true);
                    echo "</div>
\t\t\t\t\t
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch24'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch23'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s6ch22'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </div><!--//item-->
                
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
\t\t\t\t
\t\t\t\t
                    <li>";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s7"] ?? $this->getContext($context, "s7")), "ch25", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s7ch25"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s7ch25"], "content", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s7ch25'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <span class=\"lang-desc\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s7"] ?? $this->getContext($context, "s7")), "ch26", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s7ch26"]) {
            // line 89
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s7ch26"], "content", array()), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s7ch26'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t\t</span></li>
                    
\t\t\t\t\t
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
\t\t\t\t
                    <li>";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s8"] ?? $this->getContext($context, "s8")), "ch27", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s8ch27"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s8ch27"], "content", array()), "html", null, true);
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s8ch27'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</li>
               
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
\t\t\t\t
\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s9"] ?? $this->getContext($context, "s9")), "ch28", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s9ch28"]) {
            // line 115
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s9ch28"], "content", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s9ch28'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch29", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s10ch29"]) {
            // line 127
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch30", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s10ch30"]) {
                // line 128
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch31", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["s10ch31"]) {
                    // line 129
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch32", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["s10ch32"]) {
                        // line 130
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch33", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["s10ch33"]) {
                            // line 131
                            echo "\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? $this->getContext($context, "s10")), "ch34", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["s10ch34"]) {
                                // line 132
                                echo "                            <h3 class=\"job-title\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch29"], "content", array()), "html", null, true);
                                echo "</h3>
                            <div class=\"time\">";
                                // line 133
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch30"], "content", array()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch31"], "content", array()), "html", null, true);
                                echo "</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">";
                                // line 135
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch32"], "content", array()), "html", null, true);
                                echo " - ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch33"], "content", array()), "html", null, true);
                                echo "</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>";
                                // line 138
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s10ch34"], "content", array()), "html", null, true);
                                echo " </p>
                    </div><!--//details-->
                </div><!--//item-->
                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch34'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 142
                            echo "\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch33'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch32'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 144
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch31'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch30'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s10ch29'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "              
                
               
                
            </section><!--//section-->
            
            <section class=\"section projects-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-archive\"></i>Projects</h2>
             
                <div class=\"item\">
\t\t\t\t\t";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s11"] ?? $this->getContext($context, "s11")), "ch35", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s11ch35"]) {
            echo "\t
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s11"] ?? $this->getContext($context, "s11")), "ch36", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s11ch36"]) {
                // line 159
                echo "                    <span class=\"project-title\"><a href=\"#hook\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s11ch35"], "content", array()), "html", null, true);
                echo "</a></span> - <span class=\"project-tagline\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s11ch36"], "content", array()), "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s11ch36'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s11ch35'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                </div><!--//item-->
\t\t\t\t
              
            </section><!--//section-->
            
            <section class=\"skills-section section\">
                <h2 class=\"section-title\"><i class=\"fa fa-rocket\"></i>Skills &amp; Proficiency</h2>
                <div class=\"skillset\">        
                    <div class=\"item\">
\t\t\t\t\t ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s12"] ?? $this->getContext($context, "s12")), "ch37", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s12ch37"]) {
            // line 172
            echo "\t\t\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s12"] ?? $this->getContext($context, "s12")), "ch38", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s12ch38"]) {
                // line 173
                echo "                        <h3 class=\"level-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s12ch37"], "content", array()), "html", null, true);
                echo "</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["s12ch38"], "content", array()), "html", null, true);
                echo "%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s12ch38'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s12ch37'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                   
                    
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
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 201
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
        return ":templates:94d88c307afd64895a29b86c4a9c5230.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 201,  534 => 199,  530 => 198,  511 => 181,  505 => 180,  494 => 175,  488 => 173,  483 => 172,  479 => 171,  468 => 162,  462 => 161,  451 => 159,  447 => 158,  441 => 157,  429 => 147,  423 => 146,  417 => 145,  411 => 144,  405 => 143,  399 => 142,  389 => 138,  381 => 135,  374 => 133,  369 => 132,  364 => 131,  359 => 130,  354 => 129,  349 => 128,  344 => 127,  340 => 126,  329 => 117,  320 => 115,  316 => 114,  291 => 101,  279 => 91,  270 => 89,  266 => 88,  252 => 86,  241 => 77,  235 => 76,  229 => 75,  220 => 72,  216 => 71,  211 => 70,  206 => 69,  201 => 68,  197 => 67,  190 => 62,  181 => 60,  177 => 59,  174 => 58,  165 => 56,  160 => 55,  151 => 53,  146 => 52,  137 => 50,  133 => 49,  130 => 48,  121 => 46,  116 => 45,  107 => 43,  103 => 42,  96 => 37,  87 => 35,  82 => 34,  73 => 32,  69 => 31,  65 => 30,  53 => 21,  47 => 18,  42 => 16,  25 => 1,);
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
\t\t\t
\t\t\t{% for s5ch14 in s5['ch14']  %}
\t\t\t  <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">{{ s5ch14.content }}</a></li>
\t\t\t  {% endfor %}
\t\t\t\t\t{% for s5ch15 in s5['ch15']  %}
                    <li class=\"phone\"><i class=\"fa fa-phone\"></i><a href=\"tel:0123 456 789\">{{ s5ch15.content }}</a></li>
                    {% endfor %}
\t\t\t\t\t
\t\t\t\t\t{% for s5ch16 in s5['ch16']  %}
\t\t\t\t\t<li class=\"website\"><i class=\"fa fa-globe\"></i><a href=\"http://themes.3rdwavemedia.com/website-templates/free-responsive-website-template-for-developers/\" target=\"_blank\">{{ s5ch16.content }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for s5ch17 in s5['ch17']  %}
                    <li class=\"linkedin\"><i class=\"fa fa-linkedin\"></i><a href=\"#\" target=\"_blank\">{{ s5ch17.content }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for s5ch18 in s5['ch18']  %}
                    <li class=\"github\"><i class=\"fa fa-github\"></i><a href=\"#\" target=\"_blank\">{{ s5ch18.content }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t\t{% for s5ch19 in s5['ch19']  %}
\t\t\t\t\t   <li class=\"twitter\"><i class=\"fa fa-twitter\"></i><a href=\"https://twitter.com/3rdwave_themes\" target=\"_blank\">{{ s5ch19.content }}</a></li>
\t\t\t\t\t{% endfor %}
                </ul>
            </div><!--//contact-container-->
            <div class=\"education-container container-block\">
                <h2 class=\"container-block-title\">Education</h2>
                <div class=\"item\">
\t\t\t\t{% for s6ch22 in s6['ch22']  %}
\t\t\t\t{% for s6ch23 in s6['ch23']  %}
\t\t\t\t{% for s6ch24 in s6['ch24']  %}
                    <h4 class=\"degree\">{{ s6ch22.content }}</h4>
                    <h5 class=\"meta\">{{ s6ch23.content }}</h5>
                    <div class=\"time\">{{ s6ch24.content }}</div>
\t\t\t\t\t
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endfor %}
                </div><!--//item-->
                
            </div><!--//education-container-->
            
            <div class=\"languages-container container-block\">
                <h2 class=\"container-block-title\">Languages</h2>
                <ul class=\"list-unstyled interests-list\">
\t\t\t\t
\t\t\t\t
                    <li>{% for s7ch25 in s7['ch25']  %} {{ s7ch25.content }} {% endfor %} <span class=\"lang-desc\">
\t\t\t\t\t
\t\t\t\t\t{% for s7ch26 in s7['ch26']  %}
\t\t\t\t\t{{ s7ch26.content }}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</span></li>
                    
\t\t\t\t\t
                </ul>
            </div><!--//interests-->
            
            <div class=\"interests-container container-block\">
                <h2 class=\"container-block-title\">Interests</h2>
                <ul class=\"list-unstyled interests-list\">
\t\t\t\t
                    <li>{% for s8ch27 in s8['ch27']  %} {{ s8ch27.content }}  {% endfor %}</li>
               
                </ul>
            </div><!--//interests-->
            
        </div><!--//sidebar-wrapper-->
        
        <div class=\"main-wrapper\">
            
            <section class=\"section summary-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-user\"></i>Career Profile</h2>
                <div class=\"summary\">
\t\t\t\t
\t\t\t\t{% for s9ch28 in s9['ch28']  %}
\t\t\t\t{{ s9ch28.content }}
\t\t\t\t{% endfor %}
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class=\"section experiences-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-briefcase\"></i>Experiences</h2>
                
                <div class=\"item\">
                    <div class=\"meta\">
                        <div class=\"upper-row\">
\t\t\t\t\t\t{% for s10ch29 in s10['ch29']  %}
\t\t\t\t\t\t{% for s10ch30 in s10['ch30']  %}
\t\t\t\t\t\t{% for s10ch31 in s10['ch31']  %}
\t\t\t\t\t\t{% for s10ch32 in s10['ch32']  %}
\t\t\t\t\t\t{% for s10ch33 in s10['ch33']  %}
\t\t\t\t\t\t{% for s10ch34 in s10['ch34']  %}
                            <h3 class=\"job-title\">{{ s10ch29.content }}</h3>
                            <div class=\"time\">{{ s10ch30.content }}-{{ s10ch31.content }}</div>
                        </div><!--//upper-row-->
                        <div class=\"company\">{{ s10ch32.content }} - {{ s10ch33.content }}</div>
                    </div><!--//meta-->
                    <div class=\"details\">
                        <p>{{ s10ch34.content }} </p>
                    </div><!--//details-->
                </div><!--//item-->
                {% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
              
                
               
                
            </section><!--//section-->
            
            <section class=\"section projects-section\">
                <h2 class=\"section-title\"><i class=\"fa fa-archive\"></i>Projects</h2>
             
                <div class=\"item\">
\t\t\t\t\t{% for s11ch35 in s11['ch35']  %}\t
                    {% for s11ch36 in s11['ch36']  %}
                    <span class=\"project-title\"><a href=\"#hook\">{{ s11ch35.content }}</a></span> - <span class=\"project-tagline\">{{ s11ch36.content }}</span>
                    {% endfor %}
\t\t\t\t\t{% endfor %}
                </div><!--//item-->
\t\t\t\t
              
            </section><!--//section-->
            
            <section class=\"skills-section section\">
                <h2 class=\"section-title\"><i class=\"fa fa-rocket\"></i>Skills &amp; Proficiency</h2>
                <div class=\"skillset\">        
                    <div class=\"item\">
\t\t\t\t\t {% for s12ch37 in s12['ch37']  %}
\t\t\t\t\t {% for s12ch38 in s12['ch38']  %}
                        <h3 class=\"level-title\">{{ s12ch37.content }}</h3>
                        <div class=\"level-bar\">
                            <div class=\"level-bar-inner\" data-level=\"{{ s12ch38.content }}%\">
                            </div>                                      
                        </div><!--//level-bar-->                                 
                    </div><!--//item-->
                    {% endfor %}
\t\t\t\t\t{% endfor %}
                   
                    
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

", ":templates:94d88c307afd64895a29b86c4a9c5230.html.twig", "/home/houssem/Application/app/Resources/views/templates/94d88c307afd64895a29b86c4a9c5230.html.twig");
    }
}
