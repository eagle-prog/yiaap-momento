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

/* Dashboard/Administrator/Category/index.html.twig */
class __TwigTemplate_9d5dabf1abe43fbbe9bc29e37120ba26490b0b7d7125f50aaf9fd4321fd1d32a extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage categories");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Category/index.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Category/index.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Category/index.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    <div class=\"box shadow-none bg-gray mb-4\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-lg-2 text-center text-lg-left mb-3 mb-lg-0\">
                                <span class=\"center-lg-y text-muted\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "getTotalItemCount", [], "any", false, false, false, 23)]), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-12 col-lg-4 text-center mb-3 mb-lg-0\">
                                <form>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</a>
                                            <div class=\"dropdown-menu dropdown-menu-arrow p-3\" style=\"min-width:300px;max-width:500px;\">
                                                <label for=\"keyword\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keyword"), "html", null, true);
        echo "</label>
                                                <input id=\"keyword\" name=\"keyword\" type=\"text\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "get", [0 => "keyword"], "method", false, false, false, 31), "html", null, true);
        echo "\">
                                            </div>
                                        </li>
                                        <li class=\"list-inline-item dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured"), "html", null, true);
        echo "</a>
                                            <div class=\"dropdown-menu dropdown-menu-arrow p-3\" style=\"min-width:450px;max-width:550px;\">
                                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"featured-all\" name=\"featured\" value=\"all\">
                                                    <label class=\"custom-control-label\" for=\"featured-all\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</label>
                                                </div>
                                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"featured-yes\" name=\"featured\" value=\"1\">
                                                    <label class=\"custom-control-label\" for=\"featured-yes\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured only"), "html", null, true);
        echo "</label>
                                                </div>
                                                <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                    <input type=\"radio\" class=\"custom-control-input\" id=\"featured-no\" name=\"featured\" value=\"0\">
                                                    <label class=\"custom-control-label\" for=\"featured-no\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not featured"), "html", null, true);
        echo "</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=\"list-inline-item ml-3\"><button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button></li>
                                    </ul>
                                </form>
                            </div>
                            <div class=\"col-sm-12 col-lg-6 text-center text-lg-right\">
                                <label for=\"sortable-select\" class=\"display-inline\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                                    <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                        ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["categories"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "c.createdAt", ["direction" => "desc", "criteria" => "c.createdAt"]);
        echo "
                                        ";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["categories"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "c.createdAt", ["direction" => "asc", "criteria" => "c.createdAt"]);
        echo "
                                        ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["categories"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured order") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "c.featuredorder", ["direction" => "desc", "criteria" => "c.featuredorder"]);
        echo "
                                        ";
        // line 60
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["categories"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured order") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "c.featuredorder", ["direction" => "asc", "criteria" => "c.featuredorder"]);
        echo "
                                    </select>
                                </label>
                                <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_add");
        echo "\" class=\"btn btn-primary ml-3\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new category"), "html", null, true);
        echo "\"><i class=\"fas fa-plus\"></i></a>
                            </div>
                        </div>
                    </div>

                    ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "getTotalItemCount", [], "any", false, false, false, 68) > 0)) {
            // line 69
            echo "
                        <div class=\"row\">

                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover table-vcenter text-nowrap\">
                                            <thead>
                                                <tr>
                                                    <th>";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events count"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Icon"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is featured"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                                                    <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 90
                echo "
                                                    <tr>
                                                        <td>
                                                            ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 93), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 96
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "events", [], "any", false, false, false, 96)), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            <i class=\"";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 99), "html", null, true);
                echo " fa-2x fa-fw\"></i>
                                                        </td>
                                                        <td>
                                                            <a class=\"fancybox\" href=\"";
                // line 102
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["category"], "imageName", [], "any", false, false, false, 102)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["category"], "getImagePath", [], "any", false, false, false, 102))) : (twig_get_attribute($this->env, $this->source, $context["category"], "getImagePlaceholder", [], "any", false, false, false, 102))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enlarge"), "html", null, true);
                echo "\">
                                                                <img src=\"";
                // line 103
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["category"], "imageName", [], "any", false, false, false, 103)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["category"], "getImagePath", [], "any", false, false, false, 103))) : (twig_get_attribute($this->env, $this->source, $context["category"], "getImagePlaceholder", [], "any", false, false, false, 103))), "html", null, true);
                echo "\" class=\"img-thumbnail img-50-50\" />
                                                            </a>
                                                        </td>
                                                        <td>
                                                            ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["category"], "featured", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "featuredorder", [], "any", false, false, false, 108)) {
                        echo "( ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order = "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "featuredorder", [], "any", false, false, false, 108), "html", null, true);
                        echo " )";
                    }
                    // line 109
                    echo "                                                            ";
                } else {
                    // line 110
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true);
                    echo "
                                                            ";
                }
                // line 112
                echo "                                                        </td>
                                                        <td>
                                                            ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["category"], "hidden", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-eye-slash fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hidden"), "html", null, true);
                    echo "</span>
                                                            ";
                } else {
                    // line 117
                    echo "                                                                <span class=\"badge badge-success\"><i class=\"fas fa-eye fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Visible"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 119
                echo "                                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "deletedAt", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "                                                                <br>
                                                                <br>
                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 124
                echo "                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div class=\"item-action dropdown\">
                                                                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                                    <a href=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 129)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-edit fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
                echo "</a>
                                                                    ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["category"], "hidden", [], "any", false, false, false, 130)) {
                    // line 131
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 131)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show"), "html", null, true);
                    echo "</a>
                                                                    ";
                } else {
                    // line 133
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_hide", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 133)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye-slash fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hide"), "html", null, true);
                    echo " </a>
                                                                    ";
                }
                // line 135
                echo "                                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "featured", [], "any", false, false, false, 135)) {
                    // line 136
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_notfeatured", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 136)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-thumbtack fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as not featured"), "html", null, true);
                    echo "</a>
                                                                    ";
                } else {
                    // line 138
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_featured", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 138)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-star fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as featured"), "html", null, true);
                    echo " <i class=\"fas fa-info-circle\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will be show in the homepage, the explore menu item dropdown and in the footer"), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\"></i> </a>
                                                                    ";
                }
                // line 140
                echo "                                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "deletedAt", [], "any", false, false, false, 140)) {
                    // line 141
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_restore", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 141)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                    echo "</a>
                                                                        <span data-target=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 142)]), "html", null, true);
                    echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the category PERMANENTLY"), "html", null, true);
                    echo "\"><i class=\"dropdown-icon fas fa-trash fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                    echo "</span>
                                                                    ";
                } else {
                    // line 144
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_category_disable", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 144)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                    echo " </a>
                                                                    ";
                }
                // line 146
                echo "                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                ";
            // line 156
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["categories"] ?? null), null, [], ["align" => "center"]);
            echo "
                            </div>

                        </div>

                    ";
        } else {
            // line 162
            echo "
                        ";
            // line 163
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Administrator/Category/index.html.twig", 163)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No categories found"), "icon" => "fas fa-exclamation-circle"]));
            // line 164
            echo "
                    ";
        }
        // line 166
        echo "                </div>
            </div>

        </div>
    </section>

