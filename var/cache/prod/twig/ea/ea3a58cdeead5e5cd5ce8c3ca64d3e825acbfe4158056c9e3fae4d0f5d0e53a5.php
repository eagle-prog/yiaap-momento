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

/* Dashboard/Shared/Order/orders.html.twig */
class __TwigTemplate_7933662dc66b77c3af864dbdff64f0a39c7f610f07f445f6272765352d62add1 extends \Twig\Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 4
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage orders");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 6
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 8
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My tickets");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
            // line 10
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My orders");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Order/orders.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
        // line 17
        $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 18
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Order/orders.html.twig", 18)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 19
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 21), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 24
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Order/orders.html.twig", 24)->display($context);
        // line 25
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    ";
        // line 28
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 29
            echo "
                        <div class=\"box shadow-none bg-gray mb-4\">
                            <div class=\"row\">
                                <div class=\"col-sm-12 col-lg-3 text-center text-lg-left mb-3 mb-lg-0\">
                                    <span class=\"center-lg-y text-muted\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "getTotalItemCount", [], "any", false, false, false, 33)]), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"col-sm-12 col-lg-5 text-center text-lg-right\">
                                    <label for=\"sortable-select\" class=\"display-inline\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
            echo "
                                        <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
            echo "\" style=\"width: 50%;\">
                                            ";
            // line 38
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["orders"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "o.createdAt", ["direction" => "desc", "criteria" => "o.createdAt"]);
            echo "
                                            ";
            // line 39
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["orders"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "o.createdAt", ["direction" => "asc", "criteria" => "o.createdAt"]);
            echo "
                                        </select>
                                    </label>
                                </div>
                                <div class=\"col-sm-12 col-lg-4 text-center text-lg-right\">
                                    <a href=\"#search-filters\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle display the search filters"), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"search-filters\"><i class=\"fab fa-searchengin fa-lg\"></i></a>
                                        ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "getTotalItemCount", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", [0 => "_route"], "method", false, false, false, 46), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", [0 => "_route_params"], "method", false, false, false, 46), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "query", [], "any", false, false, false, 46), "all", [], "any", false, false, false, 46), ["excel" => 1]))), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current orders to an Excel file"), "html", null, true);
                echo "\"><i class=\"fas fa-file-excel fa-lg\"></i></a>
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route_params"], "method", false, false, false, 47), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "all", [], "any", false, false, false, 47), ["csv" => 1]))), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export current orders to a CSV file"), "html", null, true);
                echo "\"><i class=\"fas fa-file-csv fa-lg\"></i></a>
                                            ";
                // line 48
                if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                    // line 49
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "attributes", [], "any", false, false, false, 49), "get", [0 => "_route_params"], "method", false, false, false, 49), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "query", [], "any", false, false, false, 49), "all", [], "any", false, false, false, 49), ["pdf" => 1]))), "html", null, true);
                    echo "\" target=\"_blank\" class=\"btn btn-primary has-tooltip ";
                    if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "get", [0 => "event"], "method", false, false, false, 49) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "get", [0 => "status"], "method", false, false, false, 49) != 1))) {
                        echo " disabled";
                    }
                    echo "\" title=\"";
                    if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "get", [0 => "event"], "method", false, false, false, 49) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "get", [0 => "status"], "method", false, false, false, 49) != 1))) {
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must choose an event and set the status to paid in order to export attendees list to a PDF file"), "html", null, true);
                        echo " ";
                    } else {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export attendees list to a PDF file"), "html", null, true);
                        echo " ";
                    }
                    echo "\"><i class=\"fas fa-file-pdf fa-lg\"></i></a>
                                            ";
                }
                // line 51
                echo "                                        ";
            }
            // line 52
            echo "                                </div>
                                <div id=\"search-filters\" class=\"col-sm-12 col-lg-12 text-center mb-3 mb-lg-0 collapse show\">
                                    <hr>
                                    <form>
                                        <div class=\"row\">
                                            <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                <label for=\"reference\">";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference"), "html", null, true);
            echo "</label>
                                                <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white\" id=\"reference\" name=\"reference\">
                                            </div>

                                            ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 63
                echo "                                                <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                    <label for=\"eventdate\">";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event date"), "html", null, true);
                echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a specific event date"), "html", null, true);
                echo "\"></i></label>
                                                    <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"eventdate\" name=\"eventdate\" data-url-list=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_pointofsale_get_eventdates");
                echo "\" data-minimum-input-length=\"0\">
                                                </div>
                                            ";
            } else {
                // line 68
                echo "                                                <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                    <label for=\"event\">";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event"), "html", null, true);
                echo " </label>
                                                    <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"event\" name=\"event\" data-url-list=\"";
                // line 70
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_events", ["published" => "all", "elapsed" => "all"])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_events", ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 70), "organizer", [], "any", false, false, false, 70), "slug", [], "any", false, false, false, 70), "published" => "all", "elapsed" => "all"]))), "html", null, true);
                echo "\" data-minimum-input-length=\"0\">
                                                </div>
                                                ";
                // line 72
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "get", [0 => "event"], "method", false, false, false, 72)) {
                    // line 73
                    echo "                                                    <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                        <label for=\"eventdate\">";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event date"), "html", null, true);
                    echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a specific event date"), "html", null, true);
                    echo "\"></i></label>
                                                        <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"eventdate\" name=\"eventdate\" data-url-list=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventdates_by_event", ["eventSlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 75), "get", [0 => "event"], "method", false, false, false, 75)]), "html", null, true);
                    echo "\" data-minimum-input-length=\"0\">
                                                    </div>
                                                ";
                }
                // line 78
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "get", [0 => "event"], "method", false, false, false, 78) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "get", [0 => "eventdate"], "method", false, false, false, 78))) {
                    // line 79
                    echo "                                                    <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                        <label for=\"eventticket\">";
                    // line 80
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event ticket"), "html", null, true);
                    echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a specific event ticket"), "html", null, true);
                    echo "\"></i></label>
                                                        <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"eventticket\" name=\"eventticket\" data-url-list=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventtickets_by_eventdate", ["eventSlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 81), "get", [0 => "event"], "method", false, false, false, 81), "eventDateReference" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 81), "get", [0 => "eventdate"], "method", false, false, false, 81)]), "html", null, true);
                    echo "\"  data-minimum-input-length=\"0\">
                                                    </div>
                                                ";
                }
                // line 84
                echo "                                            ";
            }
            // line 85
            echo "
                                            ";
            // line 86
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 87
                echo "                                                <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                    <label for=\"organizer\">";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
                echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All orders for an organizer"), "html", null, true);
                echo "\"></i></label>
                                                    <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"organizer\" name=\"organizer\" data-url-list=\"";
                // line 89
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizers");
                echo "\" data-minimum-input-length=\"0\">
                                                </div>
                                            ";
            }
            // line 92
            echo "                                            <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                <label for=\"datefrom\">";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From date"), "html", null, true);
            echo "</label>
                                                <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white datetimepicker\" id=\"datefrom\" name=\"datefrom\">
                                            </div>
                                            <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                <label for=\"dateto\">";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Until date"), "html", null, true);
            echo "</label>
                                                <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white datetimepicker\" id=\"dateto\" name=\"dateto\">
                                            </div>
                                            ";
            // line 100
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 101
                echo "                                                <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input id=\"status-all\" type=\"radio\" name=\"status\" value=\"all\" class=\"custom-control-input\">
                                                        <label for=\"status-all\" class=\"custom-control-label\">";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
                echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input id=\"status-paid\" type=\"radio\" name=\"status\" value=\"1\" class=\"custom-control-input\">
                                                        <label for=\"status-paid\" class=\"custom-control-label\">";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Paid"), "html", null, true);
                echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input id=\"status-waiting-for-payment\" type=\"radio\" name=\"status\" value=\"0\" class=\"custom-control-input\">
                                                        <label for=\"status-waiting-for-payment\" class=\"custom-control-label\">";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Awaiting payment"), "html", null, true);
                echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input id=\"status-canceled\" type=\"radio\" name=\"status\" value=\"-1\" class=\"custom-control-input\">
                                                        <label for=\"status-canceled\" class=\"custom-control-label\">";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Canceled"), "html", null, true);
                echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox\">
                                                        <input id=\"status-failed\" type=\"radio\" name=\"status\" value=\"-2\" class=\"custom-control-input\">
                                                        <label for=\"status-failed\" class=\"custom-control-label\">";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Failed"), "html", null, true);
                echo "</label>
                                                    </div>
                                                </div>
                                                ";
                // line 123
                $context["paymentGateways"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getPaymentGateways", [0 => []], "method", false, false, false, 123), "getQuery", [], "method", false, false, false, 123), "getResult", [], "method", false, false, false, 123);
                // line 124
                echo "                                                ";
                if ((twig_length_filter($this->env, ($context["paymentGateways"] ?? null)) > 0)) {
                    // line 125
                    echo "                                                    <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                        <div class=\"custom-control custom-checkbox\">
                                                            <input id=\"paymentgateway-all\" type=\"radio\" name=\"paymentgateway\" value=\"all\" class=\"custom-control-input\">
                                                            <label for=\"paymentgateway-all\" class=\"custom-control-label\">";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
                    echo "</label>
                                                        </div>
                                                        ";
                    // line 130
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["paymentGateways"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["paymentGateway"]) {
                        // line 131
                        echo "                                                            <div class=\"custom-control custom-checkbox\">
                                                                <input id=\"paymentgateway-";
                        // line 132
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "slug", [], "any", false, false, false, 132), "html", null, true);
                        echo "\" type=\"radio\" name=\"paymentgateway\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "slug", [], "any", false, false, false, 132), "html", null, true);
                        echo "\" class=\"custom-control-input\">
                                                                <label for=\"paymentgateway-";
                        // line 133
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "slug", [], "any", false, false, false, 133), "html", null, true);
                        echo "\" class=\"custom-control-label\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "name", [], "any", false, false, false, 133), "html", null, true);
                        echo "</label>
                                                            </div>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentGateway'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    echo "                                                    </div>
                                                ";
                }
                // line 138
                echo "                                            ";
            }
            // line 139
            echo "
                                            <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                <button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "\"><i class=\"fas fa-search\"></i></button>
                                                <button type=\"reset\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
            echo "\"><i class=\"fas fa-search-minus\"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    ";
        }
        // line 151
        echo "
                    <div class=\"row\">
                        <div class=\"col-12\">

                            ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["orders"] ?? null), "getTotalItemCount", [], "any", false, false, false, 155)) {
            // line 156
            echo "                                <div class=\"card\">
                                    ";
            // line 157
            $this->loadTemplate("Dashboard/Shared/Order/manage-orders-table.html.twig", "Dashboard/Shared/Order/orders.html.twig", 157)->display(twig_array_merge($context, ["orders" => ($context["orders"] ?? null)]));
            // line 158
            echo "                                </div>
                            ";
        } else {
            // line 160
            echo "                                ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Order/orders.html.twig", 160)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No orders found"), "icon" => "fas fa-exclamation-circle"]));
            // line 161
            echo "                            ";
        }
        // line 162
        echo "
                            ";
        // line 163
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["orders"] ?? null), null, [], ["align" => "center"]);
        echo "
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

