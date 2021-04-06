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

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c797eee841d97d85c95fe1d865f039919401c6e5976b2e4bff72efa2d8929e7a extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.confirmed", ["%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 5)], "FOSUserBundle");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
                            <p class=\"text-center\"><i class=\"far fa-check-circle fa-8x text-success\"></i></p>
                            <h3 class=\"text-center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.confirmed", ["%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 18)], "FOSUserBundle"), "html", null, true);
        echo "</h3>
                            ";
        // line 19
        if (($context["targetUrl"] ?? null)) {
            // line 20
            echo "                                <p class=\"text-center\"><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? null), "html", null, true);
            echo "\"><i class=\"fas fa-long-arrow-alt-left\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.back", [], "FOSUserBundle"), "html", null, true);
            echo "</a></p>
                            ";
        }
        // line 22
        echo "
                            <p class=\"text-center mt-5\">
                                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_index");
        echo "\" class=\"btn btn-primary mb-3\"><i class=\"fas fa-tachometer-alt fa-fw\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard", [], "messages"), "html", null, true);
        echo "</a>
                                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ATTENDEE")) {
            // line 26
            echo "                                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events");
            echo "\" class=\"btn btn-outline-primary mb-3\"><i class=\"fas fa-calendar-alt fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse events", [], "messages"), "html", null, true);
            echo "</a>
                                ";
        }
        // line 28
        echo "                            </p>
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
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  100 => 26,  98 => 25,  92 => 24,  88 => 22,  80 => 20,  78 => 19,  74 => 18,  65 => 12,  61 => 10,  57 => 9,  50 => 7,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/confirmed.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/FOSUserBundle/Registration/confirmed.html.twig");
    }
}
