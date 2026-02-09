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

/* pages/management/item_line.html.twig */
class __TwigTemplate_70a6ff804ac0290d41fc4867c69562d0 extends Template
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
<div class=\"mb-3\">
    <form method=\"post\" action=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Item_Line"), "html", null, true);
        yield "\" data-submit-once>
        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
        <div class=\"d-flex\">
            ";
        // line 39
        if ((($tmp = ($context["from_line"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                <input type=\"hidden\" name=\"lines_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["peer_id"] ?? null), "html", null, true);
            yield "\">
                ";
            // line 41
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownItemsFromItemtypes", $context, 41, $this->getSourceContext())->macro_dropdownItemsFromItemtypes(...["items_id", __("Add an item"), ["itemtypes" => $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("line_types"), "used" =>             // line 43
($context["used"] ?? null), "entity_restrict" =>             // line 44
($context["entity_restrict"] ?? null)]]);
            // line 45
            yield "
            ";
        } else {
            // line 47
            yield "                <input type=\"hidden\" name=\"itemtype\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["peer_itemtype"] ?? null), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["peer_id"] ?? null), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"_from\" value=\"item\">
                ";
            // line 50
            yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 50, $this->getSourceContext())->macro_dropdownField(...["Line", "lines_id", "", __("Add a phone line"), ["used" =>             // line 51
($context["used"] ?? null), "entity_restrict" =>             // line 52
($context["entity_restrict"] ?? null)]]);
            // line 53
            yield "
            ";
        }
        // line 55
        yield "            <div>
                <button type=\"submit\" name=\"add\" class=\"btn btn-primary ms-3\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(_x("button", "Add"), "html", null, true);
        yield "</button>
            </div>
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/management/item_line.html.twig";
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
        return array (  96 => 56,  93 => 55,  89 => 53,  87 => 52,  86 => 51,  85 => 50,  80 => 48,  75 => 47,  71 => 45,  69 => 44,  68 => 43,  67 => 41,  62 => 40,  60 => 39,  55 => 37,  51 => 36,  47 => 34,  45 => 33,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/management/item_line.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/management/item_line.html.twig");
    }
}
