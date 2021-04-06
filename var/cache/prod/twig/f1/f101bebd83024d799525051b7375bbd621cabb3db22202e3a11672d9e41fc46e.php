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

/* Dashboard/Shared/Payout/requests.html.twig */
class __TwigTemplate_0bf410da64e9a6dcad36baeee6a9db5455d6170eb02b58434329c6dab028f84a extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout requests");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Payout/requests.html.twig", 1);
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
        $context["navigation"] = [0 => ["current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Payout/requests.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Payout/requests.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 20
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Payout/requests.html.twig", 20)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To submit a new payout request for an event date, go to the My events page and click on the Request payout link next to the event"), "icon" => "fas fa-info-circle"]));
            // line 21
            echo "                    ";
        }
        // line 22
        echo "                    <div class=\"box shadow-none bg-gray mb-4\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-lg-3 text-center text-lg-left mb-3 mb-lg-0\">
                                <span class=\"center-lg-y text-muted\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_get_attribute($this->env, $this->source, ($context["payoutRequests"] ?? null), "getTotalItemCount", [], "any", false, false, false, 25)]), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"col-sm-12 col-lg-5 text-center text-lg-right\">
                                <label for=\"sortable-select\" class=\"display-inline\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by"), "html", null, true);
        echo "
                                    <select id=\"sortable-select\" class=\"form-control display-inline-block bg-white select2 ml-3\" data-placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an option"), "html", null, true);
        echo "\" style=\"width: 50%;\">
                                        ";
        // line 30
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["payoutRequests"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "p.createdAt", ["direction" => "desc", "criteria" => "p.createdAt"]);
        echo "
                                        ";
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["payoutRequests"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Creation date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "p.createdAt", ["direction" => "asc", "criteria" => "p.createdAt"]);
        echo "
                                        ";
        // line 32
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["payoutRequests"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("desc")) . ")"), "p.updatedAt", ["direction" => "desc", "criteria" => "p.updatedAt"]);
        echo "
                                        ";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["payoutRequests"] ?? null), ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing date") . " (") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("asc")) . ")"), "p.updatedAt", ["direction" => "asc", "criteria" => "p.updatedAt"]);
        echo "
                                    </select>
                                </label>
                            </div>
                            <div class=\"col-sm-12 col-lg-4 text-center text-lg-right\">
                                <a href=\"#search-filters\" class=\"btn btn-primary has-tooltip\" data-toggle=\"collapse\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle display the search filters"), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"search-filters\"><i class=\"fab fa-searchengin fa-lg\"></i></a>
                            </div>
                            <div id=\"search-filters\" class=\"col-sm-12 col-lg-12 text-center mb-3 mb-lg-0 collapse show\">
                                <hr>
                                <form>
                                    <div class=\"row\">
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"reference\">";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white\" id=\"reference\" name=\"reference\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"eventdate\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event date"), "html", null, true);
        echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a specific event date"), "html", null, true);
        echo "\"></i></label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"eventdate\" name=\"eventdate\" data-url-list=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventdates_by_event", ["eventSlug" => "all"]);
        echo "\" data-minimum-input-length=\"0\">
                                        </div>
                                        ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 53
            echo "                                            <div class=\"col-12 col-sm-4 text-left mb-4\">
                                                <label for=\"organizer\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
            echo " <i class=\"fas fa-info-circle\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All payout requests for an organizer"), "html", null, true);
            echo "\"></i></label>
                                                <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 autocomplete bg-white\" id=\"organizer\" name=\"organizer\" data-url-list=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizers");
            echo "\">
                                            </div>
                                        ";
        }
        // line 58
        echo "                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"datefrom\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From date"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white datetimepicker\" id=\"datefrom\" name=\"datefrom\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <label for=\"dateto\">";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Until date"), "html", null, true);
        echo "</label>
                                            <input type=\"text\" class=\"mr-sm-2 mb-2 mb-sm-0 form-control bg-white datetimepicker\" id=\"dateto\" name=\"dateto\">
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"status-all\" type=\"radio\" name=\"status\" value=\"all\" class=\"custom-control-input\">
                                                <label for=\"status-all\" class=\"custom-control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"status-paid\" type=\"radio\" name=\"status\" value=\"1\" class=\"custom-control-input\">
                                                <label for=\"status-paid\" class=\"custom-control-label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Approved"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"status-waiting-for-payment\" type=\"radio\" name=\"status\" value=\"0\" class=\"custom-control-input\">
                                                <label for=\"status-waiting-for-payment\" class=\"custom-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"status-canceled\" type=\"radio\" name=\"status\" value=\"-1\" class=\"custom-control-input\">
                                                <label for=\"status-canceled\" class=\"custom-control-label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Canceled"), "html", null, true);
        echo "</label>
                                            </div>
                                            <div class=\"custom-control custom-checkbox\">
                                                <input id=\"status-failed\" type=\"radio\" name=\"status\" value=\"-2\" class=\"custom-control-input\">
                                                <label for=\"status-failed\" class=\"custom-control-label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Failed"), "html", null, true);
        echo "</label>
                                            </div>
                                        </div>
                                        <div class=\"col-12 col-sm-4 text-left mb-4\">
                                            <button type=\"submit\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"><i class=\"fas fa-search\"></i></button>
                                            <button type=\"reset\" class=\"btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "\"><i class=\"fas fa-search-minus\"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">

                            <div class=\"card\">

                                ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["payoutRequests"] ?? null), "getTotalItemCount", [], "any", false, false, false, 103)) {
            // line 104
            echo "
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover table-vcenter\">
                                            <thead>
                                                <tr>
                                                    <th class=\"text-center\">";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Event date"), "html", null, true);
            echo "</th>
                                                        ";
            // line 111
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                // line 112
                echo "                                                        <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
                echo "</th>
                                                        ";
            }
            // line 114
            echo "                                                    <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout method"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Net sales"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Request date"), "html", null, true);
            echo "</th>
                                                    <th>";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                                                    <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payoutRequests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payoutRequest"]) {
                // line 124
                echo "
                                                    <tr>
                                                        <td class=\"text-center text-muted text-sm\">
                                                            ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 127), "html", null, true);
                echo "
                                                        </td>
                                                        <td class=\"text-sm\">
                                                            ";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "eventDate", [], "any", false, false, false, 130), "event", [], "any", false, false, false, 130), "name", [], "any", false, false, false, 130), "html", null, true);
                echo "
                                                            <br>
                                                            ";
                // line 132
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "eventDate", [], "any", false, false, false, 132), "startdate", [], "any", false, false, false, 132), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 132), "locale", [], "any", false, false, false, 132), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                                                        </td>
                                                        ";
                // line 134
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 135
                    echo "                                                            <td class=\"text-sm\">
                                                                ";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "organizer", [], "any", false, false, false, 136), "name", [], "any", false, false, false, 136), "html", null, true);
                    echo "
                                                            </td>
                                                        ";
                }
                // line 139
                echo "                                                        <td class=\"text-sm\">
                                                            <img src=\"";
                // line 140
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("assets/img/icons/payment/" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "paymentGateway", [], "any", false, false, false, 140), "name", [], "any", false, false, false, 140))) . ".svg")), "html", null, true);
                echo "\" class=\"img-80-80\" />
                                                        </td>
                                                        <td class=\"text-sm\">
                                                            <b>";
                // line 143
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 143) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 143), "html", null, true))) : (print ("")));
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "eventDate", [], "any", false, false, false, 143), "getOrganizerPayoutAmount", [], "method", false, false, false, 143), "html", null, true);
                (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 143) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 143), "html", null, true))) : (print ("")));
                echo "</b>
                                                        </td>
                                                        <td class=\"text-sm\">
                                                            ";
                // line 146
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "createdAt", [], "any", false, false, false, 146), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 146), "locale", [], "any", false, false, false, 146), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "
                                                        </td>
                                                        <td class=\"text-sm\">
                                                            <span class=\"badge badge-";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "getStatusClass", [], "any", false, false, false, 149), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "stringifyStatus", [], "any", false, false, false, 149)), "html", null, true);
                echo "</span>
                                                            ";
                // line 150
                if ((twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 150) != 0)) {
                    // line 151
                    echo "                                                                <i class=\"far fa-clock text-primary ml-1\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processed") . ": ") . twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "updatedAt", [], "any", false, false, false, 151), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 151), "locale", [], "any", false, false, false, 151), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null))), "html", null, true);
                    echo "\"></i>
                                                            ";
                }
                // line 153
                echo "                                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "note", [], "any", false, false, false, 153)) {
                    // line 154
                    echo "                                                                <i class=\"far fa-comment-dots text-primary ml-1\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note") . ": ") . twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "note", [], "any", false, false, false, 154)), "html", null, true);
                    echo "\"></i>
                                                            ";
                }
                // line 156
                echo "                                                            ";
                if (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "deletedAt", [], "any", false, false, false, 156)) {
                    // line 157
                    echo "                                                                <br>
                                                                <br>
                                                                <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                    // line 159
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                    echo "</span>
                                                            ";
                }
                // line 161
                echo "
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div class=\"item-action dropdown\">
                                                                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                                                                <div class=\"dropdown-menu dropdown-menu-right\">
                                                                    ";
                // line 167
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
                    // line 168
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_payout_request_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 168)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                    echo " </a>
                                                                        ";
                    // line 169
                    if ((twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 169) == 0)) {
                        // line 170
                        echo "                                                                            <span data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_payout_request_cancel", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 170)]), "html", null, true);
                        echo "\" class=\"dropdown-item cursor-pointer payoutRequest-cancel-button\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to cancel this payout request (this action cannot be undone), the event date related to this payout request will be unlocked"), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-window-close fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
                        echo "</span>
                                                                        ";
                    }
                    // line 172
                    echo "                                                                    ";
                } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
                    // line 173
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_details", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 173)]), "html", null, true);
                    echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-file-invoice fa-fw text-muted\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Details"), "html", null, true);
                    echo " </a>
                                                                        ";
                    // line 174
                    if (((twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 174) == 1) || (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 174) ==  -2))) {
                        // line 175
                        echo "                                                                            <span class=\"dropdown-item cursor-pointer\" data-toggle=\"modal\" data-target=\"#payoutRequest-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 175), "html", null, true);
                        echo "-payment-details\"><i class=\"dropdown-icon fas fa-file-alt fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment details"), "html", null, true);
                        echo "</span>
                                                                        ";
                    } elseif ((twig_get_attribute($this->env, $this->source,                     // line 176
$context["payoutRequest"], "status", [], "any", false, false, false, 176) == 0)) {
                        // line 177
                        echo "                                                                            <span data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_approve", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 177)]), "html", null, true);
                        echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to approve the payout request"), "html", null, true);
                        echo "<br>";
                        echo "Amount";
                        echo ": <b>";
                        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 177) == "left")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 177), "html", null, true))) : (print ("")));
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "eventDate", [], "any", false, false, false, 177), "getOrganizerPayoutAmount", [], "any", false, false, false, 177), "html", null, true);
                        (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_position"], "method", false, false, false, 177) == "right")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "currency_symbol"], "method", false, false, false, 177), "html", null, true))) : (print ("")));
                        echo "</b><br>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout method"), "html", null, true);
                        echo ": <b>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "paymentGateway", [], "any", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
                        echo "</b>\"><i class=\"dropdown-icon fas fa-money-check-alt fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Approve"), "html", null, true);
                        echo " </span>
                                                                            <span data-target=\"";
                        // line 178
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_cancel", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 178)]), "html", null, true);
                        echo "\" class=\"dropdown-item cursor-pointer payoutRequest-cancel-button\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to cancel this payout request (this action cannot be undone), the event date related to this payout request will be unlocked"), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-window-close fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
                        echo "</span>
                                                                        ";
                    }
                    // line 180
                    echo "                                                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "deletedAt", [], "any", false, false, false, 180)) {
                        // line 181
                        echo "                                                                            <span data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 181)]), "html", null, true);
                        echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the payout request and all its related information") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PERMANENTLY")), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-trash fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                        echo "</span>
                                                                            <a href=\"";
                        // line 182
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_restore", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 182)]), "html", null, true);
                        echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                        echo "</a>
                                                                        ";
                    } else {
                        // line 184
                        echo "                                                                            <span data-target=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_payout_request_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 184)]), "html", null, true);
                        echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the payout request and all its related information"), "html", null, true);
                        echo "\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                        echo " </span>
                                                                        ";
                    }
                    // line 186
                    echo "                                                                    ";
                }
                // line 187
                echo "                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    ";
                // line 192
                if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR") && (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 192) == 1)) || (twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "status", [], "any", false, false, false, 192) ==  -2))) {
                    // line 193
                    echo "
                                                    <div class=\"modal fade\" id=\"payoutRequest-";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 194), "html", null, true);
                    echo "-payment-details\">
                                                        <div class=\"modal-dialog modal-dialog-centered modal-dialog-scrollable\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h4 class=\"modal-title\">";
                    // line 198
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payout request payment details"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "reference", [], "any", false, false, false, 198), "html", null, true);
                    echo "</h4>
                                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    ";
                    // line 202
                    echo nl2br(twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["payoutRequest"], "payment", [], "any", false, false, false, 202), twig_constant("JSON_PRETTY_PRINT")), "html", null, true));
                    echo "
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">";
                    // line 205
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
                    echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                ";
                }
                // line 212
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payoutRequest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "                                            </tbody>
                                        </table>
                                    </div>

                                ";
        } else {
            // line 219
            echo "                                    ";
            $this->loadTemplate("Global/message.html.twig", "Dashboard/Shared/Payout/requests.html.twig", 219)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No payout requests found"), "icon" => "fas fa-exclamation-circle"]));
            // line 220
            echo "                                ";
        }
        // line 221
        echo "
                            </div>

                            ";
        // line 224
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["payoutRequests"] ?? null), null, [], ["align" => "center"]);
        echo "

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

