<?php

/* ::test2.html.twig */
class __TwigTemplate_6c157ab7225b5be61506f5ab14308ada12e675a2b0c560bcf366300ca86fa79e extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "::test2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::test2.html.twig", "/home/houssem/myApp/app/Resources/views/test2.html.twig");
    }
}
