<?php

/* ::dashboard.html.twig */
class __TwigTemplate_a9ab73032130a35d141e64fec859f55be282d2c38d16de8cd734d77109efd7f7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                    <h6 class=\"text-muted text-uppercase mb-3\">Champs</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">";
        // line 35
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "champs", array(), "array")), "html", null, true);
        echo "</h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-layers float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Templates</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">";
        // line 43
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Templates", array(), "array")), "html", null, true);
        echo "</span></h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-tag float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Utilisateurs</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">";
        // line 51
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Users", array(), "array")), "html", null, true);
        echo "</span></h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">CVs</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">";
        // line 59
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Cvs", array(), "array")), "html", null, true);
        echo "</h4>
                                </div>
                            </div>

                             <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Groupes</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">";
        // line 67
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Groupes", array(), "array")), "html", null, true);
        echo "</h4>
                                </div>
                            </div>

                             <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Sections</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Sections", array(), "array")), "html", null, true);
        echo "</h4>
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
        // line 205
        $context["i"] = 0;
        // line 206
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Users", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 207
                echo "                                        <li>
                                            <i class=\"dripicons-arrow-down text-success\"></i>
                                            <span class=\"pull-right text-success tran-price\">";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</span>
                                            <span class=\"pull-right text-muted\">";
                // line 210
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 213
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 214
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                    </ul>

                                </div>
                            </div>


                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére champs</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 228
        $context["i"] = 0;
        // line 229
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "champs", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 230
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "nomChamp", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "typeChamp", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 239
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 240
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "                                    </ul>

                                </div>
                            </div>


                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére groupes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 254
        $context["i"] = 0;
        // line 255
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Groupes", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 256
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "nomGroupe", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 265
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 266
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                    </ul>

                                </div>
                            </div>

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére sections</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 279
        $context["i"] = 0;
        // line 280
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Sections", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 281
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 283
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "nomSection", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 290
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 291
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo "                                    </ul>

                                </div>
                            </div>

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére tempaltes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 304
        $context["i"] = 0;
        // line 305
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Templates", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 306
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 308
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "nomTemplate", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 310
                echo twig_escape_filter($this->env, $this->getAttribute($context["template"], "id", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 315
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 316
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        echo "                                    </ul>

                                </div>
                            </div>
                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére Cvs</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 328
        $context["i"] = 0;
        // line 329
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Cvs", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["cv"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 330
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 332
                echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "nomCv", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 334
                echo twig_escape_filter($this->env, $this->getAttribute($context["cv"], "id", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 339
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 340
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 343
        echo "                                    </ul>

                                </div>
                            </div>  

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére comptes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        ";
        // line 353
        $context["i"] = 0;
        // line 354
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "Users_compte", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            if ((($context["i"] ?? $this->getContext($context, "i")) < 3)) {
                // line 355
                echo "                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">";
                // line 357
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</span>

                                             <span class=\"pull-right text-muted\">";
                // line 359
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        ";
                // line 364
                $context["i"] = (($context["i"] ?? $this->getContext($context, "i")) + 1);
                // line 365
                echo "                                        
                                        
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 368
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  591 => 368,  582 => 365,  580 => 364,  572 => 359,  567 => 357,  563 => 355,  557 => 354,  555 => 353,  543 => 343,  534 => 340,  532 => 339,  524 => 334,  519 => 332,  515 => 330,  509 => 329,  507 => 328,  496 => 319,  487 => 316,  485 => 315,  477 => 310,  472 => 308,  468 => 306,  462 => 305,  460 => 304,  448 => 294,  439 => 291,  437 => 290,  429 => 285,  424 => 283,  420 => 281,  414 => 280,  412 => 279,  400 => 269,  391 => 266,  389 => 265,  381 => 260,  376 => 258,  372 => 256,  366 => 255,  364 => 254,  351 => 243,  342 => 240,  340 => 239,  332 => 234,  327 => 232,  323 => 230,  317 => 229,  315 => 228,  302 => 217,  293 => 214,  291 => 213,  285 => 210,  281 => 209,  277 => 207,  271 => 206,  269 => 205,  136 => 75,  125 => 67,  114 => 59,  103 => 51,  92 => 43,  81 => 35,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin.html.twig' %}


{% block body %}



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
                                    <h6 class=\"text-muted text-uppercase mb-3\">Champs</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">{{ data['champs']|length }}</h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-layers float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Templates</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">{{ data['Templates']|length }}</span></h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-tag float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Utilisateurs</h6>
                                    <h4 class=\"mb-3\"><span data-plugin=\"counterup\">{{data['Users']|length}}</span></h4>
                                </div>
                            </div>

                            <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">CVs</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">{{data['Cvs']|length}}</h4>
                                </div>
                            </div>

                             <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Groupes</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">{{data['Groupes']|length}}</h4>
                                </div>
                            </div>

                             <div class=\"col-xs-12 col-md-6 col-lg-6 col-xl-3\">
                                <div class=\"card-box tilebox-one\">
                                    <i class=\"fi-briefcase float-right\"></i>
                                    <h6 class=\"text-muted text-uppercase mb-3\">Sections</h6>
                                    <h4 class=\"mb-3\" data-plugin=\"counterup\">{{data['Sections']|length}}</h4>
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
                                        {% set i = 0 %}
                                        {% for user in data['Users'] if i<3 %}
                                        <li>
                                            <i class=\"dripicons-arrow-down text-success\"></i>
                                            <span class=\"pull-right text-success tran-price\">{{user.username}}</span>
                                            <span class=\"pull-right text-muted\">{{user.lastLogin|date('Y-m-d')}}</span>
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>


                            <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére champs</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for champ in data['champs'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{champ.nomChamp}}</span>

                                             <span class=\"pull-right text-muted\">{{champ.typeChamp}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>


                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére groupes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for groupe in data['Groupes'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{groupe.nomGroupe}}</span>

                                             <span class=\"pull-right text-muted\">{{groupe.id}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére sections</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for section in data['Sections'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{section.nomSection}}</span>

                                             <span class=\"pull-right text-muted\">{{section.id}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére tempaltes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for template in data['Templates'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{template.nomTemplate}}</span>

                                             <span class=\"pull-right text-muted\">{{template.id}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>
                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére Cvs</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for cv in data['Cvs'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{cv.nomCv}}</span>

                                             <span class=\"pull-right text-muted\">{{cv.id}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>  

                             <div class=\"col-lg-4\">
                                <div class=\"card-box\">
                                    <h4 class=\"header-title mb-4\">Derniére comptes</h4>

                                    <ul class=\"list-unstyled transaction-list slimscroll mb-0\" style=\"max-height: 370px;\">
                                        {% set i = 0 %}
                                        {% for user in data['Users_compte'] if i<3 %}
                                        <li>
                                            
                                   <span class=\"pull-left text-success tran-price\">{{user.username}}</span>

                                             <span class=\"pull-right text-muted\">{{user.email}}</span>
                                              
                                           
                                            <span class=\"clearfix\"></span>
                                        </li>
                                        {% set i = i+1 %}
                                        
                                        
                                        {% endfor %}
                                    </ul>

                                </div>
                            </div>                                                                                  
                        </div>



      


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



{% endblock %}
", "::dashboard.html.twig", "/home/houssem/Application/app/Resources/views/dashboard.html.twig");
    }
}
