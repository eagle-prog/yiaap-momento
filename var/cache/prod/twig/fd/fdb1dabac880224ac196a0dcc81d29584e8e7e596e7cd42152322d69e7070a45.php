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

/* @EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig */
class __TwigTemplate_70b1e26bf1392121229bacf4bd25d538c8a055cf8314772f4e86e26a63af6708 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ewz_recaptcha_widget' => [$this, 'block_ewz_recaptcha_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('ewz_recaptcha_widget', $context, $blocks);
        // line 84
        echo "
";
    }

    // line 1
    public function block_ewz_recaptcha_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        ob_start(function () { return ''; });
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "ewz_recaptcha_enabled", [], "any", false, false, false, 3)) {
            // line 4
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "ewz_recaptcha_ajax", [], "any", false, false, false, 4)) {
                // line 5
                echo "            ";
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 5), "size", [], "any", false, false, false, 5) == "invisible") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 5), "callback", [], "any", true, true, false, 5))) {
                    // line 6
                    echo "                ";
                    $context["options"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 6), ["callback" => "onReCaptchaSuccess"]);
                    // line 7
                    echo "                ";
                    $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["options" => ($context["options"] ?? null)]);
                    // line 8
                    echo "
                <script type=\"text/javascript\">
                    var onReCaptchaSuccess = function() {
                        var errorDivs = document.getElementsByClassName('recaptcha-error');
                        if (errorDivs.length) {
                            errorDivs[0].className = '';
                        }

                        var errorMsgs = document.getElementsByClassName('recaptcha-error-message');
                        if (errorMsgs.length) {
                            errorMsgs[0].parentNode.removeChild(errorMsgs[0]);
                        }

                        var forms = document.getElementsByClassName('recaptcha-form');
                        if (forms.length) {
                          var recaptchaSubmitEvent = document.createEvent('Event');
                          recaptchaSubmitEvent.initEvent('submit', true, true);
                          forms[0].addEventListener('submit', function (e) {
                            e.target.submit();
                          }, false);
                          forms[0].dispatchEvent(recaptchaSubmitEvent);
                        }
                    };
                </script>
            ";
                }
                // line 33
                echo "
            <script type=\"text/javascript\" src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "url_challenge", [], "any", false, false, false, 34), "html", null, true);
                echo "\"";
                // line 35
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 35), "defer", [], "any", true, true, false, 35) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 35), "defer", [], "any", false, false, false, 35))) {
                    echo " defer";
                }
                // line 36
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 36), "async", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 36), "async", [], "any", false, false, false, 36))) {
                    echo " async";
                }
                // line 37
                echo "></script>
            <div class=\"g-recaptcha\" data-theme=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 38), "theme", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-type=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 38), "type", [], "any", false, false, false, 38), "html", null, true);
                echo "\" data-sitekey=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 38), "public_key", [], "any", false, false, false, 38), "html", null, true);
                echo "\"";
                // line 39
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 39), "callback", [], "any", true, true, false, 39)) {
                    echo " data-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 39), "callback", [], "any", false, false, false, 39), "html", null, true);
                    echo "\"";
                }
                // line 40
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 40), "expiredCallback", [], "any", true, true, false, 40)) {
                    echo " data-expired-callback=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 40), "expiredCallback", [], "any", false, false, false, 40), "html", null, true);
                    echo "\"";
                }
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 41), "bind", [], "any", true, true, false, 41)) {
                    echo " data-bind=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 41), "bind", [], "any", false, false, false, 41), "html", null, true);
                    echo "\"";
                }
                // line 42
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 42), "badge", [], "any", true, true, false, 42)) {
                    echo " data-badge=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 42), "badge", [], "any", false, false, false, 42), "html", null, true);
                    echo "\"";
                }
                // line 43
                echo "></div>
            <noscript>
                <div style=\"width: 302px; height: 352px;\">
                    <div style=\"width: 302px; height: 352px; position: relative;\">
                        <div style=\"width: 302px; height: 352px; position: absolute;\">
                            <iframe src=\"https://";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 48), "ewz_recaptcha_apihost", [], "any", false, false, false, 48), "html", null, true);
                echo "/recaptcha/api/fallback?k=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 48), "public_key", [], "any", false, false, false, 48), "html", null, true);
                echo "\"
                                    frameborder=\"0\" scrolling=\"no\"
                                    style=\"width: 302px; height:352px; border-style: none;\"
                            >
                            </iframe>
                        </div>
                        <div style=\"width: 250px; height: 80px; position: absolute; border-style: none; bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;\">
                            <textarea id=\"g-recaptcha-response\" name=\"g-recaptcha-response\"
                                      class=\"g-recaptcha-response\"
                                      style=\"width: 250px; height: 80px; border: 1px solid #c1c1c1; margin: 0; padding: 0; resize: none;\"
                            >
                            </textarea>
                        </div>
                    </div>
                </div>
            </noscript>
        ";
            } else {
                // line 65
                echo "            <div id=\"ewz_recaptcha_div\"></div>

            <script type=\"text/javascript\">
            (function() {
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onload = function() {
                    Recaptcha.create('";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 72), "public_key", [], "any", false, false, false, 72), "html", null, true);
                echo "', 'ewz_recaptcha_div', ";
                echo json_encode(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 72), [])) : ([])));
                echo ");
                };
                script.src = '";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 74), "url_api", [], "any", false, false, false, 74), "html", null, true);
                echo "';
                ";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 75), "defer", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 75), "defer", [], "any", false, false, false, 75))) {
                    echo "script.defer = true;";
                }
                // line 76
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, true, false, 76), "async", [], "any", true, true, false, 76) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "options", [], "any", false, false, false, 76), "async", [], "any", false, false, false, 76))) {
                    echo "script.async = true;";
                }
                // line 77
                echo "                document.getElementsByTagName('head')[0].appendChild(script);
            })();
            </script>
        ";
            }
            // line 81
            echo "    ";
        }
        $___internal_0ad662d04fe72c2a156a73bc46c5593524db58a6827f20e0a5e20a40e183a214_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_0ad662d04fe72c2a156a73bc46c5593524db58a6827f20e0a5e20a40e183a214_);
    }

    public function getTemplateName()
    {
        return "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 2,  207 => 81,  201 => 77,  196 => 76,  192 => 75,  188 => 74,  181 => 72,  172 => 65,  150 => 48,  143 => 43,  137 => 42,  131 => 41,  125 => 40,  119 => 39,  110 => 38,  107 => 37,  103 => 36,  99 => 35,  96 => 34,  93 => 33,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  49 => 2,  45 => 1,  40 => 84,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@EWZRecaptcha/Form/ewz_recaptcha_widget.html.twig", "/home/yiaapc5/momento.yiaap.com/vendor/excelwebzone/recaptcha-bundle/src/Resources/views/Form/ewz_recaptcha_widget.html.twig");
    }
}
