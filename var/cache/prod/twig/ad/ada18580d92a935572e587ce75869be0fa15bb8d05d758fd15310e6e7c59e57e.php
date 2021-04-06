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

/* Global/pagination.html.twig */
class __TwigTemplate_3958c890b4bb6d0a63b19e65e81f44bac2adf16299ed67f4f65f1d4224a0a1a6 extends \Twig\Template
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
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            echo "    <nav class=\"pt-3\">
        ";
            // line 3
            $context["classAlign"] = (( !(isset($context["align"]) || array_key_exists("align", $context))) ? ("") : ((((($context["align"] ?? null) == "center")) ? (" justify-content-center") : ((((($context["align"] ?? null) == "right")) ? (" justify-content-end") : (""))))));
            // line 4
            echo "        ";
            $context["classSize"] = (( !(isset($context["size"]) || array_key_exists("size", $context))) ? ("") : ((((($context["size"] ?? null) == "large")) ? (" pagination-lg") : ((((($context["size"] ?? null) == "small")) ? (" pagination-sm") : (""))))));
            // line 5
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, ($context["classAlign"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["classSize"] ?? null), "html", null, true);
            echo "\">

            ";
            // line 7
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 8
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == "ar")) {
                    // line 11
                    echo "                            <i class=\"fas fa-angle-right\"></i>
                        ";
                } else {
                    // line 13
                    echo "                            <i class=\"fas fa-angle-left\"></i>
                        ";
                }
                // line 15
                echo "                    </a>
                </li>
            ";
            } else {
                // line 18
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">
                        ";
                // line 20
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "locale", [], "any", false, false, false, 20) == "ar")) {
                    // line 21
                    echo "                            <i class=\"fas fa-angle-right\"></i>
                        ";
                } else {
                    // line 23
                    echo "                            <i class=\"fas fa-angle-left\"></i>
                        ";
                }
                // line 25
                echo "                    </span>
                </li>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            if ((($context["startPage"] ?? null) > 1)) {
                // line 30
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 33
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 34
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 37
($context["startPage"] ?? null) != 2)) {
                    // line 38
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 42
                echo "            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 46
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 50
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 51
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 54
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
            ";
            // line 57
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 58
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 59
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 60
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 64
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                // line 69
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 73
            echo "
            ";
            // line 74
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 75
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">
                        ";
                // line 77
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 77), "locale", [], "any", false, false, false, 77) == "ar")) {
                    // line 78
                    echo "                            <i class=\"fas fa-angle-left\"></i>
                        ";
                } else {
                    // line 80
                    echo "                            <i class=\"fas fa-angle-right\"></i>
                        ";
                }
                // line 82
                echo "                    </a>
                </li>
            ";
            } else {
                // line 85
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">
                        ";
                // line 87
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 87), "locale", [], "any", false, false, false, 87) == "ar")) {
                    // line 88
                    echo "                            <i class=\"fas fa-angle-left\"></i>
                        ";
                } else {
                    // line 90
                    echo "                            <i class=\"fas fa-angle-right\"></i>
                        ";
                }
                // line 92
                echo "                    </span>
                </li>
            ";
            }
            // line 95
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "Global/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 95,  251 => 92,  247 => 90,  243 => 88,  241 => 87,  237 => 85,  232 => 82,  228 => 80,  224 => 78,  222 => 77,  218 => 76,  215 => 75,  213 => 74,  210 => 73,  202 => 70,  199 => 69,  196 => 68,  188 => 65,  185 => 64,  179 => 60,  176 => 59,  173 => 58,  171 => 57,  168 => 56,  161 => 54,  155 => 51,  152 => 50,  144 => 47,  141 => 46,  138 => 45,  134 => 44,  131 => 43,  128 => 42,  122 => 38,  120 => 37,  115 => 35,  112 => 34,  110 => 33,  105 => 31,  102 => 30,  100 => 29,  97 => 28,  92 => 25,  88 => 23,  84 => 21,  82 => 20,  78 => 18,  73 => 15,  69 => 13,  65 => 11,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/pagination.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/pagination.html.twig");
    }
}
