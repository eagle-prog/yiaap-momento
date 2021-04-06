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

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_fc7c7aecbc5d1e8715c95db5cedd3f6a54f4797b90386ca16670d6b91c4aeba0 extends \Twig\Template
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
        // line 5
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your email inbox", [], "messages");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 12), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            <div class=\"col-12 col-md-6 mx-auto\">
                                <p class=\"text-center\"><i class=\"fas fa-inbox fa-8x text-success\"></i></p>
                                <p class=\"text-center\">
                                    ";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", ["%tokenLifetime%" => ($context["tokenLifetime"] ?? null)], "FOSUserBundle"), "html", null, true));
        echo "
                                </p>
                            </div>
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
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  65 => 12,  61 => 10,  57 => 9,  50 => 7,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Resetting/check_email.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/FOSUserBundle/Resetting/check_email.html.twig");
    }
}