";
    }

    // line 175
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "
    <script>

        \$(document).ready(function () {

            if (getURLParameter(\"reference\")) {
                \$(\"#reference\").val(\"";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 182), "get", [0 => "reference"], "method", false, false, false, 182), "html", null, true);
        echo "\");
            }

            if (getURLParameter(\"event\")) {
                var url = \"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_event", ["slug" => "eventslug", "published" => "all", "elapsed" => "all"]), "html", null, true);
        echo "\";
                url = url.replace(\"eventslug\", getURLParameter(\"event\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_event').select2('data', {id: data.slug, text: data.text});
                    \$('#event').val(data.slug).change();
                });

            }

            if (getURLParameter(\"user\")) {
                var url = \"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_user", ["slug" => "slug"]);
        echo "\";
                url = url.replace(\"slug\", getURLParameter(\"user\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_user').select2('data', {id: data.slug, text: data.text});
                    \$('#user').val(data.slug).change();
                });

            }

            if (getURLParameter(\"organizer\")) {
                var url = \"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizer", ["slug" => "slug"]);
        echo "\";
                url = url.replace(\"slug\", getURLParameter(\"organizer\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_organizer').select2('data', {id: data.slug, text: data.text});
                    \$('#organizer').val(data.slug).change();
                });

            }

            if (getURLParameter(\"eventdate\")) {
                var url = \"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventdate", ["reference" => "reference"]);
        echo "\";
                url = url.replace(\"reference\", getURLParameter(\"eventdate\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_eventdate').select2('data', {id: data.id, text: data.text});
                    \$('#eventdate').val(data.id).change();
                });

            }

            if (getURLParameter(\"eventticket\")) {
                var url = \"";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventticket", ["reference" => "reference"]);
        echo "\";
                url = url.replace(\"reference\", getURLParameter(\"eventticket\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_eventticket').select2('data', {id: data.id, text: data.text});
                    \$('#eventticket').val(data.id).change();
                });

            }

            if (getURLParameter(\"datefrom\")) {
                \$(\"#datefrom\").val(\"";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 251), "get", [0 => "datefrom"], "method", false, false, false, 251), "html", null, true);
        echo "\");
            }

            if (getURLParameter(\"dateto\")) {
                \$(\"#dateto\").val(\"";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 255), "get", [0 => "dateto"], "method", false, false, false, 255), "html", null, true);
        echo "\");
            }

            if (getURLParameter('status') != \"null\") {
                \$('input[type=\"radio\"][name=\"status\"][value=\"' + getURLParameter('status') + '\"]').attr(\"checked\", \"checked\");
            }

            if (getURLParameter('paymentgateway') != \"null\") {
                \$('input[type=\"radio\"][name=\"paymentgateway\"][value=\"' + getURLParameter('paymentgateway') + '\"]').attr(\"checked\", \"checked\");
            }

        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Order/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 255,  541 => 251,  525 => 238,  509 => 225,  493 => 212,  477 => 199,  461 => 186,  454 => 182,  446 => 176,  442 => 175,  427 => 163,  424 => 162,  421 => 161,  418 => 160,  414 => 158,  412 => 157,  409 => 156,  407 => 155,  401 => 151,  389 => 142,  385 => 141,  381 => 139,  378 => 138,  374 => 136,  363 => 133,  357 => 132,  354 => 131,  350 => 130,  345 => 128,  340 => 125,  337 => 124,  335 => 123,  329 => 120,  322 => 116,  315 => 112,  308 => 108,  301 => 104,  296 => 101,  294 => 100,  288 => 97,  281 => 93,  278 => 92,  272 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  255 => 84,  249 => 81,  243 => 80,  240 => 79,  237 => 78,  231 => 75,  225 => 74,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  208 => 68,  202 => 65,  196 => 64,  193 => 63,  191 => 62,  184 => 58,  176 => 52,  173 => 51,  154 => 49,  152 => 48,  146 => 47,  139 => 46,  137 => 45,  133 => 44,  125 => 39,  121 => 38,  117 => 37,  113 => 36,  107 => 33,  101 => 29,  99 => 28,  94 => 25,  92 => 24,  86 => 21,  82 => 19,  79 => 18,  77 => 17,  74 => 16,  70 => 15,  63 => 13,  58 => 1,  55 => 10,  52 => 8,  49 => 6,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Order/orders.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Order/orders.html.twig");
    }
}
