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

/* Global/sortable.html.twig */
class __TwigTemplate_69a2e2d9643bf085e495609ff682ae0de6ae9747ce46003470b0b8c48f44a0fb extends \Twig\Template
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
        $context["href"] = "";
        // line 2
        $context["direction"] = "";
        // line 3
        $context["criteria"] = "";
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            // line 6
            echo "
    ";
            // line 7
            if (($context["attr"] == "href")) {
                // line 8
                echo "        ";
                $context["href"] = $context["value"];
                // line 9
                echo "    ";
            }
            // line 10
            echo "
    ";
            // line 11
            if (($context["attr"] == "direction")) {
                // line 12
                echo "        ";
                $context["direction"] = $context["value"];
                // line 13
                echo "    ";
            }
            // line 14
            echo "
    ";
            // line 15
            if (($context["attr"] == "criteria")) {
                // line 16
                echo "        ";
                $context["criteria"] = $context["value"];
                // line 17
                echo "    ";
            }
            // line 18
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

<option data-direction=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["direction"] ?? null), "html", null, true);
        echo "\" data-criteria=\"";
        echo twig_escape_filter($this->env, ($context["criteria"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["href"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</option>";
    }

    public function getTemplateName()
    {
        return "Global/sortable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  90 => 20,  83 => 18,  80 => 17,  77 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/sortable.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/sortable.html.twig");
    }
}
