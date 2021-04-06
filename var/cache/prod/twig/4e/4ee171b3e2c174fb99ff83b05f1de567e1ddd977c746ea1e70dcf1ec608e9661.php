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

/* Dashboard/Shared/Order/manage-orders-table.html.twig */
class __TwigTemplate_18e12d5d86c7dea3a5a4c21243a6cdf8517a262304264699238f538c8097cbe1 extends \Twig\Template
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
                <th class=\"text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer / Event / Date / Ticket"), "html", null, true);
        echo "</th>
                    ";
        // line 7
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
            // line 8
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendee / POS"), "html", null, true);
            echo "</th>
                    ";
        }
        // line 10
        echo "                <th>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order date"), "html", null, true);
        echo "</th>
                    ";
        // line 11
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 12
            echo "                    <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                    ";
        }
        // line 14
        echo "                <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 20
            echo "
                <tr>
                    <td class=\"text-center text-muted text-sm\">
                        ";
            // line 23
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 24
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\">
                                ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 25), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                // line 28
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                                ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 29), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 32
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_pointofsale_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
                                ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 33), "html", null, true);
                echo "
                            </a>
                        ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                // line 36
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
                                ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 37), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 40
            echo "                    </td>
                    <td class=\"text-sm\">
                        <ul class=\"p-0\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order"], "orderelements", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["orderelement"]) {
                // line 44
                echo "                                ";
                if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") && twig_get_attribute($this->env, $this->source, $context["orderelement"], "belongsToOrganizer", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44), "organizer", [], "any", false, false, false, 44), "slug", [], "any", false, false, false, 44)], "method", false, false, false, 44))) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
                    // line 45
                    echo "                                    ";
                    if ((((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "event"], "method", false, false, false, 45) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "event"], "method", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 45), "eventdate", [], "any", false, false, false, 45), "event", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "eventdate"], "method", false, false, false, 45) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "eventdate"], "method", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 45), "eventdate", [], "any", false, false, false, 45), "reference", [], "any", false, false, false, 45)))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "eventticket"], "method", false, false, false, 45) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "eventticket"], "method", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 45), "reference", [], "any", false, false, false, 45)))) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "organizer"], "method", false, false, false, 45) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "get", [0 => "organizer"], "method", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 45), "eventdate", [], "any", false, false, false, 45), "event", [], "any", false, false, false, 45), "organizer", [], "any", false, false, false, 45), "slug", [], "any", false, false, false, 45))))) {
                        // line 46
                        echo "                                        <li>
                                            ";
                        // line 47
                        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
                            // line 48
                            echo "                                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 48), "eventdate", [], "any", false, false, false, 48), "event", [], "any", false, false, false, 48), "organizer", [], "any", false, false, false, 48), "slug", [], "any", false, false, false, 48)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 48), "eventdate", [], "any", false, false, false, 48), "event", [], "any", false, false, false, 48), "organizer", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                            echo "</a>
                                                <i class=\"fas fa-chevron-";
                            // line 49
                            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 49), "locale", [], "any", false, false, false, 49) == "ar")) ? ("left") : ("right"));
                            echo " fa-sm\"></i>
                                            ";
                        }
                        // line 51
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 51), "eventdate", [], "any", false, false, false, 51), "event", [], "any", false, false, false, 51), "slug", [], "any", false, false, false, 51)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 51), "eventdate", [], "any", false, false, false, 51), "event", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                        echo "</a>
                                            <i class=\"fas fa-chevron-";
                        // line 52
                        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 52), "locale", [], "any", false, false, false, 52) == "ar")) ? ("left") : ("right"));
                        echo " fa-sm\"></i>
                                            ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 53), "eventdate", [], "any", false, false, false, 53), "startdate", [], "any", false, false, false, 53), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 53), "locale", [], "any", false, false, false, 53), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "
                                            <i class=\"fas fa-chevron-";
                        // line 54
                        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 54), "locale", [], "any", false, false, false, 54) == "ar")) ? ("left") : ("right"));
                        echo " fa-sm\"></i>
                                            ";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                        echo "
                                            <br>
                                            <small><strong>";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderelement"], "quantity", [], "any", false, false, false, 57), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["orderelement"], "quantity", [], "any", false, false, false, 57) > 1)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tickets")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ticket"))), "html", null, true);
                        echo "</strong></small>
                                            ";
                        // line 58
                        if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 58) == 0)) {
                            // line 59
                            echo "                                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["orderelement"], "ticketsReservations", [], "any", false, false, false, 59));
                            foreach ($context['_seq'] as $context["_key"] => $context["ticketReservation"]) {
                                if ( !twig_get_attribute($this->env, $this->source, $context["ticketReservation"], "isExpired", [], "any", false, false, false, 59)) {
                                    // line 60
                                    echo "                                                    ";
                                    $context["dateInterval"] = twig_get_attribute($this->env, $this->source, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketReservation"], "expiresAt", [], "any", false, false, false, 60), (("+" . twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "checkout_timeleft"], "method", false, false, false, 60)) . " second")), "diff", [0 => twig_date_converter($this->env, "now")], "method", false, false, false, 60);
                                    // line 61
                                    echo "                                                    ";
                                    $context["secondsLeft"] = ((twig_date_format_filter($this->env, ($context["dateInterval"] ?? null), "%i") * 60) + twig_date_format_filter($this->env, ($context["dateInterval"] ?? null), "%s"));
                                    // line 62
                                    echo "                                                    ";
                                    if ((($context["secondsLeft"] ?? null) > 0)) {
                                        // line 63
                                        echo "                                                        <span class=\"badge badge-warning\">
                                                            <i class=\"fas fa-hourglass-half\"></i> <span class=\"checkout-timer\" data-seconds-left=\"";
                                        // line 64
                                        echo twig_escape_filter($this->env, ($context["secondsLeft"] ?? null), "html", null, true);
                                        echo "\"></span> ";
                                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("left before tickets are released"), "html", null, true);
                                        echo "
                                                        </span>
                                                    ";
                                    }
                                    // line 67
                                    echo "                                                ";
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketReservation'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 68
                            echo "                                            ";
                        }
                        // line 69
                        echo "                                        </li>
                                    ";
                    }
                    // line 71
                    echo "                                ";
                }
                // line 72
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderelement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        </ul>
                    </td>
                    ";
            // line 75
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
                // line 76
                echo "                        <td class=\"text-sm\">
                            ";
                // line 77
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 78
                    echo "                                <span title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User information"), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" data-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User information"), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_information", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 78), "slug", [], "any", false, false, false, 78)]), "html", null, true);
                    echo "\" class=\"ajax-loading\">";
                    $this->loadTemplate("Global/user-avatar.html.twig", "Dashboard/Shared/Order/manage-orders-table.html.twig", 78)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 78)]));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 78), "getCrossRoleName", [], "any", false, false, false, 78), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 80
                    echo "                                ";
                    $this->loadTemplate("Global/user-avatar.html.twig", "Dashboard/Shared/Order/manage-orders-table.html.twig", 80)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 80)]));
                    // line 81
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 81), "getCrossRoleName", [], "any", false, false, false, 81), "html", null, true);
                    echo "
                            ";
                }
                // line 83
                echo "                        </td>
                    ";
            }
            // line 85
            echo "                    <td class=\"text-sm\">
                        ";
            // line 86
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 86), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 86), "locale", [], "any", false, false, false, 86), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
            echo "
                    </td>
                    ";
            // line 88
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                // line 89
                echo "                        <td class=\"text-sm\">
                            <span class=\"badge badge-";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getStatusClass", [], "any", false, false, false, 90), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["order"], "stringifyStatus", [], "any", false, false, false, 90)), "html", null, true);
                echo "</span>
                            ";
                // line 91
                if (twig_get_attribute($this->env, $this->source, $context["order"], "deletedAt", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "                                <br>
                                <br>
                                <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 96
                echo "                        </td>
                    ";
            }
            // line 98
            echo "                    <td class=\"text-center\">
                        <div class=\"item-action dropdown\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 102) == 1)) {
                // line 103
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tickets_print", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 103)]), "html", null, true);
                echo "\" class=\"dropdown-item\" target=\"_blank\"><i class=\"dropdown-icon fas fa-ticket-alt fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Print tickets"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 105
            echo "                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 106
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo " </a>
                                    ";
                // line 107
                if ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 107) == 1)) {
                    // line 108
                    echo "                                        <span data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_resend_confirmation_email", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 108)]), "html", null, true);
                    echo "\" data-initial-email-address=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "payment", [], "any", false, false, false, 108), "clientEmail", [], "any", false, false, false, 108), "html", null, true);
                    echo "\" class=\"dropdown-item cursor-pointer resend-confirmation-email-button\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you need to send the confirmation email to a different email address, you can change it before submitting"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon far fa-envelope fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resend confirmation email"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 110
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 110) ==  -2) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 110) == 1))) {
                    // line 111
                    echo "                                        <span class=\"dropdown-item cursor-pointer\" data-toggle=\"modal\" data-target=\"#order-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 111), "html", null, true);
                    echo "-payment-details\"><i class=\"dropdown-icon fas fa-file-alt fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment details"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 113
                echo "                                    ";
                if (((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 113) == 0) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 113) == 1))) {
                    // line 114
                    echo "                                        <span data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_cancel", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 114)]), "html", null, true);
                    echo "\" class=\"dropdown-item cursor-pointer order-cancel-button\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to cancel this order (this action cannot be undone)"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon fas fa-window-close fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
                    echo "</span>
                                    ";
                }
                // line 116
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["order"], "deletedAt", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_restore", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 117)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                    echo "</a>
                                        <span data-target=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 118)]), "html", null, true);
                    echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the order and all its related information (payment details, tickets...)") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PERMANENTLY")), "html", null, true);
                    echo "\"><i class=\"dropdown-icon fas fa-trash fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                    echo "</span>
                                    ";
                } else {
                    // line 120
                    echo "                                        <span data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 120)]), "html", null, true);
                    echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the order and all its related information (payment details, tickets...)"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                    echo " </span>
                                    ";
                }
                // line 122
                echo "                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                // line 123
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 123)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo " </a>
                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 125
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_pointofsale_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo " </a>
                                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                // line 127
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_order_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 127)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                echo " </a>
                                ";
            }
            // line 129
            echo "                            </div>
                        </div>
                    </td>
                </tr>

                ";
            // line 134
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") && ((twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 134) ==  -2) || (twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 134) == 1))) && twig_get_attribute($this->env, $this->source, $context["order"], "payment", [], "any", false, false, false, 134))) {
                // line 135
                echo "
                <div class=\"modal fade\" id=\"order-";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 136), "html", null, true);
                echo "-payment-details\">
                    <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h4 class=\"modal-title\">";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order payment details"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 140), "html", null, true);
                echo "</h4>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                            </div>
                            <div class=\"modal-body\">

                                <p class=\"mb-3 text-center\">
                                    <img src=\"";
                // line 146
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "paymentgateway", [], "any", false, false, false, 146), "getLogoPath", [], "any", false, false, false, 146)), "html", null, true);
                echo "\" class=\"img-80-80\" />
                                </p>

                                ";
                // line 149
                echo nl2br(twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "payment", [], "any", false, false, false, 149), "details", [], "any", false, false, false, 149), twig_constant("JSON_PRETTY_PRINT")), "html", null, true));
                echo "
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
                // line 152
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

            ";
            }
            // line 159
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Order/manage-orders-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 161,  504 => 159,  494 => 152,  488 => 149,  482 => 146,  471 => 140,  464 => 136,  461 => 135,  459 => 134,  452 => 129,  444 => 127,  436 => 125,  428 => 123,  425 => 122,  415 => 120,  406 => 118,  399 => 117,  396 => 116,  386 => 114,  383 => 113,  375 => 111,  372 => 110,  360 => 108,  358 => 107,  351 => 106,  348 => 105,  340 => 103,  338 => 102,  332 => 98,  328 => 96,  323 => 94,  319 => 92,  317 => 91,  311 => 90,  308 => 89,  306 => 88,  301 => 86,  298 => 85,  294 => 83,  288 => 81,  285 => 80,  271 => 78,  269 => 77,  266 => 76,  264 => 75,  260 => 73,  254 => 72,  251 => 71,  247 => 69,  244 => 68,  237 => 67,  229 => 64,  226 => 63,  223 => 62,  220 => 61,  217 => 60,  211 => 59,  209 => 58,  203 => 57,  198 => 55,  194 => 54,  190 => 53,  186 => 52,  179 => 51,  174 => 49,  167 => 48,  165 => 47,  162 => 46,  159 => 45,  156 => 44,  152 => 43,  147 => 40,  141 => 37,  136 => 36,  130 => 33,  125 => 32,  119 => 29,  114 => 28,  108 => 25,  103 => 24,  101 => 23,  96 => 20,  79 => 19,  72 => 14,  66 => 12,  64 => 11,  59 => 10,  53 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Order/manage-orders-table.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Order/manage-orders-table.html.twig");
    }
}
