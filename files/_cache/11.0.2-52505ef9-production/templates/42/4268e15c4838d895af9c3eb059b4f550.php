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

/* pages/assets/operatingsystem.html.twig */
class __TwigTemplate_cf336a00c6f6dee2e14994612b238b8f extends Template
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
            'more_fields' => [$this, 'block_more_fields'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 33
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 34)->unwrap();
        // line 35
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 36
        $context["no_header"] = true;
        // line 37
        $context["no_inventory_footer"] = true;
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "    <input type=\"hidden\" name=\"itemtype\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["itemtype"] ?? null) : null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["items_id"] ?? null) : null), "html", null, true);
        yield "\">

    ";
        // line 43
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 43, $this->getSourceContext())->macro_dropdownField(...["OperatingSystem", "operatingsystems_id", (($_v2 = CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["item"] ?? null), "fields", [], "any", false, false, false, 46)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["operatingsystems_id"] ?? null) : null), __("Name"),         // line 48
($context["field_options"] ?? null)]);
        // line 49
        yield "

    ";
        // line 51
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 51, $this->getSourceContext())->macro_dropdownField(...["OperatingSystemVersion", "operatingsystemversions_id", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["operatingsystemversions_id"] ?? null) : null), _n("Version", "Versions", 1),         // line 56
($context["field_options"] ?? null)]);
        // line 57
        yield "

    ";
        // line 59
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 59, $this->getSourceContext())->macro_dropdownField(...["OperatingSystemArchitecture", "operatingsystemarchitectures_id", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 62
($context["item"] ?? null), "fields", [], "any", false, false, false, 62)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["operatingsystemarchitectures_id"] ?? null) : null), _n("Architecture", "Architectures", 1),         // line 64
($context["field_options"] ?? null)]);
        // line 65
        yield "

    ";
        // line 67
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 67, $this->getSourceContext())->macro_dropdownField(...["OperatingSystemServicePack", "operatingsystemservicepacks_id", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["operatingsystemservicepacks_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("OperatingSystemServicePack"),         // line 72
($context["field_options"] ?? null)]);
        // line 73
        yield "

    ";
        // line 75
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 75, $this->getSourceContext())->macro_dropdownField(...["OperatingSystemKernelVersion", "operatingsystemkernelversions_id", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["operatingsystemkernelversions_id"] ?? null) : null), _n("Kernel", "Kernels", 1),         // line 80
($context["field_options"] ?? null)]);
        // line 81
        yield "

    ";
        // line 83
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 83, $this->getSourceContext())->macro_dropdownField(...["OperatingSystemEdition", "operatingsystemeditions_id", (($_v7 = CoreExtension::getAttribute($this->env, $this->source,         // line 86
($context["item"] ?? null), "fields", [], "any", false, false, false, 86)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["operatingsystemeditions_id"] ?? null) : null), _n("Edition", "Editions", 1),         // line 88
($context["field_options"] ?? null)]);
        // line 89
        yield "

    ";
        // line 91
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 91, $this->getSourceContext())->macro_textField(...["licenseid", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,         // line 93
($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["licenseid"] ?? null) : null), __("Product ID"),         // line 95
($context["field_options"] ?? null)]);
        // line 96
        yield "

    ";
        // line 98
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 98, $this->getSourceContext())->macro_textField(...["license_number", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,         // line 100
($context["item"] ?? null), "fields", [], "any", false, false, false, 100)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["license_number"] ?? null) : null), __("Serial number"),         // line 102
($context["field_options"] ?? null)]);
        // line 103
        yield "

    ";
        // line 105
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 105, $this->getSourceContext())->macro_textField(...["company", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,         // line 107
($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["company"] ?? null) : null), __("Company"),         // line 109
($context["field_options"] ?? null)]);
        // line 110
        yield "

    ";
        // line 112
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 112, $this->getSourceContext())->macro_textField(...["owner", (($_v11 = CoreExtension::getAttribute($this->env, $this->source,         // line 114
($context["item"] ?? null), "fields", [], "any", false, false, false, 114)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["owner"] ?? null) : null), __("Owner"),         // line 116
($context["field_options"] ?? null)]);
        // line 117
        yield "

    ";
        // line 119
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 119, $this->getSourceContext())->macro_htmlField(...["install_date", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 121
($context["item"] ?? null), "fields", [], "any", false, false, false, 121)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["install_date"] ?? null) : null)), __("Installation date")]);
        // line 123
        yield "

    ";
        // line 125
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 125, $this->getSourceContext())->macro_textField(...["hostid", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "fields", [], "any", false, false, false, 127)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["hostid"] ?? null) : null), __("Host ID"),         // line 129
($context["field_options"] ?? null)]);
        // line 130
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assets/operatingsystem.html.twig";
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
        return array (  168 => 130,  166 => 129,  165 => 127,  164 => 125,  160 => 123,  158 => 121,  157 => 119,  153 => 117,  151 => 116,  150 => 114,  149 => 112,  145 => 110,  143 => 109,  142 => 107,  141 => 105,  137 => 103,  135 => 102,  134 => 100,  133 => 98,  129 => 96,  127 => 95,  126 => 93,  125 => 91,  121 => 89,  119 => 88,  118 => 86,  117 => 83,  113 => 81,  111 => 80,  110 => 78,  109 => 75,  105 => 73,  103 => 72,  102 => 70,  101 => 67,  97 => 65,  95 => 64,  94 => 62,  93 => 59,  89 => 57,  87 => 56,  86 => 54,  85 => 51,  81 => 49,  79 => 48,  78 => 46,  77 => 43,  72 => 41,  67 => 40,  60 => 39,  55 => 33,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assets/operatingsystem.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/assets/operatingsystem.html.twig");
    }
}
