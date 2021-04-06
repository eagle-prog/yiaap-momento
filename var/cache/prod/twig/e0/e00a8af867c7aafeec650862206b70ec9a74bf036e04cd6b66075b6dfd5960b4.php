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

/* Dashboard/Shared/Event/add-edit.html.twig */
class __TwigTemplate_6382c16c27d2efa081ad8b7155c7cac2dcebf204cf481fc8d6c30a870affef96 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Global/jquery.collection.html.twig"], true);
        // line 5
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new event");
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 7)) {
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update the event");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Event/add-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_organizer_event" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My events"), "current" => ($context["pagetitle"] ?? null)]];
        // line 14
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Event/add-edit.html.twig", 14)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 15
        echo "
    <section class=\"section-content padding-y bg-white ";
        // line 16
        echo ((twig_in_filter("event_add", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16))) ? ("add-event") : ("edit-event"));
        echo "\">
        <div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 17), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 20
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Event/add-edit.html.twig", 20)->display($context);
        // line 21
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 25
        $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Event/add-edit.html.twig", 25)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The fields preceded with a red * are mandatory")]));
        // line 26
        echo "                            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            ";
        // line 28
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

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "
    <script>
        \$(document).ready(function () {
        ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "id", [], "any", false, false, false, 43)) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventdates", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                if (twig_get_attribute($this->env, $this->source, $context["eventDate"], "payoutRequested", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                    \$('.event-date-reference').each(function () {
                        if (\$(this).val() == \"";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDate"], "reference", [], "any", false, false, false, 46), "html", null, true);
                    echo "\") {
                            \$(this).closest(\"fieldset\").prop('disabled', true);
                            \$(this).closest(\"fieldset\").prepend('<p class=\"alert alert-danger alert-icon\"><i class=\"fas fa-exclamation-circle\"></i> ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This event date is locked because a payout request has been submitted"), "html", null, true);
                    echo "</p>');
                        }
                    });
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "eventdates", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["eventDate"]) {
                // line 53
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["eventDate"], "tickets", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["eventDateTicket"]) {
                    if ((twig_get_attribute($this->env, $this->source, $context["eventDateTicket"], "isOnSale", [], "any", false, false, false, 53) && (twig_get_attribute($this->env, $this->source, $context["eventDateTicket"], "getOrderElementsQuantitySum", [], "method", false, false, false, 53) > 0))) {
                        // line 54
                        echo "                        \$('.event-date-ticket-reference').each(function () {
                            if (\$(this).val() == \"";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDateTicket"], "reference", [], "any", false, false, false, 55), "html", null, true);
                        echo "\") {
                                \$(this).closest(\"fieldset\").find('.event-date-ticket-quantity').trigger(\"touchspin.updatesettings\", {min: ";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDateTicket"], "getOrderElementsQuantitySum", [], "method", false, false, false, 56), "html", null, true);
                        echo "});
                                \$(this).closest(\"fieldset\").find('.event-date-ticket-quantity').attr(\"data-min\", ";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eventDateTicket"], "getOrderElementsQuantitySum", [], "method", false, false, false, 57), "html", null, true);
                        echo ");
                            }
                        });
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDateTicket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eventDate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        ";
        }
        // line 63
        echo "
                \$(document).on('submit', 'form[name=\"event\"]', function () {
                    \$('form[name=\"event\"]').find('fieldset').prop('disabled', false);
                });

            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Event/add-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 63,  197 => 62,  191 => 61,  180 => 57,  176 => 56,  172 => 55,  169 => 54,  163 => 53,  158 => 52,  147 => 48,  142 => 46,  139 => 45,  133 => 44,  131 => 43,  126 => 40,  122 => 39,  108 => 28,  104 => 27,  99 => 26,  97 => 25,  91 => 21,  89 => 20,  83 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 11,  57 => 9,  52 => 1,  48 => 7,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Event/add-edit.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Event/add-edit.html.twig");
    }
}
