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

/* pages/setup/marketplace/card.html.twig */
class __TwigTemplate_f9274130ad791c91fa2beb07d4af5262 extends Template
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
        // line 55
        yield "
";
        // line 85
        yield "
";
        // line 86
        if ((($context["tab"] ?? null) == "discover")) {
            // line 87
            yield "    <li class=\"plugin\" data-key=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = ($context["plugin"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["key"] ?? null) : null), "html", null, true);
            yield "\" data-state=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = ($context["plugin"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["state"] ?? null) : null), "html", null, true);
            yield "\">
        <div class=\"main\">
            <span class=\"icon\">";
            // line 89
            yield (($_v2 = ($context["plugin"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["icon"] ?? null) : null);
            yield "</span>
            <span class=\"details\">
                <span class=\"title fs-3 fw-bold\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = ($context["plugin"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["name"] ?? null) : null), "html", null, true);
            yield "</span>
                ";
            // line 92
            yield (($_v4 = ($context["plugin"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["network_info"] ?? null) : null);
            yield "
                <p class=\"description\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($_v5 = ($context["plugin"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["description"] ?? null) : null)), "html", null, true);
            yield "</p>
            </span>
            <span class=\"buttons\">";
            // line 95
            yield (($_v6 = ($context["plugin"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["buttons"] ?? null) : null);
            yield "</span>
        </div>
        <div class=\"footer\">
            ";
            // line 98
            yield $this->getTemplateForMacro("macro_misc_left", $context, 98, $this->getSourceContext())->macro_misc_left(...[($context["plugin"] ?? null), ($context["tab"] ?? null)]);
            yield "
            ";
            // line 99
            yield $this->getTemplateForMacro("macro_misc_right", $context, 99, $this->getSourceContext())->macro_misc_right(...[($context["plugin"] ?? null)]);
            yield "
        </div>
    </li>
";
        } else {
            // line 103
            yield "    <li class=\"plugin\" data-key=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = ($context["plugin"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["key"] ?? null) : null), "html", null, true);
            yield "\" data-state=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = ($context["plugin"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["state"] ?? null) : null), "html", null, true);
            yield "\">
        <div class=\"main\">
            <span class=\"icon\">";
            // line 105
            yield (($_v9 = ($context["plugin"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["icon"] ?? null) : null);
            yield "</span>
            <span class=\"details\">
                <span class=\"title fs-3 fw-bold\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = ($context["plugin"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["name"] ?? null) : null), "html", null, true);
            yield "</span>
                ";
            // line 108
            yield $this->getTemplateForMacro("macro_misc_right", $context, 108, $this->getSourceContext())->macro_misc_right(...[($context["plugin"] ?? null)]);
            yield "
            </span>
            <span class=\"buttons\">";
            // line 110
            yield (($_v11 = ($context["plugin"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["buttons"] ?? null) : null);
            yield "</span>
        </div>
        <div class=\"footer\">
            ";
            // line 113
            yield $this->getTemplateForMacro("macro_misc_left", $context, 113, $this->getSourceContext())->macro_misc_left(...[($context["plugin"] ?? null), ($context["tab"] ?? null)]);
            yield "
        </div>
    </li>
";
        }
        yield from [];
    }

    // line 33
    public function macro_misc_right($plugin = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "plugin" => $plugin,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 34
            yield "    <span class=\"misc-right\">
        <span class=\"license\">
            ";
            // line 36
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v12 = ($context["plugin"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["license"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "                <i class=\"ti ti-license\"></i>
                ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($_v13 = ($context["plugin"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["license"] ?? null) : null)), "html", null, true);
                yield "
            ";
            }
            // line 40
            yield "        </span>
        <span class=\"authors\">
            ";
            // line 42
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v14 = ($context["plugin"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["authors"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 43
                yield "                <i class=\"ti ti-users\"></i>
                ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml(Twig\Extension\CoreExtension::join((($_v15 = ($context["plugin"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["authors"] ?? null) : null), ", ")), "html", null, true);
                yield "
            ";
            }
            // line 46
            yield "        </span>
        <span class=\"version\">
            ";
            // line 48
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v16 = ($context["plugin"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["version"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                <i class=\"ti ti-git-branch\"></i>
                ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($_v17 = ($context["plugin"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["version"] ?? null) : null)), "html", null, true);
                yield "
            ";
            }
            // line 52
            yield "        </span>
    </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function macro_misc_left($plugin = null, $tab = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "plugin" => $plugin,
            "tab" => $tab,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "    <span class=\"misc-left\">
        ";
            // line 58
            if ((($context["tab"] ?? null) == "discover")) {
                // line 59
                yield "            <div class=\"note\">";
                yield (($_v18 = ($context["plugin"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["stars"] ?? null) : null);
                yield "</div>
        ";
            }
            // line 61
            yield "        <span class=\"links\">
            ";
            // line 62
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v19 = ($context["plugin"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["homepage_url"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v20 = ($context["plugin"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["homepage_url"] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\">
                    <i class=\"ti ti-home-2 add_tooltip\" title=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Homepage"), "html", null, true);
                yield "\"></i>
                </a>
            ";
            }
            // line 67
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v21 = ($context["plugin"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["issues_url"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = ($context["plugin"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["issues_url"] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\">
                    <i class=\"ti ti-bug add_tooltip\" title=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Get help"), "html", null, true);
                yield "\"></i>
                </a>
            ";
            }
            // line 72
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v23 = ($context["plugin"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23["readme_url"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 73
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v24 = ($context["plugin"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["readme_url"] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\">
                    <i class=\"ti ti-book add_tooltip\" title=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Readme"), "html", null, true);
                yield "\"></i>
                </a>
            ";
            }
            // line 77
            yield "            ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v25 = ($context["plugin"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25["changelog_url"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v26 = ($context["plugin"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26["changelog_url"] ?? null) : null), "html", null, true);
                yield "\" target=\"_blank\">
                    <i class=\"ti ti-news add_tooltip\" title=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__("Changelog"), "html", null, true);
                yield "\"></i>
                </a>
            ";
            }
            // line 82
            yield "        </span>
    </span>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/setup/marketplace/card.html.twig";
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
        return array (  278 => 82,  272 => 79,  267 => 78,  264 => 77,  258 => 74,  253 => 73,  250 => 72,  244 => 69,  239 => 68,  236 => 67,  230 => 64,  225 => 63,  223 => 62,  220 => 61,  214 => 59,  212 => 58,  209 => 57,  196 => 56,  188 => 52,  183 => 50,  180 => 49,  178 => 48,  174 => 46,  169 => 44,  166 => 43,  164 => 42,  160 => 40,  155 => 38,  152 => 37,  150 => 36,  146 => 34,  134 => 33,  124 => 113,  118 => 110,  113 => 108,  109 => 107,  104 => 105,  96 => 103,  89 => 99,  85 => 98,  79 => 95,  74 => 93,  70 => 92,  66 => 91,  61 => 89,  53 => 87,  51 => 86,  48 => 85,  45 => 55,  42 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/setup/marketplace/card.html.twig", "/opt/lampp/htdocs/ticketing1/templates/pages/setup/marketplace/card.html.twig");
    }
}
