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

/* Global/layout.html.twig */
class __TwigTemplate_0a135ac1d566957b1f4dd5562ddff560d839129f5403945be21b197aa1b85e91 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta_dynamic_seo' => [$this, 'block_meta_dynamic_seo'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "get", [0 => "_locale"], "method", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <![endif]-->
        <meta charset=\"utf-8\" />
        <meta name=\"robots\" content=\"index, follow, all\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 10), "html", null, true);
        echo "</title>
        <meta property=\"og:site_name\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 11), "html", null, true);
        echo "\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "schemeAndHttpHost", [], "any", false, false, false, 13) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 13), "requestUri", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" />

        <meta name=\"twitter:card\" content=\"summary_large_image\" />
        <meta name=\"twitter:site\" content=\"@";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_slug"], "method", false, false, false, 16), "html", null, true);
        echo "\" />
        ";
        // line 17
        $this->displayBlock('meta_dynamic_seo', $context, $blocks);
        // line 28
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 28), "getFaviconPath", [], "any", false, false, false, 28))), "html", null, true);
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "schemeAndHttpHost", [], "any", false, false, false, 29) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "requestUri", [], "any", false, false, false, 29)), "html", null, true);
        echo "\" />

        <meta name=\"apple-mobile-web-app-title\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 31), "html", null, true);
        echo "\" />
        <meta name=\"twitter:site\" content=\"@";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 32), "html", null, true);
        echo "\" />
        <meta name=\"application-name\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 33), "html", null, true);
        echo "\" />
        <meta name=\"msapplication-tooltip\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "locale", [], "any", false, false, false, 34))], "method", false, false, false, 34), "html", null, true);
        echo "\" />

        ";
        // line 37
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 37) != "") &&  !(null === twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 37)))) {
            // line 38
            echo "            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 39), "html", null, true);
            echo "\"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', '";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 47), "html", null, true);
            echo "');
            </script>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        ";
        // line 54
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 54), "locale", [], "any", false, false, false, 54) == "fr")) {
            // line 55
            echo "            ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.fr");
            echo "
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 56
($context["app"] ?? null), "request", [], "any", false, false, false, 56), "locale", [], "any", false, false, false, 56) == "ar")) {
            // line 57
            echo "            ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.ar");
            echo "
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["app"] ?? null), "request", [], "any", false, false, false, 58), "locale", [], "any", false, false, false, 58) == "es")) {
            // line 59
            echo "            ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.es");
            echo "
        ";
        }
        // line 61
        echo "
        ";
        // line 63
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags(("app." . twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_theme"], "method", false, false, false, 63)));
        echo "

        ";
        // line 65
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 67
        echo "
        ";
        // line 69
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 69) != "") &&  !(null === twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 69)))) {
            // line 70
            echo "            <style>
                ";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 71);
            echo "
            </style>
        ";
        }
        // line 74
        echo "
    </head>
    <body class=\"bg-gray ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 76), "locale", [], "any", false, false, false, 76) == "ar")) {
            echo "rtl";
        }
        echo "\" data-currency-ccy=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_ccy"], "method", false, false, false, 76), "html", null, true);
        echo "\" data-currency-symbol=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 76), "html", null, true);
        echo "\" data-currency-position=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 76), "html", null, true);
        echo "\" data-timezone=\"";
        echo twig_escape_filter($this->env, ($context["date_timezone"] ?? null), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_cookie_policy_bar"], "method", false, false, false, 76) == "yes")) {
            echo "data-cookie-bar-page-link=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "cookie_policy_page_slug"], "method", false, false, false, 76)]), "html", null, true);
            echo "\" ";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEnv", [0 => "DEMO_MODE"], "method", false, false, false, 76) == "1")) {
            echo "data-demo-mode=\"1\"";
        }
        echo ">

        ";
        // line 78
        $this->loadTemplate("Global/header.html.twig", "Global/layout.html.twig", 78)->display($context);
        // line 79
        echo "
        ";
        // line 80
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 81
            echo "            ";
            $this->loadTemplate("Global/message.html.twig", "Global/layout.html.twig", 81)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are connected as \"%username%", ["%username%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 81), "username", [], "any", false, false, false, 81)]) . "\", <a href=\"") . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index", ["_switch_user" => "_exit"])) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here")) . "</a> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("to return to your dashboard"))]));
            // line 82
            echo "        ";
        }
        // line 83
        echo "
    ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "
    ";
        // line 86
        $this->loadTemplate("Global/footer.html.twig", "Global/layout.html.twig", 86)->display($context);
        // line 87
        echo "
    ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 89
            echo "        ";
            $this->loadTemplate("Global/dashboard-items-sidenav.html.twig", "Global/layout.html.twig", 89)->display($context);
            // line 90
            echo "    ";
        }
        // line 91
        echo "
    ";
        // line 92
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

    ";
        // line 94
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 97));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 98
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 99
                echo "            <div class=\"flash-message\" data-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
                echo "\"></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
    <script id=\"top-search-result-template\" type=\"text/x-handlebars-template\">
        ";
        // line 104
        $this->loadTemplate("Global/event-preview-horizontal.html.twig", "Global/layout.html.twig", 104)->display(twig_array_merge($context, ["handlebarstemplate" => true]));
        // line 105
        echo "    </script>

    ";
        // line 107
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_back_to_top_button"], "method", false, false, false, 107) == "yes")) {
            // line 108
            echo "        <a class=\"material-scrolltop cursor-pointer btn btn-sm btn-primary\"></a>
    ";
        }
        // line 110
        echo "
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_meta_dynamic_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 18), "locale", [], "any", false, false, false, 18))], "method", false, false, false, 18), "html", null, true);
        echo "\" />
            <meta name=\"keywords\" content=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_keywords_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 19), "locale", [], "any", false, false, false, 19))], "method", false, false, false, 19), "html", null, true);
        echo "\" />
            <meta property=\"og:title\" content=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 20), "html", null, true);
        echo "\" />
            <meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 21), "getOgImagePath", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" />
            <meta property=\"og:description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 22), "locale", [], "any", false, false, false, 22))], "method", false, false, false, 22), "html", null, true);
        echo "\" />
            <meta name=\"twitter:title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 23), "html", null, true);
        echo "\" />
            <meta name=\"twitter:image\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 24), "getOgImagePath", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" />
            <meta name=\"twitter:image:alt\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 25), "locale", [], "any", false, false, false, 25))], "method", false, false, false, 25), "html", null, true);
        echo "\" />
            <meta name=\"twitter:description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => ("website_description_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26))], "method", false, false, false, 26), "html", null, true);
        echo "\" />
        ";
    }

    // line 65
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "        ";
    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    ";
    }

    public function getTemplateName()
    {
        return "Global/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 95,  373 => 94,  367 => 84,  363 => 66,  359 => 65,  353 => 26,  349 => 25,  345 => 24,  341 => 23,  337 => 22,  333 => 21,  329 => 20,  325 => 19,  320 => 18,  316 => 17,  310 => 10,  304 => 110,  300 => 108,  298 => 107,  294 => 105,  292 => 104,  288 => 102,  282 => 101,  271 => 99,  266 => 98,  262 => 97,  259 => 96,  257 => 94,  252 => 92,  249 => 91,  246 => 90,  243 => 89,  241 => 88,  238 => 87,  236 => 86,  233 => 85,  231 => 84,  228 => 83,  225 => 82,  222 => 81,  220 => 80,  217 => 79,  215 => 78,  190 => 76,  186 => 74,  180 => 71,  177 => 70,  174 => 69,  171 => 67,  169 => 65,  163 => 63,  160 => 61,  154 => 59,  152 => 58,  147 => 57,  145 => 56,  140 => 55,  137 => 54,  132 => 51,  129 => 50,  123 => 47,  112 => 39,  109 => 38,  106 => 37,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  84 => 29,  79 => 28,  77 => 17,  73 => 16,  67 => 13,  62 => 11,  56 => 10,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/layout.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/layout.html.twig");
    }
}
