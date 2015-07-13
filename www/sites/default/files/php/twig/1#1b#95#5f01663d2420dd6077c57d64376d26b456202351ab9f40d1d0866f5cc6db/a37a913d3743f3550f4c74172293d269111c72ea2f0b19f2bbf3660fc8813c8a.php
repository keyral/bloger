<?php

/* core/modules/node/templates/node-add-list.html.twig */
class __TwigTemplate_1b955f01663d2420dd6077c57d64376d26b456202351ab9f40d1d0866f5cc6db extends Twig_Template
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
        if ( !twig_test_empty((isset($context["types"]) ? $context["types"] : null))) {
            // line 19
            echo "  <dl>
    ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 21
                echo "      <dt>";
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "add_link", array()), "html", null, true);
                echo "</dt>
      <dd>";
                // line 22
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["type"], "description", array()), "html", null, true);
                echo "</dd>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  </dl>
";
        } else {
            // line 26
            echo "  <p>
    ";
            // line 27
            $context["create_content"] = $this->env->getExtension('drupal_core')->getPath("node.type_add");
            // line 28
            echo "    ";
            echo t("You have not created any content types yet. Go to the <a href=\"@create_content\">content type creation page</a> to add a new content type.", array("@create_content" =>             // line 29
(isset($context["create_content"]) ? $context["create_content"] : null), ));
            // line 31
            echo "  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/node-add-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  52 => 29,  50 => 28,  48 => 27,  45 => 26,  41 => 24,  33 => 22,  28 => 21,  24 => 20,  21 => 19,  19 => 18,);
    }
}
