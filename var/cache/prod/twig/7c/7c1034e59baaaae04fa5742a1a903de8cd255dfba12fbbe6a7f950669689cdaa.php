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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_1eddf82955695afa4b1c6428fce31f9ebebde38bf8d63547561bc4dc58ccc33f extends \Twig\Template
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
        $context["pagetitle"] = ("500 - " . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error"));
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 4), "get", [0 => "_locale"], "method", false, false, false, 4), "html", null, true);
        echo "\">
    <head>
        <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 6), "html", null, true);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 7), "getFaviconPath", [], "any", false, false, false, 7))), "html", null, true);
        echo "\" />

        ";
        // line 10
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 10) != "") &&  !(null === twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 10)))) {
            // line 11
            echo "            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src=\"https://www.googletagmanager.com/gtag/js?id=";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 12), "html", null, true);
            echo "\"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', '";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_analytics_code"], "method", false, false, false, 20), "html", null, true);
            echo "');
            </script>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "

        ";
        // line 27
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "fr")) {
            // line 28
            echo "            ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.fr");
            echo "
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
($context["app"] ?? null), "request", [], "any", false, false, false, 29), "locale", [], "any", false, false, false, 29) == "ar")) {
            // line 30
            echo "            ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.ar");
            echo "
        ";
        }
        // line 32
        echo "
        ";
        // line 34
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags(("app." . twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_theme"], "method", false, false, false, 34)));
        echo "

        ";
        // line 37
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 37) != "") &&  !(null === twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 37)))) {
            // line 38
            echo "            <style>
                ";
            // line 39
            echo twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "custom_css"], "method", false, false, false, 39);
            echo "
            </style>
        ";
        }
        // line 42
        echo "
    </head>

    <body class=\"vh-100 ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 45), "locale", [], "any", false, false, false, 45) == "ar")) {
            echo "rtl";
        }
        echo "\" data-currency-ccy=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_ccy"], "method", false, false, false, 45), "html", null, true);
        echo "\" data-currency-symbol=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 45), "html", null, true);
        echo "\" data-currency-position=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 45), "html", null, true);
        echo "\" data-timezone=\"";
        echo twig_escape_filter($this->env, ($context["date_timezone"] ?? null), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_cookie_policy_bar"], "method", false, false, false, 45) == "yes")) {
            echo "data-cookie-bar-page-link=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "cookie_policy_page_slug"], "method", false, false, false, 45)]), "html", null, true);
            echo "\" ";
        }
        echo " ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEnv", [0 => "DEMO_MODE"], "method", false, false, false, 45) == "1")) {
            echo "data-demo-mode=\"1\"";
        }
        echo ">

        <div class=\"container h-100\">
            <div class=\"row align-items-center h-100\">
                <div class=\"col-lg-6 mx-auto\">
                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/500.png"), "html", null, true);
        echo "\" class=\"img-fluid\" />
                </div>
                <div class=\"col-lg-6 mx-auto\">
                    <div class=\"jumbotron\">
                        <h1>
                            ";
        // line 55
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo "
                        </h1>
                        <h4>
                            ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An error has occured while processing your request"), "html", null, true);
        echo "
                        </h4>
                        <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-primary mt-3\">
                            <i class=\"fas fa-home fa-fw\"></i> ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("return to the homepage"), "html", null, true);
        echo "
                        </a>
                        <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-outline-dark mt-3\">
                            <i class=\"fas fa-undo\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go back"), "html", null, true);
        echo "
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script id=\"top-search-result-template\" type=\"text/x-handlebars-template\">
            ";
        // line 72
        $this->loadTemplate("Global/event-preview-horizontal.html.twig", "@Twig/Exception/error500.html.twig", 72)->display(twig_array_merge($context, ["handlebarstemplate" => true]));
        // line 73
        echo "        </script>

        ";
        // line 75
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 75,  202 => 73,  200 => 72,  189 => 64,  183 => 61,  179 => 60,  174 => 58,  168 => 55,  160 => 50,  132 => 45,  127 => 42,  121 => 39,  118 => 38,  115 => 37,  109 => 34,  106 => 32,  100 => 30,  98 => 29,  93 => 28,  90 => 27,  85 => 24,  82 => 23,  76 => 20,  65 => 12,  62 => 11,  59 => 10,  54 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error500.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/TwigBundle/Exception/error500.html.twig");
    }
}
