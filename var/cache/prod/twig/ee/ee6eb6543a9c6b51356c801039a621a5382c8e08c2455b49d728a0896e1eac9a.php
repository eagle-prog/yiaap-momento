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

/* Dashboard/Attendee/Cart/add-to-cart-modal.html.twig */
class __TwigTemplate_7a0c10ffaa2ca8594875f7ab48ff65ed4651a16641f666cfc40763de92f63ebd extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"buy-tickets-modal-eventDate-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "reference", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\"><i class=\"fas fa-ticket-alt\"></i> ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Buy tickets"), "html", null, true);
        echo "</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                <h6 class=\"b\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "event", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h6>
                <p class=\"text-sm mb-1 text-muted\"><i class=\"fas fa-clock fa-fw\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "startdate", [], "any", false, false, false, 10), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
        echo "</p>

                <p class=\"text-sm text-muted\"><i class=\"fas fa-map-marker-alt fa-fw\"></i>
                    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 13)) {
            // line 14
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 14), "stringifyAddress", [], "any", false, false, false, 14), "html", null, true);
            echo "
                    ";
        } else {
            // line 16
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online"), "html", null, true);
            echo "
                    ";
        }
        // line 18
        echo "                </p>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover table-condensed mb-0\">
                        <tbody>
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "tickets", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 23
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["ticket"], "active", [], "any", false, false, false, 23)) {
                // line 24
                echo "                                    <tr class=\"bg-gray\">
                                        <td class=\"border-top-white\">
                                            <div>
                                                ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 27), "html", null, true);
                echo "
                                                ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                                                    <i class=\"fas fa-info-circle text-primary ml-2\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 29), "html", null, true);
                    echo "\"></i>
                                                ";
                }
                // line 31
                echo "
                                                ";
                // line 32
                $context["eventTicketInCartSum"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 32), "isEventticketInCart", [0 => $context["ticket"]], "method", false, false, false, 32);
                // line 33
                echo "
                                                ";
                // line 34
                if (($context["eventTicketInCartSum"] ?? null)) {
                    // line 35
                    echo "                                                    <i class=\"fas fa-cart-plus ml-2 animated infinite flash text-danger\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have added %tickets% ticket(s) to your cart", ["%tickets%" => ($context["eventTicketInCartSum"] ?? null)]), "html", null, true);
                    echo "\"></i>
                                                ";
                }
                // line 37
                echo "
                                                ";
                // line 38
                $context["validTicketReservationsQuantitySumForUser"] = twig_get_attribute($this->env, $this->source, $context["ticket"], "getValidTicketReservationsQuantitySum", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38)], "method", false, false, false, 38);
                // line 39
                echo "
                                                ";
                // line 40
                if (($context["validTicketReservationsQuantitySumForUser"] ?? null)) {
                    // line 41
                    echo "                                                    <i class=\"fas fa-hourglass-half ml-2 animated infinite flash text-danger\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%tickets% ticket(s) are still reserved for you, please wait until the reservation expires at %expirationDate% in order to purchase more tickets", ["%tickets%" => ($context["validTicketReservationsQuantitySumForUser"] ?? null), "%expirationDate%" => twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "getValidTicketReservationExpirationDate", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41)], "method", false, false, false, 41), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null))]), "html", null, true);
                    echo "\"></i>
                                                ";
                }
                // line 43
                echo "
                                                ";
                // line 44
                $context["paidOrderElementsQuantitySum"] = twig_get_attribute($this->env, $this->source, $context["ticket"], "getOrderElementsQuantitySum", [0 => 1, 1 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                // line 45
                echo "
                                                ";
                // line 46
                if (($context["paidOrderElementsQuantitySum"] ?? null)) {
                    // line 47
                    echo "                                                    <i class=\"fas fa-ticket-alt ml-2 animated infinite flash text-info\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have already bought %tickets% ticket(s)", ["%tickets%" => ($context["paidOrderElementsQuantitySum"] ?? null)]), "html", null, true);
                    echo "\"></i>
                                                ";
                }
                // line 49
                echo "
                                            </div>
                                            ";
                // line 51
                if ( !twig_get_attribute($this->env, $this->source, $context["ticket"], "isOnSale", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                                                <span class=\"badge badge-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "stringifyStatusClass", [], "any", false, false, false, 52), "html", null, true);
                    echo " mt-1\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["ticket"], "stringifyStatus", [], "any", false, false, false, 52)), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 54
                echo "                                            <div class=\"clearfix\"></div>
                                            <div class=\"b mt-1\">
                                                ";
                // line 56
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ticket"], "free", [], "any", false, false, false, 56)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : ((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 56) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 56)) : ("")) . twig_get_attribute($this->env, $this->source, $context["ticket"], "getSalePrice", [], "method", false, false, false, 56)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 56) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 56)) : (""))))), "html", null, true);
                echo "
                                                ";
                // line 57
                if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "promotionalprice", [], "any", false, false, false, 57) &&  !twig_get_attribute($this->env, $this->source, $context["ticket"], "free", [], "any", false, false, false, 57))) {
                    // line 58
                    echo "                                                    <del class=\"price-old\">";
                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 58) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 58)) : ("")) . twig_get_attribute($this->env, $this->source, $context["ticket"], "getPrice", [], "method", false, false, false, 58)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 58) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 58)) : (""))), "html", null, true);
                    echo "</del>
                                                ";
                }
                // line 60
                echo "                                            </div>
                                            ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["ticket"], "salesstartdate", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                                                <div class=\"clearfix\"></div>
                                                ";
                    // line 63
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesstartdate", [], "any", false, false, false, 63), "Y/m/d H:i") > twig_date_format_filter($this->env, "now", "Y/m/d H:i"))) {
                        // line 64
                        echo "                                                    <small class=\"text-danger font-size-10px mt-1\">
                                                        ";
                        // line 65
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales start in"), "html", null, true);
                        echo "
                                                        <span class=\"countdown\" data-count-down-to=\"";
                        // line 66
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesstartdate", [], "any", false, false, false, 66), "Y/m/d H:i"), "html", null, true);
                        echo "\"></span>
                                                    </small>
                                                ";
                    } else {
                        // line 69
                        echo "                                                    <small class=\"text-success font-size-10px mt-1\">
                                                        ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales started on"), "html", null, true);
                        echo "
                                                        ";
                        // line 71
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesstartdate", [], "any", false, false, false, 71), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "locale", [], "any", false, false, false, 71), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "
                                                    </small>
                                                ";
                    }
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "salesenddate", [], "any", false, false, false, 76) && (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesstartdate", [], "any", false, false, false, 76), "Y/m/d H:i") <= twig_date_format_filter($this->env, "now", "Y/m/d H:i")))) {
                    // line 77
                    echo "                                                <div class=\"clearfix\"></div>
                                                ";
                    // line 78
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesenddate", [], "any", false, false, false, 78), "Y/m/d H:i") < twig_date_format_filter($this->env, "now", "Y/m/d H:i"))) {
                        // line 79
                        echo "                                                    <small class=\"text-danger font-size-10px  mt-1\">
                                                        ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales ended on"), "html", null, true);
                        echo "
                                                        <span>";
                        // line 81
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesenddate", [], "any", false, false, false, 81), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 81), "locale", [], "any", false, false, false, 81), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "</span>
                                                    </small>
                                                ";
                    } else {
                        // line 84
                        echo "                                                    <small class=\"text-danger font-size-10px  mt-1\">
                                                        ";
                        // line 85
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales end in"), "html", null, true);
                        echo "
                                                        <span class=\"countdown\" data-count-down-to=\"";
                        // line 86
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "salesenddate", [], "any", false, false, false, 86), "Y/m/d H:i"), "html", null, true);
                        echo "\"></span>
                                                    </small>
                                                ";
                    }
                    // line 89
                    echo "                                            ";
                }
                // line 90
                echo "                                        </td>
                                        <td class=\"border-top-white text-right\">
                                            <input type=\"text\" class=\"form-control touchspin-integer bg-white eventdate-ticket-qte\" name=\"";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "reference", [], "any", false, false, false, 92), "html", null, true);
                echo "\" data-min=\"0\" data-max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "getMaxTicketsForSaleCount", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 92)], "method", false, false, false, 92), "html", null, true);
                echo "\" ";
                if (((($context["eventTicketInCartSum"] ?? null) || ($context["validTicketReservationsQuantitySumForUser"] ?? null)) ||  !twig_get_attribute($this->env, $this->source, $context["ticket"], "isOnSale", [], "any", false, false, false, 92))) {
                    echo "disabled";
                }
                echo " />
                                            ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_tickets_left_on_cart_modal"], "method", false, false, false, 93) == "yes")) {
                    // line 94
                    echo "                                                <span class=\"badge badge-info mt-2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "getTicketsLeftCount", [], "any", false, false, false, 94), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tickets left"), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 96
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["ticket"], "ticketsperattendee", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                                                <span class=\"badge badge-info ml-3 mt-2\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "ticketsperattendee", [], "any", false, false, false, 97), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tickets per attendee"), "html", null, true);
                    echo "</span>
                                            ";
                }
                // line 99
                echo "                                        </td>
                                    </tr>

                                ";
            }
            // line 103
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-primary\" data-dismiss=\"modal\"><i class=\"far fa-window-close\"></i> ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
                ";
        // line 110
        if ( !twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "hasTwoOrMoreEventDatesOnSale", [], "any", false, false, false, 110)) {
            // line 111
            echo "                    <button id=\"add-to-cart-button\" type=\"button\" class=\"btn btn-primary\"><i class=\"fas fa-cart-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to cart"), "html", null, true);
            echo "</button>
                ";
        }
        // line 113
        echo "            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Dashboard/Attendee/Cart/add-to-cart-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 113,  324 => 111,  322 => 110,  318 => 109,  311 => 104,  305 => 103,  299 => 99,  291 => 97,  288 => 96,  280 => 94,  278 => 93,  268 => 92,  264 => 90,  261 => 89,  255 => 86,  251 => 85,  248 => 84,  242 => 81,  238 => 80,  235 => 79,  233 => 78,  230 => 77,  228 => 76,  225 => 75,  222 => 74,  216 => 71,  212 => 70,  209 => 69,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  191 => 62,  189 => 61,  186 => 60,  180 => 58,  178 => 57,  174 => 56,  170 => 54,  162 => 52,  160 => 51,  156 => 49,  150 => 47,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  134 => 41,  132 => 40,  129 => 39,  127 => 38,  124 => 37,  118 => 35,  116 => 34,  113 => 33,  111 => 32,  108 => 31,  102 => 29,  100 => 28,  96 => 27,  91 => 24,  88 => 23,  84 => 22,  78 => 18,  72 => 16,  64 => 14,  62 => 13,  56 => 10,  52 => 9,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Attendee/Cart/add-to-cart-modal.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Attendee/Cart/add-to-cart-modal.html.twig");
    }
}
