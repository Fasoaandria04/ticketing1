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

/* __string_template__2c57812ed0e5107a3c619c7776da0a5e */
class __TwigTemplate_8a7f9cd1621ba9f7ddf27011693a3594 extends Template
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
        // line 1
        yield "                ";
        $macros["fields"] = $this->macros["fields"] = $this->load("components/form/fields_macros.html.twig", 1)->unwrap();
        // line 2
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Glpi\\Asset\\Asset_PeripheralAsset"), "html", null, true);
        yield "\">
                        ";
        // line 4
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 4, $this->getSourceContext())->macro_hiddenField(...["items_id_asset", CoreExtension::getAttribute($this->env, $this->source, ($context["asset"] ?? null), "getID", [], "method", false, false, false, 4)]);
        yield "
                        ";
        // line 5
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 5, $this->getSourceContext())->macro_hiddenField(...["itemtype_asset", CoreExtension::getAttribute($this->env, $this->source, ($context["asset"] ?? null), "getType", [], "method", false, false, false, 5)]);
        yield "
                        ";
        // line 6
        yield $macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 6, $this->getSourceContext())->macro_hiddenField(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                        ";
        // line 7
        yield (((($tmp = ($context["withtemplate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($macros["fields"]->getTemplateForMacro("macro_hiddenField", $context, 7, $this->getSourceContext())->macro_hiddenField(...["_no_history", 1])) : (""));
        yield "
                        ";
        // line 8
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemTypes", $context, 8, $this->getSourceContext())->macro_dropdownItemTypes(...["itemtype_peripheral", 0, ($context["label"] ?? null), ["types" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("directconnect_types"), "checkright" => true]]);
        // line 11
        yield "
                        <div id=\"show_items_id_peripheral";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\"></div>
                        <script>
                            \$(() => {
                                \$('select[name=\"itemtype_peripheral\"]').on('change', (e) => {
                                    const params = Object.assign(";
        // line 16
        yield json_encode(($context["dropdown_params"] ?? null));
        yield ", { itemtype: e.target.value });
                                    \$('#show_items_id_peripheral";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "').load(CFG_GLPI.root_doc + '/ajax/dropdownConnect.php', params);
                                });
                            });
                        </script>
                        <div class=\"d-flex flex-row-reverse\">
                            <button type=\"submit\" name=\"add\" class=\"btn btn-primary\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["btn_label"] ?? null), "html", null, true);
        yield "</button>
                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__2c57812ed0e5107a3c619c7776da0a5e";
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
        return array (  92 => 22,  84 => 17,  80 => 16,  73 => 12,  70 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__2c57812ed0e5107a3c619c7776da0a5e", "");
    }
}
