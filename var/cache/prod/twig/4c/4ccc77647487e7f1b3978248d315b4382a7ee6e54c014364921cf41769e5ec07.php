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

/* Dashboard/Shared/Order/ticket-pdf.html.twig */
class __TwigTemplate_48e2166de8437905682b190a3f3e09207cf6994a6a89a026a4dc717c6958c376 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1) == "ar")) {
            // line 2
            echo "    ";
            $context["locale"] = "en";
        } else {
            // line 4
            echo "    ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "locale", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order", [], "messages", ($context["locale"] ?? null)), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 10), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets", [], "messages", ($context["locale"] ?? null)), "html", null, true);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <style>

            *{ font-family: DejaVu Sans !important;}

            table.bordered, table.bordered th, table.bordered td {
                padding: 10px;
                border: 1px solid #eee;
                border-collapse: collapse;
            }
            table tr {
                vertical-align: top;
            }
            table td {
                word-wrap: break-word;
                overflow-wrap: break-word;
            }
            .text-center {
                text-align: center;
            }
            .text-right {
                text-align:right;
            }
            .tickets-container .ticket-wrapper {
                page-break-inside: avoid;
            }
            .tickets-container .ticket-wrapper:not(:last-child) {
                page-break-after: always;
            }
            .tickets-container .ticket-wrapper:not(:first-child) {
                page-break-before: always;
            }
            .text-muted {
                color: #777;
            }
            .footer {
                position:absolute;
                bottom:0;
                width: 100%;
            }
            .scanned-ticket-stamp {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

        </style>
    </head>
    <body>

        <div class=\"tickets-container\">

            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderelements", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["orderElement"]) {
            if ((((($context["eventDateTicketReference"] ?? null) == "all") || (($context["eventDateTicketReference"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 64), "reference", [], "any", false, false, false, 64))) && ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") && twig_get_attribute($this->env, $this->source, $context["orderElement"], "belongsToOrganizer", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 64), "organizer", [], "any", false, false, false, 64), "slug", [], "any", false, false, false, 64)], "method", false, false, false, 64))) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE") && twig_get_attribute($this->env, $this->source, $context["orderElement"], "belongsToOrganizer", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 64), "pointofsale", [], "any", false, false, false, 64), "organizer", [], "any", false, false, false, 64), "slug", [], "any", false, false, false, 64)], "method", false, false, false, 64))))) {
                // line 65
                echo "
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["orderElement"], "tickets", [], "any", false, false, false, 66));
                foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                    // line 67
                    echo "
                    <div class=\"ticket-wrapper\">

                        <div class=\"footer text-center text-muted\">
                            <img src=\"data:image/png;base64, ";
                    // line 71
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), [["code" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 71), "type" => "c128", "format" => "png", "height" => 30, "color" => [0 => 25, 1 => 25, 2 => 25]]]), "html", null, true);
                    echo " \" />
                            <br>
                            ";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_url"], "method", false, false, false, 73), "html", null, true);
                    echo "
                            <br>
                            ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 75), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . ($context["locale"] ?? null))], "method", false, false, false, 75), "html", null, true);
                    echo "
                        </div>

                        <table width=\"100%\" class=\"bordered\">
                            <tbody>
                                <tr>
                                    <td colspan=\"2\" class=\"text-center\">
                                        <img src=\".";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 82), "getLogoPath", [], "any", false, false, false, 82)), "html", null, true);
                    echo "\" />
                                    </td>
                                </tr>
                                <tr style=\"background-color: ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "primary_color"], "method", false, false, false, 85), "html", null, true);
                    echo "; color: #fff;\">
                                    <td width=\"50%\">
                                        <h5>";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo " #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 87), "html", null, true);
                    echo "</h3>
                                    </td>
                                    <td width=\"50%\">
                                        <h5>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo " #";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "reference", [], "any", false, false, false, 90), "html", null, true);
                    echo "</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td width=\"50%\">
                                        <h3>";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 95), "eventdate", [], "any", false, false, false, 95), "event", [], "any", false, false, false, 95), "translate", [0 => ($context["locale"] ?? null)], "method", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                    echo "</h3>
                                        ";
                    // line 96
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 96), "eventdate", [], "any", false, false, false, 96), "startdate", [], "any", false, false, false, 96)) {
                        // line 97
                        echo "                                            <h6><span class=\"text-muted\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start date", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "</span><br>";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 97), "eventdate", [], "any", false, false, false, 97), "startdate", [], "any", false, false, false, 97), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "</h6>
                                            ";
                    }
                    // line 99
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 99), "eventdate", [], "any", false, false, false, 99), "enddate", [], "any", false, false, false, 99)) {
                        // line 100
                        echo "                                            <h6><span class=\"text-muted\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("End date", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "</span><br>";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 100), "eventdate", [], "any", false, false, false, 100), "enddate", [], "any", false, false, false, 100), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "</h6>
                                            ";
                    }
                    // line 102
                    echo "                                        <h6>
                                            <span class=\"text-muted\">";
                    // line 103
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue / Location", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo "</span><br>
                                            ";
                    // line 104
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 104), "eventdate", [], "any", false, false, false, 104), "venue", [], "any", false, false, false, 104)) {
                        // line 105
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 105), "eventdate", [], "any", false, false, false, 105), "venue", [], "any", false, false, false, 105), "translate", [0 => ($context["locale"] ?? null)], "method", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 107
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 109
                    echo "                                        </h6>
                                        ";
                    // line 110
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 110), "eventdate", [], "any", false, false, false, 110), "event", [], "any", false, false, false, 110), "organizer", [], "any", false, false, false, 110)) {
                        // line 111
                        echo "                                            <h6><span class=\"text-muted\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "</span><br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 111), "eventdate", [], "any", false, false, false, 111), "event", [], "any", false, false, false, 111), "organizer", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
                        echo "</h6>
                                            ";
                    }
                    // line 113
                    echo "                                    </td>
                                    <td width=\"50%\">
                                        <h3>
                                            ";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 116), "getCrossRoleName", [], "any", false, false, false, 116), "html", null, true);
                    echo "
                                            ";
                    // line 117
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 117), "hasRole", [0 => "ROLE_POINTOFSALE"], "method", false, false, false, 117) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 117), "firstname", [], "any", false, false, false, 117)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 117), "lastname", [], "any", false, false, false, 117))) {
                        // line 118
                        echo "                                                (";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 118), "firstname", [], "any", false, false, false, 118) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 118), "lastname", [], "any", false, false, false, 118)), "html", null, true);
                        echo ")
                                            ";
                    }
                    // line 120
                    echo "                                        </h3>
                                        <h6><span class=\"text-muted\">";
                    // line 121
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket type", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo "</span><br>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 121), "name", [], "any", false, false, false, 121), "html", null, true);
                    echo "</h6>
                                        <h6><span class=\"text-muted\">";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket price", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo "</span><br>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 122), "free", [], "any", false, false, false, 122)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free", [], "messages", ($context["locale"] ?? null))) : ((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 122) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 122)) : ("")) . twig_get_attribute($this->env, $this->source, $context["orderElement"], "displayUnitPrice", [], "method", false, false, false, 122)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 122) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 122)) : (""))))), "html", null, true);
                    echo "</h6>
                                            ";
                    // line 123
                    if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 123) > 0)) {
                        // line 124
                        echo "                                            <h6><span class=\"text-muted\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment method", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "</span><br>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
                        echo "</h6>
                                            ";
                    }
                    // line 126
                    echo "                                        <h6><span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order date", [], "messages", ($context["locale"] ?? null)), "html", null, true);
                    echo "</span><br>
                                            ";
                    // line 127
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 127), "details", [], "any", false, true, false, 127), "TIMESTAMP", [], "array", true, true, false, 127)) {
                        // line 128
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 128), "details", [], "any", false, false, false, 128)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["TIMESTAMP"] ?? null) : null), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "
                                            ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 129
