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

/* @FMElfinder/Elfinder/elfinder_type.html.twig */
class __TwigTemplate_c73051b274e4f0d51bd6b0b5c64d4d29 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/elfinder_type.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/elfinder_type.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=2\">
    <script data-main=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_main_js");
        echo "\" src=\"//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js\"></script>
    <script>
        define('elFinderConfig', {
            // elFinder options (REQUIRED)
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            defaultOpts : {
                url : '";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 14, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "',
                lang : '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
                onlyMimes: ";
        // line 16
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new RuntimeError('Variable "onlyMimes" does not exist.', 16, $this->source); })());
        echo ",
                getFileCallback: function(file) {
                    ";
        // line 18
        if ((isset($context["relative_path"]) || array_key_exists("relative_path", $context) ? $context["relative_path"] : (function () { throw new RuntimeError('Variable "relative_path" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                        window.opener.setValue('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) || array_key_exists("pathPrefix", $context) ? $context["pathPrefix"] : (function () { throw new RuntimeError('Variable "pathPrefix" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "schemeAndHttpHost", [], "any", false, false, false, 19), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\");
                    ";
        } else {
            // line 21
            echo "                        window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\");
                    ";
        }
        // line 23
        echo "                    window.close();
                },
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            // set API key to enable Creative Cloud image editor
                            // see https://console.adobe.io/
                            creativeCloudApiKey : '',
                            // browsing manager URL for CKEditor, TinyMCE
                            // uses self location with the empty value
                            managerUrl : ''
                        }
                    },
                    quicklook : {
                        // to enable CAD-Files and 3D-Models preview with sharecad.org
                        sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
                        // to enable preview with Google Docs Viewer
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
                        // to enable preview with Microsoft Office Online Viewer
                        // these MIME types override \"googleDocsMimes\"
                        officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
                    }
                },
                // bootCallback calls before elFinder boots up
                bootCallback : function(fm, extraObj) {
                    /* any bind functions etc. */
                    fm.bind('init', function() {
                        // any of your code
                    });
                    // for example set document.title dynamically.
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                        document.title = path? path + ':' + title : title;
                    }).bind('destroy', function() {
                        document.title = title;
                    });
                }
            },
            managers : {
                // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
                'elfinder': {}
            }
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id=\"elfinder\"></div>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  86 => 21,  76 => 19,  74 => 18,  69 => 16,  65 => 15,  61 => 14,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=2\">
    <script data-main=\"{{path('ef_main_js')}}\" src=\"//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js\"></script>
    <script>
        define('elFinderConfig', {
            // elFinder options (REQUIRED)
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            defaultOpts : {
                url : '{{path('ef_connect', { 'instance': instance, 'homeFolder': homeFolder } )}}',
                lang : '{{locale}}',
                onlyMimes: {{ onlyMimes|raw }},
                getFileCallback: function(file) {
                    {% if relative_path %}
                        window.opener.setValue('{{ pathPrefix }}'+file.url.replace(\"{{ app.request.schemeAndHttpHost }}/\", \"\"), \"{{ id }}\");
                    {% else %}
                        window.opener.setValue(file.url, \"{{ id }}\");
                    {% endif %}
                    window.close();
                },
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            // set API key to enable Creative Cloud image editor
                            // see https://console.adobe.io/
                            creativeCloudApiKey : '',
                            // browsing manager URL for CKEditor, TinyMCE
                            // uses self location with the empty value
                            managerUrl : ''
                        }
                    },
                    quicklook : {
                        // to enable CAD-Files and 3D-Models preview with sharecad.org
                        sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
                        // to enable preview with Google Docs Viewer
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
                        // to enable preview with Microsoft Office Online Viewer
                        // these MIME types override \"googleDocsMimes\"
                        officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
                    }
                },
                // bootCallback calls before elFinder boots up
                bootCallback : function(fm, extraObj) {
                    /* any bind functions etc. */
                    fm.bind('init', function() {
                        // any of your code
                    });
                    // for example set document.title dynamically.
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                        document.title = path? path + ':' + title : title;
                    }).bind('destroy', function() {
                        document.title = title;
                    });
                }
            },
            managers : {
                // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
                'elfinder': {}
            }
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id=\"elfinder\"></div>

</body>
</html>
", "@FMElfinder/Elfinder/elfinder_type.html.twig", "V:\\PROJECT\\kulmapeck\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\elfinder_type.html.twig");
    }
}
