<?php

/* ::dashboard.html.twig */
class __TwigTemplate_2e661047f821b9381165351b223b3805b2150b95a5ed54f2d07fb18868ea5b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "::dashboard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "


   <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
           

                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"page-title-box\">
                                    <h4 class=\"page-title float-left\">Dashboard</h4>

                                    <ol class=\"breadcrumb float-right\">
                                        <li class=\"breadcrumb-item\"><a href=\"#\">Abstack</a></li>
                                        <li class=\"breadcrumb-item active\">Dashboard</li>
                                    </ol>

                                    <div class=\"clearfix\"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class=\"row\">
                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-box float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Orders ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "champs", array(), "array")), "html", null, true);
        echo "</h4>
                                    <span class=\"badge badge-primary\"> +11% </span> <span class=\"text-muted ml-2 vertical-middle\">From previous period</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-layers float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Templates</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "Templates", array(), "array")), "html", null, true);
        echo "</span></h4>
                                    <span class=\"badge badge-primary\"> -29% </span> <span class=\"text-muted ml-2 vertical-middle\">From previous period</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-tag float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Average Price</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">";
        // line 53
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? null), "Users", array(), "array")), "html", null, true);
        echo "</span></h4>
                                    <span class=\"badge badge-primary\"> 0% </span> <span class=\"text-muted ml-2 vertical-middle\">From previous period</span>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Product Sold</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">1,890</h4>
                                    <span class=\"badge badge-primary\"> +89% </span> <span class=\"text-muted ml-2 vertical-middle\">Last year</span>
                                </div>
                            </div>
                        </div>


                 
                        <!-- end row -->

                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Messages</h4>

                                    <div class=\"inbox-widget slimscroll\" style=\"max-height: 370px;\">
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-1.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Chadengle</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-2.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Tomaslau</p>
                                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                <p class=\"inbox-item-date\">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-3.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Stillnotdavid</p>
                                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                <p class=\"inbox-item-date\">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-4.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Kurafire</p>
                                                <p class=\"inbox-item-text\">Nice to meet you</p>
                                                <p class=\"inbox-item-date\">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-5.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Shahedk</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-6.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Adhamdannaway</p>
                                                <p class=\"inbox-item-text\">This theme is awesome!</p>
                                                <p class=\"inbox-item-date\">9:56 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-8.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Arashasghari</p>
                                                <p class=\"inbox-item-text\">Hey! there I'm available...</p>
                                                <p class=\"inbox-item-date\">10:15 AM</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"inbox-item\">
                                                <div class=\"inbox-item-img\"><img src=\"assets/images/users/avatar-9.jpg\" class=\"rounded-circle bx-shadow-lg\" alt=\"\"></div>
                                                <p class=\"inbox-item-author\">Joshaustin</p>
                                                <p class=\"inbox-item-text\">I've finished it! See you so...</p>
                                                <p class=\"inbox-item-date\">9:56 AM</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Latest Comments</h4>

                                    <div class=\"comment-list slimscroll\" style=\"max-height: 370px;\">
                                        <a href=\"#\">
                                            <div class=\"comment-box-item\">
                                                <div class=\"badge badge-pill badge-success\">Ubold - Admin</div>
                                                <p class=\"commnet-item-date\">1 month ago</p>
                                                <h6 class=\"commnet-item-msg\">Do you have any plans to add a vertical menu?</h6>
                                                <p class=\"commnet-item-user\">Ubold User</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"comment-box-item\">
                                                <div class=\"badge badge-pill badge-warning\">Adminox - Admin</div>
                                                <p class=\"commnet-item-date\">1 month ago</p>
                                                <h6 class=\"commnet-item-msg\">Hello, what is your plan to upgrade Bootstrap 4 versions? Beta or wait for stable?</h6>
                                                <p class=\"commnet-item-user\">Ubold User</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"comment-box-item\">
                                                <div class=\"badge badge-pill badge-primary\">Staro - Landing</div>
                                                <p class=\"commnet-item-date\">1 month ago</p>
                                                <h6 class=\"commnet-item-msg\">Hi coderthemes – do you have PSD for this admin UI? I could really use it.</h6>
                                                <p class=\"commnet-item-user\">Ubold User</p>
                                            </div>
                                        </a>
                                        <a href=\"#\">
                                            <div class=\"comment-box-item\">
                                                <div class=\"badge badge-pill badge-dark\">Ubold - Admin</div>
                                                <p class=\"commnet-item-date\">1 month ago</p>
                                                <h6 class=\"commnet-item-msg\">Do you have any plans to add a vertical menu?</h6>
                                                <p class=\"commnet-item-user\">Ubold User</p>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére connexions</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 193
        $context["i"] = 0;
        // line 194
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "Users", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((($context["i"] ?? null) < 3)) {
                // line 195
                echo "                                        <li>
                                            <i class=\"dripicons-arrow-down text-success\"></i>
                                            <span class=\"pull-right text-success tran-price\">";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</span>
                                            <span class=\"pull-right text-muted\">";
                // line 198
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 201
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 202
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                                    </ul>

                                </div>
                            </div>

                        </div>



      


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



";
    }

    public function getTemplateName()
    {
        return "::dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 205,  257 => 202,  255 => 201,  249 => 198,  245 => 197,  241 => 195,  235 => 194,  233 => 193,  90 => 53,  78 => 44,  66 => 35,  62 => 34,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::dashboard.html.twig", "/home/houssem/myApp/app/Resources/views/dashboard.html.twig");
    }
}
