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

/* pages/assets/socket_short_form.html.twig */
class __TwigTemplate_ec55c8c9c89b176eabffcb42b9d79f76 extends Template
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
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 34)->unwrap();
        // line 35
        yield "<form action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Glpi\\Socket"), "html", null, true);
        yield "\" method=\"post\" data-submit-once>
    <div>
        ";
        // line 37
        if (((($_v0 = ($context["_add_fromitem"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["_from_itemtype"] ?? null) : null) == "Location")) {
            // line 38
            yield "            ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 38, $this->getSourceContext())->macro_hidden(...["locations_id", (($_v1 = ($context["_add_fromitem"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["_from_items_id"] ?? null) : null)]);
            yield "
        ";
        } else {
            // line 40
            yield "            ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 40, $this->getSourceContext())->macro_hidden(...["items_id", (($_v2 = ($context["_add_fromitem"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["_from_items_id"] ?? null) : null)]);
            yield "
            ";
            // line 41
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 41, $this->getSourceContext())->macro_hidden(...["itemtype", (($_v3 = ($context["_add_fromitem"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["_from_itemtype"] ?? null) : null)]);
            yield "
        ";
        }
        // line 43
        yield "        ";
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 43, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
        <div>
            ";
        // line 45
        yield $macros["fields"]->getTemplateForMacro("macro_sliderField", $context, 45, $this->getSourceContext())->macro_sliderField(...["_add_multiple", 0, __("Add several sockets")]);
        yield "
            <script>
                \$(document).on('change', 'input[type=\"checkbox\"][name=\"_add_multiple\"]', (e) => {
                    const chkbox = \$(e.target);
                    const form = chkbox.closest('form');
                    if (chkbox.prop('checked')) {
                        form.find('.single-add-inputs').addClass('d-none');
                        form.find('.multi-add-inputs').removeClass('d-none');
                        form.find('button[type=\"submit\"]').attr('name', 'execute_multi');
                    } else {
                        form.find('.single-add-inputs').removeClass('d-none');
                        form.find('.multi-add-inputs').addClass('d-none');
                        form.find('button[type=\"submit\"]').attr('name', 'execute_single');
                    }
                });
            </script>
        </div>
        <div>
            <div class=\"single-add-inputs\">
                ";
        // line 64
        yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 64, $this->getSourceContext())->macro_textField(...["name", "", __("Name"), ["full_width" => true]]);
        // line 66
        yield "
            </div>
            <div class=\"multi-add-inputs d-none\">
                ";
        // line 69
        $context["name_fields"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 70
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 70, $this->getSourceContext())->macro_textField(...["_before", "", null, ["no_label" => true, "mb" => "", "field_class" => "", "additional_attributes" => ["placeholder" => __("Prefix")]]]);
            // line 77
            yield "
                    ";
            // line 78
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 78, $this->getSourceContext())->macro_dropdownNumberField(...["_from", 0, null, ["no_label" => true, "mb" => "", "field_class" => "", "min" => 0, "max" => 400]]);
            // line 84
            yield "
                    <span class=\"mx-1 mt-2\" style=\"white-space: nowrap\">--&gt;</span>
                    ";
            // line 86
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 86, $this->getSourceContext())->macro_dropdownNumberField(...["_to", 0, null, ["no_label" => true, "mb" => "", "field_class" => "", "min" => 0, "max" => 400]]);
            // line 92
            yield "
                    ";
            // line 93
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 93, $this->getSourceContext())->macro_textField(...["_after", "", null, ["no_label" => true, "mb" => "", "field_class" => "", "additional_attributes" => ["placeholder" => __("Suffix")]]]);
            // line 100
            yield "
                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 102
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 102, $this->getSourceContext())->macro_htmlField(...["", ($context["name_fields"] ?? null), __("Name"), ["wrapper_class" => "d-flex", "full_width" => true]]);
        // line 105
        yield "
            </div>
            <div class=\"common-inputs d-flex flex-wrap\">
                ";
        // line 108
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 108, $this->getSourceContext())->macro_dropdownField(...["Glpi\\SocketModel", "socketmodels_id", 0, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\SocketModel")]);
        yield "
                ";
        // line 109
        $context["wiring_side_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 110
            yield "                    ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Socket::dropdownWiringSide", ["wiring_side"]);
            // line 111
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 112
        yield "                ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 112, $this->getSourceContext())->macro_htmlField(...["", ($context["wiring_side_field"] ?? null), __("Wiring side")]);
        yield "
                ";
        // line 113
        if (((($_v4 = ($context["_add_fromitem"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["_from_itemtype"] ?? null) : null) == "Location")) {
            // line 114
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 114, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["", __("Itemtype"), ["itemtype" =>             // line 115
($context["socket_itemtypes"] ?? null), "default_itemtype" => "Computer", "display_emptychoice" => false]]);
            // line 118
            yield "
                ";
        } else {
            // line 120
            yield "                    ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 120, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", 0, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location")]);
            yield "
                ";
        }
        // line 122
        yield "            </div>
            <div class=\"d-flex flex-row-reverse px-4 mb-4\">
                ";
        // line 124
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 124, $this->getSourceContext())->macro_submit(...["execute_single", _x("button", "Add"), 1]);
        yield "
            </div>
        </div>
    </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assets/socket_short_form.html.twig";
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
        return array (  180 => 124,  176 => 122,  170 => 120,  166 => 118,  164 => 115,  162 => 114,  160 => 113,  155 => 112,  151 => 111,  148 => 110,  146 => 109,  142 => 108,  137 => 105,  134 => 102,  129 => 100,  127 => 93,  124 => 92,  122 => 86,  118 => 84,  116 => 78,  113 => 77,  110 => 70,  108 => 69,  103 => 66,  101 => 64,  79 => 45,  73 => 43,  68 => 41,  63 => 40,  57 => 38,  55 => 37,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assets/socket_short_form.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/assets/socket_short_form.html.twig");
    }
}
