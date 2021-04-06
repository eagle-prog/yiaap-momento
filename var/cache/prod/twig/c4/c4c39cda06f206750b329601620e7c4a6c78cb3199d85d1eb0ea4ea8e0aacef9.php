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

/* Dashboard/Administrator/Settings/layout.html.twig */
class __TwigTemplate_3f02726ee5951b793a2aa01c2036238bc704cbdad3843a12b1d01f8af5636530 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        // line 3
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Layout settings");
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Administrator/Settings/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "current" => ($context["pagetitle"] ?? null)]];
        // line 10
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Administrator/Settings/layout.html.twig", 10)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 11
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 13), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 16
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Administrator/Settings/layout.html.twig", 16)->display($context);
        // line 17
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_environment", [], "any", false, false, false, 22), 'row');
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_debug", [], "any", false, false, false, 23), 'row');
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_secret", [], "any", false, false, false, 24), 'row');
        echo "
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "maintenance_mode", [], "any", false, false, false, 25), 'row');
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "maintenance_mode_custom_message", [], "any", false, false, false, 26), 'row');
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format", [], "any", false, false, false, 27), 'row');
        echo "
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_simple", [], "any", false, false, false, 28), 'row');
        echo "
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_date_only", [], "any", false, false, false, 29), 'row');
        echo "
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_timezone", [], "any", false, false, false, 30), 'row');
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default_locale", [], "any", false, false, false, 31), 'row');
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_locales", [], "any", false, false, false, 32), 'row');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_name", [], "any", false, false, false, 33), 'row');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_slug", [], "any", false, false, false, 34), 'row');
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_url", [], "any", false, false, false, 35), 'row');
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_root_url", [], "any", false, false, false, 36), 'row');
        echo "

                            <ul class=\"nav nav-pills mb-3\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#website_description_en\">Website description</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_description_fr\">Description du site</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_description_es\">Descripción del lugar</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_description_ar\">وصف الموقع</a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 53), "html", null, true);
        echo " active\" id=\"website_description_en\">
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_description_en", [], "any", false, false, false, 54), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 56), "html", null, true);
        echo " fade\" id=\"website_description_fr\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_description_fr", [], "any", false, false, false, 57), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 59), "html", null, true);
        echo " fade\" id=\"website_description_es\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_description_es", [], "any", false, false, false, 60), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 62), "html", null, true);
        echo " fade\" id=\"website_description_ar\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_description_ar", [], "any", false, false, false, 63), 'row');
        echo "
                                </div>
                            </div>

                            <ul class=\"nav nav-pills mb-3\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#website_keywords_en\">Website keywords</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_keywords_fr\">Mots clés du site</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_keywords_es\">Palabras clave del sitio</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" data-toggle=\"tab\" href=\"#website_keywords_ar\">الكلمات الرئيسية للموقع</a>
                                </li>
                            </ul>
                            <div class=\"tab-content\">
                                <div class=\"tab-pane ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 82), "html", null, true);
        echo " active\" id=\"website_keywords_en\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_keywords_en", [], "any", false, false, false, 83), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 85), "html", null, true);
        echo " fade\" id=\"website_keywords_fr\">
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_keywords_fr", [], "any", false, false, false, 86), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 88), "html", null, true);
        echo " fade\" id=\"website_keywords_es\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_keywords_es", [], "any", false, false, false, 89), 'row');
        echo "
                                </div>
                                <div class=\"tab-pane ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 91), "html", null, true);
        echo " fade\" id=\"website_keywords_ar\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website_keywords_ar", [], "any", false, false, false, 92), 'row');
        echo "
                                </div>
                            </div>

                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact_email", [], "any", false, false, false, 96), 'row');
        echo "
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact_phone", [], "any", false, false, false, 97), 'row');
        echo "
                            ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact_fax", [], "any", false, false, false, 98), 'row');
        echo "
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact_address", [], "any", false, false, false, 99), 'row');
        echo "
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "facebook_url", [], "any", false, false, false, 100), 'row');
        echo "
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "instagram_url", [], "any", false, false, false, 101), 'row');
        echo "
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "youtube_url", [], "any", false, false, false, 102), 'row');
        echo "
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "twitter_url", [], "any", false, false, false, 103), 'row');
        echo "
                            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_layout", [], "any", false, false, false, 104), 'row');
        echo "
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "app_theme", [], "any", false, false, false, 105), 'row');
        echo "
                            <div class=\"form-group\">
                                <div id=\"appThemeColorPreview\" class=\"shadow img-sm\"></div>
                            </div>
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "primary_color", [], "any", false, false, false, 109), 'row');
        echo "
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "no_reply_email", [], "any", false, false, false, 110), 'row');
        echo "
                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "logoFile", [], "any", false, false, false, 111), 'row');
        echo "
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "faviconFile", [], "any", false, false, false, 112), 'row');
        echo "
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ogImageFile", [], "any", false, false, false, 113), 'row');
        echo "
                            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_back_to_top_button", [], "any", false, false, false, 114), 'row');
        echo "
                            ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_terms_of_service_page", [], "any", false, false, false, 115), 'row');
        echo "
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "terms_of_service_page_slug", [], "any", false, false, false, 116), 'row');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_privacy_policy_page", [], "any", false, false, false, 117), 'row');
        echo "
                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "privacy_policy_page_slug", [], "any", false, false, false, 118), 'row');
        echo "
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_cookie_policy_page", [], "any", false, false, false, 119), 'row');
        echo "
                            ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cookie_policy_page_slug", [], "any", false, false, false, 120), 'row');
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_cookie_policy_bar", [], "any", false, false, false, 121), 'row');
        echo "
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "show_gdpr_compliance_page", [], "any", false, false, false, 122), 'row');
        echo "
                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "gdpr_compliance_page_slug", [], "any", false, false, false, 123), 'row');
        echo "
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "custom_css", [], "any", false, false, false, 124), 'row');
        echo "
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "google_analytics_code", [], "any", false, false, false, 125), 'row');
        echo "
                            ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

