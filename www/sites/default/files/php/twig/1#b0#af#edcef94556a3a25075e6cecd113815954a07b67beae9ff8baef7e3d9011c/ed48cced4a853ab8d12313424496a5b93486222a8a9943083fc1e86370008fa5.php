<?php

/* core/modules/system/templates/links.html.twig */
class __TwigTemplate_b0afedcef94556a3a25075e6cecd113815954a07b67beae9ff8baef7e3d9011c extends Twig_Template
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
        // line 39
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 40
            if ((isset($context["heading"]) ? $context["heading"] : null)) {
                // line 41
                if ($this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array())) {
                    // line 42
                    echo "<";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true);
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true);
                    echo "</";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "level", array()), "html", null, true);
                    echo ">";
                } else {
                    // line 44
                    echo "<h2";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading"]) ? $context["heading"] : null), "text", array()), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 47
            echo "<ul";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
            echo ">";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 49
                echo "<li";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => \Drupal\Component\Utility\Html::getClass($context["key"])), "method"), "html", null, true);
                echo ">";
                // line 50
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 51
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                } elseif ($this->getAttribute(                // line 52
$context["item"], "text_attributes", array())) {
                    // line 53
                    echo "<span";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text_attributes", array()), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                    echo "</span>";
                } else {
                    // line 55
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                }
                // line 57
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 59,  71 => 57,  68 => 55,  61 => 53,  59 => 52,  57 => 51,  55 => 50,  51 => 49,  47 => 48,  43 => 47,  35 => 44,  25 => 42,  23 => 41,  21 => 40,  19 => 39,);
    }
}
