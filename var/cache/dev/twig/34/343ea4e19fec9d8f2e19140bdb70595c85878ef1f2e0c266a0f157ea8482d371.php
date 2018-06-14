<?php

/* :templates:9b9938c0cd99c9163a7079db2cc0f899.html.twig */
class __TwigTemplate_169fd924aa2bb2d3fb7eb712bfab4316b0d621f0536525e2cb982a9fe99c7ca3 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:9b9938c0cd99c9163a7079db2cc0f899.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":templates:9b9938c0cd99c9163a7079db2cc0f899.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s1"] ?? $this->getContext($context, "s1")), "ch1", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s1ch1"]) {
            // line 32
            echo "\t\t\t\t<h1 class=\"name\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s1ch1"], "content", array()), "html", null, true);
            echo "</h1>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s1ch1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["s1"] ?? $this->getContext($context, "s1")), "ch2", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["s1ch2"]) {
            // line 35
            echo "                <h3 class=\"tagline\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s1ch2"], "content", array()), "html", null, true);
            echo "</h3>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s1ch2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div><!--//profile-container-->
            
            
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>    
    <!-- custom js -->
    <script type=\"text/javascript\" src=\"";
        // line 54
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
        return ":templates:9b9938c0cd99c9163a7079db2cc0f899.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 54,  116 => 52,  112 => 51,  96 => 37,  87 => 35,  82 => 34,  73 => 32,  69 => 31,  65 => 30,  53 => 21,  47 => 18,  42 => 16,  25 => 1,);
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
                {% for s1ch1 in s1['ch1']  %}
\t\t\t\t<h1 class=\"name\"> {{ s1ch1.content }}</h1>
\t\t\t\t{% endfor %}
\t\t\t\t{% for s1ch2 in s1['ch2']  %}
                <h3 class=\"tagline\">{{ s1ch2.content }}</h3>
\t\t\t\t{% endfor %}
            </div><!--//profile-container-->
            
            
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

", ":templates:9b9938c0cd99c9163a7079db2cc0f899.html.twig", "/home/houssem/myApp/app/Resources/views/templates/9b9938c0cd99c9163a7079db2cc0f899.html.twig");
    }
}
