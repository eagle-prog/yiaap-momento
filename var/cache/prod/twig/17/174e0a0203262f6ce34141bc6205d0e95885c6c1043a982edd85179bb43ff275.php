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

/* Global/venue-card.html.twig */
class __TwigTemplate_bb47103bf25d0c2fb955ecadab18a153ffb165d61d6df9eb332987e5189fcb33 extends \Twig\Template
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
        echo "<article class=\"card mb-3 card-hover\">
    <div class=\"card-body\">
        <div class=\"row\">
            <aside class=\"col-md-3\">
                ";
        // line 5
        $context["runtimeConfig"] = ["thumbnail" => ["size" => [0 => 200, 1 => 200]]];
        // line 6
        echo "                <div class=\"img-wrap\">
                    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">
                        <img class=\"img-lazy-load\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader.gif"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "images", [], "any", false, false, false, 8)) > 0)) ? ($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "getFirstImageOrPlaceholder", [], "any", false, false, false, 8), "thumbnail", ($context["runtimeConfig"] ?? null))) : (twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "getFirstImageOrPlaceholder", [], "any", false, false, false, 8))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\" />
                    </a>
                </div>
            </aside>
            <article class=\"col-md-6 mt-3 mt-md-0\">

                <h4 class=\"title\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "slug", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</a></h4>
                <p class=\"text-muted\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "type", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                <p class=\"text-muted\">";
        // line 16
        echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "description", [], "any", false, false, false, 16)), 0, 175);
        echo "...</p>
                <dl class=\"dlist-align\">
                    <dt>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Location"), "html", null, true);
        echo "</dt>
                    <dd>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "stringifyAddress", [], "any", false, false, false, 19), "html", null, true);
        echo "</dd>
                </dl>
                ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "seatedguests", [], "any", false, false, false, 21) || twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "standingguests", [], "any", false, false, false, 21))) {
            // line 22
            echo "                    <dl class=\"dlist-align\">
                        <dt>";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guests"), "html", null, true);
            echo "</dt>
                        <dd>
                            ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "seatedguests", [], "any", false, false, false, 25)) {
                // line 26
                echo "                                ";
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Seated") . ": ") . twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "seatedguests", [], "any", false, false, false, 26)), "html", null, true);
                echo "
                            ";
            }
            // line 28
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "standingguests", [], "any", false, false, false, 28)) {
                // line 29
                echo "                                -
                                ";
                // line 30
                echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Standing") . ": ") . twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "standingguests", [], "any", false, false, false, 30)), "html", null, true);
                echo "
                            ";
            }
            // line 32
            echo "                        </dd>
                    </dl>
                ";
        }
        // line 35
        echo "            </article>
            <aside class=\"col-md-3 ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "locale", [], "any", false, false, false, 36) == "ar")) {
            echo "border-right";
        } else {
            echo "border-left";
        }
        echo " mt-3 mt-md-0\">
                <div class=\"action-wrap center-lg-y\">
                    ";
        // line 38
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "amenities", [], "any", false, false, false, 38)) > 0)) {
            // line 39
            echo "                        <ul class=\"fa-ul list-lg list-inline\">
                            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "amenities", [], "any", false, false, false, 40));
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
            foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                // line 41
                echo "                                <li class=\"list-inline-item text-muted mb-5 ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                    echo "mr-5";
                }
                echo "\"><span class=\"fa-li\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amenity"], "name", [], "any", false, false, false, 41), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["amenity"], "icon", [], "any", false, false, false, 41), "html", null, true);
                echo " fa-lg\"></i></span></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                        </ul>
                    ";
        }
        // line 45
        echo "                    <p class=\"text-center\">
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("venue", ["slug" => twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "slug", [], "any", false, false, false, 46)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"far fa-building\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More details"), "html", null, true);
        echo "</a>
                    </p>
                </div>
            </aside>
        </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "Global/venue-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 46,  184 => 45,  180 => 43,  157 => 41,  140 => 40,  137 => 39,  135 => 38,  126 => 36,  123 => 35,  118 => 32,  113 => 30,  110 => 29,  107 => 28,  101 => 26,  99 => 25,  94 => 23,  91 => 22,  89 => 21,  84 => 19,  80 => 18,  75 => 16,  71 => 15,  65 => 14,  52 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/venue-card.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/venue-card.html.twig");
    }
}
