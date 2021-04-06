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

/* Global/event-card.html.twig */
class __TwigTemplate_a4fbc80388443e1549c0bb994c79451ff03100e8f3ba0f5b08947ad1518ca688 extends \Twig\Template
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
        if ((isset($context["eventDate"]) || array_key_exists("eventDate", $context))) {
            // line 2
            echo "    ";
            $context["displayedEventDate"] = ($context["eventDate"] ?? null);
        } else {
            // line 4
            echo "    ";
            $context["displayedEventDate"] = twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getFirstOnSaleEventDate", [], "any", false, false, false, 4);
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["customLink"]) || array_key_exists("customLink", $context))) {
            // line 8
            echo "    ";
            $context["link"] = ($context["customLink"] ?? null);
        } else {
            // line 10
            echo "    ";
            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 10)]);
        }
        // line 12
        echo "
<div class=\"card card-event\">
    <div class=\"img-wrap img-lazy-load\" data-src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "imageName", [], "any", false, false, false, 14)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 14))), "html", null, true);
        echo "\">
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\"></a>
        <div class=\"loader\"></div>
    </div>
    <div class=\"info-wrap\">
        ";
        // line 19
        if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) &&  !(isset($context["hideFavoriteButton"]) || array_key_exists("hideFavoriteButton", $context)))) {
            // line 20
            echo "            <div class=\"event-favorite\">
                ";
            // line 21
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 22
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isAddedToFavoritesBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22)], "method", false, false, false, 22)) {
                    // line 23
                    echo "                        <button class=\"event-favorites-remove\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_favorites_remove", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 23)]), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from favorites"), "html", null, true);
                    echo "\"><i class=\"fas fa-heart\"></i></button>
                        ";
                } else {
                    // line 25
                    echo "                        <button class=\"event-favorites-add\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_favorites_add", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 25)]), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to favorites"), "html", null, true);
                    echo "\"><i class=\"far fa-heart\"></i></button>
                        ";
                }
                // line 27
                echo "                    ";
            } else {
                // line 28
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "getPathInfo", [], "any", false, false, false, 28)), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to favorites"), "html", null, true);
                echo "\"><i class=\"far fa-heart\"></i></a>
                    ";
            }
            // line 30
            echo "            </div>
        ";
        }
        // line 32
        echo "        <div class=\"event-info\">
            <h5>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" class=\"text-dark\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</a>
            </h5>

            <div class=\"text-black-50 small\">
                ";
        // line 38
        if (($context["displayedEventDate"] ?? null)) {
            // line 39
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "venue", [], "any", false, false, false, 39)) {
                // line 40
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "venue", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "venue", [], "any", false, false, false, 40), "city", [], "any", false, false, false, 40) . ", ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "venue", [], "any", false, false, false, 40), "country", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40)), "html", null, true);
                echo "
                    ";
            } else {
                // line 42
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online"), "html", null, true);
                echo "
                    ";
            }
            // line 44
            echo "                ";
        }
        // line 45
        echo "                &nbsp;
            </div>
            <div class=\"text-black-50 small\">
                ";
        // line 48
        if (($context["displayedEventDate"] ?? null)) {
            // line 49
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "startdate", [], "any", false, false, false, 49)) {
                // line 50
                echo "                        ";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "startdate", [], "any", false, false, false, 50), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "locale", [], "any", false, false, false, 50), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                    ";
            }
            // line 52
            echo "                ";
        }
        // line 53
        echo "                &nbsp;
            </div>
        </div>
        ";
        // line 56
        if ( !(isset($context["hidePrice"]) || array_key_exists("hidePrice", $context))) {
            // line 57
            echo "            <div class=\"price-wrap\">
                ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isFree", [], "any", false, false, false, 58)) {
                // line 59
                echo "                    <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free"), "html", null, true);
                echo "</span>
                ";
            } else {
                // line 61
                echo "                    ";
                if (($context["displayedEventDate"] ?? null)) {
                    // line 62
                    echo "                        <span class=\"price-new\">";
                    (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 62) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 62), "html", null, true))) : (print ("")));
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getCheapestTicket", [], "any", false, false, false, 62), "getSalePrice", [], "any", false, false, false, 62), "html", null, true);
                    (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 62) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 62), "html", null, true))) : (print ("")));
                    echo "</span>
                    ";
                }
                // line 64
                echo "                ";
            }
            // line 65
            echo "            </div>
        ";
        }
        // line 67
        echo "        ";
        if ((isset($context["orderReference"]) || array_key_exists("orderReference", $context))) {
            // line 68
            echo "            <div class=\"order-reference\">
                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_order_details", ["reference" => ($context["orderReference"] ?? null)]), "html", null, true);
            echo "\"><small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order"), "html", null, true);
            echo " #";
            echo twig_escape_filter($this->env, ($context["orderReference"] ?? null), "html", null, true);
            echo "</small></a>
            </div>
        ";
        }
        // line 72
        echo "        <div class=\"clearfix\"></div>
    </div>
    <span class=\"event-category\">
        ";
        // line 75
        if ((isset($context["ticketName"]) || array_key_exists("ticketName", $context))) {
            // line 76
            echo "            <b>";
            echo twig_escape_filter($this->env, ($context["ticketName"] ?? null), "html", null, true);
            echo "</b> <br>
        ";
        }
        // line 78
        echo "        ";
        if ((isset($context["ticketsCount"]) || array_key_exists("ticketsCount", $context))) {
            // line 79
            echo "            ";
            echo twig_escape_filter($this->env, ($context["ticketsCount"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (((($context["ticketsCount"] ?? null) > 1)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tickets")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ticket"))), "html", null, true);
            echo "
        ";
        } else {
            // line 81
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "category", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
            echo "
        ";
        }
        // line 83
        echo "    </span>
    ";
        // line 84
        if (($context["displayedEventDate"] ?? null)) {
            // line 85
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "startdate", [], "any", false, false, false, 85)) {
                // line 86
                echo "            <div class=\"event-date text-center\">
                <div class=\"event-month bg-primary text-light\">";
                // line 87
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "startdate", [], "any", false, false, false, 87), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "locale", [], "any", false, false, false, 87), null, "MMM")), "html", null, true);
                echo "</div>
                <div class=\"event-day bg-white\">";
                // line 88
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["displayedEventDate"] ?? null), "startdate", [], "any", false, false, false, 88), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "locale", [], "any", false, false, false, 88), null, "d"), "html", null, true);
                echo "</div>
            </div>
        ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Global/event-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 92,  273 => 91,  267 => 88,  263 => 87,  260 => 86,  257 => 85,  255 => 84,  252 => 83,  246 => 81,  238 => 79,  235 => 78,  229 => 76,  227 => 75,  222 => 72,  212 => 69,  209 => 68,  206 => 67,  202 => 65,  199 => 64,  191 => 62,  188 => 61,  182 => 59,  180 => 58,  177 => 57,  175 => 56,  170 => 53,  167 => 52,  161 => 50,  158 => 49,  156 => 48,  151 => 45,  148 => 44,  142 => 42,  134 => 40,  131 => 39,  129 => 38,  120 => 34,  116 => 32,  112 => 30,  104 => 28,  101 => 27,  93 => 25,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  75 => 19,  68 => 15,  64 => 14,  60 => 12,  56 => 10,  52 => 8,  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/event-card.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/event-card.html.twig");
    }
}
