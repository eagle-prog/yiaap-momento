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

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_ab45f013a4b89262e25b7a47988d5b816e8ff8377b3a547853522d0e6aa95c91 extends \Twig\Template
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
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in", [], "messages");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
                <div class=\"col-12 col-lg-4 offset-lg-4\">
                    <div class=\"col-12 mb-5\">
                        <h1 class=\"card-title text-center\">";
        // line 16
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo "</h1>
                    </div>
                    ";
        // line 18
        if (((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_facebook_enabled"], "method", false, false, false, 18) == "yes") || (twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_google_enabled"], "method", false, false, false, 18) == "yes"))) {
            // line 19
            echo "                        <p>
                            ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_facebook_enabled"], "method", false, false, false, 20) == "yes")) {
                // line 21
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "facebook"]);
                echo "\" class=\"btn btn-block btn-facebook\"> <i class=\"fab fa-facebook-f\"></i> &nbsp; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in via Facebook", [], "messages"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 23
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "social_login_google_enabled"], "method", false, false, false, 23) == "yes")) {
                // line 24
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_service_redirect", ["service" => "google"]);
                echo "\" class=\"btn btn-block btn-google-plus\"> <i class=\"fab fa-google\"></i> &nbsp; ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign in via Google", [], "messages"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 26
            echo "                        </p>
                        <p class=\"divider-text\">
                            <span>";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OR", [], "messages"), "html", null, true);
            echo "</span>
                        </p>
                    ";
        }
        // line 31
        echo "                    ";
        if (($context["error"] ?? null)) {
            // line 32
            echo "                        ";
            $this->loadTemplate("Global/message.html.twig", "@FOSUser/Security/login.html.twig", 32)->display(twig_array_merge($context, ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 32), "security"), "type" => "danger", "icon" => "fas fa-exclamation-circle"]));
            // line 33
            echo "                    ";
        }
        // line 34
        echo "                    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 35
        if (($context["csrf_token"] ?? null)) {
            // line 36
            echo "                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
                        ";
        }
        // line 38
        echo "
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text border-0\"> <i class=\"fa fa-user\"></i> </span>
                                </div>
                                <input name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "\" type=\"text\" autocomplete=\"username\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"input-group-text border-0\"> <i class=\"fa fa-lock\"></i> </span>
                                </div>
                                <input name=\"_password\" class=\"form-control\" placeholder=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\" type=\"password\" autocomplete=\"current-password\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"custom-control custom-checkbox\">
                                <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                <label class=\"custom-control-label\" for=\"remember_me\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                            </div>
                        </div>

                        ";
        // line 63
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "get", [0 => "_target_path"], "method", false, false, false, 63))) {
            // line 64
            echo "                            <input type=\"hidden\" name=\"_target_path\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "get", [0 => "_target_path"], "method", false, false, false, 64), "html", null, true);
            echo "\" />
                        ";
        }
        // line 66
        echo "
                        <div class=\"form-group\">
                            <button type=\"submit\" name=\"_submit\" class=\"btn btn-primary btn-block\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo "</button>
                        </div>
                        <p class=\"text-center\"><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot your password ?", [], "messages"), "html", null, true);
        echo "</a></p>
                        <p class=\"text-center\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not a member yet ?", [], "messages"), "html", null, true);
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register_attendee");
        echo "\" class=\"text-primary _600\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign up", [], "messages"), "html", null, true);
        echo "</a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 71,  190 => 70,  185 => 68,  181 => 66,  175 => 64,  173 => 63,  166 => 59,  157 => 53,  143 => 44,  135 => 38,  129 => 36,  127 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  107 => 28,  103 => 26,  95 => 24,  92 => 23,  84 => 21,  82 => 20,  79 => 19,  77 => 18,  72 => 16,  65 => 12,  61 => 10,  57 => 9,  50 => 7,  45 => 1,  43 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/bundles/FOSUserBundle/Security/login.html.twig");
    }
}
