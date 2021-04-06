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

/* Global/user-review.html.twig */
class __TwigTemplate_c084c7b4f8afad6e1993b3f98f42e2d3ae8c7fedc2a3db84e1f0fcaffb86e466 extends \Twig\Template
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
        echo "<div class=\"user-review-wrapper mb-5\">
    ";
        // line 2
        if ((isset($context["showevent"]) || array_key_exists("showevent", $context))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "event", [], "any", false, false, false, 3), "slug", [], "any", false, false, false, 3)]), "html", null, true);
            echo "\">
            <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "event", [], "any", false, false, false, 4), "imageName", [], "any", false, false, false, 4)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "event", [], "any", false, false, false, 4), "getImagePath", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "event", [], "any", false, false, false, 4), "getImagePlaceholder", [], "any", false, false, false, 4))), "html", null, true);
            echo "\" class=\"img-thumbnail img-100-100\" /> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "event", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 7
        echo "    ";
        if ((isset($context["showuser"]) || array_key_exists("showuser", $context))) {
            // line 8
            echo "        <div class=\"mt-3\">
            ";
            // line 9
            $this->loadTemplate("Global/user-avatar.html.twig", "Global/user-review.html.twig", 9)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "user", [], "any", false, false, false, 9)]));
            // line 10
            echo "            <h6 class=\"user-fullname display-inline-block\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "user", [], "any", false, false, false, 10), "getFullName", [], "any", false, false, false, 10), "html", null, true);
            echo "</h6>
        </div>
    ";
        }
        // line 13
        echo "    <div class=\"rating-wrap mt-3\">
        <ul class=\"rating-stars\">
            <li style=\"width:";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "getRatingPercentage", [], "any", false, false, false, 15), "html", null, true);
        echo "%\" class=\"stars-active\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </li>
            <li>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </li>
        </ul>
        <div class=\"label-rating\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "getRating", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of 5 stars")), "html", null, true);
        echo "</div>
    </div>
    <small class=\"text-muted mt-1\">";
        // line 32
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "createdat", [], "any", false, false, false, 32), "none", "none", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "locale", [], "any", false, false, false, 32), ($context["date_timezone"] ?? null), ($context["date_format"] ?? null)), "html", null, true);
        echo "</small>
    <h6 class=\"mt-4 font-weight-bold\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "headline", [], "any", false, false, false, 33), "html", null, true);
        echo "</h6>
    <p class=\"mt-2 text-sm readmore\" data-collapsed-height=\"200\" data-height-margin=\"20\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["review"] ?? null), "details", [], "any", false, false, false, 34), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "Global/user-review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  103 => 33,  99 => 32,  92 => 30,  74 => 15,  70 => 13,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/user-review.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/user-review.html.twig");
    }
}
