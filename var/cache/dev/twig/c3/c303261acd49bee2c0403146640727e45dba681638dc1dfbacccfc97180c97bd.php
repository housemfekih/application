<?php

/* :templates:250bad76cff41f7a53ef389827474235.html.twig */
class __TwigTemplate_cc942a4d55216b0d76f64b038976985bf301b3a47598e8417c36e79544db4e6d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:250bad76cff41f7a53ef389827474235.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:250bad76cff41f7a53ef389827474235.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/styles-2.css"), "html", null, true);
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
                <h3 class=\"tagline\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch12"], "content", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch12'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div><!--//profile-container-->
\t\t\t<div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s5"] ?? $this->getContext($context, "s5")), "ch14", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s5ch14"]) {
            // line 39
            echo "                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s5ch14"], "content", array()), "html", null, true);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s5ch14'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </ul>
            </div><!--//contact-container-->
            </div><!--//profile-container-->
            </div><!--//profile-container-->
            

 
    <footer class=\"footer\">
        <div class=\"text-center\">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class=\"copyright\">Designed with <i class=\"fa fa-heart\"></i> by <a href=\"http://themes.3rdwavemedia.com\" target=\"_blank\">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 59
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
        return ":templates:250bad76cff41f7a53ef389827474235.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 59,  125 => 57,  121 => 56,  104 => 41,  95 => 39,  91 => 38,  86 => 35,  78 => 33,  73 => 32,  69 => 31,  65 => 30,  53 => 21,  47 => 18,  42 => 16,  25 => 1,);
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
    <link id=\"theme-style\" rel=\"stylesheet\" href=\"{{ asset ('assets/css/styles-2.css')}}\">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 
</head> 

<body>
    <div class=\"wrapper\">
        <div class=\"sidebar-wrapper\">
            <div class=\"profile-container\">
                <img class=\"profile\" src=\"{{ asset ('assets/images/profile.png')}}\" alt=\"\" />
                {% for s5ch12 in s5['ch12']  %}
\t\t\t\t<h1 class=\"name\"> {{ s5ch12.content }}</h1>
                <h3 class=\"tagline\">{{ s5ch12.content }}</h3>
\t\t\t\t{% endfor %}
            </div><!--//profile-container-->
\t\t\t<div class=\"contact-container container-block\">
                <ul class=\"list-unstyled contact-list\">
\t\t\t\t{% for s5ch14 in s5['ch14']  %}
                    <li class=\"email\"><i class=\"fa fa-envelope\"></i><a href=\"mailto: yourname@email.com\">{{ s5ch14.content }}</a></li>
                  {% endfor %}
                </ul>
            </div><!--//contact-container-->
            </div><!--//profile-container-->
            </div><!--//profile-container-->
            

 
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

", ":templates:250bad76cff41f7a53ef389827474235.html.twig", "/home/houssem/Application/app/Resources/views/templates/250bad76cff41f7a53ef389827474235.html.twig");
    }
}
