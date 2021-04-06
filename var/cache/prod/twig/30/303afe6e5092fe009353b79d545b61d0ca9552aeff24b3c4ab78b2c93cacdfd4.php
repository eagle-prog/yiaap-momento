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

/* Global/user-avatar.html.twig */
class __TwigTemplate_428c9c2d596025546a9dc026d9747b0750ad7d251e090e58fd2c2b087e272cb5 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasRole", [0 => "ROLE_ATTENDEE"], "method", false, false, false, 1)) {
            // line 2
            echo "    <span class=\"avatar\"";
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatarName", [], "any", false, false, false, 2)) {
                echo "  style=\"background: url('";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAvatarPath", [], "any", false, false, false, 2)), "html", null, true);
                echo "');\"";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebookProfilePicture", [], "any", false, false, false, 2)) {
                echo " style=\"background: url('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebookProfilePicture", [], "any", false, false, false, 2), "html", null, true);
                echo "');\"";
            }
            echo " ";
            if ((isset($context["showusernametooltip"]) || array_key_exists("showusernametooltip", $context))) {
                echo "data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 2), "html", null, true);
                echo "\" data-container=\"body\"";
            }
            echo " >
        ";
            // line 3
            if (( !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatarName", [], "any", false, false, false, 3) &&  !twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebookProfilePicture", [], "any", false, false, false, 3))) {
                // line 4
                echo "            <i class=\"far fa-user\"></i>
        ";
            }
            // line 6
            echo "    </span>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 7
($context["user"] ?? null), "hasRole", [0 => "ROLE_ORGANIZER"], "method", false, false, false, 7)) {
            // line 8
            echo "    <span class=\"avatar\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "organizer", [], "any", false, false, false, 8), "logoName", [], "any", false, false, false, 8)) {
                echo " style=\"background: url('";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "organizer", [], "any", false, false, false, 8), "getLogoPath", [], "any", false, false, false, 8)), "html", null, true);
                echo "');\"";
            }
            echo " ";
            if ((isset($context["showusernametooltip"]) || array_key_exists("showusernametooltip", $context))) {
                echo "data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-container=\"body\"";
            }
            echo " >
        ";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "organizer", [], "any", false, false, false, 9), "logoName", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <i class=\"far fa-user\"></i>
        ";
            }
            // line 12
            echo "    </span>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 13
($context["user"] ?? null), "hasRole", [0 => "ROLE_POINTOFSALE"], "method", false, false, false, 13)) {
            // line 14
            echo "    <span class=\"avatar\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pointofsale", [], "any", false, false, false, 14), "organizer", [], "any", false, false, false, 14), "logoName", [], "any", false, false, false, 14)) {
                echo " style=\"background: url('";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pointofsale", [], "any", false, false, false, 14), "organizer", [], "any", false, false, false, 14), "getLogoPath", [], "any", false, false, false, 14)), "html", null, true);
                echo "');\"";
            }
            echo " ";
            if ((isset($context["showusernametooltip"]) || array_key_exists("showusernametooltip", $context))) {
                echo "data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 14), "html", null, true);
                echo "\" data-container=\"body\"";
            }
            echo " >
        ";
            // line 15
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pointofsale", [], "any", false, false, false, 15), "organizer", [], "any", false, false, false, 15), "logoName", [], "any", false, false, false, 15)) {
                // line 16
                echo "            <i class=\"far fa-user\"></i>
        ";
            }
            // line 18
            echo "    </span>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 19
($context["user"] ?? null), "hasRole", [0 => "ROLE_SCANNER"], "method", false, false, false, 19)) {
            // line 20
            echo "    <span class=\"avatar\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "scanner", [], "any", false, false, false, 20), "organizer", [], "any", false, false, false, 20), "logoName", [], "any", false, false, false, 20)) {
                echo " style=\"background: url('";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "scanner", [], "any", false, false, false, 20), "organizer", [], "any", false, false, false, 20), "getLogoPath", [], "any", false, false, false, 20)), "html", null, true);
                echo "');\"";
            }
            echo " ";
            if ((isset($context["showusernametooltip"]) || array_key_exists("showusernametooltip", $context))) {
                echo "data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 20), "html", null, true);
                echo "\" data-container=\"body\"";
            }
            echo " >
        ";
            // line 21
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "scanner", [], "any", false, false, false, 21), "organizer", [], "any", false, false, false, 21), "logoName", [], "any", false, false, false, 21)) {
                // line 22
                echo "            <i class=\"far fa-user\"></i>
        ";
            }
            // line 24
            echo "    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "Global/user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 24,  138 => 22,  136 => 21,  121 => 20,  119 => 19,  116 => 18,  112 => 16,  110 => 15,  95 => 14,  93 => 13,  90 => 12,  86 => 10,  84 => 9,  69 => 8,  67 => 7,  64 => 6,  60 => 4,  58 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Global/user-avatar.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Global/user-avatar.html.twig");
    }
}
