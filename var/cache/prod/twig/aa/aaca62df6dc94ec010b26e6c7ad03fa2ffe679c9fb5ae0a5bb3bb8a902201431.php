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

/* Front/HelpCenter/category.html.twig */
class __TwigTemplate_01f6629d1c124884e613e011c33190622f4187ad3bd648d6d2e9be80a13f8fb5 extends \Twig\Template
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
        $context["pagetitle"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Support for") . " ") . twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3));
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/HelpCenter/category.html.twig", 1);
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
        $context["navigation"] = [0 => ["help_center" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help center"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Front/HelpCenter/category.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            <article class=\"h-100\">
                                <figure class=\"itembox text-center\">
                                    <span class=\"mt-2 icon-wrap rounded icon-lg bg-primary\"><i class=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "icon", [], "any", false, false, false, 20), "html", null, true);
        echo "  white\"></i></span>
                                    <figcaption class=\"text-wrap\">
                                        <h5 class=\"title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
                                    </figcaption>
                                </figure>

                                <hr>

                                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getHelpCenterArticles", [0 => ["category" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 28)]], "method", false, false, false, 28), "getQuery", [], "method", false, false, false, 28), "getResult", [], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 29
            echo "                                    <p><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center_article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></p>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                            </article>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
    }

    public function getTemplateName()
    {
        return "Front/HelpCenter/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  101 => 29,  97 => 28,  88 => 22,  83 => 20,  73 => 13,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/HelpCenter/category.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/HelpCenter/category.html.twig");
    }
}
