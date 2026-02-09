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

/* __string_template__033faadec4c7a4e588e98c2c20b086a9 */
class __TwigTemplate_95c71b8316e3f1c5d6e39dcf9839abb6 extends Template
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
        yield "                ";
        $macros["inputs"] = $this->macros["inputs"] = $this->load("components/form/basic_inputs_macros.html.twig", 2)->unwrap();
        // line 3
        yield "                <div class=\"mb-3\">
                    <form method=\"post\" action=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Contract_Item"), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["item"] ?? null)), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 6), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
                        <div class=\"d-flex\">
                            <div class=\"col-auto\">
                            ";
        // line 10
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 10, $this->getSourceContext())->macro_dropdownField(...["Contract", "contracts_id", 0, null, ["add_field_class" => "d-inline", "no_label" => true, "entity" => (($_v0 = CoreExtension::getAttribute($this->env, $this->source,         // line 13
($context["item"] ?? null), "fields", [], "any", false, false, false, 13)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["entities_id"] ?? null) : null), "used" =>         // line 14
($context["used"] ?? null), "expired" => false]]);
        // line 16
        yield "
                            </div>
                            <div class=\"col-auto\">
                            ";
        // line 19
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 19, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add"), 1, ["class" => "btn btn-primary ms-1", "icon" => "ti ti-link"]]);
        yield "
                           </div>
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
        return "__string_template__033faadec4c7a4e588e98c2c20b086a9";
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
        return array (  78 => 19,  73 => 16,  71 => 14,  70 => 13,  69 => 10,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__033faadec4c7a4e588e98c2c20b086a9", "");
    }
}
