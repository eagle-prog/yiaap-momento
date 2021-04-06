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

/* Dashboard/Shared/Event/index.html.twig */
class __TwigTemplate_b40b4ade56536b2f5e9ad1cc5f2d7104f77400f46d7d3698b422a416bf0a8b09 extends \Twig\Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 4
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage events");
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 6
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My events");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Event/index.html.twig", 1);
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
        $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 14
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Event/index.html.twig", 14)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 15
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 17), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 20
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Event/index.html.twig", 20)->display($context);
        // line 21
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    <div class=\"box shadow-none bg-gray mb-4\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-lg-2 text-center text-lg-left mb-3 mb-lg-0\">
                                <span class=\"center-lg-y text-muted\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "getTotalItemCount", [], "any", false, false, false, 27)]), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-12 col-lg-8 text-center text-lg-right\">
                                <label for=\"sortable-select\" class=\"display-inline\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                                    <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                        ";
        // line 32
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["events"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "e.createdAt", ["direction" => "desc", "criteria" => "e.createdAt"]);
        echo "
                                        ";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["events"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "e.createdAt", ["direction" => "asc", "criteria" => "e.createdAt"]);
        echo "
                                        ";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["events"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popularity") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "e.views", ["direction" => "desc", "criteria" => "e.views"]);
        echo "
                                        ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["events"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popularity") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "e.views", ["direction" => "asc", "criteria" => "e.views"]);
        echo "
                                    </select>
                                </label>
                                ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 39
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_event_add");
            echo "\" class=\"btn btn-primary ml-3\"><i class=\"fas fa-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new event"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 41
        echo "                            </div>
                            <div class=\"col-sm-12 col-lg-2 text-center text-lg-right\">
                                <a href=\"#search-filters\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle display the search filters"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"search-filters\"><i class=\"fab fa-searchengin fa-lg\"></i></a>
                            </div>
                            <div id=\"search-filters\" class=\"col-sm-12 col-lg-12 text-center mb-3 mb-lg-0 collapse show\">
                                <hr>
                                <form>
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"slug\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"slug\" name=\"slug\" data-url-list=\"";
        // line 51
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_events", ["published" => "all", "elapsed" => "all"])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_events", ["organizer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "organizer", [], "any", false, false, false, 51), "slug", [], "any", false, false, false, 51), "published" => "all", "elapsed" => "all"]))), "html", null, true);
        echo "\" data-minimum-input-length=\"0\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"category\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</label>
                                            <select id=\"category\" name=\"category\" class=\"form-control bg-white select2\" data-sort-options=\"1\">
                                                <option value=\"all\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</option>
                                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getCategories", [0 => []], "method", false, false, false, 57), "getQuery", [], "method", false, false, false, 57), "getResult", [], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 58
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"venue\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venue"), "html", null, true);
        echo "</label>
                                            <select id=\"venue\" name=\"venue\" class=\"form-control bg-white select2\" data-sort-options=\"1\">
                                                <option value=\"all\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</option>
                                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getVenues", [0 => []], "method", false, false, false, 66), "getQuery", [], "method", false, false, false, 66), "getResult", [], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            // line 67
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 67), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                                            </select>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"elapsed-filter-all\" type=\"radio\" name=\"elapsed\" value=\"all\" class=\"custom-control-input\">
                                                <label for=\"elapsed-filter-all\" class=\"custom-control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"elapsed-filter-yes\" type=\"radio\" name=\"elapsed\" value=\"1\" class=\"custom-control-input\">
                                                <label for=\"elapsed-filter-yes\" class=\"custom-control-label\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Elapsed only"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"elapsed-filter-no\" type=\"radio\" name=\"elapsed\" value=\"0\" class=\"custom-control-input\">
                                                <label for=\"elapsed-filter-no\" class=\"custom-control-label\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not elapsed only"), "html", null, true);
        echo "</label>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"published-filter-all\" type=\"radio\" name=\"published\" value=\"all\" class=\"custom-control-input\">
                                                <label for=\"published-filter-all\" class=\"custom-control-label\">";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"published-filter-yes\" type=\"radio\" name=\"published\" value=\"1\" class=\"custom-control-input\">
                                                <label for=\"published-filter-yes\" class=\"custom-control-label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published only"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"published-filter-no\" type=\"radio\" name=\"published\" value=\"0\" class=\"custom-control-input\">
                                                <label for=\"published-filter-no\" class=\"custom-control-label\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft only"), "html", null, true);
        echo "</label>
                                            </div>
                                        </div>

                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"><i class=\"fas fa-search\"></i></button>
                                            <button type=\"reset\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "\"><i class=\"fas fa-search-minus\"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "getTotalItemCount", [], "any", false, false, false, 110) > 0)) {
            // line 111
            echo "                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    ";
            // line 114
            $this->loadTemplate("Dashboard/Shared/Event/manage-events-table.html.twig", "Dashboard/Shared/Event/index.html.twig", 114)->display(twig_array_merge($context, ["events" => ($context["events"] ?? null)]));
            // line 115
            echo "                                </div>
                            </div>
                            ";
            // line 117
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["events"] ?? null), null, [], ["align" => "center"]);
            echo "
                        </div>
                    ";
        } else {
            // line 120
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Event/index.html.twig", 120)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No events found"), "icon" => "fas fa-exclamation-circle"]));
            // line 121
            echo "                    ";
        }
        // line 122
        echo "                </div>
            </div>

        </div>
    </section>

";
    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "
    <script>

        \$(document).ready(function () {

            if (getURLParameter(\"slug\")) {
                var url = \"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_event", ["slug" => "eventslug", "published" => "all", "elapsed" => "all"]);
        echo "\";
                url = url.replace(\"eventslug\", getURLParameter(\"slug\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_slug').select2('data', {id: data.slug, text: data.text});
                    \$('#slug').val(data.slug).change();
                });

            }

            if (getURLParameter('category') != \"null\") {
                \$('#category').val(getURLParameter('category')).trigger(\"change\");
            }

            if (getURLParameter('venue') != \"null\") {
                \$('#venue').val(getURLParameter('venue')).trigger(\"change\");
            }

            if (getURLParameter('elapsed') != \"null\") {
                \$('input[type=\"radio\"][name=\"elapsed\"][value=\"' + getURLParameter('elapsed') + '\"]').attr(\"checked\", \"checked\");
            }

            if (getURLParameter('published') != \"null\") {
                \$('input[type=\"radio\"][name=\"published\"][value=\"' + getURLParameter('published') + '\"]').attr(\"checked\", \"checked\");
            }

        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 137,  321 => 131,  317 => 130,  307 => 122,  304 => 121,  301 => 120,  295 => 117,  291 => 115,  289 => 114,  284 => 111,  282 => 110,  271 => 102,  267 => 101,  259 => 96,  252 => 92,  245 => 88,  236 => 82,  229 => 78,  222 => 74,  215 => 69,  204 => 67,  200 => 66,  196 => 65,  191 => 63,  186 => 60,  175 => 58,  171 => 57,  167 => 56,  162 => 54,  156 => 51,  152 => 50,  142 => 43,  138 => 41,  130 => 39,  128 => 38,  122 => 35,  118 => 34,  114 => 33,  110 => 32,  106 => 31,  102 => 30,  96 => 27,  88 => 21,  86 => 20,  80 => 17,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 11,  57 => 9,  52 => 1,  49 => 6,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Event/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Event/index.html.twig");
    }
}
