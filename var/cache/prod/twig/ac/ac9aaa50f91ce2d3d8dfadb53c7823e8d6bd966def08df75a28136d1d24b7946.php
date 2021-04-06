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

/* Front/Event/event.html.twig */
class __TwigTemplate_33d1887d735784b7d1690998229e9fac5fa341f63b25024a2d87adbe5acc801f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta_dynamic_seo' => [$this, 'block_meta_dynamic_seo'],
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
        $context["pagetitle"] = twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Event/event.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 7
    public function block_meta_dynamic_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <meta name=\"description\" content=\"";
        echo twig_slice($this->env, strip_tags(nl2br(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 8))), 0, 200);
        echo "...\" />
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "tags", [], "any", false, false, false, 9)) {
            // line 10
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "category", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html", null, true);
            echo ", ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "tags", [], "any", false, false, false, 10), ","));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 10)) ? (", ") : (""));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\" />
    ";
        } else {
            // line 12
            echo "        <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_keywords_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 12), "get", [0 => "_locale"], "method", false, false, false, 12))], "method", false, false, false, 12), "html", null, true);
            echo "\" />
    ";
        }
        // line 14
        echo "    <meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "getSchemeAndHttpHost", [], "method", false, false, false, 15), "html", null, true);
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "imageName", [], "any", false, false, false, 15)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 15))) : (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 15))), "html", null, true);
        echo "\" />
    <meta property=\"og:description\" content=\"";
        // line 16
        echo twig_slice($this->env, strip_tags(nl2br(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 16))), 0, 200);
        echo "...\" />
    <meta name=\"twitter:title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "\" />
    <meta name=\"twitter:image\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "getSchemeAndHttpHost", [], "method", false, false, false, 18), "html", null, true);
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "imageName", [], "any", false, false, false, 18)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 18))) : (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 18))), "html", null, true);
        echo "\" />
    <meta name=\"twitter:image:alt\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "\" />
    <meta name=\"twitter:description\" content=\"";
        // line 20
        echo twig_slice($this->env, strip_tags(nl2br(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 20))), 0, 200);
        echo "...\" />
