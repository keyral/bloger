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
        $context["status_classes"] = array(0 => ((($this->getAttribute(        // line 34
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-update__status--security-error") : ("")), 1 => ((($this->getAttribute(        // line 35
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-update__status--revoked") : ("")), 2 => ((($this->getAttribute(        // line 36
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-update__status--not-supported") : ("")), 3 => ((($this->getAttribute(        // line 37
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_CURRENT"))) ? ("project-update__status--not-current") : ("")), 4 => ((($this->getAttribute(        // line 38
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_CURRENT"))) ? ("project-update__status--current") : ("")));
        // line 41
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "attributes", array()), "addClass", array(0 => "project-update__status", 1 => (isset($context["status_classes"]) ? $context["status_classes"] : null)), "method"), "html", null, true);
        echo ">";
        // line 42
        if ($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array())) {
            // line 43
            echo "<span>";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "label", array()), "html", null, true);
            echo "</span>";
        } else {
            // line 45
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "reason", array()), "html", null, true);
        }
        // line 47
        echo "  <span class=\"project-update__status-icon\">
    ";
        // line 48
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "icon", array()), "html", null, true);
        echo "
  </span>
</div>

<div class=\"project-update__title\">";
        // line 53
        if ((isset($context["url"]) ? $context["url"] : null)) {
            // line 54
            echo "<a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</a>";
        } else {
            // line 56
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        }
        // line 58
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["existing_version"]) ? $context["existing_version"] : null), "html", null, true);
        echo "
  ";
        // line 59
        if ((((isset($context["install_type"]) ? $context["install_type"] : null) == "dev") && (isset($context["datestamp"]) ? $context["datestamp"] : null))) {
            // line 60
            echo "    <span class=\"project-update__version-date\">(";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["datestamp"]) ? $context["datestamp"] : null), "html", null, true);
            echo ")</span>
  ";
        }
        // line 62
        echo "</div>

";
        // line 64
        if ((isset($context["versions"]) ? $context["versions"] : null)) {
            // line 65
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["versions"]) ? $context["versions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 66
                echo "    ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["version"], "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 69
        echo "
";
        // line 71
        $context["extra_classes"] = array(0 => ((($this->getAttribute(        // line 72
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SECURE"))) ? ("project-not-secure") : ("")), 1 => ((($this->getAttribute(        // line 73
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_REVOKED"))) ? ("project-revoked") : ("")), 2 => ((($this->getAttribute(        // line 74
(isset($context["project"]) ? $context["project"] : null), "status", array()) == twig_constant("UPDATE_NOT_SUPPORTED"))) ? ("project-not-supported") : ("")));
        // line 77
        echo "<div class=\"project-updates__details\">
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
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["extra"], "attributes", array()), "addClass", array(0 => (isset($context["extra_classes"]) ? $context["extra_classes"] : null)), "method"), "html", null, true);
                echo ">
          ";
                // line 82
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "label", array()), "html", null, true);
                echo ": ";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["extra"], "data", array()), "html", null, true);
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
        echo "  ";
        $context["includes"] = twig_join_filter((isset($context["includes"]) ? $context["includes"] : null), ", ");
        // line 88
        echo "  ";
        if ((isset($context["disabled"]) ? $context["disabled"] : null)) {
            // line 89
            echo "    ";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Includes:"));
            echo "
    <ul>
      <li>
        ";
            // line 92
            echo t("Enabled: %includes", array("%includes" =>             // line 93
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 95
            echo "      </li>
      <li>
        ";
            // line 97
            $context["disabled"] = twig_join_filter((isset($context["disabled"]) ? $context["disabled"] : null), ", ");
            // line 98
            echo "        ";
            echo t("Disabled: %disabled", array("%disabled" =>             // line 99
(isset($context["disabled"]) ? $context["disabled"] : null), ));
            // line 101
            echo "      </li>
    </ul>
  ";
        } else {
            // line 104
            echo "    ";
            echo t("Includes: %includes", array("%includes" =>             // line 105
(isset($context["includes"]) ? $context["includes"] : null), ));
            // line 107
            echo "  ";
        }
        // line 108
        echo "
  ";
        // line 109
        if ((isset($context["base_themes"]) ? $context["base_themes"] : null)) {
            // line 110
            echo "    ";
            $context["basethemes"] = twig_join_filter((isset($context["base_themes"]) ? $context["base_themes"] : null), ", ");
            // line 111
            echo "    ";
            echo t("Depends on: @basethemes", array("@basethemes" =>             // line 112
(isset($context["basethemes"]) ? $context["basethemes"] : null), ));
            // line 114
            echo "  ";
        }
        // line 115
        echo "
  ";
        // line 116
        if ((isset($context["sub_themes"]) ? $context["sub_themes"] : null)) {
            // line 117
            echo "    ";
            $context["subthemes"] = twig_join_filter((isset($context["sub_themes"]) ? $context["sub_themes"] : null), ", ");
            // line 118
            echo "    ";
            echo t("Required by: %subthemes", array("%subthemes" =>             // line 119
(isset($context["subthemes"]) ? $context["subthemes"] : null), ));
            // line 121
            echo "  ";
        }
        // line 122
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
        return array (  204 => 122,  201 => 121,  199 => 119,  197 => 118,  194 => 117,  192 => 116,  189 => 115,  186 => 114,  184 => 112,  182 => 111,  179 => 110,  177 => 109,  174 => 108,  171 => 107,  169 => 105,  167 => 104,  162 => 101,  160 => 99,  158 => 98,  156 => 97,  152 => 95,  150 => 93,  149 => 92,  142 => 89,  139 => 88,  136 => 87,  132 => 85,  121 => 82,  116 => 81,  112 => 80,  109 => 79,  107 => 78,  104 => 77,  102 => 74,  101 => 73,  100 => 72,  99 => 71,  96 => 69,  86 => 66,  81 => 65,  79 => 64,  75 => 62,  69 => 60,  67 => 59,  62 => 58,  59 => 56,  52 => 54,  50 => 53,  43 => 48,  40 => 47,  37 => 45,  32 => 43,  30 => 42,  26 => 41,  24 => 38,  23 => 37,  22 => 36,  21 => 35,  20 => 34,  19 => 33,);
    }
}
