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

/* Front/Venue/venues.html.twig */
class __TwigTemplate_45209074619605616c7a8b879d19cb3e8921b9b97a77310e78dfc3aee2e86812 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venues");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Venue/venues.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Front/Venue/venues.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">

            <div class=\"box shadow-none bg-gray mb-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-lg-3 text-center text-lg-left mb-3 mb-lg-0\">
                        <span class=\"center-lg-y text-muted\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["venues"] ?? null), "getTotalItemCount", [], "any", false, false, false, 18)]), "html", null, true);
        echo "</span>
                    </div>

                    <div class=\"col-sm-12 col-lg-6 offset-lg-3 text-center text-lg-right\">
                        <label for=\"sortable-select\" class=\"display-inline\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                            <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                ";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["venues"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "v.createdAt", ["direction" => "desc", "criteria" => "v.createdAt"]);
        echo "
                                ";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["venues"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "v.createdAt", ["direction" => "asc", "criteria" => "v.createdAt"]);
        echo "
                            </select>
                        </label>
                    </div>
                </div>
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
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keyword"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-keyword\">
                                    <div class=\"card-body\">
                                        <input id=\"keyword\" name=\"keyword\" type=\"text\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 46), "get", [0 => "keyword"], "method", false, false, false, 46), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue name..."), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </article>
                            <article class=\"card-group-item\">
                                <header class=\"card-header\">
                                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-country\">
                                        <i class=\"icon-action fa fa-chevron-down\"></i>
                                        <h6 class=\"title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-country\">
                                    <div class=\"card-body\">

                                        <select id=\"filter-country-select\" class=\"form-control select2\" name=\"country\" data-sort-options=\"1\">
                                            <option value=\"\">&nbsp;</option>
                                            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCountries", [0 => []], "method", false, false, false, 62), "getQuery", [], "method", false, false, false, 62), "getResult", [], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 63
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "slug", [], "any", false, false, false, 63), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                        </select>

                                    </div>
                                </div>
                            </article>
                            <article class=\"card-group-item\">
                                <header class=\"card-header\">
                                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-venue-type\">
                                        <i class=\"icon-action fa fa-chevron-down\"></i>
                                        <h6 class=\"title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue type"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-venue-type\">
                                    <div class=\"card-body\">

                                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getVenuesTypes", [0 => ["hasvenues" => true, "limit" => 5, "sort" => "venuescount", "order" => "DESC"]], "method", false, false, false, 80), "getQuery", [], "method", false, false, false, 80), "getResult", [], "method", false, false, false, 80));
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
        foreach ($context['_seq'] as $context["_key"] => $context["venuetype"]) {
            // line 81
            echo "                                            <div class=\"form-check\">
                                                <div class=\"float-left custom-control custom-checkbox form-check-input\">
                                                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"venue-type-";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 83), "html", null, true);
            echo "\" name=\"venuetypes[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venuetype"], "slug", [], "any", false, false, false, 83), "html", null, true);
            echo "\">
                                                    <label class=\"custom-control-label\" for=\"venue-type-";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venuetype"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</label>
                                                </div>
                                                <span class=\"float-right form-check-label\">
                                                    <span class=\"badge badge-light round\">";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venuetype"], "venues", [], "any", false, false, false, 87)), "html", null, true);
            echo "</span>
                                                </span>
                                                <div class=\"clearfix\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venuetype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                                    </div>
                                </div>
                            </article>
                            <article class=\"card-group-item\">
                                <header class=\"card-header\">
                                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-seated-guests\">
                                        <i class=\"icon-action fa fa-chevron-down\"></i>
                                        <h6 class=\"title\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Seated guests"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-seated-guests\">
                                    <div class=\"card-body\">
                                        <div class=\"range-slider mb-3\" data-min=\"1\" data-max=\"10000\" data-start-left=\"";
        // line 105
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "minseatedguests"], "method", true, true, false, 105) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "minseatedguests"], "method", false, false, false, 105)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "minseatedguests"], "method", false, false, false, 105), "html", null, true))) : (print ("1")));
        echo "\" data-start-right=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "maxseatedguests"], "method", true, true, false, 105) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "maxseatedguests"], "method", false, false, false, 105)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 105), "get", [0 => "maxseatedguests"], "method", false, false, false, 105), "html", null, true))) : (print ("9999")));
        echo "\"></div>
                                        <div class=\"row ranger-slider-inputs\">
                                            <div class=\"col-12 col-sm-6\">
                                                <label for=\"minseatedguests\">";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
        echo "</label>
                                                <input id=\"minseatedguests\" name=\"minseatedguests\" type=\"text\" class=\"form-control range-slider-min-input\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 109), "get", [0 => "minseatedguests"], "method", false, false, false, 109), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"col-12 col-sm-6\">
                                                <label for=\"maxseatedguests\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
        echo "</label>
                                                <input id=\"maxseatedguests\" name=\"maxseatedguests\" type=\"text\" class=\"form-control range-slider-max-input\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 113), "get", [0 => "maxseatedguests"], "method", false, false, false, 113), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class=\"card-group-item\">
                                <header class=\"card-header\">
                                    <a href=\"#\" data-toggle=\"collapse\" data-target=\"#filter-standing-guests\">
                                        <i class=\"icon-action fa fa-chevron-down\"></i>
                                        <h6 class=\"title\">";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Standing guests"), "html", null, true);
        echo "</h6>
                                    </a>
                                </header>
                                <div class=\"filter-content collapse show\" id=\"filter-standing-guests\">
                                    <div class=\"card-body\">
                                        <div class=\"range-slider mb-3\" data-min=\"1\" data-max=\"10000\" data-start-left=\"";
        // line 128
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "minstandingguests"], "method", true, true, false, 128) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "minstandingguests"], "method", false, false, false, 128)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "minstandingguests"], "method", false, false, false, 128), "html", null, true))) : (print ("1")));
        echo "\" data-start-right=\"";
        (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "maxstandingguests"], "method", true, true, false, 128) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "maxstandingguests"], "method", false, false, false, 128)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 128), "get", [0 => "maxstandingguests"], "method", false, false, false, 128), "html", null, true))) : (print ("9999")));
        echo "\"></div>
                                        <div class=\"row ranger-slider-inputs\">
                                            <div class=\"col-12 col-sm-6\">
                                                <label for=\"minstandingguests\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
        echo "</label>
                                                <input id=\"minstandingguests\" name=\"minstandingguests\" type=\"text\" class=\"form-control range-slider-min-input\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 132), "get", [0 => "minstandingguests"], "method", false, false, false, 132), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min"), "html", null, true);
        echo "\">
                                            </div>
                                            <div class=\"col-12 col-sm-6\">
                                                <label for=\"maxstandingguests\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
        echo "</label>
                                                <input id=\"maxstandingguests\" name=\"maxstandingguests\" type=\"text\" class=\"form-control range-slider-max-input\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 136), "get", [0 => "maxstandingguests"], "method", false, false, false, 136), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max"), "html", null, true);
        echo "\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            ";
        // line 171
        echo "
                            <article class=\"card-group-item\">
                                <div class=\"card-body\">
                                    <button class=\"btn btn-block btn-outline-primary\"><i class=\"fas fa-search\"></i> ";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</button>
                                </div>
                            </article>
                        </form>
                    </div>
                    ";
        // line 179
        if ((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "newsletter_enabled"], "method", false, false, false, 179) == "yes") && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_api_key"], "method", false, false, false, 179)) && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_list_id"], "method", false, false, false, 179))) {
            // line 180
            echo "                        ";
            $this->loadTemplate("Global/newsletter-box.html.twig", "Front/Venue/venues.html.twig", 180)->display($context);
            // line 181
            echo "                    ";
        }
        // line 182
        echo "
                </aside>
                <div class=\"col-lg-9 order-1 order-lg-2\">
                    ";
        // line 185
        if ((twig_get_attribute($this->env, $this->source, ($context["venues"] ?? null), "getTotalItemCount", [], "any", false, false, false, 185) > 0)) {
            // line 186
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["venues"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
                // line 187
                echo "                            ";
                $this->loadTemplate("Global/venue-card.html.twig", "Front/Venue/venues.html.twig", 187)->display(twig_array_merge($context, ["venue" => $context["venue"]]));
                // line 188
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                    ";
        } else {
            // line 190
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "Front/Venue/venues.html.twig", 190)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No venues found"), "icon" => "fas fa-exclamation-circle"]));
            // line 191
            echo "                    ";
        }
        // line 192
        echo "                </div>
            </div>

            ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, ($context["venues"] ?? null), "getTotalItemCount", [], "any", false, false, false, 195) > 0)) {
            // line 196
            echo "                ";
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["venues"] ?? null), null, [], ["align" => "center"]);
            echo "
            ";
        }
        // line 198
        echo "
        </div>
    </section>

