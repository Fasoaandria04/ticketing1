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

/* __string_template__77cdedb35b28bec7cbb91f7f64fc71c5 */
class __TwigTemplate_7f398cf37a310abb9adc303270b51500 extends Template
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
        yield "                ";
        $context["rand"] = Twig\Extension\CoreExtension::random($this->env->getCharset());
        // line 4
        yield "                <div class=\"mb-3\">
                    <form name=\"domain_form";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" id=\"domain_form";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rand"] ?? null), "html", null, true);
        yield "\" method=\"post\"
                          action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Domain"), "html", null, true);
        yield "\" data-submit-once>
                        ";
        // line 7
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 7, $this->getSourceContext())->macro_hidden(...["_glpi_csrf_token", Session::getNewCSRFToken()]);
        yield "
                        ";
        // line 8
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 8, $this->getSourceContext())->macro_hidden(...["entities_id", ($context["entity"] ?? null)]);
        yield "
                        ";
        // line 9
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 9, $this->getSourceContext())->macro_hidden(...["is_recursive", (((($tmp = ($context["is_recursive"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"))]);
        yield "
                        ";
        // line 10
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 10, $this->getSourceContext())->macro_hidden(...["itemtype", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 10)]);
        yield "
                        ";
        // line 11
        yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 11, $this->getSourceContext())->macro_hidden(...["items_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 11)]);
        yield "
                        ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 12) == "Ticket")) {
            // line 13
            yield "                            ";
            yield $macros["inputs"]->getTemplateForMacro("macro_hidden", $context, 13, $this->getSourceContext())->macro_hidden(...["tickets_id", CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 13)]);
            yield "
                        ";
        }
        // line 15
        yield "
                        <div class=\"d-flex\">
                            ";
        // line 17
        $context["domain_dropdown"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Domain::dropdownDomains", [["entity" =>         // line 18
($context["entities"] ?? null), "used" =>         // line 19
($context["used"] ?? null), "display" => false]]);
        // line 22
        yield "                            ";
        yield $macros["fields"]->getTemplateForMacro("macro_htmlField", $context, 22, $this->getSourceContext())->macro_htmlField(...["", ($context["domain_dropdown"] ?? null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Domain"), ["helper" =>         // line 23
($context["helper"] ?? null)]]);
        // line 24
        yield "
                            ";
        // line 25
        yield $macros["fields"]->getTemplateForMacro("macro_dropdownField", $context, 25, $this->getSourceContext())->macro_dropdownField(...["DomainRelation", "domainrelations_id", Twig\Extension\CoreExtension::constant("DomainRelation::BELONGS"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("DomainRelation"), ["display_emptychoice" => false]]);
        // line 27
        yield "
                        </div>
                        <div class=\"d-flex flex-row-reverse pe-3\">
                            ";
        // line 30
        yield $macros["inputs"]->getTemplateForMacro("macro_submit", $context, 30, $this->getSourceContext())->macro_submit(...["additem", ($context["btn_msg"] ?? null), "btn-primary"]);
        yield "
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
        return "__string_template__77cdedb35b28bec7cbb91f7f64fc71c5";
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
        return array (  114 => 30,  109 => 27,  107 => 25,  104 => 24,  102 => 23,  100 => 22,  98 => 19,  97 => 18,  96 => 17,  92 => 15,  86 => 13,  84 => 12,  80 => 11,  76 => 10,  72 => 9,  68 => 8,  64 => 7,  60 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__77cdedb35b28bec7cbb91f7f64fc71c5", "");
    }
}
