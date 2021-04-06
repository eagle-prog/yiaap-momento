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

/* Dashboard/Administrator/Settings/menu-edit.html.twig */
class __TwigTemplate_68ab98aa53c8192e0d3d6dcf7441f0c935acdab04c1b85828dd13e031b320501 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Global/jquery.collection.html.twig"], true);
        // line 5
        $context["pagetitle"] = ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit the menu") . " \"") . twig_get_attribute($this->env, $this->source, ($context["menu"] ?? null), "name", [], "any", false, false, false, 5)) . "\"");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/menu-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_administrator_settings_menus" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menus settings"), "current" => ($context["pagetitle"] ?? null)]];
        // line 12
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/menu-edit.html.twig", 12)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 13
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 15), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 18
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/menu-edit.html.twig", 18)->display($context);
        // line 19
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                            ";
        // line 25
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

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    <script>

        \$(document).ready(function () {



        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/menu-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  112 => 36,  98 => 25,  94 => 24,  90 => 23,  84 => 19,  82 => 18,  76 => 15,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  60 => 9,  53 => 7,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/menu-edit.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/menu-edit.html.twig");
    }
}
