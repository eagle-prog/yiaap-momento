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

/* @A2lixTranslationForm/bootstrap_4_layout.html.twig */
class __TwigTemplate_a4918d0ef2d23654a65f5f570215e433edeb2fb0e1d40079e55175f779da867b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'a2lix_translations_widget' => [$this, 'block_a2lix_translations_widget'],
            'a2lix_translationsForms_widget' => [$this, 'block_a2lix_translationsForms_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('a2lix_translationsForms_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

    <div class=\"a2lix_translations\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\" role=\"tablist\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 7
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7);
            // line 8
            echo "
            <li class=\"nav-item\">
                <a href=\"#";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
            echo "_a2lix_translations-fields\" class=\"nav-link ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 10), "locale", [], "any", false, false, false, 10) == ($context["locale"] ?? null))) {
                echo "active";
            }
            echo "\" data-toggle=\"tab\" role=\"tab\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, true, false, 11), "label", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, true, false, 11), "label", [], "any", false, false, false, 11), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["locale"] ?? null)))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["locale"] ?? null))))), "html", null, true);
            echo "
                    ";
            // line 12
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 12), "default_locale", [], "any", false, false, false, 12) == ($context["locale"] ?? null))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[Default]"), "html", null, true);
            }
            // line 13
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 13), "required", [], "any", false, false, false, 13)) {
                echo "*";
            }
            // line 14
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 21
            echo "            ";
            $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21);
            // line 22
            echo "
            <div id=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "_a2lix_translations-fields\" class=\"tab-pane ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "locale", [], "any", false, false, false, 23) == ($context["locale"] ?? null))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 23), "valid", [], "any", false, false, false, 23)) {
                echo "sonata-ba-field-error";
            }
            echo "\" role=\"tabpanel\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
";
    }

    // line 32
    public function block_a2lix_translationsForms_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayBlock("a2lix_translations_widget", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@A2lixTranslationForm/bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 33,  146 => 32,  140 => 28,  131 => 25,  127 => 24,  115 => 23,  112 => 22,  109 => 21,  105 => 20,  100 => 17,  92 => 14,  87 => 13,  83 => 12,  79 => 11,  71 => 10,  67 => 8,  64 => 7,  60 => 6,  52 => 2,  48 => 1,  44 => 32,  41 => 31,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@A2lixTranslationForm/bootstrap_4_layout.html.twig", "/home/yiaapc5/momento.yiaap.com/vendor/a2lix/translation-form-bundle/src/Resources/views/bootstrap_4_layout.html.twig");
    }
}