";
    }

    // line 204
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "
    <script>

        \$(document).ready(function () {

            if (getURLParameter('country')) {
                \$('#filter-country-select option').each(function () {
                    if (\$(this).val() == getURLParameter('country'))
                    {
                        \$(this).prop('selected', true).trigger('change');
                    }
                });
            }

            if (getURLArrayParameter('venuetypes[]')) {
                for (var i = 0; i < getURLArrayParameter('venuetypes[]').length; i++) {
                    console.log(getURLArrayParameter('venuetypes[]'));
                    \$('input[name=\"venuetypes[]\"][value=\"' + getURLArrayParameter('venuetypes[]')[i] + '\"]').prop('checked', 'checked');
                }
            }

        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Front/Venue/venues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 205,  434 => 204,  426 => 198,  420 => 196,  418 => 195,  413 => 192,  410 => 191,  407 => 190,  404 => 189,  390 => 188,  387 => 187,  369 => 186,  367 => 185,  362 => 182,  359 => 181,  356 => 180,  354 => 179,  346 => 174,  341 => 171,  330 => 136,  326 => 135,  318 => 132,  314 => 131,  306 => 128,  298 => 123,  283 => 113,  279 => 112,  271 => 109,  267 => 108,  259 => 105,  251 => 100,  241 => 92,  222 => 87,  214 => 84,  208 => 83,  204 => 81,  187 => 80,  178 => 74,  167 => 65,  156 => 63,  152 => 62,  141 => 54,  128 => 46,  120 => 41,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  82 => 18,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Venue/venues.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Venue/venues.html.twig");
    }
}
