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

/* Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig */
class __TwigTemplate_df68eb22d9f6b362d995a891fe7fa5eef24689d15ad8dd307684cee9c06412d6 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new payment gateway");
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["paymentgateway"] ?? null), "id", [], "any", false, false, false, 5)) {
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update the payment gateway");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_administrator_settings_payment" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment settings"), "current" => ($context["pagetitle"] ?? null)]];
        // line 12
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig", 12)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 13
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 15), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 18
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig", 18)->display($context);
        // line 19
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <script>

        \$(document).ready(function () {

            \$(\"#payment_gateway_factoryName\").change(function () {
                var selectedGatewayFactoryName = \$(this).val();
                \$(\".payment_config_field\").each(function () {
                    if (\$(this).hasClass(selectedGatewayFactoryName)) {
                        \$(this).closest(\".form-group\").show();
                        \$(this).closest(\".form-group\").find(\"input[type=text]\").prop(\"disabled\", false);
                        \$(this).closest(\".form-group\").find(\"input[type=radio]\").prop(\"disabled\", false);
                    } else {
                        \$(this).closest(\".form-group\").hide();
                        \$(this).closest(\".form-group\").find(\"input[type=text]\").prop(\"disabled\", true);
                        \$(this).closest(\".form-group\").find(\"input[type=radio]\").prop(\"disabled\", true);
                    }
                });
            });
            \$(\"#payment_gateway_factoryName\").trigger(\"change\");

            \$(\"#payment_gateway_save\").click(function (e) {
                e.preventDefault();
                var error = false;
                var factoryName = \$(\"#payment_gateway_factoryName\").val();
                if (factoryName == \"paypal_express_checkout\") {
                    if (\$(\"input[name='payment_gateway[config][sandbox]']:checked\").val() == undefined || \$(\"#payment_gateway_config_username\").val() == \"\" || \$(\"#payment_gateway_config_password\").val() == \"\" || \$(\"#payment_gateway_config_signature\").val() == \"\") {
                        error = true;
                    }
                } else if (factoryName == \"stripe_checkout\") {
                    if (\$(\"#payment_gateway_config_publishable_key\").val() == \"\" || \$(\"#payment_gateway_config_secret_key\").val() == \"\") {
                        error = true;
                    }
                }
                if (error) {
                    showStackBarTop('error', '', '";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter the selected payment gateway details"), "html", null, true);
        echo "');
                } else {
                    \$(\"#payment_gateway_save\").closest(\"form\").submit();
                }
            });

        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 71,  118 => 37,  114 => 36,  100 => 25,  96 => 24,  92 => 23,  86 => 19,  84 => 18,  78 => 15,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  62 => 9,  55 => 7,  50 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/payment-gateway-add-edit.html.twig");
    }
}
