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

/* @platon/layout/header.html.twig */
class __TwigTemplate_edcc1c25b8cc4b581b6f1b43995975d27aac445a4d38aba44f347ffafb38c31f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3, "for" => 44];
        $filters = ["t" => 18];
        $functions = ["path" => 87, "attach_library" => 105, "url" => 129];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t'],
                ['path', 'attach_library', 'url']
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
        echo "<header id=\"site-header\">
  <div class=\"container d-flex align-items-center\">
    ";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 4
            echo "      <div id=\"header-left\">
        ";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 8
        echo "    ";
        if (($context["logged_in"] ?? null)) {
            // line 9
            echo "      <div id=\"header-right\" class=\"ml-auto d-flex\">
        ";
            // line 10
            if ($this->getAttribute(($context["page"] ?? null), "admin_opigno", [])) {
                // line 11
                echo "          <div class=\"admin-opigno-block d-none d-md-block dropdown\">
            <a href=\"#\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
              <span class=\"picto\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
              <div class=\"info d-flex\">
                <div class=\"flex-1\">
                  <div><strong class=\"text-uppercase\">";
                // line 18
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("administration"));
                echo "</strong></div>
                </div>
                <button class=\"close-dropdown\">close</button>
              </div>
              <div class=\"px-4 d-flex menu-wrapper\">
                ";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "admin_opigno", [])), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 28
            echo "        <div class=\"user-ilts dropdown d-none d-md-block ml-3\">
          <a href=\"#\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
            <span class=\"picto\"></span>
            ";
            // line 31
            if (($context["upcoming_ilts_count"] ?? null)) {
                // line 32
                echo "              <div class=\"unread\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["upcoming_ilts_count"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 34
            echo "          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <div class=\"info d-flex\">
              <div class=\"flex-1\">
                <div><strong class=\"text-uppercase\">";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Instructor-Led Training"));
            echo "</strong></div>
              </div>
              <button class=\"close-dropdown\">close</button>
            </div>
            ";
            // line 42
            if (($context["upcoming_ilts_count"] ?? null)) {
                // line 43
                echo "              <div id=\"ilts-wrapper\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["upcoming_ilts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["ilt"]) {
                    // line 45
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["ilt"], "link", [], "array")), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                    <span>";
                    // line 46
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["ilt"], "title", [], "array")), "html", null, true);
                    echo "</span>
                  </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ilt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "              </div>
            ";
            } else {
                // line 51
                echo "              <div id=\"ilts-wrapper-empty\">
                <span>";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No upcoming ILT"));
                echo "</span>
              </div>
            ";
            }
            // line 55
            echo "          </div>
        </div>
        <div class=\"user-live-meetings dropdown d-none d-md-block ml-3\">
          <a href=\"#\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
            <span class=\"picto\"></span>
            ";
            // line 60
            if (($context["upcoming_live_meetings_count"] ?? null)) {
                // line 61
                echo "              <div class=\"unread\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["upcoming_live_meetings_count"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 63
            echo "          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <div class=\"info d-flex\">
              <div class=\"flex-1\">
                <div><strong class=\"text-uppercase\">";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Live Meeting"));
            echo "</strong></div>
              </div>
              <button class=\"close-dropdown\">close</button>
            </div>
            ";
            // line 71
            if (($context["upcoming_live_meetings_count"] ?? null)) {
                // line 72
                echo "              <div id=\"live-meetings-wrapper\">
                ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["upcoming_live_meetings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                    // line 74
                    echo "                  <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["meeting"], "link", [], "array")), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                    <span>";
                    // line 75
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["meeting"], "title", [], "array")), "html", null, true);
                    echo "</span>
                  </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "              </div>
            ";
            } else {
                // line 80
                echo "              <div id=\"live-meetings-wrapper-empty\">
                <span>";
                // line 81
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No upcoming live meeting"));
                echo "</span>
              </div>
            ";
            }
            // line 84
            echo "          </div>
        </div>
        <div class=\"user-notifications dropdown ml-3\">
          <a href=\"";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("view.opigno_notifications.page_all"));
            echo "\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
            <span class=\"picto\"></span>
            ";
            // line 89
            if (($context["notifications_unread_count"] ?? null)) {
                // line 90
                echo "              <div class=\"unread\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notifications_unread_count"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 92
            echo "          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <div class=\"info d-flex\">
              <div class=\"flex-1\">
                <div><strong class=\"text-uppercase\">";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("notifications"));
            echo "</strong></div>
              </div>
              <button class=\"close-dropdown\">close</button>
            </div>
            <a id=\"read-all-notifications\" class=\"mark-as-read\" href=\"#\">";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Mark as all read"));
            echo "</a>
            <div id=\"notifications-wrapper\">";
            // line 101
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notifications_unread"] ?? null)), "html", null, true);
            echo "</div>
            <a id=\"show-all-notifications\" class=\"dropdown-item primary text-center\" href=\"";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("view.opigno_notifications.page_all"));
            echo "\">
              <span>";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("See all notifications"));
            echo "</span>
            </a>
            ";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("opigno_notification/opigno_notification"), "html", null, true);
            echo "
          </div>
        </div>
        <div class=\"user-messages dropdown ml-3\">
          <a href=\"";
            // line 109
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("private_message.private_message_page"));
            echo "\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
            <span class=\"picto\"></span>
            ";
            // line 111
            if (($context["unread_thread_count"] ?? null)) {
                // line 112
                echo "              <div class=\"unread\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["unread_thread_count"] ?? null)), "html", null, true);
                echo "</div>
            ";
            }
            // line 114
            echo "          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <div class=\"info d-flex\">
              <div class=\"flex-1\">
                <div><strong class=\"text-uppercase\">";
            // line 118
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("messages"));
            echo "</strong></div>
              </div>
              <button class=\"close-dropdown\">close</button>
            </div>
            ";
            // line 122
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["private_messages"] ?? null)), "html", null, true);
            echo "
            <a class=\"dropdown-item primary text-center\" href=\"";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("private_message.private_message_page"));
            echo "\">
              <span>";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("See all messages"));
            echo "</span>
            </a>
          </div>
        </div>
        <div class=\"user-block ml-3 dropdown\">
          <a href=\"";
            // line 129
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.canonical", ["user" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
            echo "\" class=\"d-flex align-items-center\" data-toggle=\"dropdown\">
            <span class=\"picto\" ";
            // line 130
            if (($context["user_picture"] ?? null)) {
                echo "style=\"background-image:url('";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null)), "html", null, true);
                echo "')\"";
            }
            echo "></span>
          </a>
          <div class=\"dropdown-menu dropdown-menu-right\">
            <div class=\"info d-flex\">
              <div class=\"flex-1\">
                <div><strong class=\"text-uppercase\">";
            // line 135
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["user"] ?? null), "username", [])), "html", null, true);
            echo "</strong></div>
                <div class=\"user-status text-uppercase\">";
            // line 136
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("online"));
            echo "</div>
              </div>
              <button class=\"close-dropdown\">close</button>
            </div>
            <a class=\"dropdown-item\" href=\"";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.canonical", ["user" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
            echo "\">
              <span>";
            // line 141
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User profile"));
            echo "</span>
            </a>
            <a class=\"dropdown-item\" href=\"";
            // line 143
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.edit_form", ["user" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
            echo "\">
              <span>";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Settings"));
            echo "</span>
            </a>
            <a class=\"dropdown-item\" href=\"https://www.opigno.org\" target=\"_blank\">
              <span>";
            // line 147
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Help"));
            echo "</span>
            </a>
            ";
            // line 149
            if (($context["is_admin"] ?? null)) {
                // line 150
                echo "              <a class=\"dropdown-item about\" href=\"#about\" data-toggle=\"modal\" data-target=\"#aboutModal\">
                <span>";
                // line 151
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("About"));
                echo "</span>
              </a>
            ";
            }
            // line 154
            echo "            <a class=\"dropdown-item primary text-center\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("user.logout"));
            echo "\">
              <span>";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
            echo "</span>
            </a>
          </div>
        </div>
        <button class=\"navbar-toggler\"></button>
      </div>
    ";
        }
        // line 162
        echo "  </div>
  <div class=\"search-trigger d-flex align-items-center\">
    <a href=\"#\">
      <div class=\"picto search\">";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("search"));
        echo "</div>
    </a>
  </div>
  <div id=\"search-form\" style=\"display: none;\">
      ";
        // line 169
        if ((isset($context["opigno_search_form"]) || array_key_exists("opigno_search_form", $context))) {
            // line 170
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["opigno_search_form"] ?? null)), "html", null, true);
            echo "
      ";
        } else {
            // line 172
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["search_form"] ?? null)), "html", null, true);
            echo "
      ";
        }
        // line 174
        echo "  </div>
