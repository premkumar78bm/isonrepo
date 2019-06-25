<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig */
class __TwigTemplate_9c8ce6955f0127d7907556aa8771bca84b9bf134b0f8a29e7c2347fb72b5bb8e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["raw" => 11, "t" => 13];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 1
        echo "<base href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["base_href"] ?? null))), "html", null, true);
        echo "\">

<script type=\"text/javascript\">
  window.appConfig = {
    columns: 3,
    positions: [[], [], [], []],
    apiBaseUrl: '";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "',
    getPositioningUrl: '/opigno_dashboard/get-positioning',
    setPositioningUrl: '/opigno_dashboard/set-positioning',
    getBlocksContentUrl: '/opigno_dashboard/get-blocks',
    defaultConfig: '";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["default_config"] ?? null)));
        echo "',
    locales: {
      manageYourDashboard: '";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Manage your dashboard"));
        echo "',
      remove: '";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("remove"));
        echo "',
      close: '";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("close"));
        echo "',
      layout: '";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Layout"));
        echo "',
      oneColumn: '";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("1 column"));
        echo "',
      twoColumns: '";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("2 columns"));
        echo "',
      asymColumns: '";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("1/3-2/3 columns"));
        echo "',
      threeColumns: '";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("3 columns"));
        echo "',
      addBlocks: '";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Add blocks by dragging them below into the canvas"));
        echo "',
      restoreYourDashboard: '";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Restore your dashboard to default:"));
        echo "',
      restoreToDefault: '";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("restore to default"));
        echo "'
    }
  };
</script>

<app-root class=\"d-block dashboard\">";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Loading dashboard..."));
        echo "</app-root>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 28,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  81 => 14,  77 => 13,  72 => 11,  65 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/modules/opigno/opigno_dashboard/templates/opigno-dashboard.html.twig", "C:\\xampp\\htdocs\\isonlms\\profiles\\opigno_lms\\modules\\opigno\\opigno_dashboard\\templates\\opigno-dashboard.html.twig");
    }
}
