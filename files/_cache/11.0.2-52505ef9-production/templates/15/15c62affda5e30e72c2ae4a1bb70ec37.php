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

/* pages/assets/rack.html.twig */
class __TwigTemplate_da61d201175d0cc70e434409a022610b extends Template
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
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 33
        $this->parent = $this->load("generic_show_form.html.twig", 33);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_more_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 39, $this->getSourceContext())->macro_dropdownField(...["DCRoom", "dcrooms_id", (($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 39)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["dcrooms_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DCRoom"), ["rand" =>         // line 40
($context["rand"] ?? null)]]);
        // line 41
        yield "
   ";
        // line 42
        $context["current_position"] = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["position"] ?? null) : null);
        // line 43
        yield "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_dcrooms_id" .         // line 45
($context["rand"] ?? null)), "room_positions", ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dcroom_size.php"), ["id" => "__VALUE__", "current" =>         // line 50
($context["current_position"] ?? null), "rand" =>         // line 51
($context["rand"] ?? null)]]);
        // line 54
        yield "   ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ajax::updateItemOnSelectEvent", [("dropdown_dcrooms_id" .         // line 56
($context["rand"] ?? null)), ("dropdown_locations_id" .         // line 57
($context["rand"] ?? null)), ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("root_doc") . "/ajax/dropdownLocation.php"), ["items_id" => "__VALUE__", "itemtype" => "DCRoom"]]);
        // line 64
        yield "
   ";
        // line 65
        $context["initial_field"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 66
            yield "      ";
            if (((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 66)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["dcrooms_id"] ?? null) : null) > 0)) {
                // line 67
                yield "         ";
                $context["dcroom"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("DCRoom", (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["dcrooms_id"] ?? null) : null));
                // line 68
                yield "         ";
                if ((($tmp =  !(null === ($context["dcroom"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "            ";
                    $context["used"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dcroom"] ?? null), "getFilled", [($context["current_position"] ?? null)], "method", false, false, false, 69);
                    // line 70
                    yield "            ";
                    $context["positions"] = CoreExtension::getAttribute($this->env, $this->source, ($context["dcroom"] ?? null), "getAllPositions", [], "method", false, false, false, 70);
                    // line 71
                    yield "            ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 71, $this->getSourceContext())->macro_dropdownArrayField(...["position", ($context["current_position"] ?? null), ($context["positions"] ?? null), null, ["rand" =>                     // line 72
($context["rand"] ?? null), "used" =>                     // line 73
($context["used"] ?? null), "no_label" => true]]);
                    // line 75
                    yield "
         ";
                } else {
                    // line 77
                    yield "            <div class=\"col-form-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No room found or selected"), "html", null, true);
                    yield "</div>
         ";
                }
                // line 79
                yield "      ";
            } else {
                // line 80
                yield "         <div class=\"col-form-label\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No room found or selected"), "html", null, true);
                yield "</div>
      ";
            }
            // line 82
            yield "   ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        yield "   ";
        yield $macros["fields"]->getTemplateForMacro("macro_ajaxField", $context, 83, $this->getSourceContext())->macro_ajaxField(...["room_positions", ($context["initial_field"] ?? null), __("Position in room"), ["rand" =>         // line 84
($context["rand"] ?? null)]]);
        // line 85
        yield "

   ";
        // line 87
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 87, $this->getSourceContext())->macro_dropdownArrayField(...["room_orientation", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 89
($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["room_orientation"] ?? null) : null), [Twig\Extension\CoreExtension::constant("Rack::ROOM_O_NORTH") => __("North"), Twig\Extension\CoreExtension::constant("Rack::ROOM_O_EAST") => __("East"), Twig\Extension\CoreExtension::constant("Rack::ROOM_O_SOUTH") => __("South"), Twig\Extension\CoreExtension::constant("Rack::ROOM_O_WEST") => __("West")], __("Door orientation in room"), Twig\Extension\CoreExtension::merge(        // line 97
($context["field_options"] ?? null), ["rand" =>         // line 98
($context["rand"] ?? null)])]);
        // line 100
        yield "

   ";
        // line 102
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 102, $this->getSourceContext())->macro_numberField(...["number_units", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,         // line 104
($context["item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["number_units"] ?? null) : null), __("Number of units"), Twig\Extension\CoreExtension::merge(        // line 106
($context["field_options"] ?? null), ["rand" =>         // line 107
($context["rand"] ?? null), "min" => 1, "max" => 100, "step" => 1])]);
        // line 112
        yield "

   ";
        // line 114
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 114, $this->getSourceContext())->macro_numberField(...["width", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["width"] ?? null) : null), __("Width"), Twig\Extension\CoreExtension::merge(        // line 118
($context["field_options"] ?? null), ["rand" =>         // line 119
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 123
        yield "

   ";
        // line 125
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 125, $this->getSourceContext())->macro_numberField(...["height", (($_v7 = CoreExtension::getAttribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "fields", [], "any", false, false, false, 127)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["height"] ?? null) : null), __("Height"), Twig\Extension\CoreExtension::merge(        // line 129
($context["field_options"] ?? null), ["rand" =>         // line 130
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 134
        yield "

   ";
        // line 136
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 136, $this->getSourceContext())->macro_numberField(...["depth", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,         // line 138
($context["item"] ?? null), "fields", [], "any", false, false, false, 138)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["depth"] ?? null) : null), __("Depth"), Twig\Extension\CoreExtension::merge(        // line 140
($context["field_options"] ?? null), ["rand" =>         // line 141
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 145
        yield "

   ";
        // line 147
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 147, $this->getSourceContext())->macro_numberField(...["max_power", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,         // line 149
($context["item"] ?? null), "fields", [], "any", false, false, false, 149)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["max_power"] ?? null) : null), __("Max. power (in watts)"), Twig\Extension\CoreExtension::merge(        // line 151
($context["field_options"] ?? null), ["rand" =>         // line 152
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 156
        yield "

   ";
        // line 158
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 158, $this->getSourceContext())->macro_numberField(...["mesured_power", (($_v10 = CoreExtension::getAttribute($this->env, $this->source,         // line 160
($context["item"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["mesured_power"] ?? null) : null), __("Measured power (in watts)"), Twig\Extension\CoreExtension::merge(        // line 162
($context["field_options"] ?? null), ["rand" =>         // line 163
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 167
        yield "

   ";
        // line 169
        yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 169, $this->getSourceContext())->macro_numberField(...["max_weight", (($_v11 = CoreExtension::getAttribute($this->env, $this->source,         // line 171
($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["max_weight"] ?? null) : null), __("Max. weight"), Twig\Extension\CoreExtension::merge(        // line 173
($context["field_options"] ?? null), ["rand" =>         // line 174
($context["rand"] ?? null), "min" => 0, "step" => 1])]);
        // line 178
        yield "

   ";
        // line 180
        yield $macros["fields"]->getTemplateForMacro("macro_colorField", $context, 180, $this->getSourceContext())->macro_colorField(...["bgcolor", (($_v12 = CoreExtension::getAttribute($this->env, $this->source,         // line 182
($context["item"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["bgcolor"] ?? null) : null), __("Background color"),         // line 184
($context["field_options"] ?? null)]);
        // line 185
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/assets/rack.html.twig";
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
        return array (  217 => 185,  215 => 184,  214 => 182,  213 => 180,  209 => 178,  207 => 174,  206 => 173,  205 => 171,  204 => 169,  200 => 167,  198 => 163,  197 => 162,  196 => 160,  195 => 158,  191 => 156,  189 => 152,  188 => 151,  187 => 149,  186 => 147,  182 => 145,  180 => 141,  179 => 140,  178 => 138,  177 => 136,  173 => 134,  171 => 130,  170 => 129,  169 => 127,  168 => 125,  164 => 123,  162 => 119,  161 => 118,  160 => 116,  159 => 114,  155 => 112,  153 => 107,  152 => 106,  151 => 104,  150 => 102,  146 => 100,  144 => 98,  143 => 97,  142 => 89,  141 => 87,  137 => 85,  135 => 84,  133 => 83,  129 => 82,  123 => 80,  120 => 79,  114 => 77,  110 => 75,  108 => 73,  107 => 72,  105 => 71,  102 => 70,  99 => 69,  96 => 68,  93 => 67,  90 => 66,  88 => 65,  85 => 64,  83 => 57,  82 => 56,  80 => 54,  78 => 51,  77 => 50,  76 => 45,  74 => 43,  72 => 42,  69 => 41,  67 => 40,  65 => 39,  58 => 38,  53 => 33,  51 => 36,  49 => 35,  47 => 34,  40 => 33,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assets/rack.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/assets/rack.html.twig");
    }
}
