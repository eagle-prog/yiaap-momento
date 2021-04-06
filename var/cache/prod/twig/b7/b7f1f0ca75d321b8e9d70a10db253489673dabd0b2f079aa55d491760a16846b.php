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

/* Dashboard/Shared/Review/add.html.twig */
class __TwigTemplate_ffbe80cd7f3e6702594048c58604c32cf6e1f558fc3f8b3716ef98ab8d0c35cc extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add your review for %eventname%", ["%eventname%" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 3)]);
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Review/add.html.twig", 1);
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
        $context["navigation"] = [0 => ["events" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Review/add.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">

            <div class=\"row mb-5 event-scorecard\">
                <div class=\"col-12 col-lg-6\">
                    ";
        // line 17
        $context["runtimeConfig"] = ["scale" => ["dim" => [0 => 150, 1 => 150]]];
        // line 18
        echo "                    <img class=\"img-lazy-load\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader.gif"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter(twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getImagePath", [], "any", false, false, false, 18), "scale", ($context["runtimeConfig"] ?? null)), "html", null, true);
        echo "\" />
                    <div class=\"ml-5 display-inline-block\">
                        <h3><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event", ["slug" => twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "slug", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</a></h3>
                        <div class=\"rating-wrap\">
                            <ul class=\"rating-stars\">
                                <li style=\"width:";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingPercentage", [], "any", false, false, false, 23), "html", null, true);
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
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingAvg", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of 5 stars")), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"side\">
                        <div>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("5 stars"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"middle\">
                        <div class=\"bar-container\">
                            <div class=\"bar\" style=\"width: ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 5], "method", false, false, false, 48), "html", null, true);
        echo "%;\"></div>
                        </div>
                    </div>
                    <div class=\"side right\">
                        <div class=\"text-muted\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 5], "method", false, false, false, 52), "html", null, true);
        echo "%</div>
                    </div>
                    <div class=\"side\">
                        <div>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("4 stars"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"middle\">
                        <div class=\"bar-container\">
                            <div class=\"bar\" style=\"width: ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 4], "method", false, false, false, 59), "html", null, true);
        echo "%;\"></div>
                        </div>
                    </div>
                    <div class=\"side right\">
                        <div class=\"text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 4], "method", false, false, false, 63), "html", null, true);
        echo "%</div>
                    </div>
                    <div class=\"side\">
                        <div>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("3 stars"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"middle\">
                        <div class=\"bar-container\">
                            <div class=\"bar\" style=\"width: ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 3], "method", false, false, false, 70), "html", null, true);
        echo "%;\"></div>
                        </div>
                    </div>
                    <div class=\"side right\">
                        <div class=\"text-muted\">";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 3], "method", false, false, false, 74), "html", null, true);
        echo "%</div>
                    </div>
                    <div class=\"side\">
                        <div>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2 stars"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"middle\">
                        <div class=\"bar-container\">
                            <div class=\"bar\" style=\"width: ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 2], "method", false, false, false, 81), "html", null, true);
        echo "%;\"></div>
                        </div>
                    </div>
                    <div class=\"side right\">
                        <div class=\"text-muted\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 2], "method", false, false, false, 85), "html", null, true);
        echo "%</div>
                    </div>
                    <div class=\"side\">
                        <div>";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1 star"), "html", null, true);
        echo "</div>
                    </div>
                    <div class=\"middle\">
                        <div class=\"bar-container\">
                            <div class=\"bar\" style=\"width: ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 1], "method", false, false, false, 92), "html", null, true);
        echo "%;\"></div>
                        </div>
                    </div>
                    <div class=\"side right\">
                        <div class=\"text-muted\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "getRatingsPercentageForRating", [0 => 1], "method", false, false, false, 96), "html", null, true);
        echo "%</div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return "Dashboard/Shared/Review/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 107,  237 => 106,  233 => 105,  221 => 96,  214 => 92,  207 => 88,  201 => 85,  194 => 81,  187 => 77,  181 => 74,  174 => 70,  167 => 66,  161 => 63,  154 => 59,  147 => 55,  141 => 52,  134 => 48,  127 => 44,  116 => 38,  98 => 23,  90 => 20,  82 => 18,  80 => 17,  73 => 13,  69 => 11,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Review/add.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Review/add.html.twig");
    }
}