";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
    ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 26
            echo "        ";
            $this->loadTemplate("Global/message.html.twig", "Front/Event/event.html.twig", 26)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => ((((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_event", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 26)])) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here")) . "</a> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("to manage this event"))]));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 29
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 29) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 29), "organizer", [], "any", false, false, false, 29))) {
                // line 30
                echo "            ";
                $this->loadTemplate("Global/message.html.twig", "Front/Event/event.html.twig", 30)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => ((((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 30)])) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here")) . "</a> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("to manage your event"))]));
                // line 31
                echo "        ";
            }
            // line 32
            echo "    ";
        }
        // line 33
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 34
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 34), "hasBoughtATicketForEvent", [0 => ($context["event"] ?? null)], "method", false, false, false, 34)) {
                // line 35
                echo "            ";
                $this->loadTemplate("Global/message.html.twig", "Front/Event/event.html.twig", 35)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-ticket-alt", "message" => (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are going to this event") . " ") . "<a href=\"") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_orders", ["event" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 35)])) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My tickets")) . "</a>")]));
                // line 36
                echo "        ";
            }
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $context["navigation"] = [0 => ["events" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "current" => ($context["pagetitle"] ?? null)]];
        // line 40
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Front/Event/event.html.twig", 40)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 41
        echo "
    <div class=\"row no-gutters\">
        <div class=\"col-12 p-0\">
            <section class=\"section-main\">
                <div class=\"owl-init slider-main owl-carousel\" data-items=\"1\" data-dots=\"false\" data-nav=\"false\" data-autoplay=\"false\">
                    <div class=\"item-slide d-flex\">
                        <img class=\"slider-img justify-content-center align-self-center img-lazy-load\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader.gif"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "imageName", [], "any", false, false, false, 47)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 47))) : (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 47))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "\" />
                        <div class=\"slider-blured-background\" style=\"background-image: url('";
        // line 48
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "imageName", [], "any", false, false, false, 48)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 48))) : (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 48))), "html", null, true);
        echo "');\"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 55), "html", null, true);
        echo "\">
            <div class=\"card\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-8 ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 58), "locale", [], "any", false, false, false, 58) != "ar")) {
            echo "border-right";
        }
        echo " order-1 order-lg-0\">
                        <div class=\"card-body\">
                            <h1 class=\"card-title b d-none d-lg-block\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "</h1>
                            ";
        // line 61
        $context["reviewscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getReviews", [0 => ["count" => true, "event" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 61)]], "method", false, false, false, 61), "getQuery", [], "method", false, false, false, 61), "getSingleScalarResult", [], "method", false, false, false, 61);
        // line 62
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "enablereviews", [], "any", false, false, false, 62)) {
            // line 63
            echo "                                <div class=\"rating-wrap d-none d-lg-block\">
                                    <ul class=\"rating-stars\">
                                        <li style=\"width:";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingPercentage", [], "any", false, false, false, 65), "html", null, true);
            echo "%\" class=\"stars-active\">
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                        </li>
                                    </ul>
                                    <div class=\"label-rating\">";
            // line 80
            echo twig_escape_filter($this->env, ($context["reviewscount"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review(s)")), "html", null, true);
            echo "</div>
                                </div>
                            ";
        }
        // line 83
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 83)) {
            // line 84
            echo "                                <dl class=\"mt-5 event-description\">
                                    <dt class=\"text-muted\">";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
            echo "</dt>
                                    <dd class=\"line-height-2 readmore\" data-collapsed-height=\"500\" data-height-margin=\"20\">
                                        ";
            // line 87
            echo nl2br(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 87));
            echo "
                                    </dd>
                                </dl>
                            ";
        }
        // line 91
        echo "                            <ul class=\"list-group list-group-flush mt-5 mb-5 p-0\">
                                <li class=\"list-group-item pl-0 pr-0\">
                                    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "category", [], "any", false, false, false, 93)) {
            // line 94
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "category", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 99
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "country", [], "any", false, false, false, 99)) {
            // line 100
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\"><span class=\"flag flag-";
            // line 102
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "country", [], "any", false, false, false, 102), "code", [], "any", false, false, false, 102)), "html", null, true);
            echo "\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "country", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 105
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "languages", [], "any", false, false, false, 105)) > 0)) {
            // line 106
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "displayLanguages", [], "any", false, false, false, 108), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 111
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "subtitles", [], "any", false, false, false, 111)) > 0)) {
            // line 112
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subtitles"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "displaySubtitles", [], "any", false, false, false, 114), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 117
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "artists", [], "any", false, false, false, 117)) {
            // line 118
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Artists"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "artists", [], "any", false, false, false, 120), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 123
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "year", [], "any", false, false, false, 123)) {
            // line 124
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Year"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "year", [], "any", false, false, false, 126), "html", null, true);
            echo "</dd>
                                        </dl>
                                    ";
        }
        // line 129
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "audiences", [], "any", false, false, false, 129)) > 0)) {
            // line 130
            echo "                                        <dl class=\"dlist-align\">
                                            <dt class=\"text-muted\">";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Audience"), "html", null, true);
            echo "</dt>
                                            <dd class=\"text-right\">
                                                <ul class=\"list-inline\">
                                                    ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "audiences", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 135
                echo "                                                        <li class=\"list-inline-item\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "name", [], "any", false, false, false, 135), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["audience"], "imageName", [], "any", false, false, false, 135)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["audience"], "getImagePath", [], "any", false, false, false, 135))) : (twig_get_attribute($this->env, $this->source, $context["audience"], "getImagePlaceholder", [], "any", false, false, false, 135))), "html", null, true);
                echo "\" class=\"img-xxs\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["audience"], "name", [], "any", false, false, false, 135), "html", null, true);
                echo "\" /></li>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                                                </ul>
                                            </dd>
                                        </dl>
                                    ";
        }
        // line 141
        echo "                                </li>
                            </ul>
                            ";
        // line 143
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "images", [], "any", false, false, false, 143)) > 0)) {
            // line 144
            echo "                                <dl class=\"mt-5\">
                                    <dt class=\"text-muted\">";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photos"), "html", null, true);
            echo "</dt>
                                    <dd class=\"mr-0\">
                                        <div class=\"gallery photos-gallery clearfix\">
                                            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "images", [], "any", false, false, false, 148));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 149
                echo "                                                <figure>
                                                    <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["image"], "getImagePath", [], "any", false, false, false, 150)), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["image"], "imageDimensions", [], "any", false, false, false, 150)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["image"], "imageDimensions", [], "any", false, false, false, 150)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
                echo "\">
                                                        <img class=\"img-lazy-load\" src=\"";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader.gif"), "html", null, true);
                echo "\" data-src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, $context["image"], "getImagePath", [], "any", false, false, false, 151), "thumbnail"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 151), "html", null, true);
                echo "\" />
                                                    </a>
                                                </figure>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "
                                        </div>
                                    </dd>
                                </dl>
                            ";
        }
        // line 160
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "youtubeurl", [], "any", false, false, false, 160)) {
            // line 161
            echo "                                <dl class=\"mt-5\">
                                    <dt class=\"text-muted\">";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Video"), "html", null, true);
            echo "</dt>
                                    <dd class=\"mr-0\">
                                        <iframe class=\"w-100 border-0\" height=\"400\" src=\"https://www.youtube.com/embed/";
            // line 164
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "youtubeurl", [], "any", false, false, false, 164), "=")) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null), "html", null, true);
            echo "\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    </dd>
                                </dl>
                            ";
        }
        // line 168
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "hasContactAndSocialMedia", [], "any", false, false, false, 168)) {
            // line 169
            echo "                                <dl class=\"mt-5\">
                                    <dt class=\"text-muted\">";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact & Social media"), "html", null, true);
            echo "</dt>
                                    <dd class=\"mr-0\">
                                        <ul class=\"list-icon row no-gutters\">
                                            ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "externallink", [], "any", false, false, false, 173)) {
                // line 174
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "externallink", [], "any", false, false, false, 174)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "externallink", [], "any", false, false, false, 174)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "externallink", [], "any", false, false, false, 174), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fas fa-globe fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "externallink", [], "any", false, false, false, 174), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 176
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "email", [], "any", false, false, false, 176)) {
                // line 177
                echo "                                                <li class=\"col-md-6\"><a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "email", [], "any", false, false, false, 177), "html", null, true);
                echo "\" class=\"pl-4\"><i class=\"icon fas fa-at fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "email", [], "any", false, false, false, 177), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 179
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "phonenumber", [], "any", false, false, false, 179)) {
                // line 180
                echo "                                                <li class=\"col-md-6\"><a href=\"tel:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "phonenumber", [], "any", false, false, false, 180), "html", null, true);
                echo "\" class=\"pl-4\"><i class=\"icon fas fa-phone fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "phonenumber", [], "any", false, false, false, 180), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 182
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "facebook", [], "any", false, false, false, 182)) {
                // line 183
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "facebook", [], "any", false, false, false, 183)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "facebook", [], "any", false, false, false, 183)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "facebook", [], "any", false, false, false, 183), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fab fa-facebook-f fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "facebook", [], "any", false, false, false, 183), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 185
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "twitter", [], "any", false, false, false, 185)) {
                // line 186
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "twitter", [], "any", false, false, false, 186)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "twitter", [], "any", false, false, false, 186)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "twitter", [], "any", false, false, false, 186), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fab fa-twitter fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "twitter", [], "any", false, false, false, 186), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 188
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "googleplus", [], "any", false, false, false, 188)) {
                // line 189
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "googleplus", [], "any", false, false, false, 189)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "googleplus", [], "any", false, false, false, 189)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "googleplus", [], "any", false, false, false, 189), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fab fa-google-plus fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "googleplus", [], "any", false, false, false, 189), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 191
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "instagram", [], "any", false, false, false, 191)) {
                // line 192
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "instagram", [], "any", false, false, false, 192)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "instagram", [], "any", false, false, false, 192)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "instagram", [], "any", false, false, false, 192), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fab fa-instagram fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "instagram", [], "any", false, false, false, 192), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 194
            echo "                                                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "linkedin", [], "any", false, false, false, 194)) {
                // line 195
                echo "                                                <li class=\"col-md-6\"><a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "linkedin", [], "any", false, false, false, 195)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "linkedin", [], "any", false, false, false, 195)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "linkedin", [], "any", false, false, false, 195), "html", null, true);
                echo "\" class=\"pl-4\" target=\"_blank\"><i class=\"icon fab fa-linkedin fa-fw\"></i><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "linkedin", [], "any", false, false, false, 195), "html", null, true);
                echo "</span></a></li>
                                                        ";
            }
            // line 197
            echo "                                        </ul>
                                    </dd>
                                </dl>
                            ";
        }
        // line 201
        echo "                            <dl class=\"mt-5\">
                                <dt class=\"text-muted\">";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share"), "html", null, true);
        echo "</dt>
                                <dd class=\"mr-0\">
                                    <div class=\"sharer\"></div>
                                </dd>
                            </dl>
                            ";
        // line 207
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "tags", [], "any", false, false, false, 207)) {
            // line 208
            echo "                                <hr class=\"mt-5\">
                                <div class=\"row\">
                                    <div class=\"col\">
                                        ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "tags", [], "any", false, false, false, 211), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 212
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["keyword" => $context["tag"]]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-default mr-3 mb-3 mt-3\">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                    </div>
                                </div>
                            ";
        }
        // line 217
        echo "
                            ";
        // line 218
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "enablereviews", [], "any", false, false, false, 218)) {
            // line 219
            echo "                                <hr class=\"mb-5\">
                                <div class=\"row\">
                                    <div class=\"col-12 col-sm-6 mb-5\">
                                        <h3 class=\"mb-1\">";
            // line 222
            echo twig_escape_filter($this->env, ($context["reviewscount"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("review")), "html", null, true);
            echo "</h3>
                                        <div class=\"rating-wrap\">
                                            <ul class=\"rating-stars\">
                                                <li style=\"width:";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingPercentage", [], "any", false, false, false, 225), "html", null, true);
            echo "%\" class=\"stars-active\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </li>
                                                <li>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </li>
                                            </ul>
                                            <div class=\"label-rating\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingAvg", [], "any", false, false, false, 240), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of 5 stars")), "html", null, true);
            echo "</div>
                                        </div>
                                    </div>
                                    <div class=\"col-12 col-sm-6 text-sm-right\">
                                        ";
            // line 244
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 245
                echo "                                            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                    // line 246
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isRatedBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 246)], "method", false, false, false, 246)) {
                        // line 247
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_reviews", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isRatedBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 247)], "method", false, false, false, 247), "slug", [], "any", false, false, false, 247)]), "html", null, true);
                        echo "\" class=\"btn btn-outline-primary\"><i class=\"far fa-star\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My review"), "html", null, true);
                        echo "</a>
                                                ";
                    } else {
                        // line 249
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_reviews_add", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 249)]), "html", null, true);
                        echo "\" class=\"btn btn-outline-primary\"><i class=\"far fa-star\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add your review"), "html", null, true);
                        echo "</a>
                                                ";
                    }
                    // line 251
                    echo "                                            ";
                }
                // line 252
                echo "                                        ";
            } else {
                // line 253
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 253), "getPathInfo", [], "any", false, false, false, 253)), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\"><i class=\"far fa-star\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add your review"), "html", null, true);
                echo "</a>
                                        ";
            }
            // line 255
            echo "                                    </div>
                                </div>

                                <div class=\"row mb-5 event-scorecard\">
                                    <div class=\"col-12\">
                                        <div class=\"side\">
                                            <div>";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("5 stars"), "html", null, true);
            echo "</div>
                                        </div>
                                        <div class=\"middle\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar\" style=\"width: ";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 5], "method", false, false, false, 265), "html", null, true);
            echo "%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"side right\">
                                            <div class=\"text-muted\">";
            // line 269
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 5], "method", false, false, false, 269), "html", null, true);
            echo "%</div>
                                        </div>
                                        <div class=\"side\">
                                            <div>";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("4 stars"), "html", null, true);
            echo "</div>
                                        </div>
                                        <div class=\"middle\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar\" style=\"width: ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 4], "method", false, false, false, 276), "html", null, true);
            echo "%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"side right\">
                                            <div class=\"text-muted\">";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 4], "method", false, false, false, 280), "html", null, true);
            echo "%</div>
                                        </div>
                                        <div class=\"side\">
                                            <div>";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("3 stars"), "html", null, true);
            echo "</div>
                                        </div>
                                        <div class=\"middle\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar\" style=\"width: ";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 3], "method", false, false, false, 287), "html", null, true);
            echo "%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"side right\">
                                            <div class=\"text-muted\">";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 3], "method", false, false, false, 291), "html", null, true);
            echo "%</div>
                                        </div>
                                        <div class=\"side\">
                                            <div>";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2 stars"), "html", null, true);
            echo "</div>
                                        </div>
                                        <div class=\"middle\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar\" style=\"width: ";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 2], "method", false, false, false, 298), "html", null, true);
            echo "%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"side right\">
                                            <div class=\"text-muted\">";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 2], "method", false, false, false, 302), "html", null, true);
            echo "%</div>
                                        </div>
                                        <div class=\"side\">
                                            <div>";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1 star"), "html", null, true);
            echo "</div>
                                        </div>
                                        <div class=\"middle\">
                                            <div class=\"bar-container\">
                                                <div class=\"bar\" style=\"width: ";
            // line 309
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 1], "method", false, false, false, 309), "html", null, true);
            echo "%;\"></div>
                                            </div>
                                        </div>
                                        <div class=\"side right\">
                                            <div class=\"text-muted\">";
            // line 313
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 1], "method", false, false, false, 313), "html", null, true);
            echo "%</div>
                                        </div>
                                    </div>
                                </div>

                                ";
            // line 318
            if (twig_length_filter($this->env, ($context["reviewscount"] ?? null))) {
                // line 319
                echo "                                    <div id=\"reviews\" class=\"row\">
                                        <div class=\"col-12\">
                                            ";
                // line 321
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getReviews", [0 => ["event" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 321), "limit" => 8]], "method", false, false, false, 321), "getQuery", [], "method", false, false, false, 321), "getResult", [], "method", false, false, false, 321));
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 322
                    echo "                                                ";
                    $this->loadTemplate("Global/user-review.html.twig", "Front/Event/event.html.twig", 322)->display(twig_array_merge($context, ["review" => $context["review"], "showuser" => 1]));
                    // line 323
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 324
                echo "                                            ";
                if ((($context["reviewscount"] ?? null) > 8)) {
                    // line 325
                    echo "                                                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_reviews");
                    echo "\" class=\"btn btn-outline-primary mx-auto\"><i class=\"far fa-star-half-full\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See all %reviewscount% reviews", ["%reviewscount%" => ($context["reviewscount"] ?? null)]), "html", null, true);
                    echo "</a>
                                            ";
                }
                // line 327
                echo "                                        </div>
                                    </div>
                                ";
            }
            // line 330
            echo "
                            ";
        }
        // line 332
        echo "
                        </div>
                    </div>
                    <div class=\"col-12 col-lg-4 order-0 order-lg-1 ";
        // line 335
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 335), "locale", [], "any", false, false, false, 335) == "ar")) {
            echo "border-right";
        }
        echo "\">
                        <div class=\"card-body\">
                            <h1 class=\"card-title b d-lg-none text-center\">";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 337), "html", null, true);
        echo "</h1>
                            ";
        // line 338
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "enablereviews", [], "any", false, false, false, 338)) {
            // line 339
            echo "                                <div class=\"rating-wrap mb-5 d-lg-none text-center\">
                                    <ul class=\"rating-stars\">
                                        <li style=\"width:";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingPercentage", [], "any", false, false, false, 341), "html", null, true);
            echo "%\" class=\"stars-active\">
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                        </li>
                                        <li>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                        </li>
                                    </ul>
                                    <div class=\"label-rating\">";
            // line 356
            echo twig_escape_filter($this->env, ($context["reviewscount"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews")), "html", null, true);
            echo "</div>
                                </div>
                            ";
        }
        // line 359
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "hasAnEventDateOnSale", [], "any", false, false, false, 359)) {
            // line 360
            echo "
                                ";
            // line 362
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "hasTwoOrMoreEventDatesOnSale", [], "any", false, false, false, 362)) {
                // line 363
                echo "                                    ";
                $context["eventDatesCalendar"] = [];
                // line 364
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventdates", [], "any", false, false, false, 364));
                foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                    if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "isOnSale", [], "any", false, false, false, 364)) {
                        // line 365
                        echo "                                        ";
                        $context["eventDatesCalendar"] = twig_array_merge(($context["eventDatesCalendar"] ?? null), [0 => ["Date" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 365), "Y-m-d"), "Title" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 365), "g:i A"), "Link" => twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 365)]]);
                        // line 366
                        echo "                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                                    ";
                $this->loadTemplate("Global/message.html.twig", "Front/Event/event.html.twig", 367)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => "Click on a date to view tickets"]));
                // line 368
                echo "
                                    <div id=\"event-dates-calendar\" class=\"mt-5\" data-event-dates=\"";
                // line 369
                echo twig_escape_filter($this->env, json_encode(($context["eventDatesCalendar"] ?? null)), "html", null, true);
                echo "\"></div>
                                    ";
                // line 370
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                    // line 371
                    echo "                                        <button id=\"add-to-cart-button\" type=\"button\" class=\"btn btn-primary btn-block mt-3 mb-3\"><i class=\"fas fa-cart-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to cart"), "html", null, true);
                    echo "</button>
                                    ";
                }
                // line 373
                echo "
                                ";
            }
            // line 375
            echo "
                                <form id=\"add-to-cart-form\" action=\"";
            // line 376
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_cart_add");
            echo "\" method=\"post\">
                                    ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventdates", [], "any", false, false, false, 377));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "isOnSale", [], "any", false, false, false, 377)) {
                    // line 378
                    echo "
                                        <div id=\"eventDate-";
                    // line 379
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 379), "html", null, true);
                    echo "-wrapper\" class=\"event-eventDate-wrapper\">
                                            <dl>
                                                <dt class=\"text-muted\">
                                                    <span>";
                    // line 382
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dates"), "html", null, true);
                    echo "</span>
                                                </dt>
                                                <dd>
                                                    <div class=\"text-center\">
                                                        ";
                    // line 387
                    echo "                                                        ";
                    $context["eventstartdate"] = "";
                    // line 388
                    echo "                                                        ";
                    $context["eventenddate"] = "";
                    // line 389
                    echo "                                                        ";
                    $context["eventlocation"] = "";
                    // line 390
                    echo "                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 390)) {
                        // line 391
                        echo "                                                            ";
                        $context["eventlocation"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 391), "name", [], "any", false, false, false, 391) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 391), "stringifyAddress", [], "any", false, false, false, 391));
                        // line 392
                        echo "                                                        ";
                    } else {
                        // line 393
                        echo "                                                            ";
                        $context["eventlocation"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online");
                        // line 394
                        echo "                                                        ";
                    }
                    // line 395
                    echo "                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 395)) {
                        // line 396
                        echo "                                                            <div class=\"display-inline-block\">
                                                                <div class=\"display-inline-block\">
                                                                    <span class=\"font-size-3rem\">";
                        // line 398
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 398), "d"), "html", null, true);
                        echo "</span>
                                                                </div>
                                                                <div class=\"display-inline-block mr-3\">
                                                                    <div><span class=\"font-size-1rem\">";
                        // line 401
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 401), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 401), "locale", [], "any", false, false, false, 401), null, "MMMM")), 0, 3), "html", null, true);
                        echo "</span></div>
                                                                    <div><span>";
                        // line 402
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 402), "Y"), "html", null, true);
                        echo "</span></div>
                                                                </div>
                                                                <div class=\"mb-2\">
                                                                    <span class=\"text-muted b\">
                                                                        ";
                        // line 406
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 406), "g:i a")), "html", null, true);
                        echo "
                                                                        ";
                        // line 407
                        if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 407)) {
                            // line 408
                            echo "                                                                            ";
                            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 408), "Y-m-d") == twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 408), "Y-m-d"))) {
                                // line 409
                                echo "                                                                                - ";
                                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 409), "g:i a")), "html", null, true);
                                echo "
                                                                            ";
                            }
                            // line 411
                            echo "                                                                        ";
                        }
                        // line 412
                        echo "                                                                    </span>
                                                                </div>
                                                            </div>
                                                            ";
                        // line 415
                        $context["eventstartdate"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 415), "F d, Y H:i");
                        // line 416
                        echo "                                                        ";
                    }
                    // line 417
                    echo "                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 417)) {
                        // line 418
                        echo "                                                            ";
                        if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 418), "Y-m-d") != twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "startdate", [], "any", false, false, false, 418), "Y-m-d"))) {
                            // line 419
                            echo "                                                                <div class=\"display-inline-block\">
                                                                    <div class=\"display-inline-block\">
                                                                        <span class=\"font-size-3rem\">";
                            // line 421
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 421), "d"), "html", null, true);
                            echo "</span>
                                                                    </div>
                                                                    <div class=\"display-inline-block\">
                                                                        <div><span class=\"font-size-1rem\">";
                            // line 424
                            echo twig_escape_filter($this->env, twig_slice($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 424), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 424), "locale", [], "any", false, false, false, 424), null, "MMMM")), 0, 3), "html", null, true);
                            echo "</span></div>
                                                                        <div><span>";
                            // line 425
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 425), "Y"), "html", null, true);
                            echo "</span></div>
                                                                    </div>
                                                                    <div class=\"mb-2\"><span class=\"text-muted b\">";
                            // line 427
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 427), "g:i a")), "html", null, true);
                            echo "</span></div>
                                                                </div>
                                                            ";
                        }
                        // line 430
                        echo "                                                            ";
                        $context["eventstartdate"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "enddate", [], "any", false, false, false, 430), "F d, Y H:i");
                        // line 431
                        echo "                                                        ";
                    }
                    // line 432
                    echo "                                                        <div class=\"clearfix\"></div>
                                                        <a id=\"add-to-calendar-link\" data-toggle=\"modal\" data-target=\"#add-to-calendar-modal\" href=\"javascript:void(0)\" data-title=\"";
                    // line 433
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 433), "html", null, true);
                    echo "\" data-start=\"";
                    echo twig_escape_filter($this->env, ($context["eventstartdate"] ?? null), "html", null, true);
                    echo "\" data-end=\"";
                    echo twig_escape_filter($this->env, ($context["eventenddate"] ?? null), "html", null, true);
                    echo "\" data-address=\"";
                    echo twig_escape_filter($this->env, ($context["eventlocation"] ?? null), "html", null, true);
                    echo "\" data-description=\"";
                    echo nl2br(twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", false, false, false, 433)), 0, 250));
                    echo "\"><i class=\"fas fa-calendar-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to calendar"), "html", null, true);
                    echo "</a>
                                                        <div class=\"modal fade\" id=\"add-to-calendar-modal\">
                                                            <div class=\"modal-dialog modal-dialog-centered\">
                                                                <div class=\"modal-content\">
                                                                    <div class=\"modal-header\">
                                                                        <h4 class=\"modal-title\"><i class=\"fas fa-calendar-plus\"></i> ";
                    // line 438
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to calendar"), "html", null, true);
                    echo "</h4>
                                                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                                    </div>
                                                                    <div id=\"add-to-calendar\" class=\"modal-body\">
                                                                    </div>
                                                                    <div class=\"modal-footer\">
                                                                        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
                    // line 444
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                    echo "</button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </dd>
                                            </dl>
                                            <hr class=\"hr-md\">
                                            ";
                    // line 454
                    if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 454)) {
                        // line 455
                        echo "                                                <dl>
                                                    <dt class=\"text-muted\">
                                                        <span class=\"";
                        // line 457
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 457), "locale", [], "any", false, false, false, 457) == "ar")) {
                            echo "float-right";
                        } else {
                            echo "float-left";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue"), "html", null, true);
                        echo "</span>
                                                        ";
                        // line 458
                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 458), "listedondirectory", [], "any", false, false, false, 458)) {
                            // line 459
                            echo "                                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 459), "slug", [], "any", false, false, false, 459)]), "html", null, true);
                            echo "\" class=\"";
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 459), "locale", [], "any", false, false, false, 459) == "ar")) {
                                echo "float-left";
                            } else {
                                echo "float-right";
                            }
                            echo " text-sm\"><i class=\"far fa-building\"></i> ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                            echo "</a>
                                                        ";
                        }
                        // line 461
                        echo "                                                        <div class=\"clearfix\"></div>
                                                    </dt>
                                                    <dd class=\"mr-0\">
                                                        <h4 class=\"text-center\">";
                        // line 464
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 464), "name", [], "any", false, false, false, 464), "html", null, true);
                        echo "</h4>
                                                        <p>";
                        // line 465
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 465), "stringifyAddress", [], "any", false, false, false, 465), "html", null, true);
                        echo "</p>
                                                        <div class=\"d-flex mb-3\">
                                                            <ul class=\"list-inline mx-auto\">
                                                                <li class=\"list-inline-item\"><a href=\"https://www.google.com/maps/dir/?api=1&destination=";
                        // line 468
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 468), "lat", [], "any", false, false, false, 468), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 468), "lng", [], "any", false, false, false, 468), "html", null, true);
                        echo "&travelmode=driving\" class=\"text-black-50\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display itinerary driving"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fas fa-car fa-fw\"></i></a></li>
                                                                <li class=\"list-inline-item\"><a href=\"https://www.google.com/maps/dir/?api=1&destination=";
                        // line 469
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 469), "lat", [], "any", false, false, false, 469), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 469), "lng", [], "any", false, false, false, 469), "html", null, true);
                        echo "&travelmode=walking\" class=\"text-black-50\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display itinerary walking"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fas fa-walking fa-fw\"></i></a></li>
                                                                <li class=\"list-inline-item\"><a href=\"https://www.google.com/maps/dir/?api=1&destination=";
                        // line 470
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 470), "lat", [], "any", false, false, false, 470), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 470), "lng", [], "any", false, false, false, 470), "html", null, true);
                        echo "&travelmode=transit\" class=\"text-black-50\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display itinerary on public transportation"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fas fa-bus fa-fw\"></i></a></li>
                                                                <li class=\"list-inline-item\"><a href=\"https://www.google.com/maps/dir/?api=1&destination=";
                        // line 471
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 471), "lat", [], "any", false, false, false, 471), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 471), "lng", [], "any", false, false, false, 471), "html", null, true);
                        echo "&travelmode=bicycling\" class=\"text-black-50\" data-toggle=\"tooltip\" title=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display itinerary bicycling"), "html", null, true);
                        echo "\" target=\"_blank\"><i class=\"fas fa-bicycle fa-fw\"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <iframe class=\"w-100 border-0 venue-map\" height=\"300\" src=\"https://maps.google.com/maps?q=";
                        // line 474
                        echo twig_escape_filter($this->env, ((twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 474), "name", [], "any", false, false, false, 474)) . "%20") . twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eventDate"], "venue", [], "any", false, false, false, 474), "stringifyAddress", [], "any", false, false, false, 474))), "html", null, true);
                        echo "&t=&z=13&ie=UTF8&iwloc=&output=embed\"></iframe>
                                                    </dd>
                                                </dl>
                                            ";
                    } else {
                        // line 478
                        echo "                                                <dl>
                                                    <dt class=\"text-muted\">
                                                        <span class=\"";
                        // line 480
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 480), "locale", [], "any", false, false, false, 480) == "ar")) {
                            echo "float-right";
                        } else {
                            echo "float-left";
                        }
                        echo "\">";
                        echo "Venue";
                        echo "</span>

                                                    </dt>
                                                    <dd>
                                                        <br>
                                                        <h4 class=\"text-center\">";
                        // line 485
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online"), "html", null, true);
                        echo "</h4>
                                                    </dd>
                                                </dl>
                                            ";
                    }
                    // line 489
                    echo "                                            <hr class=\"hr-md\">
                                            <dl class=\"mt-5\">
                                                <dt class=\"text-muted\">";
                    // line 491
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
                    echo "</dt>
                                                <dd class=\"mr-0\">
                                                    <div class=\"table-responsive\">
                                                        <table class=\"table table-hover table-condensed\">
                                                            <tbody>
                                                                ";
                    // line 496
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["eventDate"], "tickets", [], "any", false, false, false, 496));
                    foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                        // line 497
                        echo "                                                                    ";
                        if (twig_get_attribute($this->env, $this->source, $context["ticket"], "active", [], "any", false, false, false, 497)) {
                            // line 498
                            echo "                                                                        <tr class=\"bg-gray\">
                                                                            <td class=\"border-top-white\" style=\"width: 75%;\">
                                                                                ";
                            // line 500
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 500), "html", null, true);
                            echo "
                                                                            </td>
                                                                            <td class=\"border-top-white text-right\">
                                                                                ";
                            // line 503
                            if ( !twig_get_attribute($this->env, $this->source, $context["ticket"], "isOnSale", [], "any", false, false, false, 503)) {
                                // line 504
                                echo "                                                                                    <span class=\"badge badge-";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "stringifyStatusClass", [], "any", false, false, false, 504), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["ticket"], "stringifyStatus", [], "any", false, false, false, 504)), "html", null, true);
                                echo "</span>
                                                                                ";
                            } else {
                                // line 506
                                echo "                                                                                    ";
                                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["ticket"], "free", [], "any", false, false, false, 506)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : ((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 506) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 506)) : ("")) . twig_get_attribute($this->env, $this->source, $context["ticket"], "getSalePrice", [], "method", false, false, false, 506)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 506) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 506)) : (""))))), "html", null, true);
                                echo "
                                                                                    ";
                                // line 507
                                if ((twig_get_attribute($this->env, $this->source, $context["ticket"], "promotionalprice", [], "any", false, false, false, 507) &&  !twig_get_attribute($this->env, $this->source, $context["ticket"], "free", [], "any", false, false, false, 507))) {
                                    // line 508
                                    echo "                                                                                        <del class=\"price-old\">";
                                    echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 508) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 508)) : ("")) . twig_get_attribute($this->env, $this->source, $context["ticket"], "getPrice", [], "method", false, false, false, 508)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 508) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 508)) : (""))), "html", null, true);
                                    echo "</del>
                                                                                    ";
                                }
                                // line 510
                                echo "                                                                                ";
                            }
                            // line 511
                            echo "                                                                        </tr>
                                                                    ";
                        }
                        // line 513
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 514
                    echo "                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    ";
                    // line 517
                    if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
                        // line 518
                        echo "                                                        ";
                        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                            // line 519
                            echo "                                                            <a href=\"#\" class=\"btn btn-primary btn-block mb-2 buy-tickets-modal-button\" data-toggle=\"modal\" data-target=\"#buy-tickets-modal-eventDate-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 519), "html", null, true);
                            echo "\"><i class=\"fas fa-ticket-alt\"></i> ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
                            echo "</a>
                                                            ";
                            // line 520
                            $this->loadTemplate("Dashboard/Attendee/Cart/add-to-cart-modal.html.twig", "Front/Event/event.html.twig", 520)->display(twig_array_merge($context, ["eventdate" => $context["eventDate"]]));
                            // line 521
                            echo "                                                        ";
                        } else {
                            // line 522
                            echo "                                                            <a href=\"";
                            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 522), "getPathInfo", [], "any", false, false, false, 522)), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-block\"><i class=\"fas fa-ticket-alt\"></i> ";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
                            echo "</a>
                                                        ";
                        }
                        // line 524
                        echo "                                                    ";
                    }
                    // line 525
                    echo "                                                </dd>
                                            </dl>
                                        </div>

                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 530
            echo "                                </form>

                                ";
            // line 532
            if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
                // line 533
                echo "                                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 534
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "isAddedToFavoritesBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 534)], "method", false, false, false, 534)) {
                        // line 535
                        echo "                                            <button class=\"event-favorites-remove btn btn-outline-primary btn-block\" data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_favorites_remove", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 535)]), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" title=\"\" data-placement=\"bottom\"><i class=\"fas fa-heart\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from favorites"), "html", null, true);
                        echo "</button>
                                        ";
                    } else {
                        // line 537
                        echo "                                            <button class=\"event-favorites-add btn btn-outline-primary btn-block\" data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_favorites_add", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 537)]), "html", null, true);
                        echo "\" data-toggle=\"tooltip\" title=\"\" data-placement=\"bottom\"><i class=\"far fa-heart\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to favorites"), "html", null, true);
                        echo "</button>
                                        ";
                    }
                    // line 539
                    echo "                                    ";
                } else {
                    // line 540
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 540), "getPathInfo", [], "any", false, false, false, 540)), "html", null, true);
                    echo "\" class=\"btn btn-outline-primary btn-block\"><i class=\"far fa-heart\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to favorites"), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 542
                echo "                                ";
            }
            // line 543
            echo "
                            ";
        } else {
            // line 545
            echo "                                ";
            $this->loadTemplate("Global/message.html.twig", "Front/Event/event.html.twig", 545)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => "No tickets on sale at this moment"]));
            // line 546
            echo "                            ";
        }
        // line 547
        echo "                            <hr class=\"hr-md\">

                            <dl class=\"mt-5 mb-5\">
                                <dt class=\"text-muted\">
                                    <span class=\"";
        // line 551
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 551), "locale", [], "any", false, false, false, 551) == "ar")) {
            echo "float-right";
        } else {
            echo "float-left";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
        echo "</span>
                                    <a href=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 552), "slug", [], "any", false, false, false, 552)]), "html", null, true);
        echo "\" class=\"";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 552), "locale", [], "any", false, false, false, 552) == "ar")) {
            echo "float-left";
        } else {
            echo "float-right";
        }
        echo " text-sm\"><i class=\"far fa-id-card\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
        echo "</a>
                                    <div class=\"clearfix\"></div>
                                </dt>
                                <dd class=\"mr-0\">
                                    <div class=\"card-banner ";
        // line 556
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 556), "coverName", [], "any", false, false, false, 556)) ? ("") : ("organizer-preview-no-cover"));
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 556), "coverName", [], "any", false, false, false, 556)) {
            echo " style=\"height:250px;background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 556), "getCoverPath", [], "any", false, false, false, 556)), "html", null, true);
            echo "');\" ";
        }
        echo ">
                                        <article class=\"overlay bottom text-center\">
                                            <h4 class=\"card-title\"><a href=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 558), "slug", [], "any", false, false, false, 558)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 558), "name", [], "any", false, false, false, 558), "html", null, true);
        echo "</a></h4>
                                                ";
        // line 559
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 559), "logoName", [], "any", false, false, false, 559)) {
            // line 560
            echo "                                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 560), "getLogoPath", [], "any", false, false, false, 560)), "html", null, true);
            echo "\" class=\"img-100-100 d-block mx-auto mb-3 img-thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 560), "name", [], "any", false, false, false, 560), "html", null, true);
            echo "\" />
                                            ";
        }
        // line 562
        echo "                                            ";
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
            // line 563
            echo "                                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 564
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 564), "isFollowedBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 564)], "method", false, false, false, 564)) {
                    // line 565
                    echo "                                                        <button class=\"organizer-unfollow btn btn-primary btn-sm\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_following_remove", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 565), "slug", [], "any", false, false, false, 565)]), "html", null, true);
                    echo "\"><i class=\"fas fa-folder-minus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unfollow"), "html", null, true);
                    echo "</button>
                                                    ";
                } else {
                    // line 567
                    echo "                                                        <button class=\"organizer-follow btn btn-primary btn-sm\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_following_add", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 567), "slug", [], "any", false, false, false, 567)]), "html", null, true);
                    echo "\"><i class=\"fas fa-folder-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow"), "html", null, true);
                    echo "</button>
                                                    ";
                }
                // line 569
                echo "                                                ";
            } else {
                // line 570
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 570), "getPathInfo", [], "any", false, false, false, 570)), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-folder-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow"), "html", null, true);
                echo "</a>
                                                ";
            }
            // line 572
            echo "                                            ";
        }
        // line 573
        echo "                                        </article>
                                    </div>
                                </dd>
                            </dl>
                            ";
        // line 577
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "showattendees", [], "any", false, false, false, 577)) {
            // line 578
            echo "                                ";
            $context["attendeescount"] = twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getTotalOrderElementsQuantitySum", [0 => 1, 1 => "all", 2 => "ROLE_ATTENDEE"], "method", false, false, false, 578);
            // line 579
            echo "                                ";
            if (($context["attendeescount"] ?? null)) {
                // line 580
                echo "                                    <hr>
                                    <dl class=\"mt-5\">
                                        <dt class=\"text-muted mb-3\">
                                            <span class=\"";
                // line 583
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 583), "locale", [], "any", false, false, false, 583) == "ar")) {
                    echo "float-right";
                } else {
                    echo "float-left";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees"), "html", null, true);
                echo " <b>(";
                echo twig_escape_filter($this->env, ($context["attendeescount"] ?? null), "html", null, true);
                echo ")</b></span>
                                            <a href=\"#\" class=\"";
                // line 584
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 584), "locale", [], "any", false, false, false, 584) == "ar")) {
                    echo "float-left";
                } else {
                    echo "float-right";
                }
                echo " text-sm\" data-toggle=\"modal\" data-target=\"#attendees-modal\"><i class=\"fas fa-users\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See all"), "html", null, true);
                echo "</a>
                                            <div class=\"modal fade\" id=\"attendees-modal\">
                                                <div class=\"modal-dialog modal-dialog-centered\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <div class=\"modal-title h4\">";
                // line 589
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendees"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, ($context["attendeescount"] ?? null), "html", null, true);
                echo ")</div>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <div class=\"card border-0 card-body overflow-auto text-nowrap\">
                                                                <div class=\"avatar-list py-4\">
                                                                    ";
                // line 595
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["hasboughtticketfor" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 595), "role" => "attendee"]], "method", false, false, false, 595), "getQuery", [], "method", false, false, false, 595), "getResult", [], "method", false, false, false, 595));
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
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 596
                    echo "                                                                        ";
                    $this->loadTemplate("Global/user-avatar.html.twig", "Front/Event/event.html.twig", 596)->display(twig_array_merge($context, ["user" => $context["user"], "showusernametooltip" => true]));
                    // line 597
                    echo "                                                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 598
                echo "                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
                // line 602
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                echo "</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </dt>
                                        <dd class=\"mr-0\">
                                            <div class=\"card border-0 card-body\">
                                                <div class=\"avatar-list avatar-list-stacked\">
                                                    ";
                // line 612
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getUsers", [0 => ["hasboughtticketfor" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 612), "limit" => 12, "role" => "attendee"]], "method", false, false, false, 612), "getQuery", [], "method", false, false, false, 612), "getResult", [], "method", false, false, false, 612));
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
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 613
                    echo "                                                        ";
                    $this->loadTemplate("Global/user-avatar.html.twig", "Front/Event/event.html.twig", 613)->display(twig_array_merge($context, ["user" => $context["user"], "showusernametooltip" => true]));
                    // line 614
                    echo "                                                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 615
                echo "                                                    ";
                if ((($context["attendeescount"] ?? null) > 12)) {
                    // line 616
                    echo "                                                        <span class=\"avatar\">";
                    echo twig_escape_filter($this->env, (($context["attendeescount"] ?? null) - 12), "html", null, true);
                    echo "</span>
                                                    ";
                }
                // line 618
                echo "                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                ";
            }
            // line 623
            echo "                            ";
        }
        // line 624
        echo "                            ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "newsletter_enabled"], "method", false, false, false, 624) == "yes") && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_api_key"], "method", false, false, false, 624)) && twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "mailchimp_list_id"], "method", false, false, false, 624))) {
            // line 625
            echo "                                <div class=\"mt-5\">
                                    ";
            // line 626
            $this->loadTemplate("Global/newsletter-box.html.twig", "Front/Event/event.html.twig", 626)->display($context);
            // line 627
            echo "                                </div>
                            ";
        }
        // line 629
        echo "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 634
        $context["othereventsbythisorganizer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 634), "slug", [], "any", false, false, false, 634), "limit" => 8, "otherthan" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 634)]], "method", false, false, false, 634), "getQuery", [], "method", false, false, false, 634), "getResult", [], "method", false, false, false, 634);
        // line 635
        echo "            ";
        if ((twig_length_filter($this->env, ($context["othereventsbythisorganizer"] ?? null)) > 0)) {
            // line 636
            echo "                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"mt-5 mb-4 text-center\">";
            // line 638
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Other events by %organizername%", ["%organizername%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 638), "name", [], "any", false, false, false, 638)]), "html", null, true);
            echo "</h3>
                        <div class=\"owl-init owl-carousel\" data-margin=\"15\" data-items=\"4\" data-dots=\"false\" data-nav=\"true\" data-autoplay=\"true\" data-loop=\"false\">
                            ";
            // line 640
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["othereventsbythisorganizer"] ?? null));
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
                // line 641
                echo "                                ";
                $this->loadTemplate("Global/event-card.html.twig", "Front/Event/event.html.twig", 641)->display(twig_array_merge($context, ["event" => $context["event"]]));
                // line 642
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 643
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 647
        echo "
            ";
        // line 648
        $context["similareventscriteria"] = ["category" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "category", [], "any", false, false, false, 648), "slug", [], "any", false, false, false, 648), "limit" => 8, "otherthan" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 648)];
        // line 649
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getFirstVenue", [], "any", false, false, false, 649)) {
            // line 650
            echo "                ";
            $context["similareventscriteria"] = twig_array_merge(($context["similareventscriteria"] ?? null), ["country" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getFirstVenue", [], "any", false, false, false, 650), "country", [], "any", false, false, false, 650), "slug", [], "any", false, false, false, 650)]);
            // line 651
            echo "            ";
        }
        // line 652
        echo "            ";
        $context["similarevents"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ($context["similareventscriteria"] ?? null)], "method", false, false, false, 652), "getQuery", [], "method", false, false, false, 652), "getResult", [], "method", false, false, false, 652);
        // line 653
        echo "
            ";
        // line 654
        if ((twig_length_filter($this->env, ($context["similarevents"] ?? null)) > 0)) {
            // line 655
            echo "                <div class=\"row\">
                    <div class=\"col-12\">
                        <h3 class=\"mt-5 mb-4 text-center\">";
            // line 657
            echo "Similar events";
            echo "</h3>
                        <div class=\"owl-init owl-carousel\" data-margin=\"15\" data-items=\"4\" data-dots=\"false\" data-nav=\"true\" data-autoplay=\"true\" data-loop=\"false\">
                            ";
            // line 659
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["similarevents"] ?? null));
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
                // line 660
                echo "                                ";
                $this->loadTemplate("Global/event-card.html.twig", "Front/Event/event.html.twig", 660)->display(twig_array_merge($context, ["event" => $context["event"]]));
                // line 661
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 662
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 666
        echo "
        </div>
    </section>

