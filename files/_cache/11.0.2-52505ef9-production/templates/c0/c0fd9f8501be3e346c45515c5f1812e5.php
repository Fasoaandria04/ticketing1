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

/* pages/tools/item_project.html.twig */
class __TwigTemplate_6a11ca199c08a7e8c7c281a704ee2400 extends Template
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
        yield "
";
        // line 36
        if ((($tmp = ($context["can_edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Item_Project"), "html", null, true);
            yield "\" class=\"mb-2\">
        ";
            // line 38
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 38, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
            yield "
        ";
            // line 39
            if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Project")) {
                // line 40
                yield "            ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 40, $this->getSourceContext())->macro_hidden(...["projects_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 40)]);
                yield "
            <div class=\"d-flex\">
                ";
                // line 42
                yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 42, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["items_id", __("Add an item"), ["itemtypes" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("project_asset_types"), "used" =>                 // line 44
($context["used"] ?? null), "entity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 45
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 45), "entity_sons" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 46
($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]]);
                // line 47
                yield "
            </div>
        ";
            } else {
                // line 50
                yield "            ";
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 50, $this->getSourceContext())->macro_hidden(...["items_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 50)]);
                yield "
            ";
                // line 51
                yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 51, $this->getSourceContext())->macro_hidden(...["itemtype", get_class(($context["item"] ?? null))]);
                yield "
            <div class=\"d-flex\">
                ";
                // line 53
                yield $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Project", ["entity" => CoreExtension::getAttribute($this->env, $this->source,                 // line 54
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54), "used" =>                 // line 55
($context["used"] ?? null)]);
                // line 56
                yield "
            </div>
        ";
            }
            // line 59
            yield "        <div class=\"d-flex flex-row-reverse pe-2\">
            ";
            // line 60
            yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 60, $this->getSourceContext())->macro_submit(...["add", _x("button", "Add"), 1]);
            yield "
        </div>
    </form>
";
        }
        // line 64
        yield "
";
        // line 65
        yield Twig\Extension\CoreExtension::include($this->env, $context, "components/datatable.html.twig", ($context["datatable_params"] ?? null), false);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tools/item_project.html.twig";
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
        return array (  113 => 65,  110 => 64,  103 => 60,  100 => 59,  95 => 56,  93 => 55,  92 => 54,  91 => 53,  86 => 51,  81 => 50,  76 => 47,  74 => 46,  73 => 45,  72 => 44,  71 => 42,  65 => 40,  63 => 39,  59 => 38,  54 => 37,  52 => 36,  49 => 35,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/tools/item_project.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/tools/item_project.html.twig");
    }
}
