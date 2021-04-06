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

/* Global/navigation.html.twig */
class __TwigTemplate_01c2582693ddb683429dc0df402d98aaf1f341df13b6d518912b50354737f439 extends \Twig\Template
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
        echo "<section class=\"section-pagetop bg-gray\">
    <div class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 2), "html", null, true);
        echo " clearfix\">
        <h4 class=\"title-page dark b float-xl-left mb-0\">";
        // line 3
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_last($this->env, ($context["navigation"] ?? null))) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["current"] ?? null) : null), "html", null, true);
        echo "</h4>

        <nav class=\"float-xl-right mt-2 mt-xl-0\">
            <ol class=\"breadcrumb text-white\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"dark\"><i class=\"fas fa-home\"></i></a></li>
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["li"]) {
            // line 9
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["li"]);
            foreach ($context['_seq'] as $context["routename"] => $context["pagetitle"]) {
                if (($context["routename"] != "current")) {
                    // line 10
                    echo "                                ";
                    if (twig_in_filter("/", $context["routename"])) {
                        // line 11
                        echo "                                    ";
                        $context["href"] = $context["routename"];
                        // line 12
                        echo "                                ";
                    } else {
                        // line 13
                        echo "                                    ";
                        $context["href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($context["routename"]);
                        // line 14
                        echo "                                ";
                    }
                    // line 15
                    echo "                        <li class=\"breadcrumb-item\"><a href=\"";
                    echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
                    echo "\" class=\"dark\">";
                    echo twig_escape_filter($this->env, $context["pagetitle"], "html", null, true);
                    echo "</a></li>
                        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['routename'], $context['pagetitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['li'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_last($this->env, ($context["navigation"] ?? null))) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["current"] ?? null) : null), "html", null, true);
        echo "</li>
            </ol>
        </nav>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "Global/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  92 => 17,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  59 => 9,  55 => 8,  51 => 7,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/navigation.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/navigation.html.twig");
    }
}
