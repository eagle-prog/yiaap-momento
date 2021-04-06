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

/* Front/Page/contact.html.twig */
class __TwigTemplate_1dcfa8d1e2194fee34935e50d831ac9d69d54363941d80a94d71ed152651bda6 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact us");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Front/Page/contact.html.twig", 1);
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
        $this->loadTemplate("Global/navigation.html.twig", "Front/Page/contact.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
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
                            <h1 class=\"text-center mb-5\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FAQ"), "html", null, true);
        echo "</h1>
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getHelpCenterArticles", [0 => ["featured" => true, "limit" => 5]], "method", false, false, false, 19), "getQuery", [], "method", false, false, false, 19), "getResult", [], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["featuredHelpCenterArticle"]) {
            // line 20
            echo "                                <p class=\"text-center\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center_article", ["slug" => twig_get_attribute($this->env, $this->source, $context["featuredHelpCenterArticle"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["featuredHelpCenterArticle"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['featuredHelpCenterArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                            <h4 class=\"text-center mt-5\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("help_center");
        echo "\"><i class=\"fas fa-life-ring\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help center"), "html", null, true);
        echo "</a></h4>

                            ";
        // line 24
        if (((((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_email"], "method", false, false, false, 24) != "") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 24) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 24) != "")) || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_address"], "method", false, false, false, 24) != ""))) {
            // line 25
            echo "
                                <hr class=\"mt-5 mb-5\">

                                <h1 class=\"text-center mb-5\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact information"), "html", null, true);
            echo "</h1>

                                <div class=\"row\">

                                    ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_email"], "method", false, false, false, 32) != "")) {
                // line 33
                echo "
                                        <div class=\"col-12 col-lg-4 card border-0 card-body text-center shadow-none\">
                                            <figure class=\"itemside\">
                                                <div class=\"aside\">
                                                    <span class=\"icon-wrap icon-md round bg-info\">
                                                        <i class=\"fas fa-envelope-open-text white\"></i>
                                                    </span>
                                                </div>
                                                <figcaption class=\"text-wrap align-self-center\">
                                                    <h6 class=\"title\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_email"], "method", false, false, false, 42), "html", null, true);
                echo "</h6>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    ";
            }
            // line 48
            echo "
                                    ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 49) != "")) {
                // line 50
                echo "
                                        <div class=\"col-12 col-lg-4 card border-0 card-body text-center shadow-none\">
                                            <figure class=\"itemside\">
                                                <div class=\"aside\">
                                                    <span class=\"icon-wrap icon-md round bg-info\">
                                                        <i class=\"fas fa-phone white\"></i>
                                                    </span>
                                                </div>
                                                <figcaption class=\"text-wrap align-self-center\">
                                                    <h6 class=\"title\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_phone"], "method", false, false, false, 59), "html", null, true);
                echo "</h6>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    ";
            }
            // line 65
            echo "
                                    ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 66) != "")) {
                // line 67
                echo "
                                        <div class=\"col-12 col-lg-4 card border-0 card-body text-center shadow-none\">
                                            <figure class=\"itemside\">
                                                <div class=\"aside\">
                                                    <span class=\"icon-wrap icon-md round bg-info\">
                                                        <i class=\"fas fa-fax white\"></i>
                                                    </span>
                                                </div>
                                                <figcaption class=\"text-wrap align-self-center\">
                                                    <h6 class=\"title\">";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_fax"], "method", false, false, false, 76), "html", null, true);
                echo "</h6>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    ";
            }
            // line 82
            echo "
                                    ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_address"], "method", false, false, false, 83) != "")) {
                // line 84
                echo "
                                        <div class=\"col card border-0 card-body text-center shadow-none\">
                                            <figure class=\"itemside\">
                                                <div class=\"aside\">
                                                    <span class=\"icon-wrap icon-md round bg-info\">
                                                        <i class=\"fas fa-map-marker white\"></i>
                                                    </span>
                                                </div>
                                                <figcaption class=\"text-wrap align-self-center\">
                                                    <h6 class=\"title\">";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_address"], "method", false, false, false, 93), "html", null, true);
                echo "</h6>
                                                </figcaption>
                                            </figure>
                                        </div>

                                    ";
            }
            // line 99
            echo "
                                </div>

                                ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "contact_email"], "method", false, false, false, 102)) {
                // line 103
                echo "
                                    <hr class=\"mt-5 mb-5\">

                                    <h1 class=\"text-center mb-5\">";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send us an email"), "html", null, true);
                echo "</h1>

                                    ";
                // line 108
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "col-12 col-lg-8 mx-auto"]]);
                echo "
                                    ";
                // line 109
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
                                    ";
                // line 110
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
                echo "

                                ";
            }
            // line 113
            echo "                            ";
        }
        // line 114
        echo "
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
        return "Front/Page/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 114,  250 => 113,  244 => 110,  240 => 109,  236 => 108,  231 => 106,  226 => 103,  224 => 102,  219 => 99,  210 => 93,  199 => 84,  197 => 83,  194 => 82,  185 => 76,  174 => 67,  172 => 66,  169 => 65,  160 => 59,  149 => 50,  147 => 49,  144 => 48,  135 => 42,  124 => 33,  122 => 32,  115 => 28,  110 => 25,  108 => 24,  100 => 22,  89 => 20,  85 => 19,  81 => 18,  73 => 13,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Front/Page/contact.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Front/Page/contact.html.twig");
    }
}
