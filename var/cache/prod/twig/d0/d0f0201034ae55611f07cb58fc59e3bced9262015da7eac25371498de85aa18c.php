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

/* Dashboard/Shared/Venue/add-edit.html.twig */
class __TwigTemplate_4b7c5f4cbcd9b335d42cd9e3369252925939ae58da0f415d8c75877c1e523bf0 extends \Twig\Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "Global/jquery.collection.html.twig"], true);
        // line 5
        $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a new venue");
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "id", [], "any", false, false, false, 7)) {
            $context["pagetitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update the venue");
        }
        // line 1
        $this->parent = $this->loadTemplate("Global/layout.html.twig", "Dashboard/Shared/Venue/add-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMINISTRATOR")) {
            // line 14
            echo "        ";
            $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_administrator_venue" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage venues"), "current" => ($context["pagetitle"] ?? null)]];
            // line 15
            echo "    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ORGANIZER")) {
            // line 16
            echo "        ";
            $context["navigation"] = [0 => ["dashboard_index" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "dashboard_organizer_venue" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("my venues"), "current" => ($context["pagetitle"] ?? null)]];
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        $this->loadTemplate("Global/navigation.html.twig", "Dashboard/Shared/Venue/add-edit.html.twig", 18)->display(twig_array_merge($context, ($context["navigation"] ?? null)));
        // line 19
        echo "
    <section class=\"section-content padding-y bg-white\">
        <div class=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "getSetting", [0 => "app_layout"], "method", false, false, false, 21), "html", null, true);
        echo "\">
            <div class=\"row\">
                <aside class=\"col-lg-3 pt-3 pt-lg-0\">
                    ";
        // line 24
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/Shared/Venue/add-edit.html.twig", 24)->display($context);
        // line 25
        echo "                </aside>
                <div class=\"col-lg-9 mt-4 mt-lg-0\">
                    <div class=\"card box\">
                        <div class=\"card-body\">
                            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "translations", [], "any", false, false, false, 31), 'row');
        echo "
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, false, false, 32), 'row');
        echo "
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "amenities", [], "any", false, false, false, 33), 'row');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seatedguests", [], "any", false, false, false, 34), 'row');
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "standingguests", [], "any", false, false, false, 35), 'row');
        echo "
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "neighborhoods", [], "any", false, false, false, 36), 'row');
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pricing", [], "any", false, false, false, 37), 'row');
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "availibility", [], "any", false, false, false, 38), 'row');
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "foodbeverage", [], "any", false, false, false, 39), 'row');
        echo "
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quoteform", [], "any", false, false, false, 40), 'row');
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contactemail", [], "any", false, false, false, 41), 'row');
        echo "

                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street", [], "any", false, false, false, 45), 'row');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "street2", [], "any", false, false, false, 46), 'row');
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", false, false, false, 47), 'row');
        echo "
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postalcode", [], "any", false, false, false, 48), 'row');
        echo "
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", false, false, false, 49), 'row');
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 50), 'row');
        echo "
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "showmap", [], "any", false, false, false, 51), 'row');
        echo "
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"sticky-top sticky-sidebar pt-0\">
                                        <iframe width=\"100%\" height=\"300\" class=\"venue-map\" src=\"https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 60), 'row');
        echo "
                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 61), 'row');
        echo "
                            ";
        // line 62
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

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "
    ";
        // line 75
        if ((($context["google_maps_api_key"] ?? null) != "")) {
            // line 76
            echo "        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false&key=";
            echo twig_escape_filter($this->env, ($context["google_maps_api_key"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 78
        echo "    <script>

        \$(document).ready(function () {

            \$('.venue-map').hide();
            function getVenueAddress() {
                var address = '';
                if (\$('#venue_translations_en_name').val())
                    address = \$('#venue_translations_en_name').val();
                if (\$('#venue_street').val())
                    address = address + ' ' + \$('#venue_street').val();
                if (\$('#venue_street2').val())
                    address = address + ' ' + \$('#venue_street2').val();
                if (\$('#venue_city').val())
                    address = address + ' ' + \$('#venue_city').val();
                if (\$('#venue_postalcode').val())
                    address = address + ' ' + \$('#venue_postalcode').val();
                if (\$('#venue_state').val())
                    address = address + ' ' + \$('#venue_state').val();
                if (\$('#venue_country').val())
                    address = address + ' ' + \$('#venue_country option:selected').text();
                return address;
            }

            \$('#venue_street, #venue_street2, #venue_city, #venue_postalcode, #venue_state').blur(function () {
                if (getVenueAddress() != \"\") {
                    \$('.venue-map').attr('src', 'https://maps.google.com/maps?q=' + getVenueAddress() + '&t=&z=13&ie=UTF8&iwloc=&output=embed');
                    \$('.venue-map').show();
                }
            });
            \$('#venue_country').on(\"select2-blur\", function (e) {
                if (getVenueAddress() != \"\") {
                    \$('.venue-map').attr('src', 'https://maps.google.com/maps?q=' + getVenueAddress() + '&t=&z=13&ie=UTF8&iwloc=&output=embed');
                    \$('.venue-map').show();
                }
            });

        ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["venue"] ?? null), "id", [], "any", false, false, false, 115)) {
            // line 116
            echo "                \$('#venue_country').trigger('blur');
        ";
        }
        // line 118
        echo "
        ";
        // line 119
        if ((($context["google_maps_api_key"] ?? null) != "")) {
            // line 120
            echo "                \$('#venue_save').click(function (e) {
                    if (getVenueAddress() != \"\") {
                        e.preventDefault();
                        var geocoder = new google.maps.Geocoder();
                        geocoder.geocode({'address': getVenueAddress()}, function (results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                \$('#venue_lat').val(results[0].geometry.location.lat());
                                \$('#venue_lng').val(results[0].geometry.location.lng());
                            }
                            \$('form[name=\"venue\"]').submit();
                        });
                    }
                });
        ";
        }
        // line 134
        echo "
            });

    </script>


";
    }

    public function getTemplateName()
    {
        return "Dashboard/Shared/Venue/add-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 134,  284 => 120,  282 => 119,  279 => 118,  275 => 116,  273 => 115,  234 => 78,  228 => 76,  226 => 75,  223 => 74,  219 => 73,  205 => 62,  201 => 61,  197 => 60,  185 => 51,  181 => 50,  177 => 49,  173 => 48,  169 => 47,  165 => 46,  161 => 45,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  100 => 25,  98 => 24,  92 => 21,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  64 => 11,  57 => 9,  52 => 1,  48 => 7,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Dashboard/Shared/Venue/add-edit.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Dashboard/Shared/Venue/add-edit.html.twig");
    }
}
