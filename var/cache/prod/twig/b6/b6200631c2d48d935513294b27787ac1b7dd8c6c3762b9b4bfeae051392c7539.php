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

/* Global/header.html.twig */
class __TwigTemplate_5630298a008fb7e70411ab040af4e5970348344d6e03f5c4e2317766952c2ae4 extends \Twig\Template
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
        echo "<section class=\"header-main sticky-top\">
    <div class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 2), "html", null, true);
        echo "\">
        <div class=\"row align-items-center\">
            <div class=\"col-6 col-lg-3 order-0 order-lg-0 header-logo-wrapper\">
                <div class=\"brand-wrap\">
                    <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
                        <img class=\"logo img-fluid\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 7), "getLogoPath", [], "any", false, false, false, 7)), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 7), "html", null, true);
        echo "\">
                    </a>
                </div>
            </div>
            <div class=\"col-12 col-lg-5 order-2 order-lg-1 mt-3 mb-3 mt-lg-0 mb-lg-0 header-search-wrapper\">
                <form action=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
        echo "\" class=\"search-wrap\">
                    <div class=\"input-icon\">
                        <i class=\"fa fa-search\"></i>
                        <input name=\"keyword\" class=\"form-control top-search\" placeholder=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for events"), "html", null, true);
        echo "\" type=\"text\">
                    </div>
                </form>
            </div>
            <div class=\"col-6 col-lg-4 text-right order-1 order-lg-2 header-actions-wrapper\">
                <div class=\"widgets-wrap d-flex justify-content-end\">

                    ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "
                        ";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                // line 25
                echo "
                            <div class=\"widget-header dropdown\">
                                <a href=\"#\" class=\"icontext badge-notification badge-notification-left\" data-toggle=\"dropdown\" ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "ar")) {
                    echo "data-offset=\"150,10\"";
                } else {
                    echo "data-offset=\"20,10\"";
                }
                echo " data-badge=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "getTicketsInCartQuantitySum", [], "any", false, false, false, 27), "html", null, true);
                echo "\">
                                    <div class=\"icon-wrap icon-xs bg-primary round text-white\"><i class=\"fas fa-shopping-cart\"></i></div>
                                    <div class=\"text-wrap ";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29) == "ar")) {
                    echo "ml-1";
                }
                echo "\">
                                        <span>";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart"), "html", null, true);
                echo " <i class=\"fas fa-caret-down\"></i></span>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right p-3\" style=\"width: 280px;\">
                                    ";
                // line 34
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "cartelements", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "
                                        ";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36), "cartelements", [], "any", false, false, false, 36));
                    foreach ($context['_seq'] as $context["_key"] => $context["cartelement"]) {
                        // line 37
                        echo "
                                            <figure class=\"itemside badge-notification badge-notification-right\" data-badge=\"";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartelement"], "quantity", [], "any", false, false, false, 38), "html", null, true);
                        echo "\">
                                                <div class=\"aside\">
                                                    <div class=\"img-wrap img-sm\"><img src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 40), "eventdate", [], "any", false, false, false, 40), "event", [], "any", false, false, false, 40), "getImagePath", [], "any", false, false, false, 40)), "html", null, true);
                        echo "\"></div>
                                                </div>
                                                <figcaption class=\"text-wrap\">
                                                    <h6 class=\"title mb-2\"><a href=\"";
                        // line 43
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 43), "eventdate", [], "any", false, false, false, 43), "event", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43)]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 43), "eventdate", [], "any", false, false, false, 43), "event", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                        echo "</a></h6>
                                                        ";
                        // line 44
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 44), "eventdate", [], "any", false, false, false, 44), "startdate", [], "any", false, false, false, 44)) {
                            // line 45
                            echo "                                                        <div class=\"text-black-50 small mb-1\">
                                                            ";
                            // line 46
                            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 46), "eventdate", [], "any", false, false, false, 46), "startdate", [], "any", false, false, false, 46), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "locale", [], "any", false, false, false, 46), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                            echo "
                                                        </div>
                                                    ";
                        }
                        // line 49
                        echo "                                                    ";
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 49), "eventdate", [], "any", false, false, false, 49), "venue", [], "any", false, false, false, 49)) {
                            // line 50
                            echo "                                                        <div class=\"text-black-50 small\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 50), "eventdate", [], "any", false, false, false, 50), "venue", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 50), "eventdate", [], "any", false, false, false, 50), "venue", [], "any", false, false, false, 50), "stringifyAddress", [], "any", false, false, false, 50), "html", null, true);
                            echo "</div>
                                                    ";
                        }
                        // line 52
                        echo "                                                </figcaption>
                                            </figure>

                                            <div class=\"dropdown-divider mt-4 mb-4\"></div>

                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartelement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "
                                        <a href=\"";
                    // line 59
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_cart");
                    echo "\" class=\"btn btn-outline-dark btn-block\"><i class=\"fas fa-cart-arrow-down\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View cart"), "html", null, true);
                    echo "</a>

                                    ";
                } else {
                    // line 62
                    echo "                                        ";
                    $this->loadTemplate("Global/message.html.twig", "Global/header.html.twig", 62)->display(twig_array_merge($context, ["icon" => "fas fa-shopping-cart", "type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your cart is empty")]));
                    // line 63
                    echo "                                    ";
                }
                // line 64
                echo "                                </div>
                            </div>

                        ";
            }
            // line 68
            echo "
                        <div class=\"widget-header dropdown\">
                            <a href=\"#\" class=\"ml-3 icontext\" data-toggle=\"dropdown\" onclick=\"openDashboardSideNav()\">
                                ";
            // line 71
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 72
                echo "                                    <span class=\"avatar\">
                                        <i class=\"far fa-user\"></i>
                                    </span>
                                ";
            } else {
                // line 76
                echo "                                    ";
                $this->loadTemplate("Global/user-avatar.html.twig", "Global/header.html.twig", 76)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76)]));
                // line 77
                echo "                                ";
            }
            // line 78
            echo "                                <div class=\"text-wrap ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 78), "locale", [], "any", false, false, false, 78) == "ar")) {
                echo "ml-1";
            }
            echo "\">
                                    <span>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true);
            echo " <i class=\"fas fa-caret-down\"></i></span>
                                </div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-left dropdown-menu-arrow header-user-dropdown-menu\">
                                <a class=\"dropdown-item\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index");
            echo "\">
                                    ";
            // line 84
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
                // line 85
                echo "                                        <i class=\"fas fa-ticket-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events on sale"), "html", null, true);
                echo "
                                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SCANNER")) {
                // line 87
                echo "                                        <i class=\"fas fa-calendar-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events list"), "html", null, true);
                echo "
                                    ";
            } else {
                // line 89
                echo "                                        <i class=\"fas fa-tachometer-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "html", null, true);
                echo "
                                    ";
            }
            // line 91
            echo "                                </a>
                                <hr class=\"dropdown-divider\">
                                <a class=\"dropdown-item\" href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\"><i class=\"fas fa-sign-out-alt fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                    ";
        } else {
            // line 98
            echo "
                        <div class=\"widget-header\">
                            <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">
                                <div class=\"icon-wrap icon-xs bg-primary round text-secondary d-lg-none d-xl-none\">
                                    <i class=\"fas fa-sign-in-alt text-light fa-sm fa-fw\"></i>
                                </div>
                                <span class=\"d-none d-lg-block\">";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in"), "html", null, true);
            echo "</span>
                            </a>
                        </div>

                        <div class=\"widget-header\">
                            <a href=\"javascript:void(0)\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <div class=\"icon-wrap icon-xs bg-primary round text-secondary d-lg-none d-xl-none\">
                                    <i class=\"fas fa-user-plus text-light fa-sm fa-fw\"></i>
                                </div>
                                <span class=\"d-none d-lg-inline\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up"), "html", null, true);
            echo "</span>
                            </a>
                            <div class=\"dropdown-menu ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 115), "locale", [], "any", false, false, false, 115) == "ar")) {
                echo "registration-dropdown dropdown-menu-left";
            } else {
                echo "dropdown-menu-right";
            }
            echo " dropdown-menu-arrow\">
                                <a href=\"";
            // line 116
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register_attendee");
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-user fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendee"), "html", null, true);
            echo "</a>
                                <a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register_organizer");
            echo "\" class=\"dropdown-item\"><i class=\"fas fa-calendar-plus fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                    ";
        }
        // line 122
        echo "
                    <div class=\"widget-header d-lg-none\">
                        <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"icon-bar top-bar\"></span>
                            <span class=\"icon-bar middle-bar\"></span>
                            <span class=\"icon-bar bottom-bar\"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<header class=\"section-header\">
    <nav class=\"navbar navbar-expand-lg navbar-light bg-white ";
        // line 137
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 137), "get", [0 => "_route"], "method", false, false, false, 137) == "homepage") && (isset($context["herosettings"]) || array_key_exists("herosettings", $context))) && (twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "content", [], "any", false, false, false, 137) != "none"))) {
            echo "border-0";
        }
        echo "\">
        <div class=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 138), "html", null, true);
        echo "\">
            <div class=\"collapse navbar-collapse\" id=\"main_nav\">
                <ul class=\"navbar-nav nav-fill w-100\">

                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "header-menu"]], "method", false, false, false, 142), "getQuery", [], "method", false, false, false, 142), "getOneOrNullResult", [], "method", false, false, false, 142), "getMenuElements", [], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["menuElement"]) {
            // line 143
            echo "                        ";
            $context["link"] = "#0";
            // line 144
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 144)) {
                // line 145
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 145);
                // line 146
                echo "                        ";
            }
            // line 147
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 147)) {
                // line 148
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "changeLinkLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 148), "locale", [], "any", false, false, false, 148), 1 => twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 148)], "method", false, false, false, 148);
                // line 149
                echo "                        ";
            }
            // line 150
            echo "                        ";
            if ((($context["link"] ?? null) == "categories_dropdown")) {
                // line 151
                echo "                            <li class=\"nav-item dropdown dropdown-hover  ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "get", [0 => "_route"], "method", false, false, false, 151) == "categories")) {
                    echo "active";
                }
                echo "\">
                                <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 152), "html", null, true);
                echo " fa-fw\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 152), "html", null, true);
                echo "</a>
                                <div class=\"dropdown-menu dropdown-menu-arrow\">
                                    ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => ["featured" => true, "limit" => 9]], "method", false, false, false, 154), "getQuery", [], "method", false, false, false, 154), "getResult", [], "method", false, false, false, 154));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 155
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 155)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 155), "html", null, true);
                    echo " fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 155), "html", null, true);
                    echo "</a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
                echo "\" class=\"dropdown-item\"><i class=\"fas fa-folder-open fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories"), "html", null, true);
                echo "</a>
                                </div>
                            </li>
                        ";
            } else {
                // line 161
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 162
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                                    ";
                // line 163
                if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 163)) {
                    // line 164
                    echo "                                        <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 164), "html", null, true);
                    echo " fa-fw\"></i>
                                    ";
                }
                // line 166
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 166)) {
                    // line 167
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 167), "html", null, true);
                    echo "
                                    ";
                }
                // line 169
                echo "                                </a>
                            </li>
                        ";
            }
            // line 172
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "
                </ul>
            </div>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "Global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 174,  448 => 172,  443 => 169,  437 => 167,  434 => 166,  428 => 164,  426 => 163,  422 => 162,  419 => 161,  409 => 157,  396 => 155,  392 => 154,  385 => 152,  378 => 151,  375 => 150,  372 => 149,  369 => 148,  366 => 147,  363 => 146,  360 => 145,  357 => 144,  354 => 143,  350 => 142,  343 => 138,  337 => 137,  320 => 122,  310 => 117,  304 => 116,  296 => 115,  291 => 113,  279 => 104,  272 => 100,  268 => 98,  258 => 93,  254 => 91,  248 => 89,  242 => 87,  236 => 85,  234 => 84,  230 => 83,  223 => 79,  216 => 78,  213 => 77,  210 => 76,  204 => 72,  202 => 71,  197 => 68,  191 => 64,  188 => 63,  185 => 62,  177 => 59,  174 => 58,  163 => 52,  155 => 50,  152 => 49,  146 => 46,  143 => 45,  141 => 44,  135 => 43,  129 => 40,  124 => 38,  121 => 37,  117 => 36,  114 => 35,  112 => 34,  105 => 30,  99 => 29,  88 => 27,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  67 => 15,  61 => 12,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/header.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/header.html.twig");
    }
}
