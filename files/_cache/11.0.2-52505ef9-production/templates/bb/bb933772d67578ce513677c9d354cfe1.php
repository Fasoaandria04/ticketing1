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

/* components/printer_graph_buttons.html.twig */
class __TwigTemplate_d9ccf5896e45c98a42cb232f3fba82e1 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "
";
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 33)->unwrap();
        // line 34
        yield "
";
        // line 35
        $context["options"] = ["rand" => Twig\Extension\CoreExtension::random($this->env->getCharset())];
        // line 38
        yield "
";
        // line 39
        if ((($tmp =  !array_key_exists("timerange_presets", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "    ";
            $context["timerange_presets"] = ["P1D" => __("Last day"), "P1W" => Twig\Extension\CoreExtension::sprintf(__("Last %s days"), 7), "P1M" => Twig\Extension\CoreExtension::sprintf(__("Last %s days"), 30), "P3M" => __("Last quarter"), "P1Y" => __("Last year"), "P1000Y" => __("All time")];
        }
        // line 49
        yield "
";
        // line 50
        if ((($tmp =  !array_key_exists("format_presets", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    ";
            $context["format_presets"] = ["dynamic" => __("Dynamic distribution"), "daily" => __("Daily"), "weekly" => __("Weekly"), "monthly" => __("Monthly"), "yearly" => __("Yearly")];
        }
        // line 59
        yield "
<style>
    .rotate-45 {
        transform: rotate(45deg);
        transition: transform 0.2s ease-in-out;
    }
    .rotate-90 {
        transform: rotate(90deg);
        transition: transform 0.2s ease-in-out;
    }
</style>

<div class=\"d-flex gap-2 w-full\">
    <div id=\"select_range_dropdown\" class=\"dropdown\">
        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <i class=\"ti ti-calendar me-2\"></i>
            ";
        // line 75
        yield (((($context["start_date"] ?? null) && ($context["end_date"] ?? null))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((__("Custom range") . ": ") . (($_v0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["start_date"] ?? null), "T")) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null)) . " - ") . (($_v1 = Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["end_date"] ?? null), "T")) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["timerange_presets"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[($context["interval"] ?? null)] ?? null) : null), "html", null, true)));
        yield "
        </button>
        <ul class=\"dropdown-menu\">
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timerange_presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 79
            yield "                <li>
                    <span class=\"dropdown-item ";
            // line 80
            yield ((((($context["interval"] ?? null) == $context["key"]) && ( !($context["start_date"] ?? null) ||  !($context["end_date"] ?? null)))) ? ("active") : (""));
            yield "\" href=\"#\" data-key=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" onclick=\"update_date_preset_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["options"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["rand"] ?? null) : null), "html", null, true);
            yield "(this)\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "            <li><hr class=\"dropdown-divider\"></li>
            <li id=\"show_custom_range\" class=\"d-flex align-items-center\">
                <span class=\"dropdown-item ";
        // line 85
        yield (((($context["start_date"] ?? null) && ($context["end_date"] ?? null))) ? ("active") : (""));
        yield "\" href=\"#\">
                    <i class=\"ti ti-plus ";
        // line 86
        yield (((($context["start_date"] ?? null) && ($context["end_date"] ?? null))) ? ("rotate-45") : ("rotate-90"));
        yield "\"></i>
                    ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Custom range"), "html", null, true);
        yield "
                </span>
            </li>
            <li id=\"date_range_input\" class=\"px-2 ";
        // line 90
        yield ((( !($context["start_date"] ?? null) ||  !($context["end_date"] ?? null))) ? ("d-none") : (""));
        yield "\" style=\"width:11rem\">
                ";
        // line 91
        yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 91, $this->getSourceContext())->macro_dateField(...["range_date", "", "", Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["no_label" => true, "full_width" => true, "mb" => "my-2"])]);
        // line 95
        yield "
                <button class=\"btn btn-primary w-full mb-1\" type=\"button\" onclick=\"update_custom_date_range_";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["options"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["rand"] ?? null) : null), "html", null, true);
        yield "()\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Apply"), "html", null, true);
        yield "</button>
            </li>
        </ul>
    </div>
    <div id=\"select_format_dropdown\" class=\"dropdown\">
        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"ti ti-chart-dots-3 me-2\"></i>
            ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = ($context["format_presets"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[($context["format"] ?? null)] ?? null) : null), "html", null, true);
        yield "
        </button>
        <ul class=\"dropdown-menu\">
            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["format_presets"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 107
            yield "                <li>
                    <span class=\"dropdown-item ";
            // line 108
            yield ((((($_v6 = ($context["format_presets"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[($context["format"] ?? null)] ?? null) : null) == $context["value"])) ? ("active") : (""));
            yield "\" href=\"#\" data-key=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" onclick=\"update_format_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["options"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["rand"] ?? null) : null), "html", null, true);
            yield "(this)\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "</span>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "        </ul>
    </div>
    <div id=\"compare_printers_dropdown\" class=\"dropdown\">
        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\">
        <i class=\"ti ti-git-compare me-2\"></i>
            ";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Compare"), "html", null, true);
        yield "
        </button>
        <ul class=\"dropdown-menu\">
            <li class=\"mx-2\">
                ";
        // line 120
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 120, $this->getSourceContext())->macro_dropdownField(...["Printer", "compare_printer", ($context["compare_printers"] ?? null), __("Select printers to compare"), Twig\Extension\CoreExtension::merge(($context["options"] ?? null), ["full_width" => true, "multiple" => true, "is_horizontal" => false, "mb" => ""])]);
        // line 125
        yield "
                ";
        // line 126
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 126, $this->getSourceContext())->macro_dropdownArrayField(...["compare_printer_stat", ($context["compare_printer_stat"] ?? null), ["total_pages" => __("Total pages"), "bw_pages" => __("Black and white pages"), "color_pages" => __("Color pages")], __("Select a statistic to compare"), Twig\Extension\CoreExtension::merge(        // line 130
($context["options"] ?? null), ["full_width" => true, "is_horizontal" => false])]);
        // line 133
        yield "
                <button class=\"btn btn-primary w-full mb-1\" type=\"button\" onclick=\"update_compare_printers_";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["options"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["rand"] ?? null) : null), "html", null, true);
        yield "()\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Apply"), "html", null, true);
        yield "</button>
            </li>
        </ul>
    </div>
    <a href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path(($context["export_url"] ?? null)), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-sm btn-icon btn-ghost-secondary me-0 me-sm-1 px-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Export to CSV"), "html", null, true);
        yield "\">
         <i class=\"ti fs-2 ti-file-download\"></i>
      </a>
