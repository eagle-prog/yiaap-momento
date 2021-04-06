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

/* Dashboard/Shared/Event/manage-events-table.html.twig */
class __TwigTemplate_f0eb670980c816e4de875d9d2fe8d47e0a5e096f4b95a46997f34fb1a5823dd9 extends \Twig\Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-hover table-vcenter\">
        <thead>
            <tr>
                <th style=\"width:35%;\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event"), "html", null, true);
        echo "</th>
                    ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 7
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
            echo "</th>
                    ";
        }
        // line 9
        echo "                <th>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendance"), "html", null, true);
        echo "</th>
                <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "
                <tr>
                    <td>
                        <a class=\"fancybox\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "imageName", [], "any", false, false, false, 21)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "getImagePath", [], "any", false, false, false, 21))) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImagePlaceholder", [], "any", false, false, false, 21))), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enlarge"), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "imageName", [], "any", false, false, false, 22)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "getImagePath", [], "any", false, false, false, 22))) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImagePlaceholder", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" class=\"img-thumbnail img-50-50\" />
                        </a>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View event"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>
                        <span class=\"small text-muted ml-1\">#";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "reference", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                    </td>
                    ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 28
                echo "                        <td>
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 29), "slug", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View organizer"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</a>
                        </td>
                    ";
            }
            // line 32
            echo "                    <td>
                        <div class=\"clearfix\">
                            <div class=\"float-left\">
                                <strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getTotalSalesPercentage", [], "any", false, false, false, 35), "html", null, true);
            echo "%</strong>
                            </div>
                            <div class=\"float-right\">
                                <small class=\"text-muted\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getTotalOrderElementsQuantitySum", [], "any", false, false, false, 38), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ticket(s) sold"), "html", null, true);
            echo "</small>
                            </div>
                        </div>
                        <div class=\"progress progress-xs\">
                            <div class=\"progress-bar bg-yellow\" role=\"progressbar\" style=\"width: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getTotalSalesPercentage", [], "any", false, false, false, 42), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getTotalSalesPercentage", [], "any", false, false, false, 42), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </td>
                    <td>
                        <span class=\"badge badge-";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "stringifyStatusClass", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["event"], "stringifyStatus", [], "any", false, false, false, 46)), "html", null, true);
            echo "</span>
                        ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["event"], "deletedAt", [], "any", false, false, false, 47)) {
                // line 48
                echo "                            <br>
                            <br>
                            <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 52
            echo "                    </td>
                    <td class=\"text-center\">
                        <div class=\"mx-auto chart-circle chart-circle-xs\" data-value=\"";
            // line 54
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["event"], "getTotalCheckInPercentage", [], "any", false, false, false, 54) / 100), "html", null, true);
            echo "\" data-thickness=\"3\">
                            <div class=\"chart-circle-value\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "getTotalCheckInPercentage", [], "any", false, false, false, 55), "html", null, true);
            echo "%</div>
                        </div>
                    </td>
                    <td class=\"text-center\">
                        <div class=\"item-action dropdown\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <span class=\"dropdown-item cursor-pointer\" data-toggle=\"modal\" data-target=\"#event-";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "reference", [], "any", false, false, false, 62), "html", null, true);
            echo "-dates\"><i class=\"dropdown-icon fas fa-chart-line fa-fw text-muted\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statistics"), "html", null, true);
            echo "</span>
                                ";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 64
                echo "                                    <span data-title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\" class=\"dropdown-item ajax-loading\"><i class=\"dropdown-icon fas fa-file-alt fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo "</span>
                                    <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_orders", ["event" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 65), "status" => 1]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-users fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_reviews", ["event" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-star fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
                echo " </a>
                                    ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["event"], "deletedAt", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event_restore", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                    echo "</a>
                                        <span data-target=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event_delete_permanently", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 69)]), "html", null, true);
                    echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the event and all its related information PERMANENTLY"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon far fa-calendar-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                    echo "</span>
                                    ";
                } else {
                    // line 71
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 71)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                    echo " </a>
                                    ";
                }
                // line 73
                echo "                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                // line 74
                echo "
                                    ";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["event"], "isFree", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                                        <span class=\"dropdown-item cursor-pointer\" data-toggle=\"modal\" data-target=\"#event-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "reference", [], "any", false, false, false, 76), "html", null, true);
                    echo "-payout-request\"><i class=\"dropdown-icon fas fa-file-invoice-dollar fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Request payout"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 78
                echo "
                                    <span data-title=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 79), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"dropdown-item ajax-loading\"><i class=\"dropdown-icon fas fa-file-alt fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo "</span>
                                    <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-edit fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_orders", ["event" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 81), "status" => 1]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-users fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees"), "html", null, true);
                echo "</a>
                                    <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_reviews", ["event" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-star fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
                echo " </a>
                                    ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["event"], "published", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_draft", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 84)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye-slash fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
                    echo "</a>
                                    ";
                } else {
                    // line 86
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_publish", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
                    echo " </a>
                                    ";
                }
                // line 88
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["event"], "deletedAt", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                                        <span data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_delete_permanently", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 89)]), "html", null, true);
                    echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the event and all its related information PERMANENTLY"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon far fa-calendar-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                    echo "</span>
                                    ";
                } else {
                    // line 91
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                    echo " </a>
                                    ";
                }
                // line 93
                echo "                                ";
            }
            // line 94
            echo "                            </div>
                        </div>
                    </td>
                </tr>

            <div class=\"modal fade\" id=\"event-";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "reference", [], "any", false, false, false, 99), "html", null, true);
            echo "-dates\">
                <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event dates"), "html", null, true);
            echo "</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                            ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "eventdates", [], "any", false, false, false, 107));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                // line 108
                echo "                                <div>
                                    <b class=\"float-left\">";
                // line 109
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 109), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 109), "locale", [], "any", false, false, false, 109), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "</b>
                                    ";
                // line 110
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 111
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event_date_statistics", ["eventDateReference" => twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 111), "eventSlug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 111)]), "html", null, true);
                    echo "\" class=\"float-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View stats"), "html", null, true);
                    echo "</a>
                                    ";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                    // line 113
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_date_statistics", ["eventDateReference" => twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 113), "eventSlug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 113)]), "html", null, true);
                    echo "\" class=\"float-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View stats"), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 115
                echo "                                    <div class=\"clearfix\"></div>
                                </div>
                                ";
                // line 117
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 117)) {
                    echo "<hr>";
                }
                // line 118
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
            echo "</button>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 127
            if ( !twig_get_attribute($this->env, $this->source, $context["event"], "isFree", [], "any", false, false, false, 127)) {
                // line 128
                echo "                <div class=\"modal fade\" id=\"event-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "reference", [], "any", false, false, false, 128), "html", null, true);
                echo "-payout-request\">
                    <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 132), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout request"), "html", null, true);
                echo "</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            </div>
                            <div class=\"modal-body\">

                                ";
                // line 137
                $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Event/manage-events-table.html.twig", 137)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Once the payout request submitted, the event date will be locked and the sales will be suspended for the specific event date. If you wish, you can wait until the start date of the event date before requesting the payout. You can cancel the payout request any time before it is processed"), "icon" => "fas fa-exclamation-circle"]));
                // line 138
                echo "
                                <hr>

                                ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "eventdates", [], "any", false, false, false, 141));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                    // line 142
                    echo "                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["eventDate"], "isFree", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                        <div>
                                            <b class=\"float-left\">";
                        // line 144
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 144), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 144), "locale", [], "any", false, false, false, 144), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "</b>

                                            ";
                        // line 146
                        if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "isFree", [], "any", false, false, false, 146)) {
                            // line 147
                            echo "                                                <span class=\"badge badge-info float-right\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free"), "html", null, true);
                            echo "</span>
                                            ";
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 148
$context["eventDate"], "getSales", [], "any", false, false, false, 148) <= 0)) {
                            // line 149
                            echo "                                                <span class=\"badge badge-info float-right\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No sales yet"), "html", null, true);
                            echo "</span>
                                            ";
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 150
$context["eventDate"], "payoutRequested", [], "any", false, false, false, 150)) {
                            // line 151
                            echo "                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_payout_requests", ["eventdate" => twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 151)]), "html", null, true);
                            echo "\" class=\"float-right\"><i class=\"fas fa-file-invoice-dollar\"></i> ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout already requested"), "html", null, true);
                            echo "</a>
                                            ";
                        } else {
                            // line 153
                            echo "                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_date_request_payout", ["eventDateReference" => twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 153)]), "html", null, true);
                            echo "\" class=\"float-right\"><i class=\"fas fa-file-invoice-dollar\"></i> ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Request payout"), "html", null, true);
                            echo "</a>
                                            ";
                        }
                        // line 155
                        echo "                                            <div class=\"clearfix\"></div>
                                        </div>
                                    ";
                    }
                    // line 158
                    echo "                                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 158)) {
                        echo "<hr>";
                    }
                    // line 159
                    echo "                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                echo "                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
                // line 162
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 168
            echo "
    </div>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "</tbody>
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Event/manage-events-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 172,  564 => 168,  555 => 162,  551 => 160,  537 => 159,  532 => 158,  527 => 155,  519 => 153,  511 => 151,  509 => 150,  504 => 149,  502 => 148,  497 => 147,  495 => 146,  490 => 144,  487 => 143,  484 => 142,  467 => 141,  462 => 138,  460 => 137,  450 => 132,  442 => 128,  440 => 127,  431 => 121,  427 => 119,  413 => 118,  409 => 117,  405 => 115,  397 => 113,  389 => 111,  387 => 110,  383 => 109,  380 => 108,  363 => 107,  354 => 103,  347 => 99,  340 => 94,  337 => 93,  329 => 91,  319 => 89,  316 => 88,  308 => 86,  300 => 84,  298 => 83,  292 => 82,  286 => 81,  280 => 80,  272 => 79,  269 => 78,  261 => 76,  259 => 75,  256 => 74,  253 => 73,  245 => 71,  236 => 69,  229 => 68,  227 => 67,  221 => 66,  215 => 65,  206 => 64,  204 => 63,  198 => 62,  188 => 55,  184 => 54,  180 => 52,  175 => 50,  171 => 48,  169 => 47,  163 => 46,  154 => 42,  145 => 38,  139 => 35,  134 => 32,  124 => 29,  121 => 28,  119 => 27,  114 => 25,  106 => 24,  101 => 22,  95 => 21,  90 => 18,  73 => 17,  64 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Event/manage-events-table.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Event/manage-events-table.html.twig");
    }
}
