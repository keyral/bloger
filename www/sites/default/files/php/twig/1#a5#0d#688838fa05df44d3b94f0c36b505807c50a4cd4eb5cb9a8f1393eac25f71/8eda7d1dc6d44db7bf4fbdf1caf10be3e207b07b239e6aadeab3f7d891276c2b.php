<?php

/* themes/custom/blog/templates/region/region--header.html.twig */
class __TwigTemplate_a50d688838fa05df44d3b94f0c36b505807c50a4cd4eb5cb9a8f1393eac25f71 extends Twig_Template
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null))));
        // line 23
        echo "<h1>voici mon header ;)</h1>
";
        // line 24
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 25
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 26
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/blog/templates/region/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 26,  26 => 25,  24 => 24,  21 => 23,  19 => 18,);
    }
}
