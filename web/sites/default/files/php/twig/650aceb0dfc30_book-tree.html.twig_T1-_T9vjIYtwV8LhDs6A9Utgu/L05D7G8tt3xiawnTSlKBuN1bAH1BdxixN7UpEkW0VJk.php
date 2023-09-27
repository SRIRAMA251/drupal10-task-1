<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/olivero/templates/navigation/book-tree.html.twig */
class __TwigTemplate_adac37a6abc0eb9a58262a88ae4d153b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["book_tree"] = $this->macros["book_tree"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["book_tree"], "macro_book_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_book_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $macros["book_tree"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "book-navigation__menu menu", 1 => ("menu--level-" . (($context["menu_level"] ?? null) + 1))], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul class='menu menu--level-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                    echo "'>
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    // line 39
                    $context["item_classes"] = [0 => "book-navigation__item", 1 => ("menu__item--level-" . (                    // line 41
($context["menu_level"] ?? null) + 1)), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "is_expanded", [], "any", false, false, true, 42)) ? ("menu__item--expanded") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "is_collapsed", [], "any", false, false, true, 43)) ? ("menu__item--collapsed") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "in_active_trail", [], "any", false, false, true, 44)) ? ("menu__item--active-trail") : (""))];
                    // line 47
                    echo "      ";
                    $context["link_classes"] = [0 => "book-navigation__link", 1 => "menu__link", 2 => "menu__link--link", 3 => ("menu__link--level-" . (                    // line 51
($context["menu_level"] ?? null) + 1)), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "in_active_trail", [], "any", false, false, true, 52)) ? ("menu__link--active-trail") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "below", [], "any", false, false, true, 53)) ? ("menu__link--has-children") : (""))];
                    // line 56
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 57
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 57), 57, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 57), 57, $this->source), ["class" =>                     // line 58
($context["link_classes"] ?? null)]), "html", null, true);
                    // line 60
                    echo "
        ";
                    // line 61
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61)) {
                        // line 62
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["book_tree"], "macro_book_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 62), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 62, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 64
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/book-tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 66,  125 => 64,  119 => 62,  117 => 61,  114 => 60,  112 => 58,  111 => 57,  106 => 56,  104 => 53,  103 => 52,  102 => 51,  100 => 47,  98 => 44,  97 => 43,  96 => 42,  95 => 41,  94 => 39,  92 => 38,  87 => 37,  81 => 35,  75 => 33,  72 => 32,  69 => 31,  66 => 30,  51 => 29,  44 => 27,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/book-tree.html.twig", "C:\\xampp\\htdocs\\drupal\\drupal10\\web\\core\\themes\\olivero\\templates\\navigation\\book-tree.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
        static $filters = array("escape" => 33);
        static $functions = array("link" => 57);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
