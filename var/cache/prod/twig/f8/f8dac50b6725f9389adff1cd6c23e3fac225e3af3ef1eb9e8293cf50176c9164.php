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

/* @FOSUser/Registration/register-organizer.html.twig */
class __TwigTemplate_00e49abc62def8afbb7badb93031da9ffc1648bc1ebd95398c3c4aca54e9f425 extends \Twig\Template
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
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig"], true);
        // line 6
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Take your events to the next level", [], "messages");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "@FOSUser/Registration/register-organizer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <div class=\"col-12 mb-5\">
                    <h1 class=\"card-title text-center\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"col-xl-5 offset-xl-1 d-none d-xl-block\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/register-organizer.png"), "html", null, true);
        echo "\" class=\"img-fluid\" />
                </div>
                <div class=\"col-xl-4 col-12\">
                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "attr" => ["novalidate" => "novalidate"]]);
        echo "

                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"far fa-id-card\"></i> </span>
                        </div>
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organizer", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), 'widget');
        echo "
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "organizer", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user\"></i> </span>
                        </div>
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 37), 'widget');
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 38), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user\"></i> </span>
                        </div>
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 44), 'widget');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 45), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-tag\"></i> </span>
                        </div>
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 51), 'widget');
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 52), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-envelope\"></i> </span>
                        </div>
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 58), 'widget');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 59), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-lock\"></i> </span>
                        </div>
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), 'widget');
        echo "
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 66), "first", [], "any", false, false, false, 66), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-lock\"></i> </span>
                        </div>
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 72), "second", [], "any", false, false, false, 72), 'widget');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 73), "second", [], "any", false, false, false, 73), 'errors');
        echo "
                    </div>
                    ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_recaptcha_enabled"], "method", false, false, false, 75) == "yes")) {
            // line 76
            echo "                        <div class=\"form-group\">
                            ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recaptcha", [], "any", false, false, false, 77), 'widget');
            echo "
                            ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recaptcha", [], "any", false, false, false, 78), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 81
        echo "                    <div class=\"mb-3 text-sm text-center\">
                        ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_terms_of_service_page"], "method", false, false, false, 82) == "yes")) {
            // line 83
            echo "                            <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By clicking the Sign Up button, I agree to", [], "messages"), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "terms_of_service_page_slug"], "method", false, false, false, 84)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms of service", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 86
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_privacy_policy_page"], "method", false, false, false, 86) == "yes")) {
            // line 87
            echo "                            <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("and", [], "messages"), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "privacy_policy_page_slug"], "method", false, false, false, 88)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privacy policy", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 90
        echo "                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Account", [], "messages"), "html", null, true);
        echo "</button>
                    </div>
                    <p class=\"text-center\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Already have an account?", [], "messages"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in", [], "messages"), "html", null, true);
        echo "</a></p>
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 95), 'widget');
        echo "
                        ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register-organizer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 96,  250 => 95,  242 => 94,  237 => 92,  233 => 90,  226 => 88,  221 => 87,  218 => 86,  211 => 84,  206 => 83,  204 => 82,  201 => 81,  195 => 78,  191 => 77,  188 => 76,  186 => 75,  181 => 73,  177 => 72,  168 => 66,  164 => 65,  155 => 59,  151 => 58,  142 => 52,  138 => 51,  129 => 45,  125 => 44,  116 => 38,  112 => 37,  103 => 31,  99 => 30,  90 => 24,  85 => 22,  79 => 19,  73 => 16,  67 => 13,  63 => 11,  59 => 10,  52 => 8,  47 => 1,  45 => 6,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/register-organizer.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/FOSUserBundle/Registration/register-organizer.html.twig");
    }
}
