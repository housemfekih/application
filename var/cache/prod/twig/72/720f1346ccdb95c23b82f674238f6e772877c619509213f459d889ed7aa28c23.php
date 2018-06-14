<?php

/* :template:new.html.twig */
class __TwigTemplate_030ffd47bf944dc72914284d336434d751f55d4ad0f8941b265f8e52c3001a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", ":template:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "     
       <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Form Wizard</h4>

                                    <ol class=\"breadcrumb float-right\">
                                       
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("template_index");
        echo "\">Liste template</a></li>
                                        <li class=\"breadcrumb-item active\">Nouveau template</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <!-- Basic Form Wizard -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"card-box\">
                                    <h4 class=\"m-t-0 header-title\"><b>Nouveau template</b></h4>
                                  


";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-group clearfix", "id" => "basic-form")));
        echo "
    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div>
  <h3>Nom template</h3>
     <section>

    <div>
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nomTemplate", array()), 'label');
        echo "
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nomTemplate", array()), 'errors');
        echo "
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nomTemplate", array()), 'widget');
        echo "
    </div>

    </section>
  <h3>Groupe</h3>
<section>

 <div>  
 
     
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "groupeID", array()), 'row');
        echo "
    

    </section>

  <h3>Fichier</h3>
<section>

    <div>
       ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fichierTemplate", array()), 'label');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fichierTemplate", array()), 'errors');
        echo "
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fichierTemplate", array()), 'widget');
        echo "
    </div>

    </section>
    
";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "


                                   </div>
                                   </div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t\t   </div>

                        <!-- End row -->







 ";
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "    <script>
\$(document).ready( function () {

  //\$(\".chosen-select\").chosen({});
});

    </script>
        ";
    }

    public function getTemplateName()
    {
        return ":template:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 85,  148 => 84,  126 => 66,  118 => 61,  114 => 60,  110 => 59,  98 => 50,  85 => 40,  81 => 39,  77 => 38,  68 => 32,  64 => 31,  42 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":template:new.html.twig", "/home/houssem/myApp/app/Resources/views/template/new.html.twig");
    }
}
