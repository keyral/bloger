<?php

/* core/modules/user/templates/user.html.twig */
class __TwigTemplate_6528ad92ab0898407350c759f511c87e7a8f85360ce6545e7f2a6b5c0afa02b9 extends Twig_Template
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
        // line 27
        echo "<article";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 28
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 29
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 31
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 31,  26 => 29,  24 => 28,  19 => 27,);
    }
}
