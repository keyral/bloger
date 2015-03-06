<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_14bbaf62976f68e40eeca1c960a5436b5f55dae541fc6cc52b2f0b905af03f66 extends Twig_Template
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
        // line 15
        echo "<select";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["options"]) ? $context["options"] : null), "html", null, true);
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 15,);
    }
}
