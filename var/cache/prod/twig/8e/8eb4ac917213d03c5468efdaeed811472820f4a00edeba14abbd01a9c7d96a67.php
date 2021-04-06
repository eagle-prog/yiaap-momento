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

/* Front/Organizer/profile.html.twig */
class __TwigTemplate_f6b42d96ed935a329c46312a84efcdbb535f81800405e2fe65b8c7d4efcc0fda extends \Twig\Template
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
        $context["pagetitle"] = twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "name", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Organizer/profile.html.twig", 1);
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
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 10), "html", null, true);
        echo "\">
            <div class=\"row\">
                <main class=\"col-12\">

                    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 15
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "organizer", [], "any", false, false, false, 15) == ($context["organizer"] ?? null))) {
                // line 16
                echo "                            ";
                $this->loadTemplate("Global/message.html.twig", "Front/Organizer/profile.html.twig", 16)->display(twig_array_merge($context, ["type" => "info", "icon" => "fas fa-info-circle", "message" => ((((("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_organizer_profile")) . "\">") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click here")) . "</a> ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("to edit your profile"))]));
                // line 17
                echo "                        ";
            }
            // line 18
            echo "                    ";
        }
        // line 19
        echo "
                    <div class=\"shadow rounded overflow-hidden\">

                        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "coverName", [], "any", false, false, false, 22)) {
            echo "<div class=\"organizer-profile-cover parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "getCoverPath", [], "any", false, false, false, 22)), "html", null, true);
            echo "\"></div>";
        }
        // line 23
        echo "
                        <div class=\"row\">
                            <div class=\"col-12 col-lg-4\">
                                <div class=\"organizer-profile-sidebar text-center ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "coverName", [], "any", false, false, false, 26)) {
            echo "mt-3 mb-3";
        }
        echo "\">

                                    <span class=\"avatar organizer-profile-logo\" style=\"background: url('";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "logoName", [], "any", false, false, false, 28)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "getLogoPath", [], "any", false, false, false, 28))) : (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "getLogoPlaceholder", [], "any", false, false, false, 28))), "html", null, true);
        echo "');\"></span>

                                    <h4 class=\"font-weight-bold text-center my-5\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</h4>

                                    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "hasSocialMedia", [], "any", false, false, false, 32)) {
            // line 33
            echo "
                                        <ul class=\"list-inline mb-0\">
                                            ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "website", [], "any", false, false, false, 35)) {
                // line 36
                echo "                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
                // line 37
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "website", [], "any", false, false, false, 37)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "website", [], "any", false, false, false, 37)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "website", [], "any", false, false, false, 37), "html", null, true);
                echo "\"  class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fas fa-globe fa-lg fa-fw\"></i></a>
                                                </li>
                                            ";
            }
            // line 40
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "email", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                                <li class=\"list-inline-item\">
                                                    <a href=\"mailto:";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "email", [], "any", false, false, false, 42), "html", null, true);
                echo "\"  class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fas fa-at fa-lg fa-fw\"></i></a>
                                                </li>
                                            ";
            }
            // line 45
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "phone", [], "any", false, false, false, 45)) {
                // line 46
                echo "                                                <li class=\"list-inline-item\">
                                                    <a href=\"tel:";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "phone", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\"><i class=\"icon fas fa-phone fa-lg fa-fw\"></i></a>
                                                </li>
                                            ";
            }
            // line 50
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "facebook", [], "any", false, false, false, 50)) {
                // line 51
                echo "                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
                // line 52
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "facebook", [], "any", false, false, false, 52)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "facebook", [], "any", false, false, false, 52)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "facebook", [], "any", false, false, false, 52), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fab fa-facebook-f fa-lg fa-fw\"></i></a>
                                                </li>
                                            ";
            }
            // line 55
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "twitter", [], "any", false, false, false, 55)) {
                // line 56
                echo "                                                <li class=\"list-inline-item\">
                                                    <a href=\"";
                // line 57
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "twitter", [], "any", false, false, false, 57)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "twitter", [], "any", false, false, false, 57)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "twitter", [], "any", false, false, false, 57), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fab fa-twitter fa-lg fa-fw\"></i></a>
                                                </li>
                                            ";
            }
            // line 60
            echo "                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "googleplus", [], "any", false, false, false, 60)) {
                // line 61
                echo "                                                <a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "googleplus", [], "any", false, false, false, 61)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "googleplus", [], "any", false, false, false, 61)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "googleplus", [], "any", false, false, false, 61), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fab fa-google-plus fa-lg fa-fw\"></i></a>
                                                ";
            }
            // line 63
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "instagram", [], "any", false, false, false, 63)) {
                // line 64
                echo "                                                <a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "instagram", [], "any", false, false, false, 64)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "instagram", [], "any", false, false, false, 64)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "instagram", [], "any", false, false, false, 64), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fab fa-instagram fa-lg fa-fw\"></i></a>
                                                ";
            }
            // line 66
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "linkedin", [], "any", false, false, false, 66)) {
                // line 67
                echo "                                                <a href=\"";
                if ((!twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "linkedin", [], "any", false, false, false, 67)) && !twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "linkedin", [], "any", false, false, false, 67)))) {
                    echo "http://";
                }
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "linkedin", [], "any", false, false, false, 67), "html", null, true);
                echo "\" class=\"display-inline-block mr-3\" target=\"_blank\"><i class=\"icon fab fa-linkedin fa-lg fa-fw\"></i></a>
                                                ";
            }
            // line 69
            echo "                                        </ul>
                                    ";
        }
        // line 71
        echo "
                                    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "description", [], "any", false, false, false, 72)) {
            // line 73
            echo "                                        <div class=\"py-4 px-4 text-muted line-height-2 readmore\" data-collapsed-height=\"150\" data-height-margin=\"20\">
                                            ";
            // line 74
            echo nl2br(twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "description", [], "any", false, false, false, 74));
            echo "
                                        </div>
                                    ";
        }
        // line 77
        echo "                                </div>
                            </div>
                            <div class=\"col-12 col-lg-8 bg-light\">

                                ";
        // line 81
        $context["publishedeventscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "elapsed" => "all", "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 81)]], "method", false, false, false, 81), "getQuery", [], "method", false, false, false, 81), "getSingleScalarResult", [], "method", false, false, false, 81);
        // line 82
        echo "
                                <div class=\"p-4 d-flex justify-content-end text-center\">
                                    <ul class=\"list-inline mb-0\">
                                        ";
        // line 85
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "categories", [], "any", false, false, false, 85))) {
            // line 86
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "categories", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 87
                echo "                                                <li class=\"list-inline-item mr-3\">
                                                    <h5 class=\"font-weight-bold mb-0 d-block\">
                                                        <i class=\"";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 89), "html", null, true);
                echo "\"></i>
                                                    </h5>
                                                    <small class=\"text-muted\">
                                                        ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 92), "html", null, true);
                echo "
                                                    </small>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
                                        ";
        }
        // line 98
        echo "                                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "country", [], "any", false, false, false, 98)) {
            // line 99
            echo "                                            <li class=\"list-inline-item mr-3\">
                                                <h5 class=\"font-weight-bold mb-0 d-block\">
                                                    <span class=\"flag flag-";
            // line 101
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "country", [], "any", false, false, false, 101), "code", [], "any", false, false, false, 101)), "html", null, true);
            echo "\"></span>
                                                </h5>
                                                <small class=\"text-muted\">
                                                    ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "country", [], "any", false, false, false, 104), "name", [], "any", false, false, false, 104), "html", null, true);
            echo "
                                                </small>
                                            </li>
                                        ";
        }
        // line 108
        echo "                                        <li class=\"list-inline-item mr-3\">
                                            <h5 class=\"font-weight-bold mb-0 d-block\">";
        // line 109
        echo twig_escape_filter($this->env, ($context["publishedeventscount"] ?? null), "html", null, true);
        echo "</h5><small class=\"text-muted\"> <i class=\"fas fa-calendar-alt fa-fw mr-1\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "html", null, true);
        echo "</small>
                                        </li>
                                        <li class=\"list-inline-item\">
                                            <h5 class=\"font-weight-bold mb-0 d-block\">";
        // line 112
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "followedby", [], "any", false, false, false, 112)), "html", null, true);
        echo "</h5><small class=\"text-muted\"> <i class=\"fas fa-folder-plus mr-1\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Followers"), "html", null, true);
        echo "</small>
                                        </li>
                                        <li class=\"list-inline-item ml-3\">
                                            ";
        // line 115
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE"))) {
            // line 116
            echo "                                                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 117
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "isFollowedBy", [0 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 117)], "method", false, false, false, 117)) {
                    // line 118
                    echo "                                                        <button class=\"organizer-unfollow btn btn-outline-primary btn-sm btn-block\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_following_remove", ["slug" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 118)]), "html", null, true);
                    echo "\"><i class=\"fas fa-folder-minus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unfollow"), "html", null, true);
                    echo "</button>
                                                    ";
                } else {
                    // line 120
                    echo "                                                        <button class=\"organizer-follow btn btn-outline-primary btn-sm btn-block\" data-target=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_attendee_following_add", ["slug" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 120)]), "html", null, true);
                    echo "\"><i class=\"fas fa-folder-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow"), "html", null, true);
                    echo "</button>
                                                    ";
                }
                // line 122
                echo "                                                ";
            } else {
                // line 123
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login") . "?_target_path=") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "getPathInfo", [], "any", false, false, false, 123)), "html", null, true);
                echo "\" class=\"btn btn-outline-primary btn-sm btn-block\"><i class=\"fas fa-folder-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow"), "html", null, true);
                echo "</a>
                                                ";
            }
            // line 125
            echo "                                            ";
        }
        // line 126
        echo "                                        </li>
                                    </ul>
                                </div>

                                ";
        // line 130
        $context["onsaleeventscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "elapsed" => false, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 130)]], "method", false, false, false, 130), "getQuery", [], "method", false, false, false, 130), "getSingleScalarResult", [], "method", false, false, false, 130);
        // line 131
        echo "                                ";
        $context["pasteventscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["count" => true, "elapsed" => true, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 131)]], "method", false, false, false, 131), "getQuery", [], "method", false, false, false, 131), "getSingleScalarResult", [], "method", false, false, false, 131);
        // line 132
        echo "                                <div class=\"py-4 px-4\">
                                    <ul class=\"nav nav-pills mb-3\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" data-toggle=\"pill\" href=\"#organizer-onsale-events\" role=\"tab\" aria-controls=\"organizer-onsale-events\" aria-selected=\"true\">";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events on sale"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["onsaleeventscount"] ?? null), "html", null, true);
        echo ")</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" data-toggle=\"pill\" href=\"#organizer-past-events\" role=\"tab\" aria-controls=\"organizer-past-events\" aria-selected=\"false\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Past events"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["pasteventscount"] ?? null), "html", null, true);
        echo ")</a>
                                        </li>
                                    </ul>
                                    <div class=\"tab-content\">
                                        <div class=\"tab-pane fade show active\" id=\"organizer-onsale-events\" role=\"tabpanel\" aria-labelledby=\"organizer-onsale-events-tab\">
                                            ";
        // line 143
        if ((($context["onsaleeventscount"] ?? null) > 0)) {
            // line 144
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["elapsed" => false, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 144), "limit" => 10]], "method", false, false, false, 144), "getQuery", [], "method", false, false, false, 144), "getResult", [], "method", false, false, false, 144));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 145
                echo "                                                    ";
                $this->loadTemplate("Global/event-card.html.twig", "Front/Organizer/profile.html.twig", 145)->display(twig_array_merge($context, ["event" => $context["event"]]));
                // line 146
                echo "                                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                                            ";
        } else {
            // line 148
            echo "                                                ";
            $this->loadTemplate("Global/message.html.twig", "Front/Organizer/profile.html.twig", 148)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No events on sale for now")]));
            // line 149
            echo "                                            ";
        }
        // line 150
        echo "                                            ";
        if ((($context["onsaleeventscount"] ?? null) > 10)) {
            // line 151
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\" class=\"btn btn-outline-primary mx-auto\"><i class=\"fas fa-ticket-alt\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See all events on sale"), "html", null, true);
            echo "</a>
                                            ";
        }
        // line 153
        echo "                                        </div>
                                        <div class=\"tab-pane fade\" id=\"organizer-past-events\" role=\"tabpanel\" aria-labelledby=\"organizer-past-events\">
                                            ";
        // line 155
        if ((($context["pasteventscount"] ?? null) > 0)) {
            // line 156
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getEvents", [0 => ["elapsed" => true, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 156), "limit" => 10]], "method", false, false, false, 156), "getQuery", [], "method", false, false, false, 156), "getResult", [], "method", false, false, false, 156));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 157
                echo "                                                    ";
                $this->loadTemplate("Global/event-card.html.twig", "Front/Organizer/profile.html.twig", 157)->display(twig_array_merge($context, ["event" => $context["event"]]));
                // line 158
                echo "                                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "                                            ";
        } else {
            // line 160
            echo "                                                ";
            $this->loadTemplate("Global/message.html.twig", "Front/Organizer/profile.html.twig", 160)->display(twig_array_merge($context, ["type" => "info", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No past events found")]));
            // line 161
            echo "                                            ";
        }
        // line 162
        echo "                                        </div>
                                    </div>
                                </div>

                                ";
        // line 166
        if ((twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "showvenuesmap", [], "any", false, false, false, 166) && (($context["google_maps_api_key"] ?? null) != ""))) {
            // line 167
            echo "                                    ";
            $context["venuescount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getVenues", [0 => ["count" => true, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 167)]], "method", false, false, false, 167), "getQuery", [], "method", false, false, false, 167), "getSingleScalarResult", [], "method", false, false, false, 167);
            // line 168
            echo "                                    ";
            if (($context["venuescount"] ?? null)) {
                // line 169
                echo "                                        ";
                $context["venues"] = [];
                // line 170
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getVenues", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 170)]], "method", false, false, false, 170), "getQuery", [], "method", false, false, false, 170), "getResult", [], "method", false, false, false, 170));
                foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
                    // line 171
                    echo "                                            ";
                    $context["venues"] = twig_array_merge(($context["venues"] ?? null), [0 => ["name" => twig_get_attribute($this->env, $this->source, $context["venue"], "name", [], "any", false, false, false, 171), "address" => ((twig_get_attribute($this->env, $this->source, $context["venue"], "name", [], "any", false, false, false, 171) . ": ") . twig_get_attribute($this->env, $this->source, $context["venue"], "stringifyAddress", [], "any", false, false, false, 171)), "lat" => twig_get_attribute($this->env, $this->source, $context["venue"], "lat", [], "any", false, false, false, 171), "lng" => twig_get_attribute($this->env, $this->source, $context["venue"], "lng", [], "any", false, false, false, 171), "link" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, $context["venue"], "slug", [], "any", false, false, false, 171)]), "image" => ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["venue"], "images", [], "any", false, false, false, 171))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["venue"], "images", [], "any", false, false, false, 171)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "getImagePath", [], "any", false, false, false, 171))) : (twig_get_attribute($this->env, $this->source, $context["venue"], "getImagePlaceholder", [], "any", false, false, false, 171)))]]);
                    // line 172
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "
                                        <div class=\"py-4 px-4\">
                                            <h4 class=\"mb-2\"><i class=\"fas fa-compass mr-1\"></i> ";
                // line 175
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Venues"), "html", null, true);
                echo "</h4>
                                            <div id=\"venues-map\" data-pin-path=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/pin.png"), "html", null, true);
                echo "\" data-venues=\"";
                echo twig_escape_filter($this->env, json_encode(($context["venues"] ?? null)), "html", null, true);
                echo "\" class=\"vh-90\"></div>
                                        </div>
                                    ";
            }
            // line 179
            echo "                                ";
        }
        // line 180
        echo "
                                ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "youtubeurl", [], "any", false, false, false, 181)) {
            // line 182
            echo "                                    <div class=\"py-4 px-4\">
                                        <h4 class=\"mb-2\"><i class=\"fab fa-youtube-square mr-1\"></i> ";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Video"), "html", null, true);
            echo "</h4>
                                        <iframe width=\"100%\" height=\"400\" src=\"https://www.youtube.com/embed/";
            // line 184
            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "youtubeurl", [], "any", false, false, false, 184), "=")) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
            echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                                    </div>
                                ";
        }
        // line 187
        echo "
                                ";
        // line 188
        if ((twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "showfollowers", [], "any", false, false, false, 188) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "followedby", [], "any", false, false, false, 188)))) {
            // line 189
            echo "                                    <div class=\"py-4 px-4\">
                                        <h4 class=\"mb-2\"><i class=\"fas fa-user-plus mr-1\"></i> ";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Followers"), "html", null, true);
            echo "</h4>
                                        <div class=\"card border-0 card-body overflow-auto text-nowrap\">
                                            <div class=\"avatar-list py-4\">
                                                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "followedby", [], "any", false, false, false, 193));
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
                // line 194
                echo "                                                    ";
                $this->loadTemplate("Global/user-avatar.html.twig", "Front/Organizer/profile.html.twig", 194)->display(twig_array_merge($context, ["user" => $context["user"], "showusernametooltip" => true]));
                // line 195
                echo "                                                ";
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
            // line 196
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 200
        echo "
                                ";
        // line 201
        $context["reviewscount"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getReviews", [0 => ["count" => true, "organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 201)]], "method", false, false, false, 201), "getQuery", [], "method", false, false, false, 201), "getSingleScalarResult", [], "method", false, false, false, 201);
        // line 202
        echo "
                                ";
        // line 203
        if ((twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "showreviews", [], "any", false, false, false, 203) && ($context["reviewscount"] ?? null))) {
            // line 204
            echo "                                    <div class=\"row mt-5 px-4\">
                                        <div class=\"col-12\">
                                            <h4 class=\"mb-2\"><i class=\"fas fa-star mr-1\"></i> ";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reviews"), "html", null, true);
            echo "</h4>
                                        </div>
                                        ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getReviews", [0 => ["organizer" => twig_get_attribute($this->env, $this->source, ($context["organizer"] ?? null), "slug", [], "any", false, false, false, 208), "limit" => 8]], "method", false, false, false, 208), "getQuery", [], "method", false, false, false, 208), "getResult", [], "method", false, false, false, 208));
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
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 209
                echo "                                            <div class=\"col-12 col-lg-6 py-4\">
                                                ";
                // line 210
                $this->loadTemplate("Global/user-review.html.twig", "Front/Organizer/profile.html.twig", 210)->display(twig_array_merge($context, ["review" => $context["review"], "showuser" => true, "showevent" => true]));
                // line 211
                echo "                                            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "                                    </div>
                                ";
        }
        // line 215
        echo "                            </div>
                        </div>
                    </div>
                </main>
            </div>
    </section>

