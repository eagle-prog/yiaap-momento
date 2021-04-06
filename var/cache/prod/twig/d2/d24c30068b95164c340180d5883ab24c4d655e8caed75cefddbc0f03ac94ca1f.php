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

/* Front/HelpCenter/index.html.twig */
class __TwigTemplate_68b715380171e0a1b7f76ed276a8a21d81b2f7726b76554f04e4a63d3bab7233 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help center");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/HelpCenter/index.html.twig", 1);
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
    <section class=\"section-intro help-center-hero-bg padding-y-lg padding-x-md\">
        <div class=\"row\">
            <div class=\"col-sm-6 mx-auto\">
                <article class=\"white text-center mb-5\">
                    <h1 class=\"display-4\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How can we help?"), "html", null, true);
        echo "</h1>
                    <form class=\"mb-3\">
                        <div class=\"input-icon\">
                            <i class=\"fa fa-search mt-2\"></i>
                            <input name=\"keyword\" class=\"form-control\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for answers"), "html", null, true);
        echo "\" type=\"text\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "Request", [], "any", false, false, false, 17), "get", [0 => "keyword"], "method", false, false, false, 17), "html", null, true);
        echo "\">
                        </div>
                    </form>
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Organizers, attendees, this support center is intended to quickly reply to your questions, if still don't find answers, please contact us, w e will be happy to receive your inquiry"), "html", null, true);
        echo "</p>
                </article>

            </div>
        </div>
    </section>

    <div class=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 27), "html", null, true);
        echo "\">

        <section class=\"padding-y-lg\">
            <div class=\"row\">

                ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "get", [0 => "keyword"], "method", false, false, false, 32)) {
            // line 33
            echo "                    ";
            $context["searchresults"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getHelpCenterArticles", [0 => ["keyword" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 33), "get", [0 => "keyword"], "method", false, false, false, 33)]], "method", false, false, false, 33), "getQuery", [], "method", false, false, false, 33), "getResult", [], "method", false, false, false, 33);
            // line 34
            echo "                    <div class=\"col-12 mb-3\">
                        <article class=\"box h-100 padding-y-lg\">
                            <strong>";
            // line 36
            echo twig_escape_filter($this->env, ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%resultsCount% result(s) found", ["%resultsCount%" => twig_length_filter($this->env, ($context["searchresults"] ?? null))]) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("for")) . " \"") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 36), "get", [0 => "keyword"], "method", false, false, false, 36)) . "\""), "html", null, true);
            echo "</strong>
                            ";
            // line 37
            if (twig_length_filter($this->env, ($context["searchresults"] ?? null))) {
                // line 38
                echo "                                <hr>
                                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["searchresults"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 40
                    echo "                                    <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center_article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 40)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                    echo " <i class=\"fas fa-chevron-right ml-1 mr-1\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 40), "html", null, true);
                    echo "</a></p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                            ";
            }
            // line 43
            echo "                        </article>
                    </div>
                ";
        } else {
            // line 46
            echo "
                    ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getHelpCenterCategories", [0 => ["parent" => "none"]], "method", false, false, false, 47), "getQuery", [], "method", false, false, false, 47), "getResult", [], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 48
                echo "
                        <div class=\"col-md-6 mb-3\">
                            <article class=\"box h-100 padding-y-lg\">
                                <figure class=\"itembox text-center\">
                                    <span class=\"mt-2 icon-wrap rounded icon-lg bg-primary\"><i class=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "icon", [], "any", false, false, false, 52), "html", null, true);
                echo "  white\"></i></span>
                                    <figcaption class=\"text-wrap\">
                                        <h5 class=\"title\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</h5>
                                    </figcaption>
                                </figure>

                                <hr>

                                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getHelpCenterArticles", [0 => ["category" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 60), "featured" => true]], "method", false, false, false, 60), "getQuery", [], "method", false, false, false, 60), "getResult", [], "method", false, false, false, 60));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 61
                    echo "                                    <p><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center_article", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 61), "html", null, true);
                    echo "</a></p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "
                                <hr>

                                <a class=\"btn btn-outline-primary btn-block\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See more articles"), "html", null, true);
                echo "
                                    ";
                // line 67
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "locale", [], "any", false, false, false, 67) == "ar")) {
                    // line 68
                    echo "                                        <i class=\"fas fa-chevron-left mr-3\"></i>
                                    ";
                } else {
                    // line 70
                    echo "                                        <i class=\"fas fa-chevron-right ml-3\"></i>
                                    ";
                }
                // line 72
                echo "                                </a>

                            </article>
                        </div>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
                ";
        }
        // line 80
        echo "
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 85
        $this->loadTemplate("Global/support-box.html.twig", "Front/HelpCenter/index.html.twig", 85)->display($context);
        // line 86
        echo "                </div>
            </div>

        </section>
    </div>

";
    }

    public function getTemplateName()
    {
        return "Front/HelpCenter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 86,  229 => 85,  222 => 80,  218 => 78,  207 => 72,  203 => 70,  199 => 68,  197 => 67,  191 => 66,  186 => 63,  175 => 61,  171 => 60,  162 => 54,  157 => 52,  151 => 48,  147 => 47,  144 => 46,  139 => 43,  136 => 42,  123 => 40,  119 => 39,  116 => 38,  114 => 37,  110 => 36,  106 => 34,  103 => 33,  101 => 32,  93 => 27,  83 => 20,  75 => 17,  68 => 13,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/HelpCenter/index.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/HelpCenter/index.html.twig");
    }
}