";
    }

    // line 174
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 175
        echo "
    <script>

        \$(document).ready(function () {
            if (getURLParameter('featured')) {
                \$('input[type=\"radio\"][name=\"featured\"][value=\"' + getURLParameter('featured') + '\"]').attr(\"checked\", \"checked\");
            }
        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 175,  440 => 174,  430 => 166,  426 => 164,  424 => 163,  421 => 162,  412 => 156,  406 => 152,  395 => 146,  387 => 144,  378 => 142,  371 => 141,  368 => 140,  358 => 138,  350 => 136,  347 => 135,  339 => 133,  331 => 131,  329 => 130,  323 => 129,  316 => 124,  311 => 122,  307 => 120,  304 => 119,  298 => 117,  292 => 115,  290 => 114,  286 => 112,  280 => 110,  277 => 109,  266 => 108,  264 => 107,  257 => 103,  251 => 102,  245 => 99,  239 => 96,  233 => 93,  228 => 90,  224 => 89,  215 => 83,  211 => 82,  207 => 81,  203 => 80,  199 => 79,  195 => 78,  184 => 69,  182 => 68,  172 => 63,  166 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  134 => 46,  127 => 42,  120 => 38,  113 => 34,  107 => 31,  103 => 30,  98 => 28,  90 => 23,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Category/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Category/index.html.twig");
    }
}
