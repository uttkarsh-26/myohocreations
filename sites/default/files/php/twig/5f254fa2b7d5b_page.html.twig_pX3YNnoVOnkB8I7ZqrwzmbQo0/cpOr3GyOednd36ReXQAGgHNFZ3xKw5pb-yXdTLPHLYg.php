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

/* themes/contrib/estore/templates/system/page.html.twig */
class __TwigTemplate_80bd345e7d2101a2ec7cf9746b6a8e8d69e5bf2b56d5ea7892d3ae5d634a3708 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 54, "if" => 57, "block" => 58);
        $filters = array("clean_class" => 63, "escape" => 73, "t" => 149);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 55
        echo "
";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 57) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 57))) {
            // line 58
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 170
        echo "
";
        // line 172
        $this->displayBlock('main', $context, $blocks);
        // line 242
        echo "

";
        // line 244
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 58
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    ";
        // line 60
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_inverse", [], "any", false, false, true, 62)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 63), "navbar_position", [], "any", false, false, true, 63), 63, $this->source)))) : (""))];
        // line 66
        echo "    <div class=\"top-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"left-top-header\">
          ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_email", [], "any", false, false, true, 69)) {
            // line 70
            echo "            <div class=\"site-email\">
              <i class=\"fa fa-envelope\"></i>

              ";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_email", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 76
        echo "
          ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_phone", [], "any", false, false, true, 77)) {
            // line 78
            echo "            <div class=\"site-phone\">
              <i class=\"fa fa-phone\"></i>

              ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_phone", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 84
        echo "
          ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_location", [], "any", false, false, true, 85)) {
            // line 86
            echo "            <div class=\"site-map-marker\">
              <i class=\"fa fa-map-marker\"></i>

              ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_location", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 92
        echo "
          ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_shop_opens", [], "any", false, false, true, 93)) {
            // line 94
            echo "            <div class=\"site-clock-o\">
              <i class=\"fa fa-clock-o\"></i>

              ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["top_header"] ?? null), "header_shop_opens", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 100
        echo "        </div>

        <div class=\"right-top-header\">
          ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 103)) {
            // line 104
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_right", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 106
        echo "        </div>
      </div>
    </div>

    <div class=\"middle-header-wrapper clearfix\">
      <div class=\"container-fluid\">
        <div class=\"col-md-3\">
          ";
        // line 113
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_middle_header", [], "any", false, false, true, 113)) {
            // line 114
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "left_middle_header", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 116
        echo "        </div>

        <div class=\"col-md-6 text-center hidden-sm hidden-xs\">
          ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header", [], "any", false, false, true, 119)) {
            // line 120
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "middle_header", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 122
        echo "        </div>

        <div class=\"col-md-3\">
          ";
        // line 125
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_middle_header", [], "any", false, false, true, 125)) {
            // line 126
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "right_middle_header", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 128
        echo "        </div>
      </div>
    </div>

    <header id=\"navbar\" role=\"banner\"
      ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 133), 133, $this->source), "html", null, true);
        echo ">

      ";
        // line 135
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 135)) {
            // line 136
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 136, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 138
        echo "
      <div class=\"navbar-header\">
        ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "

        ";
        // line 143
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 143)) {
            // line 144
            echo "          <button type=\"button\"
                  class=\"navbar-toggle\"
                  data-toggle=\"collapse\"
                  data-target=\"#navbar-collapse\">

            <span class=\"sr-only\">";
            // line 149
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 155
        echo "      </div>

      ";
        // line 158
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 158)) {
            // line 159
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 160
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 163
        echo "
      ";
        // line 164
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 164)) {
            // line 165
            echo "        </div>
      ";
        }
        // line 167
        echo "    </header>
  ";
    }

    // line 172
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "  ";
        // line 174
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 174)) {
            // line 175
            echo "    ";
            $this->displayBlock('header', $context, $blocks);
            // line 184
            echo "  ";
        }
        // line 185
        echo "
  <div role=\"main\"
       class=\"main-container ";
        // line 187
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 187, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">

    <div class=\"main-container-inner\">
      ";
        // line 191
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 191)) {
            // line 192
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 197
            echo "      ";
        }
        // line 198
        echo "
      ";
        // line 200
        echo "      ";
        // line 201
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 202
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 202) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 202))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 203
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 203) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 203)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 204
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 204) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 204)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 205
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 205)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 205)))) ? ("col-sm-12") : (""))];
        // line 208
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 208), 208, $this->source), "html", null, true);
        echo ">

        ";
        // line 211
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 211)) {
            // line 212
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 215
            echo "        ";
        }
        // line 216
        echo "
        ";
        // line 218
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 218)) {
            // line 219
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 222
            echo "        ";
        }
        // line 223
        echo "
        ";
        // line 225
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "      </section>

      ";
        // line 232
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 232)) {
            // line 233
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 238
            echo "      ";
        }
        // line 239
        echo "    </div>
  </div>
