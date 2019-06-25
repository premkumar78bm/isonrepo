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

/* profiles/opigno_lms/themes/contrib/platon/templates/page/page--anonymous--with-slider.html.twig */
class __TwigTemplate_be87bec5d139473e9c4efe2fb9e8b6e1ea9067a2c3ddc62ed04d8da9a5531a23 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 52];
        $filters = ["t" => 75];
        $functions = ["path" => 74];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t'],
                ['path']
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
        // line 48
        echo "
<div id=\"main\">
  ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

  ";
        // line 52
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 53
            echo "    <div id=\"page-branding\">
      ";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
      ";
            // line 55
            if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
                // line 56
                echo "        <button class=\"navbar-toggler\"></button>
      ";
            }
            // line 58
            echo "    </div>
  ";
        }
        // line 60
        echo "
  <div id=\"menu-wrapper\" class=\"d-md-none bg-faded\">
    ";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
        echo "
  </div>

  <div id=\"main-content\">
    ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
  </div>

  <aside id=\"user-sidebar\">
    <div class=\"d-none d-md-block\">
      ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
        echo "
    </div>

    <div class=\"form-wrapper user-login\" data-target=\"";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
        echo "\" ";
        if (((($context["route_name"] ?? null) == "user.pass") || (($context["route_name"] ?? null) == "user.register"))) {
            echo "style=\"display: none;\"";
        }
        echo ">
      <h1>";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("LOGIN"));
        echo "</h1>
      <div class=\"subtitle\">";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login with your"));
        echo "<br>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("username or email"));
        echo "</div>
      ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["login_form"] ?? null)), "html", null, true);
        echo "
      <div class=\"status_messages\">
        ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status_messages", [])), "html", null, true);
        echo "
      </div>
      <div class=\"switch-link text-center mt-auto pt-4\">
        <div><a href=\"";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.pass"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Request new password"));
        echo "</a></div>
        <div><a href=\"";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Create new account"));
        echo "</a></div>
      </div>
    </div>

    <div class=\"form-wrapper user-password\" data-target=\"";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.pass"));
        echo "\" ";
        if ((($context["route_name"] ?? null) != "user.pass")) {
            echo "style=\"display: none;\"";
        }
        echo ">
      <h1>";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("REQUEST NEW PASSWORD"));
        echo "</h1>
      <div class=\"subtitle\">";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Enter your email address below and we'll"));
        echo "<br>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("send you password reset instructions."));
        echo "</div>
      ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["password_form"] ?? null)), "html", null, true);
        echo "
      <div class=\"status_messages\">
        ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status_messages", [])), "html", null, true);
        echo "
      </div>
      <div class=\"switch-link text-center mt-auto pt-4\">
        <div><a href=\"";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
        echo "</a></div>
        <div><a href=\"";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Create new account"));
        echo "</a></div>
      </div>
    </div>

    <div class=\"form-wrapper user-register\" data-target=\"";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.register"));
        echo "\" ";
        if ((($context["route_name"] ?? null) != "user.register")) {
            echo "style=\"display: none;\"";
        }
        echo ">
      <h1>";
        // line 101
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("CREATE NEW ACCOUNT"));
        echo "</h1>
      ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["register_form"] ?? null)), "html", null, true);
        echo "
      <div class=\"status_messages\">
        ";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "status_messages", [])), "html", null, true);
        echo "
      </div>
      <div class=\"switch-link text-center mt-auto pt-4\">
        <div><a href=\"";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.login"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Login"));
        echo "</a></div>
        <div><a href=\"";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("user.pass"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Request new password"));
        echo "</a></div>
      </div>
    </div>

    <div id=\"footer\">
      ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </div>
  </aside>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/opigno_lms/themes/contrib/platon/templates/page/page--anonymous--with-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 113,  225 => 108,  219 => 107,  213 => 104,  208 => 102,  204 => 101,  196 => 100,  187 => 96,  181 => 95,  175 => 92,  170 => 90,  164 => 89,  160 => 88,  152 => 87,  143 => 83,  137 => 82,  131 => 79,  126 => 77,  120 => 76,  116 => 75,  108 => 74,  102 => 71,  94 => 66,  87 => 62,  83 => 60,  79 => 58,  75 => 56,  73 => 55,  69 => 54,  66 => 53,  64 => 52,  59 => 50,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/opigno_lms/themes/contrib/platon/templates/page/page--anonymous--with-slider.html.twig", "C:\\xampp\\htdocs\\isonlms\\profiles\\opigno_lms\\themes\\contrib\\platon\\templates\\page\\page--anonymous--with-slider.html.twig");
    }
}
