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

/* Dashboard/Shared/Order/details.html.twig */
class __TwigTemplate_a10a56f95a69ef35d62b98bb905a55315392b14e0011e20bbdeb234db2363256 extends \Twig\Template
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
        // line 3
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order details");
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 6
            $context["parentpagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage orders");
            // line 7
            $context["parentpagelink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_orders");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 9
            $context["parentpagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recent orders");
            // line 10
            $context["parentpagelink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_orders");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 12
            $context["parentpagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My tickets");
            // line 13
            $context["parentpagelink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_orders");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE")) {
            // line 15
            $context["parentpagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My orders");
            // line 16
            $context["parentpagelink"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_pointofsale_orders");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Order/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
    ";
        // line 23
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), ($context["parentpagelink"] ?? null) => ($context["parentpagetitle"] ?? null)], 1 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 24
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Order/details.html.twig", 24)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 25
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 27), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 30
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Order/details.html.twig", 30)->display($context);
        // line 31
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h4><span class=\"badge badge-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getStatusClass", [], "any", false, false, false, 38), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "stringifyStatus", [], "any", false, false, false, 38)), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order") . " #") . twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 38)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("placed on")) . " ") . twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "createdAt", [], "any", false, false, false, 38), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "locale", [], "any", false, false, false, 38), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null))), "html", null, true);
        echo "</h4>
                                </div>
                                <div class=\"card-body\">

                                    ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "note", [], "any", false, false, false, 42)) {
            // line 43
            echo "                                        ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Order/details.html.twig", 43)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info", "message" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "note", [], "any", false, false, false, 43)]));
            // line 44
            echo "                                    ";
        }
        // line 45
        echo "
                                    <div class=\"row mb-3\">

                                        ";
        // line 48
        if (((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") && twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 48)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 48) == 1)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 48) > 0))) {
            // line 49
            echo "
                                            <div class=\"col-12 col-lg-6\">
                                                <div class=\"card\">
                                                    <div class=\"card-header\">
                                                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment"), "html", null, true);
            echo "
                                                    </div>
                                                    <div class=\"card-body p-4\">

                                                        <span class=\"badge badge-";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getPaymentStatusClass", [0 => twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "value", [], "any", false, false, false, 57)], "method", false, false, false, 57), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "value", [], "any", false, false, false, 57))), "html", null, true);
            echo "</span>
                                                        ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 58), "details", [], "any", false, true, false, 58), "TIMESTAMP", [], "array", true, true, false, 58)) {
                // line 59
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 59), "details", [], "any", false, false, false, 59)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["TIMESTAMP"] ?? null) : null), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 59), "locale", [], "any", false, false, false, 59), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                                                        ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
($context["order"] ?? null), "payment", [], "any", false, true, false, 60), "details", [], "any", false, true, false, 60), "created", [], "array", true, true, false, 60)) {
                // line 61
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 61), "details", [], "any", false, false, false, 61)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["created"] ?? null) : null), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "locale", [], "any", false, false, false, 61), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                                                        ";
            } else {
                // line 63
                echo "                                                            ";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 63), "updatedAt", [], "any", false, false, false, 63), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "locale", [], "any", false, false, false, 63), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                                                        ";
            }
            // line 65
            echo "
                                                        <button data-toggle=\"collapse\" data-target=\"#payment-details\" class=\"btn btn-default btn-sm float-right\"><i class=\"fas fa-plus\"></i> ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More details"), "html", null, true);
            echo "</button>

                                                        <div id=\"payment-details\" class=\"collapse mt-3\">
                                                            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 69)) {
                // line 70
                echo "                                                                <dl class=\"dlist-align\">
                                                                    <dt>";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment method"), "html", null, true);
                echo "</dt>
                                                                    <dd>
                                                                        ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
                echo "
                                                                        <br>
                                                                        <img src=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 75), "getLogoPath", [], "any", false, false, false, 75)), "html", null, true);
                echo "\" class=\"img-50-50 mt-2\" />
                                                                    </dd>
                                                                </dl>
                                                            ";
            }
            // line 79
            echo "                                                            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 79), "factoryName", [], "any", false, false, false, 79) == "paypal_express_checkout")) {
                // line 80
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 80), "details", [], "any", false, true, false, 80), "DESC", [], "array", true, true, false, 80)) {
                    // line 81
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 82
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 83
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 83), "details", [], "any", false, false, false, 83)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["DESC"] ?? null) : null), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 86
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 86), "details", [], "any", false, true, false, 86), "AMT", [], "array", true, true, false, 86)) {
                    // line 87
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 89
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 89), "details", [], "any", false, false, false, 89)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["AMT"] ?? null) : null), 2, ".", ","), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 92
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 92), "details", [], "any", false, true, false, 92), "CURRENCYCODE", [], "array", true, true, false, 92)) {
                    // line 93
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 94
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 95
                    echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 95), "details", [], "any", false, false, false, 95)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["CURRENCYCODE"] ?? null) : null), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 98
                echo "                                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 98), "factoryName", [], "any", false, false, false, 98) == "offline")) {
                // line 99
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 99), "details", [], "any", false, true, false, 99), "description", [], "array", true, true, false, 99)) {
                    // line 100
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 102
                    echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 102), "details", [], "any", false, false, false, 102)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["description"] ?? null) : null), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 105
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 105), "details", [], "any", false, true, false, 105), "amount", [], "array", true, true, false, 105)) {
                    // line 106
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 108
                    echo twig_escape_filter($this->env, twig_slice($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 108), "details", [], "any", false, false, false, 108)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["amount"] ?? null) : null), 0, (twig_length_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 108), "details", [], "any", false, false, false, 108)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["amount"] ?? null) : null)) - 2)), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_slice($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 108), "details", [], "any", false, false, false, 108)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["amount"] ?? null) : null), (twig_length_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 108), "details", [], "any", false, false, false, 108)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["amount"] ?? null) : null)) - 2), twig_length_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 108), "details", [], "any", false, false, false, 108)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["amount"] ?? null) : null))), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 111
                echo "                                                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 111), "details", [], "any", false, true, false, 111), "currency", [], "array", true, true, false, 111)) {
                    // line 112
                    echo "                                                                    <dl class=\"dlist-align\">
                                                                        <dt>";
                    // line 113
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency"), "html", null, true);
                    echo "</dt>
                                                                        <dd>";
                    // line 114
                    echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 114), "details", [], "any", false, false, false, 114)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["currency"] ?? null) : null), "html", null, true);
                    echo "</dd>
                                                                    </dl>
                                                                ";
                }
                // line 117
                echo "                                                            ";
            }
            // line 118
            echo "                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 123
        echo "                                        <div class=\"col-12 ";
        if (((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") && twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 123)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 123) == 1)) && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 123) > 0))) {
            echo "col-lg-6";
        }
        echo "\">
                                            <div class=\"card\">
                                                <div class=\"card-header\">
                                                    ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendee"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point of sale"), "html", null, true);
        echo "
                                                </div>
                                                <div class=\"card-body p-4\">
                                                    ";
        // line 129
        $this->loadTemplate("Global/user-avatar.html.twig", "Dashboard/Shared/Order/details.html.twig", 129)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 129)]));
        // line 130
        echo "                                                    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 130), "getCrossRoleName", [], "any", false, false, false, 130), "html", null, true);
        echo "
                                                    ";
        // line 131
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 132
            echo "                                                        <button class=\"btn btn-sm ml-3 ajax-loading\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User information"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_information", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 132), "slug", [], "any", false, false, false, 132)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User information"), "html", null, true);
            echo "\"><i class=\"dropdown-icon fas fa-file-alt\"></i></button>
                                                        ";
        }
        // line 134
        echo "                                                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 134) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 134), "hasBillingInformation", [], "any", false, false, false, 134))) {
            // line 135
            echo "                                                        <button data-toggle=\"collapse\" data-target=\"#billing-information\" class=\"btn btn-default btn-sm has-tooltip ml-3\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing information"), "html", null, true);
            echo "\"><i class=\"fas fa-plus\"></i></button>
                                                        <div id=\"billing-information\" class=\"collapse mt-3\">
                                                            ";
            // line 137
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 137), "firstname", [], "any", false, false, false, 137) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 137), "lastname", [], "any", false, false, false, 137))) {
                // line 138
                echo "                                                                <dl class=\"dlist-align\">
                                                                    <dt>";
                // line 139
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Full name"), "html", null, true);
                echo "</dt>
                                                                    <dd>";
                // line 140
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 140), "firstname", [], "any", false, false, false, 140) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 140), "lastname", [], "any", false, false, false, 140)), "html", null, true);
                echo "</dd>
                                                                </dl>
                                                            ";
            }
            // line 143
            echo "                                                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 143), "clientEmail", [], "any", false, false, false, 143)) {
                // line 144
                echo "                                                                <dl class=\"dlist-align\">
                                                                    <dt>";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
                echo "</dt>
                                                                    <dd>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 146), "clientEmail", [], "any", false, false, false, 146), "html", null, true);
                echo "</dd>
                                                                </dl>
                                                            ";
            }
            // line 149
            echo "                                                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 149), "stringifyAddress", [], "any", false, false, false, 149)) {
                // line 150
                echo "                                                                <dl class=\"dlist-align\">
                                                                    <dt>";
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address"), "html", null, true);
                echo "</dt>
                                                                    <dd>";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 152), "stringifyAddress", [], "any", false, false, false, 152), "html", null, true);
                echo "</dd>
                                                                </dl>
                                                            ";
            }
            // line 155
            echo "                                                        </div>
                                                    ";
        }
        // line 157
        echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-12\">

                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover shopping-cart-wrap\">
                                                    <thead class=\"text-muted\">
                                                        <tr>
                                                            <th scope=\"col\">";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event / Ticket"), "html", null, true);
        echo "</th>
                                                            <th scope=\"col\" width=\"100\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</th>
                                                            <th scope=\"col\" width=\"100\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity"), "html", null, true);
        echo "</th>
                                                            <th scope=\"col\" class=\"text-right\" width=\"100\">";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subtotal"), "html", null, true);
        echo "</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderelements", [], "any", false, false, false, 175));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderelement"]) {
            // line 176
            echo "
                                                            ";
            // line 177
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER") && twig_get_attribute($this->env, $this->source, $context["orderelement"], "belongsToOrganizer", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 177), "organizer", [], "any", false, false, false, 177), "slug", [], "any", false, false, false, 177)], "method", false, false, false, 177))) || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_POINTOFSALE") && (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 177) == twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 177))))) {
                // line 178
                echo "
                                                                <tr>
                                                                    <td>
                                                                        ";
                // line 181
                $this->loadTemplate("Global/event-preview-horizontal.html.twig", "Dashboard/Shared/Order/details.html.twig", 181)->display(twig_array_merge($context, ["eventticket" => twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 181)]));
                // line 182
                echo "                                                                    </td>
                                                                    <td>
                                                                        <div class=\"price-wrap\">
                                                                            ";
                // line 185
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 185), "free", [], "any", false, false, false, 185)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : ((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 185) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 185)) : ("")) . twig_get_attribute($this->env, $this->source, $context["orderelement"], "displayUnitPrice", [], "any", false, false, false, 185)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 185) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 185)) : (""))))), "html", null, true);
                echo "
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        ";
                // line 189
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderelement"], "quantity", [], "any", false, false, false, 189), "html", null, true);
                echo "
                                                                    </td>
                                                                    <td class=\"text-right\">
                                                                        <div class=\"price-wrap\">
                                                                            <var class=\"price\">";
                // line 193
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 193) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 193), "html", null, true))) : (print ("")));
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderelement"], "getPrice", [], "any", false, false, false, 193), "html", null, true);
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 193) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 193), "html", null, true))) : (print ("")));
                echo "</var>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                            ";
            }
            // line 199
            echo "
                                                            ";
            // line 200
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
                // line 201
                echo "                                                                <tr>
                                                                    <td colspan=\"4\">
                                                                        <a href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 203), "eventdate", [], "any", false, false, false, 203), "event", [], "any", false, false, false, 203), "slug", [], "any", false, false, false, 203)]), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\"><i class=\"fas fa-ticket-alt\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Buy more tickets"), "html", null, true);
                echo "</a>
                                                                        <a href=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_reviews_add", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 204), "eventdate", [], "any", false, false, false, 204), "event", [], "any", false, false, false, 204), "slug", [], "any", false, false, false, 204)]), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm ml-3\"><i class=\"far fa-star\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Leave a review"), "html", null, true);
                echo "</a>
                                                                        <a href=\"";
                // line 205
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 205), "eventdate", [], "any", false, false, false, 205), "event", [], "any", false, false, false, 205), "organizer", [], "any", false, false, false, 205), "slug", [], "any", false, false, false, 205)]), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm ml-3\"><i class=\"far fa-id-card\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact the organizer"), "html", null, true);
                echo "</a>
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 209
            echo "                                                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderelement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "
                                                    </tbody>
                                                    <tfoot>
                                                        ";
        // line 213
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMNISTRATOR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
            // line 214
            echo "                                                            <tr>
                                                                <td colspan=\"5\" class=\"text-right\">
                                                                    <div class=\"price-wrap\">
                                                                        <var class=\"price\">";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 217) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 217), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [], "method", false, false, false, 217), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 217) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 217), "html", null, true))) : (print ("")));
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsQuantitySum", [], "any", false, false, false, 217), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ticket(s)"), "html", null, true);
            echo ")</var>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=\"5\" class=\"text-right\">
                                                                    <div class=\"price-wrap\">
                                                                        <var class=\"price\">";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fees"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 224) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 224), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalFees", [], "method", false, false, false, 224), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 224) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 224), "html", null, true))) : (print ("")));
            echo "</var>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan=\"5\" class=\"text-right\">
                                                                    <div class=\"price-wrap\">
                                                                        <var class=\"price\">";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
            echo ": <strong>";
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 231) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 231), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 231), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 231) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "currencySymbol", [], "method", false, false, false, 231), "html", null, true))) : (print ("")));
            echo "</strong></var>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        // line 236
        echo "                                                        <tr>
                                                            <td class=\"pt-5 text-right\" colspan=\"4\">

                                                                ";
        // line 239
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 240
            echo "
                                                                    ";
            // line 241
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 241) == 0) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 241) == 1))) {
                // line 242
                echo "                                                                        <button id=\"order-cancel-button\" data-target=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_cancel", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 242)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary mr-3 requires-confirmation\" data-confirmation-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to cancel this order (this action cannot be undone)"), "html", null, true);
                echo "\"><i class=\"fas fa-window-close fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
                echo "</button>
                                                                    ";
            }
            // line 244
            echo "
                                                                    ";
            // line 245
            if (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "deletedAt", [], "any", false, false, false, 245)) {
                // line 246
                echo "                                                                        <button data-target=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_delete", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 246), "forceRedirect" => 1]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary mr-3 requires-confirmation\" data-confirmation-text=\"";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the order and all its related information (payment details, tickets...)") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PERMANENTLY")), "html", null, true);
                echo "\"><i class=\"fas fa-trash fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                echo "</button>
                                                                        <a href=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_restore", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 247)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary mr-3\"><i class=\"fas fa-trash-restore fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                echo "</a>
                                                                    ";
            } else {
                // line 249
                echo "                                                                        <button data-target=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_delete", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 249)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary mr-3 requires-confirmation\" data-confirmation-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the order and all its related information (payment details, tickets...)"), "html", null, true);
                echo "\"><i class=\"fas fa-times fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo " </button>
                                                                    ";
            }
            // line 251
            echo "
                                                                    ";
            // line 252
            if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 252) == 1)) {
                // line 253
                echo "                                                                        <button data-target=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_order_resend_confirmation_email", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 253)]), "html", null, true);
                echo "\" data-initial-email-address=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 253), "clientEmail", [], "any", false, false, false, 253), "html", null, true);
                echo "\" class=\"btn btn-outline-primary mr-3 resend-confirmation-email-button\" data-confirmation-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you need to send the confirmation email to a different email address, you can change it before submitting"), "html", null, true);
                echo "\"><i class=\"far fa-envelope fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resend confirmation email"), "html", null, true);
                echo "</button>
                                                                    ";
            }
            // line 255
            echo "
                                                                    ";
            // line 256
            if (((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 256) ==  -2) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 256) == 1))) {
                // line 257
                echo "                                                                        <button class=\"btn btn-outline-primary mr-3cursor-pointer\" data-toggle=\"modal\" data-target=\"#order-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 257), "html", null, true);
                echo "-payment-details\"><i class=\"dropdown-icon fas fa-file-alt fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment details"), "html", null, true);
                echo "</button>
                                                                    ";
            }
            // line 259
            echo "
                                                                ";
        }
        // line 261
        echo "
                                                                ";
        // line 262
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 262) == 1)) {
            // line 263
            echo "                                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_tickets_print", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 263)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" target=\"_blank\"><i class=\"fas fa-ticket-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Print tickets"), "html", null, true);
            echo "</a>
                                                                ";
        }
        // line 265
        echo "
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                ";
        // line 270
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") && ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 270) ==  -2) || (twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "status", [], "any", false, false, false, 270) == 1))) && twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 270))) {
            // line 271
            echo "
                                                    <div class=\"modal fade\" id=\"order-";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 272), "html", null, true);
            echo "-payment-details\">
                                                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\">";
            // line 276
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order payment details"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 276), "html", null, true);
            echo "</h4>
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                                </div>
                                                                <div class=\"modal-body\">

                                                                    <p class=\"mb-3 text-center\">
                                                                        <img src=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 282), "getLogoPath", [], "any", false, false, false, 282)), "html", null, true);
            echo "\" class=\"img-80-80\" />
                                                                    </p>

                                                                    ";
            // line 285
            echo nl2br(twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 285), "details", [], "any", false, false, false, 285), twig_constant("JSON_PRETTY_PRINT")), "html", null, true));
            echo "
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
            echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                ";
        }
        // line 295
        echo "                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Order/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  762 => 295,  752 => 288,  746 => 285,  740 => 282,  729 => 276,  722 => 272,  719 => 271,  717 => 270,  710 => 265,  702 => 263,  700 => 262,  697 => 261,  693 => 259,  685 => 257,  683 => 256,  680 => 255,  668 => 253,  666 => 252,  663 => 251,  653 => 249,  646 => 247,  637 => 246,  635 => 245,  632 => 244,  622 => 242,  620 => 241,  617 => 240,  615 => 239,  610 => 236,  598 => 231,  584 => 224,  566 => 217,  561 => 214,  559 => 213,  554 => 210,  540 => 209,  531 => 205,  525 => 204,  519 => 203,  515 => 201,  513 => 200,  510 => 199,  499 => 193,  492 => 189,  485 => 185,  480 => 182,  478 => 181,  473 => 178,  471 => 177,  468 => 176,  451 => 175,  444 => 171,  440 => 170,  436 => 169,  432 => 168,  419 => 157,  415 => 155,  409 => 152,  405 => 151,  402 => 150,  399 => 149,  393 => 146,  389 => 145,  386 => 144,  383 => 143,  377 => 140,  373 => 139,  370 => 138,  368 => 137,  362 => 135,  359 => 134,  349 => 132,  347 => 131,  342 => 130,  340 => 129,  332 => 126,  323 => 123,  316 => 118,  313 => 117,  307 => 114,  303 => 113,  300 => 112,  297 => 111,  289 => 108,  285 => 107,  282 => 106,  279 => 105,  273 => 102,  269 => 101,  266 => 100,  263 => 99,  260 => 98,  254 => 95,  250 => 94,  247 => 93,  244 => 92,  238 => 89,  234 => 88,  231 => 87,  228 => 86,  222 => 83,  218 => 82,  215 => 81,  212 => 80,  209 => 79,  202 => 75,  197 => 73,  192 => 71,  189 => 70,  187 => 69,  181 => 66,  178 => 65,  172 => 63,  166 => 61,  164 => 60,  159 => 59,  157 => 58,  151 => 57,  144 => 53,  138 => 49,  136 => 48,  131 => 45,  128 => 44,  125 => 43,  123 => 42,  112 => 38,  103 => 31,  101 => 30,  95 => 27,  91 => 25,  88 => 24,  86 => 23,  83 => 22,  79 => 21,  72 => 19,  67 => 1,  64 => 16,  62 => 15,  59 => 13,  57 => 12,  54 => 10,  52 => 9,  49 => 7,  47 => 6,  45 => 5,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Order/details.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Order/details.html.twig");
    }
}
