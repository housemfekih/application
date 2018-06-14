<?php

/* ::test.html.twig */
class __TwigTemplate_5c81479e896ef69f443728b3a6e846f0fe11518cb13234dcafb688510e2c016c extends Twig_Template
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
        echo "
  <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/css/jquery.steps.css"), "html", null, true);
        echo "\">
 
  <!-- App css -->
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/chosen.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/metismenu.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/css/style.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
 
 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">
                    <div class=\"container-fluid\">

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Form Wizard</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Forms</a></li>
                                        <li class=\"breadcrumb-item active\">Form Wizard</li>
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
                                    <h4 class=\"m-t-0 header-title\"><b>Basic Form Wizard</b></h4>
                                    <p class=\"text-muted m-b-30 font-13\">
                                        Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
                                    </p>

                                    <form id=\"basic-form\" action=\"#\">
                                        <div>
                                            <h3>Account</h3>
                                            <section>
                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"userName\">User name *</label>
                                                    <div class=\"\">
                                                        <input class=\"form-control required\" id=\"userName\" name=\"userName\" type=\"text\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"password\"> Password *</label>
                                                    <div class=\"\">
                                                        <input id=\"password\" name=\"password\" type=\"text\" class=\"required form-control\">

                                                    </div>
                                                </div>

                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"confirm\">Confirm Password *</label>
                                                    <div class=\"\">
                                                        <input id=\"confirm\" name=\"confirm\" type=\"text\" class=\"required form-control\">
                                                    </div>
                                                </div>

                                            </section>
                                            <h3>Profile</h3>
                                            <section>
                                                <div class=\"form-group clearfix\">

                                                    <label class=\"control-label\" for=\"name\"> First name *</label>
                                                    <div class=\"\">
                                                        <input id=\"name\" name=\"name\" type=\"text\" class=\"required form-control\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"surname\"> Last name *</label>
                                                    <div class=\"\">
                                                        <input id=\"surname\" name=\"surname\" type=\"text\" class=\"required form-control\">

                                                    </div>
                                                </div>

                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"email\">Email *</label>
                                                    <div class=\"\">
                                                        <input id=\"email\" name=\"email\" type=\"text\" class=\"required email form-control\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \" for=\"address\">Address *</label>
                                                    <div class=\"\">
                                                        <input id=\"address\" name=\"address\" type=\"text\" class=\"form-control\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group clearfix\">
                                                    <label class=\"control-label \">(*) Mandatory</label>
                                                </div>

                                            </section>
                                            <h3>Hints</h3>
                                            <section>
                                                <div class=\"form-group clearfix\">
                                                    <div class=\"col-lg-12\">
                                                        <ul class=\"list-unstyled w-list\">
                                                            <li><b>First Name :</b> Jonathan </li>
                                                            <li><b>Last Name :</b> Smith </li>
                                                            <li><b>Emial:</b> jonathan@smith.com</li>
                                                            <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </section>
                                            <h3>Finish</h3>
                                            <section>
                                                <div class=\"form-group clearfix\">
                                                    <div class=\"col-lg-12\">
                                                        <div class=\"checkbox checkbox-primary\">
                                                            <input id=\"checkbox-h\" type=\"checkbox\">
                                                            <label for=\"checkbox-h\">
                                                                I agree with the Terms and Conditions.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                     
                        </div><!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class=\"footer text-right\">
                    2017 - 2018 © Abstack. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


      <!-- jQuery  -->
        <script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/waypoints/lib/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>


        <!-- Required datatable js -->
         <script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
         <script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/datatables/dataTables.bootstrap4.min.js"), "html", null, true);
        echo "\"></script>


         <!--Form Wizard-->
         <script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/plugins/jquery.steps/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>

        <!--wizard initialization-->
        <script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.wizard-init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/prism.js"), "html", null, true);
        echo "\"></script>


            <!-- jQuery  -->
     <script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
       <script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
       <script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

        <!--Form Wizard-->
       <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/plugins/jquery.steps/js/jquery.steps.min.js"), "html", null, true);
        echo "\"></script>
        <!--wizard initialization-->
     <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/pages/jquery.wizard-init.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
       <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "::test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 208,  314 => 207,  308 => 204,  303 => 202,  297 => 199,  293 => 198,  289 => 197,  285 => 196,  281 => 195,  277 => 194,  270 => 190,  266 => 189,  261 => 187,  255 => 184,  248 => 180,  244 => 179,  237 => 175,  233 => 174,  229 => 173,  225 => 172,  221 => 171,  217 => 170,  213 => 169,  209 => 168,  50 => 12,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::test.html.twig", "/home/houssem/myApp/app/Resources/views/test.html.twig");
    }
}