";
    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "
    <script>
        \$(document).ready(function () {
            \$('input[name=\"app_layout_settings[app_theme]\"]').change(function () {
                if (\$(this).is(':checked')) {
                    switch (\$(this).val()) {
                        case 'orange':
                            \$('#app_layout_settings_primary_color').val('#f67611');
                            \$('#appThemeColorPreview').css('background-color', '#f67611');
                            break;
                        case 'lightblue':
                            \$('#app_layout_settings_primary_color').val('#90ccf4');
                            \$('#appThemeColorPreview').css('background-color', '#90ccf4');
                            break;
                        case 'darkblue':
                            \$('#app_layout_settings_primary_color').val('#3500d3');
                            \$('#appThemeColorPreview').css('background-color', '#3500d3');
                            break;
                        case 'yellow':
                            \$('#app_layout_settings_primary_color').val('#ffbd54');
                            \$('#appThemeColorPreview').css('background-color', '#ffbd54');
                            break;
                        case 'purple':
                            \$('#app_layout_settings_primary_color').val('#44318d');
                            \$('#appThemeColorPreview').css('background-color', '#44318d');
                            break;
                        case 'pink':
                            \$('#app_layout_settings_primary_color').val('#d83f87');
                            \$('#appThemeColorPreview').css('background-color', '#d83f87');
                            break;
                        case 'red':
                            \$('#app_layout_settings_primary_color').val('#c3073f');
                            \$('#appThemeColorPreview').css('background-color', '#c3073f');
                            break;
                        case 'green':
                            \$('#app_layout_settings_primary_color').val('#35CE8D');
                            \$('#appThemeColorPreview').css('background-color', '#35CE8D');
                            break;
                        case 'dark':
                            \$('#app_layout_settings_primary_color').val('#1a1a1d');
                            \$('#appThemeColorPreview').css('background-color', '#1a1a1d');
                            break;
                        default:
                    }
                }
            });
            \$('input[name=\"app_layout_settings[app_theme]\"]').trigger('change');
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "Dashboard/Administrator/Settings/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 138,  384 => 137,  370 => 126,  366 => 125,  362 => 124,  358 => 123,  354 => 122,  350 => 121,  346 => 120,  342 => 119,  338 => 118,  334 => 117,  330 => 116,  326 => 115,  322 => 114,  318 => 113,  314 => 112,  310 => 111,  306 => 110,  302 => 109,  295 => 105,  291 => 104,  287 => 103,  283 => 102,  279 => 101,  275 => 100,  271 => 99,  267 => 98,  263 => 97,  259 => 96,  252 => 92,  248 => 91,  243 => 89,  239 => 88,  234 => 86,  230 => 85,  225 => 83,  221 => 82,  199 => 63,  195 => 62,  190 => 60,  186 => 59,  181 => 57,  177 => 56,  172 => 54,  168 => 53,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  116 => 28,  112 => 27,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  82 => 17,  80 => 16,  74 => 13,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Administrator/Settings/layout.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Administrator/Settings/layout.html.twig");
    }
}
