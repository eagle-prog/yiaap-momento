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

/* Global/event-preview-horizontal.html.twig */
class __TwigTemplate_c330883dd6efd2f1b47f216b47733000da04faf60c12420b90df44790e62507c extends \Twig\Template
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
        if ((isset($context["handlebarstemplate"]) || array_key_exists("handlebarstemplate", $context))) {
            // line 2
            echo "    ";
            // line 17
            echo "
        <div class=\"card\">
            <div class=\"card-body\">
                <figure class=\"itemside\">
                    <div class=\"aside\">
                        <div class=\"img-wrap img-sm\"><a href=\"{{ link}}\"><img src=\"{{ image}}\"></a></div>
                    </div>
                    <figcaption class=\"text-wrap\">
                        <h6 class=\"title mb-2\"><a href=\"{{ link}}\">{{ text}}</a></h6>
                        <div class=\"text-black-50 small mb-1\">{{ date}}</div>
                        <div class=\"text-black-50 small\">{{ venue}}</div>
                    </figcaption>
                </figure>
            </div>
        </div>
    ";
            echo "
";
        } elseif (((        // line 18
(isset($context["eventticket"]) || array_key_exists("eventticket", $context)) || (isset($context["eventdate"]) || array_key_exists("eventdate", $context))) || (isset($context["event"]) || array_key_exists("event", $context)))) {
            // line 19
            echo "    ";
            if ((isset($context["eventticket"]) || array_key_exists("eventticket", $context))) {
                // line 20
                echo "        ";
                $context["event"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventticket"] ?? null), "eventdate", [], "any", false, false, false, 20), "event", [], "any", false, false, false, 20);
                // line 21
                echo "        ";
                $context["eventdate"] = twig_get_attribute($this->env, $this->source, ($context["eventticket"] ?? null), "eventdate", [], "any", false, false, false, 21);
                // line 22
                echo "    ";
            } elseif ((isset($context["eventdate"]) || array_key_exists("eventdate", $context))) {
                // line 23
                echo "        ";
                $context["event"] = twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "event", [], "any", false, false, false, 23);
                // line 24
                echo "    ";
            }
            // line 25
            echo "    <figure class=\"media h-100\">
        <div class=\"img-wrap my-auto\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader.svg"), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 26)), "html", null, true);
            echo "\" class=\"img-thumbnail img-sm img-lazy-load\"></div>
        <figcaption class=\"media-body my-auto ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "locale", [], "any", false, false, false, 27) == "ar")) {
                echo "ml-2";
            }
            echo "\">
            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
                <h6 class=\"title mb-2\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</h6>
            </a>
            ";
            // line 31
            if ((isset($context["eventticket"]) || array_key_exists("eventticket", $context))) {
                // line 32
                echo "                <dl class=\"dlist-inline small\">
                    <dt></dt>
                    <dd class=\"mr-0\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventticket"] ?? null), "name", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                if (twig_get_attribute($this->env, $this->source, ($context["eventticket"] ?? null), "description", [], "any", false, false, false, 34)) {
                    echo "<i class=\"fas fa-info-circle text-primary ml-2\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventticket"] ?? null), "description", [], "any", false, false, false, 34), "html", null, true);
                    echo "\"></i>";
                }
                echo "</dd>
                </dl>
            ";
            }
            // line 37
            echo "            ";
            if ((isset($context["eventdate"]) || array_key_exists("eventdate", $context))) {
                // line 38
                echo "                <dl class=\"dlist-inline small\">
                    <dt>";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When"), "html", null, true);
                echo "</dt>
                    <dd>";
                // line 40
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "startdate", [], "any", false, false, false, 40), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 40), "locale", [], "any", false, false, false, 40), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
                echo "</dd>
                </dl>
                <dl class=\"dlist-inline small\">
                    <dt>";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Where"), "html", null, true);
                echo "</dt>
                    <dd>
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventdate"] ?? null), "venue", [], "any", false, false, false, 46), "stringifyAddress", [], "any", false, false, false, 46), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 48
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online"), "html", null, true);
                    echo "
                        ";
                }
                // line 50
                echo "                    </dd>
                </dl>
            ";
            }
            // line 53
            echo "            ";
            if ( !(isset($context["hideorganizer"]) || array_key_exists("hideorganizer", $context))) {
                // line 54
                echo "                <dl class=\"dlist-inline small\">
                    <dt>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizer"), "html", null, true);
                echo "</dt>
                    <dd><a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organizer", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 56), "slug", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" taget=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "organizer", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
                echo "</a></dd>
                </dl>
            ";
            }
            // line 59
            echo "        </figcaption>
    </figure>
";
        }
    }

    public function getTemplateName()
    {
        return "Global/event-preview-horizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 59,  174 => 56,  170 => 55,  167 => 54,  164 => 53,  159 => 50,  153 => 48,  145 => 46,  143 => 45,  138 => 43,  132 => 40,  128 => 39,  125 => 38,  122 => 37,  110 => 34,  106 => 32,  104 => 31,  99 => 29,  95 => 28,  89 => 27,  83 => 26,  80 => 25,  77 => 24,  74 => 23,  71 => 22,  68 => 21,  65 => 20,  62 => 19,  60 => 18,  41 => 17,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/event-preview-horizontal.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/event-preview-horizontal.html.twig");
    }
}
