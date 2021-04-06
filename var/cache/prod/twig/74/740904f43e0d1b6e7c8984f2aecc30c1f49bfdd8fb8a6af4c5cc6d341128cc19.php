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

/* Global/jquery.collection.html.twig */
class __TwigTemplate_b3c70d7011282aebee29120ee6e76a35ffd49af56ffa66184e966d20b877792e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'collection_widget' => [$this, 'block_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    public function block_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        ob_start(function () { return ''; });
        // line 24
        echo "        ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 25
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["prototype"] ?? null), 'row')]);
            // line 26
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26)]);
            // line 27
            echo "        ";
        }
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-allow-add" => ((($context["allow_add"] ?? null)) ? (1) : (0))]);
        // line 29
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-allow-remove" => ((($context["allow_delete"] ?? null)) ? (1) : (0))]);
        // line 30
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["data-name-prefix" => ($context["full_name"] ?? null)]);
        // line 31
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "Global/jquery.collection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  69 => 30,  66 => 29,  63 => 28,  60 => 27,  57 => 26,  54 => 25,  51 => 24,  48 => 23,  41 => 22,  38 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/jquery.collection.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/jquery.collection.html.twig");
    }
}
