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

/* Dashboard/Administrator/Settings/payment.html.twig */
class __TwigTemplate_9b1b819e7fc4be83b02bfc7bcd8bd36df139c3723eb499492815b061489acebe extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment settings");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/payment.html.twig", 1);
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
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/payment.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 16
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/payment.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h6 class=\"b mb-0 float-lg-left\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Global payment settings"), "html", null, true);
        echo "</h6>
                            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_currency");
        echo "\" class=\"btn btn-primary ml-3 float-lg-right\"><i class=\"fas fa-coins\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage currencies"), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"], "name" => "payment_settings"]);
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                    <div class=\"card mt-5\">
                        <div class=\"card-header\">
                            <h6 class=\"b mb-0 float-lg-left\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment gateways"), "html", null, true);
        echo "</h6>
                            <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_payment_gateways_add");
        echo "\" class=\"btn btn-primary ml-3 float-lg-right\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new payment gateway"), "html", null, true);
        echo "\"><i class=\"fas fa-plus\"></i></a>
                        </div>
                        <div class=\"card-body\">

                            ";
        // line 37
        $context["paymentgateways"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getPaymentGateways", [0 => ["enabled" => "all"]], "method", false, false, false, 37), "getQuery", [], "method", false, false, false, 37), "getResult", [], "method", false, false, false, 37);
        // line 38
        echo "
                            ";
        // line 39
        if (twig_length_filter($this->env, ($context["paymentgateways"] ?? null))) {
            // line 40
            echo "
                                <table class=\"table table-hover table-vcenter text-nowrap\">
                                    <thead>
                                        <tr>
                                            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                            <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
            echo "</th>
                                            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                                            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order of appearance"), "html", null, true);
            echo "</th>
                                            <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentgateways"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paymentgateway"]) {
                // line 54
                echo "
                                            <tr>
                                                <td>
                                                    ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "name", [], "any", false, false, false, 57), "html", null, true);
                echo "
                                                </td>
                                                <td>
                                                    <a class=\"fancybox\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "getLogoPath", [], "any", false, false, false, 60)), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enlarge"), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "getLogoPath", [], "any", false, false, false, 61)), "html", null, true);
                echo "\" class=\"img-thumbnail img-50-50\" />
                                                    </a>
                                                </td>
                                                <td>
                                                    ";
                // line 65
                if (twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "enabled", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "                                                        <span class=\"badge badge-success\"><i class=\"fas fa-eye fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled"), "html", null, true);
                    echo "</span>
                                                    ";
                } else {
                    // line 68
                    echo "                                                        <span class=\"badge badge-danger\"><i class=\"fas fa-eye-slash fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
                    echo "</span>
                                                    ";
                }
                // line 70
                echo "                                                </td>
                                                <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "number", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                                                <td class=\"text-center\">
                                                    <div class=\"item-action dropdown\">
                                                        <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                                                        <div class=\"dropdown-menu dropdown-menu-right\">
                                                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_payment_gateways_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["paymentgateway"], "slug", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-edit fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
                echo "</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentgateway'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                                    </tbody>
                                </table>

                            ";
        } else {
            // line 87
            echo "                                ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Administrator/Settings/payment.html.twig", 87)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No payment gateways found"), "icon" => "fas fa-exclamation-circle"]));
            // line 88
            echo "                            ";
        }
        // line 89
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

";
    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "
    <script>
        \$(document).ready(function () {
            \$('#form_ticket_fee_pos').closest('.form-group').hide();
            \$('#form_pos_ticket_price_percentage_cut').closest('.form-group').hide();
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 101,  256 => 100,  243 => 89,  240 => 88,  237 => 87,  231 => 83,  216 => 76,  208 => 71,  205 => 70,  199 => 68,  193 => 66,  191 => 65,  184 => 61,  178 => 60,  172 => 57,  167 => 54,  163 => 53,  154 => 47,  150 => 46,  146 => 45,  142 => 44,  136 => 40,  134 => 39,  131 => 38,  129 => 37,  120 => 33,  116 => 32,  108 => 27,  104 => 26,  100 => 25,  92 => 22,  88 => 21,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/payment.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/payment.html.twig");
    }
}
