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

/* pages/admin/log_viewer.html.twig */
class __TwigTemplate_57c79d548abddfc229b1b507059db5ad extends Template
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
        // line 50
        yield "
";
        // line 74
        yield "
";
        // line 75
        if ((($tmp = ($context["only_content"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 76
            yield "    ";
            yield $this->getTemplateForMacro("macro_log_entries", $context, 76, $this->getSourceContext())->macro_log_entries(...[($context["log_entries"] ?? null)]);
            yield "
    <div class=\"spinner-border mt-3\" id=\"auto-refresh-indicator\" role=\"status\"></div>
";
        } else {
            // line 79
            yield "    <div class=\"d-inline-flex flex-wrap flex-md-nowrap align-items-center mb-2\">
        <form action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/logviewer.php"), "html", null, true);
            yield "\" method=\"post\" class=\"d-inline\">
            <div class=\"input-group\">
                <select class=\"form-select w-auto\" id=\"change-file\">
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["log_files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["log_file"]) {
                // line 84
                yield "                    ";
                $context["log_file_filepath"] = (($_v0 = $context["log_file"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["filepath"] ?? null) : null);
                // line 85
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["log_file_filepath"] ?? null), "html", null, true);
                yield "\"
                            ";
                // line 86
                yield (((($context["log_file_filepath"] ?? null) == ($context["filepath"] ?? null))) ? ("selected=\"selected\"") : (""));
                yield ">
                        ";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["log_file_filepath"] ?? null), "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['log_file'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "                </select>

                <a href=\"?action=download_log_file&amp;filepath=";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(($context["filepath"] ?? null)), "html", null, true);
            yield "\"
                   class=\"btn btn-outline-secondary\"
                   title=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Download file"), "html", null, true);
            yield "\"
                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                    <i class=\"ti ti-file-download\" aria-hidden=\"true\"></i>
                </a>

                ";
            // line 99
            if ((($tmp = ($context["can_clear"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 100
                yield "                    <button type=\"submit\" name=\"action\" value=\"empty\"
                            class=\"btn btn-outline-secondary\"
                            title=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Empty file"), "html", null, true);
                yield "\"
                            onclick=\"return confirm('";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to clear this file?"), "js"), "html", null, true);
                yield "')\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        <i class=\"ti ti-file-off\" aria-hidden=\"true\"></i>
                    </button>
                ";
                // line 107
                if ((($tmp = ($context["can_delete"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 108
                    yield "                ";
                }
                // line 109
                yield "                    <button type=\"submit\" name=\"action\" value=\"delete\"
                            class=\"btn btn-outline-secondary\"
                            title=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Delete file"), "html", null, true);
                yield "\"
                            onclick=\"return confirm('";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Are you sure you want to delete this file?"), "js"), "html", null, true);
                yield "')\"
                            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                        <i class=\"ti ti-trash-x\" aria-hidden=\"true\"></i>
                    </button>
                ";
            }
            // line 117
            yield "
                <input type=\"hidden\" name=\"filepath\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filepath"] ?? null), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Session::getNewCSRFToken(), "html", null, true);
            yield "\">
            </div>
        </form>

        <span class=\"d-inline-flex ms-3\">
            <small class=\"d-inline-flex text-muted text-nowrap me-3\"
                title=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("file size"), "html", null, true);
            yield "\">
                <i class=\"ti ti-file me-1\" aria-hidden=\"true\"></i>
                <span>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedSize(($context["filesize"] ?? null)), "html", null, true);
            yield "</span>
            </small>
            <small class=\"d-inline-flex text-muted text-nowrap \"
                title=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("date of last modification"), "html", null, true);
            yield "\">
                <i class=\"ti ti-clock me-1\" aria-hidden=\"true\"></i>
                <span>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["datemod"] ?? null)), "html", null, true);
            yield "</span>
            </small>
        </span>
    </div>
    <div class=\"log-viewer card\">
        <div class=\"card-header justify-content-between \">
            <span class=\"input-icon ms-3\">
                <input type=\"text\" value=\"\" class=\"form-control\" id=\"filter-logs-input\"
                    placeholder=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("filter logs"), "html", null, true);
            yield "\">
                <span class=\"input-icon-addon\">
                    <i class=\"ti ti-filter fs-5\" aria-hidden=\"true\"></i>
                </span>
            </span>

            <a href=\"#bottom\"
                class=\"btn btn-sm btn-ghost-secondary ms-3\"
                title=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Scroll to bottom"), "html", null, true);
            yield "\"
                data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
                <i class=\"ti ti-player-track-next fa-rotate-90\" aria-hidden=\"true\"></i>
            </a>
        </div>
        <div class=\"log-entries card-body\">
            ";
            // line 154
            yield $this->getTemplateForMacro("macro_log_entries", $context, 154, $this->getSourceContext())->macro_log_entries(...[($context["log_entries"] ?? null)]);
            yield "
        </div>
        <div class=\"card-footer d-flex justify-content-between\">
            <span class=\"search-limit d-none d-md-block text-muted\">
                ";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Last entries to show:"), "html", null, true);
            yield "
                ";
            // line 159
            yield from $this->load("components/dropdown/limit.html.twig", 159)->unwrap()->yield(CoreExtension::merge($context, ["no_onchange" => ((            // line 160
array_key_exists("fluid_search", $context)) ? (Twig\Extension\CoreExtension::default(($context["fluid_search"] ?? null), false)) : (false))]));
            // line 162
            yield "            </span>
            <label class=\"form-check form-switch btn btn-sm btn-ghost-secondary ms-2 px-1 flex-column-reverse flex-sm-row flex-nowrap\"
                data-bs-toggle=\"tooltip\"
                data-bs-placement=\"bottom\"
                title=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Toggle auto refresh"), "html", null, true);
            yield "\">
                <input type=\"checkbox\"
                    id=\"log-auto-refresh\"
                    class=\"form-check-input ms-0 me-1 mt-0\"
                    role=\"button\" autocomplete=\"off\">
                <span class=\"form-check-label mb-1 mb-sm-0\">
                    <i class=\"ti ti-refresh\" aria-hidden=\"true\"></i>
                </span>
            </label>
        </div>
    </div>

    <script>
    \$(function () {
        \$('button.expand-log-entry').on('click', (e) => {
            \$(e.currentTarget).siblings('.log_long_text').toggleClass('expanded');
            \$(e.currentTarget).attr('title', \$(e.currentTarget).siblings('.log_long_text').hasClass('expanded') ? '";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Collapse"), "js"), "html", null, true);
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand"), "js"), "html", null, true);
            yield "');
            \$(e.currentTarget).find('i').toggleClass('ti-caret-right ti-caret-down');
        });
        \$('div.log_long_text').on('click', (e) => {
            const target = \$(e.target);
            if (target.is('a')) {
                return;
            }
            if (window.getSelection().toString().length === 0) {
                \$(e.currentTarget).closest('div.log_long_text').siblings('button.expand-log-entry').trigger('click');
            }
        });

        // change log file
        \$(\"#change-file\").on('change', function () {
            window.location.href = \"?filepath=\" + encodeURIComponent(\$(this).val());
        });

        // manage auto-refresh of log
        let autorefresh_interval = null;
        \$(\"#log-auto-refresh\").on('change', function() {
            if(this.checked) {
                const log_entries = \$('.log-entries');
                const reloadContent = function() {
                    log_entries.load('";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/logviewer.php"), "html", null, true);
            yield "', {
                        action: 'refresh_log_file',
                        filepath: '";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["filepath"] ?? null), "html", null, true);
            yield "'
                    }, function() {
                        log_entries.animate({ 'scrollTop': log_entries.prop(\"scrollHeight\")}, 1000);
                    });
                }
                reloadContent();
                autorefresh_interval = setInterval(() => {
                    reloadContent();
                }, 1500);
            } else {
                clearInterval(autorefresh_interval);
                \$(\"#auto-refresh-indicator\").remove();
            }
        });

        // force auto-refresh
        \$(\".force-auto-refresh\").on('click', function() {
            \$(\"#log-auto-refresh\").prop('checked', true).change();
        });

        // filter logs
        var delay_timer = null;
        \$('#filter-logs-input').on('input', function() {
            const filtered_text = \$(this).val().trim();
            clearTimeout(delay_timer);
            \$('.log_entry').removeClass('d-none');
            delay_timer = setTimeout(function() {
                \$('.log_entry').each(function() {
                    const row = \$(this);
                    const log_text = row.text().trim();
                    if (log_text.indexOf(filtered_text) === -1) {
                        row.addClass('d-none');
                    }
                });
            }, 500);
        });
    });
    </script>
";
        }
        yield from [];
    }

    // line 33
    public function macro_log_entry($log = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "log" => $log,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    ";
            $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 35
                yield "        <div class=\"log_entry d-flex border-bottom\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = ($context["log"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["id"] ?? null) : null), "html", null, true);
                yield "\">
            ";
                // line 36
                $context["has_more"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), (($_v3 = ($context["log"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["text"] ?? null) : null), "
")) > 2);
                // line 37
                yield "            <button class=\"btn btn-icon btn-sm bg-transparent pt-3 d-flex align-items-start border-0 expand-log-entry ";
                yield (((($tmp =  !($context["has_more"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("invisible") : (""));
                yield "\"
                title=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand"), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Expand"), "html", null, true);
                yield "\">
                <i class=\"ti ti-caret-right\" aria-hidden=\"true\"></i>
            </button>
            <div class=\"log_long_text\" style=\"";
                // line 41
                yield (((($tmp = ($context["has_more"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("cursor: row-resize") : (""));
                yield "\">
                <a class=\"log_datetime badge bg-secondary text-secondary-fg me-1\" href=\"#";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = ($context["log"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["id"] ?? null) : null), "html", null, true);
                yield "\">
                    ";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($_v5 = ($context["log"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["datetime"] ?? null) : null)), "html", null, true);
                yield "
                </a>
                <span>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((($_v6 = ($context["log"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["text"] ?? null) : null)), "html", null, true);
                yield "</span>
            </div>
        </div>
    ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            yield Twig\Extension\CoreExtension::spaceless($_v1);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_log_entries($log_entries = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "log_entries" => $log_entries,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "    ";
            if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["log_entries"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["log_entries"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["log_entry"]) {
                    yield $this->getTemplateForMacro("macro_log_entry", $context, 53, $this->getSourceContext())->macro_log_entry(...[$context["log_entry"]]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['log_entry'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                yield "    ";
            } else {
                // line 55
                yield "        <div class=\"empty\">
            <div class=\"empty-icon display-6\" style=\"display: contents\">
                <i class=\"ti ti-mood-empty\" aria-hidden=\"true\"></i>
            </div>
            <p class=\"empty-title\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("The log file is empty"), "html", null, true);
                yield "</p>
            <p class=\"empty-subtitle text-muted\">
                ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Try enabling auto-refresh to see new content of the file"), "html", null, true);
                yield "
            </p>

            <div class=\"empty-action\">
                <button type=\"button\" class=\"btn btn-primary force-auto-refresh\">
                    <i class=\"ti ti-refresh\" aria-hidden=\"true\"></i>
                    <span>";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Enable auto-refresh"), "html", null, true);
                yield "</span>
                </button>
            </div>
        </div>
    ";
            }
            // line 72
            yield "    <a id=\"bottom\"></a>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/admin/log_viewer.html.twig";
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
        return array (  449 => 72,  441 => 67,  432 => 61,  427 => 59,  421 => 55,  418 => 54,  408 => 53,  405 => 52,  393 => 51,  387 => 34,  379 => 45,  374 => 43,  370 => 42,  366 => 41,  358 => 38,  353 => 37,  350 => 36,  345 => 35,  342 => 34,  330 => 33,  285 => 208,  280 => 206,  251 => 182,  232 => 166,  226 => 162,  224 => 160,  223 => 159,  219 => 158,  212 => 154,  203 => 148,  192 => 140,  181 => 132,  176 => 130,  170 => 127,  165 => 125,  156 => 119,  152 => 118,  149 => 117,  141 => 112,  137 => 111,  133 => 109,  130 => 108,  128 => 107,  121 => 103,  117 => 102,  113 => 100,  111 => 99,  103 => 94,  98 => 92,  94 => 90,  85 => 87,  81 => 86,  76 => 85,  73 => 84,  69 => 83,  63 => 80,  60 => 79,  53 => 76,  51 => 75,  48 => 74,  45 => 50,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/admin/log_viewer.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/admin/log_viewer.html.twig");
    }
}
