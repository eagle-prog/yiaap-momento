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

/* Dashboard/sidebar.html.twig */
class __TwigTemplate_efb2dd86e7115f59dbcfde7326e898366cd53788f5990e4ab300bf3a74568675 extends \Twig\Template
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
        echo "<div class=\"sticky-top sticky-sidebar dashboard-sidebar d-none d-lg-block d-xl-block\">
    <ul id=\"dashboard-menu\" class=\"nav nav-pills nav-pills-vertical-styled overflow-auto\" style=\"max-height: 20rem;\">
        ";
        // line 3
        $this->loadTemplate("Dashboard/sidebar-links.html.twig", "Dashboard/sidebar.html.twig", 3)->display($context);
        // line 4
        echo "    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "Dashboard/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/sidebar.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/sidebar.html.twig");
    }
}
