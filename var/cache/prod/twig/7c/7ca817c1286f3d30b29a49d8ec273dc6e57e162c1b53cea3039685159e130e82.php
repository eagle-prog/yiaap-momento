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

/* Global/message.html.twig */
class __TwigTemplate_1d953f215274601dab4f5a9bd41bd0b91367d5cb8fc82c857a30d86f058ca8a9 extends \Twig\Template
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
        echo "<p class=\"alert alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " ";
        if ((isset($context["icon"]) || array_key_exists("icon", $context))) {
            echo "alert-icon";
        }
        if ((isset($context["class"]) || array_key_exists("class", $context))) {
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        }
        echo "\">";
        if ((isset($context["icon"]) || array_key_exists("icon", $context))) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
            echo "\"></i>";
        }
        echo " ";
        echo ($context["message"] ?? null);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "Global/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/message.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/message.html.twig");
    }
}
