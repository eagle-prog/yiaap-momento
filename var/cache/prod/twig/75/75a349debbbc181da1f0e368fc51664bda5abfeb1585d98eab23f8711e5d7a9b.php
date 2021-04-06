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

/* Dashboard/Organizer/index.html.twig */
class __TwigTemplate_4e8b443415d01138927ab8d2368c103b2b5afa9c1c59129df46c6f5ceb7f35ee extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Organizer/index.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Organizer/index.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Organizer/index.html.twig", 16)->display($context);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event");
        echo "\" class=\"float-right\"><i class=\"fas fa-cog\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My events"), "html", null, true);
        echo "</a>
                                <div class=\"clearfix\"></div>
                            </header>
                            <div class=\"row mb-3 pl-2 pr-2\">
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-calendar-alt\"></i>
                                        <h4>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31), "organizer", [], "any", false, false, false, 31), "slug", [], "any", false, false, false, 31), "count" => true, "published" => "all", "elapsed" => "all"]], "method", false, false, false, 31), "getQuery", [], "method", false, false, false, 31), "getSingleScalarResult", [], "method", false, false, false, 31), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "organizer", [], "any", false, false, false, 38), "slug", [], "any", false, false, false, 38), "count" => true, "published" => true, "elapsed" => "all"]], "method", false, false, false, 38), "getQuery", [], "method", false, false, false, 38), "getSingleScalarResult", [], "method", false, false, false, 38), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "organizer", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45), "count" => true, "published" => true, "elapsed" => false]], "method", false, false, false, 45), "getQuery", [], "method", false, false, false, 45), "getSingleScalarResult", [], "method", false, false, false, 45), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEventDates", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 52), "organizer", [], "any", false, false, false, 52), "slug", [], "any", false, false, false, 52), "count" => true]], "method", false, false, false, 52), "getQuery", [], "method", false, false, false, 52), "getSingleScalarResult", [], "method", false, false, false, 52), "html", null, true);
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
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 57), "organizer", [], "any", false, false, false, 57), "slug", [], "any", false, false, false, 57), "published" => "all", "elapsed" => "all", "limit" => 3]], "method", false, false, false, 57), "getQuery", [], "method", false, false, false, 57), "getResult", [], "method", false, false, false, 57);
        // line 58
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["events"] ?? null)) > 0)) {
            // line 59
            echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            ";
            // line 62
            $this->loadTemplate("Dashboard/Shared/Event/manage-events-table.html.twig", "Dashboard/Organizer/index.html.twig", 62)->display(twig_array_merge($context, ["events" => ($context["events"] ?? null)]));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees summary"), "html", null, true);
        echo "</h4>
                                <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_orders");
        echo "\" class=\"float-right\"><i class=\"fas fa-users\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage attendees"), "html", null, true);
        echo "</a>
                                <div class=\"clearfix\"></div>
                            </header>
                            <div class=\"row mb-3 pl-2 pr-2\">
                                <div class=\"col-md-3 col-sm-6 col-12 p-1\">
                                    <div class=\"bg-primary rounded p-4 text-center text-white position-relative counter-box\">
                                        <i class=\"fas fa-cart-arrow-down\"></i>
                                        <h4>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "organizer", [], "any", false, false, false, 77), "slug", [], "any", false, false, false, 77), "count" => true, "status" => "all"]], "method", false, false, false, 77), "getQuery", [], "method", false, false, false, 77), "getSingleScalarResult", [], "method", false, false, false, 77), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 84), "organizer", [], "any", false, false, false, 84), "slug", [], "any", false, false, false, 84), "count" => true, "status" => 1]], "method", false, false, false, 84), "getQuery", [], "method", false, false, false, 84), "getSingleScalarResult", [], "method", false, false, false, 84), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 91), "organizer", [], "any", false, false, false, 91), "slug", [], "any", false, false, false, 91), "count" => true, "status" => 0]], "method", false, false, false, 91), "getQuery", [], "method", false, false, false, 91), "getSingleScalarResult", [], "method", false, false, false, 91), "html", null, true);
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
        $context["ticketsSold"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "organizer", [], "any", false, false, false, 98), "slug", [], "any", false, false, false, 98), "sumOrderElements" => true, "status" => 1]], "method", false, false, false, 98), "getQuery", [], "method", false, false, false, 98), "getSingleScalarResult", [], "method", false, false, false, 98);
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

                            <div class=\"row mb-5\">
                                <div class=\"col-12\">
                                    <div id=\"ticketsSalesByDateLineChart\">
                                    </div>
                                </div>
                            </div>

                            ";
        // line 112
        $context["orders"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getOrders", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 112), "organizer", [], "any", false, false, false, 112), "slug", [], "any", false, false, false, 112), "status" => "all", "limit" => 3]], "method", false, false, false, 112), "getQuery", [], "method", false, false, false, 112), "getResult", [], "method", false, false, false, 112);
        // line 113
        echo "                            ";
        if ((twig_length_filter($this->env, ($context["orders"] ?? null)) > 0)) {
            // line 114
            echo "                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            ";
            // line 117
            $this->loadTemplate("Dashboard/Shared/Order/manage-orders-table.html.twig", "Dashboard/Organizer/index.html.twig", 117)->display(twig_array_merge($context, ["events" => ($context["events"] ?? null)]));
            // line 118
            echo "                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 122
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

";
    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcLanguage(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 136), "locale", [], "any", false, false, false, 136)), "html", null, true);
        echo "
        ";
        // line 137
        if ( !(null === ($context["ticketsSalesByDateLineChart"] ?? null))) {
            // line 138
            echo "            ";
            echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw(($context["ticketsSalesByDateLineChart"] ?? null), "ticketsSalesByDateLineChart");
            echo "
        ";
        }
        // line 140
        echo "    </script>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Organizer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 140,  300 => 138,  298 => 137,  294 => 136,  290 => 134,  286 => 133,  273 => 122,  267 => 118,  265 => 117,  260 => 114,  257 => 113,  255 => 112,  240 => 100,  235 => 99,  233 => 98,  224 => 92,  220 => 91,  211 => 85,  207 => 84,  198 => 78,  194 => 77,  182 => 70,  178 => 69,  174 => 67,  168 => 63,  166 => 62,  161 => 59,  158 => 58,  156 => 57,  149 => 53,  145 => 52,  136 => 46,  132 => 45,  123 => 39,  119 => 38,  110 => 32,  106 => 31,  94 => 24,  90 => 23,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Organizer/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Organizer/index.html.twig");
    }
}