";
    }

    // line 224
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        echo "    ";
        if ((($context["google_maps_api_key"] ?? null) != "")) {
            // line 226
            echo "        ";
            echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("organizerprofile");
            echo "
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=";
            // line 227
            echo twig_escape_filter($this->env, ($context["google_maps_api_key"] ?? null), "html", null, true);
            echo "&callback=initMap\">
        </script>
        ";
            // line 229
            $this->loadTemplate("Global/organizer-info-box.html.twig", "Front/Organizer/profile.html.twig", 229)->display($context);
            // line 230
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "Front/Organizer/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 230,  720 => 229,  715 => 227,  710 => 226,  707 => 225,  703 => 224,  692 => 215,  688 => 213,  673 => 211,  671 => 210,  668 => 209,  651 => 208,  646 => 206,  642 => 204,  640 => 203,  637 => 202,  635 => 201,  632 => 200,  626 => 196,  612 => 195,  609 => 194,  592 => 193,  586 => 190,  583 => 189,  581 => 188,  578 => 187,  572 => 184,  568 => 183,  565 => 182,  563 => 181,  560 => 180,  557 => 179,  549 => 176,  545 => 175,  541 => 173,  535 => 172,  532 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  510 => 162,  507 => 161,  504 => 160,  501 => 159,  487 => 158,  484 => 157,  466 => 156,  464 => 155,  460 => 153,  452 => 151,  449 => 150,  446 => 149,  443 => 148,  440 => 147,  426 => 146,  423 => 145,  405 => 144,  403 => 143,  393 => 138,  385 => 135,  380 => 132,  377 => 131,  375 => 130,  369 => 126,  366 => 125,  358 => 123,  355 => 122,  347 => 120,  339 => 118,  336 => 117,  333 => 116,  331 => 115,  323 => 112,  315 => 109,  312 => 108,  305 => 104,  299 => 101,  295 => 99,  292 => 98,  288 => 96,  278 => 92,  272 => 89,  268 => 87,  263 => 86,  261 => 85,  256 => 82,  254 => 81,  248 => 77,  242 => 74,  239 => 73,  237 => 72,  234 => 71,  230 => 69,  221 => 67,  218 => 66,  209 => 64,  206 => 63,  197 => 61,  194 => 60,  185 => 57,  182 => 56,  179 => 55,  170 => 52,  167 => 51,  164 => 50,  158 => 47,  155 => 46,  152 => 45,  146 => 42,  143 => 41,  140 => 40,  131 => 37,  128 => 36,  126 => 35,  122 => 33,  120 => 32,  115 => 30,  110 => 28,  103 => 26,  98 => 23,  92 => 22,  87 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  73 => 14,  66 => 10,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Organizer/profile.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Organizer/profile.html.twig");
    }
}