";
    }

    // line 175
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
        echo "      <div class=\"header-region clearfix\" role=\"heading\">
        <div class=\"container-fluid\">
          <div class=\"header-inner text-center\">
            ";
        // line 179
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 192
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 193
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 194
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 212
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 213
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
        echo "</div>
          ";
    }

    // line 219
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 220
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 225
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        echo "          <a id=\"main-content\"></a>
          ";
        // line 227
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 227), 227, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 233
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 234
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 235
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 235), 235, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 244
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "  <footer class=\"footer\" role=\"contentinfo\">
    <div class=\"footer-top clearfix\">
      <div class=\"container-fluid\">
        ";
        // line 248
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 248)) {
            // line 249
            echo "          <div class=\"footer-first col-sm-6 col-md-3\">
            ";
            // line 250
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 250), 250, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 253
        echo "
        ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 254)) {
            // line 255
            echo "          <div class=\"footer-second col-sm-6 col-md-3\">
            ";
            // line 256
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 256), 256, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 259
        echo "
        ";
        // line 260
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 260)) {
            // line 261
            echo "          <div class=\"footer-third col-sm-6 col-md-3\">
            ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 265
        echo "
        ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 266)) {
            // line 267
            echo "          <div class=\"footer-fourth col-sm-6 col-md-3\">
            ";
            // line 268
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 268), 268, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 271
        echo "      </div>
    </div>

    <div class=\"footer-bottom clearfix\">
      <div class=\"container-fluid\">
        <div class=\"footer-bottom-left\">
          ";
        // line 277
        if (($context["copyright_text"] ?? null)) {
            // line 278
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_text"] ?? null), 278, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 280
        echo "
          ";
        // line 281
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 281)) {
            // line 282
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_left", [], "any", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 284
        echo "        </div>
        <div class=\"footer-bottom-right\">
          ";
        // line 286
        if (($context["theme_credits"] ?? null)) {
            // line 287
            echo "            <div class=\"theme-credits\">
              ";
            // line 288
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_credits"] ?? null), 288, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 291
        echo "
          ";
        // line 292
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 292)) {
            // line 293
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_right", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 295
        echo "        </div>
      </div>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 295,  592 => 293,  590 => 292,  587 => 291,  581 => 288,  578 => 287,  576 => 286,  572 => 284,  566 => 282,  564 => 281,  561 => 280,  555 => 278,  553 => 277,  545 => 271,  539 => 268,  536 => 267,  534 => 266,  531 => 265,  525 => 262,  522 => 261,  520 => 260,  517 => 259,  511 => 256,  508 => 255,  506 => 254,  503 => 253,  497 => 250,  494 => 249,  492 => 248,  487 => 245,  483 => 244,  476 => 235,  473 => 234,  469 => 233,  463 => 227,  460 => 226,  456 => 225,  449 => 220,  445 => 219,  438 => 213,  434 => 212,  427 => 194,  424 => 193,  420 => 192,  411 => 179,  406 => 176,  402 => 175,  396 => 239,  393 => 238,  390 => 233,  387 => 232,  383 => 229,  380 => 225,  377 => 223,  374 => 222,  371 => 219,  368 => 218,  365 => 216,  362 => 215,  359 => 212,  356 => 211,  350 => 208,  348 => 205,  347 => 204,  346 => 203,  345 => 202,  344 => 201,  342 => 200,  339 => 198,  336 => 197,  333 => 192,  330 => 191,  324 => 187,  320 => 185,  317 => 184,  314 => 175,  311 => 174,  309 => 173,  305 => 172,  300 => 167,  296 => 165,  294 => 164,  291 => 163,  285 => 160,  282 => 159,  279 => 158,  275 => 155,  266 => 149,  259 => 144,  256 => 143,  251 => 140,  247 => 138,  241 => 136,  239 => 135,  234 => 133,  227 => 128,  221 => 126,  219 => 125,  214 => 122,  208 => 120,  206 => 119,  201 => 116,  195 => 114,  193 => 113,  184 => 106,  178 => 104,  176 => 103,  171 => 100,  165 => 97,  160 => 94,  158 => 93,  155 => 92,  149 => 89,  144 => 86,  142 => 85,  139 => 84,  133 => 81,  128 => 78,  126 => 77,  123 => 76,  117 => 73,  112 => 70,  110 => 69,  105 => 66,  103 => 63,  102 => 62,  101 => 60,  99 => 59,  95 => 58,  91 => 244,  87 => 242,  85 => 172,  82 => 170,  78 => 58,  76 => 57,  73 => 55,  71 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/system/page.html.twig", "/app/themes/contrib/estore/templates/system/page.html.twig");
    }
}
