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

/* __string_template__1f5ae5b8175e3c5187a224dde27b11e9 */
class __TwigTemplate_bbb0e1bc53a48946588c10e9acd7a45f extends Template
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
        yield "            <div class=\"firstbloc\">
            <form id=\"reservation_actions\" class=\"d-flex \" action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("ReservationItem"), "html", null, true);
        yield "\" method=\"post\">
                <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 3), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(get_class(($context["item"] ?? null)), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 5), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"is_recursive\" value=\"";
        // line 6
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield "\">
                <input type=\"hidden\" name=\"is_active\" value=\"";
        // line 7
        yield (((($tmp = ($context["reservable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((($tmp = ($context["toggle_state"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (0) : (1))) : (1));
        yield "\">
                ";
        // line 8
        if ((($tmp = ($context["reservable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "                    <button name=\"update\" class=\"btn btn-";
            yield (((($tmp = ($context["toggle_state"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("primary"));
            yield " mx-1\">
                        <i class=\"";
            // line 10
            yield (((($tmp = ($context["toggle_state"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-toggle-right") : ("ti ti-toggle-left"));
            yield " me-2\"></i>
                        ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toggle_state_label"] ?? null), "html", null, true);
            yield "
                    </button>
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["id"] ?? null), "html", null, true);
            yield "\">
                    <script>
                        \$(() => \$('#reservation_actions button[name=\"purge\"]').on('click', () => confirm('";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["purge_warning"] ?? null), "html", null, true);
            yield "')));
                    </script>
                ";
        }
        // line 18
        yield "                <button name=\"";
        yield (((($tmp = ($context["toggle_reservable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("purge") : ("add"));
        yield "\" class=\"btn btn-";
        yield (((($tmp = ($context["toggle_reservable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("primary"));
        yield " mx-1\">
                    <i class=\"";
        // line 19
        yield (((($tmp = ($context["toggle_reservable"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ti ti-ban") : ("ti ti-check"));
        yield " me-2\"></i>
                    ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["toggle_reservable_label"] ?? null), "html", null, true);
        yield "
                </button>
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
        yield "\">
            </form>
            </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "__string_template__1f5ae5b8175e3c5187a224dde27b11e9";
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
        return array (  112 => 22,  107 => 20,  103 => 19,  96 => 18,  90 => 15,  85 => 13,  80 => 11,  76 => 10,  71 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "__string_template__1f5ae5b8175e3c5187a224dde27b11e9", "");
    }
}
