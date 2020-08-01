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

/* themes/contrib/estore/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_a7e76302c4f3310ce945dc94e610f61803a1ef47db2d613178131a3396969f51 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 20);
        $filters = array("t" => 22, "escape" => 23);
        $functions = array("path" => 22);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/contrib/estore/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  <div class=\"branding-block clearfix\">
    ";
        // line 20
        if (($context["site_logo"] ?? null)) {
            // line 21
            echo "      <a class=\"logo navbar-btn pull-left\"
         href=\"";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 23, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" />
      </a>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 28
            echo "      <div class=\"site-title\">
        ";
            // line 29
            if (($context["site_name"] ?? null)) {
                // line 30
                echo "          <a class=\"name navbar-brand\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\"
             title=\"";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 31, $this->source), "html", null, true);
                echo "</a>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if (($context["site_slogan"] ?? null)) {
                // line 35
                echo "          <p class=\"navbar-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 35, $this->source), "html", null, true);
                echo "</p>
        ";
            }
            // line 37
            echo "      </div>
    ";
        }
        // line 39
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/estore/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  130 => 37,  124 => 35,  122 => 34,  119 => 33,  112 => 31,  107 => 30,  105 => 29,  102 => 28,  100 => 27,  97 => 26,  89 => 23,  83 => 22,  80 => 21,  78 => 20,  75 => 19,  71 => 18,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/estore/templates/block/block--system-branding-block.html.twig", "/app/themes/contrib/estore/templates/block/block--system-branding-block.html.twig");
    }
}
