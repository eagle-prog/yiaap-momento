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

/* Front/Event/events.html.twig */
class __TwigTemplate_23b4e623042f2d4d0a8313ce5dc6360173f7038dcc22b13dcbc4df62c43f4803 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        if ((($context["category"] ?? null) != "all")) {
            // line 4
            $context["pagetitle"] = twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 4);
        } else {
            // line 6
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Event/events.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("events");
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
        // line 17
        if ((($context["category"] ?? null) != "all")) {
            // line 18
            echo "        ";
            $context["navigation"] = [0 => ["events" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "current" => ($context["pagetitle"] ?? null)]];
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("Global/navigation.html.twig", "Front/Event/events.html.twig", 23)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 24
        echo "
    <section class=\"section-content bg-white padding-y\">
        <div class=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 26), "html", null, true);
        echo "\">

            ";
        // line 28
        $context["eventsoncalendar"] = [];
        // line 29
        echo "            ";
        $context["eventsonmap"] = [];
        // line 30
        echo "
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 32
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "eventdates", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["eventdate"]) {
                // line 33
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["eventdate"], "isOnSale", [], "any", false, false, false, 33)) {
                    // line 34
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 34) && (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_map_button"], "method", false, false, false, 34) == "yes"))) {
                        // line 35
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 35), "lat", [], "any", false, false, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 35), "lng", [], "any", false, false, false, 35))) {
                            // line 36
                            echo "                                ";
                            if ((twig_length_filter($this->env, ($context["eventsonmap"] ?? null)) == 0)) {
                                // line 37
                                echo "                                    ";
                                $context["eventsonmap"] = twig_array_merge(($context["eventsonmap"] ?? null), [0 => ["name" => twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 37), "image" => ((twig_get_attribute($this->env, $this->source, $context["event"], "imageName", [], "any", false, false, false, 37)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "getImagePath", [], "any", false, false, false, 37))) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImagePlaceholder", [], "any", false, false, false, 37))), "address" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 37), "stringifyAddress", [], "any", false, false, false, 37)), "date" => twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventdate"], "startdate", [], "any", false, false, false, 37), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "locale", [], "any", false, false, false, 37), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "price" => ((twig_get_attribute($this->env, $this->source, $context["eventdate"], "isFree", [], "any", false, false, false, 37)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "getCheapestTicket", [], "any", false, false, false, 37), "getSalePrice", [], "any", false, false, false, 37))), "lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 37), "lat", [], "any", false, false, false, 37), "lng" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 37), "lng", [], "any", false, false, false, 37), "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 37)])]]);
                                // line 38
                                echo "                                ";
                            } else {
                                // line 39
                                echo "                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["eventsonmap"] ?? null));
                                foreach ($context['_seq'] as $context["_key"] => $context["eventonmap"]) {
                                    // line 40
                                    echo "                                        ";
                                    if (((twig_get_attribute($this->env, $this->source, $context["eventonmap"], "lat", [], "any", false, false, false, 40) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 40), "lat", [], "any", false, false, false, 40)) && (twig_get_attribute($this->env, $this->source, $context["eventonmap"], "lng", [], "any", false, false, false, 40) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 40), "lng", [], "any", false, false, false, 40)))) {
                                        // line 41
                                        echo "                                            ";
                                        $context["eventsonmap"] = twig_array_merge(($context["eventsonmap"] ?? null), [0 => ["name" => twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 41), "image" => ((twig_get_attribute($this->env, $this->source, $context["event"], "imageName", [], "any", false, false, false, 41)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "getImagePath", [], "any", false, false, false, 41))) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImagePlaceholder", [], "any", false, false, false, 41))), "address" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 41), "stringifyAddress", [], "any", false, false, false, 41)), "date" => twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventdate"], "startdate", [], "any", false, false, false, 41), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "locale", [], "any", false, false, false, 41), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "price" => ((twig_get_attribute($this->env, $this->source, $context["eventdate"], "isFree", [], "any", false, false, false, 41)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "getCheapestTicket", [], "any", false, false, false, 41), "getSalePrice", [], "any", false, false, false, 41))), "lat" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 41), "lat", [], "any", false, false, false, 41), "lng" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventdate"], "venue", [], "any", false, false, false, 41), "lng", [], "any", false, false, false, 41), "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 41)])]]);
                                        // line 42
                                        echo "                                        ";
                                    }
                                    // line 43
                                    echo "                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventonmap'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 44
                                echo "                                ";
                            }
                            // line 45
                            echo "                            ";
                        }
                        // line 46
                        echo "                        ";
                    }
                    // line 47
                    echo "

                        ";
                    // line 49
                    if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_calendar_button"], "method", false, false, false, 49) == "yes")) {
                        // line 50
                        echo "                            ";
                        $context["eventsoncalendar"] = twig_array_merge(($context["eventsoncalendar"] ?? null), [0 => ["title" => twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 50), "start" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventdate"], "startdate", [], "any", false, false, false, 50), "Y-m-d H:i"), "end" => ((twig_get_attribute($this->env, $this->source, $context["eventdate"], "enddate", [], "any", false, false, false, 50)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventdate"], "enddate", [], "any", false, false, false, 50), "Y-m-d H:i")) : ("")), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 50)])]]);
                        // line 51
                        echo "                        ";
                    }
                    // line 52
                    echo "                    ";
                }
                // line 53
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventdate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            ";
        // line 56
        if ((((twig_length_filter($this->env, ($context["eventsonmap"] ?? null)) > 0) && (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_map_button"], "method", false, false, false, 56) == "yes")) && (($context["google_maps_api_key"] ?? null) != ""))) {
            // line 57
            echo "                <div id=\"events-map\" data-pin-path=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/pin.png"), "html", null, true);
            echo "\" data-events=\"";
            echo twig_escape_filter($this->env, json_encode(($context["eventsonmap"] ?? null)), "html", null, true);
            echo "\" class=\"mb-4 collapse vh-90\"></div>
            ";
        }
        // line 59
        echo "            ";
        if (((twig_length_filter($this->env, ($context["eventsoncalendar"] ?? null)) > 0) && (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_calendar_button"], "method", false, false, false, 59) == "yes"))) {
            // line 60
            echo "                <div id=\"events-calendar\" data-default-date=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
            echo "\" data-events=\"";
            echo twig_escape_filter($this->env, json_encode(($context["eventsoncalendar"] ?? null)), "html", null, true);
            echo "\" class=\"mb-4 collapse\"></div>
            ";
        }
        // line 62
        echo "
            <div class=\"box shadow-none bg-gray mb-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-lg-6 text-center text-lg-left mb-3 mb-lg-0\">
                        <span class=\"center-lg-y text-muted\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% event(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "getTotalItemCount", [], "any", false, false, false, 66)]), "html", null, true);
        echo "</span>
                    </div>
                    ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "getTotalItemCount", [], "any", false, false, false, 68) > 0)) {
            // line 69
            echo "                        <div class=\"col-sm-12 col-lg-6 text-center text-lg-right\">
                            ";
            // line 70
            if ((((twig_length_filter($this->env, ($context["eventsonmap"] ?? null)) > 0) && (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_map_button"], "method", false, false, false, 70) == "yes")) && (($context["google_maps_api_key"] ?? null) != ""))) {
                // line 71
                echo "                                <a href=\"#events-map\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show events on map"), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"events-map\"><i class=\"fas fa-map-marked-alt fa-fw\"></i></a>
                                ";
            }
            // line 73
            echo "                                ";
            if (((twig_length_filter($this->env, ($context["eventsoncalendar"] ?? null)) > 0) && (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_calendar_button"], "method", false, false, false, 73) == "yes"))) {
                // line 74
                echo "                                <a href=\"#events-calendar\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show events calendar"), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"events-calendar\"><i class=\"far fa-calendar fa-fw\"></i></a>
                                ";
            }
            // line 76
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_rss_feed_button"], "method", false, false, false, 76) == "yes")) {
                // line 77
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_url"], "method", false, false, false, 77) . "/rss"), "html", null, true);
                echo "\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events RSS feed"), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fas fa-rss fa-fw\"></i></a>
                                ";
            }
            // line 79
            echo "                        </div>
                    ";
        }
        // line 81
        echo "                </div>
            </div>

            <div class=\"row\">
                <aside class=\"col-lg-3 order-2 order-lg-1\">
                    <div class=\"card card-filter\">
                        <form method=\"get\">
                            <article class=\"card-group-item\">
                                <header class=\"card-header\">
                                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-keyword\">
                                        <i class=\"icon-action fa fa-chevron-down\"></i>
                                        <h6 class=\"title\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keyword"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-keyword\">
                                    <div class=\"card-body\">
                                        <input id=\"keyword\" name=\"keyword\" type=\"text\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 97), "get", [0 => "keyword"], "method", false, false, false, 97), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </article>
                            ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_category_filter"], "method", false, false, false, 101) == "yes")) {
            // line 102
            echo "                                <article class=\"card-group-item\">
                                    <header class=\"card-header\">
                                        <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-category\">
                                            <i class=\"icon-action fa fa-chevron-down\"></i>
                                            <h6 class=\"title\">";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
            echo "</h6>
                                        </a>
                                    </header>
                                    <div class=\"filter-content collapse show\" id=\"filter-category\">
                                        <div class=\"card-body\">
                                            <select id=\"category\" name=\"category\" class=\"select2\" data-sort-options=\"1\">
                                                <option value=\"\">&nbsp;</option>
                                                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => []], "method", false, false, false, 113), "getQuery", [], "method", false, false, false, 113), "getResult", [], "method", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 114
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 114), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 114), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "                                            </select>
                                        </div>
                                    </div>
                                </article>
                            ";
        }
        // line 121
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_location_filter"], "method", false, false, false, 121) == "yes")) {
            // line 122
            echo "                                <article class=\"card-group-item\">
                                    <header class=\"card-header\">
                                        <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-location\">
                                            <i class=\"icon-action fa fa-chevron-down\"></i>
                                            <h6 class=\"title\">";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Location"), "html", null, true);
            echo "</h6>
                                        </a>
                                    </header>
                                    <div class=\"filter-content collapse show\" id=\"filter-location\">
                                        <div class=\"card-body\">
                                            <div class=\"custom-control custom-checkbox form-check-input\">
                                                <div class=\"form-check mb-4 filter-online-container\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"filter-online-only\" name=\"onlineonly\" value=\"1\">
                                                    <label class=\"custom-control-label\" for=\"filter-online-only\">";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online events only"), "html", null, true);
            echo "</label>
                                                </div>
                                            </div>

                                            <div class=\"location-based-filters\">
                                                ";
            // line 139
            $context["userLocation"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "locateUser", [], "method", false, false, false, 139);
            // line 140
            echo "                                                ";
            if (($context["userLocation"] ?? null)) {
                // line 141
                echo "                                                    <div class=\"custom-control custom-checkbox form-check-input\">
                                                        <div class=\"form-check mb-4\">
                                                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"filter-local-only\" name=\"localonly\" value=\"1\">
                                                            <label class=\"custom-control-label\" for=\"filter-local-only\">";
                // line 144
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Local events only"), "html", null, true);
                echo "</label>
                                                        </div>
                                                    </div>
                                                    <p id=\"user-country\" class=\"text-muted\">";
                // line 147
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events in %countryname%", ["%countryname%" => twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["userLocation"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["country"] ?? null) : null), "name", [], "any", false, false, false, 147)]), "html", null, true);
                echo " <span class=\"flag flag-";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["userLocation"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["country"] ?? null) : null), "code", [], "any", false, false, false, 147)), "html", null, true);
                echo " ml-2\"></span></p>
                                                    ";
            }
            // line 149
            echo "                                                <div id=\"filter-country-container\" class=\"mt-4\">
                                                    <label for=\"country\">";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
            echo "</label>
                                                    <select id=\"country\" class=\"select2\" name=\"country\" data-sort-options=\"1\">
                                                        <option value=\"\">&nbsp;</option>
                                                        ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCountries", [0 => []], "method", false, false, false, 153), "getQuery", [], "method", false, false, false, 153), "getResult", [], "method", false, false, false, 153));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 154
                echo "                                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 154), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 154), "html", null, true);
                echo "</option>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                                                    </select>
                                                </div>
                                                <div id=\"filter-location-container\" class=\"mt-4\">
                                                    <label for=\"location\">";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("State / City"), "html", null, true);
            echo "</label>
                                                    <input id=\"location\" name=\"location\" type=\"text\" class=\"form-control\" value=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 160), "get", [0 => "location"], "method", false, false, false, 160), "html", null, true);
            echo "\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            ";
        }
        // line 167
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_date_filter"], "method", false, false, false, 167) == "yes")) {
            // line 168
            echo "                                <article class=\"card-group-item\">
                                    <header class=\"card-header\">
                                        <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-date\">
                                            <i class=\"icon-action fa fa-chevron-down\"></i>
                                            <h6 class=\"title\">";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
            echo "</h6>
                                        </a>
                                    </header>
                                    <div class=\"filter-content collapse show\" id=\"filter-date\">
                                        <div class=\"card-body\">
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-today\" name=\"startdate\" value=\"today\">
                                                    <label class=\"custom-control-label\" for=\"date-today\">";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Today"), "html", null, true);
            echo "</label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdate" => twig_date_format_filter($this->env, "now", "Y-m-d")]], "method", false, false, false, 183), "getQuery", [], "method", false, false, false, 183), "getSingleScalarResult", [], "method", false, false, false, 183), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-tomorrow\" name=\"startdate\" value=\"tomorrow\">
                                                    <label class=\"custom-control-label\" for=\"date-tomorrow\">";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tomorrow"), "html", null, true);
            echo "</label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdate" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 day"), "Y-m-d")]], "method", false, false, false, 193), "getQuery", [], "method", false, false, false, 193), "getSingleScalarResult", [], "method", false, false, false, 193), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-thisweekend\" name=\"startdate\" value=\"thisweekend\">
                                                    <label class=\"custom-control-label\" for=\"date-thisweekend\">
                                                        ";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This weekend"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdatemin" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "saturday this week"), "Y-m-d"), "startdatemax" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "sunday this week"), "Y-m-d")]], "method", false, false, false, 205), "getQuery", [], "method", false, false, false, 205), "getSingleScalarResult", [], "method", false, false, false, 205), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-thisweek\" name=\"startdate\" value=\"thisweek\">
                                                    <label class=\"custom-control-label\" for=\"date-thisweek\">
                                                        ";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This week"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdatemin" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "monday this week"), "Y-m-d"), "startdatemax" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "sunday this week"), "Y-m-d")]], "method", false, false, false, 217), "getQuery", [], "method", false, false, false, 217), "getSingleScalarResult", [], "method", false, false, false, 217), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-nextweek\" name=\"startdate\" value=\"nextweek\">
                                                    <label class=\"custom-control-label\" for=\"date-nextweek\">
                                                        ";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next week"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 229
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdatemin" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "monday next week"), "Y-m-d"), "startdatemax" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "sunday next week"), "Y-m-d")]], "method", false, false, false, 229), "getQuery", [], "method", false, false, false, 229), "getSingleScalarResult", [], "method", false, false, false, 229), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-thismonth\" name=\"startdate\" value=\"thismonth\">
                                                    <label class=\"custom-control-label\" for=\"date-thismonth\">
                                                        ";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This month"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 241
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdatemin" => twig_date_format_filter($this->env, "now", "Y-m-01"), "startdatemax" => twig_date_format_filter($this->env, "now", "Y-m-t")]], "method", false, false, false, 241), "getQuery", [], "method", false, false, false, 241), "getSingleScalarResult", [], "method", false, false, false, 241), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"date-nextmonth\" name=\"startdate\" value=\"nextmonth\">
                                                    <label class=\"custom-control-label\" for=\"date-nextmonth\">
                                                        ";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next month"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "startdatemin" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 month"), "Y-m-01"), "startdatemax" => twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 month"), "Y-m-t")]], "method", false, false, false, 253), "getQuery", [], "method", false, false, false, 253), "getSingleScalarResult", [], "method", false, false, false, 253), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-radio form-check-input\">
                                                    <input type=\"radio\" class=\"custom-control-input datepicker\" id=\"date-pickadate\" name=\"startdate\" value=\"all\">
                                                    <label class=\"custom-control-label\" for=\"date-pickadate\">
                                                        ";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pick a date"), "html", null, true);
            echo "
                                                    </label>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            ";
        }
        // line 270
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_ticket_price_filter"], "method", false, false, false, 270) == "yes")) {
            // line 271
            echo "                                <article class=\"card-group-item\">
                                    <header class=\"card-header\">
                                        <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-price\">
                                            <i class=\"icon-action fa fa-chevron-down\"></i>
                                            <h6 class=\"title\">";
            // line 275
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket price"), "html", null, true);
            echo "</h6>
                                        </a>
                                    </header>
                                    <div class=\"filter-content collapse show\" id=\"filter-seated-guests\">
                                        <div class=\"card-body\">

                                            <div class=\"custom-control custom-checkbox form-check-input ml-0 mb-4\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"free-events-only\" name=\"freeonly\" value=\"1\">
                                                <label class=\"custom-control-label\" for=\"free-events-only\">
                                                    ";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free events only"), "html", null, true);
            echo "
                                                </label>
                                            </div>

                                            <div class=\"events-price-range-slider-wrapper\">
                                                <div class=\"range-slider mb-3\" data-min=\"0\" data-max=\"10000\" data-start-left=\"";
            // line 289
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemin"], "method", true, true, false, 289) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemin"], "method", false, false, false, 289)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemin"], "method", false, false, false, 289), "html", null, true))) : (print ("0")));
            echo "\" data-start-right=\"";
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemax"], "method", true, true, false, 289) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemax"], "method", false, false, false, 289)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 289), "get", [0 => "pricemax"], "method", false, false, false, 289), "html", null, true))) : (print ("10000")));
            echo "\"></div>
                                                <div class=\"row ranger-slider-inputs\">
                                                    <div class=\"col-12 col-sm-6\">
                                                        <label for=\"pricemin\">";
            // line 292
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
            echo "</label>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 295), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <input id=\"pricemin\" name=\"pricemin\" type=\"text\" class=\"form-control range-slider-min-input\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 297), "get", [0 => "pricemin"], "method", false, false, false, 297), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
            echo "\">
                                                        </div>
                                                    </div>
                                                    <div class=\"col-12 col-sm-6\">
                                                        <label for=\"pricemax\">";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
            echo "</label>
                                                        <div class=\"input-group\">
                                                            <div class=\"input-group-prepend\">
                                                                <span class=\"input-group-text\">";
            // line 304
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 304), "html", null, true);
            echo "</span>
                                                            </div>
                                                            <input id=\"pricemax\" name=\"pricemax\" type=\"text\" class=\"form-control range-slider-max-input\" value=\"";
            // line 306
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 306), "get", [0 => "pricemax"], "method", false, false, false, 306), "html", null, true);
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
            echo "\">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            ";
        }
        // line 315
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_audience_filter"], "method", false, false, false, 315) == "yes")) {
            // line 316
            echo "                                <article class=\"card-group-item\">
                                    <header class=\"card-header\">
                                        <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-audience\">
                                            <i class=\"icon-action fa fa-chevron-down\"></i>
                                            <h6 class=\"title\">";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Audience"), "html", null, true);
            echo "</h6>
                                        </a>
                                    </header>
                                    <div class=\"filter-content collapse show\" id=\"filter-audience\">
                                        <div class=\"card-body\">
                                            <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">
                                                ";
            // line 326
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAudiences", [0 => []], "method", false, false, false, 326), "getQuery", [], "method", false, false, false, 326), "getResult", [], "method", false, false, false, 326));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 327
                echo "                                                    <label class=\"btn btn-light btn-sm py-2 px-3\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "name", [], "any", false, false, false, 327), "html", null, true);
                echo "\">
                                                        <input type=\"radio\" name=\"audience\" id=\"";
                // line 328
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "slug", [], "any", false, false, false, 328), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "slug", [], "any", false, false, false, 328), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["audience"], "getImagePath", [], "any", false, false, false, 329)), "html", null, true);
                echo "\" class=\"img-15-15\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "name", [], "any", false, false, false, 329), "html", null, true);
                echo "\">
                                                    </label>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "                                            </div>
                                        </div>
                                    </div>
                                </article>
                            ";
        }
        // line 337
        echo "                            <article class=\"card-group-item\">
                                <div class=\"card-body\">
                                    <button class=\"btn btn-block btn-outline-primary\"><i class=\"fas fa-search\"></i> ";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</button>
                                </div>
                            </article>
                        </form>
                    </div>
                    ";
        // line 344
        if ((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "newsletter_enabled"], "method", false, false, false, 344) == "yes") && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_api_key"], "method", false, false, false, 344)) && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_list_id"], "method", false, false, false, 344))) {
            // line 345
            echo "                        ";
            $this->loadTemplate("Global/newsletter-box.html.twig", "Front/Event/events.html.twig", 345)->display($context);
            // line 346
            echo "                    ";
        }
        // line 347
        echo "                </aside>
                <div class=\"col-lg-9 order-1 order-lg-2\">
                    ";
        // line 349
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "getTotalItemCount", [], "any", false, false, false, 349) > 0)) {
            // line 350
            echo "                        <div class=\"row\">
                            ";
            // line 351
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
                // line 352
                echo "                                <div class=\"col-12 col-sm-6 col-lg-6 mb-3\">
                                    ";
                // line 353
                $this->loadTemplate("Global/event-card.html.twig", "Front/Event/events.html.twig", 353)->display(twig_array_merge($context, ["event" => $context["event"]]));
                // line 354
                echo "                                </div>
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
            // line 356
            echo "                        </div>
                    ";
        } else {
            // line 358
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "Front/Event/events.html.twig", 358)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No events found"), "icon" => "fas fa-exclamation-circle"]));
            // line 359
            echo "                    ";
        }
        // line 360
        echo "                    ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["events"] ?? null), null, [], ["align" => "center"]);
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 367
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 368
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("events");
        echo "
    ";
        // line 369
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_map_button"], "method", false, false, false, 369) == "yes") && (($context["google_maps_api_key"] ?? null) != ""))) {
            // line 370
            echo "        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=";
            echo twig_escape_filter($this->env, ($context["google_maps_api_key"] ?? null), "html", null, true);
            echo "&callback=initMap\">
        </script>
        ";
            // line 372
            $this->loadTemplate("Global/event-info-box.html.twig", "Front/Event/events.html.twig", 372)->display($context);
            // line 373
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "Front/Event/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 373,  828 => 372,  822 => 370,  820 => 369,  815 => 368,  811 => 367,  800 => 360,  797 => 359,  794 => 358,  790 => 356,  775 => 354,  773 => 353,  770 => 352,  753 => 351,  750 => 350,  748 => 349,  744 => 347,  741 => 346,  738 => 345,  736 => 344,  728 => 339,  724 => 337,  717 => 332,  706 => 329,  700 => 328,  695 => 327,  691 => 326,  682 => 320,  676 => 316,  673 => 315,  659 => 306,  654 => 304,  648 => 301,  639 => 297,  634 => 295,  628 => 292,  620 => 289,  612 => 284,  600 => 275,  594 => 271,  591 => 270,  579 => 261,  568 => 253,  561 => 249,  550 => 241,  543 => 237,  532 => 229,  525 => 225,  514 => 217,  507 => 213,  496 => 205,  489 => 201,  478 => 193,  472 => 190,  462 => 183,  456 => 180,  445 => 172,  439 => 168,  436 => 167,  426 => 160,  422 => 159,  417 => 156,  406 => 154,  402 => 153,  396 => 150,  393 => 149,  386 => 147,  380 => 144,  375 => 141,  372 => 140,  370 => 139,  362 => 134,  351 => 126,  345 => 122,  342 => 121,  335 => 116,  324 => 114,  320 => 113,  310 => 106,  304 => 102,  302 => 101,  295 => 97,  287 => 92,  274 => 81,  270 => 79,  262 => 77,  259 => 76,  253 => 74,  250 => 73,  244 => 71,  242 => 70,  239 => 69,  237 => 68,  232 => 66,  226 => 62,  218 => 60,  215 => 59,  207 => 57,  205 => 56,  202 => 55,  196 => 54,  190 => 53,  187 => 52,  184 => 51,  181 => 50,  179 => 49,  175 => 47,  172 => 46,  169 => 45,  166 => 44,  160 => 43,  157 => 42,  154 => 41,  151 => 40,  146 => 39,  143 => 38,  140 => 37,  137 => 36,  134 => 35,  131 => 34,  128 => 33,  123 => 32,  119 => 31,  116 => 30,  113 => 29,  111 => 28,  106 => 26,  102 => 24,  100 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  83 => 17,  80 => 16,  76 => 15,  69 => 12,  65 => 11,  58 => 9,  53 => 1,  50 => 6,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Event/events.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Event/events.html.twig");
    }
}
