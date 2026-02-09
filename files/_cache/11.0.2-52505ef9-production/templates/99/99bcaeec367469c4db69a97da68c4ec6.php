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

/* pages/admin/logs_list.html.twig */
class __TwigTemplate_e29d419341924cd6bf41f3d2ab9418ee extends Template
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
<div class=\"container px-4\">
    <div class=\"row mb-2\">
        <div class=\"col-12 col-xxl-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <a href=\"event.php\">
                        <i class=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Glpi\\Event::getIcon"), "html", null, true);
        yield " me-1\" aria-hidden=\"true\"></i>
                        <span>
                            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Glpi\\Event", Session::getPluralNumber()), "html", null, true);
        yield "
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12 col-xxl-6\">
            <div class=\"card\">
                <div class=\"card-header justify-content-between\">
                    <span class=\"fs-3\" role=\"heading\" aria-level=\"1\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Log files"), "html", null, true);
        yield "</span>

                    <div class=\"d-inline-flex\">
                        ";
        // line 55
        $context["sort_controls"] = [["key" => "filepath", "icon" => "ti ti-alphabet-latin", "label" => __("Sort by file path")], ["key" => "size", "icon" => "ti ti-file", "label" => __("Sort by size")], ["key" => "datemod", "icon" => "ti ti-clock", "label" => __("Sort by date")]];
        // line 70
        yield "
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sort_controls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_control"]) {
            // line 72
            yield "                            ";
            $context["active_order"] = ((($_v0 = $context["sort_control"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["key"] ?? null) : null) == ($context["order"] ?? null));
            // line 73
            yield "                            ";
            $context["curr_sort"] = "asc";
            // line 74
            yield "                            ";
            $context["next_sort"] = "asc";
            // line 75
            yield "                            ";
            if ((($tmp = ($context["active_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 76
                yield "                                ";
                $context["curr_sort"] = ($context["sort"] ?? null);
                // line 77
                yield "                                ";
                if ((($context["sort"] ?? null) == "asc")) {
                    // line 78
                    yield "                                    ";
                    $context["next_sort"] = "desc";
                    // line 79
                    yield "                                ";
                }
                // line 80
                yield "                            ";
            }
            // line 81
            yield "
                            <a href=\"?order=";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["sort_control"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["key"] ?? null) : null), "html", null, true);
            yield "&amp;sort=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["next_sort"] ?? null), "html", null, true);
            yield "\"
                               class=\"btn ";
            // line 83
            yield (((($tmp = ($context["active_order"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-outline-secondary") : ("btn-ghost-secondary"));
            yield " btn-sm me-1\"
                               title=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["sort_control"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["label"] ?? null) : null), "html", null, true);
            yield "\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                <i class=\"ti ti-sort-";
            // line 86
            yield (((($context["curr_sort"] ?? null) == "asc")) ? ("ascending") : ("descending"));
            yield "\"></i>
                                <i class=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = $context["sort_control"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["icon"] ?? null) : null), "html", null, true);
            yield "\"></i>
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sort_control'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                    </div>
                </div>
                <div class=\"list-group list-group-flush\">
                    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 94
            yield "                        <span class=\"list-group-item list-group-item-action d-flex justify-content-between\">
                            <a class=\"text-truncate\"
                               href=\"logviewer.php?filepath=";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((($_v4 = $context["log"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["filepath"] ?? null) : null)), "html", null, true);
            yield "\">
                                <i class=\"ti ti-file me-1\" aria-hidden=\"true\"></i>
                                <span>";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["log"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["filepath"] ?? null) : null), "html", null, true);
            yield "</span>
                            </a>
                            <span class=\"d-inline-flex\">
                                <span class=\"badge badge-outline bg-transparent fw-normal border-azure me-1\"
                                      title=\"";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("file size"), "html", null, true);
            yield "\">
                                    ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedSize((($_v6 = $context["log"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["size"] ?? null) : null)), "html", null, true);
            yield "
                                </span>
                                <span class=\"badge badge-outline bg-transparent fw-normal border-blue\"
                                      title=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("date of last modification"), "html", null, true);
            yield "\">
                                    ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v7 = $context["log"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["datemod"] ?? null) : null)), "html", null, true);
            yield "
                                </span>

                                ";
            // line 110
            if ((($context["can_clear"] ?? null) || ($context["can_delete"] ?? null))) {
                // line 111
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/logviewer.php"), "html", null, true);
                yield "\" method=\"post\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"filepath\" value=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["log"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["filepath"] ?? null) : null), "html", null, true);
                yield "\">
                                        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
                yield "\">
                                        <span>
                                            <button class=\"btn btn-sm ms-1 btn-ghost-secondary\"
                                            data-bs-toggle=\"dropdown\"
                                            title=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File actions"), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("File actions"), "html", null, true);
                yield "\">
                                                <i class=\"fas ti ti-dots-vertical\" aria-hidden=\"true\"></i>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                // line 121
                if ((($tmp = ($context["can_clear"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 122
                    yield "                                                    <li>
                                                        <button type=\"submit\" name=\"action\" value=\"empty\"
                                                                     class=\"dropdown-item\"
                                                                     title=\"";
                    // line 125
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "\"
                                                                     onclick=\"return confirm('";
                    // line 126
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to clear this file?"), "js"), "html", null, true);
                    yield "')\"
                                                                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                                            <i class=\"ti ti-file-off\" aria-hidden=\"true\"></i>
                                                            <span>";
                    // line 129
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "</span>
                                                        </button>
                                                    </li>
                                                ";
                }
                // line 133
                yield "                                                ";
                if ((($tmp = ($context["can_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 134
                    yield "                                                    <li>
                                                        <button type=\"submit\" name=\"action\" value=\"delete\"
                                                                     class=\"dropdown-item\"
                                                                     title=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                    yield "\"
                                                                     onclick=\"return confirm('";
                    // line 138
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this file?"), "js"), "html", null, true);
                    yield "')\"
                                                                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                                                            <i class=\"ti ti-trash-x\" aria-hidden=\"true\"></i>
                                                            <span>";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete file"), "html", null, true);
                    yield "</span>
                                                        </button>
                                                    </li>
                                                ";
                }
                // line 145
                yield "                                            </ul>
                                        </span>
                                    </form>
                                ";
            }
            // line 149
            yield "                            </span>
                        </span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/logs_list.html.twig";
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
        return array (  278 => 152,  270 => 149,  264 => 145,  257 => 141,  251 => 138,  247 => 137,  242 => 134,  239 => 133,  232 => 129,  226 => 126,  222 => 125,  217 => 122,  215 => 121,  206 => 117,  199 => 113,  195 => 112,  190 => 111,  188 => 110,  182 => 107,  178 => 106,  172 => 103,  168 => 102,  161 => 98,  156 => 96,  152 => 94,  148 => 93,  143 => 90,  134 => 87,  130 => 86,  125 => 84,  121 => 83,  115 => 82,  112 => 81,  109 => 80,  106 => 79,  103 => 78,  100 => 77,  97 => 76,  94 => 75,  91 => 74,  88 => 73,  85 => 72,  81 => 71,  78 => 70,  76 => 55,  70 => 52,  56 => 41,  51 => 39,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/logs_list.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/admin/logs_list.html.twig");
    }
}
