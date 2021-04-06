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

/* Front/Main/homepage.html.twig */
class __TwigTemplate_a42c791423fb91ba25709e54679ac70f82707cc84d49a6be279bfd523e6e7332 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Main/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "get", [0 => "_locale"], "method", false, false, false, 3)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "get", [0 => "_locale"], "method", false, false, false, 3)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "defaultLocale", [], "any", false, false, false, 3))))], "method", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        if (((twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "content", [], "any", false, false, false, 7) == "events") && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "events", [], "any", false, false, false, 7)))) {
            // line 8
            echo "    <section class=\"section-main\">
        <div class=\"owl-init slider-main homepage-slider owl-carousel\" data-items=\"1\" data-dots=\"true\" data-nav=\"true\" data-autoplay=\"true\" data-rtl=\"true\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "events", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 11
                echo "                <div class=\"item-slide img-lazy-load\" data-src=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["event"], "imageName", [], "any", false, false, false, 11)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "getImagePath", [], "any", false, false, false, 11))) : (twig_get_attribute($this->env, $this->source, $context["event"], "getImagePlaceholder", [], "any", false, false, false, 11))), "html", null, true);
                echo "\">
                    <div class=\"loader\"></div>
                    <div class=\"content-container\">
                        <div class=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 14), "html", null, true);
                echo "\">
                            <div class=\"row-sm\">
                                <div class=\"col-md-12\">

                                    <h2 class=\"text-light mb-4\">";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 18), "html", null, true);
                echo "</h2>

                                    ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                                        <h5 class=\"text-light mb-2\"><i class=\"fas fa-map-marker-alt fa-fw\"></i>
                                            ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 22), "venue", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 23), "venue", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                        echo ": ";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 23), "venue", [], "any", false, false, false, 23), "city", [], "any", false, false, false, 23) . ", ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 23), "venue", [], "any", false, false, false, 23), "country", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23)), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 25
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online"), "html", null, true);
                        echo "
                                            ";
                    }
                    // line 27
                    echo "                                        </h5>
                                        ";
                    // line 28
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 28), "startdate", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "                                            <h5 class=\"text-light mb-4\"><i class=\"fas fa-clock fa-fw\"></i> ";
                        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "getFirstOnSaleEventDate", [], "any", false, false, false, 29), "startdate", [], "any", false, false, false, 29), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                        echo "</h5>
                                        ";
                    }
                    // line 31
                    echo "                                    ";
                }
                // line 32
                echo "
                                    <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, $context["event"], "slug", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-light btn-lg\"><i class=\"fas fa-ticket-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Buy tickets"), "html", null, true);
                echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </div>
    </section>
    ";
        }
        // line 43
        echo "
        ";
        // line 44
        if (((twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "content", [], "any", false, false, false, 44) == "organizers") && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "organizers", [], "any", false, false, false, 44)))) {
            // line 45
            echo "        <section class=\"section-main\">
            <div class=\"owl-init slider-main homepage-slider owl-carousel\" data-items=\"1\" data-dots=\"true\" data-nav=\"true\" data-autoplay=\"true\">
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "organizers", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 48
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 48), "coverName", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                        <div class=\"item-slide img-lazy-load\" data-src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 49), "getCoverPath", [], "any", false, false, false, 49)), "html", null, true);
                    echo "\">
                            <div class=\"loader\"></div>
                            <div class=\"content-container\">
                                <div class=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 52), "html", null, true);
                    echo "\">
                                    <div class=\"row-sm\">
                                        <div class=\"col-md-12\">

                                            <h2 class=\"text-light mb-4\">";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
                    echo "</h2>
                                            ";
                    // line 57
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57)) {
                        // line 58
                        echo "                                                <p class=\"text-light mb-4\">";
                        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58)), "html", null, true);
                        echo "</p>
                                            ";
                    }
                    // line 60
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 60), "slug", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\" class=\"btn btn-light btn-lg\"><i class=\"fas fa-ticket-alt fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Buy tickets"), "html", null, true);
                    echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 67
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </div>
        </section>
        ";
        }
        // line 71
        echo "
            ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "content", [], "any", false, false, false, 72) == "custom")) {
            // line 73
            echo "            <section class=\"section-intro bg-dark text-white text-center\">
                <div class=\"homepage-custom-hero-background d-flex flex-column img-lazy-load\" ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "customBackgroundName", [], "any", false, false, false, 74)) {
                echo "data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "getCustomBackgroundPath", [], "any", false, false, false, 74), "html", null, true);
                echo "\"";
            }
            echo ">
                    <div class=\"";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 75), "html", null, true);
            echo " my-auto\">

                        <div class=\"row\">
                            <div class=\"col-lg-8 col-sm-12 text-center mx-auto\">
                                ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "title", [], "any", false, false, false, 79)) {
                // line 80
                echo "                                    <h2 class=\"display-4 mt-3 mb-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "title", [], "any", false, false, false, 80), "html", null, true);
                echo "</h2>
                                ";
            }
            // line 82
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "paragraph", [], "any", false, false, false, 82)) {
                // line 83
                echo "                                    <h3 class=\"mb-5 font-weight-lighter\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "paragraph", [], "any", false, false, false, 83), "html", null, true);
                echo "</h3>
                                ";
            }
            // line 85
            echo "                            </div>
                        </div>
                        ";
            // line 87
            if (twig_get_attribute($this->env, $this->source, ($context["herosettings"] ?? null), "showSearchBox", [], "any", false, false, false, 87)) {
                // line 88
                echo "                            <div class=\"row\">
                                <div class=\"col-lg-9 col-md-8 col-sm-12 mx-auto\">
                                    <div class=\"card\">
                                        <div class=\"card-body p30\">
                                            <form action=\"";
                // line 92
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
                echo "\">
                                                <div class=\"form-row text-left\">
                                                    <div class=\"col-lg-3 col-sm-12\">
                                                        <label for=\"hero-search-category\" class=\"form-label text-dark\">";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for"), "html", null, true);
                echo "</label>
                                                        <select id=\"hero-search-category\" class=\"select2\" name=\"category\" data-sort-options=\"1\">
                                                            <option value>";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anything"), "html", null, true);
                echo "</option>
                                                            ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => []], "method", false, false, false, 98), "getQuery", [], "method", false, false, false, 98), "getResult", [], "method", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 99
                    echo "                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 99), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 99), "html", null, true);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-3 col-sm-12\">
                                                        <label for=\"hero-search-country\" class=\"form-label text-dark\">";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In"), "html", null, true);
                echo "</label>
                                                        <select id=\"hero-search-country\" class=\"select2\" name=\"country\" data-sort-options=\"1\">
                                                            <option value>";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anywhere"), "html", null, true);
                echo "</option>
                                                            ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCountries", [0 => []], "method", false, false, false, 107), "getQuery", [], "method", false, false, false, 107), "getResult", [], "method", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                    // line 108
                    echo "                                                                <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 108), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 108), "html", null, true);
                    echo "</option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 110
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-3 col-sm-12\">
                                                        <label for=\"hero-search-stardate\" class=\"form-label text-dark\">";
                // line 113
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When"), "html", null, true);
                echo "</label>
                                                        <select id=\"hero-search-stardate\" class=\"select2\" name=\"startdate\">
                                                            <option value>";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anytime"), "html", null, true);
                echo "</option>
                                                            <option value=\"today\">";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Today"), "html", null, true);
                echo "</option>
                                                            <option value=\"tomorrow\">";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tomorrow"), "html", null, true);
                echo "</option>
                                                            <option value=\"thisweekend\">";
                // line 118
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This weekend"), "html", null, true);
                echo "</option>
                                                            <option value=\"thisweek\">";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This week"), "html", null, true);
                echo "</option>
                                                            <option value=\"nextweek\">";
                // line 120
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next week"), "html", null, true);
                echo "</option>
                                                            <option value=\"thismonth\">";
                // line 121
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This month"), "html", null, true);
                echo "</option>
                                                            <option value=\"nextmonth\">";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next month"), "html", null, true);
                echo "</option>
                                                        </select>
                                                    </div>

                                                    <div class=\"col-lg-3 col-sm-12 my-auto\">
                                                        <button class=\"btn btn-light btn-block\" type=\"submit\"><i class=\"fas fa-search\"></i> ";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
                echo "</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 136
            echo "                    </div>
                </div>
            </section>
            ";
        }
        // line 140
        echo "
                ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_show_search_box"], "method", false, false, false, 141) == "yes")) {
            // line 142
            echo "                    <section>
                        <form action=\"";
            // line 143
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
            echo "\">
                            <div class=\"row bg-gray m-0\">
                                <div class=\"col-md-4 p30 border-right-white\">
                                    <div class=\"form-group\">
                                        <label for=\"search-category\" class=\"form-label text-dark\">";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for"), "html", null, true);
            echo "</label>
                                        <select id=\"search-category\" class=\"select2 bg-white\" name=\"category\" data-sort-options=\"1\">
                                            <option value>";
            // line 149
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anything"), "html", null, true);
            echo "</option>
                                            ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => []], "method", false, false, false, 150), "getQuery", [], "method", false, false, false, 150), "getResult", [], "method", false, false, false, 150));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 151
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 151), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 151), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-4 p30 border-right-white\">
                                    <div class=\"form-group\">
                                        <label for=\"search-country\" class=\"form-label text-dark\">";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In"), "html", null, true);
            echo "</label>
                                        <select id=\"search-country\" class=\"select2 bg-white\" name=\"country\" data-sort-options=\"1\">
                                            <option value>";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anywhere"), "html", null, true);
            echo "</option>
                                            ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCountries", [0 => []], "method", false, false, false, 161), "getQuery", [], "method", false, false, false, 161), "getResult", [], "method", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 162
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 162), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 162), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-md-4 p30\">
                                    <div class=\"form-group\">
                                        <label for=\"search-startdate\" class=\"form-label text-dark\">";
            // line 169
            echo "When";
            echo "</label>
                                        <select id=\"search-startdate\" class=\"select2 bg-white\" name=\"startdate\">
                                            <option value>";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Anytime"), "html", null, true);
            echo "</option>
                                            <option value=\"today\">";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Today"), "html", null, true);
            echo "</option>
                                            <option value=\"tomorrow\">";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tomorrow"), "html", null, true);
            echo "</option>
                                            <option value=\"thisweekend\">";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This weekend"), "html", null, true);
            echo "</option>
                                            <option value=\"thisweek\">";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This week"), "html", null, true);
            echo "</option>
                                            <option value=\"nextweek\">";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next week"), "html", null, true);
            echo "</option>
                                            <option value=\"thismonth\">";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This month"), "html", null, true);
            echo "</option>
                                            <option value=\"nextmonth\">";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next month"), "html", null, true);
            echo "</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"col-12 text-center mb-5\">
                                    <button class=\"btn btn-light\" type=\"submit\"><i class=\"fas fa-search\"></i> ";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            echo "</button>
                                </div>
                            </div>
                        </form>
                    </section>
                ";
        }
        // line 189
        echo "
                ";
        // line 190
        if (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_events_number"], "method", false, false, false, 190)) {
            // line 191
            echo "                    ";
            $context["homepageEvents"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["limit" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_events_number"], "method", false, false, false, 191)]], "method", false, false, false, 191), "getQuery", [], "method", false, false, false, 191), "getResult", [], "method", false, false, false, 191);
            // line 192
            echo "                    ";
            if ((twig_length_filter($this->env, ($context["homepageEvents"] ?? null)) > 0)) {
                // line 193
                echo "
                        <section class=\"section-content padding-y-lg bg-white\">
                            <div class=\"";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 195), "html", null, true);
                echo "\">
                                <header class=\"section-headin mb-5\">
                                    <h4 class=\"title-section text-center text-muted text-uppercase\">";
                // line 197
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upcoming events"), "html", null, true);
                echo "</h4>
                                </header>
                                <div class=\"row-sm\">
                                    ";
                // line 200
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["homepageEvents"] ?? null));
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
                    // line 201
                    echo "                                        <div class=\"col-12 col-sm-6 col-lg-4\">
                                            ";
                    // line 202
                    $this->loadTemplate("Global/event-card.html.twig", "Front/Main/homepage.html.twig", 202)->display(twig_array_merge($context, ["event" => $context["event"]]));
                    // line 203
                    echo "                                        </div>
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
                // line 205
                echo "                                </div>
                            </div>
                        </section>
                    ";
            }
            // line 209
            echo "                ";
        }
        // line 210
        echo "
                ";
        // line 211
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_categories_number"], "method", false, false, false, 211) > 0)) {
            // line 212
            echo "                    <section class=\"section-content padding-y-lg\">
                        <div class=\"";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 213), "html", null, true);
            echo "\">
                            <header class=\"section-headin mb-5\">
                                <h4 class=\"title-section text-center text-muted text-uppercase\">";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured categories"), "html", null, true);
            echo "</h4>
                            </header>
                            <div class=\"row-sm\">
                                ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => ["featured" => true, "limit" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_categories_number"], "method", false, false, false, 218)]], "method", false, false, false, 218), "getQuery", [], "method", false, false, false, 218), "getResult", [], "method", false, false, false, 218));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 219
                echo "                                    <div class=\"col-md-3 col-sm-3\">
                                        ";
                // line 220
                $this->loadTemplate("Global/category-card.html.twig", "Front/Main/homepage.html.twig", 220)->display($context);
                // line 221
                echo "                                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                            </div>
                        </div>
                    </section>
                ";
        }
        // line 227
        echo "
                ";
        // line 228
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_blogposts_number"], "method", false, false, false, 228) > 0)) {
            // line 229
            echo "                    ";
            $context["latestblogposts"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getBlogPosts", [0 => ["limit" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_blogposts_number"], "method", false, false, false, 229)]], "method", false, false, false, 229), "getQuery", [], "method", false, false, false, 229), "getResult", [], "method", false, false, false, 229);
            // line 230
            echo "                    ";
            if (twig_length_filter($this->env, ($context["latestblogposts"] ?? null))) {
                // line 231
                echo "                        <section class=\"section-content padding-y-lg bg-white\">
                            <div class=\"";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 232), "html", null, true);
                echo "\">
                                <header class=\"section-headin mb-5\">
                                    <h4 class=\"title-section text-center text-muted text-uppercase\">";
                // line 234
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lastest blog posts"), "html", null, true);
                echo "</h4>
                                </header>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"owl-init owl-carousel\" data-margin=\"15\" data-items=\"5\" data-dots=\"true\" data-nav=\"false\" data-autoplay=\"false\">
                                            ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["latestblogposts"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["blogpost"]) {
                    // line 240
                    echo "                                                ";
                    $this->loadTemplate("Global/blog-card.html.twig", "Front/Main/homepage.html.twig", 240)->display(twig_array_merge($context, ["blogpost" => $context["blogpost"], "thumbnailsize" => [0 => 241, 1 => 241]]));
                    // line 241
                    echo "                                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogpost'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    ";
            }
            // line 248
            echo "                ";
        }
        // line 249
        echo "
                ";
        // line 250
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "homepage_show_call_to_action"], "method", false, false, false, 250) == "yes")) {
            // line 251
            echo "                    <section class=\"section-intro padding-y-lg\">
                        <div class=\"";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 252), "html", null, true);
            echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-10 text-center\">
                                    <article class=\"text-dark text-center text-lg-left mb-3\">
                                        <h3>";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you ready to take your"), "html", null, true);
            echo " <b class=\"rotate-words\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => ["featured" => true, "limit" => 9]], "method", false, false, false, 256), "getQuery", [], "method", false, false, false, 256), "getResult", [], "method", false, false, false, 256));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 256)), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 256)) {
                    echo "|";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</b> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("event to the next level ?"), "html", null, true);
            echo "</h3>
                                    </article>
                                </div>
                                <div class=\"col-md-2 text-center text-lg-right\">
                                    <a href=\"";
            // line 260
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_add");
            echo "\" class=\"btn btn-light\"><i class=\"fas fa-calendar-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create my event"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </div>
                    </section>
                ";
        }
        // line 266
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "Front/Main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 266,  779 => 260,  737 => 256,  730 => 252,  727 => 251,  725 => 250,  722 => 249,  719 => 248,  711 => 242,  697 => 241,  694 => 240,  677 => 239,  669 => 234,  664 => 232,  661 => 231,  658 => 230,  655 => 229,  653 => 228,  650 => 227,  644 => 223,  629 => 221,  627 => 220,  624 => 219,  607 => 218,  601 => 215,  596 => 213,  593 => 212,  591 => 211,  588 => 210,  585 => 209,  579 => 205,  564 => 203,  562 => 202,  559 => 201,  542 => 200,  536 => 197,  531 => 195,  527 => 193,  524 => 192,  521 => 191,  519 => 190,  516 => 189,  507 => 183,  499 => 178,  495 => 177,  491 => 176,  487 => 175,  483 => 174,  479 => 173,  475 => 172,  471 => 171,  466 => 169,  459 => 164,  448 => 162,  444 => 161,  440 => 160,  435 => 158,  428 => 153,  417 => 151,  413 => 150,  409 => 149,  404 => 147,  397 => 143,  394 => 142,  392 => 141,  389 => 140,  383 => 136,  371 => 127,  363 => 122,  359 => 121,  355 => 120,  351 => 119,  347 => 118,  343 => 117,  339 => 116,  335 => 115,  330 => 113,  325 => 110,  314 => 108,  310 => 107,  306 => 106,  301 => 104,  296 => 101,  285 => 99,  281 => 98,  277 => 97,  272 => 95,  266 => 92,  260 => 88,  258 => 87,  254 => 85,  248 => 83,  245 => 82,  239 => 80,  237 => 79,  230 => 75,  222 => 74,  219 => 73,  217 => 72,  214 => 71,  209 => 68,  203 => 67,  190 => 60,  184 => 58,  182 => 57,  178 => 56,  171 => 52,  164 => 49,  161 => 48,  157 => 47,  153 => 45,  151 => 44,  148 => 43,  143 => 40,  128 => 33,  125 => 32,  122 => 31,  116 => 29,  114 => 28,  111 => 27,  105 => 25,  97 => 23,  95 => 22,  92 => 21,  90 => 20,  85 => 18,  78 => 14,  71 => 11,  67 => 10,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Main/homepage.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Main/homepage.html.twig");
    }
}
