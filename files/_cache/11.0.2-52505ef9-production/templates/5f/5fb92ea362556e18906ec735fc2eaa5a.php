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

/* __string_template__98c66946c52da320174c98d2b4044e21 */
class __TwigTemplate_eb6f194cad7b2df68cfbd4863460fb8c extends Template
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
        yield "            <div id=\"viewcartridge\"></div>
            <script>
                function viewEditCartridge(cart_id) {
                    \$('#viewcartridge').load(
                        '";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/viewsubitem.php"), "html", null, true);
        yield "',
                        {
                            type: 'Cartridge',
                            parenttype: 'Printer',
                            printers_id: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["printer_id"] ?? null), "html", null, true);
        yield ",
                            id: cart_id
                        }
                    );
                }
                \$('tr[data-itemtype=\"Cartridge\"]').on('click', function() {
                    viewEditCartridge(\$(this).data('id'));
                });
            </script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__98c66946c52da320174c98d2b4044e21";
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
        return array (  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__98c66946c52da320174c98d2b4044e21", "");
    }
}
