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

/* Dashboard/Shared/Venue/index.html.twig */
class __TwigTemplate_637b1017b4475fe4f063e37928aa4a205a4ee9f9096679bedbfd7f619e081541 extends \Twig\Template
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
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage venues");
        } else {
            // line 6
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My venues");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Venue/index.html.twig", 1);
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
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "current" => ($context["pagetitle"] ?? null)]];
        // line 14
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Venue/index.html.twig", 14)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Venue/index.html.twig", 20)->display($context);
        // line 21
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">

                    <div class=\"box shadow-none bg-gray mb-4\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-lg-2 text-center text-lg-left mb-3 mb-lg-0\">
                                <span class=\"center-lg-y text-muted\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["venues"] ?? null), "getTotalItemCount", [], "any", false, false, false, 27)]), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-12 col-lg-4 text-center mb-3 mb-lg-0\">
                                <form>
                                    <ul class=\"list-inline\">
                                        <li class=\"list-inline-item dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</a>
                                            <div class=\"dropdown-menu dropdown-menu-arrow p-3\" style=\"min-width:300px;max-width:500px;\">
                                                <label for=\"keyword\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keyword"), "html", null, true);
        echo "</label>
                                                <input id=\"keyword\" name=\"keyword\" type=\"text\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "get", [0 => "keyword"], "method", false, false, false, 35), "html", null, true);
        echo "\">
                                            </div>
                                        </li>
                                        ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 39
            echo "                                            <li class=\"list-inline-item dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listed on directory"), "html", null, true);
            echo "</a>
                                                <div class=\"dropdown-menu dropdown-menu-arrow p-3\" style=\"min-width:450px;max-width:550px;\">
                                                    <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                        <input type=\"radio\" class=\"custom-control-input\" id=\"directory-all\" name=\"directory\" value=\"all\">
                                                        <label class=\"custom-control-label\" for=\"directory-all\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
            echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                        <input type=\"radio\" class=\"custom-control-input\" id=\"directory-yes\" name=\"directory\" value=\"1\">
                                                        <label class=\"custom-control-label\" for=\"directory-yes\">";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true);
            echo "</label>
                                                    </div>
                                                    <div class=\"custom-control custom-checkbox custom-control-inline\">
                                                        <input type=\"radio\" class=\"custom-control-input\" id=\"directory-no\" name=\"directory\" value=\"0\">
                                                        <label class=\"custom-control-label\" for=\"directory-no\">";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true);
            echo "</label>
                                                    </div>
                                                </div>
                                            </li>
                                        ";
        }
        // line 56
        echo "                                        <li class=\"list-inline-item ml-3\"><button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-search\"></i></button></li>
                                    </ul>
                                </form>
                            </div>
                            <div class=\"col-sm-12 col-lg-6 text-center text-lg-right\">
                                <label for=\"sortable-select\" class=\"display-inline\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                                    <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                        ";
        // line 63
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["venues"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "v.createdAt", ["direction" => "desc", "criteria" => "v.createdAt"]);
        echo "
                                        ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["venues"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "v.createdAt", ["direction" => "asc", "criteria" => "v.createdAt"]);
        echo "
                                    </select>
                                </label>
                                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 68
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_add");
            echo "\" class=\"btn btn-primary ml-3\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new venue"), "html", null, true);
            echo "\"><i class=\"fas fa-plus\"></i></a>
                                    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 70
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_add");
            echo "\" class=\"btn btn-primary ml-3\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new venue"), "html", null, true);
            echo "\"><i class=\"fas fa-plus\"></i></a>
                                    ";
        }
        // line 72
        echo "                            </div>
                        </div>
                    </div>

                    ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["venues"] ?? null), "getTotalItemCount", [], "any", false, false, false, 76) > 0)) {
            // line 77
            echo "
                        <div class=\"row\">

                            <div class=\"col-12\">
                                <div class=\"card\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover table-vcenter text-nowrap\">
                                            <thead>
                                                <tr>
                                                    <th>";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image"), "html", null, true);
            echo "</th>
                                                        ";
            // line 88
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 89
                echo "                                                        <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
                echo "</th>
                                                        ";
            }
            // line 91
            echo "                                                    <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events count"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                                                    <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["venues"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
                // line 99
                echo "
                                                    <tr>
                                                        <td>
                                                            <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "name", [], "any", false, false, false, 102), "html", null, true);
                echo "</a>
                                                        </td>
                                                        <td>
                                                            <a class=\"fancybox\" href=\"";
                // line 105
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "images", [], "any", false, false, false, 105)) > 0)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["venue"], "getFirstImageOrPlaceholder", [], "any", false, false, false, 105))) : (twig_get_attribute($this->env, $this->source, $context["venue"], "getFirstImageOrPlaceholder", [], "any", false, false, false, 105))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enlarge"), "html", null, true);
                echo "\">
                                                                <img src=\"";
                // line 106
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "images", [], "any", false, false, false, 106)) > 0)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["venue"], "getFirstImageOrPlaceholder", [], "any", false, false, false, 106))) : (twig_get_attribute($this->env, $this->source, $context["venue"], "getFirstImageOrPlaceholder", [], "any", false, false, false, 106))), "html", null, true);
                echo "\" class=\"img-thumbnail img-50-50\" />
                                                            </a>
                                                        </td>
                                                        ";
                // line 109
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 110
                    echo "                                                            <td>
                                                                ";
                    // line 111
                    ((twig_get_attribute($this->env, $this->source, $context["venue"], "organizer", [], "any", false, false, false, 111)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["venue"], "organizer", [], "any", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true))) : (print ("Added by administrator")));
                    echo "
                                                            </td>
                                                        ";
                }
                // line 114
                echo "                                                        <td>
                                                            ";
                // line 115
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "eventdates", [], "any", false, false, false, 115)), "html", null, true);
                echo "
                                                        </td>
                                                        <td>
                                                            ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["venue"], "hidden", [], "any", false, false, false, 118)) {
                    // line 119
                    echo "                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-eye-slash fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hidden"), "html", null, true);
                    echo "</span>
                                                            ";
                } else {
                    // line 121
                    echo "                                                                <span class=\"badge badge-success\"><i class=\"fas fa-eye fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Visible"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 123
                echo "                                                            <br>
                                                            <br>
                                                            ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["venue"], "listedondirectory", [], "any", false, false, false, 125)) {
                    // line 126
                    echo "                                                                <span class=\"badge badge-success\"><i class=\"fas fa-eye fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Listed on the directory"), "html", null, true);
                    echo "</span>
                                                            ";
                } else {
                    // line 128
                    echo "                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-eye-slash fa-fw\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not listed on the directory"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 130
                echo "                                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["venue"], "deletedAt", [], "any", false, false, false, 130)) {
                    // line 131
                    echo "                                                                <br>
                                                                <br>
                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                    // line 133
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 135
                echo "                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div class=\"item-action dropdown\">
                                                                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                // line 140
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 141
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 141)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-edit fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
                    echo "</a>
                                                                        ";
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, $context["venue"], "hidden", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 143)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show"), "html", null, true);
                        echo "</a>
                                                                        ";
                    } else {
                        // line 145
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_hide", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 145)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye-slash fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hide"), "html", null, true);
                        echo " </a>
                                                                        ";
                    }
                    // line 147
                    echo "                                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["venue"], "listedondirectory", [], "any", false, false, false, 147)) {
                        // line 148
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_hidefromdirectory", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 148)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-minus-square fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hide from public directory"), "html", null, true);
                        echo " </a>
                                                                        ";
                    } else {
                        // line 150
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_listondirectory", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 150)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-plus-square fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List on public directory"), "html", null, true);
                        echo "</a>
                                                                        ";
                    }
                    // line 152
                    echo "                                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["venue"], "deletedAt", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_restore", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 153)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                        echo "</a>
                                                                            <span data-target=\"";
                        // line 154
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 154)]), "html", null, true);
                        echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the venue PERMANENTLY"), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-trash fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                        echo "</span>
                                                                        ";
                    } else {
                        // line 156
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_venue_disable", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 156)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                        echo " </a>
                                                                        ";
                    }
                    // line 158
                    echo "                                                                    ";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                    // line 159
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 159)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-edit fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
                    echo "</a>
                                                                        ";
                    // line 160
                    if (twig_get_attribute($this->env, $this->source, $context["venue"], "hidden", [], "any", false, false, false, 160)) {
                        // line 161
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 161)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show"), "html", null, true);
                        echo "</a>
                                                                        ";
                    } else {
                        // line 163
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_hide", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 163)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-eye-slash fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hide"), "html", null, true);
                        echo " </a>
                                                                        ";
                    }
                    // line 165
                    echo "                                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["venue"], "deletedAt", [], "any", false, false, false, 165)) {
                        // line 166
                        echo "                                                                            <span data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 166)]), "html", null, true);
                        echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the venue PERMANENTLY"), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-trash fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                        echo "</span>
                                                                        ";
                    } else {
                        // line 168
                        echo "                                                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_venue_disable", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 168)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                        echo " </a>
                                                                        ";
                    }
                    // line 170
                    echo "                                                                    ";
                }
                // line 171
                echo "                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                ";
            // line 181
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["venues"] ?? null), null, [], ["align" => "center"]);
            echo "
                            </div>

                        </div>

                    ";
        } else {
            // line 187
            echo "
                        ";
            // line 188
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Venue/index.html.twig", 188)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No venues found"), "icon" => "fas fa-exclamation-circle"]));
            // line 189
            echo "
                    ";
        }
        // line 191
        echo "                </div>
            </div>

        </div>
    </section>

