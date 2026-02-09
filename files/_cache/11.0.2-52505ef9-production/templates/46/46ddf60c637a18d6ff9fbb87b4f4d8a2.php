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

/* __string_template__24fb709be7adb580f70517ecf0d473c4 */
class __TwigTemplate_eacb4af530f043d877198467b82f94f5 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Cartridge"), "html", null, true);
        yield "\"/>
                        <div class=\"d-flex row\">
                            ";
        // line 5
        $context["has_cartridges"] = false;
        // line 6
        yield "                            ";
        $context["dropdown"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 7
            yield "                                ";
            $context["has_cartridges"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("CartridgeItem::dropdownForPrinter", [($context["printer"] ?? null)]);
            // line 8
            yield "                            ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        yield "                            ";
        if ((($tmp = ($context["has_cartridges"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 10, $this->getSourceContext())->macro_htmlField(...["", ($context["dropdown"] ?? null), null, ["field_class" => "col-4"]]);
            // line 12
            yield "
                                ";
            // line 13
            yield $macros["fields"]->getTemplateForMacro("macro_numberField", $context, 13, $this->getSourceContext())->macro_numberField(...["nbcart", 1, ($context["count_label"] ?? null), ["min" => 1, "max" => 5, "field_class" => "col-4"]]);
            // line 17
            yield "
                                ";
            // line 18
            $context["btn_install"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 19
                yield "                                    <input type=\"hidden\" name=\"printers_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["printer"] ?? null), "getID", [], "method", false, false, false, 19), "html", null, true);
                yield "\">
                                    <input type=\"submit\" name=\"install\" value=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["install_label"] ?? null), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                                    <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                                ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "                                ";
            yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 23, $this->getSourceContext())->macro_htmlField(...["", ($context["btn_install"] ?? null), null, ["no_label" => true, "field_class" => "col-4", "mb" => "mb-2"]]);
            // line 27
            yield "
                            ";
        }
        // line 29
        yield "                        </div>
                    </form>
                </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__24fb709be7adb580f70517ecf0d473c4";
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
        return array (  103 => 29,  99 => 27,  96 => 23,  90 => 21,  86 => 20,  81 => 19,  79 => 18,  76 => 17,  74 => 13,  71 => 12,  68 => 10,  65 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__24fb709be7adb580f70517ecf0d473c4", "");
    }
}
