<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_dbb511a79b2c79ad15ef5177768fe7ef1972fb5371ee6c6e407563337c00e0a7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "       
                             </div>
";
        }
        // line 11
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 12
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 13
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 15
        echo "
    


                    <span class=\"login100-form-title\">
                       Connecter Vous
                
                    </span>

                   

    <div class=\"wrap-input100\" >
                       <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

   

<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                        <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
   


<div class=\"text-center p-t-12\">

 <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
  <label for=\"remember_me\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
</div>

<div class=\"container-login100-form-btn\">
                        
                            <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    </div>

                    <div class=\"text-center p-t-16\">
                      
                        <a class=\"txt2\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" >
                          <h3>  Mot de passe oubliée ?</h3>
                        </a>

                    
                    </div>
                    <div class=\"container-login100-form-btn\">
                        
                            <div class=\"btn btn-default\">
                            <h5>  <a class=\"txt2\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">
                            
                            Create your Account
                            
                        </a></h5>

                    </div>
       
                 


   
 

    
</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 69,  111 => 60,  102 => 54,  94 => 49,  69 => 27,  55 => 15,  49 => 13,  47 => 12,  42 => 11,  36 => 8,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">×</span>
                                        </button>
{{ error.messageKey|trans(error.messageData, 'security') }}       
                             </div>
{% endif %}
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    


                    <span class=\"login100-form-title\">
                       Connecter Vous
                
                    </span>

                   

    <div class=\"wrap-input100\" >
                       <input class=\"input100\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

   

<div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                        <input class=\"input100\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
   


<div class=\"text-center p-t-12\">

 <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
  <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
</div>

<div class=\"container-login100-form-btn\">
                        
                            <input class=\"login100-form-btn\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />

                    </div>

                    <div class=\"text-center p-t-16\">
                      
                        <a class=\"txt2\" href=\"{{ path('fos_user_resetting_request') }}\" >
                          <h3>  Mot de passe oubliée ?</h3>
                        </a>

                    
                    </div>
                    <div class=\"container-login100-form-btn\">
                        
                            <div class=\"btn btn-default\">
                            <h5>  <a class=\"txt2\" href=\"{{ path('fos_user_registration_register') }}\">
                            
                            Create your Account
                            
                        </a></h5>

                    </div>
       
                 


   
 

    
</form>
", "FOSUserBundle:Security:login_content.html.twig", "/home/houssem/Application/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
