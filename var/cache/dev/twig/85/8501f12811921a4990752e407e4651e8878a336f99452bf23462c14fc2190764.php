<?php

/* ::test2.html.twig */
class __TwigTemplate_1b21dd43d239adeb3a3375ac0af241cfd4bf1b6cb06e6a9aae6e64e55a291803 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::test2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::test2.html.twig"));

        // line 1
        echo "<select class=\"image-picker\" multiple>

  <optgroup label=\"PlaceIMG\">

    <option data-img-src=\"https://placeimg.com/220/200/animals\" value=\"1\">PlaceIMG 1</option>

    <option data-img-src=\"https://placeimg.com/220/200/arch\" value=\"2\">PlaceIMG 2</option>

    <option data-img-src=\"https://placeimg.com/220/200/nature\" value=\"3\">PlaceIMG 3</option>

    <option data-img-src=\"https://placeimg.com/220/200/people\" value=\"4\">PlaceIMG 4</option>

    

  </optgroup>

  <optgroup label=\"picsum.photos\">

    <option data-img-src=\"https://picsum.photos/200/200/?random\" value=\"5\">picsum.photos 1</option>
    <option data-img-src=\"https://picsum.photos/230/200/?random\" value=\"6\">picsum.photos 2</option>

    <option data-img-src=\"https://picsum.photos/150/200/?random\" value=\"7\">picsum.photos 3</option>
    <option data-img-src=\"https://picsum.photos/270/200/?random\" value=\"8\">picsum.photos 4</option>
    
  </optgroup>
</select>


<script>

\$(\".image-picker\").imagepicker()
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::test2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<select class=\"image-picker\" multiple>

  <optgroup label=\"PlaceIMG\">

    <option data-img-src=\"https://placeimg.com/220/200/animals\" value=\"1\">PlaceIMG 1</option>

    <option data-img-src=\"https://placeimg.com/220/200/arch\" value=\"2\">PlaceIMG 2</option>

    <option data-img-src=\"https://placeimg.com/220/200/nature\" value=\"3\">PlaceIMG 3</option>

    <option data-img-src=\"https://placeimg.com/220/200/people\" value=\"4\">PlaceIMG 4</option>

    

  </optgroup>

  <optgroup label=\"picsum.photos\">

    <option data-img-src=\"https://picsum.photos/200/200/?random\" value=\"5\">picsum.photos 1</option>
    <option data-img-src=\"https://picsum.photos/230/200/?random\" value=\"6\">picsum.photos 2</option>

    <option data-img-src=\"https://picsum.photos/150/200/?random\" value=\"7\">picsum.photos 3</option>
    <option data-img-src=\"https://picsum.photos/270/200/?random\" value=\"8\">picsum.photos 4</option>
    
  </optgroup>
</select>


<script>

\$(\".image-picker\").imagepicker()
</script>", "::test2.html.twig", "/home/houssem/myApp/app/Resources/views/test2.html.twig");
    }
}
