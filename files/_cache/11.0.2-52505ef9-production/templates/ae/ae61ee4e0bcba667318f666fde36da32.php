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

/* components/search/displaypreference_config.html.twig */
class __TwigTemplate_a2c6a5960396f9e3ebf12b54bcd46fdd extends Template
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
<div id=\"tabsbody\" class=\"m-n2 display_preference_config\">
    <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["itemtype"] ?? null), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"users_id\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["users_id"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 38
        if ((($tmp =  !($context["available_itemtype"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These preferences cannot be edited at this time. The item type no longer exists or is provided by a plugin that is not enabled."), "html", null, true);
            yield "
        </div>
    ";
        } else {
            // line 43
            yield "        ";
            if ((($tmp = ($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "            <div class=\"my-1 me-1\">
                <div class=\"alert alert-secondary\">
                    <i class=\"ti ti-info-circle\"></i>
                    <i>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("These preferences are used by everyone that does not have a personal view configured."), "html", null, true);
                yield "</i>
                </div>
            </div>
        ";
            }
            // line 51
            yield "        ";
            if (( !($context["is_global"] ?? null) &&  !($context["has_personal"] ?? null))) {
                // line 52
                yield "            <div class=\"alert alert-warning mt-3\">
                ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("No personal criteria. Create personal parameters?"), "html", null, true);
                yield "
                <button type=\"button\" class=\"btn btn-primary ms-3\" name=\"activate\" value=\"1\">
                    <i class=\"ti ti-plus\"></i>
                    <span>";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Create"), "html", null, true);
                yield "</span>
                </button>
            </div>
        ";
            } else {
                // line 60
                yield "            <div class=\"pt-3\">
                ";
                // line 61
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["available_to_add"] ?? null)) > 0)) {
                    // line 62
                    yield "                    ";
                    $context["add_opt_btn"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 63
                        yield "                        <button type=\"button\" name=\"add_opt\" class=\"btn btn-primary ms-1 d-inline-block\">
                            <i class=\"ti ti-plus\"></i>
                            <span>";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
                        yield "</span>
                        </button>
                    ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 68
                    yield "                    ";
                    $context["result_template_js"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 69
                        yield "                        ";
                        // line 70
                        yield "                        (opt) => {
                            if (\$(`li[data-opt-id=\"\${opt.id}\"]`).length > 0) {
                                return null;
                            }
                            ";
                        // line 75
                        yield "                            return opt.text;
                        }
                    ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 78
                    yield "
                    <div class=\"d-flex justify-content-between mb-2\">
                        ";
                    // line 80
                    yield $macros["fields"]->getTemplateForMacro("macro_dropdownArrayField", $context, 80, $this->getSourceContext())->macro_dropdownArrayField(...["num", null, ($context["available_to_add"] ?? null), "", ["field_class" => "col-12 col-sm-6 d-flex", "no_label" => true, "add_field_html" =>                     // line 83
($context["add_opt_btn"] ?? null), "templateResult" =>                     // line 84
($context["result_template_js"] ?? null), "mb" => "", "aria_label" => __("Select an option to add")]]);
                    // line 87
                    yield "

                        ";
                    // line 89
                    if ((($tmp =  !($context["is_global"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 90
                        yield "                            <button type=\"button\" class=\"btn btn-ghost-danger me-1\" name=\"disable\" value=\"1\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete personal view"), "html", null, true);
                        yield "</button>
                        ";
                    }
                    // line 92
                    yield "                    </div>
                ";
                }
                // line 94
                yield "            </div>
            <ul class=\"list-group\">
                ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["entries"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((((CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "fixed", [], "array", true, true, false, 96) &&  !(null === (($_v0 = ($context["v"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["fixed"] ?? null) : null)))) ? ((($_v1 = ($context["v"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["fixed"] ?? null) : null)) : (false)) == true); }));
                foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                    // line 97
                    yield "                    <li data-opt-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["opt"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
                    yield "\" data-fixed=\"true\" class=\"list-group-item py-2 disabled px-2\">
                        <i class=\"ti ti-grip-vertical bs-invisible\"></i>
                        <span>";
                    // line 99
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["opt"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
                    yield "</span>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['opt'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, ($context["entries"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((((CoreExtension::getAttribute($this->env, $this->source, ($context["v"] ?? null), "fixed", [], "array", true, true, false, 102) &&  !(null === (($_v4 = ($context["v"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["fixed"] ?? null) : null)))) ? ((($_v5 = ($context["v"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["fixed"] ?? null) : null)) : (false)) != true); }));
                foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                    // line 103
                    yield "                    ";
                    $context["name_prefix"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v6 = $context["opt"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["group"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((($_v7 = $context["opt"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["group"] ?? null) : null)) : (""));
                    // line 104
                    yield "                    <li data-opt-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["opt"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["id"] ?? null) : null), "html", null, true);
                    yield "\" class=\"cursor-grab list-group-item py-2 d-flex px-2 align-items-center\">
                        <i class=\"ti ti-grip-vertical\"></i>
                        <span class=\"flex-fill ms-1\">";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["name_prefix"] ?? null) . (($_v9 = $context["opt"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["name"] ?? null) : null)), "html", null, true);
                    yield "</span>
                        <span>
                            ";
                    // line 108
                    if (( !CoreExtension::getAttribute($this->env, $this->source, $context["opt"], "noremove", [], "array", true, true, false, 108) || ((($_v10 = $context["opt"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["noremove"] ?? null) : null) != true))) {
                        // line 109
                        yield "                                <button type=\"button\" name=\"remove_opt\" class=\"btn btn-icon btn-sm btn-ghost-danger\" title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
                        yield "\">
                                    <i class=\"ti ti-x\"></i>
                                </button>
                            ";
                    }
                    // line 113
                    yield "                        </span>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['opt'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                yield "            </ul>
        ";
            }
            // line 118
            yield "    ";
        }
        // line 119
        yield "</div>
<script>
    \$(() => {
        const config_forms = \$(`#tabsbody.display_preference_config`);
        // Select nothing by default because select2 has no problem defaulting the selection to the first item even if it is filtered out
        config_forms.find(`select[name=\"num\"]`).val('').trigger('change');
        // Make sure the table rows are sortable only once
        const sortables = `#tabsbody.display_preference_config ul.list-group`;
        try {
            sortable(sortables, 'destroy');
        } catch (e) {}
        sortable(sortables, {
            acceptFrom: '#tabsbody.display_preference_config ul.list-group',
            items: 'li:not([data-fixed])',
        });

        function updateOrder(element) {
            const el = \$(element);
            const ul = el.is('ul') ? el : el.find('ul');

            const opts = [];
            ul.find('li[data-opt-id]:not([data-fixed])').each((i, el) => {
                opts.push(\$(el).data('opt-id'));
            });
            // disable sorting temporarily
            sortable(sortables, 'disable');
            \$.ajax({
                url: \"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/displaypreference.php"), "html", null, true);
        yield "\",
                type: 'POST',
                data: {
                    'action': 'update_order',
                    'itemtype': config_forms.find(`input[name=\"itemtype\"]`).val(),
                    'users_id': config_forms.find(`input[name=\"users_id\"]`).val(),
                    'interface': '";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["interface"] ?? null), "html", null, true);
        yield "',
                    'opts': opts,
                },
            }).then(() => {
                sortable(sortables, 'enable');
            }, () => {
                // Failure. Move item back to original position
                const dragged = e.detail.item;
                const original_index = e.detail.origin.elementIndex;
                if (original_index === 0) {
                    \$(dragged).insertBefore(dragged.parent().find(`li:eq(\${original_index})`));
                } else {
                    \$(dragged).insertAfter(dragged.parent().find(`li:eq(\${original_index})`));
                }
                sortable(sortables, 'enable');
            });
        }

        \$(sortables).off('sortupdate').on('sortupdate', (e) => {
            updateOrder(e.target);
        });
        const submitForm = (specific_form, data) => {
            data['itemtype'] = specific_form.find(`input[name=\"itemtype\"]`).val();
            data['users_id'] = specific_form.find(`input[name=\"users_id\"]`).val();
            // Disable all buttons since there can only be one action done at a time
            config_forms.find(`button`).prop('disabled', true);
            \$.ajax({
                url: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/displaypreference.php"), "html", null, true);
        yield "\",
                type: 'POST',
                data: data,
            }).then(() => {
                // This script is inside an iframe, so this only reloads the iframe
                window.location.reload();
            }, () => {
                // This script is inside an iframe, so this only reloads the iframe
                window.location.reload();
            });
        };
        config_forms.find(`button[name=\"activate\"]`).on(`click`, (e) => {
            submitForm(\$(e.target).closest('.display_preference_config'), {activate: 1});
        });

        config_forms.find(`button[name=\"disable\"]`).on(`click`, (e) => {
            submitForm(\$(e.target).closest('.display_preference_config'), {disable: 1});
        });

        config_forms.find(`button[name=\"add_opt\"]`).on(`click`, (e) => {
            const specific_form = \$(e.target).closest('.display_preference_config');
            const num_select = specific_form.find(`select[name=\"num\"]`);
            const num = num_select.val();
            if (num === null) {
                return;
            }
            // Label is the text of the selected option's optgroup + ' - ' + the text of the selected option
            // unless it is in the first optgroup, then it is just the text of the selected option
            const opt = num_select.find(`option[value=\"\${num}\"]`);
            const label = opt.closest('optgroup').index() === 0 ? opt.text() : `\${opt.closest('optgroup').attr('label')} - \${opt.text()}`;

            const tbody = specific_form.find(`ul.list-group`);
            tbody.append(`
               <li data-opt-id=\"\${num}\" class=\"cursor-grab list-group-item py-2 d-flex px-2 align-items-center\">
                  <i class=\"ti ti-grip-vertical\"></i>
                  <span class=\"flex-fill ms-1\">\${label}</span>
                  <span>
                        <button type=\"button\" name=\"remove_opt\" class=\"btn btn-icon btn-sm btn-ghost-danger\" title=\"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Delete permanently"), "html", null, true);
        yield "\">
                           <i class=\"ti ti-x\"></i>
                        </button>
                  </span>
               </li>
           `);
            // Reset selection to first item. templateResult will automatically hide the item, but it doesn't remove it as the active selection.
            // New selection will be blank. Doesn't seem to be a good way to reset the selection to the first item that isn't hidden by the result template.
            num_select.val('').trigger('change');
            updateOrder(specific_form);
        });

        config_forms.on(`click`, 'button[name=\"remove_opt\"]', (e) => {
            const specific_form = \$(e.target).closest('.display_preference_config');
            const num_select = specific_form.find(`select[name=\"num\"]`);
            const list = \$(e.target).closest('ul');
            \$(e.target).closest('li').remove();
            // Trigger an update for the select to re-run the templateResult function
            num_select.find(`select[name=\"num\"]`).trigger('change');
            updateOrder(list);
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/search/displaypreference_config.html.twig";
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
        return array (  339 => 216,  299 => 179,  269 => 152,  260 => 146,  231 => 119,  228 => 118,  224 => 116,  216 => 113,  208 => 109,  206 => 108,  201 => 106,  195 => 104,  192 => 103,  187 => 102,  178 => 99,  172 => 97,  168 => 96,  164 => 94,  160 => 92,  154 => 90,  152 => 89,  148 => 87,  146 => 84,  145 => 83,  144 => 80,  140 => 78,  134 => 75,  128 => 70,  126 => 69,  123 => 68,  116 => 65,  112 => 63,  109 => 62,  107 => 61,  104 => 60,  97 => 56,  91 => 53,  88 => 52,  85 => 51,  78 => 47,  73 => 44,  70 => 43,  64 => 40,  61 => 39,  59 => 38,  55 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/search/displaypreference_config.html.twig", "/opt/lampp/htdocs/ticketing1/templates/components/search/displaypreference_config.html.twig");
    }
}
