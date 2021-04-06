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

/* Global/footer.html.twig */
class __TwigTemplate_d91bb7aa69fcc30b2aab9da481a6bcbee15dff5a3bf15dce1263198419fd6f95 extends \Twig\Template
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
        echo "<footer class=\"section-footer border-top-gray\">
    <div class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 2), "html", null, true);
        echo "\">
        <section class=\"footer-top padding-top\">
            <div class=\"row\">
                <aside class=\"col-sm-6 col-lg-3\">
                    <h5 class=\"title text-dark\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "first-footer-section-menu"]], "method", false, false, false, 6), "getQuery", [], "method", false, false, false, 6), "getOneOrNullResult", [], "method", false, false, false, 6), "getHeader", [], "method", false, false, false, 6), "html", null, true);
        echo "</h5>
                    <ul class=\"list-unstyled\">
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "first-footer-section-menu"]], "method", false, false, false, 8), "getQuery", [], "method", false, false, false, 8), "getOneOrNullResult", [], "method", false, false, false, 8), "getMenuElements", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["menuElement"]) {
            // line 9
            echo "                            <li class=\"mb-1\">
                                ";
            // line 10
            $context["link"] = "#0";
            // line 11
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 11)) {
                // line 12
                echo "                                    ";
                $context["link"] = twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 12);
                // line 13
                echo "                                ";
            }
            // line 14
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 14)) {
                // line 15
                echo "                                    ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "changeLinkLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "locale", [], "any", false, false, false, 15), 1 => twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 15)], "method", false, false, false, 15);
                // line 16
                echo "                                ";
            }
            // line 17
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 18)) {
                // line 19
                echo "                                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 19), "html", null, true);
                echo " fa-fw\"></i>
                                    ";
            }
            // line 21
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 21)) {
                // line 22
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 22), "html", null, true);
                echo "
                                    ";
            }
            // line 24
            echo "                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                    </ul>
                </aside>
                <aside class=\"col-sm-6 col-lg-3\">
                    <h5 class=\"title text-dark\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "second-footer-section-menu"]], "method", false, false, false, 30), "getQuery", [], "method", false, false, false, 30), "getOneOrNullResult", [], "method", false, false, false, 30), "getHeader", [], "method", false, false, false, 30), "html", null, true);
        echo "</h5>
                    <ul class=\"list-unstyled\">
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "second-footer-section-menu"]], "method", false, false, false, 32), "getQuery", [], "method", false, false, false, 32), "getOneOrNullResult", [], "method", false, false, false, 32), "getMenuElements", [], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["menuElement"]) {
            // line 33
            echo "                            <li class=\"mb-1\">
                                ";
            // line 34
            $context["link"] = "#0";
            // line 35
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 35)) {
                // line 36
                echo "                                    ";
                $context["link"] = twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 36);
                // line 37
                echo "                                ";
            }
            // line 38
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 38)) {
                // line 39
                echo "                                    ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "changeLinkLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "locale", [], "any", false, false, false, 39), 1 => twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                // line 40
                echo "                                ";
            }
            // line 41
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\">
                                    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 42)) {
                // line 43
                echo "                                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 43), "html", null, true);
                echo " fa-fw\"></i>
                                    ";
            }
            // line 45
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 46), "html", null, true);
                echo "
                                    ";
            }
            // line 48
            echo "                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </ul>
                </aside>
                <aside class=\"col-sm-6 col-lg-3\">
                    <h5 class=\"title text-dark\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "third-footer-section-menu"]], "method", false, false, false, 54), "getQuery", [], "method", false, false, false, 54), "getOneOrNullResult", [], "method", false, false, false, 54), "getHeader", [], "method", false, false, false, 54), "html", null, true);
        echo "</h5>
                    <ul class=\"list-unstyled\">
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getMenus", [0 => ["slug" => "third-footer-section-menu"]], "method", false, false, false, 56), "getQuery", [], "method", false, false, false, 56), "getOneOrNullResult", [], "method", false, false, false, 56), "getMenuElements", [], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["menuElement"]) {
            // line 57
            echo "                            ";
            $context["link"] = "#0";
            // line 58
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 58)) {
                // line 59
                echo "                                ";
                $context["link"] = twig_get_attribute($this->env, $this->source, $context["menuElement"], "customLink", [], "any", false, false, false, 59);
                // line 60
                echo "                            ";
            }
            // line 61
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 61)) {
                // line 62
                echo "                                ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "changeLinkLocale", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "locale", [], "any", false, false, false, 62), 1 => twig_get_attribute($this->env, $this->source, $context["menuElement"], "link", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                // line 63
                echo "                            ";
            }
            // line 64
            echo "                            ";
            if ((($context["link"] ?? null) == "footer_categories_section")) {
                // line 65
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => ["featured" => true, "limit" => 4]], "method", false, false, false, 65), "getQuery", [], "method", false, false, false, 65), "getResult", [], "method", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 66
                    echo "                                    <li class=\"mb-1\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "</a></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "                                ";
            } else {
                // line 69
                echo "                                <li class=\"mb-1\">
                                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">
                                        ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                                            <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "icon", [], "any", false, false, false, 72), "html", null, true);
                    echo " fa-fw\"></i>
                                        ";
                }
                // line 74
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 74)) {
                    // line 75
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuElement"], "label", [], "any", false, false, false, 75), "html", null, true);
                    echo "
                                        ";
                }
                // line 77
                echo "                                    </a>
                                </li>
                            ";
            }
            // line 80
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </ul>
                </aside>
                <aside class=\"col-sm-6 col-lg-3\">
                    <article>
                        ";
        // line 85
        if (((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 85) != "") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 85) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "facebook_url"], "method", false, false, false, 85) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "instagram_url"], "method", false, false, false, 85) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "youtube_url"], "method", false, false, false, 85) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "twitter_url"], "method", false, false, false, 85) != ""))) {
            // line 86
            echo "                            <h5 class=\"title text-dark\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Us"), "html", null, true);
            echo "</h5>
                        ";
        }
        // line 88
        echo "
                        ";
        // line 89
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 89) != "") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 89) != ""))) {
            // line 90
            echo "                            <p>
                                <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone"), "html", null, true);
            echo ": </strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 91), "html", null, true);
            echo " <br>
                                <strong>";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fax"), "html", null, true);
            echo ":</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 92), "html", null, true);
            echo "
                            </p>
                        ";
        }
        // line 95
        echo "
                        ";
        // line 96
        if (((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "facebook_url"], "method", false, false, false, 96) != "") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "instagram_url"], "method", false, false, false, 96) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "youtube_url"], "method", false, false, false, 96) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "twitter_url"], "method", false, false, false, 96) != ""))) {
            // line 97
            echo "                            <div class=\"btn-group white\">
                                ";
            // line 98
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "facebook_url"], "method", false, false, false, 98) != "")) {
                // line 99
                echo "                                    <a class=\"btn btn-facebook\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Facebook"), "html", null, true);
                echo "\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "facebook_url"], "method", false, false, false, 99), "html", null, true);
                echo "\"><i class=\"fab fa-facebook-f fa-fw\"></i></a>
                                    ";
            }
            // line 101
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "instagram_url"], "method", false, false, false, 101) != "")) {
                // line 102
                echo "                                    <a class=\"btn btn-instagram\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Instagram"), "html", null, true);
                echo "\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "instagram_url"], "method", false, false, false, 102), "html", null, true);
                echo "\"><i class=\"fab fa-instagram fa-fw\"></i></a>
                                    ";
            }
            // line 104
            echo "
                                ";
            // line 105
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "youtube_url"], "method", false, false, false, 105) != "")) {
                // line 106
                echo "                                    <a class=\"btn btn-youtube\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Youtube"), "html", null, true);
                echo "\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "youtube_url"], "method", false, false, false, 106), "html", null, true);
                echo "\"><i class=\"fab fa-youtube fa-fw\"></i></a>
                                    ";
            }
            // line 108
            echo "
                                ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "twitter_url"], "method", false, false, false, 109) != "")) {
                // line 110
                echo "                                    <a class=\"btn btn-twitter\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Twitter"), "html", null, true);
                echo "\" target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "twitter_url"], "method", false, false, false, 110), "html", null, true);
                echo "\"><i class=\"fab fa-twitter fa-fw\"></i></a>
                                    ";
            }
            // line 112
            echo "                            </div>
                        ";
        }
        // line 114
        echo "
                        <div class=\"clearfix\"></div>



                        ";
        // line 119
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 119), "get", [0 => "_route"], "method", false, false, false, 119) && (twig_length_filter($this->env, twig_split_filter($this->env, ($context["locales"] ?? null), "|")) > 2))) {
            // line 120
            echo "                            <h5 class=\"title mt-4 display-inline-block\"><i class=\"fas fa-globe\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
            echo "</h5>
                            <div class=\"dropdown display-inline-block ml-5\">
                                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"text-dark\">
                                    ";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getLangName(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "locale", [], "any", false, false, false, 123)), "html", null, true);
            echo " <span class=\"flag flag-";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getLangFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "locale", [], "any", false, false, false, 123)), "html", null, true);
            echo " ml-2\"></span>&nbsp;<i class=\"fas fa-caret-down\"></i>
                                </a>
                                <div class=\"dropdown-menu\">
                                    ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, ($context["locales"] ?? null), "|"));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                if ((($context["locale"] != "") && ($context["locale"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 126), "locale", [], "any", false, false, false, 126)))) {
                    // line 127
                    echo "                                        <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 127), "get", [0 => "_route"], "method", false, false, false, 127), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 127), "get", [0 => "_route_params"], "method", false, false, false, 127), ["_locale" => $context["locale"]])), "html", null, true);
                    echo "\">
                                            ";
                    // line 128
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getLangName($context["locale"]), "html", null, true);
                    echo "
                                            <span class=\"flag flag-";
                    // line 129
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->getLangFlag($context["locale"]), "html", null, true);
                    echo " float-right mr-2\"></span>
                                        </a>
                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                                </div>
                            </div>

                        ";
        }
        // line 136
        echo "
                    </article>
                </aside>
            </div>
            <br>
        </section>
        <section class=\"footer-bottom row\">
            <div class=\"col-sm-12\">
                <p class=\"text-center text-dark\">
                    ";
        // line 145
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_terms_of_service_page"], "method", false, false, false, 145) == "yes")) {
            // line 146
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "terms_of_service_page_slug"], "method", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"text-dark\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms of service"), "html", null, true);
            echo "</a>
                        <span class=\"text-gray\">|</span>
                    ";
        }
        // line 149
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_privacy_policy_page"], "method", false, false, false, 149) == "yes")) {
            // line 150
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "privacy_policy_page_slug"], "method", false, false, false, 150)]), "html", null, true);
            echo "\" class=\"text-dark\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privacy policy"), "html", null, true);
            echo "</a>
                        <span class=\"text-gray\">|</span>
                    ";
        }
        // line 153
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_cookie_policy_page"], "method", false, false, false, 153) == "yes")) {
            // line 154
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "cookie_policy_page_slug"], "method", false, false, false, 154)]), "html", null, true);
            echo "\" class=\"text-dark\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cookie policy"), "html", null, true);
            echo "</a>
                        <span class=\"text-gray\">|</span>
                    ";
        }
        // line 157
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_gdpr_compliance_page"], "method", false, false, false, 157) == "yes")) {
            // line 158
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "gdpr_compliance_page_slug"], "method", false, false, false, 158)]), "html", null, true);
            echo "\" class=\"text-dark\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("GDPR compliance"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 160
        echo "                </p>
            </div>
            <div class=\"col-sm-12\">
                <p class=\"text-dark-50 text-center\">
                    ";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copyright"), "html", null, true);
        echo " &copy;  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
                </p>
            </div>
        </section>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "Global/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 164,  474 => 160,  466 => 158,  463 => 157,  454 => 154,  451 => 153,  442 => 150,  439 => 149,  430 => 146,  428 => 145,  417 => 136,  411 => 132,  401 => 129,  397 => 128,  392 => 127,  387 => 126,  379 => 123,  372 => 120,  370 => 119,  363 => 114,  359 => 112,  351 => 110,  349 => 109,  346 => 108,  338 => 106,  336 => 105,  333 => 104,  325 => 102,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  307 => 96,  304 => 95,  296 => 92,  290 => 91,  287 => 90,  285 => 89,  282 => 88,  276 => 86,  274 => 85,  268 => 81,  262 => 80,  257 => 77,  251 => 75,  248 => 74,  242 => 72,  240 => 71,  236 => 70,  233 => 69,  230 => 68,  219 => 66,  214 => 65,  211 => 64,  208 => 63,  205 => 62,  202 => 61,  199 => 60,  196 => 59,  193 => 58,  190 => 57,  186 => 56,  181 => 54,  176 => 51,  168 => 48,  162 => 46,  159 => 45,  153 => 43,  151 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  126 => 34,  123 => 33,  119 => 32,  114 => 30,  109 => 27,  101 => 24,  95 => 22,  92 => 21,  86 => 19,  84 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  59 => 10,  56 => 9,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/footer.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/footer.html.twig");
    }
}
