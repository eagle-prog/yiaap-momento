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

/* Dashboard/Administrator/Settings/menus.html.twig */
class __TwigTemplate_6afaf4e06f22d14664c128d7608af7dfd67cd8ca71da03f3ae18cfa8417240b6 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage menus");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/menus.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/menus.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/menus.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    ";
        // line 20
        if ((twig_length_filter($this->env, ($context["menus"] ?? null)) > 0)) {
            // line 21
            echo "
                        <div class=\"row\">

                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover table-vcenter text-nowrap\">
                                            <thead>
                                                <tr>
                                                    <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Elements"), "html", null, true);
            echo "</th>
                                                    <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 39
                echo "
                                                    <tr>
                                                        <td>
                                                            ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "header", [], "any", false, false, false, 45), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "menuElements", [], "any", false, false, false, 48)), "html", null, true);
                echo "
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div class=\"item-action dropdown\">
                                                                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                                    <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_settings_menus_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["menu"], "slug", [], "any", false, false, false, 54)]), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    ";
        } else {
            // line 70
            echo "
                        ";
            // line 71
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Administrator/Settings/menus.html.twig", 71)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No menus found"), "icon" => "fas fa-exclamation-circle"]));
            // line 72
            echo "
                    ";
        }
        // line 74
        echo "                </div>
            </div>

        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/menus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 74,  177 => 72,  175 => 71,  172 => 70,  161 => 61,  146 => 54,  137 => 48,  131 => 45,  125 => 42,  120 => 39,  116 => 38,  107 => 32,  103 => 31,  99 => 30,  88 => 21,  86 => 20,  81 => 17,  79 => 16,  73 => 13,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/menus.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/menus.html.twig");
    }
}
