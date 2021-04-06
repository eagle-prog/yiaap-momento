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

/* Dashboard/Attendee/Order/checkout.html.twig */
class __TwigTemplate_154e153a9ab0f07a978f11f71be3892bcf56ba4e5974baa5a4984e89cbc0687d extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checkout");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Attendee/Order/checkout.html.twig", 1);
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
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_attendee_cart" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My cart"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Attendee/Order/checkout.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content bg-white padding-y\">

        <div class=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 14), "html", null, true);
        echo "\">

            <div class=\"row\">
                <main class=\"col-lg-8 order-1 order-lg-0 mt-4 mt-lg-0\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h6 class=\"b mb-0\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order summary"), "html", null, true);
        echo "</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover shopping-cart-wrap\">
                                    <thead class=\"text-muted\">
                                        <tr>
                                            <th style=\"width:55%;\" scope=\"col\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event / Ticket"), "html", null, true);
        echo "</th>
                                            <th style=\"width:15%;\" scope=\"col\" width=\"100\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</th>
                                            <th style=\"width:15%;\" scope=\"col\" width=\"100\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity"), "html", null, true);
        echo "</th>
                                            <th style=\"width:15%;\" scope=\"col\" class=\"text-right\" width=\"100\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subtotal"), "html", null, true);
        echo "</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderelements", [], "any", false, false, false, 34));
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
            // line 35
            echo "                                            <tr>
                                                <td width=\"55%\">
                                                    ";
            // line 37
            $this->loadTemplate("Global/event-preview-horizontal.html.twig", "Dashboard/Attendee/Order/checkout.html.twig", 37)->display(twig_array_merge($context, ["eventticket" => twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 37)]));
            // line 38
            echo "                                                </td>
                                                <td width=\"15%\">
                                                    <div class=\"price-wrap\">
                                                        ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 41), "eventdate", [], "any", false, false, false, 41), "event", [], "any", false, false, false, 41), "isFree", [], "any", false, false, false, 41)) {
                // line 42
                echo "                                                            <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free"), "html", null, true);
                echo "</span>
                                                        ";
            } else {
                // line 44
                echo "                                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 44), "eventdate", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                                                                <span class=\"price-new\">";
                    (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 45) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 45), "html", null, true))) : (print ("")));
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderelement"], "eventticket", [], "any", false, false, false, 45), "getSalePrice", [], "any", false, false, false, 45), "html", null, true);
                    (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 45) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 45), "html", null, true))) : (print ("")));
                    echo "</span>
                                                            ";
                }
                // line 47
                echo "                                                        ";
            }
            // line 48
            echo "                                                    </div>
                                                </td>
                                                <td width=\"15%\">
                                                    ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderelement"], "quantity", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                                </td>
                                                <td width=\"15%\" class=\"text-right\">
                                                    <div class=\"price-wrap\">
                                                        <var class=\"price\">";
            // line 55
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 55) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 55), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderelement"], "getPrice", [], "any", false, false, false, 55), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 55) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 55), "html", null, true))) : (print ("")));
            echo "</var>
                                                    </div>
                                                </td>
                                            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderelement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "orderReference", [], "any", false, false, false, 68), 'widget', ["value" => twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "reference", [], "any", false, false, false, 68)]);
        echo "

                    <div class=\"card mt-4\">
                        <div class=\"card-header\">
                            <h6 class=\"b mb-0\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing information"), "html", null, true);
        echo "</h6>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 77), 'label');
        echo "
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 78), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "firstname", [], "any", false, false, false, 78)]);
        echo "
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 79), 'errors');
        echo "
                                </div>
                                <div class=\"col form-group\">
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 82), 'label');
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 83), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "lastname", [], "any", false, false, false, 83)]);
        echo "
                                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 84), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 89), 'label');
        echo "
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 90), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 90), "email", [], "any", false, false, false, 90)]);
        echo "
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 91), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 96), 'label');
        echo "
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 97), 'widget');
        echo "
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 98), 'errors');
        echo "
                                </div>
                                <div class=\"col form-group\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, false, 101), 'label');
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, false, 102), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 102), "state", [], "any", false, false, false, 102)]);
        echo "
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, false, 103), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 108), 'label');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 109), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 109), "city", [], "any", false, false, false, 109)]);
        echo "
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 110), 'errors');
        echo "
                                </div>
                                <div class=\"col form-group\">
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalcode", [], "any", false, false, false, 113), 'label');
        echo "
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalcode", [], "any", false, false, false, 114), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 114), "postalcode", [], "any", false, false, false, 114)]);
        echo "
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalcode", [], "any", false, false, false, 115), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"col form-group\">
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street", [], "any", false, false, false, 120), 'label');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street", [], "any", false, false, false, 121), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 121), "street", [], "any", false, false, false, 121)]);
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street", [], "any", false, false, false, 122), 'errors');
        echo "
                                </div>
                                <div class=\"col form-group\">
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street2", [], "any", false, false, false, 125), 'label');
        echo "
                                    ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street2", [], "any", false, false, false, 126), 'widget', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 126), "street2", [], "any", false, false, false, 126)]);
        echo "
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street2", [], "any", false, false, false, 127), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 133
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 133) > 0)) {
            // line 134
            echo "                        <div class=\"card mt-4\">
                            <div class=\"card-header\">
                                <h6 class=\"b mb-0\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment method"), "html", null, true);
            echo "</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"form-row\">
                                    ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentGateways"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["paymentGateway"]) {
                // line 141
                echo "                                        <div class=\"col-6 form-group\">

                                            <div class=\"custom-control custom-radio custom-control-inline\">
                                                <input class=\"custom-control-input\" id=\"";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "factoryName", [], "any", false, false, false, 144), "html", null, true);
                echo "\" type=\"radio\" name=\"payment_gateway\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "factoryName", [], "any", false, false, false, 144), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 144)) ? ("checked") : (""));
                echo "/>
                                                <label class=\"custom-control-label required\" for=\"";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "factoryName", [], "any", false, false, false, 145), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "getLogoPath", [], "any", false, false, false, 145)), "html", null, true);
                echo "\" class=\"img-80-80 mr-3 ml-3\" />";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "name", [], "any", false, false, false, 145), "html", null, true);
                echo "</label>
                                            </div>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentGateway'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                                </div>
                            </div>
                        </div>
                        <button id=\"checkout_submit\" type=\"submit\" class=\"btn btn-primary btn-block mt-4\"><i class=\"fas fa-money-check\"></i> ";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pay now"), "html", null, true);
            echo "</button>
                    ";
        } else {
            // line 155
            echo "                        <button id=\"checkout_submit\" type=\"submit\" class=\"btn btn-primary btn-block mt-4\"><i class=\"fas fa-edit\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
            echo "</button>
                    ";
        }
        // line 157
        echo "

                    ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

                </main>
                <aside class=\"col-lg-4 pt-3 pt-lg-0 order-0 order-lg-1\">
                    <div class=\"sticky-top sticky-sidebar\">
                        <div class=\"checkout-timer-wrapper\">

                            ";
        // line 166
        $context["secondsLeft"] = 0;
        // line 167
        echo "
                            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "orderelements", [], "any", false, false, false, 168));
        foreach ($context['_seq'] as $context["_key"] => $context["orderElement"]) {
            // line 169
            echo "
                                ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["orderElement"], "ticketsReservations", [], "any", false, false, false, 170));
            foreach ($context['_seq'] as $context["_key"] => $context["ticketReservation"]) {
                if ( !twig_get_attribute($this->env, $this->source, $context["ticketReservation"], "isExpired", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "
                                    ";
                    // line 172
                    $context["dateInterval"] = twig_get_attribute($this->env, $this->source, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticketReservation"], "createdAt", [], "any", false, false, false, 172), (("+" . twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "checkout_timeleft"], "method", false, false, false, 172)) . " second")), "diff", [0 => twig_date_converter($this->env, "now")], "method", false, false, false, 172);
                    // line 173
                    echo "                                    ";
                    $context["secondsLeft"] = ((twig_date_format_filter($this->env, ($context["dateInterval"] ?? null), "%i") * 60) + twig_date_format_filter($this->env, ($context["dateInterval"] ?? null), "%s"));
                    // line 174
                    echo "
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketReservation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderElement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
                            ";
        // line 179
        if ((($context["secondsLeft"] ?? null) > 0)) {
            // line 180
            echo "                                ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Attendee/Order/checkout.html.twig", 180)->display(twig_array_merge($context, ["type" => "warning", "icon" => "fas fa-hourglass-half", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%mins% left before tickets are released", ["%mins%" => (("<span class='checkout-timer' data-seconds-left='" . ($context["secondsLeft"] ?? null)) . "'></span>")])]));
            // line 181
            echo "                            ";
        }
        // line 182
        echo "
                        </div>
                        <dl class=\"dlist-align\">
                            <dt>";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        echo "</dt>
                            <dd class=\"text-right ml-5\">";
        // line 186
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 186) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 186), "html", null, true))) : (print ("")));
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [], "method", false, false, false, 186), "html", null, true);
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 186) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 186), "html", null, true))) : (print ("")));
        echo "
                            </dd>
                        </dl>
                        <dl class=\"dlist-align\">
                            <dt>";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fees"), "html", null, true);
        echo "</dt>
                            <dd class=\"text-right ml-5\">";
        // line 191
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 191) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 191), "html", null, true))) : (print ("")));
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getTotalFees", [], "method", false, false, false, 191), "html", null, true);
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 191) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 191), "html", null, true))) : (print ("")));
        echo "</dd>
                        </dl>
                        <dl class=\"dlist-align h4\">
                            <dt>";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
        echo "</dt>
                            <dd class=\"text-right ml-5\"><strong>";
        // line 195
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 195) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 195), "html", null, true))) : (print ("")));
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 195), "html", null, true);
        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 195) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 195), "html", null, true))) : (print ("")));
        echo "</strong></dd>
                        </dl>
                        ";
        // line 197
        if ((twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "getOrderElementsPriceSum", [0 => true], "method", false, false, false, 197) > 0)) {
            // line 198
            echo "                            <hr>
                            ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["paymentGateways"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paymentGateway"]) {
                // line 200
                echo "
                                ";
                // line 201
                if ((twig_get_attribute($this->env, $this->source, $context["paymentGateway"], "factoryName", [], "any", false, false, false, 201) == "paypal_express_checkout")) {
                    // line 202
                    echo "
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <img src=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/payment/americanexpress-dark.svg"), "html", null, true);
                    echo "\" class=\"width-auto img-fluid\">
                                        </div>
                                        <div class=\"col\">
                                            <img src=\"";
                    // line 208
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/payment/visa-dark.svg"), "html", null, true);
                    echo "\" class=\"width-auto img-fluid\">
                                        </div>
                                        <div class=\"col\">
                                            <img src=\"";
                    // line 211
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/payment/mastercard-dark.svg"), "html", null, true);
                    echo "\" class=\"width-auto img-fluid\">
                                        </div>
                                        <div class=\"col\">
                                            <img src=\"";
                    // line 214
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/payment/discover-dark.svg"), "html", null, true);
                    echo "\" class=\"width-auto img-fluid\">
                                        </div>
                                        <div class=\"col\">
                                            <img src=\"";
                    // line 217
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/payment/paypal-dark.svg"), "html", null, true);
                    echo "\" class=\"width-auto img-fluid\">
                                        </div>
                                    </div>

                                ";
                }
                // line 222
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentGateway'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "                        ";
        }
        // line 225
        echo "                    </div>
                </aside>
            </div>

        </div>
    </section>

";
    }

    // line 234
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "
    <script>

        \$(document).ready(function () {
        ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 239), "country", [], "any", false, false, false, 239)) {
            // line 240
            echo "                \$('#checkout_country').val('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 240), "country", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
            echo "');
                \$('#checkout_country').trigger('change');
        ";
        }
        // line 243
        echo "
            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Attendee/Order/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 243,  633 => 240,  631 => 239,  625 => 235,  621 => 234,  610 => 225,  607 => 224,  600 => 222,  592 => 217,  586 => 214,  580 => 211,  574 => 208,  568 => 205,  563 => 202,  561 => 201,  558 => 200,  554 => 199,  551 => 198,  549 => 197,  542 => 195,  538 => 194,  530 => 191,  526 => 190,  517 => 186,  513 => 185,  508 => 182,  505 => 181,  502 => 180,  500 => 179,  497 => 178,  490 => 176,  482 => 174,  479 => 173,  477 => 172,  474 => 171,  469 => 170,  466 => 169,  462 => 168,  459 => 167,  457 => 166,  447 => 159,  443 => 157,  437 => 155,  432 => 153,  427 => 150,  404 => 145,  396 => 144,  391 => 141,  374 => 140,  367 => 136,  363 => 134,  361 => 133,  352 => 127,  348 => 126,  344 => 125,  338 => 122,  334 => 121,  330 => 120,  322 => 115,  318 => 114,  314 => 113,  308 => 110,  304 => 109,  300 => 108,  292 => 103,  288 => 102,  284 => 101,  278 => 98,  274 => 97,  270 => 96,  262 => 91,  258 => 90,  254 => 89,  246 => 84,  242 => 83,  238 => 82,  232 => 79,  228 => 78,  224 => 77,  216 => 72,  209 => 68,  204 => 66,  196 => 60,  175 => 55,  168 => 51,  163 => 48,  160 => 47,  152 => 45,  149 => 44,  143 => 42,  141 => 41,  136 => 38,  134 => 37,  130 => 35,  113 => 34,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  84 => 20,  75 => 14,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Attendee/Order/checkout.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Attendee/Order/checkout.html.twig");
    }
}
