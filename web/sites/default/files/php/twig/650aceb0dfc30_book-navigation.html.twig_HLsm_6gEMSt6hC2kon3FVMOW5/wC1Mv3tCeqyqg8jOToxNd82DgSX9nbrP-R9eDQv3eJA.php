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

/* core/themes/olivero/templates/navigation/book-navigation.html.twig */
class __TwigTemplate_3a759ff3efede1b1ea2e0d80a87222d3 extends Template
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
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("olivero/book"), "html", null, true);
        echo "
";
        // line 33
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 34
            echo "  <nav id=\"book-navigation-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 34, $this->source), "html", null, true);
            echo "\" class=\"book-navigation\" role=\"navigation\" aria-labelledby=\"book-label-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 34, $this->source), "html", null, true);
            echo "\">
    ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tree"] ?? null), 35, $this->source), "html", null, true);
            echo "
    ";
            // line 36
            if (($context["has_links"] ?? null)) {
                // line 37
                echo "      <h2 class=\"visually-hidden\" id=\"book-label-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null), 37, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Book traversal links for"));
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_title"] ?? null), 37, $this->source), "html", null, true);
                echo "</h2>
      <ul class=\"book-pager\">
      ";
                // line 39
                if (($context["prev_url"] ?? null)) {
                    // line 40
                    echo "        <li class=\"book-pager__item book-pager__item--previous\">
          <a class=\"book-pager__link book-pager__link--previous\" href=\"";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null), 41, $this->source), "html", null, true);
                    echo "\" rel=\"prev\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_title"] ?? null), 41, $this->source), "html", null, true);
                    echo "</a>
        </li>
      ";
                }
                // line 44
                echo "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 45
                    echo "        <li class=\"book-pager__item book-pager__item--center\">
          <a class=\"book-pager__link book-pager__link--center\" href=\"";
                    // line 46
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_url"] ?? null), 46, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to parent page"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Up"));
                    echo "</a>
        </li>
      ";
                }
                // line 49
                echo "      ";
                if (($context["next_url"] ?? null)) {
                    // line 50
                    echo "        <li class=\"book-pager__item book-pager__item--next\">
          <a class=\"book-pager__link book-pager__link--next\" href=\"";
                    // line 51
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null), 51, $this->source), "html", null, true);
                    echo "\" rel=\"next\" title=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_title"] ?? null), 51, $this->source), "html", null, true);
                    echo "</a>
       </li>
      ";
                }
                // line 54
                echo "    </ul>
    ";
            }
            // line 56
            echo "  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 56,  115 => 54,  105 => 51,  102 => 50,  99 => 49,  89 => 46,  86 => 45,  83 => 44,  73 => 41,  70 => 40,  68 => 39,  58 => 37,  56 => 36,  52 => 35,  45 => 34,  43 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/book-navigation.html.twig", "C:\\xampp\\htdocs\\drupal\\drupal10\\web\\core\\themes\\olivero\\templates\\navigation\\book-navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 33);
        static $filters = array("escape" => 32, "t" => 37);
        static $functions = array("attach_library" => 32);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
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
