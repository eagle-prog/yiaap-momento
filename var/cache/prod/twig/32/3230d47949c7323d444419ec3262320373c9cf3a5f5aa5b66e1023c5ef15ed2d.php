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

/* @VichUploader/Form/fields.html.twig */
class __TwigTemplate_05c0337a0f9233fde269b1b5407422593977cdd94372171e509cabeb5dcb76dc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vich_file_row' => [$this, 'block_vich_file_row'],
            'vich_file_widget' => [$this, 'block_vich_file_widget'],
            'vich_image_row' => [$this, 'block_vich_image_row'],
            'vich_image_widget' => [$this, 'block_vich_image_widget'],
            'vich_file_label' => [$this, 'block_vich_file_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('vich_file_label', $context, $blocks);
    }

    // line 1
    public function block_vich_file_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        ob_start(function () { return ''; });
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 9), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 10)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 11), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (($context["download_uri"] ?? null)) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 21
    public function block_vich_image_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        ob_start(function () { return ''; });
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", [], "any", false, false, false, 29), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", true, true, false, 30)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", [], "any", false, false, false, 31), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if (($context["image_uri"] ?? null)) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? null), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["image_uri"] ?? null), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if (($context["download_uri"] ?? null)) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["download_label"] ?? null)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["download_label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 44
    public function block_vich_file_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        $context["label"] = _twig_default_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null)), ($context["label"] ?? null));
        // line 46
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@VichUploader/Form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  186 => 46,  183 => 45,  179 => 44,  173 => 40,  165 => 38,  162 => 37,  154 => 35,  152 => 34,  149 => 33,  143 => 31,  141 => 30,  137 => 29,  134 => 28,  131 => 27,  127 => 26,  123 => 23,  121 => 22,  117 => 21,  111 => 17,  103 => 15,  101 => 14,  98 => 13,  92 => 11,  90 => 10,  86 => 9,  83 => 8,  80 => 7,  76 => 6,  72 => 3,  70 => 2,  66 => 1,  62 => 44,  59 => 43,  57 => 26,  54 => 25,  52 => 21,  49 => 20,  47 => 6,  44 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@VichUploader/Form/fields.html.twig", "/home/yiaapc5/momento.yiaap.com/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
