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

/* @FOSUser/Registration/register-attendee.html.twig */
class __TwigTemplate_0e1c7022efc9cff6e92cd87c7cd37ed24d7d86dbc8790e4a8a5382f12658aa4e extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up", [], "messages");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "@FOSUser/Registration/register-attendee.html.twig", 1);
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
                <div class=\"col-12 mb-5\">
                    <h1 class=\"card-title text-center\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo "</h1>
                </div>
                <div class=\"col-xl-5 offset-xl-1 d-none d-xl-block\">
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/illustrations/register-attendee.png"), "html", null, true);
        echo "\" class=\"img-fluid\" />
                </div>
                <div class=\"col-xl-4 col-12\">
                    ";
        // line 21
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_facebook_enabled"], "method", false, false, false, 21) == "yes") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_google_enabled"], "method", false, false, false, 21) == "yes"))) {
            // line 22
            echo "                        <p>
                            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_facebook_enabled"], "method", false, false, false, 23) == "yes")) {
                // line 24
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "facebook"]);
                echo "\" class=\"btn btn-block btn-facebook\"> <i class=\"fab fa-facebook-f\"></i> &nbsp; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up via Facebook", [], "messages"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 26
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_google_enabled"], "method", false, false, false, 26) == "yes")) {
                // line 27
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "google"]);
                echo "\" class=\"btn btn-block btn-google-plus\"> <i class=\"fab fa-google\"></i> &nbsp; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up via Google", [], "messages"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 29
            echo "                        </p>
                        <p class=\"divider-text\">
                            <span>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OR", [], "messages"), "html", null, true);
            echo "</span>
                        </p>
                    ";
        }
        // line 34
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "attr" => ["novalidate" => "novalidate"]]);
        echo "

                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user\"></i> </span>
                        </div>
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 42), 'widget');
        echo "
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", false, false, false, 43), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user\"></i> </span>
                        </div>
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 49), 'widget');
        echo "
                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", false, false, false, 50), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-tag\"></i> </span>
                        </div>
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 56), 'widget');
        echo "
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 57), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-envelope\"></i> </span>
                        </div>
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 63), 'widget');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 64), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-lock\"></i> </span>
                        </div>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 70), "first", [], "any", false, false, false, 70), 'widget');
        echo "
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 71), "first", [], "any", false, false, false, 71), 'errors');
        echo "
                    </div>
                    <div class=\"form-group input-group\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text border-0\"> <i class=\"fas fa-user-lock\"></i> </span>
                        </div>
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 77), "second", [], "any", false, false, false, 77), 'widget');
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 78), "second", [], "any", false, false, false, 78), 'errors');
        echo "
                    </div>
                    ";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "google_recaptcha_enabled"], "method", false, false, false, 80) == "yes")) {
            // line 81
            echo "                        <div class=\"form-group\">
                            ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recaptcha", [], "any", false, false, false, 82), 'widget');
            echo "
                            ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recaptcha", [], "any", false, false, false, 83), 'errors');
            echo "
                        </div>
                    ";
        }
        // line 86
        echo "                    <div class=\"mb-3 text-sm text-center\">
                        ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_terms_of_service_page"], "method", false, false, false, 87) == "yes")) {
            // line 88
            echo "                            <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By clicking the Sign Up button, I agree to", [], "messages"), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "terms_of_service_page_slug"], "method", false, false, false, 89)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms of service", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 91
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "show_privacy_policy_page"], "method", false, false, false, 91) == "yes")) {
            // line 92
            echo "                            <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("and", [], "messages"), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", ["slug" => twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "privacy_policy_page_slug"], "method", false, false, false, 93)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privacy policy", [], "FOSUserBundle"), "html", null, true);
            echo "</a>
                        ";
        }
        // line 95
        echo "                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Account", [], "messages"), "html", null, true);
        echo "</button>
                    </div>
                    <p class=\"text-center\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Already have an account?", [], "messages"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in", [], "messages"), "html", null, true);
        echo "</a></p>
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 100), 'widget');
        echo "
                        ";
        // line 101
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
        return "@FOSUser/Registration/register-attendee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 101,  272 => 100,  264 => 99,  259 => 97,  255 => 95,  248 => 93,  243 => 92,  240 => 91,  233 => 89,  228 => 88,  226 => 87,  223 => 86,  217 => 83,  213 => 82,  210 => 81,  208 => 80,  203 => 78,  199 => 77,  190 => 71,  186 => 70,  177 => 64,  173 => 63,  164 => 57,  160 => 56,  151 => 50,  147 => 49,  138 => 43,  134 => 42,  125 => 36,  119 => 34,  113 => 31,  109 => 29,  101 => 27,  98 => 26,  90 => 24,  88 => 23,  85 => 22,  83 => 21,  77 => 18,  71 => 15,  65 => 12,  61 => 10,  57 => 9,  50 => 7,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Registration/register-attendee.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/FOSUserBundle/Registration/register-attendee.html.twig");
    }
}
