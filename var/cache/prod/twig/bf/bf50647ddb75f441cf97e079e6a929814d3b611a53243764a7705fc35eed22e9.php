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

/* Global/category-card.html.twig */
class __TwigTemplate_7faa49708e776639f28b28020a2065ea127637cb0aee9bed4c5fd9facb9d6e2d extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events", ["category" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" class=\"zoom-wrap\">
    <div class=\"card-banner mb-3\">
        <div class=\"card-body zoom-in img-lazy-load\" data-src=\"";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "imageName", [], "any", false, false, false, 3)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getImagePath", [], "any", false, false, false, 3))) : (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "getImagePlaceholder", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" style=\"height:250px; background-repeat: no-repeat; background-position: center center;\">
            <div class=\"loader\"></div>
        </div>
        <div class=\"text-bottom\"><h4 class=\"title\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h4></div>
    </div>
</a>
";
    }

    public function getTemplateName()
    {
        return "Global/category-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/category-card.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/category-card.html.twig");
    }
}
