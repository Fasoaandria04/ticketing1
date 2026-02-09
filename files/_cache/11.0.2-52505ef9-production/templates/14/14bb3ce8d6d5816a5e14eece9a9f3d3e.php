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

/* pages/assets/consumable_list.html.twig */
class __TwigTemplate_5b4ef3673d5adf83575bbae4ec31b079 extends Template
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
<div class=\"px-3 py-2 search-no-forced-height\">
    <form method=\"POST\" action=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 36), "html", null, true);
        yield "\">

        <div class=\"d-flex flex-wrap\">
            <div class=\"col-12 col-xxl-12 flex-column\">
                <div class=\"d-flex flex-row flex-wrap flex-xl-nowrap\">
                    <div class=\"row flex-row align-items-start flex-grow-1\">
                        <div class=\"row flex-row\">

                            ";
        // line 44
        $context["label"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 45
            yield "                                <h2>
                                    <span class=\"me-2\">
                                        ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(Twig\Extension\CoreExtension::sprintf("Total: %s, New: %s, Used: %s", (            // line 48
($context["count_unused"] ?? null) + ($context["count_used"] ?? null)),             // line 49
($context["count_unused"] ?? null),             // line 50
($context["count_used"] ?? null))), "html", null, true);
            // line 51
            yield "
                                    </span>
                                </h2>
                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "
                            ";
        // line 56
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 56, $this->getSourceContext())->macro_htmlField(...["",         // line 58
($context["label"] ?? null), "", ["field_class" => "col-12 col-sm-3", "label_class" => " "]]);
        // line 64
        yield "

                            ";
        // line 66
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "                                <input type=\"hidden\" name=\"consumableitems_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["parent"] ?? null), "getID", [], "method", false, false, false, 67), "html", null, true);
            yield "\" />
                                ";
            // line 68
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 68, $this->getSourceContext())->macro_numberField(...["to_add", 1, "", ["min" => 1, "step" => 1, "field_class" => "col-12 col-sm-2", "label_class" => "col-xxl-5"]]);
            // line 78
            yield "

                                ";
            // line 80
            $context["add_several"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 81
                yield "                                    <input
                                        type=\"submit\"
                                        name=\"add_several\"
                                        value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add consumables"), "html", null, true);
                yield "\"
                                        class='btn btn-primary'
                                    />
                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 88
            yield "
                                ";
            // line 89
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 89, $this->getSourceContext())->macro_htmlField(...["",             // line 91
($context["add_several"] ?? null), "", ["field_class" => "col-12 col-sm-1", "label_class" => "col-xxl-1"]]);
            // line 97
            yield "
                                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\" />
                            ";
        }
        // line 100
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    ";
        // line 107
        if ((($context["count_unused"] ?? null) > 0)) {
            // line 108
            yield "        <div class=\"unused-consumables mb-4\">
            <h3>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(Twig\Extension\CoreExtension::sprintf("%s New consumables", ($context["count_unused"] ?? null))), "html", null, true);
            yield "</h3>
            ";
            // line 110
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Search\\SearchEngine::show", [($context["itemtype"] ?? null), ["criteria" =>             // line 111
($context["criteria_unused"] ?? null), "push_history" => false, "showmassiveactions" =>             // line 113
($context["can_edit"] ?? null), "hide_criteria" => true, "init_session_data" => true]]);
            // line 117
            yield "        </div>
    ";
        }
        // line 119
        yield "
    ";
        // line 120
        if ((($context["count_used"] ?? null) > 0)) {
            // line 121
            yield "        <div class=\"used-consumables mb-4\">
            <h3> ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__(Twig\Extension\CoreExtension::sprintf("%s Used consumables", ($context["count_used"] ?? null))), "html", null, true);
            yield " </h3>
            ";
            // line 123
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("\\Glpi\\Search\\SearchEngine::show", [($context["itemtype"] ?? null), ["criteria" =>             // line 124
($context["criteria_used"] ?? null), "push_history" => false, "showmassiveactions" =>             // line 126
($context["can_edit"] ?? null), "hide_criteria" => true, "init_session_data" => true]]);
            // line 130
            yield "        </div>
    ";
        }
        // line 132
        yield "</div>

<style>
    /* Hide \"Use date\" and \"Give to\" for unused consumables as they will have no
     values for these fields */
    .unused-consumables th[data-searchopt-id=\"5\"],
    .unused-consumables td[data-searchopt-content-id=\"5\"],
    .unused-consumables th[data-searchopt-id=\"6\"],
    .unused-consumables td[data-searchopt-content-id=\"6\"]
    {
        display: none;
    }

    /* Hide \"Consumable model\" for all consumables as they all have the same
     parent on this page*/
    .unused-consumables th[data-searchopt-id=\"8\"],
    .unused-consumables td[data-searchopt-content-id=\"8\"],
    .used-consumables th[data-searchopt-id=\"8\"],
    .used-consumables td[data-searchopt-content-id=\"8\"]
    {
        display: none;
    }

    /* Hack to display an icon as a column header */
    .unused-consumables th[data-searchopt-id=\"7\"],
    .used-consumables th[data-searchopt-id=\"7\"]
    {
        font-size: 0;
    }
    .unused-consumables th[data-searchopt-id=\"7\"]::before,
    .used-consumables th[data-searchopt-id=\"7\"]::before
    {
        font-family: \"tabler-icons\" !important;
        content: \"\\f65d\";
        font-size: 0.8rem;
        font-style: normal;
        font-weight: normal;
        line-height: 2; /* Easiest way to deal with vertical align here */
    }

</style>

<script>
    // Trigger search reload when infocom are updated
    \$('div.modal[id^=\"infocomConsumable\"]').on('hide.bs.modal', () => {
        // Try finding a fluid search instance
        const search_display = \$('.ajax-container.search-display-data');
        try {
            if (search_display.length === 1 && search_display.data('js_class') !== undefined) {
                // Trigger a reload of just the results
                search_display.data('js_class').view.refreshResults();
            } else {
                // There is no (or multiple) search results, reload the page
                window.location.reload();
            }
        } catch (err) {
            window.location.reload();
        }
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
        return "pages/assets/consumable_list.html.twig";
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
        return array (  178 => 132,  174 => 130,  172 => 126,  171 => 124,  170 => 123,  166 => 122,  163 => 121,  161 => 120,  158 => 119,  154 => 117,  152 => 113,  151 => 111,  150 => 110,  146 => 109,  143 => 108,  141 => 107,  132 => 100,  127 => 98,  124 => 97,  122 => 91,  121 => 89,  118 => 88,  110 => 84,  105 => 81,  103 => 80,  99 => 78,  97 => 68,  92 => 67,  90 => 66,  86 => 64,  84 => 58,  83 => 56,  80 => 55,  73 => 51,  71 => 50,  70 => 49,  69 => 48,  68 => 47,  64 => 45,  62 => 44,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/assets/consumable_list.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/assets/consumable_list.html.twig");
    }
}