";
    }

    // line 672
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 673
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("event");
        echo "
";
    }

    public function getTemplateName()
    {
        return "Front/Event/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1896 => 673,  1892 => 672,  1884 => 666,  1878 => 662,  1864 => 661,  1861 => 660,  1844 => 659,  1839 => 657,  1835 => 655,  1833 => 654,  1830 => 653,  1827 => 652,  1824 => 651,  1821 => 650,  1818 => 649,  1816 => 648,  1813 => 647,  1807 => 643,  1793 => 642,  1790 => 641,  1773 => 640,  1768 => 638,  1764 => 636,  1761 => 635,  1759 => 634,  1752 => 629,  1748 => 627,  1746 => 626,  1743 => 625,  1740 => 624,  1737 => 623,  1730 => 618,  1724 => 616,  1721 => 615,  1707 => 614,  1704 => 613,  1687 => 612,  1674 => 602,  1668 => 598,  1654 => 597,  1651 => 596,  1634 => 595,  1623 => 589,  1609 => 584,  1597 => 583,  1592 => 580,  1589 => 579,  1586 => 578,  1584 => 577,  1578 => 573,  1575 => 572,  1567 => 570,  1564 => 569,  1556 => 567,  1548 => 565,  1545 => 564,  1542 => 563,  1539 => 562,  1531 => 560,  1529 => 559,  1523 => 558,  1512 => 556,  1497 => 552,  1487 => 551,  1481 => 547,  1478 => 546,  1475 => 545,  1471 => 543,  1468 => 542,  1460 => 540,  1457 => 539,  1449 => 537,  1441 => 535,  1438 => 534,  1435 => 533,  1433 => 532,  1429 => 530,  1415 => 525,  1412 => 524,  1404 => 522,  1401 => 521,  1399 => 520,  1392 => 519,  1389 => 518,  1387 => 517,  1382 => 514,  1376 => 513,  1372 => 511,  1369 => 510,  1363 => 508,  1361 => 507,  1356 => 506,  1348 => 504,  1346 => 503,  1340 => 500,  1336 => 498,  1333 => 497,  1329 => 496,  1321 => 491,  1317 => 489,  1310 => 485,  1296 => 480,  1292 => 478,  1285 => 474,  1275 => 471,  1267 => 470,  1259 => 469,  1251 => 468,  1245 => 465,  1241 => 464,  1236 => 461,  1222 => 459,  1220 => 458,  1210 => 457,  1206 => 455,  1204 => 454,  1191 => 444,  1182 => 438,  1164 => 433,  1161 => 432,  1158 => 431,  1155 => 430,  1149 => 427,  1144 => 425,  1140 => 424,  1134 => 421,  1130 => 419,  1127 => 418,  1124 => 417,  1121 => 416,  1119 => 415,  1114 => 412,  1111 => 411,  1105 => 409,  1102 => 408,  1100 => 407,  1096 => 406,  1089 => 402,  1085 => 401,  1079 => 398,  1075 => 396,  1072 => 395,  1069 => 394,  1066 => 393,  1063 => 392,  1060 => 391,  1057 => 390,  1054 => 389,  1051 => 388,  1048 => 387,  1041 => 382,  1035 => 379,  1032 => 378,  1021 => 377,  1017 => 376,  1014 => 375,  1010 => 373,  1004 => 371,  1002 => 370,  998 => 369,  995 => 368,  992 => 367,  985 => 366,  982 => 365,  976 => 364,  973 => 363,  970 => 362,  967 => 360,  964 => 359,  956 => 356,  938 => 341,  934 => 339,  932 => 338,  928 => 337,  921 => 335,  916 => 332,  912 => 330,  907 => 327,  899 => 325,  896 => 324,  882 => 323,  879 => 322,  862 => 321,  858 => 319,  856 => 318,  848 => 313,  841 => 309,  834 => 305,  828 => 302,  821 => 298,  814 => 294,  808 => 291,  801 => 287,  794 => 283,  788 => 280,  781 => 276,  774 => 272,  768 => 269,  761 => 265,  754 => 261,  746 => 255,  738 => 253,  735 => 252,  732 => 251,  724 => 249,  716 => 247,  713 => 246,  710 => 245,  708 => 244,  699 => 240,  681 => 225,  673 => 222,  668 => 219,  666 => 218,  663 => 217,  658 => 214,  647 => 212,  643 => 211,  638 => 208,  636 => 207,  628 => 202,  625 => 201,  619 => 197,  608 => 195,  605 => 194,  594 => 192,  591 => 191,  580 => 189,  577 => 188,  566 => 186,  563 => 185,  552 => 183,  549 => 182,  541 => 180,  538 => 179,  530 => 177,  527 => 176,  516 => 174,  514 => 173,  508 => 170,  505 => 169,  502 => 168,  495 => 164,  490 => 162,  487 => 161,  484 => 160,  477 => 155,  463 => 151,  455 => 150,  452 => 149,  448 => 148,  442 => 145,  439 => 144,  437 => 143,  433 => 141,  427 => 137,  414 => 135,  410 => 134,  404 => 131,  401 => 130,  398 => 129,  392 => 126,  388 => 125,  385 => 124,  382 => 123,  376 => 120,  372 => 119,  369 => 118,  366 => 117,  360 => 114,  356 => 113,  353 => 112,  350 => 111,  344 => 108,  340 => 107,  337 => 106,  334 => 105,  326 => 102,  322 => 101,  319 => 100,  316 => 99,  310 => 96,  306 => 95,  303 => 94,  301 => 93,  297 => 91,  290 => 87,  285 => 85,  282 => 84,  279 => 83,  271 => 80,  253 => 65,  249 => 63,  246 => 62,  244 => 61,  240 => 60,  233 => 58,  227 => 55,  217 => 48,  209 => 47,  201 => 41,  198 => 40,  196 => 39,  193 => 38,  190 => 37,  187 => 36,  184 => 35,  181 => 34,  178 => 33,  175 => 32,  172 => 31,  169 => 30,  166 => 29,  163 => 28,  160 => 27,  157 => 26,  155 => 25,  152 => 24,  148 => 23,  142 => 20,  138 => 19,  133 => 18,  129 => 17,  125 => 16,  120 => 15,  115 => 14,  109 => 12,  70 => 10,  68 => 9,  63 => 8,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Event/event.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Event/event.html.twig");
    }
}
