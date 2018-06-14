<?php

/* ::test.html.twig */
class __TwigTemplate_01d615ab6b8e3cd3db6fd74104be35a9db3f46477d0f8ab7223fe4a17ae2ce3c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::test.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  324 => 208,  320 => 207,  314 => 204,  309 => 202,  303 => 199,  299 => 198,  295 => 197,  291 => 196,  287 => 195,  283 => 194,  276 => 190,  272 => 189,  267 => 187,  261 => 184,  254 => 180,  250 => 179,  243 => 175,  239 => 174,  235 => 173,  231 => 172,  227 => 171,  223 => 170,  219 => 169,  215 => 168,  56 => 12,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
  <!--Form Wizard-->
       <link rel=\"stylesheet\" href=\"{{ asset ('template/plugins/jquery.steps/css/jquery.steps.css')}}\">
 
  <!-- App css -->
        <link rel=\"stylesheet\" href=\"{{ asset ('css/chosen.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/icons.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/metismenu.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('template/assets/css/style.css')}}\">

        <script src=\"{{ asset ('template/assets/js/modernizr.min.js')}}\"></script>
 
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
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/waypoints/lib/jquery.waypoints.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/counterup/jquery.counterup.min.js')}}\"></script>


        <!-- Required datatable js -->
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/datatables/dataTables.bootstrap4.min.js')}}\"></script>


         <!--Form Wizard-->
         <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/plugins/jquery.steps/js/jquery.steps.min.js')}}\"></script>

        <!--wizard initialization-->
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.wizard-init.js')}}\"></script>

\t<script src=\"{{ asset ('js/chosen.jquery.min.js')}}\"></script>
\t<script src=\"{{ asset ('js/prism.js')}}\"></script>


            <!-- jQuery  -->
     <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/popper.min.js')}}\"></script>
       <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/bootstrap.min.js')}}\"></script>
       <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/metisMenu.min.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/waves.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.slimscroll.js')}}\"></script>

        <!--Form Wizard-->
       <script type=\"text/javascript\" src=\"{{ asset ('template/plugins/jquery.steps/js/jquery.steps.min.js')}}\"></script>
        <!--wizard initialization-->
     <script type=\"text/javascript\" src=\"{{ asset ('template/assets/pages/jquery.wizard-init.js')}}\"></script>

        <!-- App js -->
       <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.core.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset ('template/assets/js/jquery.app.js')}}\"></script>
", "::test.html.twig", "/home/houssem/myApp/app/Resources/views/test.html.twig");
    }
}
