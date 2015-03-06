<?php

/* core/modules/update/templates/update-report.html.twig */
class __TwigTemplate_7ff27497a67728bdebf62f06104dee1723588a301be1085e6ac9f15e399317eb extends Twig_Template
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
        // line 18
        echo twig_drupal_escape_filter($this->env, (isset($context["last_checked"]) ? $context["last_checked"] : null), "html", null, true);
        echo "

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["project_types"]) ? $context["project_types"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["project_type"]) {
            // line 21
            echo "  <h3>";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["project_type"], "label", array()), "html", null, true);
            echo "</h3>
  ";
            // line 22
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($context["project_type"], "table", array()), "html", null, true);
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "  <p>";
            echo twig_drupal_escape_filter($this->env, (isset($context["no_updates_message"]) ? $context["no_updates_message"] : null), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 24,  34 => 22,  29 => 21,  24 => 20,  19 => 18,);
    }
}
