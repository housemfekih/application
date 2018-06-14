<?php

/* :templates:94d88c307afd64895a29b86c4a9c5230.html.twig */
class __TwigTemplate_c62c9d81444f2af09fd5bde6866170d7d9432244726fcf0629db7679d06cc715 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch12", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch13", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch14", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch15", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch16", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch17", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch18", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? null), "ch19", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? null), "ch22", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s6ch22"]) {
            // line 68
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? null), "ch23", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s6ch23"]) {
                // line 69
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s6"] ?? null), "ch24", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s7"] ?? null), "ch25", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s7"] ?? null), "ch26", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s8"] ?? null), "ch27", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s9"] ?? null), "ch28", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch29", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s10ch29"]) {
            // line 127
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch30", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["s10ch30"]) {
                // line 128
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch31", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["s10ch31"]) {
                    // line 129
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch32", array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["s10ch32"]) {
                        // line 130
                        echo "\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch33", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["s10ch33"]) {
                            // line 131
                            echo "\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s10"] ?? null), "ch34", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s11"] ?? null), "ch35", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s11ch35"]) {
            echo "\t
                    ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s11"] ?? null), "ch36", array(), "array"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s12"] ?? null), "ch37", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s12ch37"]) {
            // line 172
            echo "\t\t\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s12"] ?? null), "ch38", array(), "array"));
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
        return array (  533 => 201,  528 => 199,  524 => 198,  505 => 181,  499 => 180,  488 => 175,  482 => 173,  477 => 172,  473 => 171,  462 => 162,  456 => 161,  445 => 159,  441 => 158,  435 => 157,  423 => 147,  417 => 146,  411 => 145,  405 => 144,  399 => 143,  393 => 142,  383 => 138,  375 => 135,  368 => 133,  363 => 132,  358 => 131,  353 => 130,  348 => 129,  343 => 128,  338 => 127,  334 => 126,  323 => 117,  314 => 115,  310 => 114,  285 => 101,  273 => 91,  264 => 89,  260 => 88,  246 => 86,  235 => 77,  229 => 76,  223 => 75,  214 => 72,  210 => 71,  205 => 70,  200 => 69,  195 => 68,  191 => 67,  184 => 62,  175 => 60,  171 => 59,  168 => 58,  159 => 56,  154 => 55,  145 => 53,  140 => 52,  131 => 50,  127 => 49,  124 => 48,  115 => 46,  110 => 45,  101 => 43,  97 => 42,  90 => 37,  81 => 35,  76 => 34,  67 => 32,  63 => 31,  59 => 30,  47 => 21,  41 => 18,  36 => 16,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":templates:94d88c307afd64895a29b86c4a9c5230.html.twig", "/home/houssem/myApp/app/Resources/views/templates/94d88c307afd64895a29b86c4a9c5230.html.twig");
    }
}