</header>

";
        // line 177
        if (($context["is_admin"] ?? null)) {
            // line 178
            echo "  <div class=\"modal\" id=\"aboutModal\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <div class=\"flex-1\">
            <div><strong class=\"text-uppercase\">";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("About"));
            echo "</strong></div>
          </div>
          <button type=\"button\" class=\"close-dropdown\" data-dismiss=\"modal\">
            <span>&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"d-flex\">
            <div class=\"left-col mr-4\">
              <img src=\"";
            // line 192
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["opigno_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("opigno logo"));
            echo "\">
            </div>
            <div class=\"right-col\">
              <p class=\"text mb-4\">
                ";
            // line 196
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Opigno™ is a Trademark of Connect-i Sàrl, based in Préverenges, Switzerland. For more information regarding Opigno™ please consult the website"));
            echo " <a href=\"https://www.opigno.org\" target=\"_blank\">www.opigno.org</a>.
              </p>
              <p class=\"version\">
                <span class=\"mr-3\">";
            // line 199
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version :"));
            echo "</span>
                ";
            // line 200
            if (($context["opigno_lms_release"] ?? null)) {
                // line 201
                echo "                  <span class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["opigno_lms_updates"] ?? null)), "html", null, true);
                echo "\">Opigno ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["opigno_lms_release"] ?? null)), "html", null, true);
                echo "</span> ";
                // line 202
                echo "                ";
            } else {
                // line 203
                echo "                  <span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("N/A"));
                echo "</span>
                ";
            }
            // line 205
            echo "              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 213
        echo "
";
        // line 214
        if ($this->getAttribute(($context["page"] ?? null), "menu", [])) {
            // line 215
            echo "  <div id=\"menu-wrapper\" class=\"container\" role=\"complementary\">
    <div class=\"bg-faded\">
      ";
            // line 217
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "menu", [])), "html", null, true);
            echo "
      <div class=\"d-md-none\">
        <nav id=\"mobile-menu\">
          <ul>
            <li>
              <a href=\"";
            // line 222
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("view.search_content.page_1"));
            echo "\" class=\"search ";
            if ((($context["route_name"] ?? null) == "view.search_content.page_1")) {
                echo "is-active";
            }
            echo "\">
                ";
            // line 223
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Search"));
            echo "
              </a>
            </li>
            ";
            // line 226
            if (($context["logged_in"] ?? null)) {
                // line 227
                echo "              <li>
                <a href=\"";
                // line 228
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.canonical", ["user" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
                echo "\" class=\"user ";
                if ((($context["route_name"] ?? null) == "entity.user.canonical")) {
                    echo "is-active";
                }
                echo "\">
                  <span>";
                // line 229
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("User profile"));
                echo "</span>
                </a>
              </li>
              <li>
                <a href=\"";
                // line 233
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("entity.user.edit_form", ["user" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
                echo "\" class=\"administration ";
                if ((($context["route_name"] ?? null) == "entity.user.edit_form")) {
                    echo "is-active";
                }
                echo "\">
                  <span>";
                // line 234
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Settings"));
                echo "</span>
                </a>
              </li>
              <li>
                <a href=\"https://www.opigno.org\" target=\"_blank\" class=\"help\">
                  <span>";
                // line 239
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Help"));
                echo "</span>
                </a>
              </li>
              <li>
                <a href=\"";
                // line 243
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("user.logout"));
                echo "\" class=\"logout\">
                  <span>";
                // line 244
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Logout"));
                echo "</span>
                </a>
              </li>
            ";
            }
            // line 248
            echo "          </ul>
        </nav>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@platon/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 248,  579 => 244,  575 => 243,  568 => 239,  560 => 234,  552 => 233,  545 => 229,  537 => 228,  534 => 227,  532 => 226,  526 => 223,  518 => 222,  510 => 217,  506 => 215,  504 => 214,  501 => 213,  491 => 205,  485 => 203,  482 => 202,  476 => 201,  474 => 200,  470 => 199,  464 => 196,  455 => 192,  443 => 183,  436 => 178,  434 => 177,  429 => 174,  423 => 172,  417 => 170,  415 => 169,  408 => 165,  403 => 162,  393 => 155,  388 => 154,  382 => 151,  379 => 150,  377 => 149,  372 => 147,  366 => 144,  362 => 143,  357 => 141,  353 => 140,  346 => 136,  342 => 135,  330 => 130,  326 => 129,  318 => 124,  314 => 123,  310 => 122,  303 => 118,  297 => 114,  291 => 112,  289 => 111,  284 => 109,  277 => 105,  272 => 103,  268 => 102,  264 => 101,  260 => 100,  253 => 96,  247 => 92,  241 => 90,  239 => 89,  234 => 87,  229 => 84,  223 => 81,  220 => 80,  216 => 78,  207 => 75,  202 => 74,  198 => 73,  195 => 72,  193 => 71,  186 => 67,  180 => 63,  174 => 61,  172 => 60,  165 => 55,  159 => 52,  156 => 51,  152 => 49,  143 => 46,  138 => 45,  134 => 44,  131 => 43,  129 => 42,  122 => 38,  116 => 34,  110 => 32,  108 => 31,  103 => 28,  95 => 23,  87 => 18,  78 => 11,  76 => 10,  73 => 9,  70 => 8,  64 => 5,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@platon/layout/header.html.twig", "C:\\xampp\\htdocs\\isonlms\\profiles\\opigno_lms\\themes\\contrib\\platon\\templates\\layout\\header.html.twig");
    }
}
