<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/setup/general/glpinetwork_setup.html.twig */
class __TwigTemplate_d71a7e491664e379280c4d1998873a25 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'config_fields' => [$this, 'block_config_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "pages/setup/general/base_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 33
        $this->parent = $this->load("pages/setup/general/base_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_config_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 37, $this->getSourceContext())->macro_largeTitle(...[__("Registration")]);
        yield "

    ";
        // line 39
        if (Twig\Extension\CoreExtension::testEmpty(($context["registration_key"] ?? null))) {
            // line 40
            yield "        <div class=\"alert alert-info\">
            <div class=\"alert-title\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("A registration key is needed to use some advanced features (like the plugin marketplace) in GLPI"), "html", null, true);
            yield "</div>
            <span class=\"text-secondary\">
                <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("GLPI_NETWORK_SERVICES"), "html", null, true);
            yield "\">
                    ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Register on %1\$s!"), __("GLPI Network")), "html", null, true);
            yield "
                </a>
                <br>
                ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("And retrieve your key to paste it below"), "html", null, true);
            yield "
            </span>
        </div>
    ";
        }
        // line 51
        yield "
    ";
        // line 52
        if ((($tmp =  !($context["services_available"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "        <div class=\"alert alert-warning\">
            <div class=\"alert-title\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("%1\$s services website seems to be unavailable from your network or offline!"), __("GLPI Network")), "html", null, true);
            yield "</div>
            <span class=\"text-secondary\">
                ";
            // line 56
            if ((($tmp =  !(null === ($context["curl_error"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("Error was: %s"), ($context["curl_error"] ?? null)), "html", null, true);
                yield "
                ";
            }
            // line 59
            yield "            </span>
        </div>
    ";
        }
        // line 62
        yield "
    ";
        // line 63
        yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 63, $this->getSourceContext())->macro_passwordField(...["glpinetwork_registration_key",         // line 65
($context["registration_key"] ?? null), __("Registration key"), ["full_width" => true, "is_disclosable" => true]]);
        // line 71
        yield "

    ";
        // line 73
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["registration_key"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 74
            yield "        ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v0 = ($context["informations"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["validation_message"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 75
                yield "            ";
                $context["subscription_ok"] = ((($_v1 = ($context["informations"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["is_valid"] ?? null) : null) && (($_v2 = (($_v3 = ($context["informations"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["subscription"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["is_running"] ?? null) : null));
                // line 76
                yield "            ";
                $context["validation_message"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 77
                    yield "                <span class=\"";
                    yield (((($tmp = ($context["subscription_ok"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("text-success") : ("text-danger"));
                    yield "\">
                    <i class=\"ti ti-info-circle\"></i>
                    ";
                    // line 79
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["informations"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["validation_message"] ?? null) : null), "html", null, true);
                    yield "
                </span>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 82
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 82, $this->getSourceContext())->macro_htmlField(...["", ($context["validation_message"] ?? null), null, ["full_width" => true]]);
                // line 84
                yield "
        ";
            }
            // line 86
            yield "
        ";
            // line 87
            if ((($tmp = (($_v5 = ($context["informations"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["is_valid"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 88
                yield "            ";
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 88, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = (($_v7 = ($context["informations"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["subscription"] ?? null) : null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["title"] ?? null) : null)), __("Subscription"), ["full_width" => true]]);
                // line 90
                yield "

            ";
                // line 92
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 92, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(__("From %1\$s to %2\$s"), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v8 = (($_v9 = ($context["informations"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["subscription"] ?? null) : null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["begin_date"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDate((($_v10 = (($_v11 = ($context["informations"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["subscription"] ?? null) : null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["end_date"] ?? null) : null)))), __("Period"), ["full_width" => true]]);
                // line 94
                yield "

            ";
                // line 96
                yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 96, $this->getSourceContext())->macro_htmlField(...["", $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = (($_v13 = ($context["informations"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["owner"] ?? null) : null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["name"] ?? null) : null)), __("Registered by"), ["full_width" => true]]);
                // line 98
                yield "
        ";
            }
            // line 100
            yield "    ";
        }
        // line 101
        yield "
    ";
        // line 102
        yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 102, $this->getSourceContext())->macro_largeTitle(...[__("Marketplace")]);
        yield "

    ";
        // line 104
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 104, $this->getSourceContext())->macro_dropdownArrayField(...["marketplace_replace_plugins", Twig\Extension\CoreExtension::default($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("marketplace_replace_plugins"), 1), ["1" => __("Ask before replacing"), "2" => __("Replace plugins page with marketplace"), "3" => __("Never replace plugins page")], __("Plugin page replacement"), ["full_width" => true, "add_field_html" => (("<div class=\"form-text\">" . __("Choose whether to replace the classic plugins page with the new marketplace interface.")) . "</div>")]]);
        // line 117
        yield "

    ";
        // line 119
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 119, $this->getSourceContext())->macro_htmlField(...["", (((("<a href=\"" . $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/marketplace.php")) . "\" class=\"btn btn-primary\">") . __("Access GLPI Network Marketplace")) . "</a>"), null, ["full_width" => true]]);
        // line 121
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/general/glpinetwork_setup.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  204 => 121,  202 => 119,  198 => 117,  196 => 104,  191 => 102,  188 => 101,  185 => 100,  181 => 98,  179 => 96,  175 => 94,  173 => 92,  169 => 90,  166 => 88,  164 => 87,  161 => 86,  157 => 84,  154 => 82,  147 => 79,  141 => 77,  138 => 76,  135 => 75,  132 => 74,  130 => 73,  126 => 71,  124 => 65,  123 => 63,  120 => 62,  115 => 59,  109 => 57,  107 => 56,  102 => 54,  99 => 53,  97 => 52,  94 => 51,  87 => 47,  81 => 44,  77 => 43,  72 => 41,  69 => 40,  67 => 39,  61 => 37,  54 => 36,  49 => 33,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/general/glpinetwork_setup.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/setup/general/glpinetwork_setup.html.twig");
    }
}