($context["order"] ?? null), "payment", [], "any", false, true, false, 129), "details", [], "any", false, true, false, 129), "created", [], "array", true, true, false, 129)) {
                        // line 130
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 130), "details", [], "any", false, false, false, 130)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["created"] ?? null) : null), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 132
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 132), "updatedAt", [], "any", false, false, false, 132), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 134
                    echo "                                        </h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-center\" colspan=\"2\">
                                        <img src=\"data:image/png;base64, ";
                    // line 139
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), [["code" => twig_get_attribute($this->env, $this->source, $context["ticket"], "reference", [], "any", false, false, false, 139), "type" => "qrcode", "format" => "png", "width" => 6, "height" => 6, "color" => [0 => 25, 1 => 25, 2 => 25]]]), "html", null, true);
                    echo " \" />
                                    </td>
                                </tr>
                                ";
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, $context["ticket"], "scanned", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                    <tr>
                                        <td class=\"text-center\" colspan=\"2\">
                                            <br><br>
                                            <img src=\".";
                        // line 146
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/scanned-ticket-stamp.png"), "html", null, true);
                        echo "\" height=\"150\" />

                                            <p class=\"text-center text-muted\">";
                        // line 148
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This ticket was scanned at %scanDate%", ["%scanDate%" => twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "updatedAt", [], "any", false, false, false, 148), "none", "none", ($context["locale"] ?? null), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null))], "messages", ($context["locale"] ?? null)), "html", null, true);
                        echo "</p>
                                        </td>
                                    </tr>
                                ";
                    }
                    // line 152
                    echo "                            </tbody>
                        </table>

                    </div>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Order/ticket-pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 159,  353 => 158,  342 => 152,  335 => 148,  330 => 146,  325 => 143,  323 => 142,  317 => 139,  310 => 134,  304 => 132,  298 => 130,  296 => 129,  291 => 128,  289 => 127,  284 => 126,  276 => 124,  274 => 123,  268 => 122,  262 => 121,  259 => 120,  253 => 118,  251 => 117,  247 => 116,  242 => 113,  234 => 111,  232 => 110,  229 => 109,  223 => 107,  217 => 105,  215 => 104,  211 => 103,  208 => 102,  200 => 100,  197 => 99,  189 => 97,  187 => 96,  183 => 95,  173 => 90,  165 => 87,  160 => 85,  154 => 82,  142 => 75,  137 => 73,  132 => 71,  126 => 67,  122 => 66,  119 => 65,  114 => 64,  53 => 10,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Order/ticket-pdf.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Order/ticket-pdf.html.twig");
    }
}