";
    }

    // line 199
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        echo "
    <script>

        \$(document).ready(function () {
            if (getURLParameter('directory') != \"null\") {
                \$('input[type=\"radio\"][name=\"directory\"][value=\"' + getURLParameter('directory') + '\"]').attr(\"checked\", \"checked\");
            }
        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Venue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 200,  513 => 199,  503 => 191,  499 => 189,  497 => 188,  494 => 187,  485 => 181,  479 => 177,  468 => 171,  465 => 170,  457 => 168,  447 => 166,  444 => 165,  436 => 163,  428 => 161,  426 => 160,  419 => 159,  416 => 158,  408 => 156,  399 => 154,  392 => 153,  389 => 152,  381 => 150,  373 => 148,  370 => 147,  362 => 145,  354 => 143,  352 => 142,  345 => 141,  343 => 140,  336 => 135,  331 => 133,  327 => 131,  324 => 130,  318 => 128,  312 => 126,  310 => 125,  306 => 123,  300 => 121,  294 => 119,  292 => 118,  286 => 115,  283 => 114,  277 => 111,  274 => 110,  272 => 109,  266 => 106,  260 => 105,  252 => 102,  247 => 99,  243 => 98,  234 => 92,  229 => 91,  223 => 89,  221 => 88,  217 => 87,  213 => 86,  202 => 77,  200 => 76,  194 => 72,  186 => 70,  178 => 68,  176 => 67,  170 => 64,  166 => 63,  162 => 62,  158 => 61,  151 => 56,  143 => 51,  136 => 47,  129 => 43,  121 => 39,  119 => 38,  113 => 35,  109 => 34,  104 => 32,  96 => 27,  88 => 21,  86 => 20,  80 => 17,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 11,  57 => 9,  52 => 1,  49 => 6,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Venue/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Venue/index.html.twig");
    }
}
