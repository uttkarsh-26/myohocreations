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

/* themes/contrib/estore/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_0088a1b8b05ead2baeb57bef8049a30fbd19c2a06cc4cf1c11b23308e70a32e1 extends \Twig\Template
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
        $tags = array("if" => 33, "trans" => 72);
        $filters = array("escape" => 22, "without" => 30, "t" => 34, "render" => 93);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'without', 't', 'render'],
                []
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "<article ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "commerce-product", 1 => "full"], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        echo ">
  <div class=\"row\">
    <div class=\"product-left col-sm-6\">
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_images", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
        echo "
    </div>

    <div class=\"product-right col-sm-6\">
      <h3 class=\"product-title\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</h3>
      ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null), 30, $this->source), "variation_attributes", "field_images", "field_reviews", "field_related_products", "body", "field_sale"), "html", null, true);
        echo "
    </div>

    ";
        // line 33
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_sale", [], "any", false, false, true, 33)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#markup"] ?? null) : null) == 1)) {
            // line 34
            echo "      <div class=\"sales-tag\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sale!"));
            echo "</div>
    ";
        }
        // line 36
        echo "
    <div class=\"product-bottom col-sm-12\">
      <ul class=\"nav nav-tabs\">
        <li class=\"active\">
          <a data-toggle=\"tab\" href=\"#description\">";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</a>
        </li>

        ";
        // line 43
        if (($context["reviews_count"] ?? null)) {
            // line 44
            echo "          <li>
            <a data-toggle=\"tab\" href=\"#reviews\">
              ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reviews"));
            echo "

              ";
            // line 48
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 49
                echo "                <span class=\"reviews-count\">(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["reviews_count"] ?? null), 49, $this->source), "html", null, true);
                echo ")</span>
              ";
            }
            // line 51
            echo "            </a>
          </li>
        ";
        }
        // line 54
        echo "      </ul>

      <div class=\"tab-content\">
        <div id=\"description\"
             name=\"description\"
             class=\"tab-pane fade in active\">
          <h4 class=\"tab-title\">";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
        echo "</h4>

          <div class=\"description-content\">
            ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "body", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
          </div>
        </div>

        ";
        // line 67
        if (($context["reviews_count"] ?? null)) {
            // line 68
            echo "          <div id=\"reviews\" name=\"reviews\" class=\"tab-pane fade\">
            <h3 class=\"tab-title\">
              ";
            // line 70
            if ((($context["reviews_count"] ?? null) > 0)) {
                // line 71
                echo "                ";
                if ((($context["reviews_count"] ?? null) == 1)) {
                    // line 72
                    echo "                  ";
                    echo t("@reviews_count review for @title", array("@reviews_count" =>                     // line 73
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 75
                    echo "                ";
                } else {
                    // line 76
                    echo "                  ";
                    echo t("@reviews_count reviews for @title", array("@reviews_count" =>                     // line 77
($context["reviews_count"] ?? null), "@title" => ($context["title"] ?? null), ), ["context" => "product reviews title"]);
                    // line 79
                    echo "                ";
                }
                // line 80
                echo "              ";
            }
            // line 81
            echo "            </h3>

            <div class=\"reviews-content\">
              ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_reviews", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 88
        echo "      </div>
    </div>
  </div>
</article>

";
        // line 93
        if (($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 93)) != "")) {
            // line 94
            echo "  <div class=\"row\">
    <div class=\"related-products col-sm-12\">
      <h3 class=\"block-title\"><span>";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Related products"));
            echo "</span></h3>

      <div class=\"related-products-items row\">
        ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "field_related_products", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 99,  204 => 96,  200 => 94,  198 => 93,  191 => 88,  184 => 84,  179 => 81,  176 => 80,  173 => 79,  171 => 77,  169 => 76,  166 => 75,  164 => 73,  162 => 72,  159 => 71,  157 => 70,  153 => 68,  151 => 67,  144 => 63,  138 => 60,  130 => 54,  125 => 51,  119 => 49,  117 => 48,  112 => 46,  108 => 44,  106 => 43,  100 => 40,  94 => 36,  88 => 34,  86 => 33,  80 => 30,  76 => 29,  69 => 25,  62 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/commerce/commerce-product.html.twig", "/app/themes/contrib/estore/templates/commerce/commerce-product.html.twig");
    }
}
