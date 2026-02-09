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

/* components/infocom.html.twig */
class __TwigTemplate_ca212ee15fe5af31310c3a1a0839d084 extends Template
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
<div class=\"asset\">
   ";
        // line 36
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 37
            yield "      <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/infocom.form.php"), "html", null, true);
            yield "\" method=\"post\" data-submit-once>
   ";
        }
        // line 39
        yield "
   ";
        // line 40
        if (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["id"] ?? null) : null) <= 0)) {
            // line 41
            yield "      ";
            if ((($context["can_create"] ?? null) && (($context["withtemplate"] ?? null) != 2))) {
                // line 42
                yield "         <div class=\"firstbloc\">
               <input type=\"hidden\" name=\"itemtype\" value=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 43), "html", null, true);
                yield "\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["id"] ?? null) : null), "html", null, true);
                yield "\" />
               <button type=\"submit\" class=\"btn btn-primary\" name=\"add\" value=\"1\">
                  <i class=\"ti ti-coins\"></i>
                  <span>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable the financial and administrative information"), "html", null, true);
                yield "</span>
               </button>
         </div>
      ";
            }
            // line 51
            yield "   ";
        } else {
            // line 52
            yield "      ";
            $context["disabled"] = (($context["withtemplate"] ?? null) != 2);
            // line 53
            yield "      ";
            $context["disabled"] = false;
            // line 54
            yield "      ";
            $context["in_modal"] = (array_key_exists("_get", $context) && ((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 54), "0")) : ("0")));
            // line 55
            yield "      <input type=\"hidden\" name=\"id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 55)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
            yield "\" />
      <div class=\"card-body d-flex flex-wrap p-0 ";
            // line 56
            yield (((($context["in_modal"] ?? null) == "1")) ? ("ps-3 me-2") : (""));
            yield "\">
         <div class=\"col-12 flex-column\">
            <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
               <div class=\"row flex-row align-items-start flex-grow-1\">
                  <div class=\"row flex-row\">
                     ";
            // line 62
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 62, $this->getSourceContext())->macro_largeTitle(...[__("Asset lifecycle"), "ti ti-refresh", true]);
            // line 66
            yield "

                     ";
            // line 68
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 68, $this->getSourceContext())->macro_dateField(...["order_date", (($_v3 = CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["order_date"] ?? null) : null), __("Order date"), ["disabled" =>             // line 72
($context["disabled"] ?? null)]]);
            // line 73
            yield "

                     ";
            // line 75
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 75, $this->getSourceContext())->macro_dateField(...["buy_date", (($_v4 = CoreExtension::getAttribute($this->env, $this->source,             // line 77
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["buy_date"] ?? null) : null), __("Date of purchase"), ["disabled" =>             // line 79
($context["disabled"] ?? null)]]);
            // line 80
            yield "

                     ";
            // line 82
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 82, $this->getSourceContext())->macro_dateField(...["delivery_date", (($_v5 = CoreExtension::getAttribute($this->env, $this->source,             // line 84
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["delivery_date"] ?? null) : null), __("Delivery date"), ["disabled" =>             // line 86
($context["disabled"] ?? null)]]);
            // line 87
            yield "

                     ";
            // line 89
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 89, $this->getSourceContext())->macro_dateField(...["use_date", (($_v6 = CoreExtension::getAttribute($this->env, $this->source,             // line 91
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["use_date"] ?? null) : null), __("Startup date"), ["disabled" =>             // line 93
($context["disabled"] ?? null)]]);
            // line 94
            yield "

                     ";
            // line 96
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 96, $this->getSourceContext())->macro_dateField(...["inventory_date", (($_v7 = CoreExtension::getAttribute($this->env, $this->source,             // line 98
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 98)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["inventory_date"] ?? null) : null), __("Date of last physical inventory"), ["disabled" =>             // line 100
($context["disabled"] ?? null)]]);
            // line 101
            yield "

                     ";
            // line 103
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 103, $this->getSourceContext())->macro_dateField(...["decommission_date", (($_v8 = CoreExtension::getAttribute($this->env, $this->source,             // line 105
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 105)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["decommission_date"] ?? null) : null), __("Decommission date"), ["disabled" =>             // line 107
($context["disabled"] ?? null)]]);
            // line 108
            yield "

                     ";
            // line 111
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 111, $this->getSourceContext())->macro_largeTitle(...[__("Financial and administrative information"), "ti ti-coins"]);
            // line 114
            yield "

                     ";
            // line 116
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 116, $this->getSourceContext())->macro_dropdownField(...["Supplier", "suppliers_id", (($_v9 = CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 119)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["suppliers_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), ["entity" => (($_v10 = CoreExtension::getAttribute($this->env, $this->source,             // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["entities_id"] ?? null) : null), "disabled" =>             // line 123
($context["disabled"] ?? null)]]);
            // line 125
            yield "

                     ";
            // line 127
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->hasItemtypeRight("Budget", Twig\Extension\CoreExtension::constant("READ"))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 128
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 128, $this->getSourceContext())->macro_dropdownField(...["Budget", "budgets_id", (($_v11 = CoreExtension::getAttribute($this->env, $this->source,                 // line 131
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["budgets_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Budget"), ["entity" => (($_v12 = CoreExtension::getAttribute($this->env, $this->source,                 // line 134
($context["item"] ?? null), "fields", [], "any", false, false, false, 134)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["entities_id"] ?? null) : null), "comments" => 1, "disabled" =>                 // line 136
($context["disabled"] ?? null)]]);
                // line 138
                yield "
                     ";
            }
            // line 140
            yield "
                     ";
            // line 141
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 141, $this->getSourceContext())->macro_textField(...["order_number", (($_v13 = CoreExtension::getAttribute($this->env, $this->source,             // line 143
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["order_number"] ?? null) : null), __("Order number"), ["disabled" =>             // line 145
($context["disabled"] ?? null)]]);
            // line 146
            yield "

                     ";
            // line 148
            yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 148, $this->getSourceContext())->macro_autoNameField(...["immo_number",             // line 150
($context["infocom"] ?? null), __("Immobilization number"),             // line 152
($context["withtemplate"] ?? null), ["disabled" =>             // line 153
($context["disabled"] ?? null), "value" => (($_v14 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 153)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["immo_number"] ?? null) : null)]]);
            // line 154
            yield "

                     ";
            // line 156
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 156, $this->getSourceContext())->macro_textField(...["bill", (($_v15 = CoreExtension::getAttribute($this->env, $this->source,             // line 158
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["bill"] ?? null) : null), __("Invoice number"), ["disabled" =>             // line 160
($context["disabled"] ?? null)]]);
            // line 161
            yield "

                     ";
            // line 163
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 163, $this->getSourceContext())->macro_textField(...["delivery_number", (($_v16 = CoreExtension::getAttribute($this->env, $this->source,             // line 165
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 165)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["delivery_number"] ?? null) : null), __("Delivery form"), ["disabled" =>             // line 167
($context["disabled"] ?? null)]]);
            // line 168
            yield "

                     ";
            // line 170
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 170, $this->getSourceContext())->macro_numberField(...["value", (($_v17 = CoreExtension::getAttribute($this->env, $this->source,             // line 172
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 172)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["value"] ?? null) : null), _x("price", "Value"), ["disabled" =>             // line 175
($context["disabled"] ?? null), "step" => "any"]]);
            // line 178
            yield "

                     ";
            // line 180
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 180, $this->getSourceContext())->macro_numberField(...["warranty_value", (($_v18 = CoreExtension::getAttribute($this->env, $this->source,             // line 182
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 182)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["warranty_value"] ?? null) : null), __("Warranty extension value"), ["disabled" =>             // line 185
($context["disabled"] ?? null), "step" => "any"]]);
            // line 188
            yield "


                     ";
            // line 191
            $context["amort"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "Amort", [(($_v19 = CoreExtension::getAttribute($this->env, $this->source,             // line 192
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 192)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["sink_type"] ?? null) : null), (($_v20 = CoreExtension::getAttribute($this->env, $this->source,             // line 193
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["value"] ?? null) : null), (($_v21 = CoreExtension::getAttribute($this->env, $this->source,             // line 194
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 194)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["sink_time"] ?? null) : null), (($_v22 = CoreExtension::getAttribute($this->env, $this->source,             // line 195
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["sink_coeff"] ?? null) : null), (($_v23 = CoreExtension::getAttribute($this->env, $this->source,             // line 196
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 196)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["buy_date"] ?? null) : null), (($_v24 = CoreExtension::getAttribute($this->env, $this->source,             // line 197
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 197)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["use_date"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("date_tax"), "n"], "method", false, false, false, 191);
            // line 201
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 201, $this->getSourceContext())->macro_readOnlyField(...["", $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedNumber(            // line 203
($context["amort"] ?? null)), __("Account net value")]);
            // line 205
            yield "

                     ";
            // line 207
            if (((($context["withtemplate"] ?? null) == 2) || (($context["disabled"] ?? null) == true))) {
                // line 208
                yield "                        ";
                $context["sink_type_field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "getAmortTypeName", [(($_v25 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 208)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["sink_type"] ?? null) : null)], "method", false, false, false, 208);
                // line 209
                yield "                     ";
            } else {
                // line 210
                yield "                        ";
                $context["sink_type_field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "dropdownAmortType", ["sink_type", (($_v26 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["sink_type"] ?? null) : null), false], "method", false, false, false, 210);
                // line 211
                yield "                     ";
            }
            // line 212
            yield "
                     ";
            // line 213
            yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 213, $this->getSourceContext())->macro_field(...["",             // line 215
($context["sink_type_field"] ?? null), __("Amortization type")]);
            // line 217
            yield "

                     ";
            // line 219
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 219, $this->getSourceContext())->macro_dropdownNumberField(...["sink_time", (($_v27 = CoreExtension::getAttribute($this->env, $this->source,             // line 221
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["sink_time"] ?? null) : null), __("Amortization duration"), ["max" => 15, "unit" => "year", "disabled" =>             // line 226
($context["disabled"] ?? null)]]);
            // line 228
            yield "

                     ";
            // line 230
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 230, $this->getSourceContext())->macro_numberField(...["sink_coeff", (($_v28 = CoreExtension::getAttribute($this->env, $this->source,             // line 232
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 232)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["sink_coeff"] ?? null) : null), __("Amortization coefficient"), ["disabled" =>             // line 234
($context["disabled"] ?? null), "step" => "any"]]);
            // line 235
            yield "

                     ";
            // line 237
            if ((!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 237), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "getExcludedTypes", [], "method", false, false, false, 237), ["Cartridge", "Consumable", "SoftwareLicense"])) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["ticket_tco"], "method", false, false, false, 237))) {
                // line 238
                yield "                        ";
                $context["ticket_tco_value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "showTco", [(($_v29 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 238)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["ticket_tco"] ?? null) : null), (($_v30 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 238)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["value"] ?? null) : null)], "method", false, false, false, 238);
                // line 239
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 239, $this->getSourceContext())->macro_readOnlyField(...["ticket_tco",                 // line 241
($context["ticket_tco_value"] ?? null), __("TCO (value + tracking cost)"), ["disabled" =>                 // line 243
($context["disabled"] ?? null)]]);
                // line 244
                yield "

                        ";
                // line 246
                $context["ticket_tco2_value"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "showTco", [(($_v31 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 246)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["ticket_tco"] ?? null) : null), (($_v32 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 246)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32["value"] ?? null) : null), (($_v33 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 246)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33["buy_date"] ?? null) : null)], "method", false, false, false, 246);
                // line 247
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_readOnlyField", $context, 247, $this->getSourceContext())->macro_readOnlyField(...["ticket_tco",                 // line 249
($context["ticket_tco2_value"] ?? null), __("Monthly TCO"), ["disabled" =>                 // line 251
($context["disabled"] ?? null)]]);
                // line 252
                yield "
                     ";
            }
            // line 254
            yield "

                     ";
            // line 256
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 256, $this->getSourceContext())->macro_dropdownField(...["BusinessCriticity", "businesscriticities_id", (($_v34 = CoreExtension::getAttribute($this->env, $this->source,             // line 259
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 259)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34["businesscriticities_id"] ?? null) : null), _n("Business criticity", "Business criticities", 1), ["disabled" =>             // line 262
($context["disabled"] ?? null)]]);
            // line 264
            yield "

                     ";
            // line 266
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 266, $this->getSourceContext())->macro_textareaField(...["comment", (($_v35 = CoreExtension::getAttribute($this->env, $this->source,             // line 268
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 268)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()), ["disabled" =>             // line 270
($context["disabled"] ?? null)]]);
            // line 271
            yield "

                     ";
            // line 274
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_largeTitle", $context, 274, $this->getSourceContext())->macro_largeTitle(...[__("Warranty information"), "ti ti-contract"]);
            // line 277
            yield "

                     ";
            // line 279
            yield $macros["fields"]->getTemplateForMacro("macro_dateField", $context, 279, $this->getSourceContext())->macro_dateField(...["warranty_date", (($_v36 = CoreExtension::getAttribute($this->env, $this->source,             // line 281
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 281)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36["warranty_date"] ?? null) : null), __("Start date of warranty"), ["disabled" =>             // line 283
($context["disabled"] ?? null)]]);
            // line 284
            yield "

                     ";
            // line 286
            if ((($context["withtemplate"] ?? null) == 2)) {
                // line 287
                yield "                        ";
                if (((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 287)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37["warranty_duration"] ?? null) : null) ==  -1)) {
                    // line 288
                    yield "                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Lifelong"), "html", null, true);
                    yield "
                        ";
                } else {
                    // line 290
                    yield "                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(_n("%d month", "%d months", (($_v38 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 290)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38["warranty_duration"] ?? null) : null)), (($_v39 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 290)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39["warranty_duration"] ?? null) : null)), "html", null, true);
                    yield "
                        ";
                }
                // line 292
                yield "                     ";
            } else {
                // line 293
                yield "                        ";
                $context["warrantyexpir"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "getWarrantyExpir", [(($_v40 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40["warranty_date"] ?? null) : null), (($_v41 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 293)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41["warranty_duration"] ?? null) : null), 0, true], "method", false, false, false, 293);
                // line 294
                yield "                        ";
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownNumberField", $context, 294, $this->getSourceContext())->macro_dropdownNumberField(...["warranty_duration", (($_v42 = CoreExtension::getAttribute($this->env, $this->source,                 // line 296
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 296)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42["warranty_duration"] ?? null) : null), __("Warranty duration"), ["min" => 0, "max" => 120, "step" => 1, "toadd" => ["-1" => __("Lifelong")], "unit" => "month", "disabled" =>                 // line 304
($context["disabled"] ?? null), "add_field_html" => (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(                // line 305
($context["warrantyexpir"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("<span class=\"text-muted\">" . Twig\Extension\CoreExtension::sprintf(__("Valid to %s"), ($context["warrantyexpir"] ?? null))) . "</span>")) : (""))]]);
                // line 307
                yield "
                     ";
            }
            // line 309
            yield "
                     ";
            // line 310
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 310, $this->getSourceContext())->macro_textField(...["warranty_info", (($_v43 = CoreExtension::getAttribute($this->env, $this->source,             // line 312
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 312)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43["warranty_info"] ?? null) : null), __("Warranty information"), ["disabled" =>             // line 314
($context["disabled"] ?? null)]]);
            // line 315
            yield "

                     ";
            // line 317
            if ((($tmp = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 318
                yield "                        ";
                $context["alert_html"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 319
                    yield "                           ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Alert::displayLastAlert", ["Infocom", (($_v44 = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "fields", [], "any", false, false, false, 319)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44["id"] ?? null) : null)]);
                    // line 320
                    yield "                        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 321
                yield "
                        ";
                // line 322
                $context["alert_field"] = CoreExtension::getAttribute($this->env, $this->source, ($context["infocom"] ?? null), "dropdownAlert", [["name" => "alert", "value" => (($_v45 = CoreExtension::getAttribute($this->env, $this->source,                 // line 324
($context["infocom"] ?? null), "fields", [], "any", false, false, false, 324)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45["alert"] ?? null) : null), "display" => false, "width" => "100%", "class" => "form-select"]], "method", false, false, false, 322);
                // line 329
                yield "
                        ";
                // line 330
                yield $macros["fields"]->getTemplateForMacro("macro_field", $context, 330, $this->getSourceContext())->macro_field(...["alert",                 // line 332
($context["alert_field"] ?? null), __("Alarms on financial and administrative information"), ["add_field_html" => (("<span class=\"text-muted\">" .                 // line 334
($context["alert_html"] ?? null)) . "</span>")]]);
                // line 335
                yield "
                     ";
            }
            // line 337
            yield "
                     ";
            // line 338
            $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHookFunction(Twig\Extension\CoreExtension::constant("Glpi\\Plugin\\Hooks::INFOCOM"), ($context["item"] ?? null));
            // line 339
            yield "
                     <div class=\"card-body mx-n2 border-top d-flex flex-row-reverse align-items-start flex-wrap\">
                        ";
            // line 341
            if ((($tmp = ($context["can_global_update"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 342
                yield "                           <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                              <i class=\"ti ti-device-floppy\"></i>
                              <span>";
                // line 344
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Save"), "html", null, true);
                yield "</span>
                           </button>
                        ";
            }
            // line 347
            yield "
                        ";
            // line 348
            if ((($tmp = ($context["can_global_purge"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 349
                yield "                           <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\">
                              <i class=\"ti ti-trash\"></i>
                              <span>";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                yield "</span>
                           </button>
                        ";
            }
            // line 354
            yield "                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   ";
        }
        // line 362
        yield "
   ";
        // line 363
        if ((($context["can_edit"] ?? null) || ($context["can_create"] ?? null))) {
            // line 364
            yield "      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
   </form>
   ";
        }
        // line 367
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/infocom.html.twig";
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
        return array (  495 => 367,  488 => 364,  486 => 363,  483 => 362,  473 => 354,  467 => 351,  463 => 349,  461 => 348,  458 => 347,  452 => 344,  448 => 342,  446 => 341,  442 => 339,  440 => 338,  437 => 337,  433 => 335,  431 => 334,  430 => 332,  429 => 330,  426 => 329,  424 => 324,  423 => 322,  420 => 321,  416 => 320,  413 => 319,  410 => 318,  408 => 317,  404 => 315,  402 => 314,  401 => 312,  400 => 310,  397 => 309,  393 => 307,  391 => 305,  390 => 304,  389 => 296,  387 => 294,  384 => 293,  381 => 292,  375 => 290,  369 => 288,  366 => 287,  364 => 286,  360 => 284,  358 => 283,  357 => 281,  356 => 279,  352 => 277,  349 => 274,  345 => 271,  343 => 270,  342 => 268,  341 => 266,  337 => 264,  335 => 262,  334 => 259,  333 => 256,  329 => 254,  325 => 252,  323 => 251,  322 => 249,  320 => 247,  318 => 246,  314 => 244,  312 => 243,  311 => 241,  309 => 239,  306 => 238,  304 => 237,  300 => 235,  298 => 234,  297 => 232,  296 => 230,  292 => 228,  290 => 226,  289 => 221,  288 => 219,  284 => 217,  282 => 215,  281 => 213,  278 => 212,  275 => 211,  272 => 210,  269 => 209,  266 => 208,  264 => 207,  260 => 205,  258 => 203,  256 => 201,  254 => 197,  253 => 196,  252 => 195,  251 => 194,  250 => 193,  249 => 192,  248 => 191,  243 => 188,  241 => 185,  240 => 182,  239 => 180,  235 => 178,  233 => 175,  232 => 172,  231 => 170,  227 => 168,  225 => 167,  224 => 165,  223 => 163,  219 => 161,  217 => 160,  216 => 158,  215 => 156,  211 => 154,  209 => 153,  208 => 152,  207 => 150,  206 => 148,  202 => 146,  200 => 145,  199 => 143,  198 => 141,  195 => 140,  191 => 138,  189 => 136,  188 => 134,  187 => 131,  185 => 128,  183 => 127,  179 => 125,  177 => 123,  176 => 122,  175 => 119,  174 => 116,  170 => 114,  167 => 111,  163 => 108,  161 => 107,  160 => 105,  159 => 103,  155 => 101,  153 => 100,  152 => 98,  151 => 96,  147 => 94,  145 => 93,  144 => 91,  143 => 89,  139 => 87,  137 => 86,  136 => 84,  135 => 82,  131 => 80,  129 => 79,  128 => 77,  127 => 75,  123 => 73,  121 => 72,  120 => 70,  119 => 68,  115 => 66,  112 => 62,  104 => 56,  99 => 55,  96 => 54,  93 => 53,  90 => 52,  87 => 51,  80 => 47,  74 => 44,  70 => 43,  67 => 42,  64 => 41,  62 => 40,  59 => 39,  53 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/infocom.html.twig", "/opt/lampp/htdocs/ticketing1/templates/components/infocom.html.twig");
    }
}