";
    }

    // line 237
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 238
        echo "
    <script>

        \$(document).ready(function () {

            if (getURLParameter(\"reference\")) {
                \$(\"#reference\").val(\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 244), "get", [0 => "reference"], "method", false, false, false, 244), "html", null, true);
        echo "\");
            }

            if (getURLParameter(\"eventdate\")) {
                var url = \"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_eventdate", ["reference" => "reference"]);
        echo "\";
                url = url.replace(\"reference\", getURLParameter(\"eventdate\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_eventdate').select2('data', {id: data.id, text: data.text});
                    \$('#eventdate').val(data.id).change();
                });

            }

            if (getURLParameter(\"organizer\")) {
                var url = \"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_organizer", ["slug" => "slug"]);
        echo "\";
                url = url.replace(\"slug\", getURLParameter(\"organizer\"));
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    \$('#fake_organizer').select2('data', {id: data.slug, text: data.text});
                    \$('#organizer').val(data.slug).change();
                });

            }

            if (getURLParameter(\"datefrom\")) {
                \$(\"#datefrom\").val(\"";
        // line 274
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 274), "get", [0 => "datefrom"], "method", false, false, false, 274), "html", null, true);
        echo "\");
            }

            if (getURLParameter(\"dateto\")) {
                \$(\"#dateto\").val(\"";
        // line 278
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 278), "get", [0 => "dateto"], "method", false, false, false, 278), "html", null, true);
        echo "\");
            }

            if (getURLParameter('status') != \"null\") {
                \$('input[type=\"radio\"][name=\"status\"][value=\"' + getURLParameter('status') + '\"]').attr(\"checked\", \"checked\");
            }


        });

    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Payout/requests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 278,  639 => 274,  623 => 261,  607 => 248,  600 => 244,  592 => 238,  588 => 237,  572 => 224,  567 => 221,  564 => 220,  561 => 219,  554 => 214,  547 => 212,  537 => 205,  531 => 202,  522 => 198,  515 => 194,  512 => 193,  510 => 192,  503 => 187,  500 => 186,  490 => 184,  483 => 182,  474 => 181,  471 => 180,  462 => 178,  443 => 177,  441 => 176,  434 => 175,  432 => 174,  425 => 173,  422 => 172,  412 => 170,  410 => 169,  403 => 168,  401 => 167,  393 => 161,  388 => 159,  384 => 157,  381 => 156,  375 => 154,  372 => 153,  366 => 151,  364 => 150,  358 => 149,  352 => 146,  344 => 143,  338 => 140,  335 => 139,  329 => 136,  326 => 135,  324 => 134,  319 => 132,  314 => 130,  308 => 127,  303 => 124,  299 => 123,  290 => 117,  286 => 116,  282 => 115,  277 => 114,  271 => 112,  269 => 111,  265 => 110,  261 => 109,  254 => 104,  252 => 103,  236 => 90,  232 => 89,  225 => 85,  218 => 81,  211 => 77,  204 => 73,  197 => 69,  188 => 63,  181 => 59,  178 => 58,  172 => 55,  166 => 54,  163 => 53,  161 => 52,  156 => 50,  150 => 49,  143 => 45,  133 => 38,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  99 => 25,  94 => 22,  91 => 21,  88 => 20,  86 => 19,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Payout/requests.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Payout/requests.html.twig");
    }
}
