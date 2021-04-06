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

/* Dashboard/Shared/Order/confirmation-email.html.twig */
class __TwigTemplate_be4c81d4ce549fc40eb4b3706f5948302637051e9d9b137b65cb49c539d0c577 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body_html' => [$this, 'block_body_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body_html', $context, $blocks);
    }

    public function block_body_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
    <html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
        <head>
            <meta name=\"viewport\" content=\"width=device-width\" />
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your tickets bought from"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 7), "html", null, true);
        echo "</title>

            ";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 9), "locale", [], "any", false, false, false, 9) == "ar")) {
            // line 10
            echo "
                <style>

                    .body-wrap * {
                        direction: rtl !important;
                        text-align: right !important;
                        font-family: 'Cairo', sans-serif !important;
                    }

                </style>

            ";
        }
        // line 22
        echo "
            <style type=\"text/css\">
                img {
                    max-width: 100%;
                }
                body {
                    -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em;
                }
                body {
                    background-color: #f6f6f6;
                }
                @media only screen and (max-width: 640px) {
                    body {
                        padding: 0 !important;
                    }
                    h1 {
                        font-weight: 800 !important; margin: 20px 0 5px !important;
                    }
                    h2 {
                        font-weight: 800 !important; margin: 20px 0 5px !important;
                    }
                    h3 {
                        font-weight: 800 !important; margin: 20px 0 5px !important;
                    }
                    h4 {
                        font-weight: 800 !important; margin: 20px 0 5px !important;
                    }
                    h1 {
                        font-size: 22px !important;
                    }
                    h2 {
                        font-size: 18px !important;
                    }
                    h3 {
                        font-size: 16px !important;
                    }
                    .container {
                        padding: 0 !important; width: 100% !important;
                    }
                    .content {
                        padding: 0 !important;
                    }
                    .content-wrap {
                        padding: 10px !important;
                    }
                    .invoice {
                        width: 100% !important;
                    }
                    td p {
                        margin-top: 0;
                    }
                }
            </style>
        </head>

        <body itemscope itemtype=\"http://schema.org/EmailMessage\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\">

            <table class=\"body-wrap\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;\" bgcolor=\"#f6f6f6\"><tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>
                    <td class=\"container\" width=\"600\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">
                        <div class=\"content\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">
                            <table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" itemprop=\"action\" itemscope itemtype=\"http://schema.org/ConfirmAction\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;\" bgcolor=\"#fff\">
                                <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\"><td class=\"content-wrap\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">
                                        <meta itemprop=\"name\" content=\"Quote Request\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\" /><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"vertical-align: top; margin: 0; padding: 0 0 20px; text-align: center;\" valign=\"top\">
                                                    <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getAppLayoutSettings", [], "any", false, false, false, 87), "getLogoPath", [], "any", false, false, false, 87))), "html", null, true);
        echo "\" />
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <h2>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order confirmation"), "html", null, true);
        echo "</h2>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hey"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "user", [], "any", false, false, false, 97), "getCrossRoleName", [], "any", false, false, false, 97), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("your tickets are ready to go!"), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px; text-align: center;\" valign=\"top\">
                                                    <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/order-confirmation.png")), "html", null, true);
        echo "\" />
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This email is sent as a confirmation of your order"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_order_details", ["reference" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 107)])), "html", null, true);
        echo "\" target=\"_blank\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 107), "html", null, true);
        echo "</a> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("placed on"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 107), "details", [], "any", false, true, false, 107), "TIMESTAMP", [], "array", true, true, false, 107)) ? (twig_localized_date_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 107), "details", [], "any", false, false, false, 107)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["TIMESTAMP"] ?? null) : null), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "locale", [], "any", false, false, false, 107), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null))) : (twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "updatedAt", [], "any", false, false, false, 107), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "locale", [], "any", false, false, false, 107), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)))), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <h4>";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment"), "html", null, true);
        echo "</h4>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 117), "details", [], "any", false, true, false, 117), "DESC", [], "array", true, true, false, 117)) {
            // line 118
            echo "                                                        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 118), "details", [], "any", false, false, false, 118)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["DESC"] ?? null) : null), "html", null, true);
            echo "</p>
                                                    ";
        }
        // line 120
        echo "                                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 120), "details", [], "any", false, true, false, 120), "AMT", [], "array", true, true, false, 120)) {
            // line 121
            echo "                                                        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order total"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 121), "details", [], "any", false, false, false, 121)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["AMT"] ?? null) : null), "html", null, true);
            echo "</p>
                                                    ";
        }
        // line 123
        echo "                                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, true, false, 123), "details", [], "any", false, true, false, 123), "CURRENCYCODE", [], "array", true, true, false, 123)) {
            // line 124
            echo "                                                        <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 124), "details", [], "any", false, false, false, 124)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["CURRENCYCODE"] ?? null) : null), "html", null, true);
            echo "</p>
                                                    ";
        }
        // line 126
        echo "                                                    <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment method"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "paymentgateway", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
        echo "</p>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <h4>";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing information"), "html", null, true);
        echo "</h4>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <p>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Full name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 136), "firstname", [], "any", false, false, false, 136) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 136), "lastname", [], "any", false, false, false, 136)), "html", null, true);
        echo "</p>
                                                    <p>";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 137), "clientEmail", [], "any", false, false, false, 137), "html", null, true);
        echo "</p>
                                                    <p>";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "payment", [], "any", false, false, false, 138), "stringifyAddress", [], "any", false, false, false, 138), "html", null, true);
        echo "</p>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <h4>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</h4>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    <table width=\"100%\">
                                                        ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderelements", [], "any", false, false, false, 149));
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
        foreach ($context['_seq'] as $context["_key"] => $context["orderElement"]) {
            // line 150
            echo "                                                            <tr width=\"100%\" valign=\"top\">
                                                                <td width=\"70%\">
                                                                    <p style=\"margin-top: 0;\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 152), "eventdate", [], "any", false, false, false, 152), "event", [], "any", false, false, false, 152), "name", [], "any", false, false, false, 152), "html", null, true);
            echo "</p>
                                                                    <p>";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 153), "eventdate", [], "any", false, false, false, 153), "startdate", [], "any", false, false, false, 153), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 153), "locale", [], "any", false, false, false, 153), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
            echo "</p>
                                                                    ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 154), "eventdate", [], "any", false, false, false, 154), "venue", [], "any", false, false, false, 154)) {
                // line 155
                echo "                                                                        <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue"), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 155), "eventdate", [], "any", false, false, false, 155), "venue", [], "any", false, false, false, 155), "name", [], "any", false, false, false, 155), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 155), "eventdate", [], "any", false, false, false, 155), "venue", [], "any", false, false, false, 155), "stringifyAddress", [], "any", false, false, false, 155), "html", null, true);
                echo "</p>
                                                                    ";
            } else {
                // line 157
                echo "                                                                        <p>";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Where") . ": ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online")), "html", null, true);
                echo "</p>
                                                                    ";
            }
            // line 159
            echo "                                                                </td>
                                                                <td width=\"15%\">x ";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderElement"], "quantity", [], "any", false, false, false, 160), "html", null, true);
            echo "</td>
                                                                <td width=\"15%\">";
            // line 161
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderElement"], "eventticket", [], "any", false, false, false, 161), "free", [], "any", false, false, false, 161)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free")) : ((((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 161) == "left")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 161)) : ("")) . twig_get_attribute($this->env, $this->source, $context["orderElement"], "getPrice", [], "method", false, false, false, 161)) . (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 161) == "right")) ? (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 161)) : (""))))), "html", null, true);
            echo "</td>
                                                            </tr>
                                                            ";
            // line 163
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 163)) {
                // line 164
                echo "                                                                <tr width=\"100%\" valign=\"top\">
                                                                    <td colspan=\"3\" width=\"100%\">
                                                                        <hr style=\"border-top: 1px solid rgba(0, 0, 0, 0.1);\" />
                                                                    </td>
                                                                </tr>
                                                            ";
            }
            // line 170
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "                                                    </table>
                                                </td>
                                            </tr>
                                            <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                                <td class=\"content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
                                                    &mdash; ";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Best regards, the %website_name% team", ["%website_name%" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 176)]), "html", null, true);
        echo "
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <div class=\"footer\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;\">
                                <table width=\"100%\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                    <tr style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                                        <td class=\"aligncenter content-block\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;\" align=\"center\" valign=\"top\"><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_url"], "method", false, false, false, 186), "html", null, true);
        echo "\" style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 12px; color: #999; text-decoration: underline; margin: 0;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "website_name"], "method", false, false, false, 186), "html", null, true);
        echo "</a> © ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td style=\"font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>
                </tr>
            </table>
        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Order/confirmation-email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  389 => 186,  376 => 176,  369 => 171,  355 => 170,  347 => 164,  345 => 163,  340 => 161,  336 => 160,  333 => 159,  327 => 157,  317 => 155,  315 => 154,  309 => 153,  305 => 152,  301 => 150,  284 => 149,  275 => 143,  265 => 138,  259 => 137,  253 => 136,  245 => 131,  234 => 126,  226 => 124,  223 => 123,  215 => 121,  212 => 120,  204 => 118,  202 => 117,  194 => 112,  178 => 107,  170 => 102,  158 => 97,  150 => 92,  142 => 87,  75 => 22,  61 => 10,  59 => 9,  52 => 7,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Order/confirmation-email.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Order/confirmation-email.html.twig");
    }
}
