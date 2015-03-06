<?php

/* core/modules/update/templates/update-project-status.html.twig */
class __TwigTemplate_539ebc43c6614427b34ac4c97d2730407e50cc643d248d1cadf278b96f20af8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 33
        $context["status_classes"] = array(0 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("security-error") : ("")), 1 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("revoked") : ("")), 2 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("not-supported") : ("")), 3 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_CURRENT"))) ? ("not-current") : ("")), 4 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_CURRENT"))) ? ("current") : ("")));
        // line 41
        echo "<div class=\"version-status\">";
        // line 42
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array())) {
            // line 43
            echo "<span";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "attributes", array()), "addClass", array(0 => (isset($context["status_classes"]) ? $context["status_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array()), "html", null, true);
            echo "</span>";
        } else {
            // line 45
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "reason", array()), "html", null, true);
        }
        // line 47
        echo "  <span class=\"icon\">";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "icon", array()), "html", null, true);
        echo "</span>
</div>

<div class=\"project\">";
        // line 51
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 52
            echo "<a href=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 54
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        // line 56
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["existing_version"]) ? $context["existing_version"] : null), "html", null, true);
        echo "
  ";
        // line 57
        if ((((isset($context["install_type"]) ? $context["install_type"] : null) == "dev") && (isset($context["datestamp"]) ? $context["datestamp"] : null))) {
            // line 58
            echo "    <span class=\"version-date\">(";
            echo twig_drupal_escape_filter($this->env, (isset($context["datestamp"]) ? $context["datestamp"] : null), "html", null, true);
            echo ")</span>
  ";
        }
        // line 60
        echo "</div>

";
        // line 62
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 63
            echo "  <div class=\"versions\">
    ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 65
                echo "      ";
                echo twig_drupal_escape_filter($this->env, $context["version"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "  </div>
";
        }
        // line 69
        echo "
";
        // line 71
        $context["extra_classes"] = array(0 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute((isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-not-supported") : ("")));
        // line 77
        echo "<div class=\"info\">
  ";
        // line 78
        if ((isset($context["extras"]) ? $context["extras"] : null)) {
            // line 79
            echo "    <div class=\"extra\">
      ";
            // line 80
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extras"]) ? $context["extras"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extra"]) {
                // line 81
                echo "        <div";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["extra"], "attributes", array()), "addClass", array(0 => (isset($context["extra_classes"]) ? $context["extra_classes"] : null)), "method"), "html", null, true);
                echo ">
          ";
                // line 82
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["extra"], "label", array()), "html", null, true);
                echo ": ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["extra"], "data", array()), "html", null, true);
                echo "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </div>
  ";
        }
        // line 87
        echo "  <div class=\"includes\">
    ";
        // line 88
        $context["includes"] = twig_join_filter((isset($context["includes"]) ? $context["includes"] : null), ", ");
        // line 89
        echo "    ";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 90
            echo "      ";
            echo twig_render_var(t("Includes:"));
            echo "
      <ul>
        <li class=\"first odd\">
          ";
            // line 93
            echo t("Enabled: %includes", array("%includes" => (isset($context["includes"]) ? $context["includes"] : null), ));
            // line 96
            echo "        </li>
        <li class=\"last even\">
          ";
            // line 98
            $context["disabled"] = twig_join_filter((isset($context["disabled"]) ? $context["disabled"] : null), ", ");
            // line 99
            echo "          ";
            echo t("Disabled: %disabled", array("%disabled" => (isset($context["disabled"]) ? $context["disabled"] : null), ));
            // line 102
            echo "        </li>
      </ul>
    ";
        } else {
            // line 105
            echo "      ";
            echo t("Includes: %includes", array("%includes" => (isset($context["includes"]) ? $context["includes"] : null), ));
            // line 108
            echo "    ";
        }
        // line 109
        echo "  </div>

  ";
        // line 111
        if ((isset($context["base_themes"]) ? $context["base_themes"] : null)) {
            // line 112
            echo "    ";
            $context["basethemes"] = twig_join_filter((isset($context["base_themes"]) ? $context["base_themes"] : null), ", ");
            // line 113
            echo "    ";
            // line 114
            echo "    <div class=\"basethemes\">
      ";
            // line 115
            echo t("Depends on: !basethemes", array("!basethemes" => (isset($context["basethemes"]) ? $context["basethemes"] : null), ));
            // line 118
            echo "    </div>
  ";
        }
        // line 120
        echo "
  ";
        // line 121
        if ((isset($context["sub_themes"]) ? $context["sub_themes"] : null)) {
            // line 122
            echo "    ";
            $context["subthemes"] = twig_join_filter((isset($context["sub_themes"]) ? $context["sub_themes"] : null), ", ");
            // line 123
            echo "    <div class=\"subthemes\">
      ";
            // line 124
            echo t("Required by: %subthemes", array("%subthemes" => (isset($context["subthemes"]) ? $context["subthemes"] : null), ));
            // line 127
            echo "    </div>
  ";
        }
        // line 129
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-project-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 129,  200 => 127,  198 => 124,  195 => 123,  192 => 122,  190 => 121,  187 => 120,  183 => 118,  181 => 115,  178 => 114,  176 => 113,  173 => 112,  171 => 111,  167 => 109,  164 => 108,  161 => 105,  156 => 102,  153 => 99,  151 => 98,  147 => 96,  145 => 93,  138 => 90,  135 => 89,  133 => 88,  130 => 87,  126 => 85,  115 => 82,  110 => 81,  106 => 80,  103 => 79,  101 => 78,  98 => 77,  96 => 71,  93 => 69,  89 => 67,  80 => 65,  76 => 64,  73 => 63,  71 => 62,  67 => 60,  61 => 58,  59 => 57,  54 => 56,  51 => 54,  44 => 52,  42 => 51,  35 => 47,  32 => 45,  25 => 43,  23 => 42,  21 => 41,  19 => 33,);
    }
}
