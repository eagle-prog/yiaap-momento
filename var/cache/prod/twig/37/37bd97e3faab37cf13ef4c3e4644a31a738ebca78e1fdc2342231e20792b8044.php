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

/* Global/support-box.html.twig */
class __TwigTemplate_615abecb34cc4446d6f51505bac49fb2ff58f0bbdff72ce8b74d20a606e70823 extends \Twig\Template
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
        echo "<article class=\"box mt-3 text-center\">
    <figure>
        <div class=\"aside align-self-center\">
            <span class=\"icon-wrap icon-md round bg-primary\">
                <i class=\"fas fa-life-ring white\"></i>
            </span>
        </div>
        <figcaption class=\"text-wrap\">
            <h5 class=\"text-muted mt-4 mb-4\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You did not find an answer to your inquiry? Let us know and we will be glad to give you further help"), "html", null, true);
        echo "</h5>
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-dark justify-content-center rounded-0\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact us")), "html", null, true);
        echo "</a>
        </figcaption>
    </figure>
</article>";
    }

    public function getTemplateName()
    {
        return "Global/support-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/support-box.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/support-box.html.twig");
    }
}
