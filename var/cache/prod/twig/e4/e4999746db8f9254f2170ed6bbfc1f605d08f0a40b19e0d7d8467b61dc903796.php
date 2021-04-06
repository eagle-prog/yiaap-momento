<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Dashboard/Administrator/index.html.twig */
class __TwigTemplate_230ac218dd8470f0897991f9d15f22caba468428ca91ec8dfa3dafb852042e54 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Global/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/index.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 16
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/index.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">

                            <header class=\"section-heading mb-3\">
                                <h4 class=\"title-section float-left\"><i class=\"fas fa-calendar-alt\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events summary"), "html", null, true);
        echo "</h4>
                                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event");
        echo "\" class=\"float-right\"><i class=\"fas fa-cog\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage events"), "html", null, true);
        echo "</a>
                                <div class=\"clearfix\"></div>
                            </header>
                            <div class=\"row mb-3 pl-2 pr-2\">
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                        <h4>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "published" => "all", "elapsed" => "all"]], "method", false, false, false, 31), "getQuery", [], "method", false, false, false, 31), "getSingleScalarResult", [], "method", false, false, false, 31), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events added"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                        <h4>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "published" => true, "elapsed" => "all"]], "method", false, false, false, 38), "getQuery", [], "method", false, false, false, 38), "getSingleScalarResult", [], "method", false, false, false, 38), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published events"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                        <h4>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "published" => true, "elapsed" => false]], "method", false, false, false, 45), "getQuery", [], "method", false, false, false, 45), "getSingleScalarResult", [], "method", false, false, false, 45), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upcoming events"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                        <h4>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEventDates", [0 => ["count" => true]], "method", false, false, false, 52), "getQuery", [], "method", false, false, false, 52), "getSingleScalarResult", [], "method", false, false, false, 52), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event dates"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 57
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["published" => "all", "elapsed" => "all", "limit" => 3]], "method", false, false, false, 57), "getQuery", [], "method", false, false, false, 57), "getResult", [], "method", false, false, false, 57);
        // line 58
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["events"] ?? null)) > 0)) {
            // line 59
            echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            ";
            // line 62
            $this->loadTemplate("Dashboard/Shared/Event/manage-events-table.html.twig", "Dashboard/Administrator/index.html.twig", 62)->display(twig_array_merge($context, ["events" => ($context["events"] ?? null)]));
            // line 63
            echo "                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 67
        echo "
                            <header class=\"section-heading mb-3 mt-5\">
                                <h4 class=\"title-section float-left\"><i class=\"fas fa-cart-arrow-down\"></i> ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders summary"), "html", null, true);
        echo "</h4>
                                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_orders");
        echo "\" class=\"float-right\"><i class=\"fas fa-cog\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage orders"), "html", null, true);
        echo "</a>
                                <div class=\"clearfix\"></div>
                            </header>
                            <div class=\"row mb-3 pl-2 pr-2\">
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-cart-arrow-down\"></i>
                                        <h4>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["count" => true, "status" => "all"]], "method", false, false, false, 77), "getQuery", [], "method", false, false, false, 77), "getSingleScalarResult", [], "method", false, false, false, 77), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders placed"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-cart-arrow-down\"></i>
                                        <h4>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["count" => true, "status" => 1]], "method", false, false, false, 84), "getQuery", [], "method", false, false, false, 84), "getSingleScalarResult", [], "method", false, false, false, 84), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paid orders"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-cart-arrow-down\"></i>
                                        <h4>";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["count" => true, "status" => 0]], "method", false, false, false, 91), "getQuery", [], "method", false, false, false, 91), "getSingleScalarResult", [], "method", false, false, false, 91), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Awaiting payment"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-ticket-alt\"></i>
                                        ";
        // line 98
        $context["ticketsSold"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["sumOrderElements" => true, "status" => 1]], "method", false, false, false, 98), "getQuery", [], "method", false, false, false, 98), "getSingleScalarResult", [], "method", false, false, false, 98);
        // line 99
        echo "                                        <h4>";
        ((($context["ticketsSold"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["ticketsSold"] ?? null), "html", null, true))) : (print (0)));
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets sold"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 105
        $context["orders"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["status" => "all", "limit" => 3]], "method", false, false, false, 105), "getQuery", [], "method", false, false, false, 105), "getResult", [], "method", false, false, false, 105);
        // line 106
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) > 0)) {
            // line 107
            echo "                                <div class=\"row mb-5\">
                                    <div class=\"col-12\">
                                        <div id=\"ticketsSalesByDateLineChart\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            ";
            // line 116
            $this->loadTemplate("Dashboard/Shared/Order/manage-orders-table.html.twig", "Dashboard/Administrator/index.html.twig", 116)->display(twig_array_merge($context, ["orders" => ($context["orders"] ?? null)]));
            // line 117
            echo "                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 121
        echo "
                            <header class=\"section-heading mb-3 mt-5\">
                                <h4 class=\"title-section float-left\"><i class=\"fas fa-users-cog\"></i> ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users summary"), "html", null, true);
        echo "</h4>
                                <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user");
        echo "\" class=\"float-right\"><i class=\"fas fa-cog\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage users"), "html", null, true);
        echo "</a>
                                <div class=\"clearfix\"></div>
                            </header>
                            <div class=\"row mb-3 pl-2 pr-2\">
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-user-check\"></i>
                                        <h4>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["role" => "attendee", "count" => true, "enabled" => true]], "method", false, false, false, 131), "getQuery", [], "method", false, false, false, 131), "getSingleScalarResult", [], "method", false, false, false, 131), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active attendees"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-id-card\"></i>
                                        <h4>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["role" => "organizer", "count" => true, "enabled" => true]], "method", false, false, false, 138), "getQuery", [], "method", false, false, false, 138), "getSingleScalarResult", [], "method", false, false, false, 138), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active organizers"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-qrcode\"></i>
                                        <h4>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["role" => "scanner", "count" => true, "enabled" => "all"]], "method", false, false, false, 145), "getQuery", [], "method", false, false, false, 145), "getSingleScalarResult", [], "method", false, false, false, 145), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scanners"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-print\"></i>
                                        <h4>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["role" => "pointofsale", "count" => true, "enabled" => "all"]], "method", false, false, false, 152), "getQuery", [], "method", false, false, false, 152), "getSingleScalarResult", [], "method", false, false, false, 152), "html", null, true);
        echo "</h4>
                                        <h5 class=\"mb-0\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Points of sale"), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 157
        $context["users"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["enabled" => "all", "limit" => 3]], "method", false, false, false, 157), "getQuery", [], "method", false, false, false, 157), "getResult", [], "method", false, false, false, 157);
        // line 158
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["users"] ?? null)) > 0)) {
            // line 159
            echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            ";
            // line 162
            $this->loadTemplate("Dashboard/Administrator/User/manage-users-table.html.twig", "Dashboard/Administrator/index.html.twig", 162)->display(twig_array_merge($context, ["users" => ($context["users"] ?? null)]));
            // line 163
            echo "                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 167
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

";
    }

    // line 178
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcLanguage(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 181), "locale", [], "any", false, false, false, 181)), "html", null, true);
        echo "
        ";
        // line 182
        if ( !(null === ($context["ticketsSalesByDateLineChart"] ?? null))) {
            // line 183
            echo "            ";
            echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw(($context["ticketsSalesByDateLineChart"] ?? null), "ticketsSalesByDateLineChart");
            echo "
        ";
        }
        // line 185
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 185,  387 => 183,  385 => 182,  381 => 181,  377 => 179,  373 => 178,  360 => 167,  354 => 163,  352 => 162,  347 => 159,  344 => 158,  342 => 157,  335 => 153,  331 => 152,  322 => 146,  318 => 145,  309 => 139,  305 => 138,  296 => 132,  292 => 131,  280 => 124,  276 => 123,  272 => 121,  266 => 117,  264 => 116,  253 => 107,  250 => 106,  248 => 105,  240 => 100,  235 => 99,  233 => 98,  224 => 92,  220 => 91,  211 => 85,  207 => 84,  198 => 78,  194 => 77,  182 => 70,  178 => 69,  174 => 67,  168 => 63,  166 => 62,  161 => 59,  158 => 58,  156 => 57,  149 => 53,  145 => 52,  136 => 46,  132 => 45,  123 => 39,  119 => 38,  110 => 32,  106 => 31,  94 => 24,  90 => 23,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/index.html.twig");
    }
}
