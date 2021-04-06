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

/* Dashboard/Administrator/User/manage-users-table.html.twig */
class __TwigTemplate_59d1be75c34fb0f47d4af7fc52f6768ca9bd76295c5945c6c34828e9d9998acc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"table-responsive\">
    <table class=\"table table-hover table-vcenter text-nowrap\">
        <thead>
            <tr>
                <th class=\"text-center\"><i class=\"fas fa-sitemap\"></i></th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration date"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last login"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</th>
                <th class=\"text-center\"><i class=\"fas fa-cog\"></i></th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 17
            echo "
                <tr>
                    <td class=\"text-center text-sm\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["user"], "getRole", [], "any", false, false, false, 20)), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-sm\">
                        ";
            // line 23
            $this->loadTemplate("Global/user-avatar.html.twig", "Dashboard/Administrator/User/manage-users-table.html.twig", 23)->display(twig_array_merge($context, ["user" => $context["user"]]));
            // line 24
            echo "                        <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCrossRoleName", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
                        ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 25)) {
                // line 26
                echo "                            <span class=\"flag flag-";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 26), "code", [], "any", false, false, false, 26)), "html", null, true);
                echo " ml-2 mb-2\"></span>
                        ";
            }
            // line 28
            echo "                    </td>
                    <td class=\"text-sm\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 30), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "
                    </td>
                    <td class=\"text-sm\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 33), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "locale", [], "any", false, false, false, 33), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
            echo "
                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, $context["user"], "facebookId", [], "any", false, false, false, 34)) {
                // line 35
                echo "                            <i class=\"fab fa-facebook-f fa-sm btn-facebook ml-2 p-2\" title=\"Facebook Id: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "facebookId", [], "any", false, false, false, 35), "html", null, true);
                echo "\" data-toggle=\"tooltip\"></i>
                        ";
            }
            // line 37
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "googleId", [], "any", false, false, false, 37)) {
                // line 38
                echo "                            <i class=\"fab fa-google fa-sm btn-youtube ml-2 p-2\" title=\"Google Id: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "googleId", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-toggle=\"tooltip\"></i>
                        ";
            }
            // line 40
            echo "                    </td>
                    <td class=\"text-sm\">
                        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 42)) {
                // line 43
                echo "                            ";
                echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["user"], "lastLogin", [], "any", false, false, false, 43));
                echo "</small>
                        ";
            } else {
                // line 45
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
                echo "
                        ";
            }
            // line 47
            echo "                    </td>
                    <td class=\"text-sm\">
                        ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 49)) {
                // line 50
                echo "                            <span class=\"badge badge-success\"><i class=\"fas fa-user-check fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled"), "html", null, true);
                echo "</span>
                        ";
            } else {
                // line 52
                echo "                            <span class=\"badge badge-danger\"><i class=\"fas fa-user-slash fa-fw\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 54
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "deletedAt", [], "any", false, false, false, 54)) {
                // line 55
                echo "                            <br>
                            <br>
                            <span class=\"badge badge-danger\"><i class=\"fas fa-times fa-fw\"></i> ";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleted"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 59
            echo "                    </td>
                    <td class=\"text-center\">
                        <div class=\"item-action dropdown\">
                            <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" data-boundary=\"window\" class=\"icon\"><i class=\"fas fa-ellipsis-v\"></i></a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <span data-title=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User information"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_information", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"dropdown-item ajax-loading\"><i class=\"dropdown-icon fas fa-file-alt fa-fw text-muted\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More information"), "html", null, true);
            echo "</span>
                                ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["user"], "hasRole", [0 => "ROLE_ORGANIZER"], "method", false, false, false, 65)) {
                // line 66
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "organizer", [], "any", false, false, false, 66), "slug", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon far fa-id-card fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer profile"), "html", null, true);
                echo "</a>
                                ";
            }
            // line 68
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "hasRole", [0 => "ROLE_ATTENDEE"], "method", false, false, false, 68)) {
                // line 69
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_empty_cart", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-shopping-cart fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Empty cart"), "html", null, true);
                echo " <span class=\"badge badge-warning float-right\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%cartElementsCount% event(s) currently in cart", ["%cartElementsCount%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cartelements", [], "any", false, false, false, 69))]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "cartelements", [], "any", false, false, false, 69)), "html", null, true);
                echo "</span></a>
                                    ";
            }
            // line 71
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index", ["_switch_user" => twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-user-secret fa-fw text-muted\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Impersonate"), "html", null, true);
            echo "</a>
                                ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 72)) {
                // line 73
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_disable", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-user-slash fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 75
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_enable", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-user-check fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable"), "html", null, true);
                echo " </a>
                                ";
            }
            // line 77
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["user"], "deletedAt", [], "any", false, false, false, 77)) {
                // line 78
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_restore", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-trash-restore fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
                echo "</a>
                                    <span data-target=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_delete_permanently", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"dropdown-item requires-confirmation\" data-confirmation-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to delete the user and all its related information (orders, events...) PERMANENTLY"), "html", null, true);
                echo "\"><i class=\"dropdown-icon fas fa-user-times fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete permanently"), "html", null, true);
                echo "</span>
                                ";
            } else {
                // line 81
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_administrator_user_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["user"], "slug", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\" class=\"dropdown-item\"><i class=\"dropdown-icon fas fa-times fa-fw text-muted\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
                echo " </a>
                                ";
            }
            // line 83
            echo "                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/User/manage-users-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 89,  287 => 83,  279 => 81,  270 => 79,  263 => 78,  260 => 77,  252 => 75,  244 => 73,  242 => 72,  235 => 71,  223 => 69,  220 => 68,  212 => 66,  210 => 65,  202 => 64,  195 => 59,  190 => 57,  186 => 55,  183 => 54,  177 => 52,  171 => 50,  169 => 49,  165 => 47,  159 => 45,  153 => 43,  151 => 42,  147 => 40,  141 => 38,  138 => 37,  132 => 35,  130 => 34,  126 => 33,  118 => 30,  114 => 28,  108 => 26,  106 => 25,  101 => 24,  99 => 23,  93 => 20,  88 => 17,  71 => 16,  62 => 10,  58 => 9,  54 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/User/manage-users-table.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/User/manage-users-table.html.twig");
    }
}
