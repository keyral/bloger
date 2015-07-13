<?php

/* core/modules/system/templates/admin-block-content.html.twig */
class __TwigTemplate_0bf305c65f16e75000e0e34db65b7f3066d54ca156b302a4a588e1378184d314 extends Twig_Template
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
        // line 20
        $context["classes"] = array(0 => "list-group", 1 => ((        // line 22
(isset($context["compact"]) ? $context["compact"] : null)) ? ("compact") : ("")));
        // line 25
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 26
            echo "  <dl";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "      <dt class=\"list-group__link\">";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                echo "</dt>
      ";
                // line 29
                if ($this->getAttribute($context["item"], "description", array())) {
                    // line 30
                    echo "        <dd class=\"list-group__description\">";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
                    echo "</dd>
      ";
                }
                // line 32
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  </dl>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/admin-block-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 33,  46 => 32,  40 => 30,  38 => 29,  33 => 28,  29 => 27,  24 => 26,  22 => 25,  20 => 22,  19 => 20,);
    }
}
