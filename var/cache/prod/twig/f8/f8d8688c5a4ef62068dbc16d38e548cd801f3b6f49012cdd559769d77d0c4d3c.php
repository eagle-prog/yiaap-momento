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

/* Dashboard/sidebar-links.html.twig */
class __TwigTemplate_29fe585d1ba6c7cc73d130e05469ea61eaa656427a096ea23686e507b411107d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["routename"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        $context["random"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "generateReference", [0 => 5], "method", false, false, false, 2);
        // line 3
        echo "
";
        // line 4
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 5
            echo "    <li class=\"nav-item\">
        <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index");
            echo "\" class=\"nav-link ";
            if (((((($context["routename"] ?? null) == "dashboard_administrator_index") || (($context["routename"] ?? null) == "dashboard_organizer_index")) || (($context["routename"] ?? null) == "dashboard_pointofsale_index")) || (($context["routename"] ?? null) == "dashboard_scanner_index"))) {
                echo "active";
            }
            echo "\">
            ";
            // line 7
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 8
                echo "                <i class=\"fas fa-ticket-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events on sale"), "html", null, true);
                echo "
            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SCANNER")) {
                // line 10
                echo "                <i class=\"fas fa-calendar-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events list"), "html", null, true);
                echo "
            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 12
                echo "                <i class=\"fas fa-tachometer-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "html", null, true);
                echo "
            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                // line 14
                echo "                <i class=\"fas fa-tachometer-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "html", null, true);
                echo "
            ";
            }
            // line 16
            echo "        </a>
    </li>
";
        }
        // line 19
        echo "
