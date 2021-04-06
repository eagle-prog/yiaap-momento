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

/* Global/dashboard-items-sidenav.html.twig */
class __TwigTemplate_03a77392c54ff89db6b7d91b501761f6e18cf46e908168f217b4122c2b7a1e69 extends \Twig\Template
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
        echo "<div id=\"dashboard-sidenav\" class=\"dashboard-sidenav d-lg-none d-xl-none\">
    <a href=\"javascript:void(0)\" class=\"dashboard-sidenav-close\" onclick=\"closeDashboardSideNav()\">&times;</a>
    <span class=\"dashboard-sidenav-username\"><i class=\"far fa-user\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 3), "username", [], "any", false, false, false, 3), "html", null, true);
        echo "</span>
    <ul class=\"nav nav-pills nav-pills-vertical-styled overflow-auto\" >
        ";
        // line 5
        $this->loadTemplate("Dashboard/sidebar-links.html.twig", "Global/dashboard-items-sidenav.html.twig", 5)->display($context);
        // line 6
        echo "        <li class=\"nav-item\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"nav-link\">
                <i class=\"fas fa-sign-out-alt fa-fw\"></i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "Global/dashboard-items-sidenav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  51 => 7,  48 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/dashboard-items-sidenav.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/dashboard-items-sidenav.html.twig");
    }
}
