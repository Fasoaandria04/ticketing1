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

/* components/form/item_device.html.twig */
class __TwigTemplate_06fd11725af058c5a203716a8747d712 extends Template
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
        $context["no_header"] = ((array_key_exists("no_header", $context)) ? (Twig\Extension\CoreExtension::default(($context["no_header"] ?? null), ( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 34), false)) : (false))))) : (( !CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 34) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["_get"] ?? null), "_in_modal", [], "any", false, false, false, 34), false)) : (false)))));
        // line 35
        $context["bg"] = "";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDeleted", [], "method", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "   ";
            $context["bg"] = "asset-deleted";
        }
        // line 39
        yield "
<div class=\"asset ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["bg"] ?? null), "html", null, true);
        yield "\">
   ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/header.html.twig", ["in_twig" => true]);
        yield "

   ";
        // line 43
        $context["params"] = (((array_key_exists("params", $context) &&  !(null === $context["params"]))) ? ($context["params"]) : ([]));
        // line 44
        yield "   ";
        $context["field_options"] = ["locked_fields" => CoreExtension::getAttribute($this->env, $this->source,         // line 45
($context["item"] ?? null), "getLockedFields", [], "method", false, false, false, 45)];
        // line 47
        yield "
   <div class=\"card-body d-flex flex-wrap\">
      <div class=\"col-12 col-xxl-12 flex-column\">
         <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
            <div class=\"row flex-row align-items-start flex-grow-1\">
               <div class=\"row flex-row\">
                  <script>
                     function showField(item) {
                        // BC - Remove in 11.0
                        showDisclosablePasswordField(item);
                     }
                     function hideField(item) {
                        // BC - Remove in 11.0
                        hideDisclosablePasswordField(item);
                     }
                     function copyToClipboard(item) {
                        // BC - Remove in 11.0
                        copyDisclosablePasswordFieldToClipboard(item);
                     }
                  </script>

                  ";
        // line 68
        $context["field_options"] = Twig\Extension\CoreExtension::merge(($context["field_options"] ?? null), ($context["params"] ?? null));
        // line 69
        yield "
                  <input type=\"hidden\" name=";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1"), "html", null, true);
        yield " value=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "itemtype_1")] ?? null) : null), "html", null, true);
        yield ">



                  ";
        // line 74
        if ((($tmp = ($context["item1"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 75, $this->getSourceContext())->macro_htmlField(...[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 76
($context["item"] ?? null), "itemtype_1"), CoreExtension::getAttribute($this->env, $this->source,             // line 77
($context["item1"] ?? null), "getLink", [], "method", false, false, false, 77), CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["item1"] ?? null), "getTypeName", [1], "method", false, false, false, 78),             // line 79
($context["field_options"] ?? null)]);
            // line 80
            yield "
                  ";
        } else {
            // line 82
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 82, $this->getSourceContext())->macro_htmlField(...["", __("No associated item"), __("Itemtype"),             // line 86
($context["field_options"] ?? null)]);
            // line 87
            yield "
                  ";
        }
        // line 89
        yield "
                  ";
        // line 90
        if ((($tmp = ($context["device"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 91, $this->getSourceContext())->macro_htmlField(...[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 92
($context["item"] ?? null), "itemtype_2"), CoreExtension::getAttribute($this->env, $this->source,             // line 93
($context["device"] ?? null), "getLink", [], "method", false, false, false, 93), _n("Component", "Components", 1),             // line 95
($context["field_options"] ?? null)]);
            // line 96
            yield "
                  ";
        } else {
            // line 98
            yield "                     ";
            $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")]);
            // line 99
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 99, $this->getSourceContext())->macro_dropdownField(...[            // line 100
($context["dropdown_itemtype"] ?? null), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(            // line 101
($context["item"] ?? null), "items_id_2"), (($_v1 = CoreExtension::getAttribute($this->env, $this->source,             // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$this->extensions['Glpi\Application\View\Extension\PhpExtension']->getStatic(($context["item"] ?? null), "items_id_2")] ?? null) : null), _n("Component", "Components", 1),             // line 104
($context["field_options"] ?? null)]);
            // line 105
            yield "
                  ";
        }
        // line 107
        yield "
                  ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["specificities_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["specificities"]) {
            // line 109
            yield "                     ";
            if ((($tmp = (($_v2 = $context["specificities"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["canread"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "
                        ";
                // line 111
                $context["specific_field_options"] = ($context["field_options"] ?? null);
                // line 112
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["specificities"], "tooltip", [], "array", true, true, false, 112)) {
                    // line 113
                    yield "                           ";
                    $context["specific_field_options"] = Twig\Extension\CoreExtension::merge(($context["specific_field_options"] ?? null), ["helper" => (($_v3 = $context["specificities"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["tooltip"] ?? null) : null)]);
                    // line 114
                    yield "                        ";
                }
                // line 115
                yield "
                        ";
                // line 116
                if (((($_v4 = $context["specificities"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["datatype"] ?? null) : null) == "dropdown")) {
                    // line 117
                    yield "                           ";
                    $context["dropdown_itemtype"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("getItemtypeForForeignKeyField", [(($_v5 = $context["specificities"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["field"] ?? null) : null)]);
                    // line 118
                    yield "                           ";
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 118, $this->getSourceContext())->macro_dropdownField(...[                    // line 119
($context["dropdown_itemtype"] ?? null), (($_v6 =                     // line 120
$context["specificities"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["field"] ?? null) : null), (($_v7 =                     // line 121
$context["specificities"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["value"] ?? null) : null), (($_v8 =                     // line 122
$context["specificities"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["label"] ?? null) : null), Twig\Extension\CoreExtension::merge((($_v9 =                     // line 123
$context["specificities"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["dropdown_options"] ?? null) : null), ($context["specific_field_options"] ?? null))]);
                    // line 124
                    yield "
                        ";
                } elseif ((($tmp = (($_v10 =                 // line 125
$context["specificities"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["protected"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 126
                    yield "                           ";
                    yield $macros["fields"]->getTemplateForMacro("macro_passwordField", $context, 126, $this->getSourceContext())->macro_passwordField(...[(($_v11 =                     // line 127
$context["specificities"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["field"] ?? null) : null), (($_v12 =                     // line 128
$context["specificities"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["value"] ?? null) : null), (($_v13 =                     // line 129
$context["specificities"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["label"] ?? null) : null), Twig\Extension\CoreExtension::merge(                    // line 130
($context["specific_field_options"] ?? null), ["id" => (($_v14 =                     // line 131
$context["specificities"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["protected_field_id"] ?? null) : null), "is_disclosable" => true])]);
                    // line 134
                    yield "
                        ";
                } elseif (((($_v15 =                 // line 135
$context["specificities"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["datatype"] ?? null) : null) == "integer")) {
                    // line 136
                    yield "                           ";
                    yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 136, $this->getSourceContext())->macro_numberField(...[(($_v16 =                     // line 137
$context["specificities"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["field"] ?? null) : null), (($_v17 =                     // line 138
$context["specificities"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["value"] ?? null) : null), (($_v18 =                     // line 139
$context["specificities"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["label"] ?? null) : null),                     // line 140
($context["specific_field_options"] ?? null)]);
                    // line 141
                    yield "
                        ";
                } else {
                    // line 143
                    yield "                           ";
                    yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 143, $this->getSourceContext())->macro_textField(...[(($_v19 =                     // line 144
$context["specificities"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["field"] ?? null) : null), (($_v20 =                     // line 145
$context["specificities"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["value"] ?? null) : null), (($_v21 =                     // line 146
$context["specificities"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["label"] ?? null) : null),                     // line 147
($context["specific_field_options"] ?? null)]);
                    // line 148
                    yield "
                        ";
                }
                // line 150
                yield "                     ";
            }
            // line 151
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['specificities'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "
                  ";
        // line 153
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["serial"], "method", false, false, false, 153)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 154
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_textField", $context, 154, $this->getSourceContext())->macro_textField(...["serial", (($_v22 = CoreExtension::getAttribute($this->env, $this->source,             // line 156
($context["item"] ?? null), "fields", [], "any", false, false, false, 156)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["serial"] ?? null) : null), __("Serial number"),             // line 158
($context["field_options"] ?? null)]);
            // line 159
            yield "
                  ";
        }
        // line 161
        yield "
                  ";
        // line 162
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["otherserial"], "method", false, false, false, 162)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 163
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_autoNameField", $context, 163, $this->getSourceContext())->macro_autoNameField(...["otherserial",             // line 165
($context["item"] ?? null), __("Inventory number"), 0,             // line 168
($context["field_options"] ?? null)]);
            // line 169
            yield "
                  ";
        }
        // line 171
        yield "
                  ";
        // line 172
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 172)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 173
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 173, $this->getSourceContext())->macro_dropdownField(...["Location", "locations_id", (($_v23 = CoreExtension::getAttribute($this->env, $this->source,             // line 176
($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), Twig\Extension\CoreExtension::merge(            // line 178
($context["field_options"] ?? null), ["entity" => (($_v24 = CoreExtension::getAttribute($this->env, $this->source,             // line 179
($context["item"] ?? null), "fields", [], "any", false, false, false, 179)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["entities_id"] ?? null) : null)])]);
            // line 181
            yield "
                  ";
        }
        // line 183
        yield "
                  ";
        // line 184
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["states_id"], "method", false, false, false, 184) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\State"))) {
            // line 185
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 185, $this->getSourceContext())->macro_dropdownField(...["State", "states_id", (($_v25 = CoreExtension::getAttribute($this->env, $this->source,             // line 188
($context["item"] ?? null), "fields", [], "any", false, false, false, 188)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["states_id"] ?? null) : null), __("Status"), Twig\Extension\CoreExtension::merge(            // line 190
($context["field_options"] ?? null), ["entity" => (($_v26 = CoreExtension::getAttribute($this->env, $this->source,             // line 191
($context["item"] ?? null), "fields", [], "any", false, false, false, 191)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["entities_id"] ?? null) : null), "condition" => CoreExtension::getAttribute($this->env, $this->source,             // line 192
($context["item"] ?? null), "getStateVisibilityCriteria", [], "method", false, false, false, 192)])]);
            // line 194
            yield "
                  ";
        }
        // line 196
        yield "
                  ";
        // line 197
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["users_id"], "method", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 198, $this->getSourceContext())->macro_dropdownField(...["User", "users_id", (($_v27 = CoreExtension::getAttribute($this->env, $this->source,             // line 201
($context["item"] ?? null), "fields", [], "any", false, false, false, 201)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27["users_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), Twig\Extension\CoreExtension::merge(            // line 203
($context["field_options"] ?? null), ["entity" => (($_v28 = CoreExtension::getAttribute($this->env, $this->source,             // line 204
($context["item"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28["entities_id"] ?? null) : null), "right" => "all"])]);
            // line 207
            yield "
                  ";
        }
        // line 209
        yield "
                  ";
        // line 210
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["groups_id"], "method", false, false, false, 210) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(($context["item"] ?? null), "Glpi\\Features\\AssignableItem"))) {
            // line 211
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 211, $this->getSourceContext())->macro_dropdownField(...["Group", "groups_id", (($_v29 = CoreExtension::getAttribute($this->env, $this->source,             // line 214
($context["item"] ?? null), "fields", [], "any", false, false, false, 214)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29["groups_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), Twig\Extension\CoreExtension::merge(            // line 216
($context["field_options"] ?? null), ["entity" => (($_v30 = CoreExtension::getAttribute($this->env, $this->source,             // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30["entities_id"] ?? null) : null), "condition" => ["is_itemgroup" => 1], "multiple" => (($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isUsingTrait(            // line 219
($context["item"] ?? null), "Glpi\\Features\\AssignableItem")) ? (true) : (false))])]);
            // line 221
            yield "
                  ";
        }
        // line 223
        yield "
                  ";
        // line 224
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["comment"], "method", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 225
            yield "                     ";
            yield $macros["fields"]->getTemplateForMacro("macro_textareaField", $context, 225, $this->getSourceContext())->macro_textareaField(...["comment", (($_v31 = CoreExtension::getAttribute($this->env, $this->source,             // line 227
($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31["comment"] ?? null) : null), _n("Comment", "Comments", Session::getPluralNumber()),             // line 229
($context["field_options"] ?? null)]);
            // line 230
            yield "
                  ";
        }
        // line 232
        yield "
               </div> ";
        // line 234
        yield "            </div> ";
        // line 235
        yield "         </div> ";
        // line 236
        yield "      </div> ";
        // line 237
        yield "   </div> ";
        // line 238
        yield "

   ";
        // line 240
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/form/buttons.html.twig");
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/form/item_device.html.twig";
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
        return array (  370 => 240,  366 => 238,  364 => 237,  362 => 236,  360 => 235,  358 => 234,  355 => 232,  351 => 230,  349 => 229,  348 => 227,  346 => 225,  344 => 224,  341 => 223,  337 => 221,  335 => 219,  334 => 217,  333 => 216,  332 => 214,  330 => 211,  328 => 210,  325 => 209,  321 => 207,  319 => 204,  318 => 203,  317 => 201,  315 => 198,  313 => 197,  310 => 196,  306 => 194,  304 => 192,  303 => 191,  302 => 190,  301 => 188,  299 => 185,  297 => 184,  294 => 183,  290 => 181,  288 => 179,  287 => 178,  286 => 176,  284 => 173,  282 => 172,  279 => 171,  275 => 169,  273 => 168,  272 => 165,  270 => 163,  268 => 162,  265 => 161,  261 => 159,  259 => 158,  258 => 156,  256 => 154,  254 => 153,  251 => 152,  245 => 151,  242 => 150,  238 => 148,  236 => 147,  235 => 146,  234 => 145,  233 => 144,  231 => 143,  227 => 141,  225 => 140,  224 => 139,  223 => 138,  222 => 137,  220 => 136,  218 => 135,  215 => 134,  213 => 131,  212 => 130,  211 => 129,  210 => 128,  209 => 127,  207 => 126,  205 => 125,  202 => 124,  200 => 123,  199 => 122,  198 => 121,  197 => 120,  196 => 119,  194 => 118,  191 => 117,  189 => 116,  186 => 115,  183 => 114,  180 => 113,  177 => 112,  175 => 111,  172 => 110,  169 => 109,  165 => 108,  162 => 107,  158 => 105,  156 => 104,  155 => 102,  154 => 101,  153 => 100,  151 => 99,  148 => 98,  144 => 96,  142 => 95,  141 => 93,  140 => 92,  138 => 91,  136 => 90,  133 => 89,  129 => 87,  127 => 86,  125 => 82,  121 => 80,  119 => 79,  118 => 78,  117 => 77,  116 => 76,  114 => 75,  112 => 74,  103 => 70,  100 => 69,  98 => 68,  75 => 47,  73 => 45,  71 => 44,  69 => 43,  64 => 41,  60 => 40,  57 => 39,  53 => 37,  51 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/form/item_device.html.twig", "/opt/lampp/htdocs/ticketing1/templates/components/form/item_device.html.twig");
    }
}
