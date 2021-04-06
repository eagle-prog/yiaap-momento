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

/* Dashboard/Attendee/Cart/cart.html.twig */
class __TwigTemplate_2a5d9620138890fb5ab9fd903d0d0655315ffa09062347655f1c356a59863a0c extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My cart");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    ";
        // line 20
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "cartelements", [], "any", false, false, false, 20))) {
            // line 21
            echo "
                        ";
            // line 22
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 22)->display(twig_array_merge($context, ["type" => "warning", "icon" => "fas fa-info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your tickets are not reserved until checkout, the quantity you intend to buy might not be available if you do not proceed to checkout right away")]));
            // line 23
            echo "
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h6 class=\"b mb-0\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "getTicketsInCartQuantitySum", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tickets found in your cart"), "html", null, true);
            echo "</h6>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <form method=\"post\">
                                        <table class=\"table table-hover shopping-cart-wrap\">
                                            <thead class=\"text-muted\">
                                                <tr>
                                                    <th scope=\"col\">";
            // line 34
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event") . " / ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket")), "html", null, true);
            echo "</th>
                                                    <th scope=\"col\" width=\"100\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
            echo "</th>
                                                    <th scope=\"col\" width=\"100\">";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity"), "html", null, true);
            echo "</th>
                                                    <th scope=\"col\" width=\"100\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subtotal"), "html", null, true);
            echo "</th>
                                                    <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "cartelements", [], "any", false, false, false, 42));
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
            foreach ($context['_seq'] as $context["_key"] => $context["cartelement"]) {
                // line 43
                echo "                                                    <tr>
                                                        <td>
                                                            ";
                // line 45
                $this->loadTemplate("Global/event-preview-horizontal.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 45)->display(twig_array_merge($context, ["eventticket" => twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 45)]));
                // line 46
                echo "                                                        </td>
                                                        <td>
                                                            <div class=\"price-wrap\">
                                                                ";
                // line 49
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 49), "eventdate", [], "any", false, false, false, 49), "event", [], "any", false, false, false, 49), "isFree", [], "any", false, false, false, 49)) {
                    // line 50
                    echo "                                                                    <span class=\"price-new\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free"), "html", null, true);
                    echo "</span>
                                                                ";
                } else {
                    // line 52
                    echo "                                                                    ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 52), "eventdate", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "                                                                        <span class=\"price-new\">";
                        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 53) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 53), "html", null, true))) : (print ("")));
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 53), "getSalePrice", [], "any", false, false, false, 53), "html", null, true);
                        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 53) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 53), "html", null, true))) : (print ("")));
                        echo "</span>
                                                                    ";
                    }
                    // line 55
                    echo "                                                                ";
                }
                // line 56
                echo "                                                            </div>
                                                        </td>
                                                        <td>
                                                            <input type=\"text\" class=\"form-control touchspin-integer bg-white eventdate-ticket-qte\" name=\"";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 59), "reference", [], "any", false, false, false, 59), "html", null, true);
                echo "\" data-min=\"0\" data-max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartelement"], "eventticket", [], "any", false, false, false, 59), "getMaxTicketsForSaleCount", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 59)], "method", false, false, false, 59), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartelement"], "quantity", [], "any", false, false, false, 59), "html", null, true);
                echo "\" />
                                                        </td>
                                                        <td class=\"text-right\">
                                                            <div class=\"price-wrap\">
                                                                <var class=\"price\">";
                // line 63
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 63) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 63), "html", null, true))) : (print ("")));
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartelement"], "getPrice", [], "any", false, false, false, 63), "html", null, true);
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 63) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 63), "html", null, true))) : (print ("")));
                echo "</var>
                                                            </div>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_cart_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["cartelement"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove"), "html", null, true);
                echo "\"><i class=\"far fa-minus-square\"></i></a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartelement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan=\"5\" class=\"text-right\">
                                                        <div class=\"price-wrap\">
                                                            <var class=\"price\">";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fees"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 76) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 76), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 76), "getTotalFees", [], "any", false, false, false, 76), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 76) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 76), "html", null, true))) : (print ("")));
            echo "</var>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"5\" class=\"text-right\">
                                                        <div class=\"price-wrap\">
                                                            <var class=\"price\">";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
            echo ": ";
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 83) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 83), "html", null, true))) : (print ("")));
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 83), "getTicketsInCartPriceSum", [0 => true], "method", false, false, false, 83), "html", null, true);
            (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 83) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 83), "html", null, true))) : (print ("")));
            echo "</var>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"5\" class=\"text-right\">
                                                        <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
            echo "\" class=\"btn btn-outline-primary mr-3\"><i class=\"fas fa-ticket-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Buy more tickets"), "html", null, true);
            echo "</a>
                                                        <button type=\"submit\" class=\"btn btn-outline-primary mr-3\"><i class=\"fas fa-sync\"></i> ";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update cart"), "html", null, true);
            echo "</button>
                                                        <span data-target=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_cart_empty");
            echo "\" class=\"btn btn-outline-primary mr-3 requires-confirmation\"  data-confirmation-text=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to empty your cart"), "html", null, true);
            echo "\"><i class=\"far fa-minus-square\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Empty cart"), "html", null, true);
            echo "</span>
                                                        <a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_checkout");
            echo "\" class=\"btn btn-primary\">
                                                            ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 93), "getTicketsInCartPriceSum", [0 => true], "method", false, false, false, 93) > 0)) {
                // line 94
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checkout"), "html", null, true);
                echo "
                                                            ";
            } else {
                // line 96
                echo "                                                                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Register"), "html", null, true);
                echo "
                                                            ";
            }
            // line 98
            echo "                                                            <i class=\"fas fa-chevron-right ml-2\"></i></a>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>

                    ";
        } else {
            // line 109
            echo "
                        ";
            // line 110
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Attendee/Cart/cart.html.twig", 110)->display(twig_array_merge($context, ["icon" => "fas fa-shopping-cart", "type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your cart is empty")]));
            // line 111
            echo "
                    ";
        }
        // line 113
        echo "
                </div>
            </div>

        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Attendee/Cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 113,  314 => 111,  312 => 110,  309 => 109,  296 => 98,  290 => 96,  284 => 94,  282 => 93,  278 => 92,  270 => 91,  266 => 90,  260 => 89,  247 => 83,  233 => 76,  226 => 71,  206 => 67,  197 => 63,  186 => 59,  181 => 56,  178 => 55,  170 => 53,  167 => 52,  161 => 50,  159 => 49,  154 => 46,  152 => 45,  148 => 43,  131 => 42,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  98 => 26,  93 => 23,  91 => 22,  88 => 21,  86 => 20,  81 => 17,  79 => 16,  73 => 13,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Attendee/Cart/cart.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Attendee/Cart/cart.html.twig");
    }
}