";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 21
            echo "
    ";
            // line 23
            echo "
    <li class=\"nav-item\">
        <a href=\"#settings-submenu-";
            // line 25
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-sliders-h fa-fw\"></i> ";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings"), "html", null, true);
            echo "
        </a>
        <ul id=\"settings-submenu-";
            // line 28
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if ((((((((((((((((((((($context["routename"] ?? null) == "dashboard_administrator_settings_homepage") || (($context["routename"] ?? null) == "dashboard_administrator_settings_payment")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_newsletter")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_layout")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_payment_gateways_add")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_payment_gateways_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_checkout")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_events_list_page")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_blog")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_venue_page")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_mail_server")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_google_recaptcha")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_google_maps")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_social_login")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_menus")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_menus_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_currency")) || (($context["routename"] ?? null) == "dashboard_administrator_currency_add")) || (($context["routename"] ?? null) == "dashboard_administrator_currency_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 30
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_layout")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_layout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Layout, parameters and SEO"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 33
            if (((($context["routename"] ?? null) == "dashboard_administrator_settings_menus") || (($context["routename"] ?? null) == "dashboard_administrator_settings_menus_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_menus");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menus"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 36
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_homepage")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Homepage"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 39
            if (((((((($context["routename"] ?? null) == "dashboard_administrator_settings_payment") || (($context["routename"] ?? null) == "dashboard_administrator_settings_payment_gateways_add")) || (($context["routename"] ?? null) == "dashboard_administrator_settings_payment_gateways_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_currency")) || (($context["routename"] ?? null) == "dashboard_administrator_currency_add")) || (($context["routename"] ?? null) == "dashboard_administrator_currency_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_payment");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payments and Fees"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 42
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_checkout")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_checkout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checkout"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 45
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_mail_server")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_mail_server");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail server"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 48
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_google_recaptcha")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_google_recaptcha");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Google Recaptcha"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 51
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_google_maps")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_google_maps");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Google Maps"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 54
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_social_login")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_social_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Social Login"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 57
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_events_list_page")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_events_list_page");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events list page"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 60
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_venue_page")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_venue_page");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue page"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 63
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_blog")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_blog");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Blog settings"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 66
            if ((($context["routename"] ?? null) == "dashboard_administrator_settings_newsletter")) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_newsletter");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PrestaSitemapBundle_section", ["_format" => "xml", "name" => "default"]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sitemap"), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"#events-submenu-";
            // line 75
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-calendar-alt fa-fw\"></i> ";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "html", null, true);
            echo "
        </a>
        <ul id=\"events-submenu-";
            // line 78
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if (((((((((((((((($context["routename"] ?? null) == "dashboard_administrator_event") || (($context["routename"] ?? null) == "dashboard_administrator_event_date_statistics")) || (($context["routename"] ?? null) == "dashboard_administrator_category")) || (($context["routename"] ?? null) == "dashboard_administrator_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_category_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_country")) || (($context["routename"] ?? null) == "dashboard_administrator_country_add")) || (($context["routename"] ?? null) == "dashboard_administrator_country_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_language")) || (($context["routename"] ?? null) == "dashboard_administrator_language_add")) || (($context["routename"] ?? null) == "dashboard_administrator_language_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_audience")) || (($context["routename"] ?? null) == "dashboard_administrator_audience_add")) || (($context["routename"] ?? null) == "dashboard_administrator_audience_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 80
            if (((($context["routename"] ?? null) == "dashboard_administrator_event") || (($context["routename"] ?? null) == "dashboard_administrator_event_date_statistics"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage events"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 83
            if ((((($context["routename"] ?? null) == "dashboard_administrator_category") || (($context["routename"] ?? null) == "dashboard_administrator_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_category_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 86
            if ((((($context["routename"] ?? null) == "dashboard_administrator_country") || (($context["routename"] ?? null) == "dashboard_administrator_country_add")) || (($context["routename"] ?? null) == "dashboard_administrator_country_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_country");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 89
            if ((((($context["routename"] ?? null) == "dashboard_administrator_language") || (($context["routename"] ?? null) == "dashboard_administrator_language_add")) || (($context["routename"] ?? null) == "dashboard_administrator_language_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_language");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 92
            if ((((($context["routename"] ?? null) == "dashboard_administrator_audience") || (($context["routename"] ?? null) == "dashboard_administrator_audience_add")) || (($context["routename"] ?? null) == "dashboard_administrator_audience_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_audience");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Audiences"), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_orders");
            echo "\" class=\"nav-link ";
            if (((($context["routename"] ?? null) == "dashboard_administrator_orders") || (($context["routename"] ?? null) == "dashboard_administrator_order_details"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-cart-arrow-down fa-fw\"></i> ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_requests");
            echo "\" class=\"nav-link ";
            if (((($context["routename"] ?? null) == "dashboard_administrator_payout_requests") || (($context["routename"] ?? null) == "dashboard_administrator_payout_request_details"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-file-invoice-dollar fa-fw\"></i> ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout requests"), "html", null, true);
            echo "
            <span class=\"badge badge-warning float-right\" data-toggle=\"tooltip\" title=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending payout requests"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getPayoutRequests", [0 => ["status" => 0, "count" => true]], "method", false, false, false, 106), "getQuery", [], "method", false, false, false, 106), "getSingleScalarResult", [], "method", false, false, false, 106), "html", null, true);
            echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 111
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_reports");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_reports")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-funnel-dollar fa-fw\"></i> ";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reports"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_user")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-users-cog fa-fw\"></i> ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"#venues-submenu-";
            // line 123
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-map-marker-alt fa-fw\"></i> ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venues"), "html", null, true);
            echo "
        </a>
        <ul id=\"venues-submenu-";
            // line 126
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if ((((((((((($context["routename"] ?? null) == "dashboard_administrator_venue") || (($context["routename"] ?? null) == "dashboard_administrator_venue_add")) || (($context["routename"] ?? null) == "dashboard_administrator_venue_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_venuetype")) || (($context["routename"] ?? null) == "dashboard_administrator_venuetype_add")) || (($context["routename"] ?? null) == "dashboard_administrator_venuetype_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_amenity")) || (($context["routename"] ?? null) == "dashboard_administrator_amenity_add")) || (($context["routename"] ?? null) == "dashboard_administrator_amenity_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 128
            if ((((($context["routename"] ?? null) == "dashboard_administrator_venue") || (($context["routename"] ?? null) == "dashboard_administrator_venue_add")) || (($context["routename"] ?? null) == "dashboard_administrator_venue_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage venues"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 131
            if ((((($context["routename"] ?? null) == "dashboard_administrator_venuetype") || (($context["routename"] ?? null) == "dashboard_administrator_venuetype_add")) || (($context["routename"] ?? null) == "dashboard_administrator_venuetype_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venuetype");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue types"), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link ";
            // line 134
            if ((((($context["routename"] ?? null) == "dashboard_administrator_amenity") || (($context["routename"] ?? null) == "dashboard_administrator_amenity_add")) || (($context["routename"] ?? null) == "dashboard_administrator_amenity_edit"))) {
                echo "active";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_amenity");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amenities"), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </li>
    <li class=\"nav-item\">
        <a href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_translation");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_translation")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-language fa-fw\"></i> ";
            // line 140
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translations"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 145
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_console");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_console")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-terminal fa-fw\"></i> ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Execute Symfony commands"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 151
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_page");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_page")) {
                echo "active";
            }
            echo "\">
            <i class=\"far fa-file-alt fa-fw\"></i> ";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pages"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 157
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_reviews");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_administrator_reviews")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-star fa-fw\"></i> ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"#blog-submenu-";
            // line 163
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"far fa-newspaper fa-fw\"></i> ";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Blog"), "html", null, true);
            echo "
        </a>
        <ul id=\"blog-submenu-";
            // line 166
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if (((((((($context["routename"] ?? null) == "dashboard_administrator_blog_post") || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_add")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_category")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_category_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 168
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_blog_post");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_administrator_blog_post") || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_add")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_edit"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Posts"), "html", null, true);
            echo "
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
            // line 173
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_blog_post_category");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_administrator_blog_post_category") || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_blog_post_category_edit"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "
                </a>
            </li>
        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"#helpcenter-submenu-";
            // line 181
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"far fa-life-ring fa-fw\"></i> ";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help center"), "html", null, true);
            echo "
        </a>
        <ul id=\"helpcenter-submenu-";
            // line 184
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if (((((((($context["routename"] ?? null) == "dashboard_administrator_help_center_category") || (($context["routename"] ?? null) == "dashboard_administrator_help_center_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_category_edit")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_article")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_article_add")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_article_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 186
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_help_center_article");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_administrator_help_center_article") || (($context["routename"] ?? null) == "dashboard_administrator_help_center_article_add")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_article_edit"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
            echo "
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
            // line 191
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_help_center_category");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_administrator_help_center_category") || (($context["routename"] ?? null) == "dashboard_administrator_help_center_category_add")) || (($context["routename"] ?? null) == "dashboard_administrator_help_center_category_edit"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "
                </a>
            </li>
        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"#account-submenu-";
            // line 199
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-user-cog fa-fw\"></i> ";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account"), "html", null, true);
            echo "
        </a>
        <ul id=\"account-submenu-";
            // line 202
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if ((($context["routename"] ?? null) == "fos_user_change_password")) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 204
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "fos_user_change_password")) {
                echo "active";
            }
            echo "\">
                    ";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password"), "html", null, true);
            echo "
                </a>
            </li>
        </ul>
    </li>

";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 212
            echo "
    ";
            // line 214
            echo "
    <li class=\"nav-item\">
        <a href=\"";
            // line 216
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_profile");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_organizer_profile")) {
                echo "active";
            }
            echo "\">
            <i class=\"far fa-id-card fa-fw\"></i> ";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My organizer profile"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 222
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event");
            echo "\" class=\"nav-link ";
            if (((((($context["routename"] ?? null) == "dashboard_organizer_event") || (($context["routename"] ?? null) == "dashboard_organizer_event_add")) || (($context["routename"] ?? null) == "dashboard_organizer_event_edit")) || (($context["routename"] ?? null) == "dashboard_organizer_event_date_statistics"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-calendar fa-fw\"></i> ";
            // line 223
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My events"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 228
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_organizer_venue") || (($context["routename"] ?? null) == "dashboard_organizer_venue_add")) || (($context["routename"] ?? null) == "dashboard_organizer_venue_edit"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-map-marker-alt fa-fw\"></i> ";
            // line 229
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My venues"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"#scanner-app-submenu-";
            // line 234
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-qrcode fa-fw\"></i> ";
            // line 235
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scanner App"), "html", null, true);
            echo "
        </a>
        <ul id=\"scanner-app-submenu-";
            // line 237
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if (((((($context["routename"] ?? null) == "dashboard_organizer_settings_scanner_app") || (($context["routename"] ?? null) == "dashboard_organizer_scanner")) || (($context["routename"] ?? null) == "dashboard_organizer_scanner_add")) || (($context["routename"] ?? null) == "dashboard_organizer_scanner_edit"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 239
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_scanner");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_organizer_scanner") || (($context["routename"] ?? null) == "dashboard_organizer_scanner_add")) || (($context["routename"] ?? null) == "dashboard_organizer_scanner_edit"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 240
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My scanners"), "html", null, true);
            echo "
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
            // line 244
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_settings_scanner_app");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_organizer_settings_scanner_app")) {
                echo "active";
            }
            echo "\">
                    ";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scanner App settings"), "html", null, true);
            echo "
                </a>
            </li>

        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 253
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_pointofsale");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_organizer_pointofsale") || (($context["routename"] ?? null) == "dashboard_organizer_pointofsale_add")) || (($context["routename"] ?? null) == "dashboard_organizer_pointofsale_edit"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-print fa-fw\"></i> ";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My points of sale"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 259
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_reviews");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_organizer_reviews")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-star fa-fw\"></i> ";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"#payout-submenu-";
            // line 265
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-file-invoice-dollar fa-fw\"></i> ";
            // line 266
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payouts"), "html", null, true);
            echo "
        </a>
        <ul id=\"payout-submenu-";
            // line 268
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if (((((((($context["routename"] ?? null) == "dashboard_organizer_event_date_request_payout") || (($context["routename"] ?? null) == "dashboard_organizer_payout_requests")) || (($context["routename"] ?? null) == "dashboard_organizer_settings_payouts")) || (($context["routename"] ?? null) == "dashboard_organizer_settings_payouts_add")) || (($context["routename"] ?? null) == "dashboard_organizer_settings_payouts_edit")) || (($context["routename"] ?? null) == "dashboard_organizer_payout_request_details"))) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 270
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_payout_requests");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_organizer_event_date_request_payout") || (($context["routename"] ?? null) == "dashboard_organizer_payout_requests")) || (($context["routename"] ?? null) == "dashboard_organizer_payout_request_details"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout requests"), "html", null, true);
            echo "
                </a>
            </li>
            <li class=\"nav-item\">
                <a href=\"";
            // line 275
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_settings_payouts");
            echo "\" class=\"nav-link ";
            if ((((($context["routename"] ?? null) == "dashboard_organizer_settings_payouts") || (($context["routename"] ?? null) == "dashboard_organizer_settings_payouts_edit")) || (($context["routename"] ?? null) == "dashboard_organizer_settings_payouts_add"))) {
                echo "active";
            }
            echo "\">
                    ";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout methods"), "html", null, true);
            echo "
                </a>
            </li>

        </ul>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 284
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_reports");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_organizer_reports")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-funnel-dollar fa-fw\"></i> ";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reports"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"#account-submenu-";
            // line 290
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
            <i class=\"fas fa-user-cog fa-fw\"></i> ";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account"), "html", null, true);
            echo "
        </a>
        <ul id=\"account-submenu-";
            // line 293
            echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
            echo "\" class=\"nav flex-column ml-3 collapse ";
            if ((($context["routename"] ?? null) == "fos_user_change_password")) {
                echo "show";
            }
            echo "\">
            <li class=\"nav-item\">
                <a href=\"";
            // line 295
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "fos_user_change_password")) {
                echo "active";
            }
            echo "\">
                    ";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password"), "html", null, true);
            echo "
                </a>
            </li>
        </ul>
    </li>


";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 304
            echo "
    ";
            // line 306
            echo "
    <li class=\"nav-item\">
        <a href=\"";
            // line 308
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_orders");
            echo "\" class=\"nav-link ";
            if (((($context["routename"] ?? null) == "dashboard_attendee_orders") || (($context["routename"] ?? null) == "dashboard_attendee_order_details"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-ticket-alt fa-fw\"></i> ";
            // line 309
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My tickets"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 314
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_cart");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_attendee_cart")) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-shopping-cart fa-fw\"></i> ";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My cart"), "html", null, true);
            echo "
            <span class=\"badge badge-info float-right\">";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 316), "getTicketsInCartQuantitySum", [], "any", false, false, false, 316), "html", null, true);
            echo "</span>
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 321
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_favorites");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_attendee_favorites")) {
                echo "active";
            }
            echo "\">
            <i class=\"far fa-heart fa-fw\"></i> ";
            // line 322
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My favorites"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 327
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_reviews");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_attendee_reviews")) {
                echo "active";
            }
            echo "\">
            <i class=\"far fa-star fa-fw\"></i> ";
            // line 328
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My reviews"), "html", null, true);
            echo "
        </a>
    </li>

    <li class=\"nav-item\">
        <a href=\"";
            // line 333
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_following");
            echo "\" class=\"nav-link ";
            if ((($context["routename"] ?? null) == "dashboard_attendee_following")) {
                echo "active";
            }
            echo "\">
            <i class=\"far fa-folder-open fa-fw\"></i> ";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Following"), "html", null, true);
            echo "
        </a>
    </li>

    ";
            // line 338
            if (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 338), "facebookId", [], "any", false, false, false, 338)) && (null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 338), "googleId", [], "any", false, false, false, 338)))) {
                // line 339
                echo "
        <li class=\"nav-item\">
            <a href=\"#account-submenu-";
                // line 341
                echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
                echo "\" data-toggle=\"collapse\" data-parent=\"#dashboard-menu\" class=\"nav-link dropdown-toggle\">
                <i class=\"fas fa-user-cog fa-fw\"></i> ";
                // line 342
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account"), "html", null, true);
                echo "
            </a>
            <ul id=\"account-submenu-";
                // line 344
                echo twig_escape_filter($this->env, ($context["random"] ?? null), "html", null, true);
                echo "\" class=\"nav flex-column ml-3 collapse ";
                if (((($context["routename"] ?? null) == "dashboard_attendee_account_settings") || (($context["routename"] ?? null) == "fos_user_change_password"))) {
                    echo "show";
                }
                echo "\">
                <li class=\"nav-item\">
                    <a href=\"";
                // line 346
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_account_settings");
                echo "\" class=\"nav-link ";
                if ((($context["routename"] ?? null) == "dashboard_attendee_account_settings")) {
                    echo "active";
                }
                echo "\">
                        ";
                // line 347
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings"), "html", null, true);
                echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
                // line 351
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
                echo "\" class=\"nav-link ";
                if ((($context["routename"] ?? null) == "fos_user_change_password")) {
                    echo "active";
                }
                echo "\">
                        ";
                // line 352
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password"), "html", null, true);
                echo "
                    </a>
                </li>
            </ul>
        </li>

    ";
            }
            // line 359
            echo "
";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
            // line 361
            echo "
    ";
            // line 363
            echo "
    <li class=\"nav-item\">
        <a href=\"";
            // line 365
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_pointofsale_orders");
            echo "\" class=\"nav-link ";
            if (((($context["routename"] ?? null) == "dashboard_pointofsale_orders") || (($context["routename"] ?? null) == "dashboard_pointofsale_order_details"))) {
                echo "active";
            }
            echo "\">
            <i class=\"fas fa-cart-arrow-down fa-fw\"></i> ";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My orders"), "html", null, true);
            echo "
        </a>
    </li>

";
        }
    }

    public function getTemplateName()
    {
        return "Dashboard/sidebar-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1104 => 366,  1096 => 365,  1092 => 363,  1089 => 361,  1085 => 359,  1075 => 352,  1067 => 351,  1060 => 347,  1052 => 346,  1043 => 344,  1038 => 342,  1034 => 341,  1030 => 339,  1028 => 338,  1021 => 334,  1013 => 333,  1005 => 328,  997 => 327,  989 => 322,  981 => 321,  973 => 316,  969 => 315,  961 => 314,  953 => 309,  945 => 308,  941 => 306,  938 => 304,  927 => 296,  919 => 295,  910 => 293,  905 => 291,  901 => 290,  893 => 285,  885 => 284,  874 => 276,  866 => 275,  859 => 271,  851 => 270,  842 => 268,  837 => 266,  833 => 265,  825 => 260,  817 => 259,  809 => 254,  801 => 253,  790 => 245,  782 => 244,  775 => 240,  767 => 239,  758 => 237,  753 => 235,  749 => 234,  741 => 229,  733 => 228,  725 => 223,  717 => 222,  709 => 217,  701 => 216,  697 => 214,  694 => 212,  684 => 205,  676 => 204,  667 => 202,  662 => 200,  658 => 199,  648 => 192,  640 => 191,  633 => 187,  625 => 186,  616 => 184,  611 => 182,  607 => 181,  597 => 174,  589 => 173,  582 => 169,  574 => 168,  565 => 166,  560 => 164,  556 => 163,  548 => 158,  540 => 157,  532 => 152,  524 => 151,  516 => 146,  508 => 145,  500 => 140,  492 => 139,  478 => 134,  466 => 131,  454 => 128,  445 => 126,  440 => 124,  436 => 123,  428 => 118,  420 => 117,  412 => 112,  404 => 111,  394 => 106,  390 => 105,  382 => 104,  374 => 99,  366 => 98,  351 => 92,  339 => 89,  327 => 86,  315 => 83,  303 => 80,  294 => 78,  289 => 76,  285 => 75,  274 => 69,  262 => 66,  250 => 63,  238 => 60,  226 => 57,  214 => 54,  202 => 51,  190 => 48,  178 => 45,  166 => 42,  154 => 39,  142 => 36,  130 => 33,  118 => 30,  109 => 28,  104 => 26,  100 => 25,  96 => 23,  93 => 21,  91 => 20,  88 => 19,  83 => 16,  77 => 14,  71 => 12,  65 => 10,  59 => 8,  57 => 7,  49 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/sidebar-links.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/sidebar-links.html.twig");
    }
}
