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

/* Dashboard/Administrator/Settings/homepage.html.twig */
class __TwigTemplate_2d50ca2ff413b873d14aa2cc6a2378593b4306533ef026ebb6b3f10f56f79f57 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Homepage settings");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/homepage.html.twig", 1);
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
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/homepage.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 16
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/homepage.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 23), 'row');
        echo "
                            <div id=\"events\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "events", [], "any", false, false, false, 25), 'row');
        echo "
                            </div>
                            <div id=\"organizers\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organizers", [], "any", false, false, false, 28), 'row');
        echo "
                            </div>
                            <div id=\"custom\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "customBackgroundFile", [], "any", false, false, false, 31), 'row');
        echo "
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 32), 'row');
        echo "
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_search_box", [], "any", false, false, false, 33), 'row');
        echo "
                            </div>
                            ";
        // line 35
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

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
    <script>
        \$(document).ready(function () {

            \$(\"input[name='homepage_hero_settings[content]']\").change(function () {
                if (\$('#homepage_hero_settings_content_1').is(':checked')) {
                    \$('#events').show();
                    \$('#organizers').hide();
                    \$('#custom').hide();
                } else if (\$('#homepage_hero_settings_content_2').is(':checked')) {
                    \$('#events').hide();
                    \$('#organizers').show();
                    \$('#custom').hide();
                } else if (\$('#homepage_hero_settings_content_3').is(':checked')) {
                    \$('#events').hide();
                    \$('#organizers').hide();
                    \$('#custom').show();
                } else {
                    \$('#events').hide();
                    \$('#organizers').hide();
                    \$('#custom').hide();
                }
            });
            \$(\"input[name='homepage_hero_settings[content]']\").trigger('change');

        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  140 => 46,  126 => 35,  121 => 33,  117 => 32,  113 => 31,  107 => 28,  101 => 25,  96 => 23,  92 => 22,  88 => 21,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/homepage.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/homepage.html.twig");
    }
}