</div>

<script>
    var date_range_data = {
        'format': ";
        // line 145
        yield json_encode(($context["format"] ?? null));
        yield ",
        'interval': ";
        // line 146
        yield json_encode(($context["interval"] ?? null));
        yield ",
        'start_date': ";
        // line 147
        yield json_encode(($context["start_date"] ?? null));
        yield ",
        'end_date': ";
        // line 148
        yield json_encode(($context["end_date"] ?? null));
        yield ",
    }

    var compare_printers_data = {
        'compare_printers': ";
        // line 152
        yield json_encode(($context["compare_printers"] ?? null));
        yield ",
        'compare_printer_stat': ";
        // line 153
        yield json_encode(($context["compare_printer_stat"] ?? null));
        yield ",
    }

    function reloadTab_";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = ($context["options"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["rand"] ?? null) : null), "html", null, true);
        yield "() {
        params = 'date_format=' + date_range_data['format'];

        if(date_range_data['start_date'] && date_range_data['end_date']) {
            params += '&date_start=' + date_range_data['start_date'] + '&date_end=' + date_range_data['end_date'];
        } else {
            params += '&date_interval=' + date_range_data['interval'];
        }

        if (compare_printers_data['compare_printers']) {
            params += '&compare_printers=' + compare_printers_data['compare_printers'].join(',');
        }
        if (compare_printers_data['compare_printer_stat']) {
            params += '&compare_printer_stat=' + compare_printers_data['compare_printer_stat'];
        }

        reloadTab(params);
    }

    function update_date_preset_";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["options"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["rand"] ?? null) : null), "html", null, true);
        yield "(element) {
        if (!\$(element).hasClass('active')) {
            date_range_data['interval'] = element.dataset.key;
            date_range_data['start_date'] = null;
            date_range_data['end_date'] = null;

            \$('#select_range_dropdown button.dropdown-toggle').html(element.innerHTML);
            reloadTab_";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = ($context["options"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["rand"] ?? null) : null), "html", null, true);
        yield "();
        }
    }
    function update_format_";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = ($context["options"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["rand"] ?? null) : null), "html", null, true);
        yield "(element) {
        date_range_data['format'] = element.dataset.key;

        \$('#select_format_dropdown button.dropdown-toggle').html(element.innerHTML);
        reloadTab_";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v13 = ($context["options"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["rand"] ?? null) : null), "html", null, true);
        yield "();
    }
    function update_custom_date_range_";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = ($context["options"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["rand"] ?? null) : null), "html", null, true);
        yield "() {
        let range_date = \$('#range_date_";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = ($context["options"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["rand"] ?? null) : null), "html", null, true);
        yield "')[0];
        let start_date = range_date._flatpickr.selectedDates[0];
        let end_date = range_date._flatpickr.selectedDates[1];

        if (start_date && end_date) {
            // Igore timezone offset
            date_range_data['start_date'] = new Date(start_date.getTime() - (start_date.getTimezoneOffset() * 60000)).toISOString();
            date_range_data['end_date'] = new Date(end_date.getTime() - (end_date.getTimezoneOffset() * 60000)).toISOString();
            date_range_data['interval'] = null;

            let label = __('Custom Range') + ': ';
            label += date_range_data['start_date'].split('T')[0];
            label += ' - ' + date_range_data['end_date'].split('T')[0];
            \$('#select_range_dropdown button.dropdown-toggle').html(label);
            reloadTab_";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = ($context["options"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["rand"] ?? null) : null), "html", null, true);
        yield "();
        }
    }
    function update_compare_printers_";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = ($context["options"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["rand"] ?? null) : null), "html", null, true);
        yield "() {
        let compare_printers = \$('#dropdown_compare_printer__";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = ($context["options"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["rand"] ?? null) : null), "html", null, true);
        yield "').val();
        let compare_printer_stat = \$('#dropdown_compare_printer_stat";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = ($context["options"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["rand"] ?? null) : null), "html", null, true);
        yield "').val();

        compare_printers_data['compare_printers'] = compare_printers;
        compare_printers_data['compare_printer_stat'] = compare_printer_stat;

        reloadTab_";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["options"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["rand"] ?? null) : null), "html", null, true);
        yield "();
    }

    \$(document).ready(function () {
        let range_date = \$('#range_date_";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = ($context["options"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["rand"] ?? null) : null), "html", null, true);
        yield "')[0];
        let dropdownInst = new bootstrap.Dropdown(\$('#select_range_dropdown button.dropdown-toggle'));

        \$('#show_custom_range').click(function () {
            event.stopPropagation();
            \$('#date_range_input').toggleClass('d-none');

            if (\$('#show_custom_range span i.ti-plus').hasClass('rotate-45')) {
                \$('#show_custom_range span i.ti-plus').addClass('rotate-90');
                \$('#show_custom_range span i.ti-plus').removeClass('rotate-45');
            } else {
                \$('#show_custom_range span i.ti-plus').removeClass('rotate-90');
                \$('#show_custom_range span i.ti-plus').addClass('rotate-45');
            }
        });

        range_date._flatpickr.config.mode = 'range';
        range_date._flatpickr.config.onOpen.push(function () {
            dropdownInst._config.autoClose = false
        });
        range_date._flatpickr.config.onClose.push(function () {
            dropdownInst._config.autoClose = true
        });

        ";
        // line 244
        if ((($context["start_date"] ?? null) && ($context["end_date"] ?? null))) {
            // line 245
            yield "            range_date._flatpickr.setDate([new Date(";
            yield json_encode(($context["start_date"] ?? null));
            yield "), new Date(";
            yield json_encode(($context["end_date"] ?? null));
            yield ")]);
        ";
        }
        // line 247
        yield "    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/printer_graph_buttons.html.twig";
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
        return array (  395 => 247,  387 => 245,  385 => 244,  358 => 220,  351 => 216,  343 => 211,  339 => 210,  335 => 209,  329 => 206,  312 => 192,  308 => 191,  303 => 189,  296 => 185,  290 => 182,  280 => 175,  258 => 156,  252 => 153,  248 => 152,  241 => 148,  237 => 147,  233 => 146,  229 => 145,  217 => 138,  208 => 134,  205 => 133,  203 => 130,  202 => 126,  199 => 125,  197 => 120,  190 => 116,  183 => 111,  168 => 108,  165 => 107,  161 => 106,  155 => 103,  143 => 96,  140 => 95,  138 => 91,  134 => 90,  128 => 87,  124 => 86,  120 => 85,  116 => 83,  101 => 80,  98 => 79,  94 => 78,  88 => 75,  70 => 59,  66 => 51,  64 => 50,  61 => 49,  57 => 40,  55 => 39,  52 => 38,  50 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/printer_graph_buttons.html.twig", "/opt/lampp/htdocs/ticketing1/templates/components/printer_graph_buttons.html.twig");
    }
}
