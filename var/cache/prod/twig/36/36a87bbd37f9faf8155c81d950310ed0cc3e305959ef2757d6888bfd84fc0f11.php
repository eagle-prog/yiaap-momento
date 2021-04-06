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

/* Installer/install.html.twig */
class __TwigTemplate_5750555246ca196d748e77c63e96c07027c68e1de5d26c7937edf92392fd67af extends \Twig\Template
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
        echo "<html lang=\"en\">
    <head>
        <!--[if IE]>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <![endif]-->
        <meta charset=\"utf-8\">
        <meta name=\"robots\" content=\"noindex,nofollow\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>Setup Wizard | Eventic</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/installer/favicon.png"), "html", null, true);
        echo "\">

        ";
        // line 12
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        ";
        // line 13
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app.orange");
        echo "
        ";
        // line 14
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("installer");
        echo "

    </head>
    <body>

        <div class=\"container h-100 mt-5 mb-5\">
            <div class=\"row h-100 justify-content-center align-items-center\">
                <div class=\"col-12\">
                    <div class=\"mb-5 text-center\">
                        <p><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/installer/logo.png"), "html", null, true);
        echo "\" /></p>
                    </div>
                    <div id=\"steps\">
                        <div class=\"step-app\">
                            <ul class=\"step-steps\">
                                <li><a href=\"#step0\"><strong><i class=\"fas fa-tasks\"></i> Setup Wizard</strong></a></li>
                                <li><a href=\"#step1\"><strong><i class=\"fas fa-server\"></i> Server</strong></a></li>
                                <li><a href=\"#step2\"><strong><i class=\"fas fa-folder-open\"></i> Writable Directories</strong></a></a></li>
                                <li><a href=\"#step3\"><strong><i class=\"fas fa-database\"></i> Database</strong></a></a></li>
                                <li><a href=\"#step4\"><strong><i class=\"fas fa-save\"></i> Done</strong></a></a></li>
                            </ul>
                            <div class=\"step-content card\">
                                <div class=\"step-tab-panel\" id=\"step0\">
                                    <p>Welcome to Eventic, the ultimate Ticket Sales & Event Management platform.</p>
                                    <p>This wizard will help you to set up Eventic.</p>
                                    <p>Click <i>Next</i> to begin the setup process.</p>
                                </div>
                                <div class=\"step-tab-panel\" id=\"step1\" data-test-passed=\"";
        // line 40
        echo ((($context["requirementsOk"] ?? null)) ? ("1") : ("0"));
        echo "\" >
                                    <p>The following extensions are required to run the platform.</p>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Minimum Php version: 7.1.3</span>
                                            <i class=\"float-right far fa-";
        // line 45
        echo ((($context["phpOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Ctype</span>
                                            <i class=\"float-right far fa-";
        // line 49
        echo ((($context["ctypeOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">iconv</span>
                                            <i class=\"float-right far fa-";
        // line 53
        echo ((($context["iconvOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">JSON</span>
                                            <i class=\"float-right far fa-";
        // line 57
        echo ((($context["jsonOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">PCRE</span>
                                            <i class=\"float-right far fa-";
        // line 61
        echo ((($context["pcreOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Session</span>
                                            <i class=\"float-right far fa-";
        // line 65
        echo ((($context["sessionOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">SimpleXML</span>
                                            <i class=\"float-right far fa-";
        // line 69
        echo ((($context["SimpleXMLOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Tokenizer</span>
                                            <i class=\"float-right far fa-";
        // line 73
        echo ((($context["tokenizerOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">intl</span>
                                            <i class=\"float-right far fa-";
        // line 77
        echo ((($context["intlOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">OpenSSL</span>
                                            <i class=\"float-right far fa-";
        // line 81
        echo ((($context["opensslOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">DOM</span>
                                            <i class=\"float-right far fa-";
        // line 85
        echo ((($context["domOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">mbstring</span>
                                            <i class=\"float-right far fa-";
        // line 89
        echo ((($context["mbstringOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">curl</span>
                                            <i class=\"float-right far fa-";
        // line 93
        echo ((($context["curlOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">fileinfo</span>
                                            <i class=\"float-right far fa-";
        // line 97
        echo ((($context["fileinfoOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">gd</span>
                                            <i class=\"float-right far fa-";
        // line 101
        echo ((($context["gdOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">libXML</span>
                                            <i class=\"float-right far fa-";
        // line 105
        echo ((($context["libxmlOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">XML</span>
                                            <i class=\"float-right far fa-";
        // line 109
        echo ((($context["xmlOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">XMLReader</span>
                                            <i class=\"float-right far fa-";
        // line 113
        echo ((($context["xmlreaderOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">XMLWriter</span>
                                            <i class=\"float-right far fa-";
        // line 117
        echo ((($context["xmlwriterOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Zip</span>
                                            <i class=\"float-right far fa-";
        // line 121
        echo ((($context["zipOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">ZLib</span>
                                            <i class=\"float-right far fa-";
        // line 125
        echo ((($context["zlibOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"step-tab-panel\" id=\"step2\" data-test-passed=\"";
        // line 129
        echo ((($context["folderPermissions"] ?? null)) ? ("1") : ("0"));
        echo "\">
                                    <p>The following directories and files must be writable (775 permission).</p>
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/var/cache/</span>
                                            <i class=\"float-right far fa-";
        // line 134
        echo ((($context["cacheFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/var/log/</span>
                                            <i class=\"float-right far fa-";
        // line 138
        echo ((($context["logFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/public/media/</span>
                                            <i class=\"float-right far fa-";
        // line 142
        echo ((($context["mediaFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/public/uploads/</span>
                                            <i class=\"float-right far fa-";
        // line 146
        echo ((($context["uploadsFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/sessions/</span>
                                            <i class=\"float-right far fa-";
        // line 150
        echo ((($context["sessionsFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">/assets/js/translations/</span>
                                            <i class=\"float-right far fa-";
        // line 154
        echo ((($context["jsTranslationsFolderWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">.env</span>
                                            <i class=\"float-right far fa-";
        // line 158
        echo ((($context["envWritable"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"step-tab-panel\" id=\"step3\" data-test-passed=\"0\">
                                    <div class=\"form-group\">
                                        <label for=\"type\">Type</label>
                                        <input type=\"text\" class=\"form-control\" id=\"type\" disabled value=\"mysql\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"host\">Host (with port if any)</label>
                                        <input type=\"text\" class=\"form-control\" id=\"host\" name=\"type\">
                                        <p class=\"text-danger mt-1 d-none\"><i class=\"fas fa-exclamation-circle\"></i> Please enter the database host</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"username\">Username</label>
                                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\">
                                        <p class=\"text-danger mt-1 d-none\"><i class=\"fas fa-exclamation-circle\"></i> Please enter the database username</p>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"name\">Database name</label>
                                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\">
                                        <p class=\"text-danger mt-1 d-none\"><i class=\"fas fa-exclamation-circle\"></i> Please enter the database name</p>
                                    </div>
                                    <button id=\"test-database-connection\" type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-exchange-alt\"></i> Test connection</button>
                                    <h6 id=\"testing-database-connection\" class=\"d-none\"><i class=\"fas fa-spinner fa-spin\"></i> Testing database connection...</h6>
                                    <h6 id=\"database-connection-error\" class=\"text-danger mt-3 d-none\"></h6>
                                    <h6 id=\"database-connection-success\" class=\"text-success mt-3 d-none\"><i class=\"far fa-check-circle\"></i> Connection successful</h6>
                                </div>

                                <div class=\"step-tab-panel\" id=\"step4\">
                                    <ul class=\"list-group\">
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Server Configuration</span>
                                            <i class=\"float-right far fa-";
        // line 196
        echo ((($context["requirementsOk"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Writable Directories</span>
                                            <i class=\"float-right far fa-";
        // line 200
        echo ((($context["folderPermissions"] ?? null)) ? ("check-circle text-success") : ("times-circle text-danger"));
        echo " fa-lg\"></i>
                                        </li>
                                        <li class=\"list-group-item\">
                                            <span class=\"float-left\">Database Connection</span>
                                            <i class=\"float-right far fa-check-circle text-success fa-lg\"></i>
                                        </li>
                                    </ul>
                                    <br>
                                    <p>Once the installation process is over, your platform homepage will be displayed. You can log in the administrator dashboard by using the default credentials:</p>
                                    <ul>
                                        <li>Login: <strong>administrator</strong></li>
                                        <li>Password: <strong>azer1234</strong></li>
                                    </ul>
                                    <p>Make sure to secure your administrator account by changing the default password</p>
                                </div>
                            </div>
                            <div class=\"step-footer\">
                                <button data-direction=\"prev\" class=\"btn btn-primary\"><i class=\"fas fa-chevron-left\"></i> Previous</button>
                                <button id=\"next-step\" data-direction=\"next\" class=\"btn btn-primary\">Next <i class=\"fas fa-chevron-right\"></i></button>
                                <button id=\"finish-step\" data-save-configuration-path=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("installer_save_conviguration");
        echo "\" data-test-database-connection-path=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("installer_test_database_connection");
        echo "\" data-direction=\"finish\" class=\"btn btn-primary\"><i class=\"fas fa-check\"></i> Save and Finish</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script id=\"top-search-result-template\" type=\"text/x-handlebars-template\">
            ";
        // line 229
        $this->loadTemplate("Global/event-preview-horizontal.html.twig", "Installer/install.html.twig", 229)->display(twig_array_merge($context, ["handlebarstemplate" => true]));
        // line 230
        echo "        </script>

        ";
        // line 232
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        ";
        // line 233
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("installer");
        echo "

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "Installer/install.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 233,  389 => 232,  385 => 230,  383 => 229,  368 => 219,  346 => 200,  339 => 196,  298 => 158,  291 => 154,  284 => 150,  277 => 146,  270 => 142,  263 => 138,  256 => 134,  248 => 129,  241 => 125,  234 => 121,  227 => 117,  220 => 113,  213 => 109,  206 => 105,  199 => 101,  192 => 97,  185 => 93,  178 => 89,  171 => 85,  164 => 81,  157 => 77,  150 => 73,  143 => 69,  136 => 65,  129 => 61,  122 => 57,  115 => 53,  108 => 49,  101 => 45,  93 => 40,  73 => 23,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Installer/install.html.twig", "/home/yiaapc5/momento.yiaap.com/templates/Installer/install.html.twig");
    }
}
