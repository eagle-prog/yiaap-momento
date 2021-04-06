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

/* Dashboard/Administrator/User/index.html.twig */
class __TwigTemplate_b1d1959868bb695f4ba6a248bdbfa5452da3eb0ce7c6a4a0fa7d995489d05c6e extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage users");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/User/index.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/User/index.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/User/index.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    <div class=\"box shadow-none bg-gray mb-4\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-lg-4 text-center text-lg-left mb-3 mb-lg-0\">
                                <span class=\"center-lg-y text-muted\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "getTotalItemCount", [], "any", false, false, false, 23)]), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-12 col-lg-6 text-center text-lg-right\">
                                <label for=\"sortable-select\" class=\"display-inline\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                                    <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                        ";
        // line 28
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["users"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "u.createdAt", ["direction" => "desc", "criteria" => "u.createdAt"]);
        echo "
                                        ";
        // line 29
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["users"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "u.createdAt", ["direction" => "asc", "criteria" => "u.createdAt"]);
        echo "
                                        ";
        // line 30
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["users"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last login") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "u.lastLogin", ["direction" => "desc", "criteria" => "u.lastLogin"]);
        echo "
                                        ";
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["users"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last login") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "u.lastLogin", ["direction" => "asc", "criteria" => "u.lastLogin"]);
        echo "
                                    </select>
                                </label>
                            </div>
                            <div class=\"col-sm-12 col-lg-2 text-center text-lg-right\">
                                <a href=\"#search-filters\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle display the search filters"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"search-filters\"><i class=\"fab fa-searchengin fa-lg\"></i></a>
                            </div>
                            <div id=\"search-filters\" class=\"col-sm-12 col-lg-12 text-center mb-3 mb-lg-0 collapse show\">
                                <hr>
                                <form>
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"role\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        echo "</label>
                                            <select id=\"role\" name=\"role\" class=\"form-control bg-white select2\">
                                                <option value=\"all\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</option>
                                                <option value=\"organizer\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
        echo "</option>
                                                <option value=\"attendee\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attendee"), "html", null, true);
        echo "</option>
                                                <option value=\"pointofsale\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Point of sale"), "html", null, true);
        echo "</option>
                                                <option value=\"scanner\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scanner"), "html", null, true);
        echo "</option>
                                            </select>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"createdbyorganizerslug\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created by organizer"), "html", null, true);
        echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select parent of 'Point of sale' or 'Scanner'"), "html", null, true);
        echo "\"></i></label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"createdbyorganizerslug\" name=\"createdbyorganizerslug\" data-url-list=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizers");
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"organizername\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer name"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control mr-sm-2 mb-2 mb-sm-0 bg-white\" id=\"organizername\" name=\"organizername\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 58), "get", [0 => "organizername"], "method", false, false, false, 58), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"username\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control mr-sm-2 mb-2 mb-sm-0 bg-white\" id=\"username\" name=\"username\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 62), "get", [0 => "username"], "method", false, false, false, 62), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"email\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control mr-sm-2 mb-2 mb-sm-0 bg-white\" id=\"email\" name=\"email\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "get", [0 => "email"], "method", false, false, false, 66), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"firstname\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control mr-sm-2 mb-2 mb-sm-0 bg-white\" id=\"firstname\" name=\"firstname\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "get", [0 => "firstname"], "method", false, false, false, 70), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"lastname\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"form-control mr-sm-2 mb-2 mb-sm-0 bg-white\" id=\"lastname\" name=\"lastname\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 74), "get", [0 => "lastname"], "method", false, false, false, 74), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"enabled-filter-all\" type=\"radio\" name=\"enabled\" value=\"all\" class=\"custom-control-input\">
                                                <label for=\"enabled-filter-all\" class=\"custom-control-label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"enabled-filter-yes\" type=\"radio\" name=\"enabled\" value=\"1\" class=\"custom-control-input\">
                                                <label for=\"enabled-filter-yes\" class=\"custom-control-label\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled only"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"enabled-filter-no\" type=\"radio\" name=\"enabled\" value=\"0\" class=\"custom-control-input\">
                                                <label for=\"enabled-filter-no\" class=\"custom-control-label\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled only"), "html", null, true);
        echo "</label>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"countryslug\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"countryslug\" name=\"countryslug\" data-url-list=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_countries");
        echo "\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"><i class=\"fas fa-search\"></i></button>
                                            <button type=\"reset\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "\"><i class=\"fas fa-search-minus\"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "getTotalItemCount", [], "any", false, false, false, 104) > 0)) {
            // line 105
            echo "                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"card\">
                                    ";
            // line 108
            $this->loadTemplate("Dashboard/Administrator/User/manage-users-table.html.twig", "Dashboard/Administrator/User/index.html.twig", 108)->display(twig_array_merge($context, ["users" => ($context["users"] ?? null)]));
            // line 109
            echo "                                </div>
                                ";
            // line 110
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["users"] ?? null), null, [], ["align" => "center"]);
            echo "
                            </div>
                        </div>
                    ";
        } else {
            // line 114
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Administrator/User/index.html.twig", 114)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No users found"), "icon" => "fas fa-exclamation-circle"]));
            // line 115
            echo "                    ";
        }
        // line 116
        echo "                </div>
            </div>

        </div>
    </section>

";
    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "
    <script>

        \$(document).ready(function () {

            if (getURLParameter(\"createdbyorganizerslug\")) {
                var url = \"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizer", ["slug" => "organizerslug"]);
        echo "\";
                url = url.replace(\"organizerslug\", getURLParameter(\"createdbyorganizerslug\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_createdbyorganizerslug').select2('data', {id: data.slug, text: data.text});
                    \$('#createdbyorganizerslug').val(data.slug).change();
                });

            }

            if (getURLParameter(\"countryslug\")) {
                var url = \"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_country", ["slug" => "countryslug"]);
        echo "\";
                url = url.replace(\"countryslug\", getURLParameter(\"countryslug\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_countryslug').select2('data', {id: data.slug, text: data.text});
                    \$('#countryslug').val(data.slug).change();
                });

            }

            if (getURLParameter('role')) {
                \$('#role').val(getURLParameter('role')).change();
            }

            if (getURLParameter('enabled')) {
                \$('input[type=\"radio\"][name=\"enabled\"][value=\"' + getURLParameter('enabled') + '\"]').attr(\"checked\", \"checked\");
            }

            if (getURLParameter('countryslug')) {
                \$('#countryslug').val(getURLParameter('countryslug'));
            }

        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/User/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 144,  319 => 131,  311 => 125,  307 => 124,  297 => 116,  294 => 115,  291 => 114,  284 => 110,  281 => 109,  279 => 108,  274 => 105,  272 => 104,  261 => 96,  257 => 95,  251 => 92,  247 => 91,  240 => 87,  233 => 83,  226 => 79,  218 => 74,  214 => 73,  208 => 70,  204 => 69,  198 => 66,  194 => 65,  188 => 62,  184 => 61,  178 => 58,  174 => 57,  168 => 54,  162 => 53,  155 => 49,  151 => 48,  147 => 47,  143 => 46,  139 => 45,  134 => 43,  124 => 36,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  90 => 23,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/User/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/User/index.html.twig");
    }
}
